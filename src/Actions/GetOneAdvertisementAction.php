<?php

namespace App\Modules\Advertisement_Package\src\Actions;

use App\Core\Actions\CoreAction;
use App\Modules\Advertisement_Package\src\Models\Advertisement;

class GetOneAdvertisementAction extends CoreAction
{
    public function handle(Advertisement $advertisement)
    {

        return Advertisement::where('id',$advertisement->id)->first();
    }
}
