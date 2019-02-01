<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('wallets', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('user_id')->unsigned();
             $table->foreign('user_id')->references('id')->on('users');
             $table->string('acc_name')->nullable();
             $table->string('bank_name')->nullable();
             $table->string('user_tag')->nullable();
             $table->integer('acc_no')->unsigned()->default(0);
             $table->integer('active_status')->unsigned()->default(0);
             $table->integer('confirm_status')->unsigned()->default(0);
             $table->integer('user_confirm')->unsigned()->default(0);
             $table->integer('wallet_amount')->unsigned()->default(0);
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
        Schema::dropIfExists('wallets');
    }
}
