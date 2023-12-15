<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'startTime',
        'endTime',
        'date',
        'breaksTaken',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public static function list()
    {
        $shifts = Shift::orderByRaw('id')->get();
        $list = [];
        foreach ($shifts as $shift) {
            $list[$shift->id]    = $shift->id;
        }

        return $list;
    }
}
