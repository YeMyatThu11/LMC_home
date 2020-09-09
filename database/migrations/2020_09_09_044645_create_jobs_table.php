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
            $table->increments('job_id');
            $table->timestamps();
            $table->integer('user_id');
            $table->string('title');
            $table->string('category');
            $table->string('location')->nullable();
            $table->string('salary');
            $table->string('short_description')->nullable();
            $table->longText('full_description')->nullable();
            $table->longText('requirement')->nullable();
            $table->string('companyName');
            $table->string('companyPhone')->nullable();
            $table->string('companyWebsite')->nullable();
            $table->string('companyEmail')->nullable();
            $table->integer('views');
    
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
