<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedableItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedable_item', function (Blueprint $table) {
            $table->id();

            $table->integer('feedable_id')->nullable();
            $table->string('feedable_type',255)->nullable();
            $table->integer('active')->default(1);

            $table->dateTime('date_created')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('date_modified')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('date_deleted')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedable_item');
    }
}
