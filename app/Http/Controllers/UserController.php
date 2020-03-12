<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;


use Illuminate\Support\Facades\Hash;
use App\User;
use DB;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } // authentication



function fetch(Request $request)//method
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('users')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }
    //dynamic address


    public function index(){
        {
            $admins=User::where('type_id',3)->get();
            $staffs=User::where('type_id',2)->get();
            return view('admin.tenant.user-index',compact('admins','staffs'));
        }
    

    }

    public function create(){
        $type = Type::get();
      
        $country_list = DB::table('users')
        ->groupBy('country')
        ->get();
    // return view('users.register-tenant')->with('country_list', $country_list,'type',$type);
        return view('users.register-tenant')->with(compact('type','country_list',$country_list));
    }
    public function createUser(){
        $type = Type::where('id','!=',1)->get();
        $country_list = DB::table('users')
        ->groupBy('country')
        ->get();
        // return view('users.register-user')->with(compact('type'));
        return view('users.register-user')->with(compact('type','country_list',$country_list));
    }

    public function store(Request $request){

        $validateData= request()->validate([
            'firstname'=> 'required|min:3|max:255|',
            'middlename'=> 'required|min:2|max:255',
            'lastname'=> 'required|max:255',
            'email'=> 'required|email',
            'street'=> 'required|max:255',
            'country'=> 'required',
            'street'=> 'required',
           
           
        ]);
    //    dd($request->all());
        $new = new User;
        $new->fname = $request->firstname;
        $new->mname = $request->middlename;
        $new->lname =$request->lastname;
        $new->type_id = $request->type;
        $new->email = $request->email;
        $new->password = Hash::make($request->password);
        $new->phone_no = $request->phone;
        $new->country = $request->country;
        $new->state = $request->state;
        $new->city = $request->city;
        $new->street = $request->street;
        $new->save();

//        dd($new);
    // return redirect()->back();
    return redirect('/tenant')->withSuccess('Added Successfully!');
    }

}
