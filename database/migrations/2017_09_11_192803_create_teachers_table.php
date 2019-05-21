<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //{
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tr_id');
            $table->string("first_name", 100);
            $table->string("last_name", 100);
            $table->string("middle_name", 100);
            $table->string("email", 100);
            $table->date("date_joined");
            $table->date("DoB");
            $table->boolean("gender");
            $table->boolean("civil_status");
            $table->string("religion", 10);
            $table->string("nic", 10);
            $table->string("address", 100);
            $table->string("city", 100);
            $table->string("contact_number", 100);
            $table->string("mobile_number", 100);
            $table->string("designation", 30);
            $table->string("designation_type", 15);
            $table->string("house", 10);
            $table->integer("user_id")->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
