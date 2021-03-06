<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('coupons') ){
            Schema::create('coupons', function (Blueprint $table) {
                $table->increments('id');
                $table->smallInteger('type',false)->nullable();
                $table->string('title',255)->nullable();
                $table->text('description')->nullable();
                $table->date('start_date')->nullable();
                $table->date('end_date')->nullable();
                $table->smallInteger('status',false)->nullable();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
                $table->timestamp('deleted_at')->nullable();
                $table->integer('store_id',false)->unsigned()->nullable();
                $table->string('image_url',255)->nullable();
                $table->integer('limit',false)->nullable();

                $table->index('store_id');

            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('coupons');
    }
}
