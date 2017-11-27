<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('monsters', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name')->unique();
             $table->string('size');
             $table->string('race');
             $table->string('aligment');
             $table->string('armorClass');
             $table->string('hitPoints');
             $table->string('speed');
             $table->string('str');
             $table->string('dex');
             $table->string('con');
             $table->string('int');
             $table->string('wis');
             $table->string('cha');
             $table->string('saveingThrow');
             $table->string('skills');
             $table->string('damageImmunities');
             $table->string('languages');
             $table->string('senses');
             $table->string('challengeRating');
             $table->string('traits');
             $table->string('actions');
             $table->string('legendaryActions');
             $table->string('rarity');
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
         Schema::dropIfExists('monsters');
     }
}
