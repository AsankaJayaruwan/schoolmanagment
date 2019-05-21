<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevComsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dev_coms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dev_id');
            $table->string("first_name",100);
            $table->string("last_name",100);
            $table->string("middle_name",100);
            $table->date("DoB");
            $table->boolean("civil_status");
            $table->string("religion",10);
            $table->string("nic",10);
            $table->string("email",100);
            $table->date("date_joined");
            $table->string("address",100);
            $table->string("city",100);  
            $table->string("contact_number",100);
            $table->string("mobile_number",100);
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
        Schema::dropIfExists('dev_coms');
    }
}
