<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Faker\Factory;
use Illuminate\Http\Request;

class BaseNewsController extends Controller
{
    // some future features
    public function getNews() {
        $faker = Factory::create();
        for($i = 0; $i < 2; $i++ ) {
            $news[] = [
                'id' => $faker->uuid(),
                'name' => $faker->name(),
                'email' => $faker->email(),
                'text' => $faker->text(200),
                'created_at' => $faker->date(),
                'updated_at' => $faker->date()
            ];
        }
        return $news;
    }
}
