<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('zipcode')->nullable();
            $table->string('prefecture')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('tel')->nullable();
            $table->integer('admin')->nullable();
            $table->integer('des_salary')->nullable();
            $table->integer('des_period')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
