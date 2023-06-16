<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //  
        $candidate= Candidate::all();
        dd('sucess');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        
        // 
        return view('candidate');
    }
  

    public function store(Request $request)
            {
    $this->validate($request, [
        'candidate_name' => 'required',
        'email' => 'required',
        'student_number' => 'required',
        'group_id' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $email = $request->email;
    $student_number = $request->student_number;

    // Check if email exists
    $email_check = Candidate::where('email', $email)->first();
    if ($email_check) {
        $response = [
            'success' => 3,
            'message' => "Email already exists",
        ];
        return json_encode($response);
    }

    // Check if student_number exists
    if ($email != '') {
        $student_number_check = Candidate::where('student_number', $student_number)->first();
        if ($student_number_check) {
            $response = [
                'success' => 3,
                'message' => "Student number already exists",
            ];
            return json_encode($response);
        }
    }

    // Check if image is available
    if (!$request->hasFile('image')) {
        $response = [
            'success' => 3,
            'message' => "Image is required",
        ];
        return json_encode($response);
    }

    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('images'), $imageName);

    $candidate = new Candidate();
    $candidate->candidate_name = $request->candidate_name;
    $candidate->email = $request->email;
    $candidate->student_number = $request->student_number;
    $candidate->group_id = $request->group_id;
    $candidate->image = $imageName;

    $candidate->save();

    $response = [
        'success' => 1,
        'redirect' => '/index',
    ];
    return json_encode($response);
}

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
