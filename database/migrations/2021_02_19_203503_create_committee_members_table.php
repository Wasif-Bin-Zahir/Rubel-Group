<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommitteeMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committee_members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('name_bn')->nullable();
			$table->string('designation')->nullable();
			$table->string('designation_bn')->nullable();
			$table->longText('bio')->nullable();
			$table->longText('bio_bn')->nullable();
			$table->string('email')->nullable();
			$table->string('phone')->nullable();
			$table->string('mobile')->nullable();
			$table->string('fax')->nullable();
			$table->string('facebook')->nullable();
			$table->string('twitter')->nullable();
			$table->string('linkedin')->nullable();
			$table->unsignedBigInteger('committee_category_id');
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
        Schema::dropIfExists('committee_members');
    }
}
