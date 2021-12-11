<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeRegirstrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_regirstrations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('id_card_no')->nullable();
            $table->string('join_date')->nullable();
            $table->string('salary')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('employee_regirstrations');
    }
}
