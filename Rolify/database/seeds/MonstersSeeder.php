<?php

use Illuminate\Database\Seeder;
use App\Monster;

class MonstersSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		/* CONFIG: Setea de donde se sacan los archivos */
		$path = 'seeding/monsters/';	// PATH de la carpeta que contiene los archivos
		$files = Storage::allFiles($path);		//Trae todos los archivos de la carpeta (sus path + archivo)

		/*Recorre todos los archivos y los guarda en la DB */
		foreach ($files as $key => $value) {
			$file = explode('/', $files[$key]);		//Separa del path las carpetas y los archivos
			$file = $file[2];						//Agarra el nombre del archivo
			$name = substr($file, 0, -4);			//Guarda el nombre del archivo SIN EXTENSIÓN en otra variable

			$contents = Storage::get($path . $file);		//Trae los contenidos del archivo.

			$contents = explode("\n", $contents);			//Convierte la data del archivo a un array
			unset($contents[count($contents)-1]);			//Borra el último lugar que siempre está vácio.

			/* Por cada linea guarda en la db el string */
			foreach ($contents as $string) {
				$monster = new Monster;

				$monster->string = $string;			//En string guarda el texto
				$monster->tipo = $name;				//En tipo guarda el nombre del archivo que también es el que tiene seteado en las variables

				$monster->save();
			}

		}
	}
}
