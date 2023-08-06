<?php

namespace App\Http\Controllers;
use App\Models\amin;

use Illuminate\Http\Request;

class admcontroller extends Controller
{
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if(empty($request->email_adm) || empty($request->name_adm) || empty($request->password) || empty($request->photo)){
              return response()->json(['status'=>200,'message'=>'Sorry please complete all fields']);
           }
              
              
              else{
                $create_adm = new amin();
                $create_adm->email_adm = $request->email_adm;
                $create_adm->name_adm = $request->name_adm;
                $create_adm->password = $request->password;

                 if($request->hasFile('photo')){
                    $file = $request->file('photo');
                    $name = time().'.'.$file->getClientOriginalExtension();
                    $file->move('adm',$name);
                    $create_adm->photo = $name;
                 }
                $create_adm->save();

                  if(amin::where(['email_adm'=>$request->email_adm, 'password'=>$request->password])->count() > 0){
                      $info_adm = amin::where(['email_adm'=>$request->email_adm, 'password'=>$request->password])->get();
                        session(['info_adm'=> $info_adm]);
                        return response()->json(['status'=>100,'message'=>'YOU ARE WELCOME']);
              }


        
       
    }

}

  public function create_login_admin(){
    return view('admin.login_adm');
  }

   public function login_adm(Request $request){
    if(amin::where(['email_adm'=>$request->email_adm, 'password'=>$request->password])->count() > 0){
        $info_adm = amin::where(['email_adm'=>$request->email_adm, 'password'=>$request->password])->get();
          session(['info_adm'=> $info_adm]);
          return response()->json(['status'=>100,'message'=>'success!!']);
}
   }



   public function destroy_session_adm(){

     session()->forget('info_adm');
    
     return response()->json(['status'=>200]);
     
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
