<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::with('department')->get();
        return view('staffs.index', compact('staffs'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('staffs.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:50',
            'department_id' => 'required|exists:departments,id',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'bio' => 'nullable|string',
            'salary_type' => 'required|string|max:50',
            'salary_amount' => 'required|numeric',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        Staff::create(array_merge($request->all(), ['photo' => $photoPath]));
        return redirect()->route('staffs.index')->with('success', 'Staff created successfully.');
    }

    public function show(Staff $staff)
    {
        return view('staffs.show', compact('staff'));
    }

    public function edit(Staff $staff)
    {
        $departments = Department::all();
        return view('staffs.edit', compact('staff', 'departments'));
    }

    public function update(Request $request, Staff $staff)
    {
        $request->validate([
            'full_name' => 'required|string|max:50',
            'department_id' => 'required|exists:departments,id',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'bio' => 'nullable|string',
            'salary_type' => 'required|string|max:50',
            'salary_amount' => 'required|numeric',
        ]);

        $photoPath = $staff->photo;
        if ($request->hasFile('photo')) {
            if ($photoPath && \Storage::exists('public/' . $photoPath)) {
                \Storage::delete('public/' . $photoPath);
            }

            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        $staff->update(array_merge($request->all(), ['photo' => $photoPath]));
        return redirect()->route('staffs.index')->with('success', 'Staff updated successfully.');
    }

    public function destroy(Staff $staff)
    {
        if ($staff->photo && \Storage::exists('public/' . $staff->photo)) {
            \Storage::delete('public/' . $staff->photo);
        }

        $staff->delete();
        return redirect()->route('staffs.index')->with('success', 'Staff deleted successfully.');
    }
}
