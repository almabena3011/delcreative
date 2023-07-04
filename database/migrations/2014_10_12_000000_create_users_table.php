<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('username')->unique();;
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('isadmin')->default(false);
            $table->boolean('isverify')->default(false);
            $table->string('idrole')->unique();
            $table->enum('role', ['student', 'dorm', 'dosen', 'null'])->default('null');
            $table->bigInteger('point')->default(0);
            $table->string('screenshoot');
            $table->string('avatar')->nullable();
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
        Schema::dropIfExists('users');
    }
}
