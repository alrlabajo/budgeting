<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityJustification extends Model
{
    use HasFactory;

    protected $table = 'activityjustification'; 

    protected $fillable = [
        'college_office', 
        'statement_major', 
        'statement_specific', 
        'activity_justification', 
        'estimated_no_students', 
        'total_cost', 
        'cost_per_student', 
        'method_accomplishing', 
        'services_budet', 
        'mooe_budget', 
        'capital_outlay_budget',
        'total'
    ];
}
