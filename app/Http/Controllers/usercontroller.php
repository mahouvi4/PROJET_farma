<?php

namespace App\Http\Controllers;
use App\Models\user;
use App\Models\position_user;
use App\Models\card;
use App\Models\list_commande;
use App\Models\commande;

use Illuminate\Http\Request;

class usercontroller extends Controller
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
        return view('user.create_compte');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storexhhx(Request $request)
    {
        if($request->password1 != $request->password2 ){
            return response()->json(['status'=>400,'message'=>'Incompartable password, be sure to inform an identical password !! ']);
        }elseif(empty($request->name) || empty($request->email) || empty($request->password1) || empty($request->password2) || empty($request->photo)){
            return response()->json(['status'=>300,'message'=>'Sorry !! you may have forgotten to fill in an input field, be sure to fill in all fields, so be sure to activate your location and try again Thank you!! 😴']);
               
              
       
        }else{
            $add_user = new user();
            $add_user->name = $request->name;
            $add_user->email = $request->email;
            $add_user->password = $request->password1;
          
           
               if($request->hasFile('photo')){
                  $file =  $request->file('photo');
                  $name = time().'.'.$file->getClientOriginalExtension();
                  $file->move('user',$name);
                   $add_user->photo = $name;
               }

              //dd($add_user);

            $add_user->save();
            //dd($add_user);
            if(empty($request->latitude) && empty($request->longitude)){
                return "Please turn on your location and try again!!";
            }else
              if(user::where(['email'=>$request->email,'password'=>$request->password1])->count()>0){
               $info_user =  user::where(['email'=>$request->email,'password'=>$request->password1])->get();
                    session(['info_user'=>$info_user ]);
                     
                   //charger la table position
                   if(session('info_user')){
                    $add_position = new position_user();
                    $add_position->latitude = $request->latitude;
                    $add_position->longitude = $request->longitude;
                    $add_position->id_user = session('info_user')[0]->id;
                    $add_position->save();
                    return response()->json(['status'=>200,'message'=>'success']);         
    
                    //dd($add_position);
                  }
              
              }

               

              
      

        }
        
    }


     public function  formulaire_login(){
        return view('user.login');
     }

     public function login_useryuhjjkng(Request $request){

         if(empty($request->email) || empty($request->password1) || empty($request->latitude) || empty($request->longitude)){
            return response()->json(['status'=>300,'message'=>'Please turn on your location and try again!! if you have already activated your location and the error persists, be sure to check if your data is correct, if not, make sure that all input fields are filled in!! if this continues then probably you had not yet created an account, please create one, thank you !!😇']);

         }else if(user::where(['email'=>$request->email,'password'=>$request->password1])->count()>0){
            $info_user =  user::where(['email'=>$request->email,'password'=>$request->password1])->get();
                 session(['info_user'=>$info_user ]);
                 
                 //charger la table position
            if(session('info_user')){
                $add_position = new position_user();
                $add_position->latitude = $request->latitude;
                $add_position->longitude = $request->longitude;
                $add_position->id_user = session('info_user')[0]->id;
             
                $add_position->save();
                return response()->json(['status'=>200,'message'=>'success']);         
   
                
              }else{
                return response()->json(['status'=>400,'message'=>'Please turn on your location and try again!! if you have already activated your location and the error persists, be sure to check if your data is correct, if not, make sure that all input fields are filled in!! if this continues then probably you had not yet created an account, please create one, thank you !!😇']);
 }
           }
           return response()->json(['status'=>500,'message'=>'Please turn on your location and try again!! if you have already activated your location and the error persists, be sure to check if your data is correct, if not, make sure that all input fields are filled in!! if this continues then probably you had not yet created an account, please create one, thank you !!😇']);


            
     }

       public function destroy_session_user(){
         $ecx = card::where('id_user',session('info_user')[0]->id);
         $ecx->delete();

         $acx = list_commande::where('id_user',session('info_user')[0]->id)->where('statut','0');
         $acx->delete();

         $icx = commande::where('id_user',session('info_user')[0]->id)->where('statut','0');
         $icx->delete();
          session()->forget('info_user');

          $uzo = User::where('id',session('info_user')[0]->id)->first();
          $uzo->actif = 0;
          $uzo->update();
         
          return response()->json(['status'=>200]);
          
       }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('user.edit_pass');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_pass(Request $request)
    {
        if(empty($request->email) || empty($request->password1)){
            return response()->json(['status'=>300,'message'=>' make sure that all input fields are filled in!! if yes, Are you sure this is the same email you opened your account with? make sure you fill in the correct email and try again, thank you !!😇']);

         }else if(User::where(['email'=>$request->email])->count()>0){
            $info_user =  User::where(['email'=>$request->email])->first();
                 //session(['info_user'=>$info_user ]);
                 //$edit_pass = User::where('email',$request->email)->first();
                 $info_user->password = $request->password1;
                 $info_user->update();

    return response()->json(["status"=>200,"message"=>"Password updated successfull !!"]);
         }else{
            return response()->json(["status"=>100,"message"=>"Sorry, You should fill in a correct Email address  !!"]);

         }
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


