<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amendment extends Model
{
    use HasFactory;

    protected $table = 'amendment'; 

    protected $fillable = [
        'college_office', 
        'No', 
        'plan_no_revised', 
        'date_revision', 
        'planned_amount',
        'date_submission', 
        'item_No', 
        'description', 
        'quantity', 
        'unit', 
        'unit_cost', 
        'amount', 
        'procurement_quantity',
        'procurement_amount',
        'procurement_justification'
    ];
}