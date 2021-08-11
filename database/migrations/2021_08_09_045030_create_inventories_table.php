<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('color');
            $table->string('type');
            $table->float('quantity', 8, 2);
            $table->float('price', 8, 2);
            $table->mediumText('note')->nullable();
            $table->date('date');
            $table->foreignId('brand')->constrained('brands');
            $table->foreignId('size')->constrained('measurements');
            $table->foreignId('createdBy')->constrained('staff');
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
        Schema::dropIfExists('inventories');
    }
}
