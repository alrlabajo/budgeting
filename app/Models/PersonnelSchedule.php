<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonnelSchedule extends Model
{
    use HasFactory;

    protected $table = 'personnelschedule';

    protected $primaryKey = 'personnelsched_id';

    protected $fillable = [
        'college_office',
        'item_no',
        'grade_step',
        'position',
        'name_incumbent',
        'annual_salary',
        'proposed_salary',
        'increase',
        'total',
        'sub_total'
    ];
}
