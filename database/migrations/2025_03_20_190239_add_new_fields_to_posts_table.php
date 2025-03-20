<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToPostsTable extends Migration
{
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('artist')->nullable();
            $table->string('medium')->nullable();
            $table->string('origin')->nullable();
            $table->string('year')->nullable();
        });
    }
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['artist', 'medium', 'origin', 'year']);
        });
    }
}
