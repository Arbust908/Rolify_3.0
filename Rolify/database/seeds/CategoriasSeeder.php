<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$path = 'seeding/';	// PATH de la carpeta que contiene los archivos

		$test = Storage::directories($path);	//Se trae lista de TODOS los subdirectorios

		foreach ($test as $cat) {
			$categoria = explode('/', $cat);
			$categoria = $categoria[1];
			$categorias[] = $categoria;
		}

		foreach ($categorias as $categoria) {
			$cat = new Categoria;

			$cat->nombre = $categoria;

			$cat->save();
		}
    }
}
