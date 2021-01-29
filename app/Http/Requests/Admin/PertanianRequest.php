<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PertanianRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'produk' => 'required|max:255',
            'bulan' => 'required|max:255',
            'terakhir' => 'required|max:255',
            'persentase' => 'required|max:255',
            'perubahan' => 'required|max:255',
        ];
    }
}
