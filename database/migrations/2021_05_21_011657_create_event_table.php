<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',45);
            $table->string('description',255);
            $table->timestamp('event_start_date_time');
            $table->timestamp('event_end_date_time')->nullable();
            $table->string('purpose',45);
            $table->string('start_location',255);
            $table->string('end_location',255)->nullable();
            $table->string('event_price',45);

            $table->unsignedBigInteger('event_creator_id')->nullable();
            $table->foreign('event_creator_id')->references('id')->on('users');

            $table->unsignedBigInteger('event_type')->nullable();
            $table->foreign('event_type')->references('id')->on('event_type');

            $table->unsignedBigInteger('event_status')->nullable();
            $table->foreign('event_status')->references('id')->on('event_statuses');

            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {

            $table->foreign('event_id')->references('id')->on('event');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event');
    }
}
