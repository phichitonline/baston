<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('buy_number')->unique();
            $table->dateTime('buy_date');
            $table->string('buy_header');
            $table->string('buy_type');
            $table->double('buy_budget', 10, 2);
            $table->string('buy_request');
            $table->text('buy_description')->nullable();
            $table->string('buy_status')->nullable();
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
        Schema::dropIfExists('records');
    }
}
