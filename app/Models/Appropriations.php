<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appropriations extends Model
{
    use HasFactory;

    protected $table = 'appropriations'; 

    protected $fillable = [
        'college_office', 
        'date', 
        'account_code', 
        'items_expenditure', 
        'budget', 
        'approved_board', 
        'total', 
        'obligations', 
        'unobligated'
    ];
}