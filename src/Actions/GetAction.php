<?php

namespace App\Modules\Advertisement_Package\src\Actions;

use App\Core\Actions\CoreAction;
use App\Modules\Advertisement_Package\src\Models\Advertisement;

class GetAction extends CoreAction
{
    public function handle()
    {
        return Advertisement::get();
    }
}
