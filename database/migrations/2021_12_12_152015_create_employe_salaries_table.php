<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe_salaries', function (Blueprint $table) {
            $table->id();
            $table->integer('emp_id');
            $table->string('previous_salary')->nullable();
            $table->string('present_salary')->nullable();
            $table->string('increment_salary')->nullable();
            $table->string('effected_salary')->nullable();
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
        Schema::dropIfExists('employe_salaries');
    }
}
