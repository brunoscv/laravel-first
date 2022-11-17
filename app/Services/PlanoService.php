<?php
/**
 * @package    Services
 * @author    Marcelo Alves Pereira <marceloalvessoft@gmail.com>
 * @date       20/07/2021 15:31:57
 */

declare(strict_types=1);

namespace App\Services;

use App\Models\Plano;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class PlanoService
{


    private function buildQuery(): Builder
    {

        $query = Plano::query();

        $query->when(request('id'), function ($query, $id) {

            return $query->whereId($id);
        });

        $query->when(request('search'), function ($query, $search) {

            return $query->where('id', 'LIKE', '%' . $search . '%');
        });

        return $query;
    }

    public function paginate($limit): LengthAwarePaginator
    {

        return $this->buildQuery()->paginate($limit);
    }

    public function all(): Collection
    {

        return $this->buildQuery()->get();
    }

    public function find($id): ?Plano
    {

        //return Cache::remember('Plano_find_' . $id, config('cache.cache_time'), function () use ($id) {
        return Plano::find($id);
        //});
    }

    public function create(array $data): Plano
    {

        return DB::transaction(function () use ($data) {

            $model = new Plano();
            $model->fill($data);
            #$model->user_creator_id = \Auth::id();
            #$model->user_updater_id = \Auth::id();
            $model->save();

            return $model;
        });
    }

    public function update(array $data, Plano $model): Plano
    {

        $model->fill($data);
        #$model->user_updater_id = \Auth::id();
        $model->save();

        return $model;
    }

    public function delete(Plano $model): ?bool
    {
        #$model->user_eraser_id = \Auth::id();
        #$model->timestamps = false;
        #$model->save();

        return $model->delete();
    }

    public function lists(): array
    {
        //return Cache::remember('Plano_lists', config('cache.cache_time'), function () {

        return Plano::orderBy('name')
            ->pluck('name', 'id')
            ->toArray();
        //});
    }

    public function findList(): Collection
    {

        //return Cache::tags('planos')->remember('planos_findList_' . $cacheKey, config('cache.cache_time'), function () {

        $query = Plano::query();

        $query->when(request('search'), function ($query, $search) {

            return $query->where('name', 'LIKE', '%' . $search . '%');
        });

        return $query->get(['id','name']);
        //});
    }

}
