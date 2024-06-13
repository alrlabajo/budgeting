<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bur extends Model
{
    use HasFactory;

    protected $table = 'bur';

    protected $fillable = [
        'college_office',
        'cfa_number',
        'no',
        'payee',
        'office',
        'address',
        'responsibility_center',
        'account_code',
        'particulars',
        'amount'
    ];
}
