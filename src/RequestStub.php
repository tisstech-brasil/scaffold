<?php

namespace App\Http\Requests\{{capPlural}};

use App\Models\User;
use App\Http\Requests\Request;

class {{capSingle}}Request extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            {{field_names}}
        ];
    }
}
