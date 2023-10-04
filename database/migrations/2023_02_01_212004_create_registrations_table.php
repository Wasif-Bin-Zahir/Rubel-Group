<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('password')->nullable();
            $table->unsignedBigInteger('bsc_session_id')->nullable();
            $table->unsignedBigInteger('bsc_batch_id')->nullable();
            $table->string('bsc_reg_no')->nullable();
            $table->string('bsc_student_id')->nullable();
            $table->unsignedBigInteger('msc_session_id')->nullable();
            $table->unsignedBigInteger('msc_batch_id')->nullable();
            $table->string('msc_reg_no')->nullable();
            $table->string('msc_student_id')->nullable();
            $table->integer('membership_type')->nullable();
            $table->string('membership_validity')->nullable();
            $table->boolean('payment_status')->nullable();
            $table->integer('payment_type')->nullable();
            $table->string('payment_date')->nullable();
            $table->longText('payment_data')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
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
        Schema::dropIfExists('registrations');
    }
}
