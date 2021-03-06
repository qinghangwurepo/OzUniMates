<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('degree');
            $table->string('university');
            $table->string('major');
            $table->string('specilization');
            $table->integer('thanks');
            $table->string('avatar');
            $table->string('avatar_small');
            $table->boolean('ispro');
            $table->boolean('activated');
            $table->string('description');
            $table->char('notification');
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('consultants');
    }
}
