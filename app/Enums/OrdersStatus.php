<?php

namespace App\Enums;

enum OrdersStatus: int
{
    case Pending = 0;
    case Active = 1;
    case Inactive = 2;
    case Rejected = 3;
    case Completed = 4;
}
