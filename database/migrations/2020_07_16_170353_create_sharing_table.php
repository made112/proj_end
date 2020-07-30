<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateSharingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sharing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name') ;
            $table->string('Prof_name') ;
            $table->string('nationality');
            $table->string('edu_area');
            $table->string('edu_level');
            $table->string('school');
            $table->string('class');
            $table->integer('mobile');
            $table->string('email')->unique();
            $table->string('edu_share');

            $table->string('sharing_type');
            $table->binary('photo');
            $table->binary('video');




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
        Schema::dropIfExists('sharing');
    }
}
