<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'name_uz' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'product_uz' => 'nullable|string|max:255',
            'product_en' => 'nullable|string|max:255',
            'model' => 'nullable|string|max:255',
            'price_usd' => 'nullable|numeric|min:0',
            'price_uzs' => 'nullable|numeric|min:0',
            'title_uz' => 'nullable|string',
            'title_en' => 'nullable|string',
            'description_uz' => 'nullable|string',
            'description_en' => 'nullable|string',
            'img1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img5' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'boolean',
            'featured' => 'boolean',
            'stock_quantity' => 'integer|min:0',
            'sku' => 'nullable|string|max:255',
        ];

        // For update requests, make slug and sku unique except for current record
        if ($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            $productId = $this->route('product');
            $rules['slug'] = 'nullable|string|max:255|unique:products,slug,' . $productId;
            $rules['sku'] = 'nullable|string|max:255|unique:products,sku,' . $productId;
        } else {
            $rules['slug'] = 'nullable|string|max:255|unique:products,slug';
            $rules['sku'] = 'nullable|string|max:255|unique:products,sku';
        }

        return $rules;
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name_uz.required' => 'O\'zbek tilida nom kiritish majburiy',
            'name_en.required' => 'Ingliz tilida nom kiritish majburiy',
            'category_id.required' => 'Kategoriya tanlash majburiy',
            'category_id.exists' => 'Tanlangan kategoriya mavjud emas',
            'price_usd.numeric' => 'USD narxi raqam bo\'lishi kerak',
            'price_uzs.numeric' => 'UZS narxi raqam bo\'lishi kerak',
            'img1.image' => 'Birinchi rasm fayli rasm formatida bo\'lishi kerak',
            'img1.mimes' => 'Rasm jpeg, png, jpg yoki gif formatida bo\'lishi kerak',
            'img1.max' => 'Rasm hajmi 2MB dan oshmasligi kerak',
            'stock_quantity.integer' => 'Zaxira miqdori butun son bo\'lishi kerak',
            'stock_quantity.min' => 'Zaxira miqdori manfiy bo\'lmasligi kerak',
            'slug.unique' => 'Bu slug allaqachon mavjud',
            'sku.unique' => 'Bu SKU allaqachon mavjud',
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        if ($this->filled('name_uz') && !$this->filled('slug')) {
            $this->merge([
                'slug' => \Str::slug($this->name_uz),
            ]);
        }
    }
}