<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory;
     protected $table = 'teachers';

    protected $fillable = ['name', 'age', 'department', 'salary', 'gender'];

    public function teacher()
    {
        return $this->hasMany(Student::class);
    }
    
}
