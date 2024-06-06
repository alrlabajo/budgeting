<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapitalOutlay extends Model
{
    use HasFactory;

    protected $primaryKey = 'capital_outlay_id';

    protected $fillable = [
        'college_office',
        'account_code',
        'item',
        'budget',
        'justification'
    ];
}
