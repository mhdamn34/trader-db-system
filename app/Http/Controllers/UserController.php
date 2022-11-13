<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Postcode;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index(){

        $id = Auth::user()->id;
        $users = User::select('*')->find($id);

        $states = State::select('*')->get();
        $postcodes = Postcode::select('*')->get();
        $educations = Education::select('*')->get();

        return view('user.index',compact('users','states', 'postcodes','educations'));
    }

    public function update(Request $request, $user_id){

        $users = User::select('*')->find($user_id);

        $states = State::select('*')->get();
        $postcodes = Postcode::select('*')->get();
        $educations = Education::select('*')->get();
        // dd($request->toArray());
        $update =  User::where('id', $user_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'surname' => $request->surname,
            'mobile_number' => $request->mobile_number,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'postcode' => $request->postcode,
            'state' => $request->state,
            'country' => $request->country,
            'education' => $request->education
        ]);

        return redirect()->route('user.setting',compact('users','states', 'postcodes','educations'))->with('success','User Setting Updated');

    }
}
