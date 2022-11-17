<?php

namespace App\Http\Controllers\Front;

use App\Calculos\Price;
use App\Calculos\Sac;
use App\Http\Controllers\Api\ApiBaseController;

use App\Models\Plano;
use App\Models\User;
use App\Models\Client;
use App\Services\CityService;
use App\Services\UserService;
use App\Services\ClientService;
use App\Http\Requests\ClientStoreRequest;
use Carbon\Carbon;
use Exception;
use http\Client\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use App\Utils\PDF as PDF;

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

    public function __construct(ClientService $service)
    {

        $this->service = $service;
        $this->label = 'Clientes';
    }

    public function index()
    {
        session()->forget([
            'id',
            'nome',
            'telefone',
            'email',
            'renda',
            'nascimento'
        ]);

        return view('public.index');
        //return redirect()->route('front.index');
    }

    public function resultadoStore()
    {

        $date = Carbon::createFromFormat('m/d/Y', request('nascimento'))->format('Y-m-d');
        session([
            'nome' => request('nome'),
            'telefone' => request('telefone'),
            'email' => request('email'),
            'renda' => setCurrency(request('renda')),
            'nascimento' => $date,
        ]);

        $cliente = $this->service->create(session()->all());
        session(['id' =>$cliente->id]);

        return redirect()->route('front.resultado');
    }

    public function resultado()
    {

        if(!session('nome')) {
            return redirect()->route('front.index');
        }
        $planos = Plano::all();

        $maiorValor = 0;

        $planos = $planos->map(function ($item) use (&$maiorValor) {
            $className = "App\Calculos\\" . $item->calculo;
            $item->ca = new $className(session('renda'), Carbon::parse(session('nascimento')), $item);

            $fa =  $item->ca->financialAmount();

            if ($fa > $maiorValor){
                $maiorValor = $fa;
            }

            return $item;
        });


        $idade = now()->diffInYears(Carbon::parse(session('nascimento')));

         return view('public.resultado', [
            'planos' => $planos,
            'idade' => $idade,
            'maiorValor' => $maiorValor,
            'renda' => session('renda')
        ]);
    }

    public function download()
    {
        $assets = URL::to('') . '/assets/img/marca.png';
        $planos = Plano::all();
        $maiorValor = 0;
        $planos = $planos->map(function ($item) use (&$maiorValor) {
            $className = "App\Calculos\\" . $item->calculo;
            $item->ca = new $className(session('renda'), Carbon::parse(session('nascimento')), $item);

            $fa =  $item->ca->financialAmount();

            if ($fa > $maiorValor){
                $maiorValor = $fa;
            }

            return $item;
        });

        $idade = now()->diffInYears(Carbon::parse(session('nascimento')));

        $data = ['item' => $planos, 'idade' => $idade,  'renda' => session('renda'), 'data' => Carbon::now()->format('d/m/Y H:i'), 'maiorValor' => $maiorValor, 'assets' => $assets];

        return PDF::loadView($data, "public.download");

    }

}
