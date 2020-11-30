<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');                            // Id Autoincrementable
            
            $table->string('firstname');                            // Nombre Principal
            $table->string('lastname')->nullable();                 // Nombre Secundario, Acepta Nulos
            $table->string('email')->unique();                      // emails unicos
            $table->string('username')->unique();                   // usuarios unicos
            $table->string('password');                             // Password del cliente
            $table->timestamp('email_verified_at')->nullable();     // Email de confirmación
            $table->timestamp('start_date')->required();            // Fecha Inicio
            $table->timestamp('end_date')->nullable();              // Fecha Fin
            $table->rememberToken();
            $table->timestamps();

            $table->unsignedBigInteger('created_by')->index();      // 
            $table->unsignedBigInteger('updated_by')->index();      // 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
