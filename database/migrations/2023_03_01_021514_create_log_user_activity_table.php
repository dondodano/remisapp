<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogUserActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_user_activity', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id')->nullable();
            $table->string('ip_address', 255)->nullable();
            $table->longText('agent')->nullable();
            $table->longText('activity')->nullable();

            $table->integer('subject_id')->nullable();
            $table->string('subject_type', 255)->nullable();

            $table->dateTime('log_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('date_created')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('date_modified')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_user_activity');
    }
}
