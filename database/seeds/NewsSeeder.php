<?php

use Illuminate\Database\Seeder;
use App\User;
class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::all()->each(function (App\User $u){
            $u->news()->saveMany(factory(App\News::class, 2)->make());
        });
    }
}
