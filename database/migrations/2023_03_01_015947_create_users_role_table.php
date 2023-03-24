<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_role', function (Blueprint $table) {
            $table->id();
            $table->string('term', 255)->nullable();
            $table->integer('is_visible')->default(1);
            $table->integer('active')->default(1);
            $table->dateTime('date_created')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('date_modified')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        DB::table('users_role')->insert([
            ['term' => 'Super', 'is_visible' => 0],
            ['term' => 'Admin', 'is_visible' => 1],
            ['term' => 'Faculty', 'is_visible' => 1],
            ['term' => 'Staff', 'is_visible' => 1],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_role');
    }
}
