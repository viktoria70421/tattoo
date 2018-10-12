<?php

use Illuminate\Database\Seeder;
use App\Maintest;

class ManetestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Maintest::create([ 
		'name'=>'Добро пожаловать',
		'body'=>'privet',
		'url'=>'index',
		'user_id'=>0,
		]);
    }
}
