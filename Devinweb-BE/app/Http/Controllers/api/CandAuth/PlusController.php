<?php

namespace App\Http\Controllers\api\CandAuth;

use App\Models\CandUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Tymon\JWTAuth\JWTAuth;
use Illuminate\Support\Facades\Auth;

class PlusController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '';

    protected $auth;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(JWTAuth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = $this->validator($request->all());
        if (!$validator->fails()) {
            $user = $this->create($request->all());

            // $token = $this->auth->guard('candusers')->attempt($request->only('email', 'password'));

            return response()->json([
                'success' => true,
                'data' => $user,
                // 'token' => $token
            ], 200);
        }

        return response()->json([
            'success' => false,
            'errors' => $validator->errors()
        ], 422);
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return CandUser::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'mobile' => $data['mobile'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function login(Request $request)
    {
        if (Auth::guard('canduser')->attempt(['email' =>$request->email,'password' =>$request->password],$request->remenber)) {
                return response()->json([
                    'success' => true,
                    'email' => $request->email,
                    'password' => $request->password
                ], 200);
        }
        else{
            return response()->json([
                'success' => false,
                'errors' => [
                    'email' => [
                        "Invalid email address or password"
                    ]
                ]
            ], 422);
        }
       
    }
    
}
