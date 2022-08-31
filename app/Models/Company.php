<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'website', 'email', 'description'];

    public function employee(){
        return $this->hasMany(Employee::class);
    }

}
