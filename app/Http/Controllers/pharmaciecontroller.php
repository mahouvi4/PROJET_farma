<?php

namespace App\Http\Controllers;
use App\Models\pharmacie;
use App\Models\medico;
use App\Models\commande;
use App\Models\list_commande;
use App\Models\User;
use App\Models\contacto;
use App\Models\note;
use App\Models\add_shipping;
use App\Models\salaire_pharmacie;
use App\Models\pagamento;
use App\Models\reclamation_cliente;
use App\Models\devolution;
use App\Models\calcul_total_devolution;
use App\Models\like;
use PDF;

use Carbon\Carbon;


use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class pharmaciecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if(session('info_adm')){
        return view('categorie.create');
      }else{
        return redirect('administrateur/create_login_admin') ;  
      }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
    
     if(session('info_adm')){
      $request->validate([
        'email'=>'required',
        'password'=>'required',
        'open_day'=>'required',
        'close_day'=>'required',
        'holiday'=>'required',
        'address'=>'required',
        'on_time'=>'required',
        'close_time'=>'required',
        'longitude'=>'required',
        'latitude'=>'required',
        'cpf'=>'required',
        'tel'=>'required',
        'photo'=>'required'
        
      ]);
        $add_pharmacie = new pharmacie();
        $add_pharmacie->email = $request->email;
        $add_pharmacie->password = $request->password;
        $add_pharmacie->name_pharma = $request->name_pharma;
        $add_pharmacie->open_day = $request->open_day;
        $add_pharmacie->close_day = $request->close_day;
        $add_pharmacie->holiday = $request->holiday;
        $add_pharmacie->address = $request->address;
        $add_pharmacie->on_time = $request->on_time;
        $add_pharmacie->close_time = $request->close_time;
        $add_pharmacie->longitude = $request->longitude;
        $add_pharmacie->latitude = $request->latitude;
        $add_pharmacie->cpf = $request->cpf;
        $add_pharmacie->tel = $request->tel;
        $add_pharmacie->certificatx = $request->certificatx;
        $add_pharmacie->rastrear = $request->rastrear;
        $add_pharmacie->number_fix = $request->number_fix;
        $add_pharmacie->frete1 = $request->frete1;
        $add_pharmacie->frete2 = $request->frete2;
        $add_pharmacie->frete3 = $request->frete3;
        $add_pharmacie->frete4 = $request->frete4;
             if($request->hasFile('photo')){
                $file = $request->file('photo');
                  $name = time().'.'.$file->getClientOriginalExtension();
                    $file->move('pharmacie',$name);
                      $add_pharmacie->photo = $name;
                       
             }
           
        $add_pharmacie->save();
       // $credentials=['email'=>$request->email,'password'=>$request->password];
       // Auth::attempt($credentials)
           if(pharmacie::where(['email'=>$request->email,'password'=>$request->password])->count()>0){
               $info = pharmacie::where(['email'=>$request->email,'password'=>$request->password])->get();
                 session(['info_boutique'=>$info]);
                 return response()->json(['status'=>200,'message'=>'Successfully registered pharmacy!!']);
            }  
            
         
          }else{
            return redirect('administrateur/create_login_admin') ;  

          }

    }

     public function formulaire1_login_pharmacie(){
        return view('categorie.login1');
     }

      public function login1_control(Request $request){
        if(pharmacie::where(['email'=>$request->email,'password'=>$request->password])->count()>0){
            $info = pharmacie::where(['email'=>$request->email,'password'=>$request->password])->get();
              session(['info_boutique'=>$info]);
              if(session('info_boutique')){
                $rxx = session('info_boutique')[0]->id;
                $url = 'admin/option_pharma/' . $rxx;
                return response()->json(['status'=>200,'url'=>$url]);
              //$url = 'admin/option_pharma/' . $rxx;
              // redirect($url)->with(['status'=>200, 'message', "Customer Page"]);

              
             }
                
             // return response()->json(['status'=>200]);
         } 
      }

      public function destroy_session_pharmacie(){
        if(session('info_boutique')){
          session()->forget('info_boutique');
          return redirect('formulaire1_login_pharmacie/ekodide/lazaro');

        //return response()->json(["status"=>200,'message'=>'success']);
        }else{
        }
        
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      if(session('info_adm')){
      // if(session('info_boutique')[0]->statut == 1){
          $h_act =  Carbon::now()->format('H:i:s');
           $h_1 = date('1:0:0');
           $h_acto =   strtotime($h_act) + strtotime($h_1);;
           $dato = date("H:i:s",$h_acto);
           // dd($dato);
    


        $list_pharma = pharmacie::simplePaginate(2);
        //dd($list_pharma);
       $reclam_count = contacto::where('statut','1')->count();
       $comment_count = note::where('statut','1')->count();
       $list_count_order = commande::where('statut','1')->count();
       $complaint_cli_0 = reclamation_cliente::where('statut','0')->count();

       //dd($reclam_count);

       
        return view('projet_fama.list_phamacie',['list_pharma'=>$list_pharma,'reclam_count'=>$reclam_count,'comment_count'=>$comment_count,'list_count_order'=>$list_count_order,'complaint_cli_0'=>$complaint_cli_0,'dato'=>$dato]);
        
       }else{
        return redirect('administrateur/create_login_admin') ;  
      }
    }







    

    /**
     * Show the form for editing the specified resource.
     * login_bout_admin
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      if(session('info_adm')){
        $edit_phramax = pharmacie::find($id);
        //dd($edit_phramax);
        return view('projet_fama.edit_pharma',['edit_phramax'=> $edit_phramax]);
      }else{
                  return redirect('administrateur/create_login_admin') ;  

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
      if(session('info_adm')){
        $xxx = pharmacie::find($id);
        $xxx->email = $request->email;
        $xxx->password = $request->password;
        $xxx->name_pharma = $request->name_pharma;
        $xxx->open_day = $request->open_day;
        $xxx->close_day = $request->close_day;
        $xxx->holiday = $request->holiday;
        $xxx->address = $request->address;
        $xxx->on_time = $request->on_time;
        $xxx->close_time = $request->close_time;
        $xxx->longitude = $request->longitude;
       $xxx->latitude = $request->latitude;
       $xxx->statut = $request->statut;
       $xxx->cpf = $request->cpf;
        $xxx->tel = $request->tel;
        $xxx->rastrear = $request->rastrear;
        $xxx->number_fix = $request->number_fix;
        $xxx->frete1 = $request->frete1;
        $xxx->frete2 = $request->frete2;
        $xxx->frete3 = $request->frete3;
        $xxx->frete4 = $request->frete4;
        $xxx->certificatx = $request->certificatx;
             if($request->hasFile('photo')){
                $file = $request->file('photo');
                  $name = time().'.'.$file->getClientOriginalExtension();
                    $file->move('pharmacie',$name);
                      $xxx->photo = $name;
                       
             }
           
        $xxx->update();
        return response()->json(['status'=>200,'message'=>'Successfully updated pharmacy!!']);
            }else{
            return redirect('administrateur/create_login_admin') ;  


   }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pharmacie::find($id)->delete();
        return response()->json(['status'=>200, 'message'=>'pharmacy delected successfull !!']);
    }


    public function formulaire2_login_pharmacie($id){
       $log2 = pharmacie::find($id);
      return view('categorie.login2',['log2'=>$log2]);
   }


    public function logax(Request $request){
      if(pharmacie::where(['email'=>$request->email,'password'=>$request->password])->count()>0){
          $info = pharmacie::where(['email'=>$request->email,'password'=>$request->password])->get();
            session(['info_boutique'=>$info]);
            return response()->json(['status'=>200,'message'=>'Successfully registered pharmacy!!']);
       } 
    }

    public function formulaire3_login_pharmacie($id){
      $log2 = pharmacie::find($id);
     return view('categorie.login3',['log2'=>$log2]);
  }

    public function logux(Request $request){
      if(pharmacie::where(['email'=>$request->email,'password'=>$request->password])->count()>0){
          $info = pharmacie::where(['email'=>$request->email,'password'=>$request->password])->get();
            session(['info_boutique'=>$info]);
            return response()->json(['status'=>200,'message'=>'Successfully registered pharmacy!!']);
       } 
    }


    public function opition_pharma($id){
       if(session('info_boutique')){

        $opt = pharmacie::find($id);
        $rec = contacto::where('id_pharmacie',$id)->get();
        $commande = commande::where('id_pharmacie',$id)->where('statut','1')->count();
        $command_o_count = commande::where('id_pharmacie',$id)->where('statut','0')->count();
        $count_pharmo_like = like::where('id_pharmacie',$id)->count();
        $count_pharmo_reclam = contacto::where('id_pharmacie',$id)->orderBy('id','desc')->first();
        //dd($count_pharmo_reclam);
        //dd($command_o_count);
        //dd($rec);
        return view('projet_fama.option_phar',['opt'=>$opt,'rec'=>$rec,'commande'=>$commande,'command_o_count'=>$command_o_count,'count_pharmo_like'=>$count_pharmo_like,'count_pharmo_reclam'=>$count_pharmo_reclam]);
       }else{
        return redirect('formulaire1_login_pharmacie/ekodide/lazaro'); 

       }
    
  }

  
  public function opition_pharma_salaire($id){
    if(session('info_boutique') && session('info_adm')){
     $opt = pharmacie::find($id);
     $rec = contacto::where('id_pharmacie',$id)->get();
   
     return view('projet_fama.salaire_option',['opt'=>$opt,'rec'=>$rec]);
    }else{
     return redirect('admin/list_phamacie'); 

    }
 
}



  public function list_medic_phar_admin($id){
       if(session('info_boutique')){
        $ph = pharmacie::find($id);
        $listxxx = medico::where('id_pharmacie',$id)->get();
        //dd($listxxx);
        return view('projet_fama.lis_med_phar_adm',['listxxx'=>$listxxx]);
       }else{
        return redirect('formulaire1_login_pharmacie/ekodide/lazaro'); 
       }
  }

  //return redirect('formulaire1_login_pharmacie/ekodide/lazaro');

  public function create_admin_med($id){
       if(session('info_boutique')){
        $id_med = medico::find($id);
        //dd($id_med);
        return view('projet_fama.medic_traitment',['id_med'=>$id_med]);
       }else{
        return redirect('formulaire1_login_pharmacie/ekodide/lazaro');

       }

  }


  public function upd_medic_admin(Request $request ,$id){
    
    if(session('info_boutique')){
      $add_medico =  medico::find($id);
      $add_medico->Reference = $request->Reference;
      $add_medico->nom_pro = $request->nom_pro;
      $add_medico->desciption = $request->desciption;
      $add_medico->prix = $request->prix;
      $add_medico->prix_desconte = $request->prix_desconte;
      $add_medico->desconte = $request->desconte;
      $add_medico->kilo = $request->kilo;
      $add_medico->stock = $request->stock;
      $add_medico->date_fabriq = $request->date_fabriq;
      $add_medico->date_expir = $request->date_expir;
      $add_medico->id_pharmacie = $request->pharmacie;
      $add_medico->statut = $request->statut;
          if($request->hasFile('photo')){
              $file = $request->file('photo');
              $name = time().'.'.$file->getClientOriginalExtension();
              $file->move('medico',$name);
              $add_medico->photo = $name;

          }

      $add_medico->update();
      return response()->json(["status"=>200,"message"=>"Your medication has been updated successfully!!😍"]); 
    }else{
      return redirect('formulaire1_login_pharmacie/ekodide/lazaro');

    }
    
  }

 public function delet_med_admin($id){
       $del_admin_med = medico::find($id)->delete();
       
 }

  public function list_client_bout_admin($id){
    if(session('info_boutique')){
       $phx = pharmacie::find($id);
       $list_custumer_by_boutiq = DB::table('commandes')->select('firstname','name','email','tel','cpf','state','city','street','country','ddd','district','codzip','nacimento','n_apt')->distinct()->where('id_pharmacie',$id)->get();
      //$list_custumer_by_boutiq = commande::where('id_pharmacie',$id)->distinct('name','firstname')->get();
     // dd($list_custumer_by_boutiq);
      return view('projet_fama.list_custum_bout',["list_custumer_by_boutiq"=>$list_custumer_by_boutiq,'phx'=>$phx]);
  }else{
    return redirect('formulaire1_login_pharmacie/ekodide/lazaro');

  }

}

  public function list_com_bout_adm($id){
    if(session('info_boutique')){
    $tt = 0;
    $comission = 0;
    $val = 0;
    $val_com = 0;
    $val_sem_com = 0;

      $comission = pharmacie::find(session('info_boutique')[0]->id);
      $xax  = pharmacie::find(session('info_boutique')[0]->id);
      $pag = pagamento::where('id_pharmacie',session('info_boutique')[0]->id)->where('statut','5')->get();
     
      foreach($pag as $item){
        $tt += number_format($item->totalfinal,2,'.',''); 
       }

       
      
       $devo = calcul_total_devolution::where('id_pharmacie',session('info_boutique')[0]->id)->where('statut','1')->first();
        $val_sem_com = number_format(((($tt) * $comission->comission)),0,'.','');
       //salaire total a receber
       if(isset($devo->total_devolution_pharma)){

        $val_com = number_format(((($tt - $devo->total_devolution_pharma) * $comission->comission)),0,'.','');
       
        $salaire = number_format((($tt - $devo->total_devolution_pharma) - $val_com ),2,'.','');
       //dd( $salaire - ($salaire * $comission));

     

       } else{
        //$salaire = number_format(($tt),2,'.','');
        $salaire = number_format((($tt) -  $val_sem_com),2,'.','');

       }

      //dd($salaire);
      //$salaire = number_format(($tt - $devo->total_devolution_pharma ),2,'.','');
     


      $id_p = commande::where('id_pharmacie',session('info_boutique')[0]->id)->orderBy('id','desc')->first();
      $cmdx = commande::where('id_pharmacie',session('info_boutique')[0]->id)->where('statut','>','0')->orderBy('id','desc')->distinct()->get();
      $xox = list_commande::where('id_commande',$id)->where('id_pharmacie',session('info_boutique')[0]->id)->get();

      //dd($cmdx);
      return view('projet_fama.cmd_cli_admin_bout',["cmdx"=>$cmdx,"id_p"=>$id_p,"xox"=>$xox,'xax'=>$xax,'tt'=>$tt,'devo'=>$devo,'salaire'=>$salaire,'comission'=>$comission]);
  }else{
    return redirect('formulaire1_login_pharmacie/ekodide/lazaro');

  }

}

  public function comix(){
    return view('mood');
  }



  public function updat_comission(Request $request){
    if(session('info_adm')){
      $com_up = pharmacie::all();
       $exxx = $request->comission;
      // $epo = $request->number_fix;
      // dd($exxx);
     foreach ($com_up as $item) {
         $item->comission = $request->comission;
       //  $item->number_fix = $request->number_fix;
         $item->update();
      }
      return response()->json(['status'=>200, 'message'=>'Comission Aplied Successfull !!']);
  }else{
            return redirect('administrateur/create_login_admin') ;  


    }

  }

  
  public function fixo_number(){
    return view('fix_number');
  }


  public function updat_fixo_number(Request $request){
    if(session('info_adm')){
      $com_up = pharmacie::all();
      
      $epo = $request->number_fix;
     // dd($epo);
     foreach ($com_up as $item) {
        $item->number_fix = $request->number_fix;
         $item->update();
      }
      return response()->json(['status'=>200, 'message'=>'Fix Number Aplied Successfull !!']);
  }else{
            return redirect('administrateur/create_login_admin') ;  


    }

  }







   public function list_all_custumer_admin(){
    if(session('info_adm')){
    $list_all_custum = User::all();

       //$list_all_custum = User::simplePaginate(2);
      // dd($list_all_custum);
       return view('projet_fama.all_custum',["list_all_custum"=>$list_all_custum]);
    }else{
              return redirect('administrateur/create_login_admin') ;  


    }
   }


   public function edit_user_admin($id){
    if(session('info_adm')){
      $edit_uzox = User::find($id);
      return view('projet_fama.edit_uzox',["edit_uzox"=>$edit_uzox]);
    }else{
              return redirect('administrateur/create_login_admin') ;  


    }
   }


   public function update_custumer(Request $request,$id){
    if(session('info_adm')){
      $add_user = User::find($id);
      $add_user->firstname = $request->firstname;
      $add_user->name = $request->name;
      $add_user->email = $request->email;
      $add_user->password = $request->password;
      $add_user->cpf = $request->cpf;
      $add_user->nacimento = $request->nacimento;
      $add_user->ddd = $request->ddd;
      $add_user->tel = $request->tel;
      $add_user->country = $request->country;
      $add_user->state = $request->state;
      $add_user->city = $request->city;
      $add_user->street = $request->street;
      $add_user->district = $request->district;
      $add_user->n_apt = $request->n_apt;
      $add_user->statut = $request->statut;
                if($request->hasFile('photo')){
                  $file =  $request->file('photo');
                  $name = time().'.'.$file->getClientOriginalExtension();
                  $file->move('user',$name);
                  $add_user->photo = $name;
              }else{
                $add_user->photo = NULL;
              }
        $add_user->update();
        return response()->json(["status"=>200, "message"=>"success"]);
   }else{
            return redirect('administrateur/create_login_admin') ;  


   }

  }

    public function crt_mood($id){
      if(session('info_adm')){
       $ret_mood = pharmacie::find($id);
       return view('mood2',["ret_mood"=>$ret_mood]);
    }else{
              return redirect('administrateur/create_login_admin') ;  


    }
  }

     public function apply_yy(Request $request,$id){
        if(session('info_boutique') && session('info_adm')){
          pharmacie::where('id', $id)->update([
  
            "comission"=> $request->comission,
            
          ]);
         /* $apply_comiss_piv = pharmacie::find($id);
          $apply_comiss_piv = $request->comission;
          //dd($apply_comiss_piv);
          $apply_comiss_piv->update();*/
          
          return response()->json(['status'=>200, 'message'=>'Comission Aplied Successfull !!']);
  
        }else{
                  return redirect('administrateur/create_login_admin') ;  


        }
     }

     public function detail_com_bout_adm($id,$id_phamacie){
     if(session('info_boutique')){

      $id_pharmacie = session('info_boutique')[0]->id;
      $id_address_dif = add_shipping::where('id_commande',$id)->first();
      //dd($id_address_dif);
        $xit = list_commande::where('id_commande',$id)->where('id_pharmacie',$id_pharmacie)->first();
        $xut = list_commande::where('id_commande',$id)->where('id_pharmacie',$id_pharmacie)->orderBy('id','desc')->first();

        $xox = list_commande::where('id_commande',$id)->where('id_pharmacie',$id_pharmacie)->get();
      //dd($xut);
      return view('projet_fama.detatil_cmd_cli_admin_bout',["xox"=>$xox,"id_pharmacie"=>$id_pharmacie,"xit"=>$xit,'id_address_dif'=>$id_address_dif,'xut'=>$xut]);
  }else{
    return redirect('formulaire1_login_pharmacie/ekodide/lazaro');  
  }

}

     public function edit_status_commande($id){
       if(session('info_boutique')){
        //$id_phamacie = pharmacie::find($id);
        $up = commande::find($id);
        return view('mood3',["up"=>$up]);

       }else{
        return redirect('formulaire1_login_pharmacie/ekodide/lazaro');  

       }
     }




  /*
  $id_p =  commande::where('id_pharmacie',session('info_boutique')[0]->id)->orderBy('id','desc')->first();
      $cmdx = commande::where('id_pharmacie',session('info_boutique')[0]->id)->orderBy('id','desc')->get();
      $xox = list_commande::where('id_commande',$id)->where('id_pharmacie',session('info_boutique')[0]->id)->get();

  
  
  
  public function detail_order($id){
    if(session('info_user')){
      $detail = 
      return view('tempo.detail',['detail'=>$detail]);
    }

   
   }*/


 public function upd_stat_com(Request $request,$id){
     $upx = commande::find($id);
     $upx->statut = $request->statut;
    
     $xit = list_commande::where('id_commande',$id)->where('id_pharmacie',session('info_boutique')[0]->id)->get();
     dd($xit);
     foreach($xit as $item){
      $item->statut = $request->statut;
      $item->statut->update();
     }  
     
   
       
        $upx->update();
     
     
     //return response()->json(['status'=>200,'message'=>'Status updated successfull']);
 }

      public function create_reclam($id){
        if(session('info_boutique')){
        $pharmox = pharmacie::find($id);
        if(contacto::where('id_pharmacie',session('info_boutique')[0]->id)->where('id_adm','1')->count() > 0){
          $all_recl_ph = contacto::where('id_pharmacie',session('info_boutique')[0]->id)->where('id_adm','1')->get();
         // dd($all_recl_ph);
          return view('projet_fama.contact_ph',["pharmox"=>$pharmox,'all_recl_ph'=>$all_recl_ph]);
          
        }else{
          return view('projet_fama.contact_ph',["pharmox"=>$pharmox]);

        }
        
     
      }else{
        return redirect('formulaire1_login_pharmacie/ekodide/lazaro');  

      }
    }

   public function add_reclamation(Request $request){
    if(session('info_boutique')){
    $reclam = new contacto();
    $reclam->objet = $request->objet;
    $reclam->message = $request->message;
    $reclam->name_phar = $request->name_phar;
    $reclam->email_phar = $request->email_phar;
    $reclam->id_pharmacie = $request->id_pharmacie;
    $reclam->id_adm = 1;
    $reclam->statut = 1;
    if($request->hasFile('photo')){
      $file = $request->file('photo');
        $name = time().'.'.$file->getClientOriginalExtension();
          $file->move('contacto',$name);
          $reclam->photo = $name;
             
   }
    //dd($reclam);
    $reclam->save();
    return response()->json(["status"=>200, "message"=>"reclamation sended successfull !!"]);
   }else{
    return redirect('formulaire1_login_pharmacie/ekodide/lazaro');  

   }
  }


   
   public function red_reclamation(){
    if(session('info_adm')){
    $red_r = contacto::orderBy('id','desc')->where('statut','>=','1')->simplePaginate(3);
   
    return view('projet_fama.recept_reclamation',['red_r'=>$red_r,'all_recl_ph']);
   }else{
            return redirect('administrateur/create_login_admin') ;  


   


   }

  }

   public function update_stat_reclam($id){
    if(session('info_adm')){
          $egox = contacto::find($id);
          if($egox->statut == 1){
            $egox->statut = 0;
            $egox->update();
          }elseif ($egox->statut == 0) {
            $egox->statut = 1;
            $egox->update();
          }
             $egox->update();
          return response()->json(['status'=>200,'message'=>'status updated successfull !!']);
   }else{
           return redirect('administrateur/create_login_admin') ;  

   }

  }

    public function delete_reclam($id){
      if(session('info_adm')){
      $dele_rec = contacto::find($id)->delete();
      return response()->json(["status"=>200, "message"=>"Reclamation deleted successfull  !!"]);
    }else{
           return redirect('administrateur/create_login_admin') ;  

    }
  }

     public function list_comentaire(){
      if(session('info_adm')){
      $comment = note::orderBy('id','desc')->simplePaginate(3);
      //dd($comment);
      return view('projet_fama.comment',["comment"=>$comment]);
     }else{
           return redirect('administrateur/create_login_admin') ;  

     }
    }

     public function comment_update($id){
      if(session('info_adm')){
      $up_com = note::find($id);
      if($up_com->statut == 1){
        $up_com->statut = 0;
        $up_com->update();
      }elseif($up_com->statut == 0){
        $up_com->statut = 1;
        $up_com->update();
      }
      
      $up_com->update();
      return response()->json(['status'=>200,'message'=>'status updated successfull !!']);

     }else{
           return redirect('administrateur/create_login_admin') ;  

     }

    }

     public function delete_coment($id){
      if(session('info_adm')){
      $dele_rec = note::find($id)->delete();
      return response()->json(["status"=>200, "message"=>"Reclamation deleted successfull  !!"]);
    }else{
           return redirect('administrateur/create_login_admin') ;  

    }
  }

    public function meilx(){
      return view('projet_fama.texto');
    }

    public function list_medico(){
      $liste_medico = medico::orderBy('id','desc')->simplePaginate(1);
      //dd($liste_medico);
      return view('projet_fama.list_medica',['liste_medico'=>$liste_medico]);
    }


    public function edit_all_medic($id){
      if(session('info_adm')){
         $edit_all_medic = medico::find($id);
         return view('projet_fama.edit_all_medic',['edit_all_medic'=>$edit_all_medic]);
    }else{
              return redirect('administrateur/create_login_admin') ;  


    }

  }

    public function upd_medic_all_admin(Request $request ,$id){
    
      
        $add_medico =  medico::find($id);
        $add_medico->Reference = $request->Reference;
        $add_medico->nom_pro = $request->nom_pro;
        $add_medico->desciption = $request->desciption;
        $add_medico->prix = $request->prix;
        $add_medico->prix_desconte = $request->prix_desconte;
        $add_medico->desconte = $request->desconte;
        $add_medico->kilo = $request->kilo;
        $add_medico->stock = $request->stock;
        $add_medico->date_fabriq = $request->date_fabriq;
        $add_medico->date_expir = $request->date_expir;
        $add_medico->id_pharmacie = $request->pharmacie;
        $add_medico->statut = $request->statut;
            if($request->hasFile('photo')){
                $file = $request->file('photo');
                $name = time().'.'.$file->getClientOriginalExtension();
                $file->move('medico',$name);
                $add_medico->photo = $name;
  
            }
  
        $add_medico->update();
        return response()->json(["status"=>200,"message"=>"Your medication has been updated successfully!!😍"]); 
      
      
    }
  



    public function list_commande_all(){
      if(session('info_adm')){
      $liste_commnde_all = list_commande::orderBy('id','desc');
      //dd($liste_commnde_all);
      return view('projet_fama.liste_commnde_all',['liste_commnde_all'=>$liste_commnde_all]);
    }else{
      return redirect('administrateur/create_login_admin') ;  

    }

  }

    public function salary_all(){
      if(session('info_adm')){
      $liste_salary_all = pagamento::all();
      //dd($liste_salary_all);
      return view('projet_fama.liste_salary_all',['liste_salary_all'=>$liste_salary_all]);
    }else{
      return redirect('administrateur/create_login_admin') ;  

    }

  }

    public function delet_med_all($id){
      $del_admin_med = medico::find($id)->delete();
      
}


  public function list_salaire($id){
    if(session('info_adm')){
    $pharmox = pharmacie::find($id);
    $list_sal = salaire_pharmacie::where('id_pharmacie',$id)->orderBy('id','desc')->get();
    $list_devolu = devolution::where('id_pharmacie',$id)->where('statut','1')->orderBy('created_at','desc')->get();
    $T_calcul_devo = calcul_total_devolution::where('id_pharmacie',$id)->where('statut','2')->orderBy('id','desc')->first();


    //dd($T_calcul_devo);
    return view('projet_fama.list_sal',["list_sal"=>$list_sal,'pharmox'=>$pharmox,'list_devolu'=>$list_devolu,'T_calcul_devo'=>$T_calcul_devo]);
  }else{
    return redirect('administrateur/create_login_admin') ;  

  }

}

  

  public function delete_salaire_phar($id){
    if(session('info_adm')){
    $dele_rec = salaire_pharmacie::find($id)->delete();
    return response()->json(["status"=>200, "message"=>"payment deleted successfull  !!"]);
  }else{
    return redirect('administrateur/create_login_admin') ;  

  }
}



  public function PDF_salaire($id){
    $fifa = 0;
    $pharmox = pharmacie::find($id);
    $list_sal = salaire_pharmacie::where('id_pharmacie',$id)->orderBy('id','desc')->first();
    $list_devolu = devolution::where('id_pharmacie',$id)->where('statut','2')->orderBy('created_at','desc')->first();
    $T_calcul_devo = calcul_total_devolution::where('id_pharmacie',$id)->where('statut','2')->orderBy('id','desc')->first();
    $pag  =  pagamento::where('id_pharmacie',$id)->orderBy('id','desc')->first();
    //dd($pag);
         

    $pdf = PDF::loadView('projet_fama.PDF_salaire', compact('list_sal','pharmox','list_devolu','T_calcul_devo','pag'))->setOptions(['defaultFont' => 'sans-serif']);
    //$pdf = PDF::loadView('projet_fama.PDF_salaire',["list_sal"=>$list_sal,'pharmox'=>$pharmox]);
    return $pdf->setPaper('a4')->stream('COMPROVANTE_BENEFICIO.pdf');
  }



  public function PDF_salaire2($id){
    $pharmox = pharmacie::find($id);
    $list_sal = salaire_pharmacie::where('id_pharmacie',$id)->orderBy('id','desc')->get();
    $list_devolu = devolution::where('id_pharmacie',$id)->where('statut','2')->orderBy('created_at','desc')->get();
    $T_calcul_devo = calcul_total_devolution::where('id_pharmacie',$id)->where('statut','2')->get();
    //$pag  =  pagamento::where('id_pharmacie',$id)->orderBy('id','desc')->where('statut','3')->first();
    //dd($pag);


    $pdf = PDF::loadView('projet_fama.PDF_salaire2', compact('list_sal','pharmox','list_devolu','T_calcul_devo'))->setOptions(['defaultFont' => 'sans-serif']);
    //$pdf = PDF::loadView('projet_fama.PDF_salaire',["list_sal"=>$list_sal,'pharmox'=>$pharmox]);
    return $pdf->setPaper('a4')->stream('COMPROVANTE_BENEFICIO.pdf');
  }



   /*public function detail_cli_com(Request $request){
    $comm = list_commande::where('id_commande',$request->id_commande)->first();
    $det_cli_com = list_commande::where('id_commande',$request->id_commande)->where('id_pharmacie',$request->id_pharmacie)->where('id_user',session('info_user')[0]->id)->get();
    //dd($det_cli_com);
    //return view('projet_fama.detail_cli_com',["det_cli_com"=>$det_cli_com,"comm"=>$comm]);
    //return response()->json(['status'=>200,'det_cli_com'=>$det_cli_com, 'comm'=>$comm]);
   }*/

   public function detail_cli_com($id){
    if(session('info_user')){
    $comm = list_commande::where('id_commande',$id)->get();
    $det_cli_com =  list_commande::where('id_commande',$id)->first();
    $xut = list_commande::where('id_commande',$id)->orderBy('id','desc')->first();
    $id_address_dif = add_shipping::where('id_commande',$id)->first();
    //dd($id_address_dif);
    // dd($xut);
    //dd($comm);
   return view('projet_fama.detail_cli_com',["comm"=>$comm,'det_cli_com'=>$det_cli_com,'xut'=>$xut,'id_address_dif'=>$id_address_dif]);
   
    }else{
      return redirect('formulaire_login/vegazi/nino');
    }
  
  }


   public function lista_pagamento_client($id){
    if(session('info_adm')){
      $id_clio = User::find($id);
        $lista_pagamento_client = pagamento::where('id_user',$id)->get();
       // dd($lista_pagamento_client);
        return view('projet_fama.lista_pagamento_client',['lista_pagamento_client'=>$lista_pagamento_client,'id_clio'=>$id_clio]);
   }else{
    return redirect('administrateur/create_login_admin') ;  

   } 

  }

     
   public function delete_pagment($id){
    $dele_rec = pagamento::find($id)->delete();
    return response()->json(["status"=>200, "message"=>"payment deleted successfull  !!"]);
  }






  public function order_unpaid($id){
    if(session('info_boutique')){
      $xax = pharmacie::find($id);
      //dd($xax);
      $id_p = commande::where('id_pharmacie',session('info_boutique')[0]->id)->orderBy('id','desc')->first();

      $command_o = commande::where('id_pharmacie',$id)->where('statut','0')->get();
      //dd($command_o);
      return view('projet_fama.order_up',['command_o'=>$command_o,'id_p'=>$id_p,'xax'=>$xax]);

    }else{
      return redirect('formulaire1_login_pharmacie/ekodide/lazaro'); 
      //return redirect('administrateur/create_login_admin') ;  
    }
   }






  public function delete_commande_unpaid(Request $request, $id){
    //dd($request->id_commande);
    $list_com = list_commande::where('id_pharmacie',session('info_boutique')[0]->id)->where('id_commande',$request->id_commande)->get();
    
    
    foreach ($list_com as  $item) {
        $ix = $item->id_medico;
         $medico = medico::find($ix);
          //$medico->stock = $medico->stock + $item->qt_list;
          //dd($medico);
          //$medico->update();
          //dd($medico->medico->stock);
      }  
      
      //dd($medico);
     
      //$atualiz_stock = commande::find($id)->delete();
     // list_commande::where('id_pharmacie',session('info_boutique')[0]->id)->where('id_commande',$request->id_commande)->delete();
  
    return response()->json(["status"=>200, "message"=>"Order deleted successfull  !!"]);
  }


  public function restore_chambre(){
    pharmacie::withTrashed()->restore();
    return redirect('admin/list_phamacie');
   }



  public function list_all_order(){
    if(session('info_adm')){
    $list_all_order = commande::orderBy('id','desc')->get();
    return view('projet_fama.list_all_order',['list_all_order'=>$list_all_order]);
  }else{
    return redirect('administrateur/create_login_admin') ; 
  }

}



  public function apagar_commande($id){
   
   $azox = list_commande::where('id_commande',$id)->get();
    foreach($azox as $item){
      $item->delete();
    }

   $cx = add_shipping::where('id_commande',$id)->first();
   $cx->delete();

   $axa = commande::find($id)->delete();

    return response()->json(['status'=>200,'message'=>'order deleted successfull']);
  }



  public function search(Request $request){
    if(session('info_adm')){
       $search = User::where('id','LIKE','%'.$request->recherche.'%')
       ->orWhere('name','LIKE','%'.$request->recherche.'%')
       ->orWhere('firstname','LIKE','%'.$request->recherche.'%')
       ->orWhere('cpf','LIKE','%'.$request->recherche.'%')->get();

      $output ='';
       if(count($search) > 0){
          
           $output .='
             <table class="table table-bordered">
               
             
            
           ';

           foreach ($search as $item) {
             $output .='
                <tbody>
 
                   <tr>
               
                   <td class="product-thumbnail">
                <img  src="' . url("user/$item->photo") . '"  alt="" height="82px" width="88px" style="border-radius:72px"/>
                  </td>

                   <td>'.$item->firstname.' '.$item->name.'</td> 
                   <td>'.$item->email.'</td> 
                   <td>'.$item->password.'</td> 
                   <td>'.$item->cpf.'</td> 
                   <td>'.$item->nacimento.'</td> 
                   <td>'.'+55'.'('.$item->ddd.') '.$item->tel.'</td> 
                   <td>'.$item->state.', '.$item->city.' '.$item->street.' ,'.$item->n_apt.' '.$item->country.' ,'.$item->codzip.'</td>';
                   
                   if($item->statut == 1)
                   $output .= '<td style="color:green">ACTIVE</td>';
                   else
                   $output .= '<td style="color:red">NO ACTIVE</td>';
                  
               
                   


                   $output .='<td>
                    <a href="admin/edit_user_admin/'.$item->id.'" class="btn btn-warning height-auto btn-sm mt-2" style="width:100%">Edit</a>
                    <a href="#" class="btn btn-danger height-auto btn-sm mt-2" onclick="delete_pharma('.$item->id.')" style="width:100%">Delete</a>
                    <a href="admin/lista_pagamento_client/'.$item->id.'" class="btn btn-info height-auto btn-sm mt-2"  style="width:100%">Detail Payment</a>
  
                  
                     </td>


                   </tr>
             ';
           }

           $output .='
              </body>
              </table>
           ';
       }else{
        $output .='No Result';
       }

       return response()->json($output);
      }else{
        return redirect('administrateur/create_login_admin') ; 
      }
  }
   
  
   
  public function reclam_user($id){
    $id = session('info_user')[0]->id;
    $user_xx = User::find($id);
    return view('projet_fama.recla_cli',['user_xx',$user_xx]);

  }

  public function list_reclam_client(){
    if(session('info_adm')){
    $reclam_cli = reclamation_cliente::orderBy('id','desc')->get();
    //dd($reclam_cli);
    return view('projet_fama.list_reclam_client',["reclam_cli"=>$reclam_cli]);
  }else{
    return redirect('administrateur/create_login_admin') ; 
  }
}

  public function response_cli($id){
    if(session('info_adm')){
    $response = reclamation_cliente::find($id);
    return view('projet_fama.reponx_rec_cli',["response"=>$response]);
  }else{
    return redirect('administrateur/create_login_admin') ; 
  }

}


  public function recherche_comm(Request $request){
    if(session('info_adm')){
    $recherche = commande::where('code_commande','LIKE','%'.$request->recherche.'%')
                             ->orWhere('cpf','LIKE','%'.$request->recherche.'%')
                             ->orWhere('name','LIKE','%'.$request->recherche.'%')
                             ->orWhere('firstname','LIKE','%'.$request->recherche.'%')->get();
                            // ->orWhere('created_up','LIKE','%'.$request->recherche.'%')->get();


             $output ='';
             if(count($recherche) > 0 ){
               $output .='
                
               
               ';
               

               foreach ($recherche as $item) {
                 $output .='
                 <tbody>
                
                                         <tr>
                                           
                                             <td>'.$item->id.'</td> 
                                             <td>'.$item->firstname.' '.$item->name.' ->'.$item->cpf.'</td> 
                                             <td>'.$item->code_commande.'</td> 
                                             <td>$'.$item->total_commande.'</td>  
                                             <td>'.$item->created_at.'</td>
                                             <td>'.$item->pharmacie->name_pharma.'</td>';
                                            
                                             if($item->commentax == NULL)   
                                           
                                             $output .='<td style="color:blue">No Emergency</td>';
                                             else
                                            $output .=' <td style="color:green">'.$item->commentax.'</td>';
                                             
                                    
 
                                            if($item->statut == 1)
                                    
                                       $output .=' <td style="color:#00008B;font-family:aharoni">Paid</td>';
   
                                        elseif($item->statut == 2)
                                        $output .=' <td style="color:#00008B;font-family:aharoni">Out for delivery. . .</td>';
                                              
                                           
                                         else if($item->statut == 0)
                                      $output .='  <td style="color:#DC143C;font-family:aharoni">Awaiting payment. . .</td>';
                                      else
                                    $output .='<td style="color:green;font-family:aharoni"> product Delivered. . .</td>
 
                              
                                    </tr>
                 </tbody>;
                 
                 ';
               }
      
          
             }else{
              $output .='No Order';
             }

       return response()->json($output);
            }else{
              return redirect('administrateur/create_login_admin') ; 
            }
  }


    public function formulaire_devolution($id){
      if(session('info_adm')){
      $list_com = list_commande::where('id_commande',$id)->first();
      $id_com = commande::find($id)->id;
      return view('mood_x',['list_com'=>$list_com,"id_com"=>$id_com]);
    }else{
      return redirect('administrateur/create_login_admin') ; 
    }
  }

    public function devolution(Request $request,$id){
     
      $eoix = list_commande::find($id);
      $eoix->statut = $request->statut;
      $eoix->update();

       $up_com = commande::where('id',$request->id_commande)->first();
       $up_com->statut = $eoix->statut;
       $up_com->update();

      
     
     
          if(($eoix->statut == 4) &&  ($up_com->statut == 4)){
              $edit_pagamento = pagamento::where('id_list_com',$request->id_commande)->first();
               $edit_pagamento->statut = 3;
               $edit_pagamento->update();

                
               $calcul1 = number_format(($edit_pagamento->totalfinal - $edit_pagamento->totalfinal * $request->devolux),2,'.','');
               $calcul2 = $edit_pagamento->totalfinal - $calcul1;
                  
                    
                    $automatization_devolution = list_commande::where('id_commande',$request->id_commande)->first();
                  
                     $devolution = new devolution();
                      $devolution->id_list = $automatization_devolution->id;
                      $devolution->id_commande = $automatization_devolution->id_commande;
                      $devolution->id_user = $automatization_devolution->id_user;
                      $devolution->id_medico = $automatization_devolution->id_medico;
                      $devolution->id_pharmacie = $automatization_devolution->id_pharmacie;
                      $devolution->id_pagamento = $edit_pagamento->id;
                      $devolution->qt_list = $automatization_devolution->qt_list;
                      $devolution->total_list = $automatization_devolution->total_list;
                      $devolution->devolution_pharma = $calcul2;
                      $devolution->taxo = $request->devolux;
                      $devolution->code_commande = $automatization_devolution->commande->code_commande;
                      $devolution->statut = 1;
                      $devolution->save();
              

        }
       
        
        return response()->json(['status'=>200,'message'=>'Return performed successfully !!']);

    }



    public function responx_pharma($id){
      if(session('info_adm')){
      $response = contacto::find($id);
     
    

      return view('projet_fama.resp_pharmacie',["response"=>$response]);
    }else{
      return redirect('administrateur/create_login_admin') ; 
    }
  }

 public function contact_all_client(){
   if(session('info_adm')){
  return view('projet_fama.contact_all_client');
 }else{
  return redirect('administrateur/create_login_admin') ; 
 }

}

  public function contact_all_pharmacie(){
    if(session('info_adm')){
    return view('projet_fama.contact_all_pharmacie');
  }else{
    return redirect('administrateur/create_login_admin') ; 
  }

    
}


public function inter_pharma_client($email){
   $comunication  = commande::where('email',$email)->where('id_pharmacie',session('info_boutique')[0]->id)->first();
   //dd($comunication);
   return view('projet_fama.inter_pharma_cli',['comunication'=>$comunication]);
}


public function dublon_chatx(){
 
  return view('projet_fama.dublon_chat');


}





















}