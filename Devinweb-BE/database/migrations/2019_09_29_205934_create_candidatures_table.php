<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name'); //varchar(255)
            $table->string('last_name');
            $table->string('email'); 
            $table->string('telephone'); 
            $table->binary('cv')->default(null); 
            $table->string('motivation');
            $table->integer('ID_Offre')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidatures');
    }
}
