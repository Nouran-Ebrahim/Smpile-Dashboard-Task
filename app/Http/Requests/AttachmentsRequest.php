<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttachmentsRequest extends FormRequest
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
            'title' => 'required',
            'file_name' => 'required||mimes:pdf,jpeg,png,jpg',
            'type' => 'required',
        ];
    }

	/**
	 * @return mixed
	 */
	public function getRedirect() {
		return $this->redirect;
	}

	/**
	 * @param mixed $redirect
	 * @return self
	 */
	public function setRedirect($redirect): self {
		$this->redirect = $redirect;
		return $this;
	}
}
