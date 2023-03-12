<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }
        protected $rules = [];
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $method = $this->method();
        if (null !== $this->get("_method", null)) {
            $method = $this->get("_method");
        }
        $this->offsetUnset("_method");
        switch ($method) {
            case "DELETE":
                $this->rules = [];
                break;
            case "GET":
                $this->rules = [];
                break;

            case "POST":
                $this->rules = [];
                break;
            // in case of edit
            case "PUT":
            case "PATCH":
                $this->rules = [];
                break;
            default:
                $this->rules = [];
                break;
        }

        return $this->rules;
    }
}
