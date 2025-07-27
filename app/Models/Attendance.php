<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendance';

    protected $primaryKey = 'attendance_id';

    protected $fillable = [
        'studentlist_id',
        'faculty_id',
        'subject_name',
        'date',
        'status',
    ];

    // Relationships
    public function student()
    {
        return $this->belongsTo(Studentlist::class, 'studentlist_id', 'studentlist_id');
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id', 'faculty_id');
    }
}
