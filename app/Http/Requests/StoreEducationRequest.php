<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Astrotomic\Translatable\Validation\RuleFactory;

class StoreEducationRequest extends FormRequest
{
/**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
       
        
        $rules = RuleFactory::make([
            '%title%' => 'required|string',
            '%text%' => 'required|string',
        ]);

        return $rules;
    }
}
