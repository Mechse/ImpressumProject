<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegExesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_exes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('RegEx')->nullable()->default('//ig');
            $table->string('Type')->nullable()->default('NULL');
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
        Schema::dropIfExists('reg_exes');
    }
}
