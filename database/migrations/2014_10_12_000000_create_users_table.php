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
            $table->unsignedBigInteger('user_type')->nullable();
            $table->string('name',45);
            $table->string('password',1000)->default('');
            $table->string('email')->unique();
            $table->string('city',45);
            $table->string('country',45);
            $table->string('phone',45)->default('');
            $table->string('isActive',1);
            $table->binary('user_image');

            $table->unsignedBigInteger('badge_id')->nullable();
            $table->unsignedBigInteger('event_id')->nullable();

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
