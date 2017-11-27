<?php
use App\Monster;
use Illuminate\Database\Seeder;

class MonsterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
      factory(\App\Monster::class, 10)->create();
    }
}
