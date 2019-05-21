<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('st_id');
            $table->string("first_name",100);
            $table->string("last_name",100);
            $table->string("middle_name",100);
            $table->string("email",100);
            $table->boolean("gender");
            $table->string("contact",100);            
            $table->date("DoB");
            $table->string("address",100);
            $table->string("city",100);
            $table->float("height")->nullable();  
            $table->float("weight")->nullable();  
            $table->float("running_speed")->nullable();  
            $table->string("sickness",100)->nullable();  
            $table->integer("house_id");  
            $table->integer("classroom_id");
            $table->timestamps();
            $table->softDeletes();
        });
        
        
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
