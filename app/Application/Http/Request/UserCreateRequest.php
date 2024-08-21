<?php

declare(strict_types=1);

namespace Application\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'     => 'required|max:200',
            'email'    => 'required|email|user',
        ];
    }
}
