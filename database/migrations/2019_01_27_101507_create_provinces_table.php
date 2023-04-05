<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('provinces', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name');
             $table->timestamps();
         });
         Schema::create('districts', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name');
             $table->integer('province_id');            
             $table->timestamps();
         });
         Schema::create('villages', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name');
             $table->integer('district_id');            
             $table->timestamps();
         });
     }
     
 
     public function down()
     {
         Schema::drop('provinces');
         Schema::drop('districts');
         Schema::drop('villages');
     }
}
