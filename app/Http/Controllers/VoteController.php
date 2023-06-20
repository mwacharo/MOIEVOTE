<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Candidate;
use \App\Models\Group;
use \App\Models\User;
use \App\Models\Vote;
use Carbon\Carbon;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * 
     */

     
    public function index()
    {
        //
        $candidates= Candidate::all();
        $total_candidates= Candidate::whereNotNull('id')->count();
        $total_positions= Group::whereNotNull('id')->count();
        $registerd_voters= User::whereNotNull('id')->count();
        $presidents = Candidate::where('group_id', 1)->count();
        $secretary = Candidate::where('group_id', 2)->count();
        $entertainment = Candidate::where('group_id', 3)->count();
        $tresury = Candidate::where('group_id', 4)->count();
        $presidents_cast=Vote::where('group_id', 1)->count();
        $secretary_cast=Vote::where('group_id', 2)->count();
        $entertainment_cast=Vote::where('group_id', 3)->count();
        $tresury_cast=Vote::where('group_id', 4)->count();



            $date = Carbon::now();
           $formattedTime = $date->format('H:i:s');
        //    echo "Current time: $formattedTime";




        

      //dd($total_candidates);

       // dd($candidates);
        return view('index',compact('total_candidates','total_positions','registerd_voters','presidents','secretary','tresury','entertainment','presidents_cast','secretary_cast','entertainment_cast','tresury_cast','date'));
    }


     
    public function entertainment(){
        
        $entertainments = Candidate::where('group_id', '3')->get();
        $total_entertainment=Candidate::where('group_id', '3')->count();
         // dd($total_entertainment);
        //dd($entertainments);

        return view(' entertainment',compact('total_entertainment','entertainments'));

    }

    public function president()
    {
        $presidents = Candidate::where('group_id', '1')->get(); 
        $total_president=Candidate::where('group_id', '1')->count();

        //dd( $presidents);
        return view('president', compact('total_president','presidents'));
    }
    

    public function secretary(){
        $secretaries = Candidate::where('group_id', '2')->get();
        $total_secratary=Candidate::where('group_id', '2')->count();
        //dd($secretaries);
         
        return view ('secretary',compact('secretaries','total_secratary'));
        
    }

    public function tresury(){
        $tresurys= Candidate::where('group_id', '4')->get();
        $total_tresury=Candidate::where('group_id', '4')->count();
         //dd($tresurys );
        return view ('tresury',compact('total_tresury','tresurys'));
        
    }
    /**
     * Show the form for creating a new resource.
     */


     public function create(Request $request)
     {
         $this->validate($request, [
             'user_id' => 'required',
             'candidate_id' => 'required',
             'status' => 'required',
             'group_id' => 'required',
         ]);
     
         $user_id = $request->user_id;
         $candidate_id = $request->candidate_id;
         $status = $request->status;
         $group_id = $request->group_id;
     
         // Check if the user has already voted for the candidate in the group
         $check_if_user_has_voted_in_a_group = Vote::where('user_id', $user_id)
            
             ->where('group_id', $group_id)
             ->first();
 
     
         if ($check_if_user_has_voted_in_a_group) {
             $json_array = [
                 'success' => 0,
                 'message' => 'You have already voted for this candidate in the selected group.',
             ];
             return json_encode($json_array);
         }
 
         $check_if_user_has_voted_for_a_candidate = Vote::where('user_id', $user_id)
         ->where('candidate_id', $candidate_id)
         ->first();
 
         if ($check_if_user_has_voted_for_a_candidate ) {
             $json_array = [
                 'success' => 0,
                 'message' => 'You have already voted for this candidate ',
             ];
             return json_encode($json_array);
         }
     
         $data = [
             'user_id' => $user_id,
             'candidate_id' => $candidate_id,
             'status' => $status,
             'group_id' => $group_id,
         ];
 
         $vote = Vote::create($data);
 
        
     
         if ($vote) {
             $json_array = [
                 'success' => 1,
                 'message' => 'You have voted successfully.',
             ];
             return json_encode($json_array);
         } else {
             $json_array = [
                 'success' => 0,
                 'message' => 'Failed to vote.',
             ];
             return json_encode($json_array);
         }
 
        // Redirect to /index route
    return redirect('/index');
     } 

     public function result()
     {
         $candidates = Candidate::all();
         $groups = Group::all();
         $votes = Vote::all();
        $voteCounts = [];

    // Calculate vote count for each candidate
    foreach ($candidates as $candidate) {
        $total_votes = $votes->where('candidate_id', $candidate->id)->count();
        $voteCounts[$candidate->id] = $total_votes;
    }
    //dd(compact('votes','candidates','voteCounts'));
         return view('result',compact('votes','candidates','voteCounts'));
     
    }
     

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

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
