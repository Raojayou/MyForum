<?php

namespace App\Http\Requests;

use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class UpdateTopicAjaxRequest extends UpdateTopicRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = array();
        if ($this->exists('title')) {
            $rules['title'] = $this->validateTitle();
        }
        if ($this->exists('category')) {
            $rules['category'] = $this->validateCategory();
        }
        $rules = array();
        if ($this->exists('content')) {
            $rules['content'] = $this->validateContent();
        }

        return $rules;
    }

    protected function failedValidation($validator)
    {
        $errors = $validator->errors();
        $response = new JsonResponse([
            'title' => $errors->get('title'),
            'category' => $errors->get('category'),
            'content' => $errors->get('content'),

        ]);

        throw new ValidationException($validator, $response);
    }
}

