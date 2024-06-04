<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employeemodel extends Model
{
    use HasFactory;
    protected $table = 'grasyatb';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name','email','password','conpass'
    ];
}
