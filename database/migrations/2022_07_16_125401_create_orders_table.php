<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('tax_status_id');
            $table->unsignedBigInteger('shipper_id');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('order_details_id');
            $table->unsignedBigInteger('invoice_id');
            $table->date('order_date');
            $table->date('shipped_date');
            $table->string('ship_name');
            $table->string('ship_address');
            $table->string('ship_city');
            $table->string('ship_state');
            $table->string('ship_postal_code');
            $table->string('ship_country');
            $table->double('shipping_fee');
            $table->date('paid_date');
            $table->string('notes');
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
        Schema::dropIfExists('orders');

        // Schema::dropForeign('posts_user_id_foreign');
    }
};
