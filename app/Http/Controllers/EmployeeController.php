<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::latest()->get();
        return view('index', compact('employees'));
    }

    public function create()
    {
        return view('create');
    } 

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255','unique:employees,email'],
            'job_title' => ['required','string','max:255'],
            'salary' => ['required','numeric','min:0'],
        ]);  

        Employee::create($data);

        return redirect()->route('employees.index')->with('success', 'Employee added.');
    }

    public function edit(Employee $employee)
    {
        return view('edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255',"unique:employees,email,{$employee->id}"],
            'job_title' => ['required','string','max:255'],
            'salary' => ['required','numeric','min:0'],
        ]);

        $employee->update($data);

        return redirect()->route('employees.index')->with('success', 'Employee updated.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted.');
    }
}