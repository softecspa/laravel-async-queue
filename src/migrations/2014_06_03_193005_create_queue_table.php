<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQueueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('laq_async_queue', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('queue', 255)->nullable()->default(null);
            $table->integer('status')->default(0);
            $table->integer('retries')->default(0);
            $table->timestamp('timestamp');
            $table->longText('payload')->nullable();
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
        Schema::drop('laq_async_queue');
	}

}
