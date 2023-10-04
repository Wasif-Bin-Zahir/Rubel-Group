<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWorkInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_work_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('department')->nullable();
            $table->string('designation');
            $table->timestamp('start_date');
            $table->timestamp('end_date')->nullable();
			$table->longText('description')->nullable();
            $table->text('company_address')->nullable();
            $table->string('company_website')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_phone')->nullable();
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
        Schema::dropIfExists('user_work_infos');
    }
}
