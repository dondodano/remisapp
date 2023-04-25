<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepositoryPresentationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repository_presentation', function (Blueprint $table) {
            $table->id();

            $table->dateTime('date_presented')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->string('title',255)->nullable();
            $table->string('author',255)->nullable();
            $table->string('forum',255)->nullable();
            $table->string('venue',255)->nullable();

            $table->integer('type_id')->nullable();

            $table->integer('owner')->default(0);
            $table->integer('is_evaluated')->default(0);

            $table->integer('quarter')->nullabe();
            $table->integer('year')->nullabe();
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
        Schema::dropIfExists('repository_presentation');
    }
}
