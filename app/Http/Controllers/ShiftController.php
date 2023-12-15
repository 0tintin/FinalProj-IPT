<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Shift;
use Illuminate\Http\Request;

class ShiftController extends Controller
{ 
    public function shift()
    {
        $shift = Shift::orderBy('id')->get();
        return view('shift.index', ['shifts' => $shift]);
    }

    public function create()
    {
        $employees = Employee::list();
        return view('shift.create', ['employees' => $employees]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id'  => 'required',
            'startTime'    => 'required',
            'endTime'      => 'required',
            'date'         => 'required|date',
            'breaksTaken'  => 'required',
        ]);

        Shift::create([
            'employee_id' => $request->employee_id,
            'startTime'   => $request->startTime,  
            'endTime'     => $request->endTime,
            'date'        => $request->date,
            'breaksTaken' => $request->breaksTaken,
        ]);

        return redirect('/shifts')->with('message', 'A shift has been added');
    }

    public function edit(Shift $shift)
    {
        return view('shift.edit', compact('shift'));
    }

    public function update(Shift $shift, Request $request)
    {
        $request->validate([
            'startTime'    => 'required',
            'endTime'      => 'required',
            'date'         => 'required|date',
            'breaksTaken'  => 'required',
        ]);

        $shift->update($request->all());
        return redirect('/shifts')->with('message', "Shift ID No. $shift->id has been updated successfully. YEHEYYYYYYYYYYYY!!!");
    }

    public function delete(Shift $shift)
    {
        $shift->delete();

        return redirect('/shifts')->with('message', "Shift ID No. $shift->id has been deleted successfully. BYEEEEEEEEEEEEEEE!!!");

    }
    
}
