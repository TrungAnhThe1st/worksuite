<?php

namespace App\Http\Requests\Message;

use App\Http\Requests\CoreRequest;
use Illuminate\Foundation\Http\FormRequest;

class ClientChatStore extends CoreRequest
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
            'admin_id' => 'required_if:user_type,admin',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required_if' => 'Chọn một người dùng để gửi tin nhắn',
            'admin_id.required_if' => 'Chọn một admin để gửi tin nhắn',
        ];
    }

}
