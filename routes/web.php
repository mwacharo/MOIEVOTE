<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\CandidateController;

use \App\Models\Candidate;
use \App\Models\Group;
use \App\Models\User;
use \App\Models\Vote;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {

//     $data = [
//         'total_candidates' => Candidate::whereNotNull('id')->count(),
//         'total_positions' => Group::whereNotNull('id')->count(),
//         'registered_voters' => User::whereNotNull('id')->count(),
//         'presidents' => Candidate::where('group_id', 1)->count(),
//         'secretary' => Candidate::where('group_id', 2)->count(),
//         'entertainment' => Candidate::where('group_id', 3)->count(),
//         'treasury' => Candidate::where('group_id', 4)->count(),
//         'presidents_cast' => Vote::where('group_id', 1)->count(),
//         'secretary_cast' => Vote::where('group_id', 2)->count(),
//         'entertainment_cast' => Vote::where('group_id', 3)->count(),
//         'treasury_cast' => Vote::where('group_id', 4)->count(),
//         'date' => Carbon::now(),
//     ];
    
//     return view('index');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', function () {
    $data = [
        'total_candidates' => Candidate::whereNotNull('id')->count(),
        'total_positions' => Group::whereNotNull('id')->count(),
        'registered_voters' => User::whereNotNull('id')->count(),
        'presidents' => Candidate::where('group_id', 1)->count(),
        'secretary' => Candidate::where('group_id', 2)->count(),
        'entertainment' => Candidate::where('group_id', 3)->count(),
        'treasury' => Candidate::where('group_id', 4)->count(),
        'presidents_cast' => Vote::where('group_id', 1)->count(),
        'secretary_cast' => Vote::where('group_id', 2)->count(),
        'entertainment_cast' => Vote::where('group_id', 3)->count(),
        'treasury_cast' => Vote::where('group_id', 4)->count(),
        'date' => Carbon::now(),
    ];

    return view('index',$data);
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/entertainment', [VoteController::class, 'entertainment'])->name('vote.entertainment');
    Route::get('/president', [VoteController::class, 'president'])->name('vote.president');
    Route::get('/secretary', [VoteController::class, 'secretary'])->name('vote.secretary');
    Route::get('/tresury', [VoteController::class, 'tresury'])->name('vote.tresury'); 



    Route::get('/index', [VoteController::class, 'index'])->name('vote.index');

    
    Route::get('/candidate-create', [CandidateController::class, 'create'])->name('candidate.create'); 
    Route::post('/candidate-store', [CandidateController::class, 'store'])->name('candidate.store'); 
    Route::get('/result', [VoteController::class, 'result'])->name('vote.result');
     Route::post('/vote-create', [VoteController::class, 'create'])->name('vote.create');
    

    
    
});

require __DIR__.'/auth.php';
