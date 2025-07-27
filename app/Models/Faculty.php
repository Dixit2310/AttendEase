<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $table = 'faculty'; // Explicitly define table name

    protected $primaryKey = 'faculty_id';

    protected $fillable = [
        'full_name',
        'faculty_code',
        'email',
        'phone_number',
        'date_of_birth',
        'gender',
        'designation',
        'department_id',
        'faculty_password',
    ];

    // Relationship: Faculty belongs to a Department
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'department_id');
    }
}
