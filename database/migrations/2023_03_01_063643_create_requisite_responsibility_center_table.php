<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisiteResponsibilityCenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisite_responsibility_center', function (Blueprint $table) {
            $table->id();

            $table->string('term', 255)->nullable();
            $table->string('definition', 255)->nullable();

            $table->integer('status')->default(1);
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
        Schema::dropIfExists('requisite_responsibility_center');
    }
}
