<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name_uz')->nullable();
            $table->string('name_ru')->nullable();
            $table->string('name_en')->nullable();
            $table->integer('category')->nullable();
            $table->string('product')->nullable();
            $table->string('model')->nullable();
            $table->string('price_sum')->nullable();
            $table->string('price_usd')->nullable();
            $table->string('title_uz')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();
            $table->text('parameter_uz')->nullable();
            $table->text('parameter_ru')->nullable();
            $table->text('parameter_en')->nullable();
            $table->text('info_uz')->nullable();
            $table->text('info_ru')->nullable();
            $table->text('info_en')->nullable();
            $table->text('description_uz')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_en')->nullable();
            $table->text('delivery_uz')->nullable();
            $table->text('delivery_ru')->nullable();
            $table->text('delivery_en')->nullable();
            $table->text('payment_uz')->nullable();
            $table->text('payment_ru')->nullable();
            $table->text('payment_en')->nullable();
            $table->text('warranty_uz')->nullable();
            $table->text('warranty_ru')->nullable();
            $table->text('warranty_en')->nullable();
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->string('img4')->nullable();
            $table->string('img5')->nullable();
            $table->string('video1')->nullable();
            $table->string('video2')->nullable();
            $table->string('video3')->nullable();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
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
