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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            $table->integer('users_id');
            $table->integer('inscurance_price');
            $table->integer('shipping_price');
            $table->integer('total_price');
            $table->string('transaction_status'); // UNPAID/PENDING/SUCCESS/FAILED
            $table->string('code');
            $table->string('address');
            $table->string('zip_code');
            $table->string('phone');
            $table->string('name');

            $table->softDeletes();
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
        Schema::dropIfExists('transactions');
    }
};
