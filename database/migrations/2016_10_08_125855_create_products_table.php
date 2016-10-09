<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sku');
            $table->string('brand');
            $table->text('annotation');
            $table->text('description')->nullable();

            $table->float('price');
            $table->integer('quantity');
            $table->string('currency');
            $table->string('params')->default('');

            $table->tinyInteger('visible')->default(1);
            $table->integer('position')->default(0);
            $table->timestamps();

            $table->string('meta_title')->default('');
            $table->string('meta_keywords')->default('');
            $table->string('meta_description')->default('');
            $table->string('external_id')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
