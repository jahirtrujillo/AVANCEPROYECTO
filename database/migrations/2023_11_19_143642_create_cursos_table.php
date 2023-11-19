<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
            $table->float('precio');
            $table->integer('duracion');
            $table->foreignId('profesor_id')->constrained('profesores');
            
            $table->timestamps();
        });
    }

public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
