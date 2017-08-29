<?php

namespace App\Http\Requests;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;
use League\Flysystem\Exception;

class PageSpeedInsightRequest extends FormRequest
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
                    'website' => 'required',
                    'phone_number' => 'required|numeric|digits_between:10,12',
                    'email_return' => 'required|email',

                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'title' => 'required',
                    'content' => 'required'
                ];
            }
        }
    }

    public function messages()
    {
        return [
            'website.required' => 'Xin Vui Lòng Nhập Website Của Quý Khách',
            'phone_number.required' => 'Xin Vui Lòng Nhập Số Điện Thoại Liên Hệ',
            'phone_number.numeric' => 'Số Điện Thoại Không Đúng Định Dạng',
            'phone_number.digits_between' => 'Số Điện Thoại Không Đúng Định Dạng',
            'email_return.required' => 'Xin Vui Lòng Nhập Email Của Quý Khách',
            'email_return.email' => 'Email Không Đúng Định Dạng',
        ];
    }

    public function withValidator($validator)
    {
        if ($this->method() == 'POST') {
            $validator->after(function ($validator) {
                if (!$this->checkURLValid()) {
                    $validator->errors()->add('website', 'Website Không Tồn Tại');
                }
            });
        }
    }

    public function checkURLValid()
    {
        $url = Input::get('website');
        $client = new Client(['verify' => false]);
        try {
            $client->request('GET', $url);
            return 1 == 1;
        } catch (ConnectException $e) {
            return 0 == 1;
        }
    }
}
