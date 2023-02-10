<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nav extends Model
{
    use HasFactory;

    public const MAIN_NAV = [
        'howToSignIn', 'groups', 'coaches', 'partners', 'tournaments', 'galery', 'trainingGear'
    ];

    public const GROUPS = ['youngest', 'young', 'mid', 'old' ];
}
