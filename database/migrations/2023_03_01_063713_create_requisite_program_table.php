<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisiteProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisite_program', function (Blueprint $table) {
            $table->id();

            $table->integer('institute_id')->default(0);

            $table->string('term', 255)->nullable();
            $table->string('definition', 255)->nullable();

            $table->integer('status')->default(1);
            $table->integer('active')->default(1);
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
        Schema::dropIfExists('requisite_program');
    }
}
