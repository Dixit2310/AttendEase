<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';
    protected $primaryKey = 'subject_id';
    public $timestamps = true;

    protected $fillable = [
        'subject_name',
        'department_id',
        'semester',
    ];

    // Relationship with Department
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'department_id');
    }

}
