<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->bigInteger('id',true)->unsigned();
            $table->string('store_name')->unique();
            //時間データはどういう持ち方をするか $table->bigInteger('wait_time');
            $table->text('introduction', 65535)->nullable()->comment('[店舗紹介]');
            $table->rememberToken();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
