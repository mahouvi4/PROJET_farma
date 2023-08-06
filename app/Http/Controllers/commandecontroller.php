<?php

namespace App\Http\Controllers;
use App\Models\user;
use App\Models\distance;
use App\Models\medico;
use App\Models\card;
use App\Models\list_commande;
use App\Models\commande;
use App\Models\pharmacie;
use App\Models\add_shipping;
use App\Models\pagamento;
use App\Models\salaire_pharmacie;
use App\Models\devolution;
use App\Models\calcul_total_devolution;
use PagSeguro\Configuration\Configure;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class commandecontroller extends Controller
{
       
    private $_configs;
      public function __construct()

  { 
    $this->_configs = new Configure();
    $this->_configs->setCharset("UTF-8");
    $this->_configs->setAccountCredentials(env("PAGSEGURO_EMAIL"),env("PAGSEGURO_TOKEN"));
    $this->_configs->setEnvironment(env("PAGSEGURO_AMBIENTE"));
    $this->_configs->setLog(true, storage_path('logs/pagseguro_'. date('Ymd'). '.log'));
       
  }

  public function getCredential(){
    return $this->_configs->getAccountCredentials();
  }
    

   // partie commande
    public function store(Request $request)
    {

     

       if(empty($request->firstname)  || empty($request->name) || empty($request->nacimento)  || empty($request->email) || empty($request->cpf) || empty($request->ddd)
        || empty($request->tel) || empty($request->country)|| empty($request->state) || empty($request->city)
         || empty($request->district) || empty($request->street) || empty($request->codzip) || empty($request->n_apt)){
        return response()->json(['status'=>401,'message'=>'You may have forgotten to fill in an input field, please fill in all the fields and try again']);
       }else{
        if(session('info_user')){
          $add_commande = new commande();
          //user
          $add_commande->id_user = session('info_user')[0]->id;
          $add_commande->firstname = $request->firstname;
          $add_commande->name = $request->name;
          $add_commande->nacimento = $request->nacimento;
          $add_commande->email = $request->email;
          $add_commande->cpf = $request->cpf;
          $add_commande->ddd = $request->ddd;
          $add_commande->tel = $request->tel;
          $add_commande->country = $request->country;
          $add_commande->state = $request->state;
          $add_commande->city = $request->city;
          $add_commande->district = $request->district;
          $add_commande->street = $request->street;
          $add_commande->codzip = $request->codzip;
          $add_commande->n_apt = $request->n_apt;
          $add_commande->id_pharmacie = $request->id_pharmacie;
          //commande
          $add_commande->code_commande = time().'EXP-K'.rand(1111,9999);
          $add_commande->commentax = $request->commentax;
          $add_commande->total_commande = number_format($request->total_commande,2,'.','');
          //dd($add_commande->total_commande);
         // dd($add_commande);
          $add_commande->save();


            

              // charger la table liste commande 
                  $card1 = card::where('id_pharmacie', $request->id_pharmacie)->where('id_user',session('info_user')[0]->id)->get();
                  $aller = 0;  
                  $distox = distance::where('id_user',session('info_user')[0]->id)->first();
                  //dd($distox->distance);
                  foreach ($card1 as $item) {
                          $list_como = new list_commande();
                          $list_como->id_medico = $item->id_medico;

                               if($item->medico->desconte > 0){
                                $list_como->prix = $item->medico->prix - ($item->medico->prix * $item->medico->desconte/100);
                               }else{
                                $list_como->prix = $item->medico->prix;
                               }
                          $list_como->id_user = session('id_user',session('info_user')[0]->id);
                          $list_como->id_pharmacie = $request->id_pharmacie;
                          $list_como->id_commande = $add_commande->id;
                          $list_como->total_list = number_format($add_commande->total_commande,2,'.','');
                          $list_como->qt_list = $item->qt;
                          $list_como->desconte = $item->medico->desconte;
                          $list_como->distance = $distox->distance;
                          $list_como->prix_frete = $item->prix_frete;
                          $list_como->aller_retirer = $item->aller_retirer ;
                        
                           $aller += $item->aller_retirer;
                           //dd($aller);
                           if($aller == 0){
                             $list_como->verifier_statut_entrega = 0;
                           }elseif($aller > 0){
                             $list_como->verifier_statut_entrega = 1;
                           }

                            $list_como->save(); 
                         
                            
                    }

                          
                         

                          
                    
              

          
                                    // charger la table adresse shipping....
              
                                    $add_shipping = new add_shipping();
                                    $add_shipping->id_commande = $add_commande->id;
                                    $add_shipping->receiv_user_com = $request->receiv_user_com;
                                    $add_shipping->receiv_country = $request->receiv_country;     
                                    $add_shipping->receiv_state = $request->receiv_state;     
                                    $add_shipping->receiv_district = $request->receiv_district;     
                                    $add_shipping->receiv_city = $request->receiv_city;     
                                    $add_shipping->receiv_street = $request->receiv_street;     
                                    $add_shipping->receiv_npt = $request->receiv_npt;     
                                    $add_shipping->receiv_cpf = $request->receiv_cpf;
                                    $add_shipping->save();
                                    
                                    //update data utilisateur

                                    if(session('info_user')[0]->firstname ==NULL){
                                      $atualiz_user = user::find(session('info_user')[0]->id);
                                      $atualiz_user->firstname = $request->firstname;
                                      $atualiz_user->name = $request->name;
                                      $atualiz_user->nacimento = $request->nacimento;
                                      $atualiz_user->email = $request->email;
                                      $atualiz_user->cpf = $request->cpf;
                                      $atualiz_user->ddd = $request->ddd;
                                      $atualiz_user->tel = $request->tel;
                                      $atualiz_user->country = $request->country;
                                      $atualiz_user->state = $request->state;
                                      $atualiz_user->city = $request->city;
                                      $atualiz_user->district = $request->district;
                                      $atualiz_user->street = $request->street;
                                      $atualiz_user->n_apt = $request->n_apt;
                                      $atualiz_user->codzip = $request->codzip;
                                      $atualiz_user->update();
                                    }

                                        
   
                                                     //atualiz stock...

                                                     /*$atualiz_stock = card::where('id_pharmacie', $request->id_pharmacie)
                                                     ->where('id_user',session('info_user')[0]->id)->get();
                                                       foreach ($atualiz_stock as $item) {
                                                        $medico = medico::find($item->id_medico);
                                                        $medico->stock = $medico->stock - $item->qt;
                                                        $medico->update();
                                                       }*/
                 
                                                     

                                                              
                                                                //razer le panier...

                                        /* $raz_card = card::where('id_pharmacie', $request->id_pharmacie)->where('id_user',session('info_user')[0]->id);
                                          $raz_card->delete();*/

                                          return response()->json(['status'=>200,'message'=>'&marché']);

      }
         
       }
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_command_uniq($id)
    {
           if (session('info_user')) {
             $user = session('info_user')[0]->id;
              $uniq_com = list_commande::where('id_user',$user)->where('id_pharmacie',$id)->OrderBy('id','desc')->take(1)->first();
             return view('projet_fama.command_uniq',['uniq_com'=>$uniq_com]) ;
           }else{
            return redirect('formulaire_login');
           }
    }

   
      public function formulaire_credito($id){
        if(session('info_user')){
                $sessionCode= \PagSeguro\Services\Session::create(
                $this->getCredential()
              );

              $sessionID = $sessionCode->getResult();

            $user = session('info_user')[0]->id;
            $data_pagar = list_commande::where('id_user',$user)->OrderBy('id','desc')->take(1)->first();
            return view('pagmento.credito',['data_pagar'=>$data_pagar,'sessionID'=>$sessionID]);

        }else{

        }
      }

      
      public function add_pagarx(Request $request){
             
         
        $credCard = new \PagSeguro\Domains\Requests\DirectPayment\CreditCard();
       
        $result = list_commande::where('id_commande',$request->id_list_com)->get();
        $credCard->setReference($request->id_list_com);
        $oo = 0;
       //dd($request->id_list_com);
        $credCard->setCurrency("BRL");
         foreach($result  as $item){
                    
           
          if($item->desconte != NULL && $item->desconte >= 0){
            if($item->aller_retirer == 1){
               $credCard->addItems()->withParameters(
             $item->id_medico,
             $item->medico->nom_pro,
              $item->qt_list,
              number_format(($item->qt_list * $item->prix_frete),2,".",""),
             
             );
            }elseif($item->aller_retirer == 0){
              $credCard->addItems()->withParameters(
               $item->id_medico,
             $item->medico->nom_pro,
              $item->qt_list,
             number_format(($item->prix - ($item->prix * $item->desconte/100)), 2,".",""),
              ); 
            }
          
          }elseif($item->desconte == NULL){
            
           if($item->aller_retirer == 1){
            $credCard->addItems()->withParameters(
             $item->id_medico,
             $item->medico->nom_pro,
              $item->qt_list,
              number_format(($item->qt_list * $item->prix_frete),2,'.',''),
             
            );
           }elseif($item->aller_retirer == 0){
            $credCard->addItems()->withParameters(
                  $item->id_medico,
             $item->medico->nom_pro,
              $item->qt_list,
              number_format(($item->qt_list * $item->prix),2,'.',''),
             
                 );
             }
          
            
              }

        }

    
             $info_uz = User::where('id_user',session('info_user')[0]->id);
              $credCard->setSender()->setName(session('info_user')[0]->firstname.' '.session('info_user')[0]->name);
             // $credCard->setSender()->setEmail(session('info_user')[0]->email);
              $credCard->setSender()->setEmail(session('info_user')[0]->name. "@sandbox.pagseguro.com.br");
              $credCard->setSender()->setHash($request->input("hashseller"));
              $credCard->setSender()->setPhone()->withParameters(session('info_user')[0]->ddd, session('info_user')[0]->tel);
              $credCard->setSender()->setDocument()->withParameters("CPF",session('info_user')[0]->cpf);
    
              //send to pagseguro
    
              $credCard->setShipping()->setAddress()->withParameters(
                
                "RIO GRANDE DO NORTE",
                "421",
                "Rua maria braga negreli",
                "62900000", 
                 "Natal",
                 "RN",
                 "Brasil",
                 'xxxxxx',
            
              );
    
              $credCard->setBilling()->setAddress()->withParameters(
               
                "RIO GRANDE DO NORTE",
                "421",
                "Rua maria braga negreli",
                "62900000", 
                 "Natal",
                 "RN",
                 "Brasil",
                'xxxxxx',
               
            
              );

              $credCard->setToken($request->input("cardtoken"));
              $totalparcela = $request->input("totalparcela");
              $totalapagar = $request->input("totalapagar");
              $nparcela = $request->input("nparcela");
              //dd(number_format($totalparcela));

             // {{ $request->nacimento->format('d/m/Y')}}
              $credCard->setInstallment()->withParameters($nparcela , number_format($totalparcela, 2,".",""));
                //data titulo card_bank
              $credCard->setHolder()->setName($request->nomecartao);
              $credCard->setHolder()->setBirthdate("04/05/1994");
              $credCard->setHolder()->setDocument()->withParameters("CPF",71834413427);
              $credCard->setHolder()->setPhone()->withParameters(84,999928818);
          // var_dump($credCard);
    
              $credCard->setMode("DEFAULT");
             
             $result = $credCard->register($this->getCredential());
            
              //table pagamento
              $pagamento  =  new pagamento();
              $pagamento->id_pharmacie = $request->id_pharmacie;
              $pagamento->nomecartao = $request->nomecartao;
              $pagamento->ncredito = $request->numerocartao;
              $pagamento->ncvv = $request->ncvv;
              $pagamento->mesexp = $request->mesexp;
              $pagamento->anoexp = $request->anoexp;
              $pagamento->bandeira = $request->bandeira;
              $pagamento->nparcela = $request->nparcela;
              $pagamento->totalfinal = $request->totalfinal;
              $pagamento->totalparcela = $request->totalparcela;
              $pagamento->totalapagar = $request->totalapagar;
              $pagamento->id_list_com = $request->id_list_com;
              $pagamento->id_user = $request->id_user;
              $pagamento->totalfinaliz = $request->totalfinal;
             // $pagamento->save();
    
              //update statut commande
   
              $result = list_commande::where('id_commande',$request->id_list_com)->first();
              $result->statut = 1;
             // $result->commande->statut = 1;
              $result->update();  
               
              $com = commande::find($request->id_list_com);
              $com->statut = 1;
              $com->update();


              $atualiz_stock = card::where('id_pharmacie', $request->id_pharmacie)
              ->where('id_user',session('info_user')[0]->id)->get();
                foreach ($atualiz_stock as $item) {
                 $medico = medico::find($item->id_medico);
                 $medico->stock = $medico->stock - $item->qt;
                // dd($medico->stock);
                 $medico->update();
                }

              
                         //razer le panier...
                         $raz_card = card::where('id_pharmacie', $request->id_pharmacie)->where('id_user',session('info_user')[0]->id);
                         $raz_card->delete();

  //dd($credCard);
           return response()->json(['status'=>200,'message'=>'Payment made successfully!!']);
    
    
     }    

     public function merci_fin(){
      return view('merci');
     }

   /*public function ma_commande($id_pharmacie,$id_commande){
    $list_my_order = list_commande::where('id_user',session('info_user'))->where('id_pharmacie',$id_pharmacie)->where('id_commande',$id_commande)->get();
    return view('projet_fama.mes_com',['list_my_order'=>$list_my_order]);
  }*/

    public function ma_commande($id){
    if(session('info_user')){
    $id_pharmacie = pharmacie::find($id);
    $id_user = session('info_user')[0]->id;
    $list_my_order = commande::where('id_user',$id_user)->where('id_pharmacie',$id)->OrderBy('id','desc')->get();
    return view('projet_fama.mes_com',['list_my_order'=>$list_my_order]);
   }else{
       return redirect('formulaire_login/vegazi/nino');
   }
  }


   public function list_pagment_phar($id){
    if(session('info_boutique') && session('info_adm')){
    $phar = pharmacie::find($id);
    $list_pagment_phar_im = pagamento::where('id_pharmacie',$id)->first();
    $list_devolu = devolution::where('id_pharmacie',$id)->where('statut','1')->orderBy('created_at','desc')->get();
    $list_pagment_phar = pagamento::where('id_pharmacie',$id)->where('statut','5')->get();
    $T_calcul_devo = calcul_total_devolution::where('id_pharmacie',$id)->where('statut','1')->first();
    //dd($list_pagment_phar);
    return view('projet_fama.list_pagment',['list_pagment_phar'=>$list_pagment_phar, 'list_pagment_phar_im'=>$list_pagment_phar_im,'list_devolu'=>$list_devolu,'phar'=>$phar,'T_calcul_devo'=>$T_calcul_devo]);
   }else{
   return redirect('administrateur/create_login_admin');
   }

  }

   public function salaire_pharmacie(Request $request){
       if(session('info_boutique')){
        if(empty($request->datax) && empty($request->motiva)){
          return response()->json(['status'=>500,'message'=>'You forgot to inform the payment date and payment reason !!']);
        }
        elseif(empty($request->datax)){
            return response()->json(['status'=>400,'message'=>'You forgot to inform the payment date !!']);
          }else if(empty($request->motiva)){
            return response()->json(['status'=>300,'message'=>'You forgot to inform the payment reason !!']);
        }else{
          $salaire_pharmacie  = new  salaire_pharmacie();
        $salaire_pharmacie->total_vente = $request->total;
        $salaire_pharmacie->benefice_plat = $request->benefice_platform;
        $salaire_pharmacie->benefice_pharma = $request->total;
        $salaire_pharmacie->total_vente = $request->benefice_final_pharma;
        $salaire_pharmacie->comix = $request->comix;
        $salaire_pharmacie->motiva = $request->motiva;
        $salaire_pharmacie->datax = $request->datax;
        $salaire_pharmacie->id_pharmacie = session('info_boutique')[0]->id;
        //dd($salaire_pharmacie);
        $salaire_pharmacie->save();
        
        $pag  =  pagamento::where('id_pharmacie',session('info_boutique')[0]->id)->where('statut','5')->get();
         foreach($pag as $item){
           $item->statut = 2;
           $item->update();
         }

         $stat_com = commande::where('statut','3')->get();
         //dd($stat_com);
         foreach($stat_com as $item){
         $item->consolidation = 1;
         $item->update();
         }

         $calcul_T = calcul_total_devolution::where('id_pharmacie',session('info_boutique')[0]->id)->where('statut','1')->first();
         //dd($calcul_T);
         if($calcul_T){
          $calcul_T->statut = 2;
          $calcul_T->update();
         }
         
          

          $dvolu = devolution::where('id_pharmacie',session('info_boutique')[0]->id)->where('statut','1')->get();
          foreach ($dvolu as  $item) {
            $item->statut = 2;
            $item->update();
            
          }




       
               return response()->json(['status'=>200,'message'=>'Payment made successfully !!']);
   
         }
        
       }else{
          return redirect('formulaire1_login_pharmacie/ekodide/lazaro');
       }


     
   }

}

