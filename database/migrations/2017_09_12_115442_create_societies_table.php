<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocietiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('so_id');
            $table->string("society_name",100);
            $table->string("vision",100);
            $table->string("mission",100);
            $table->integer("tr_id_mic");
            $table->integer("tr_id_ast_mic");
            $table->integer("st_id_president");
            $table->integer("st_id_secretary");
            $table->integer("st_id_treasurer");
            $table->integer("office_bearers");
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
        Schema::dropIfExists('societies');
    }
}
