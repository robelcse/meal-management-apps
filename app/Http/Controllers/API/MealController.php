<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\repositories\MealRepository;

class MealController extends Controller
{
    public $MealRepository;
    public function __construct(){

        $this->MealRepository = new MealRepository();
    }

    public function index(){

        $meals = $this->MealRepository->getAll();
        return response()->json([

               'success' => true,
               'message' => 'meal list',
               'data' => $meals

        ]);
    }

    public function show($id){

        $meal = $this->MealRepository->findById($id);
        if(is_null($meal)){
             return response()->json([
                 'success' => false,
                 'message' => 'meal details',
                 'data'    => null
             ]);
        }

        return response()->json([

               'success' => true,
               'message' => 'meal details',
               'data'    => $meal

        ]);
    }

    public function store(Request $request){

        $this->validate($request,[
            'member_id' => 'required',
            'month_id' => 'required',
            'amount' => 'required'
        ]);

        $meal = $this->MealRepository->create($request);
        return response()->json([
            'success' => true,
            'message' => 'Meal Stored',
            'data'    => $meal
        ]);

    }

    public function update(Request $request, $id){


        $this->validate($request,[
            'member_id' => 'required',
            'month_id' => 'required',
            'amount' => 'required'
        ]);

        $meal = $this->MealRepository->edit($request, $id);
        return response()->json([
            'success' => true,
            'message' => 'Meal Updated',
            'data'    => $meal
        ]);
    }

    public function destroy($id){

          $meal = $this->MealRepository->findById($id);
          if (is_null($meal)) {
            return response()->json([
                'success' => false,
                'message' => 'Meal Not found',
                'data' => null,
            ]);
          }
          $meal = $this->MealRepository->delete($id);
          return response()->json([
            'success' => true,
            'message' => 'Meal delete',
            'data'    => $meal
         ]);
    }
}//end class
