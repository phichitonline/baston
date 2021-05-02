<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyitems', function (Blueprint $table) {
            $table->id();
            $table->string('buy_id');
            $table->tinyInteger('item_no'); //ตัวเลขลำดับที่
            $table->string('item_name');
            $table->double('item_qty', 10, 2);
            $table->string('item_unit')->nullable();
            $table->double('item_unit_price', 10, 2);
            $table->double('item_std_price', 10, 2)->nullable();
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
        Schema::dropIfExists('buyitems');
    }
}
