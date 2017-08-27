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

		$test = Storage::directories($path);	//Se trae lista de TODOS los subdirectorios

		foreach ($test as $directorio) {	//Se recorren todos los subdirectorios

			$directorio .= "/";	//Se le agrega un / al final para que se tome como directorio al concatenar

			$files = Storage::allFiles($directorio);		//Trae todos los archivos de la carpeta (sus path + archivo)

			/*Recorre todos los archivos y los guarda en la DB */
			foreach ($files as $key => $value) {
				$file = explode('/', $files[$key]);		//Separa del path las carpetas y los archivos
				$file = $file[3];						//Agarra el nombre del archivo
				$dado = substr($file, 0, -4);			//Guarda el nombre del archivo SIN EXTENSIÓN en otra variable

				$contents = Storage::get($directorio . $file);		//Trae los contenidos del archivo.

				$contents = explode("\n", $contents);			//Convierte la data del archivo a un array

				$tipo = $contents[0];

				unset($contents[0]);
				unset($contents[count($contents)]);			//Borra el último lugar que siempre está vácio.

				/* Por cada linea guarda en la db el string */
				foreach ($contents as $string) {
					$monster = new Monster;

					$monster->string = $string;			//En string guarda el texto
					$monster->tipo = $tipo;				//En tipo guarda el tipo de texto (ej: dragon, randomencounter...)
					$monster->dado = $dado;				//En dado guarda el nombre del dado que también es el que tiene seteado en las variables

					$monster->save();
				}

			}
		}
	}
}
