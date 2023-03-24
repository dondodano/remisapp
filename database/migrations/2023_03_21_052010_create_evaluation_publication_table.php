<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationPublicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation_publication', function (Blueprint $table) {
            $table->id();
            $table->integer('publication_id')->nullable();
            $table->integer('evaluator_id')->nullable();
            $table->longText('evaluation')->nullable();
            $table->integer('is_read')->default(0);
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
        Schema::dropIfExists('evaluation_publication');
    }
}
