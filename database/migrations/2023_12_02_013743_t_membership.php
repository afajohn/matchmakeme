<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_membership', function (Blueprint $table) {
            $table->id();
            $table->string('required|lastname');
            $table->string('required|firstname');
            $table->string('required|middlename');
            $table->integer('required|age');
            $table->date('required|birthdate');
            $table->string('required|maritalstatus');
            $table->string('required|email')->unique();
            $table->integer('required|mobilenumber');
            $table->string('required|fblink');
            
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
        //
    }
};
