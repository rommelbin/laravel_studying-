<?php

namespace Database\Factories;

use App\Models\news;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str as SupportStr;
use Str;

class newsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = news::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->title = $this->faker->name();
        return [
            'title' => $this->title,
            'slug' => SupportStr::slug($this->title),
            'category_id' => rand(1,5),
            'description' => $this->faker->text(150),
            'author' => $this->faker->name()
        ];
    }
}
