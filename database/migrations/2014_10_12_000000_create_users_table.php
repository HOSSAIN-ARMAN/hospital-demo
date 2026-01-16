<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_controller')->nullable();
            $table->boolean('hospital_id')->nullable();
            $table->string('hospital_name')->nullable();
            $table->boolean('is_woner')->nullable();
            $table->boolean('is_manager')->nullable();
            $table->boolean('is_super_user')->nullable();
            $table->boolean('is_admin')->nullable();
            $table->boolean('is_doctor')->nullable();
            $table->boolean('is_stuff')->nullable();
            $table->boolean('is_user')->nullable();
            $table->boolean('status')->nullable();
            $table->string('image_logo')->nullable();
            $table->string('image_benar')->nullable();
            $table->boolean('route_no')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
    }
}
