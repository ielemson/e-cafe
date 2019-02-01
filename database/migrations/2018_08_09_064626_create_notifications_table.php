<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('notifications', function (Blueprint $table) {
$table->increments('id');
$table->integer('user_id')->unsigned();
$table->foreign('user_id')->references('id')->on('users');
$table->text('notification')->nullable();
$table->string('notification_type')->nullable();
$table->integer('read_status')->unsigned()->default(0);
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
Schema::table('notifications', function (Blueprint $table) {
$table->dropColumn('user_id');

});
}
}
