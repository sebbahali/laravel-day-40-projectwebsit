<?php

namespace App\Http\Controllers;

use App\Models\Ccp;
use App\Models\Msg;
use App\Models\User;
use App\Models\Stor;

use App\Models\Rtr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
class trycontroller extends Controller
{
    public function home_seller(){

        return view ('home_seller1');
    }
    public function dashboard(){

        return view('dashboard');
    }
    public function add_seller(){

        return view('add_sellerr');
    }
    public function store(Request $request){
        $this->validate($request, [
            'filenames' => 'required',
            'filenames.*' => 'image'
            
    ]);

    $files = [];
    if($request->hasfile('filenames'))
     {
        foreach($request->file('filenames') as $file)
        {
            $name = time().rand(1,100).'.'.$file->extension();
            $file->move(public_path('files'), $name);  
            $files[] = $name;  
        }
     }
    
     $Rtr= new Rtr();
     $Rtr->user_id = $request->input('user_id');
     $Rtr->name = $request->input('name');
     $Rtr->description = $request->input('description');
     $Rtr->number= $request->input('number');
     $Rtr->filenames = $files;
     $Rtr->save();
     return view('show_sellerr', compact('Rtr'))->with('files', $files);
    }
    public function show_seller( $Rtr){
        $Rtr = Rtr::findOrFail($Rtr);
    //$images = $Rtr->filenames;
    return view('show_sellerr', compact('Rtr'));
    }
    public function edit_seller($Rtr){

        return view('edit_seller',['Rtr'=>Rtr::findorfail($Rtr)]);
    }
    public function edit(Request $request,$Rtr){
 
        $Rtr= Rtr::findorfail($Rtr);
        $this->validate($request, [
            'filenames' => 'required',
            'filenames.*' => 'image'
            
    ]);

    $files = [];
    if($request->hasfile('filenames'))
     {
        foreach($request->file('filenames') as $file)
        {
            $name = time().rand(1,100).'.'.$file->extension();
            $file->move(public_path('files'), $name);  
            $files[] = $name;  
        }
     }
     $Rtr->user_id = $request->input('user_id');
     $Rtr->name = $request->input('name');
     $Rtr->description = $request->input('description');
     $Rtr->number= $request->input('number');
     $Rtr->filenames = $files;
     $Rtr->save();
     return view('show_sellerr', compact('Rtr'))->with('files', $files);

    }

    public function all(){
        $user_id = auth()->id();
        $rtrs = Rtr::where('user_id', $user_id)->get();

       return view('all', ['rtrs' => $rtrs]);
    }
    public function search(){

    if(request('search')){

        $Rtr = Rtr::where(function($query) {
            $search = request('search');
            $query->where('name', 'like', '%'.$search.'%')
        ->orWhere('number', 'like', '%'.$search.'%');
        })->get();}
    
    else{
    
    $Rtr=Rtr::all();
    }
    return view('search')->with('Rtr', $Rtr);}

