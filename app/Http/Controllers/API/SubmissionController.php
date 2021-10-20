<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\repositories\SubmissionRepository;

class SubmissionController extends Controller
{
    
    public $SubmissionRepository;
    public function __construct(){

        $this->SubmissionRepository = new SubmissionRepository();
    }

    public function index(){

        $submission = $this->SubmissionRepository->getAll();
        return response()->json([

               'success' => true,
               'message' => 'submission list',
               'data' => $submission

        ]);
    }

    public function show($id){

        $submission = $this->SubmissionRepository->findById($id);
        if(is_null($submission)){
             return response()->json([
                 'success' => false,
                 'message' => 'submission not found',
                 'data'    => null
             ]);
        }

        return response()->json([

               'success' => true,
               'message' => 'submission details',
               'data'    => $submission

        ]);

    }

    public function store(Request $request){

        $this->validate($request,[
            'member_id' => 'required',
            'amount' => 'required'
        ]);

        $submission = $this->SubmissionRepository->create($request);
        return response()->json([
            'success' => true,
            'message' => 'submission Stored',
            'data'    => $submission
        ]);

    }

    public function update(Request $request, $id){


        $this->validate($request,[
            'member_id' => 'required',
            'amount' => 'required'
        ]);

        $submission = $this->SubmissionRepository->edit($request, $id);
        return response()->json([
            'success' => true,
            'message' => 'submission Updated',
            'data'    => $submission
        ]);
    }

    public function destroy($id){

          $submission = $this->SubmissionRepository->findById($id);
          if (is_null($submission)) {
            return response()->json([
                'success' => false,
                'message' => 'submission Not found',
                'data' => null,
            ]);
          }
          $submission = $this->SubmissionRepository->delete($id);
          return response()->json([
            'success' => true,
            'message' => 'submission delete',
            'data'    => $submission
         ]);
    }

}//end class
