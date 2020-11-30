<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');                                    // Id Autoincrementable

            $table->unsignedSmallInteger('type_id')->nullable();            // 
            $table->unsignedSmallInteger('priority_id')->required();        // 
            $table->unsignedBigInteger('requester_user_id')->required();    // 
            $table->string('name')->required();                             // 

            // Estado del comentario
            $table->boolean('flag_status')->default(true);                  // True = Abierto || False = Cerrado

            $table->timestamps();
            
            $table->unsignedBigInteger('created_by')->index();      // 
            $table->unsignedBigInteger('updated_by')->index();      // 

            // Llaves Foraneas 
            // Llave foranea tabla Types - Tickets
            $table->foreign('type_id')
            ->references('id')->on('types')
            ->onDelete('set null');     // Deja por defecto en null
            // ->onDelete('cascade');   // Cuando se elimina algún registro de esta tabla, 
                                        // borra los datos de las demas datos en otras tablas en cascada 
        
            // Llave foranea tabla Priorities - Tickets
            $table->foreign('priority_id')->references('id')->on('priorities');

            // Llave foranea tabla Users - Tickets
            $table->foreign('requester_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
