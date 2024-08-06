<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom_complete');
            $table->string('seance');
            $table->decimal('salaire');
            $table->decimal('nombre_etudiants');
            $table->string('matiere');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profs');
    }
}
