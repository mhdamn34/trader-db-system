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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('contact_name');
            $table->string('contact_title');
            $table->string('address');
            $table->string('city');
            $table->string('region');
            $table->string('postal_code');
            $table->string('phone');
            $table->string('fax');
            $table->string('homepage');
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
        Schema::dropIfExists('suppliers');
    }
};
