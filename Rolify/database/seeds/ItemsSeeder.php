<?php

use Illuminate\Database\Seeder;
use App\Asset;
use App\Value;
use App\Categoria;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		/* CONFIG: Setea de donde se sacan los archivos */
		$path = 'seeding/items/';	// PATH de la carpeta que contiene los archivos

		$test = Storage::directories($path);	//Se trae lista de TODOS los subdirectorios
		$categoria = explode('/', $path)[1];

		$categoria = Categoria::where('nombre', $categoria)->first();

		/* Se recorren todos los subdirectorios */
		foreach ($test as $directorio) {

			$directorio .= "/";	//Se le agrega un / al final para que se tome como directorio al concatenar

			$files = Storage::allFiles($directorio);		//Trae todos los archivos de la carpeta (sus path + archivo)

			/*Recorre todos los archivos y los guarda en la DB */
			foreach ($files as $key => $value) {
				$file = explode('/', $files[$key]);		//Separa del path las carpetas y los archivos
				$file = $file[3];						//Agarra el nombre del archivo
				$dado = substr($file, 0, -4);			//Guarda el nombre del archivo SIN EXTENSIÓN en otra variable

				$contents = Storage::get($directorio . $file);		//Trae los contenidos del archivo.

				$contents = explode("\n", $contents);			//Convierte la data del archivo a un array


				$tipo = $contents[0];						//Agarra el tipo de tirada de la primera linea
				unset($contents[0]);						//Borra la primera linea
				unset($contents[count($contents)]);			//Borra el último lugar que siempre está vácio.

				$asset = new Asset;

				$asset->asset = $tipo;				//En tipo guarda el tipo de texto (ej: dragon, randomencounter...)
				$asset->dado = $dado;				//En dado guarda el nombre del dado que también es el que tiene seteado en las variables
				$asset->categoria_id = $categoria->id;
				$asset->save();

				/* Recorre todos los valores y los integra a los assets */
				foreach ($contents as $key => $valor) {
					$value = new Value;

					$value->value = $valor;
					$value->asset_id = $asset->id;
					$value->save();
				}
			}
		}
    }
}
