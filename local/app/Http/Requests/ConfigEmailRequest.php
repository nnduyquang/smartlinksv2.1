<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigEmailRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
            case 'POST': {
                return [
                    'email-receive' => 'required|email',
                    'email-sender-subject'=>'required',
                    'email-sender-from'=>'required',
                    'email-receive-subject'=>'required',
                    'email-receive-from'=>'required',
                    'email-sender-content'=>'required',
                ];
            }
            case 'PUT':
            case 'PATCH':
        }
    }
    public function messages()
    {
        return [
            'email-receive.required' => 'Mời Nhập Email Nhận Báo Giá',
            'email-receive.email' => 'Mời Nhập Đúng Định Dạng Email',
            'email-receive-subject.required' => 'Tiêu Đề Mail Nhận Không Để Trống',
            'email-receive-from.required' => 'From Mail Nhận Không Để Trống',
            'email-sender-content.required' => 'Nội Dung Gửi Khách Hàng Không Để Trống',
            'email-sender-subject.required' => 'Tiêu Đề Mail Gửi Không Để Trống',
            'email-sender-from.required' => 'From Mail Gửi Không Để Trống',

        ];
    }
}
