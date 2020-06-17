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
            $table->bigInteger('wait_people')->unsigned();
            $table->bigInteger('estemated_wait_time')->unsigned();
            $table->text('introduction', 65535)->nullable()->comment('[店舗紹介]');
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
