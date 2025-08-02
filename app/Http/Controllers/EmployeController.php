<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes = Employe::all();
        return view('Employe.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Employe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'ssn' => 'required|unique:employes,ssn',
            'fname' => 'required|string|max:50',
            'lname' => 'required|string|max:50',
            'email' => 'required|email|unique:employes,email',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gender' => 'required|in:male,female',
            'department' => 'required|string|max:100',
        ]);


        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
        }


        Employe::create([
            'ssn' => $request->ssn,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'image' => $imageName,
            'gender' => $request->gender,
            'department' => $request->department,
        ]);

        return to_route('employe.index');
    }


    /**
     * Display the specified resource.
     */
    // public function show(Employe $employe)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employe $employe)
    {
        return view('Employe.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employe $employe)
    {
        $employe->update([
            'ssn'=>$request->ssn,
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'email'=>$request->email,
            'image'=>$request->image,
            'gender'=>$request->gender,
            'department'=>$request->department
        ]);
        return to_route('employe.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        Employe::find($id)->delete();
        return to_route('employe.index');
    }
}
