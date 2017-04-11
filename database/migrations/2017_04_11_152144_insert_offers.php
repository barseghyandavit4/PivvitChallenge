<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertOffers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        \DB::table('offers')->insert([
            ['title' => 'Samsung galaxy s5', 'price' => '400'],
            ['title' => 'Samsung galaxy s6', 'price' => '500'],
            ['title' => 'Samsung galaxy s7', 'price' => '600'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
