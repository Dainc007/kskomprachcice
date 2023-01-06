<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nav extends Model
{
    use HasFactory;

    public const MAIN_NAV = [
        'Jak się zapisać', 'grupy', 'trenerzy', 'sponsorzy', 'turnieje', 'galeria', 'sklep'
    ];
}
