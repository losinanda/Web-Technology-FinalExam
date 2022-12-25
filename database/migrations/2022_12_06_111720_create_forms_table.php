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
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('id_form');
            $table->unsignedBigInteger('doctor');
            $table->foreign('doctor')->references('id_doctor')->on('doctors');
            $table->string('form_name');
            $table->string('form_phonenum');
            $table->text('address');
            $table->text('form_desc');
            $table->date('form_date');
            $table->time('form_time');
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
        Schema::dropIfExists('forms');
    }
};
