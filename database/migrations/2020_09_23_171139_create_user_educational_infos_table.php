<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEducationalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_educational_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('institute_name');
			$table->string('course_name');
			$table->string('degree_name');
			$table->timestamp('start_date');
			$table->timestamp('end_date')->nullable();
			$table->longText('description')->nullable();
            $table->text('institute_address')->nullable();
			$table->string('institute_website')->nullable();
			$table->string('institute_email')->nullable();
			$table->string('institute_phone')->nullable();
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
        Schema::dropIfExists('user_educational_infos');
    }
}
