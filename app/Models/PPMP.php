<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPMP extends Model
{
    use HasFactory;

    protected $table = 'ppmp';

    protected $primaryKey = 'ppmp_id';

    protected $fillable = [
        'college_office',
        'program_title',
        'project_title',
        'type_contract',
        'account_title',
        'item_name',
        'unit_issue',
        'unit_price',
        'quantity',
        'account_code',
        'description',
        'procurement_method',
        'estimated_budget',
        'Jan',
        'Feb',
        'Mar',
        'Apr',
        'May',
        'Jun',
        'Jul',
        'Aug',
        'Sep',
        'Oct',
        'Nov',
        'Dec',
        'selected_months'


    ];
}
