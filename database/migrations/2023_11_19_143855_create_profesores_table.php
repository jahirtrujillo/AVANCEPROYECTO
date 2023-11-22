<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Cambiar a 'user_id'
            $table->foreign('user_id')->references('id')->on('users'); // Cambiar a 'users'
            $table->unsignedBigInteger('curso_id');
            
            // Otros atributos de la clase Profesor
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profesores');
    }
};
