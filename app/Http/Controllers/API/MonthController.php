<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Month;
use App\repositories\MonthRepository;

class MonthController extends Controller
{
    public $MonthRepository;
    public function __construct(){

        $this->MonthRepository = new MonthRepository();
    }

    public function index(){

        $months = $this->MonthRepository->getAll();
        return response()->json([

               'success' => true,
               'message' => 'month list',
               'data' => $months

        ]);
    }

    public function show($id){

        $month = $this->MonthRepository->findById($id);
        if(is_null($month)){
             return response()->json([
                 'success' => false,
                 'message' => 'month details',
                 'data'    => null
             ]);
        }

        return response()->json([

               'success' => true,
               'message' => 'month details',
               'data'    => $month

        ]);
    }

    public function store(Request $request){

        $this->validate($request,[
            'month' => 'required'
        ]);

        $month = $this->MonthRepository->create($request);
        return response()->json([
            'success' => true,
            'message' => 'month Stored',
            'data'    => $month
        ]);

    }

    public function update(Request $request, $id){


        $this->validate($request,[
            'month' => 'required'
        ]);

        $month = $this->MonthRepository->edit($request, $id);
        return response()->json([
            'success' => true,
            'message' => 'month Updated',
            'data'    => $month
        ]);
    }

    public function destroy($id){

          $month = $this->MonthRepository->findById($id);
          if (is_null($month)) {
            return response()->json([
                'success' => false,
                'message' => 'month Not found',
                'data' => null,
            ]);
          }
          $month = $this->MonthRepository->delete($id);
          return response()->json([
            'success' => true,
            'message' => 'month delete',
            'data'    => $month
         ]);
    }
}
