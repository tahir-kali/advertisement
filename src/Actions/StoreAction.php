<?php

namespace App\Modules\Advertisement_Package\src\Actions;

use App\Core\Actions\CoreAction;
use App\Http\Requests\Params\StoreRequestParams;
use App\Modules\Advertisement_Package\src\Models\Advertisement;

class StoreAction extends CoreAction
{
    public function handle(StoreRequestParams $params)
    {

       $ad = Advertisement::create([
           "title"=>$params->title,
           "description"=>$params->description,
           "price"=>$params->price,
           "category"=>$params->category,
           "is_active"=>$params->is_active
       ]);
       return $ad;
    }
}
