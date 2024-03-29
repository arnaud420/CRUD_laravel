<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table)
        {
            $table->engine = "innoDB";
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string("email")->unique();
            $table->string("password", 60);
            $table->boolean('admin')->default(false);
            $table->string('avatar')->default('default.png');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement(' SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('users');
    }
}
