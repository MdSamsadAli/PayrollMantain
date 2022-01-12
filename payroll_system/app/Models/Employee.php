<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======
    
>>>>>>> 73d55d5430b8542eefb904571c2a5e8ee10f610e
    protected $fillable=[
        "name",
        "email",
        "address",
        "role_id",
        "department_id",
        "salary"
    ];
    public function role(){
        return $this->belongsTo(Roll::class, 'role_id');
    }
    
    public function department(){
        return $this->belongsTo(Department::class, 'department_id');
    }
}
