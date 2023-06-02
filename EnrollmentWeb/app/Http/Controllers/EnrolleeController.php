<?php

namespace App\Http\Controllers;

use App\Models\Enrollees;
use Illuminate\Http\Request;

class EnrolleeController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'gender' => 'required|in:male,female',
            'email' => 'required|email|unique:users,email',
            'contactnumber' => 'required|string|max:20',
        ]);
    
        $user = Enrollees::create($validatedData);
    
        return response()->json([
            'message' => 'User created successfully',
            'user' => $user,
        ], 201);
    }
    
    public function destroy($id)
    {
        $enrollment = Enrollees::find($id);
        if (!$enrollment) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }
        $enrollment->delete();
        return response()->json([
            'message' => 'Record deleted successfully',
        ], 200);
    }
    
    public function update(Request $request, $id)
    {
        $enrollment = Enrollees::find($id);
        
        if (!$enrollment) {
            return response()->json(['message' => 'Enrollment not found'], 404);
        }
        
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'gender' => 'required|in:male,female',
            'email' => 'required|email|unique:users,email',
            'contactnumber' => 'required|string|max:20',
        ]);
    
        $enrollment->update($validatedData);
    
        return response()->json([
            'message' => 'Enrollment updated successfully',
            'enrollment' => $enrollment,
        ], 200);
    }
    public function submitupdate(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'contactnumber' => 'required',
        ]);

        return redirect()->route('form.result')->withInput();
    }

    public function result()
    {
        return view('form-result');
    }
}
