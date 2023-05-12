<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepositoryExtensionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repository_extension', function (Blueprint $table) {
            $table->id();

            $table->string('extension',255)->nullable();
            $table->string('date_from',255)->nullable();
            $table->string('date_to',255)->nullable();
            $table->integer('quantity')->nullable();
            $table->string('beneficiaries',255)->nullable();

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
        Schema::dropIfExists('repository_extension');
    }
}
