<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Candidate;
use App\Models\Group;
use Illuminate\Support\Facades\File;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $candidates = [
            [
                'candidate_name' => 'John',
                'email' => 'john1@example.com',
                'student_number' => 345,
                'group_id' => 1,
                'image'=>'/image/donald-g402a32283_1280.png'
            ],
            [
                'candidate_name' => 'Jane',
                'email' => 'jane@example.com',
                'student_number' => 245551245,
                'group_id' => 2,
                'image'=>'/image/pexels-august-de-richelieu-4427616.jpg'
            ],
            [
                'candidate_name' => 'Jane',
                'email' => 'jane@example.com',
                'student_number' => 1111245,
                'group_id' => 2,
                'image'=>'/image/pexels-israel-torres-16864126.jpg'
            ],
            [
                'candidate_name' => 'Jane olo',
                'email' => 'ne@example.com',
                'student_number' => 300001245,
                'group_id' => 3,
                'image'=>'/image/pexels-mikhail-nilov-8847047.jpg'
            ],
            [
                'candidate_name' => 'Anne Jane',
                'email' => 'maryannn@example.com',
                'student_number' => 898941245,
                'group_id' => 3,
                'image'=>'/image/pexels-monstera-6194365.jpg'
            ],
            // [
            //     'candidate_name' => 'joseph Jane',
            //     'email' => 'josephjane@example.com',
            //     'student_number' => 1245000,
            //     'group_id' => 3,
            //     'image'=>''
            // ],
            [
                'candidate_name' => 'client Jane',
                'email' => 'clientjane@example.com',
                'student_number' => 1200045,
                'group_id' => 4,
                'image'=>'/image/pexels-rdne-stock-project-6172609.jpg'
            ],
            // [
            //     'candidate_name' => 'Jane',
            //     'email' => 'jane@example.com',
            //     'student_number' => 1000245,
            //     'group_id' => 4,
            //     'image'=>''
            // ],
            [
                'candidate_name' => 'don Jane',
                'email' => 'donjane@example.com',
                'student_number' => 676771245,
                'group_id' => 4,
                'image'=>'/image/putin-g3bb4fae42_1280.jpg'
            ],
            // [
            //     'candidate_name' => 'mimi Jane',
            //     'email' => 'miminjane@example.com',
            //     'student_number' => 99991245,
            //     'group_id' => 1,
            // ],
            // [
            //     'candidate_name' => 'Jane',
            //     'email' => 'jane@example.com',
            //     'student_number' => 7771245,
            //     'group_id' => 2,
            //     'image'=>''
            // ],
            // [
            //     'candidate_name' => 'Jane',
            //     'email' => 'jane@example.com',
            //     'student_number' => 66661245,
            //     'group_id' => 2,
            //     'image'=>''
            // ],
            // [
            //     'candidate_name' => 'Jane',
            //     'email' => 'jane@example.com',
            //     'student_number' => 87561245,
            //     'group_id' => 1,
            //     'image'=>''
            // ],
            // [
            //     'candidate_name' => 'olo Jane',
            //     'email' => 'ala jane@example.com',
            //     'student_number' => 8961245,
            //     'group_id' => 4,
            //     'image'=>''
            // ],
            // ... add more candidates
        ]; foreach ($candidates as $candidate) {
            $existingCandidate = Candidate::where('email', $candidate['email'])->first();
    
            if ($existingCandidate) {
                $existingCandidate->update($candidate);
            } else {
                // Store the image and get its path
                if (isset($candidate['image']) && $candidate['image'] !== '') {
                    $imagePath = public_path('images/' . $candidate['image']);
    
                    if (File::exists($imagePath)) {
                        $path = 'images/' . $candidate['image'];
                        $candidate['image'] = $path;
                    }
                }
    
                Candidate::create($candidate);
            }
        }
        
        // foreach ($candidates as $candidate) {
        //     $existingCandidate = Candidate::where('email', $candidate['email'])->first();
        
        //     if ($existingCandidate) {
        //         $existingCandidate->update($candidate);
        //     } else {
        //         Candidate::create($candidate);
        //     }
        // }

        foreach ($candidates as $candidate) {
            $existingCandidate = Candidate::where('email', $candidate['email'])->first();
    
            if ($existingCandidate) {
                $existingCandidate->update($candidate);
            } else {
                // Store the image and get its path
                if (isset($candidate['image']) && $candidate['image'] !== '') {
                    $imagePath = public_path('images/' . $candidate['image']);
    
                    if (File::exists($imagePath)) {
                        $imageData = file_get_contents($imagePath);
                        $base64Image = base64_encode($imageData);
                        $candidate['image'] = $base64Image;
                    }
                }
    
                Candidate::create($candidate);
            }
        }
}
}