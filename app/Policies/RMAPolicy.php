<?php

namespace App\Policies;

class RMAPolicy extends SnipePermissionsPolicy
{
    protected function columnName()
    {
        return 'rma';
    }
}
