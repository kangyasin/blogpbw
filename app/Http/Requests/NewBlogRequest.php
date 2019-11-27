<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewBlogRequest extends FormRequest
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
          'judul' => 'required|string|min:5|unique:blogs,judul',
          'artikel' => 'required',
          'gambar' => ''
      ];
  }

  public function messages()
  {
    return [
      'judul.required' => 'Judul wajib diisi',
      'judul.min' => 'Judul minimal 5 karakter',
      'judul.unique' => 'Judul harus unik',
      'artikel.required' => 'Deskripsi wajib diisi'
    ];
  }

}
