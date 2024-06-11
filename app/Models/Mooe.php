<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mooe extends Model
{
    use HasFactory;

    // protected $table = 'mooes';

    protected $primaryKey = 'mooe_id';

    protected $fillable = [
        'college_office',
        'account_code',
        'item',
        'budget',
        'justification'
    ];
}
