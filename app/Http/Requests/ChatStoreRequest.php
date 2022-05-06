<?php

namespace App\Http\Requests;

use App\Http\Requests\CoreRequest;

class ChatStoreRequest extends CoreRequest
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
            'message' => 'required',
            'user_id' => 'required_if:user_type,employee',
            'client_id' => 'required_if:user_type,client',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required_if' => 'Chọn một người dùng để gửi tin nhắn',
            'client_id.required_if' => 'Chọn một khách hàng để gửi tin nhắn',
        ];
    }

}
