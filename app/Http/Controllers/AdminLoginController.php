<?php
namespace App\Http\Controllers;
use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class AdminLoginController extends Controller


{
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['logout']]);
    }

    public function getAdminLogin()
    {

        if (auth()->guard('admin')->user()) return redirect()->route('backEnd.admin.dashboard');
        return view('backEnd.admin.login');
    }

    public function adminAuth(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        if (auth()->guard('admin')->attempt(['username' => $request->input('username'), 'password' => $request->input('password')]))
        {
            ( auth()->guard('admin')->check());

            return redirect()->route('backEnd.admin.dashboard');
        }else{

            dd('your username and password are wrong.');
        }
    }
}







