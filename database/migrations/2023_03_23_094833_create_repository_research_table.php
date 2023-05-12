<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepositoryResearchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repository_research', function (Blueprint $table) {
            $table->id();

            $table->string('commodity',255)->nullable();
            $table->integer('category_id')->nullable();
            $table->string('program',255)->nullable();
            $table->string('project',255)->nullable();
            $table->string('researcher',255)->nullable();
            $table->string('sites',255)->nullable();
            $table->string('year_start',255)->nullable();
            $table->string('year_end',255)->nullable();
            $table->string('agency',255)->nullable();
            $table->double('budget')->nullable();
            $table->string('collaborative',255)->nullable();

            $table->integer('fund_id')->nullable();
            $table->integer('status_id')->nullable();

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
        Schema::dropIfExists('repository_research');
    }
}
