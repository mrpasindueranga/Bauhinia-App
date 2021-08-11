<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('icon');
            $table->string('brand');
            $table->float('price', 8, 2);
            $table->mediumText('description');
            $table->boolean('visibility');
            $table->foreignId('category')->constrained('categories');
            $table->foreignId('createdBy')->constrained('staff');
            $table->foreignId('measurement')->constrained('measurements');
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
        Schema::dropIfExists('brands');
    }
}
