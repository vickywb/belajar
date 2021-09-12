<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    CONST GENDER_MAP = [
        'L' => 'Laki-Laki',
        'P' => 'Perempuan',
    ];

    CONST RELIGION_MAP = [
        'i' => 'Islam',
        'kr' => 'Kristen',
        'kt' => 'Katolik',
        'bd' => 'Buddha',
        'hn' => 'Hindu',
        'kc' => 'Konghucu',
    ];

    protected $fillable = [
        'name',
        'role_id',
        'email',
        'gender',
        'born_place',
        'born_date',
        'school_origin',
        'religion',
        'address',
        'phone_number',
        'image',
    ];

    public $dates = [
        'born_date',
    ];

    public function getBirthdateAttribute()
    {
        return $this->born_date->format('j F, Y');
    }

    public function getBirthdateinputAttribute()
    {
        return $this->born_date->format('Y-m-d');
    }
}
