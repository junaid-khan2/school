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
        Schema::create('fees', function (Blueprint $table) {
            $table->id();
            $table->string('st_id');
            $table->string('month');
            $table->string('tuition_fee')->nullable();
            $table->string('fine')->nullable();
            $table->string('arrears')->nullable();
            $table->string('adm_prom')->nullable();
            $table->string('total');
            $table->string('recived');
            $table->string('reming')->default('0');
            $table->string('date');
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
        Schema::dropIfExists('fees');
    }
};
