<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Api\ApiBaseController;
use App\Services\SurveyService;
use App\Http\Requests\SurveyStoreRequest;
use App\Http\Requests\SurveyUpdateRequest;
use App\Http\Resources\SurveyCollection;
use App\Http\Resources\SurveyResource;
use Carbon\Carbon;
use Exception;
use http\Client\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use App\Utils\PDF as PDF;
use Validator;
use JsValidator;
use App\Models\Survey;

use Illuminate\Support\Facades\URL;

class FrontController extends ApiBaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $service;
    private $label;

    public function __construct(SurveyService $service)
    {

        $this->service = $service;
        $this->label = 'Vistorias';
    }

    public function index()
    {
        return view('public.index');
        //return redirect()->route('front.index');
    }

    public function save() {

        $this->service->create();

        return redirect()->route('public.index');
    }

    public function store()
    {
        try {

            $save = array();
            $save = request()->all();

            //dd($save['payment']);

            $storeRequest = new SurveyStoreRequest();
            $validator = Validator::make(request()->all(), $storeRequest->rules());

            if($validator->fails()){
                return back()->withErrors($validator->errors())->withInput();
            }

            if($save['payment'] == "BOLETO" ) {
                // ENVIANDO CURL PARA GERAR BOLETO PAGSEGURO
                /* API URL */
                $url = 'https://ws.pagseguro.uol.com.br/recurring-payment/boletos?email=suportetop01@hotmail.com&token=' . env('PAGSEGURO_SECRET');
                /* Init cURL resource */
                $ch = curl_init($url);
                /* Array Parameter Data */
                $data = [
                    "reference" => "ex-00001",
                    "firstDueDate" => date('Y-m-d', strtotime("+1 day")),
                    "numberOfPayments" => "1",
                    "periodicity" => "monthly",
                    "amount" => "131.40",
                    "description" => $save['service'],
                    "customer" => [
                        "document" => [
                            "type" => "CPF",
                            "value" => $save['cpf']
                        ],
                        "name" => $save['name'],
                        "email" => $save['email'],
                        "phone" => [
                            "areaCode" => "86",
                            "number" => "999999999"
                        ]
                    ]
                ];
                /* pass encoded JSON string to the POST fields */
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                /* set the content type json */
                $headers = [];
                $headers[] = 'Content-Type:application/json';
                $headers[] = 'Accept:application/json';
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                /* set return type json */
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                /* execute request */
                $result = curl_exec($ch);
                $err = curl_error($ch);
                /* close cURL resource */
                curl_close($ch);

                if ($err) {
                    //echo "cURL Error #:" . $err;
                    return $this->sendError('Server Error.', $err);
                }
                // ENVIANDO CURL PARA GERAR BOLETO PAGSEGURO
                
                //Montando novos elementos do  array de vistorias com informações do boleto caso existam
                $r = json_decode($result);
                //dd($r);
                $save['number_boleto'] = $r->boletos[0]->barcode ? $r->boletos[0]->barcode : '';
                $save['url_boleto'] = $r->boletos[0]->paymentLink ? $r->boletos[0]->paymentLink : '';
                $save['code_boleto'] = $r->boletos[0]->code ? $r->boletos[0]->code : '';
                //Montando novo array com informações do boleto caso existam
            }

           
            $save['date'] = (Carbon::createFromFormat('d/m/Y', $save['date'])->format('Y-m-d'));

           //dd($save);
            $item = $this->service->create($save);
                
            session()->flash('message', 'Sua vistoria foi agendada com sucesso!');
            return redirect()->route('confirmationMsg', ['id' => $item]);


        } catch (\Exception $e) {

            return $this->sendError('Server Error.', $e);
            //return back()->withErrors($e);
            //session()->flash('error', 'Não foi possivel realizar o agendamento! Confira seus dados e tente novamente');
            //return redirect()->route('front.index');

        }
    }

    public function show() {

    }

    public function confirmation($id) {

        try {
            $data = Survey::whereId($id)->first();

            //dd($data);
            return view('public.confirmation', compact("data"));
        } catch (\Throwable $e) {
            return $this->sendError('Server Error.', $e);
        }
        
        
    }
}