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

            //dd(request()->all());

            if($validator->fails()){
                return back()->withErrors($validator->errors())->withInput();
            }

            $item = $this->service->create(request()->all());

            //dd($item);

            session()->flash('message', 'Sua vistoria foi agendada com sucesso!');

            return redirect()->route('front.index');

        } catch (\Exception $e) {

            //return $this->sendError('Server Error.', $e);
            return back()->withErrors($e);

        }
    }
}