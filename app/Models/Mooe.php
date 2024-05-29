<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mooe extends Model
{
    use HasFactory;

    protected $table = 'mooes';

    // protected $primaryKey = 'college_office';

    protected $fillable = [
        'college_office',
        'account_code',
        'item',
        'budget',
        'justification'
    ];
}