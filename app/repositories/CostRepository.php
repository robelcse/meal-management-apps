<?php

namespace App\repositories;

use App\Models\Cost;
use Illuminate\Http\Request;
use App\interfaces\CrudInterface;

class CostRepository implements CrudInterface
{
    
    //get all data
    public function getAll(){
         
        $costs = Cost::orderBy('id','desc')->get();
        return $costs;
    }
    
    //get single data by id
    public function findById($id){
      
        $cost = Cost::findOrfail($id);
        return $cost;
    }
   
    //store data
    public function create(Request $request){
       
        $cost = new Cost();
        $cost->member_id = $request->member_id;
        $cost->amount = $request->amount;
        $cost->description = $request->description;
        $cost->save();
        return $cost;

    }
    
    //edit and update data
    public function edit(Request $request, $id){
         
         $cost =  $this->findById($id);
         $cost->member_id = $request->member_id;
         $cost->amount = $request->amount;
         $cost->description = $request->description;
         $cost->save();
         return $cost;

    }
    
    //delete data
    public function delete($id){
     
        $cost =  $this->findById($id);
        $cost->delete();
        return $cost;
    }

}//end class

