<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_personal_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('first_name_bn')->nullable();
			$table->string('last_name_bn')->nullable();
			$table->string('designation')->nullable();
			$table->longText('about')->nullable();
			$table->string('phone_no')->nullable();
			$table->string('mobile_no')->nullable();
			$table->string('fax_no')->nullable();
			$table->string('personal_email')->nullable();
			$table->string('professional_email')->nullable();
			$table->timestamp('dob')->nullable();
			$table->string('blood_group')->nullable();
			$table->string('gender')->nullable();
            $table->string('present_country')->nullable();
            $table->string('present_state')->nullable();
            $table->string('present_city')->nullable();
            $table->string('present_area')->nullable();
            $table->string('present_road')->nullable();
            $table->string('present_address', 1000)->nullable();
            $table->string('permanent_country')->nullable();
            $table->string('permanent_state')->nullable();
            $table->string('permanent_city')->nullable();
            $table->string('permanent_area')->nullable();
            $table->string('permanent_road')->nullable();
            $table->string('permanent_address', 1000)->nullable();
            $table->string('website_url')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('github_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('youtube_link')->nullable();
			$table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->commonFields();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_personal_infos');
    }
}
