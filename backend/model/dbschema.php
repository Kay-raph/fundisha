<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createtables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //cmds to be used in the migrations
        //php artisan migrate --path=/database/migrations/2020_05_18_043520_createtables.php
        //php artisan make:migration createtables
        //composer require doctrine/dbal
        //php artisan migrate
         Schema::create('users', function (Blueprint $table) {
            $table->string('firstname',200)->nullable();
            $table->string('lastname',200)->nullable();
            $table->string('email',50)->nullable()->unique();
            $table->string('country',200)->nullable();
            $table->string('mobile',200)->nullable();
            $table->string('gender',200)->nullable();
            $table->string('DOB',200)->nullable();
            $table->text('password',500)->nullable();
        });
         Schema::create('admin', function (Blueprint $table) {
            $table->string('firstname',200)->nullable();
            $table->string('lastname',200)->nullable();
            $table->string('email',50)->nullable()->unique();
            $table->string('country',200)->nullable();
            $table->string('mobile',200)->nullable();
            $table->string('gender',200)->nullable();
            $table->string('DOB',200)->nullable();
            $table->text('password',500)->nullable();
        });
          Schema::create('courses', function (Blueprint $table) {
            $table->increments('course_id',200)->nullable();
            $table->string('course_title',200)->nullable();
            $table->string('course_image',200)->nullable();
            $table->string('course_video',200)->nullable();
            $table->string('course_content',200)->nullable();
        });
           Schema::create('jobs', function (Blueprint $table) {
            $table->increments('job_id',200)->nullable();
            $table->string('job_title',200)->nullable();
            $table->string('job_description',200)->nullable();
            $table->string('job_attachment',200)->nullable();
            $table->string('application_deadline',200)->nullable();
            $table->string('created_at',200)->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     Schema::dropIfExists('users');
     Schema::dropIfExists('jobs');
     Schema::dropIfExists('courses');
     Schema::dropIfExists('admin');
    }
}
