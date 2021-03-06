<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrioritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('priorities', function (Blueprint $table) {
            $table->smallIncrements('id');

            $table->string('name')->unique();                   // Nombre -> Unico
            $table->boolean('flag_status')->default(true);      // Campo Booleano, por defecto en true
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
        Schema::dropIfExists('priorities');
    }
}
