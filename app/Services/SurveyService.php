<?php
/**
 * @package    Services
 * @author     Marcelo Alves Pereira <marceloalvessoft@gmail.com>
 * @date       09/12/2019 10:25:33
 */
declare(strict_types=1);

namespace App\Services;

use App\Models\Survey;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class SurveyService
{

    public function paginate($limit): LengthAwarePaginator
    {

        return $this->buildQuery()->paginate($limit);
    }

    private function buildQuery(): Builder
    {

        $query = Survey::query();

        $query->when(request('id'), function ($query, $id) {

            return $query->whereId($id);
        });

        $query->when(request('search'), function ($query, $search) {

            return $query->where('name', 'LIKE', '%' . $search . '%');
        });

        return $query->orderBy('name', 'DESC');
    }

    public function all(): Collection
    {

        return $this->buildQuery()->get();
    }

    public function find($id)
    {

        //return Cache::remember('Survey_find_' . $id, config('cache.cache_time'), function () use ($id) {
        return Survey::find($id);
        //});
    }

    public function create($data): Survey
    {

        return DB::transaction(function () use ($data) {

            $model = new Survey();
            $b = $model->fill($data);

            //dd($b);
            //$model->created_at = ;
            #$model->user_updater_id = \Auth::id();
            $a = $model->save();

            

            return $model;
        });
    }

    public function update($data, Survey $model): Survey
    {

        $model->fill($data);
        #$model->user_updater_id = \Auth::id();
        $model->save();

        return $model;
    }

    public function delete(Survey $model)
    {
        #$model->user_eraser_id = \Auth::id();
        $model->save();

        return $model->delete();
    }

    public function lists(): array
    {
        //return Cache::remember('Survey_lists', config('cache.cache_time'), function () {

        return Survey::orderBy('name')
            ->pluck('name', 'id')
            ->toArray();
        //});
    }
}
