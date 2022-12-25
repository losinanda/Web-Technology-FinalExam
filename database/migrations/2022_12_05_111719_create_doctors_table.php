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
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id_doctor');
            // $table->foreign('id_doctor')->references('doctor')->on('forms');
            // $table->unsignedBigInteger('doctor_form');
            // $table->foreign('doctor_form')->references('doctor')->on('forms');
            $table->string('doctor_name');
            $table->string('education');
            $table->string('university');
            $table->unsignedBigInteger('specialization');
            $table->foreign('specialization')->references('id_specialization')->on('specializations');
            $table->text('doctor_desc');
            $table->text('address');
            $table->string('phone_num');
            $table->string('doctor_img')->nullable();
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
        Schema::dropIfExists('doctors');
    }
};