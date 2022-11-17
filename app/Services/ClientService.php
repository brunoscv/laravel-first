<?php
/**
 * @package    Services
 * @author    Marcelo Alves Pereira <marceloalvessoft@gmail.com>
 * @date       20/07/2021 15:31:09
 */

declare(strict_types=1);

namespace App\Services;

use App\Models\Client;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClientService
{


    private function buildQuery(): Builder
    {

        $query = Client::query();

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

    private function buildQueryToday(): Builder
    {

        $today = Carbon::now()->format('Y-m-d').'%';
        //$data = Client::where('created_at', 'like', $today)->get();
        $query = Client::query();
        return $query->where('created_at', 'like', $today);
        
    }

    public function paginateToday($limit): LengthAwarePaginator
    {

        return $this->buildQueryToday()->paginate($limit);
    }

    public function all(): Collection
    {

        return $this->buildQuery()->get();
    }

    public function find($id): ?Client
    {

        //return Cache::remember('Client_find_' . $id, config('cache.cache_time'), function () use ($id) {
        return Client::find($id);
        //});
    }

    public function create(array $data): Client
    {

        return DB::transaction(function () use ($data) {

            $model = new Client();
            $model->fill($data);
            #$model->user_creator_id = \Auth::id();
            #$model->user_updater_id = \Auth::id();
            $model->save();

            return $model;
        });
    }

    public function update(array $data, Client $model): Client
    {

        $model->fill($data);
        #$model->user_updater_id = \Auth::id();
        $model->save();

        return $model;
    }

    public function delete(Client $model): ?bool
    {
        #$model->user_eraser_id = \Auth::id();
        #$model->timestamps = false;
        #$model->save();

        return $model->delete();
    }

    public function lists(): array
    {
        //return Cache::remember('Client_lists', config('cache.cache_time'), function () {

        return Client::orderBy('name')
            ->pluck('name', 'id')
            ->toArray();
        //});
    }

    public function findList(): Collection
    {

        //return Cache::tags('clients')->remember('clients_findList_' . $cacheKey, config('cache.cache_time'), function () {

        $query = Client::query();

        $query->when(request('search'), function ($query, $search) {

            return $query->where('name', 'LIKE', '%' . $search . '%');
        });

        return $query->get(['id','name']);
        //});
    }

}
