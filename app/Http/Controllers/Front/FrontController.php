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
    private $client;
    private $http;

    public function __construct(SurveyService $service)
    {

        $this->service = $service;
        $this->label = 'Vistorias';
        //$this->client = new \GuzzleHttp\Client();

        $this->client = new \GuzzleHttp\Client(['verify' => dirname(__FILE__) . '/cacert.pem']);
        //$this->client->setHttpClient($http);
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

            $storeRequest = new SurveyStoreRequest();
            $validator = Validator::make(request()->all(), $storeRequest->rules());

            if($validator->fails()){
                return back()->withErrors($validator->errors())->withInput();
            }

            if($save['payment'] == "BOLETO" ) {
                // ENVIANDO CURL PARA GERAR BOLETO PAGSEGURO
                /* API URL */
                $url = 'https://api.pagseguro.com/orders';
                /* Init cURL resource */
                $ch = curl_init($url);
                /* Array Parameter Data */
                $data = [
                    "reference_id" => "ex-00001",
                    "customer" => array(
                        "name" => $save['name'],
                        "email" => $save['email'],
                        "tax_id" => $save['cpf'],
                        "phones" => [ 
                            array(
                            "country" => "55",
                            "area" => "86",
                            "number" => "999999999",
                            "type" => "MOBILE") 
                        ],
                    ),
                    "items" => [
                        array (
                        "reference_id" => "ex-10001",
                        "name" => $save['service'],
                        "quantity" => 1,
                        "unit_amount" => 13140),
                    ],
                    "charges" => [
                        array(
                        "reference_id" =>  "ex-10001",
                        "description" =>  $save['service'],
                        "amount" => array("value" => 13140, "currency" => "BRL"),
                        "payment_method" => [
                            "type" =>  "BOLETO",
                            "boleto" =>  array(
                                "due_date" =>  date('Y-m-d', strtotime("+1 day")),
                                "instruction_lines" =>  array(
                                    "line_1" =>  "Pagamento processado para DESC Fatura",
                                    "line_2" =>  "Via PagSeguro"
                                ),
                                "holder" =>  array (
                                    "name" =>  "Jose da Silva",
                                    "tax_id" =>  "22222222222",
                                    "email" =>  "jose@email.com",
                                    "address" =>  array (
                                        "country" =>  "Brasil",
                                        "region" =>  "São Paulo",
                                        "region_code" => "SP",
                                        "city" =>  "Sao Paulo",
                                        "postal_code" =>  "01452002",
                                        "street" =>  "Avenida Brigadeiro Faria Lima",
                                        "number" =>  "1384",
                                        "locality" =>  "Pinheiros"
                                    )
                                )
                            )

                           
                        ]
                        )
                    ]      
                ];
                /* pass encoded JSON string to the POST fields */
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                /* set the content type json */
                $headers = [];
                $headers[] = 'Content-Type:application/json';
                $headers[] = 'Accept:application/json';
                $headers[] = "Authorization: Bearer " . env('PAGSEGURO_SECRET');
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                /* set return type json */
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, dirname(__FILE__) . '/cacert.pem');
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, dirname(__FILE__) . '/cacert.pem');
                //curl_setopt($ch, CURLOPT_CAINFO, dirname(__FILE__) . '/cacert.pem');
              
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
                dd($r);
                //dd($r->charges[0]->payment_method->boleto->barcode);
                $save['number_boleto'] = $r->charges[0]->payment_method->boleto->barcode ? $r->charges[0]->payment_method->boleto->barcode : '';
                $save['url_boleto'] = $r->charges[0]->links[0]->href ? $r->charges[0]->links[0]->href : '';
                $save['code_boleto'] = $r->charges[0]->payment_method->boleto->id ? $r->charges[0]->payment_method->boleto->id : '';
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