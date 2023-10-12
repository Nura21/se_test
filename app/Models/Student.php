<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'name',
        'grade_id',
        'address',
    ];

    public $rules = [
        'name' => 'required|string',
        'grade_id' => 'required',
        'address' => 'required|string',
    ];

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id', 'id')->withDefault();
    }
}
