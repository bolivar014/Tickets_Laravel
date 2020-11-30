<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigInteger('id');                                   // Id Autoincrementable
            
            $table->bigInteger('ticket_id')->unsigned()->required();    // Llave Foranea
            $table->unsignedBigInteger('user_id')->required();          // Llave Foranea

            $table->longText('comment')->required();                    // Comentarios

            $table->timestamps();
            $table->unsignedBigInteger('created_by')->index();      // 
            $table->unsignedBigInteger('updated_by')->index();      // 
        
            // Llaves Foraneas

            // Llave foranea Comments - Tickets
            $table->foreign('ticket_id')->references('id')->on('tickets');

            // Llave foranea Users - Tickets
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
