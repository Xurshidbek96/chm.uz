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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name_uz');
            $table->string('name_en');
            $table->string('slug')->unique();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('sku')->unique();
            $table->string('model')->nullable();
            $table->decimal('price_usd', 10, 2);
            $table->decimal('price_uzs', 15, 2);
            $table->decimal('discount_price_usd', 10, 2)->nullable();
            $table->decimal('discount_price_uzs', 15, 2)->nullable();
            $table->text('short_description_uz')->nullable();
            $table->text('short_description_en')->nullable();
            $table->longText('description_uz')->nullable();
            $table->longText('description_en')->nullable();
            $table->json('images')->nullable(); // Store multiple images as JSON
            $table->json('specifications')->nullable(); // Store product specs as JSON
            $table->integer('stock_quantity')->default(0);
            $table->integer('min_stock_level')->default(5);
            $table->integer('views')->default(0);
            $table->enum('status', ['active', 'inactive', 'out_of_stock'])->default('active');
            $table->boolean('is_featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->decimal('weight', 8, 2)->nullable();
            $table->string('dimensions')->nullable(); // e.g., "10x20x30 cm"
            $table->softDeletes();
            $table->timestamps();
            
            // Indexes for better performance
            $table->index(['category_id', 'status']);
            $table->index(['status', 'is_featured']);
            $table->index('slug');
            $table->index('sku');
            $table->index('views');
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
};
