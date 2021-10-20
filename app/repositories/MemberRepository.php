<?php

namespace App\repositories;

use App\Models\Member;
use Illuminate\Http\Request;
use App\interfaces\CrudInterface;

class MemberRepository implements CrudInterface
{
    
    //get all data
    public function getAll(){
         
        $members = Member::orderBy('id','desc')->get();
        return $members;
    }
    
    //get single data by id
    public function findById($id){
      
        $member = Member::findOrfail($id);
        return $member;
    }
   
    //store data
    public function create(Request $request){
       
        $member = new Member();
        $member->name = $request->name;
        $member->email = $request->email;
        $member->phone = $request->phone;
        $member->address = $request->address;
        $member->save();
        return $member;

    }
    
    //edit and update data
    public function edit(Request $request, $id){
         
         $member =  $this->findById($id);
         $member->name = $request->name;
         $member->email = $request->email;
         $member->phone = $request->phone;
         $member->address = $request->address;
         $member->save();
         return $member;

    }
    
    //delete data
    public function delete($id){
     
        $member =  $this->findById($id);
        $member->delete();
        return $member;
    }

}//end class

