<?php
namespace App\Modules\Advertisement_Package\src\Http\Requests\Params;

use App\Core\Http\Requests\Params\RequestParams;
class StoreRequestParams extends RequestParams
{
    public function __construct(
        public string $title,
        public string $description,
        public int $price,
        public string $category,
        public bool $is_active
    ) {

    }
}
