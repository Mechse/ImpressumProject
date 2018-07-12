<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpressumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impressums', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Web_id')->unique();

            $table->string('Country')->nullable()->default('NULL');
            $table->integer('Country_id')->default(0);

            $table->string('City')->nullable()->default('NULL');
            $table->integer('City_id')->default(0);

            $table->string('Zip')->nullable()->default('NULL');
            $table->integer('Zip_id')->default(0);

            $table->string('Address')->nullable()->default('NULL');
            $table->integer('Address_id')->default(0);

            $table->string('Email')->nullable()->default('NULL');
            $table->integer('Email_id')->default(0);

            $table->string('Tel')->nullable()->default('NULL');
            $table->integer('Tel_id')->default(0);

            $table->string('Company')->nullable()->default('NULL');
            $table->integer('Company_id')->default(0);

            $table->string('Firstname')->nullable()->default('NULL');
            $table->integer('Firstname_id')->default(0);

            $table->string('Lastname')->nullable()->default('NULL');
            $table->integer('Lastname_id')->default(0);
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
        Schema::dropIfExists('impressums');
    }
}
