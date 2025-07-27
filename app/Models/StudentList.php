<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentlist extends Model
{
    use HasFactory;

    protected $table = 'student_list';

    protected $primaryKey = 'studentlist_id';

    protected $fillable = [
        'full_name',
        'email',
        'enrollment',
        'phone',
        'temp_password',
        'password',
        'gender',
        'dob',
        'department_id',
        'semester',
        'division',
    ];

    // Relationship: Each student belongs to a department
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'department_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'subject_id');
    }
}
