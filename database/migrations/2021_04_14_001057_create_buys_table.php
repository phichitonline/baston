<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buys', function (Blueprint $table) {
            $table->id();
            $table->string('rid');
            $table->string('buy_number');
            $table->dateTime('buy_date');
            $table->string('buy_type');
            $table->string('buy_subject');
            $table->string('buy_headname');
            $table->string('buy_subject2');
            $table->string('buy_method');
            $table->string('buy_reason');
            $table->string('buy_perspec');
            $table->string('buy_perspec2');
            $table->string('buy_perspec3');
            $table->double('buy_budget', 10, 2);
            $table->double('buy_budgetuse', 10, 2)->nullable();
            $table->string('buy_project');
            $table->string('buy_budgetcode');
            $table->string('buy_period');
            $table->string('buy_shop');
            $table->string('buy_shopaddr');
            $table->string('buy_percheck1');
            $table->string('buy_percheck2');
            $table->string('buy_percheck3');
            $table->string('buy_auth');
            $table->string('buy_headauth');
            $table->text('buy_description')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('buys');
    }
}
