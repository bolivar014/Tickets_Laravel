<?php

use Illuminate\Database\Seeder;
// Exporto esquemas de las clases
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Deshabilitamos el modelo de protección de datos, para pruebas
        Model::unguard();

        try {
            // En caso que se ejecute correctamente
            
            // Deshabilito los Constraints a nivel de DB.
            Schema::disableForeignKeyConstraints();

            // Ejecuto Esquema Crear usuarios
            $this->call(UsersTableSeeder::class);

            // Habilito los Constraints a nivel de DB.
            Schema::enableForeignKeyConstraints();

        } catch(\Throwable $err) {
            // En caso de algun error en la ejecución, retorno el mensaje
            return $err->getMessage();
        }
        
    }
}
