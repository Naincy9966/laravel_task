<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\UserDetail;
use Freshbitsweb\Laratables\Laratables;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.users.index'); 
   }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = ['company','employee'];
        return view('pages.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'             =>  'required|mimes:jpeg,png,jpg,svg|max:5120',
            'name'              =>  'required',
            'phone'             =>  'required',
            'password'          =>  'required',
            'address'           =>  'required',
            'description'       =>  'required',
            'email' => 'required|unique:users,email',
            'gender'            =>  'required_if:role,employee',
            'date_of_birth'     => 'required_if:role,employee',
            ]); 
            $params = $request->all();
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $file_name = $timestamp. '-' .$file->getClientOriginalName(); 
                $file->move(public_path().'/images/company', $file_name); 
                $params['image'] =  $file_name;  
            }
            $user = User::create($params);
            $user->user_detail()->create($params);
            return redirect()->route('login')->with('message', 'User added successfully');
        }


        public function list()
        {  
            return Laratables::recordsOf(User::class, function($query)
            {
                return $query->where('role', 'company');
            });
        
    }
    /**
     * Display the specified resource.
     */
    public function show(User $user )
    {
        $user = User::with('user_detail')->find($user->id);
        return view('pages.users.show', compact('user'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = ['company','employee'];
        $user = User::with('user_detail')->find($user->id);
        return view('pages.users.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg,svg|max:5120',
            'name' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'address' => 'required',
            'year_of_establish' => 'required_if:role,company',
            'description' => 'required',
            'email' => 'required',
            'role' => 'required',
            'gender' => 'required_if:role,employee',
            'date_of_leaving' => 'required_if:role,employee',
            'date_of_joining' => 'required_if:role,employee',
            'date_of_birth' => 'required_if:role,employee',
        ]);
    
        $params = $request->all();
    
        if ($request->hasFile('image')) {
            // Handle file upload
            $file = $request->file('image');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $file_name = $timestamp . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/images/company', $file_name);
            $params['image'] = $file_name;
        }
    
        // Update the User model and its associated UserDetail model
        $user->update($params);
        $userDetail = UserDetail::where('user_id',$request->id)->first();
        $userDetail->update([$params]);
        return redirect()->route('users.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        try{
            $user->delete();

       } catch(Exception $e){
           return redirect()
           ->back()
           ->with('error', $e->getMessage());
       }
       return back();    
    }
}
