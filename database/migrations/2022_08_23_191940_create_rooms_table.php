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
        Schema::dropIfExists('rooms');
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('room_id')->unique();
            $table->double('room_price')->unsigned();
            $table->string('room_street');
            $table->string('room_number');
            $table->integer('room_plz')->unsigned();
            $table->string('room_city');
            $table->boolean('room_verified')->default(false);
        });

        DB::table('rooms')->insert(
            array(
                'room_street' => 'Schöfferstraße',
                'room_number' => '23a',
                'room_plz' => '64295',
                'room_city' => 'Darmstadt',
                'room_verified' => true
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
        Schema::dropIfExists('room');
    }
};
