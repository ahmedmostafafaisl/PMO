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
        Schema::create('categories_companies', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBiginteger('category_id')->unsigned();
            // $table->unsignedBiginteger('stores_id')->unsigned();

            // $table->foreign('category_id')->references('id')
            //     ->on('categories');
            // $table->foreign('company_id')->references('id')
            //     ->on('companies');
            $table->foreignId('category_id')->nullable();
            $table->foreignId('company_id')->nullable();
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
        Schema::dropIfExists('categories_companies');
    }
};
