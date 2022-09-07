<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('user_email')->unique();
            $table->string('user_password');
            $table->boolean('user_verified');
            $table->rememberToken();
        });

        DB::table('users')->insert(
            array(
                'user_name' => 'test_name',
                'user_email' => 'test@mail.com',
                'user_password' => 'test123',
                'user_verified' => true
            )
        );
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
};
