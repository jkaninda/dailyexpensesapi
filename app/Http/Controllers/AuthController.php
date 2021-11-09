<?php

namespace App\Http\Controllers;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use Srt;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function auth(Request $request){
        $username=request('username');
        $password=request('password');
         

        $input = $request->all();
  
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
  
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if (auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password']))) {
            $user = $request->user();

            $data=[
                    'userID'=>$user->id,
                    'name'=>$user->name,
                    'role'=>$user->role,
                    'token'=>env('API_KEY',''),

                ];
            return response()->json(['code'=>1, 'message'=>"Bienvenue",'data'=>$data], 200);
        }

        return response()->json(['code'=>0, 'message'=>"Nom d'utilisateur  ou mot de passe incorrect"], 200);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
