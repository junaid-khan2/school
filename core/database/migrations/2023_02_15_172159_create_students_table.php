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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('father_name');
            $table->string('father_cnic');
            $table->string('date_of_birth');
            $table->string('word_date_of_barth')->nullable();
            $table->string('father_occuption');
            $table->string('monthly_income')->nullable();
            $table->string('nationality');
            $table->string('religion');
            $table->string('last_school')->nullable();
            $table->string('slc_no')->nullable();
            $table->string('last_attended_class')->nullable();
            $table->string('admited_class')->nullable();
            $table->string('home_address');
            $table->string('district');
            $table->string('tehsil');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('students');
    }
};
