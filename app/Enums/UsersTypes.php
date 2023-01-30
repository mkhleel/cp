<?php

namespace App\Enums;

enum UsersTypes: string
{
    case Admin = 'admin';
    case Freelancer = 'freelancer';
    case Client = 'client';
}
