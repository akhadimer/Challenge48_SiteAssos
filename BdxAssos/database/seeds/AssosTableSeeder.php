<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Asso;

class AssosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        foreach ($users as $user){
            $user->assos()->saveMany(factory(Asso::class, 3)->make());
        }
    }
}
