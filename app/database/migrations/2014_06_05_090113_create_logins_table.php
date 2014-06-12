<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	
	public function up()  {

      Schema::create('logins', function($table) {
         $table->increments('id');
         $table->string('username')->unique();
         $table->string('password');
         $table->timestamps();
      });

 }

 public function down()
 {
     Schema::drop('logins');
 }

}

