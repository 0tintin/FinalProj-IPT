<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'position',
        'dateOfBirth',
        'hireDate',
    ];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public static function list()
    {
        $employees = Employee::orderByRaw('lastName')->get();
        $list = [];
        foreach ($employees as $employee) {
            $list[$employee->id]    = $employee->lastName;
        }

        return $list;
    }
}

