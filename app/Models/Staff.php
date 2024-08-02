<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staffs';


    protected $fillable = [
        'full_name',
        'department_id',
        'photo',
        'bio',
        'salary_type',
        'salary_amount',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
