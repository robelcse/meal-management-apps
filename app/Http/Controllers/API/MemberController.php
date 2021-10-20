<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\repositories\MemberRepository;

class MemberController extends Controller
{
    public $MemberRepository;
    public function __construct(){

        $this->MemberRepository = new MemberRepository();
    }

    public function index(){

        $members = $this->MemberRepository->getAll();
        return response()->json([

               'success' => true,
               'message' => 'member list',
               'data' => $members

        ]);
    }

    public function show($id){

        $member = $this->MemberRepository->findById($id);
        if(is_null($member)){
             return response()->json([
                 'success' => false,
                 'message' => 'member details',
                 'data'    => null
             ]);
        }

        return response()->json([

               'success' => true,
               'message' => 'member details',
               'data'    => $member

        ]);

        /*
        return response()->json([

              'success' => true,
              'message' => 'member list',
              'data'    => [

                  'name' => 'Robel',
                  'email' =>'mdrobel.cse@gmail.com',
                  'phone' => '+8801609883910',
                  'addres' =>[
                       'city' => [
                           'present_city' => 'Dhaka',
                           'parmanent_city' => 'Brahmanbaria'
                       ], 
                       'Country' => 'Bangladesh',
                       'Zipcode' => 1234
                  ]
              ]
        ]);

        */
    }

    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:members',
            'phone' => 'required|numeric',
            'address' => 'required',
        ]);

        $member = $this->MemberRepository->create($request);
        return response()->json([
            'success' => true,
            'message' => 'Member Stored',
            'data'    => $member
        ]);

    }

    public function update(Request $request, $id){


        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required',
        ]);

        $member = $this->MemberRepository->edit($request, $id);
        return response()->json([
            'success' => true,
            'message' => 'Member Updated',
            'data'    => $member
        ]);
    }

    public function destroy($id){

          $member = $this->MemberRepository->findById($id);
          if (is_null($member)) {
            return response()->json([
                'success' => false,
                'message' => 'Member Not found',
                'data' => null,
            ]);
          }
          $member = $this->MemberRepository->delete($id);
          return response()->json([
            'success' => true,
            'message' => 'Member delete',
            'data'    => $member
         ]);
    }


}//end class
