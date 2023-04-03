<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepositoryPartnershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repository_partnership', function (Blueprint $table) {
            $table->id();

            $table->string('partner',255)->nullable();
            $table->string('activity',255)->nullable();
            $table->string('date_from',255)->nullable();
            $table->string('date_to',255)->nullable();

            $table->integer('owner')->default(0);
            $table->integer('is_evaluated')->default(0);
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
        Schema::dropIfExists('repository_partnership');
    }
}
