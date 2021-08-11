<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->float('amount', 8, 2);
            $table->integer('quantity');
            $table->string('name');
            $table->string('email');
            $table->longText('address');
            $table->string('contact_1');
            $table->string('contact_2');
            $table->date('date');
            $table->foreignId('placedBy')->constrained('users');
            $table->foreignId('brand')->constrained('brands');
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
    }
}
