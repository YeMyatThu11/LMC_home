<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('job-id');
            $table->timestamps();
            $table->integer('user-id');
            $table->string('title');
            $table->string('category');
            $table->string('location')->nullable();
            $table->string('salary');
            $table->string('short-description')->nullable();
            $table->longText('full-description')->nullable();
            $table->longText('requirement')->nullable();
            $table->string('companyName');
            $table->string('companyPhone')->nullable();
            $table->string('companyWebsite')->nullable();
            $table->string('companyEmail')->nullable();
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
