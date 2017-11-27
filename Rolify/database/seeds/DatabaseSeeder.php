<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run(){
		$this->call(CategoriasSeeder::class);
		// $this->call(MonstersSeeder::class);
		$this->call(ItemsSeeder::class);
		$this->call(MonsterSeeder::class);
		}
}
