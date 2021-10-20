<?php

namespace App\repositories;

use App\Models\Meal;
use Illuminate\Http\Request;
use App\interfaces\CrudInterface;

class MealRepository implements CrudInterface
{
    
    //get all data
    public function getAll(){
         
        $meals = Meal::orderBy('id','desc')->get();
        return $meals;
    }
    
    //get single data by id
    public function findById($id){
      
        $meal = Meal::findOrfail($id);
        return $meal;
    }
   
    //store data
    public function create(Request $request){
       
        $meal = new Meal();
        $meal->member_id = $request->member_id;
        $meal->month_id = $request->month_id;
        $meal->amount = $request->amount;
        $meal->save();
        return $meal;

    }
    
    //edit and update data
    public function edit(Request $request, $id){
         
         $meal =  $this->findById($id);
         $meal->member_id = $request->member_id;
         $meal->month_id = $request->month_id;
         $meal->amount = $request->amount;
         $meal->save();
         return $meal;

    }
    
    //delete data
    public function delete($id){
     
        $meal =  $this->findById($id);
        $meal->delete();
        return $meal;
    }

}//end class

