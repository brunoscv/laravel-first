<?php
/**
 * @package    Controller
 * @author     Marcelo Alves <marceloalvessoft@gmail.com>
 * @date       20/07/2021 15:31:56
 */

declare(strict_types=1);

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Api\ApiBaseController;
use App\Http\Requests\PlanoStoreRequest;
use App\Http\Requests\PlanoUpdateRequest;
use App\Models\Plano;
use App\Services\PlanoService;
use App\Traits\LogActivity;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use JsValidator;

class PlanoController extends ApiBaseController
{
    use LogActivity;

    private $service;
    private $label;

    public function __construct(PlanoService $service)
    {

        $this->service = $service;
        $this->label = 'Plano';
    }

    public function index(): View
    {

        $this->log(__METHOD__);

        $this->authorize('viewAny', Plano::class);

        $data = $this->service->paginate(20);

        return view('panel.planos.index')
            ->with([
                'data' => $data,
                'label' => $this->label,
            ]);
    }

    public function create(): View
    {

        $this->log(__METHOD__);

        $this->authorize('create', Plano::class);

        $validatorRequest = new PlanoStoreRequest();
        $validator = JsValidator::make($validatorRequest->rules(), $validatorRequest->messages());

        return view('panel.planos.form')
            ->with([
                'validator' => $validator,
                'label' => $this->label,
            ]);
    }

    public function store(PlanoStoreRequest $planoStoreRequest)
    {

        $this->service->create($planoStoreRequest->all());

        return redirect()->route('planos.' . request('routeTo'))
            ->with([
                'message' => 'Criado com sucesso',
                'messageType' => 's',
            ]);
    }

    public function edit(Plano $plano): View
    {

        $this->log(__METHOD__);

        $this->authorize('update', $plano);

        $validatorRequest = new PlanoUpdateRequest();
        $validator = JsValidator::make($validatorRequest->rules(), $validatorRequest->messages());

        return view('panel.planos.form')
            ->with([
                'item' => $plano,
                'label' => $this->label,
                'validator' => $validator,
            ]);
    }

    public function update(PlanoUpdateRequest $request, Plano $plano): RedirectResponse
    {

        $this->log(__METHOD__);

        $this->service->update($request->all(), $plano);

        return redirect()->route('planos.index')
            ->with([
                'message' => 'Atualizado com sucesso',
                'messageType' => 's',
            ]);
    }

    public function destroy(Plano $plano): JsonResponse
    {

        $this->log(__METHOD__);

        try {

            if (!\Auth::user()->can('delete', $plano)) {

                return $this->sendUnauthorized();
            }

            $this->service->delete($plano);

            return $this->sendResponse([]);

        } catch (Exception $exception) {

            return $this->sendError('Server Error.', $exception);
        }
    }

    public function show(Plano $plano): JsonResponse
    {

        $this->log(__METHOD__);
        $this->authorize('update', $plano);

        return response()->json($plano, 200, [], JSON_PRETTY_PRINT);
    }
}
