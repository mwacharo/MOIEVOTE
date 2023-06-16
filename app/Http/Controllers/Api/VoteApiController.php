<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Vote;
use App\Models\Candidate;
use App\Models\Group;

class VoteApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     */
    

   
    // public function create(Request $request)
    // {
    //     $this->validate($request, [
    //         'user_id' => 'required',
    //         'candidate_id' => 'required',
    //         'status' => 'required',
    //         'group_id' => 'required',
    //     ]);
    
    //     $user_id = $request->user_id;
    //     $candidate_id = $request->candidate_id;
    //     $status = $request->status;
    //     $group_id = $request->group_id;
    
    //     // Check if the user has already voted for the candidate in the group
    //     $check_if_user_has_voted_in_a_group = Vote::where('user_id', $user_id)
           
    //         ->where('group_id', $group_id)
    //         ->first();

    
    //     if ($check_if_user_has_voted_in_a_group) {
    //         $json_array = [
    //             'success' => 0,
    //             'message' => 'You have already voted for this candidate in the selected group.',
    //         ];
    //         return json_encode($json_array);
    //     }

    //     $check_if_user_has_voted_for_a_candidate = Vote::where('user_id', $user_id)
    //     ->where('candidate_id', $candidate_id)
    //     ->first();

    //     if ($check_if_user_has_voted_for_a_candidate ) {
    //         $json_array = [
    //             'success' => 0,
    //             'message' => 'You have already voted for this candidate ',
    //         ];
    //         return json_encode($json_array);
    //     }
    
    //     $data = [
    //         'user_id' => $user_id,
    //         'candidate_id' => $candidate_id,
    //         'status' => $status,
    //         'group_id' => $group_id,
    //     ];

    //     $vote = Vote::create($data);

       
    
    //     if ($vote) {
    //         $json_array = [
    //             'success' => 1,
    //             'message' => 'You have voted successfully.',
    //         ];
    //         return json_encode($json_array);
    //     } else {
    //         $json_array = [
    //             'success' => 0,
    //             'message' => 'Failed to vote.',
    //         ];
    //         return json_encode($json_array);
    //     }

     
    // } 

     
    public function result()
    {
        $candidates = Candidate::all();
        $groups = Group::all();
    
        $votes = [];
        $votes_of_groups = [];
    
        foreach ($candidates as $candidate) {
            $count = Vote::where('candidate_id', $candidate->id)
                ->count();
            
            $votes[$candidate->id] = $count;
        }
        
        // Sort the votes array in descending order
        arsort($votes);
        
        foreach ($groups as $group) {
            $total_count = Vote::where('group_id', $group->id)
                ->count();
        
            $votes_of_groups[$group->id] = $total_count;
        }
    
        // Create an array to hold the ranked candidates
        $ranked_candidates = [];
    
        // Assign the rank to each candidate based on the sorted votes array
        $rank = 1;
        foreach ($votes as $candidate_id => $count) {
            $candidate = Candidate::find($candidate_id);

            $candidate_name = $candidate ? $candidate->candidate_name : 'Unknown Candidate';

            $group_id = $candidate ? $candidate->group_id : null;

            $group_name = $group_id ? Group::find($group_id)->group_name : 'Unknown Group';
            $ranked_candidates[$rank] = [
                'candidate_name' => $candidate_name,
                'group_name' => $group_name,
                'votes' => $count,
            ];
            $rank++;
        }
    
        return [
            'votes' => $votes,
            'votes_of_groups' => $votes_of_groups,
            'ranked_candidates' => $ranked_candidates,
        ];
    }
    

    
      public function rank(){



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
