<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sports', function (Blueprint $table) {
             $table->increments('id');
            $table->string('sp_id');
            $table->string("sport_name");
            $table->string("vision",100);
            $table->string("mission",100);
            $table->integer("tr_id_mic");
            $table->integer("tr_id_ast_mic");
            $table->integer("coach_id");
            $table->date('formed_date');
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
        Schema::dropIfExists('sports');
    }
}
