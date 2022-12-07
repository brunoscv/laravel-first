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

            $storeRequest = new SurveyStoreRequest();
            $validator = Validator::make(request()->all(), $storeRequest->rules());

            if($validator->fails()){
                return back()->withErrors($validator->errors())->withInput();
            }

            //dd(request()->all());
            //dd($item);

            $item = $this->service->create(request()->all());
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
