<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => '23',
                'slug' => '23-dias',
                'draft' => 0,
                'body' => "Faltam 23 dias.",
                'days_left' => 23,
                'created_at' => '2019-06-05 22:21:00'
            ],
            [
                'title' => '24',
                'slug' => '24-dias',
                'draft' => 0,
                'body' => "Faltam 24 dias.",
                'days_left' => 24,
                'created_at' => '2019-06-04 22:12:00'
            ],
            [
                'title' => '25',
                'slug' => '25-dias',
                'draft' => 0,
                'body' => "Faltam 25 dias.",
                'days_left' => 25,
                'created_at' => '2019-06-03 09:45:00'
            ],
            [
                'title' => '26',
                'slug' => '26-dias',
                'draft' => 0,
                'body' => "Faltam 26 dias.",
                'days_left' => 26,
                'created_at' => '2019-06-02 12:20:00'
            ],
            [
                'title' => '27',
                'slug' => '27-dias',
                'draft' => 0,
                'body' => "Faltam 27 dias.",
                'days_left' => 27,
                'created_at' => '2019-06-01 21:35:00'
            ],
            [
                'title' => '28',
                'slug' => '28-dias',
                'draft' => 0,
                'body' => "Faltam 28 dias.",
                'days_left' => 28,
                'created_at' => '2019-05-31 12:20:00'
            ],
            [
                'title' => '29',
                'slug' => '29-dias',
                'draft' => 0,
                'body' => "Faltam 29 dias.",
                'days_left' => 29,
                'created_at' => '2019-05-30 12:20:00'
            ],
            [
                'title' => '30',
                'slug' => '30-dias',
                'draft' => 0,
                'body' => "Faltam 30 dias.",
                'days_left' => 30,
                'created_at' => '2019-05-29 12:20:00'
            ]
        ]);
    }
}
