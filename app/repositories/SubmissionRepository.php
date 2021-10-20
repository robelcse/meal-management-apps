<?php

namespace App\repositories;

use App\Models\Submission;
use Illuminate\Http\Request;
use App\interfaces\CrudInterface;

class SubmissionRepository implements CrudInterface
{
    
    //get all data
    public function getAll(){
         
        $submission = Submission::orderBy('id','desc')->get();
        return $submission;
    }
    
    //get single data by id
    public function findById($id){
      
        $submission = Submission::findOrfail($id);
        return $submission;
    }
   
    //store data
    public function create(Request $request){
       
        $submission = new Submission();
        $submission->member_id = $request->member_id;
        $submission->amount = $request->amount;
        $submission->save();
        return $submission;

    }
    
    //edit and update data
    public function edit(Request $request, $id){
         
         $submission =  $this->findById($id);
         $submission->member_id = $request->member_id;
         $submission->amount = $request->amount;
         $submission->save();
         return $submission;

    }
    
    //delete data
    public function delete($id){
     
        $submission =  $this->findById($id);
        $submission->delete();
        return $submission;
    }

}//end class

