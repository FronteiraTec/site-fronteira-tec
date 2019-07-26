<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('department_id')->nullable()->change();
        });
        Schema::table('departments', function (Blueprint $table) {
            $table->text("description")->nullable()->change();
            $table->string('img')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('department_id')->change();
        });
        Schema::table('departments', function (Blueprint $table) {
            $table->text("description")->change();
            $table->string('img')->change();
        });
    }
}
