<?php
namespace App\Modules\Advertisement_Package\src\Http\Requests;

use App\Core\Http\Requests\CoreFormRequest;
use App\Modules\Advertisement_Package\src\Http\Requests\Params\StoreRequestParams;


class StoreRequest extends CoreFormRequest
{
    protected string $params = StoreRequestParams::class;

    public function rules(): array
    {
        return [
            'title'  => ['required', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.max' => __('Заголовок не должен превышать :max символов'),
        ];
    }
}
