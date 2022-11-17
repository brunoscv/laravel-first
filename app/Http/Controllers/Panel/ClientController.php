<?php
/**
 * @package    Controller
 * @author     Marcelo Alves <marceloalvessoft@gmail.com>
 * @date       20/07/2021 15:31:09
 */

declare(strict_types=1);

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Api\ApiBaseController;
use App\Http\Requests\ClientStoreRequest;
use App\Http\Requests\ClientUpdateRequest;
use App\Models\Client;
use App\Models\Plano;
use App\Services\ClientService;
use App\Traits\LogActivity;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use JsValidator;
use App\Utils\PDF as PDF;
use Carbon\Carbon;
use App\Calculos\Price;
use App\Calculos\Sac;

class ClientController extends ApiBaseController
{
    use LogActivity;

    private $service;
    private $label;

    public function __construct(ClientService $service)
    {

        $this->service = $service;
        $this->label = 'Clientes';
    }

    public function index(): View
    {

        $this->log(__METHOD__);

        $this->authorize('viewAny', Client::class);

        $data = $this->service->paginate(20);

        return view('panel.clients.index')
            ->with([
                'data' => $data,
                'label' => $this->label,
            ]);
    }

    public function create(): View
    {

        $this->log(__METHOD__);

        $this->authorize('create', Client::class);

        $validatorRequest = new ClientStoreRequest();
        $validator = JsValidator::make($validatorRequest->rules(), $validatorRequest->messages());

        return view('panel.clients.form')
            ->with([
                'validator' => $validator,
                'label' => $this->label,
            ]);
    }

    public function store(ClientStoreRequest $clientStoreRequest)
    {

        $this->service->create($clientStoreRequest->all());

        return redirect()->route('clients.' . request('routeTo'))
            ->with([
                'message' => 'Criado com sucesso',
                'messageType' => 's',
            ]);
    }

    public function edit(Client $client): View
    {

        $this->log(__METHOD__);

        $this->authorize('update', $client);

        $validatorRequest = new ClientUpdateRequest();
        $validator = JsValidator::make($validatorRequest->rules(), $validatorRequest->messages());

        return view('panel.clients.form')
            ->with([
                'item' => $client,
                'label' => $this->label,
                'validator' => $validator,
            ]);
    }

    public function update(ClientUpdateRequest $request, Client $client): RedirectResponse
    {

        $this->log(__METHOD__);

        $this->service->update($request->all(), $client);

        return redirect()->route('clients.index')
            ->with([
                'message' => 'Atualizado com sucesso',
                'messageType' => 's',
            ]);
    }

    public function destroy(Client $client): JsonResponse
    {

        $this->log(__METHOD__);

        try {

            if (!\Auth::user()->can('delete', $client)) {

                return $this->sendUnauthorized();
            }

            $this->service->delete($client);

            return $this->sendResponse([]);

        } catch (Exception $exception) {

            return $this->sendError('Server Error.', $exception);
        }
    }

    public function show(Client $client): JsonResponse
    {

        $this->log(__METHOD__);
        $this->authorize('update', $client);

        return response()->json($client, 200, [], JSON_PRETTY_PRINT);
    }

    public function download(Client $client)
    {

        session([
            'renda' => $client->renda,
            'nascimento' => $client->nascimento
        ]);

        $planos = Plano::all();
        $planos = $planos->map(function ($item) {
            $className = "App\Calculos\\" . $item->calculo;
            $item->ca = new $className(session('renda'), Carbon::parse(session('nascimento')), $item);
            return $item;
        });
        
        $idade = now()->diffInYears(Carbon::parse(session('nascimento')));

        $data = ['item' => $planos, 'idade' => $idade,  'renda' => $client->renda, 'data' => Carbon::now()->format('d/m/Y H:i')];

        return PDF::loadView($data, "panel.clients.download");

    }

    public function leads()
    {

        $clientes = Client::all();
        $data = ['data' => $clientes];
        
        return PDF::loadView($data, "panel.clients.leads");

    }
}
