<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalServices extends Model
{
    use HasFactory;

    protected $table = 'personalservices';

    protected $primaryKey = 'personalservices_id';

    protected $fillable = [
        'college_office',
        'account_code',
        'item',
        'budget',
        'justification'
    ];
}
