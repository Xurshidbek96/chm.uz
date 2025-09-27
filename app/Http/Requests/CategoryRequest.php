<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'description_uz' => 'nullable|string',
            'description_en' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'boolean',
            'sort_order' => 'integer|min:0',
        ];

        // For update requests, make slug unique except for current record
        if ($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            $categoryId = $this->route('category');
            $rules['slug'] = 'nullable|string|max:255|unique:categories,slug,' . $categoryId;
        } else {
            $rules['slug'] = 'nullable|string|max:255|unique:categories,slug';
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
            'img.image' => 'Fayl rasm formatida bo\'lishi kerak',
            'img.mimes' => 'Rasm jpeg, png, jpg yoki gif formatida bo\'lishi kerak',
            'img.max' => 'Rasm hajmi 2MB dan oshmasligi kerak',
            'slug.unique' => 'Bu slug allaqachon mavjud',
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