<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class AdminRegistrationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Admin Register Controller
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
    protected $redirectTo = '/backEnd';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest'
//            ['except' => ['logout','adminAuth']]
        );
    }


    public function showRegistrationForm()

    {

        return view('backEnd.admin.index');



    }

    public function registerAdmin(Request $request)

    {


        $this->validator($request->all())->validate();


        Admin::create($request->all());






        return redirect()->route('backEnd.index');


    }


    public function adminRegistrationForm()
    {
        return view('backEnd.index');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'username' => 'required|string|max:255',
//            'job_title'=> 'required|string|max:255',
            'attached_faculty' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
//            'password-confirm'=>'required|string|min:6|confirmed',
        ]);
    }

    /** registration
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {


        return Admin::create([
            'firstname' => $data['firstname'],
            'lastname' =>$data['lastname'],
            'email' => $data['email'],
            'username' => $data['username'],
            'attached_faculty' => $data['attached_faculty'],
            'password' => bcrypt($data['password']),

        ]);




    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'username' => 'required',
            'attached_faculty' => 'required',
            'password' => 'required',


        ]);

        dd('validation ok');

        admin::create($request->all());

        return redirect()->route('backEnd.index');

    }






    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('backEnd.admin.destroy');
    }

    public function index()
    {

        $admins = Admin::get();

        return view('backEnd.admin.index', ['admins' => $admins]);
    }



}



