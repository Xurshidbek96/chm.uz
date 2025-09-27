<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name_uz',
        'name_en',
        'slug',
        'category_id',
        'product_uz',
        'product_en',
        'model',
        'price_usd',
        'price_uzs',
        'title_uz',
        'title_en',
        'description_uz',
        'description_en',
        'img1',
        'img2',
        'img3',
        'img4',
        'img5',
        'views',
        'status',
        'featured',
        'stock_quantity',
        'sku',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'price_usd' => 'decimal:2',
        'price_uzs' => 'decimal:2',
        'views' => 'integer',
        'status' => 'boolean',
        'featured' => 'boolean',
        'stock_quantity' => 'integer',
    ];

    /**
     * Default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'status' => true,
        'featured' => false,
        'views' => 0,
        'stock_quantity' => 0,
    ];

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->name_uz ?: $product->name_en);
            }
            if (empty($product->sku)) {
                $product->sku = 'PRD-' . strtoupper(Str::random(8));
            }
        });

        static::updating(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->name_uz ?: $product->name_en);
            }
        });
    }

    /**
     * Get the category that owns the product.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the orders for the product.
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    /**
     * Scope a query to only include active products.
     */
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    /**
     * Scope a query to only include featured products.
     */
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    /**
     * Scope a query to only include in-stock products.
     */
    public function scopeInStock($query)
    {
        return $query->where('stock_quantity', '>', 0);
    }

    /**
     * Scope a query to search products by name.
     */
    public function scopeSearch($query, $term)
    {
        return $query->where(function ($q) use ($term) {
            $q->where('name_uz', 'like', "%{$term}%")
              ->orWhere('name_en', 'like', "%{$term}%")
              ->orWhere('description_uz', 'like', "%{$term}%")
              ->orWhere('description_en', 'like', "%{$term}%");
        });
    }

    /**
     * Get the product's name based on current locale.
     */
    public function getNameAttribute(): string
    {
        $locale = app()->getLocale();
        return $locale === 'uz' ? $this->name_uz : $this->name_en;
    }

    /**
     * Get the product's description based on current locale.
     */
    public function getDescriptionAttribute(): string
    {
        $locale = app()->getLocale();
        return $locale === 'uz' ? $this->description_uz : $this->description_en;
    }

    /**
     * Get the product's title based on current locale.
     */
    public function getTitleAttribute(): string
    {
        $locale = app()->getLocale();
        return $locale === 'uz' ? $this->title_uz : $this->title_en;
    }

    /**
     * Get all product images.
     */
    public function getImagesAttribute(): array
    {
        return array_filter([
            $this->img1,
            $this->img2,
            $this->img3,
            $this->img4,
            $this->img5,
        ]);
    }

    /**
     * Get the main product image URL.
     */
    public function getMainImageUrlAttribute(): string
    {
        return $this->img1 ? asset('storage/' . $this->img1) : asset('images/default-product.png');
    }

    /**
     * Check if product is in stock.
     */
    public function isInStock(): bool
    {
        return $this->stock_quantity > 0;
    }

    /**
     * Increment views count.
     */
    public function incrementViews(): void
    {
        $this->increment('views');
    }
}
