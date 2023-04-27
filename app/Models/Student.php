<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;
//  protected $table = 'students';
    protected $fillable = ['name', 'city', 'marks','email','address','DOB', 'gender', 'subject', 'state', 'photo'];
    public function setSubjectAttribute($value)
    {
        $this->attributes['subject'] = implode(',', (array)$value);
    }
    // public function getSubjectAttribute($value)
    // {
    //     return is_string($value) ? explode(',', $value) : $value;
        
    // }

    
    protected static function booted()
    {
        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString();
        });
    }
    // public function student()
    // {
    //     return $this->belongsToMany(Teacher::class, 'student_teacher');
    // }
}
