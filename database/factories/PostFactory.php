<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             
            'title'     => $this->faker->text(20),
            'lead'      => $this->faker->text(200),
            'content'   => $this->faker->text(200),
            'author_id' => $this->factory('App\User'),
            'topic_id'  => $this->factory('App\Topic'),

        ];
    }
}