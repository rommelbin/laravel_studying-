<?php

namespace App\Http\Repositories\News;
use App\Http\Repositories\{CoreRepository};
use App\Models\News as Model;
/** 
* @var App\Models\News Model
*/  
class NewsRepository extends CoreRepository
{
    public function getModelClass() {
        return Model::class;
    } 
    public function getAll() {
        $news = $this->startConditions()->all();
        return $news;
    }
    public function getOneById($id) {
        $news = $this->startConditions()->findOrFail($id);
        return $news;
    }
    public function saveData($data) {
        $this->startConditions()->create($data)->save();
    }
}
