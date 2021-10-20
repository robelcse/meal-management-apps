<?php

namespace App\repositories;

use App\Models\Month;
use Illuminate\Http\Request;
use App\interfaces\CrudInterface;

class MonthRepository implements CrudInterface
{
    
    //get all data
    public function getAll(){
         
        $months = Month::orderBy('id','desc')->get();
        return $months;
    }
    
    //get single data by id
    public function findById($id){
      
        $month = Month::findOrfail($id);
        return $month;
    }
   
    //store data
    public function create(Request $request){
       
        $month = new Month();
        $month->month = $request->month;
        $month->save();
        return $month;

    }
    
    //edit and update data
    public function edit(Request $request, $id){
         
         $member =  $this->findById($id);
         $month = new Month();
         $month->month = $request->month;
         $month->save();
         return $month;

    }
    
    //delete data
    public function delete($id){
     
        $month =  $this->findById($id);
        $month->delete();
        return $month;
    }

}//end class

