<?php

declare(strict_types=1);

namespace App\Http\Requests\News;

use App\Enums\NewsStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class Update extends FormRequest
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
        return [
            'categories' => ['required', 'array'],
            'categories.*' => ['exists:categories,id'],
            'data_sources' => ['required', 'array'],
            'data_sources.*' => ['exists:data_sources,id'],
            'title' => ['required', 'string', 'min:7', 'max:200'],
            'author' => ['nullable', 'string', 'min:2', 'max:50'],
            'image' => ['sometimes', 'image', 'mimes:jpg,bmp,png],
            'status' => ['required', new Enum(NewsStatus::class)],
            'description' => ['nullable', 'string', 'min:0', 'max:200'],
        ];
    }

    public function getCategories(): array
    {
        return $this->validated('categories');
    }
    public function getDataSources(): array
    {
        return $this->validated('data_sources');
    }
    public function messages(): array
    {
        return [
            'required' => "Необходимо заполнить поле :attribute",
        ];
    }

    public function attributes()
    {
        return  [
            'title' => 'Наименование'
        ];
    }
}
