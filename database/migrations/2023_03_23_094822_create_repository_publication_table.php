<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepositoryPublicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repository_publication', function (Blueprint $table) {
            $table->id();

            $table->dateTime('date_published')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->string('title',255)->nullable();
            $table->string('author',255)->nullable();
            $table->string('publisher',255)->nullable();
            $table->string('volume',255)->nullable();
            $table->string('issue',255)->nullable();
            $table->string('page',255)->nullable();


            $table->integer('owner')->default(0);
            $table->integer('responsibility_center_id')->default(0);
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
        Schema::dropIfExists('repository_publication');
    }
}
