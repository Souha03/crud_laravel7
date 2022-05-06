<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aliments', function (Blueprint $table) {
            $table->id();
            $table->string('FAMILLES');
            $table->string('ALIMENTS');
            $table->double('CALORIES');
            $table->double('PROTEINES');
            $table->double('GLUCIDES');
            $table->double('LIPIDES');
            $table->string('QUANTITE');
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
        Schema::dropIfExists('aliments');
    }
}
