<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Faker\Factory;

abstract class BaseCategoryController extends Controller
{
    public function getCategories() {
        $faker = Factory::create();
        for($i = 0; $i < 2; $i++ ) {
            $categories[] = [
                'id' => $faker->uuid(),
                'name' => $faker->name(),
            ];
        }
        return $categories;
    }
}
