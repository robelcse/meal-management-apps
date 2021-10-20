<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\repositories\CostRepository;

class CostController extends Controller
{
    public $CostRepository;
    public function __construct(){

        $this->CostRepository = new CostRepository();
    }

    public function index(){

        $costs = $this->CostRepository->getAll();
        return response()->json([

               'success' => true,
               'message' => 'costs list',
               'data' => $costs

        ]);
    }

    public function show($id){

        $cost = $this->CostRepository->findById($id);
        if(is_null($cost)){
             return response()->json([
                 'success' => false,
                 'message' => 'cost not found',
                 'data'    => null
             ]);
        }

        return response()->json([
               'success' => true,
               'message' => 'cost details',
               'data'    => $cost
        ]);

    }

    public function store(Request $request){

        $this->validate($request,[
            'member_id' => 'required',
            'amount' => 'required',
            'description' => 'required'
        ]);

        $cost = $this->CostRepository->create($request);
        return response()->json([
            'success' => true,
            'message' => 'cost Stored',
            'data'    => $cost
        ]);

    }

    public function update(Request $request, $id){


        $this->validate($request,[
            'member_id' => 'required',
            'amount' => 'required',
            'description' => 'required'
        ]);

        $cost = $this->CostRepository->edit($request, $id);
        return response()->json([
            'success' => true,
            'message' => 'cost Updated',
            'data'    => $cost
        ]);
    }

    public function destroy($id){

          $cost = $this->CostRepository->findById($id);
          if (is_null($cost)) {
            return response()->json([
                'success' => false,
                'message' => 'cost Not found',
                'data' => null,
            ]);
          }
          $submission = $this->CostRepository->delete($id);
          return response()->json([
            'success' => true,
            'message' => 'cost delete',
            'data'    => $cost
         ]);
    }
}