    public function search_seller(){

        return view('search_seller');
    }
    public function edit_info()
    {
        $user = auth()->user();

    return view('infoo', compact('user'));
    }
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'image' => ['nullable', 'max:2048'] 
        ]);
    
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
    
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }
    
        if ($request->hasFile('image')) {
            $name1 = $request->file('image')->getClientOriginalName();
            $path1 = $request->file('image')->store('public/images', 'public');
            $user->name1 = $name1; 
            $user->path1 = $path1;
        }
    
        $user->save();
    
        return redirect()->route('home_seller', $user->id);
    }

    public function home_user(){

        return view('home_user');
    }
    public function addccp(){

        return view('addccp');
    }
    public function store2(Request $request){
        $this->validate($request, [
            'filenames' => 'required',
            'filenames.*' => 'image'
            
    ]);

    $files = [];
    if($request->hasfile('filenames'))
     {
        foreach($request->file('filenames') as $file)
        {
            $name = time().rand(1,100).'.'.$file->extension();
            $file->move(public_path('files'), $name);  
            $files[] = $name;  
        }
     }
    
     $ccp= new Ccp();
     $ccp->user_id = $request->input('user_id');
     $ccp->name = $request->input('name');
     $ccp->description = $request->input('description');
     $ccp->ccps= $request->input('ccps');
     $ccp->filenames = $files;
     $ccp->save();
     return view('show_user', compact('ccp'))->with('files', $files);
    }
    public function show_user( $ccp){
        $ccp = Rtr::findOrFail($ccp);
    //$images = $Rtr->filenames;
    return view('show_user', compact('ccp'));}
    public function edit_user($ccp){

        return view('edit_user',['ccp'=>Ccp::findorfail($ccp)]);
    }
    public function edit2(Request $request,$ccp){
 
        $ccp= ccp::findorfail($ccp);
        $this->validate($request, [
            'filenames' => 'required',
            'filenames.*' => 'image'
            
    ]);

    $files = [];
    if($request->hasfile('filenames'))
     {
        foreach($request->file('filenames') as $file)
        {
            $name = time().rand(1,100).'.'.$file->extension();
            $file->move(public_path('files'), $name);  
            $files[] = $name;  
        }
     }
     $ccp->user_id = $request->input('user_id');
     $ccp->name = $request->input('name');
     $ccp->description = $request->input('description');
     $ccp->ccps= $request->input('ccps');
     $ccp->filenames = $files;
     $ccp->save();
     return view('show_user', compact('ccp'))->with('files', $files);

    }

    public function addstore(){

        return view('addstore');
    }
    public function store3(Request $request){
        $this->validate($request, [
            'filenames' => 'required',
            'filenames.*' => 'image'
            
    ]);

    $files = [];
    if($request->hasfile('filenames'))
     {
        foreach($request->file('filenames') as $file)
        {
            $name = time().rand(1,100).'.'.$file->extension();
            $file->move(public_path('files'), $name);  
            $files[] = $name;  
        }
     }
    
     $stor= new Stor();
     $stor->user_id = $request->input('user_id');
     $stor->name = $request->input('name');
     $stor->description = $request->input('description');
     $stor->number= $request->input('number');
     $stor->filenames = $files;
     $stor->save();
     return view('show_store', compact('stor'))->with('files', $files);
    }
    public function show_store( $stor){
        $stor = Stor::findOrFail($stor);
    return view('show_store', compact('stor'));}

    public function edit_store($stor){

        return view('edit_store',['stor'=>Stor::findorfail($stor)]);
    }
    public function edit3(Request $request,$stor){
 
        $stor= Stor::findorfail($stor);
        $this->validate($request, [
            'filenames' => 'required',
            'filenames.*' => 'image'
            
    ]);

    $files = [];
    if($request->hasfile('filenames'))
     {
        foreach($request->file('filenames') as $file)
        {
            $name = time().rand(1,100).'.'.$file->extension();
            $file->move(public_path('files'), $name);  
            $files[] = $name;  
        }
     }
     $stor->user_id = $request->input('user_id');
     $stor->name = $request->input('name');
     $stor->description = $request->input('description');
     $stor->number= $request->input('number');
     $stor->filenames = $files;
     $stor->save();
     return view('show_store', compact('stor'))->with('files', $files);

    }

    public function search2(Request $request)
{
    $query = $request->input('search');

    $results1 = DB::table('stors')
        ->where('name', 'like', '%'.$query.'%')
        ->orWhere('number', 'like', '%'.$query.'%')
        ->get();

    $results2 = DB::table('ccps')
        ->where('name', 'like', '%'.$query.'%')
        ->orWhere('ccps', 'like', '%'.$query.'%')
        ->get();

    $results = $results1->concat($results2);

    return view('search2', [
        'results' => $results,
        'query' => $query,
        'results1'=> $results1,
        'results2'=> $results2,

    ]);
}
public function search_user(){

    return view('search_user');
}

public function edit_info1()
    {
        $user = auth()->user();

    return view('info1', compact('user'));
    }


    public function update1(Request $request, $id)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'image' => ['nullable', 'max:2048'] 
        ]);
    
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
    
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }
    
        if ($request->hasFile('image')) {
            $name1 = $request->file('image')->getClientOriginalName();
            $path1 = $request->file('image')->store('public/images', 'public');
            $user->name1 = $name1; 
            $user->path1 = $path1;
        }
    
        $user->save();
    
        return redirect()->route('home_user', $user->id);
    }
    public function all2(){
        $user_id = auth()->id();
        $ccps = Ccp::where('user_id', $user_id)->get();
$stors=Stor::where('user_id',$user_id)->get();
       return view('all2', ['ccps' => $ccps, 'stors'=>$stors]);
    }


    public function terms(){

        return view('terms');
    }
    public function terms1(){

        return view('terms1');
    
    }
    public function about(){

        return view('about');
    }
    public function about1(){

        return view('about1');
    }

    public function msg(Request $request){

$msg= new Msg();
$msg->name=$request->input('name');
$msg->phone=$request->input('phone');
$msg->message=$request->input('message');
   $msg->save();
   return redirect('/');
}



}