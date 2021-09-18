<?php

namespace App\Http\Repositories\Category;
use App\Http\Repositories\{CoreRepository};
use App\Models\Category as Model;
class СategoryRepository extends CoreRepository
{
    public function getModelClass() {
        return Model::class;
    } 
    public function getAll() {
        $categories = $this->startConditions()->all();
        return $categories;
    }
}
