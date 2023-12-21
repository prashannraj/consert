<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('register_forms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('class_data_id')->nullable();
            $table->string('student_name', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('father_name', 255)->nullable();
            $table->string('mother_name', 255)->nullable();
            $table->string('grand_father_name', 255)->nullable();
            $table->string('gender', 255)->nullable();
            $table->string('full_address', 255)->nullable();
            $table->string('parents_phone_number', 255)->nullable();
            $table->string('student_photo', 255)->nullable();
            $table->string('students_sign_photo', 255)->nullable();
            $table->string('citizenship_front_photo', 255)->nullable();
            $table->string('citizenship_back_photo', 255)->nullable();
            $table->string('transcript_photo', 255)->nullable();
            $table->string('character_photo', 255)->nullable();
            $table->string('school_fee_vouchers_photo', 255)->nullable();
            $table->json('extra')->nullable();
            $table->string('status', 255)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register_forms');
    }
}
