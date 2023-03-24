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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->integer('phone');
            $table->integer('mobile');
            $table->integer('establish');
            $table->string('website');
            $table->string('location');
            $table->integer('emp_number');
            $table->text('profile');
            $table->string('image');
            $table->foreignId('category_id')->nullable();

            // $table->integer('category_id')->unsigned();
            // $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('companies');
    }
};
