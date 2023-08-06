<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\like;
use App\Models\medico;
use App\Models\card;
use App\Models\list_commande;
use App\Models\commande;
use App\Models\pharmacie;
use App\Models\add_shipping;
use App\Models\pagamento;
use App\Models\devolution;
use App\Models\reclamation_cliente;
use App\Models\contacto;
use App\Models\position_user;
use App\Models\calcul_total_devolution;
use Illuminate\Support\Facades\Mail;
use PagSeguro\Configuration\Configure;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
  // credecial pagueseguro
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

                      //vue formulaire pague seguro

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
                  return redirect('formulaire_login/vegazi/nino');
                    }
                  }



    public function sendEmail(Request $request){
              
        $credCard = new \PagSeguro\Domains\Requests\DirectPayment\CreditCard();
      
        $result = list_commande::where('id_commande',$request->id_list_com)->get();
      
      
        $credCard->setReference($request->id_list_com);
       //dd($request->id_list_com);
        $credCard->setCurrency("BRL");
         foreach($result  as $item){
          if($item->desconte > 0){
            if($item->aller_retirer == 1){
               $credCard->addItems()->withParameters(
             $item->id_medico,
             $item->medico->nom_pro,
              $item->qt_list,
           
               number_format(($item->prix_frete),2,".",""),
             
             );
            }elseif($item->aller_retirer == 0){
              $credCard->addItems()->withParameters(
               $item->id_medico,
             $item->medico->nom_pro,
              $item->qt_list,
             
              number_format(($item->medico->prix - ($item->medico->prix * $item->medico->desconte/100)), 2,".",""),
            // number_format(($item->prix - ($item->prix * $item->desconte/100)), 2,".",""),
              ); 
            }
          
          }elseif( $item->desconte == 0){
            
           if($item->aller_retirer == 1){
            $credCard->addItems()->withParameters(
             $item->id_medico,
             $item->medico->nom_pro,
              $item->qt_list,
              number_format(($item->prix_frete),2,'.',''),
              //'50.00',
            );
           }elseif($item->aller_retirer == 0){
            $credCard->addItems()->withParameters(
                  $item->id_medico,
             $item->medico->nom_pro,
              $item->qt_list,
              
              number_format(($item->medico->prix),2,'.',''),
             
                 );
             }
          
            
              }
        }
        
              $info_uz = User::find(session('info_user')[0]->id);
              $credCard->setSender()->setName($info_uz->firstname.' '.$info_uz->name);
             // $credCard->setSender()->setEmail(session('info_user')[0]->email);
              $credCard->setSender()->setEmail($info_uz->name. "@sandbox.pagseguro.com.br");
              $credCard->setSender()->setHash($request->input("hashseller"));
              $credCard->setSender()->setPhone()->withParameters($info_uz->ddd, $info_uz->tel);
              $credCard->setSender()->setDocument()->withParameters("CPF",$info_uz->cpf);
    
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
      
              $credCard->setMode("DEFAULT");
              //dd($credCard); 
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
              $pagamento->save();
    
              //update statut commande
   
              $result = list_commande::where('id_commande',$request->id_list_com)->get();
              foreach ($result as $item) {
                $item->statut = 1;
                $item->update();
              }  
               
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

                         $injection_map =  $verifier_statut_entrega = list_commande::where('id_commande',$request->id_list_com)->get();
                         
                         
    

//drogaz@gmail.com
        //SEND EMAIL
        $result = commande::where('id_pharmacie',$request->id_pharmacie)->first();
        $verifier_statut_entrega = list_commande::where('id_commande',$request->id_list_com)->first();
       // dd($verifier_statut_entrega);
    
          if(isset($verifier_statut_entrega) && $verifier_statut_entrega->verifier_statut_entrega == 1){

        $details = [
             'title'=>'Ola,  Acabou de chegar uma Encomenda  para voce',
             'body'=>'Esperemos que voce consiga entrega la no prazo,O cliente esta aguardando ☺',
             'thank'=> 'PHARMA-PLAT te Agradece pela Confiança 💌',
             
             
            
        ];
     
              
        $nom = [
            'title'=>'Ola Acabamos de receber a confirmaçao do seu pagamento ♥,o codigo da sua encomenda é=>'.$com->code_commande,
            'body'=>'Fique atento !! a sua encomenda ja ja vai sair para a entrega ☺☺',
            'thank'=> 'PHARMA-PLAT te Agradece pela Confiança 💌',
          
            
           
       ];

       $adm = [
        'title'=>'Ola ADM Pharma-Plat, Um Cliente Acabou de fazer uma Encomenda ♥',
        'body'=>'Espero que a Farmacia entrega a Encomenda no Prazo ☺☺',
        'thank'=> 'Obrigado PHARMA-PLAT 💌',
       
        
       
   ];


        Mail::to($result->pharmacie->email)->send(new TestMail($details));
        Mail::to("luxuluxu229@gmail.com")->send(new TestMail($adm));
        Mail::to(session('info_user')[0]->email)->send(new TestMail($nom));

  }elseif(isset($verifier_statut_entrega) && $verifier_statut_entrega->verifier_statut_entrega == 0){
         
        $details = [
          'title'=>'Ola,  Acabou de chegar uma Encomenda  para voce',
          'body'=>'O cliente pagou mas sem frete, entao preferiu ir até ai para retirar a encomenda.Sendo isso,pedimos para voce ficar atento até quando ele chegar.ja informamos para ele os documentos que ele precisara levar para comprovar o autor da compra antes de pegar a encomenda. E outra coisa, nao se esqueça pedir por gentilesa para ele der uma força (clicando no botao 👍)se ele gostou do seu serviço la na Plataforma ☺',
          'thank'=> 'PHARMA-PLAT te Agradece pela Confiança 💌',
          
          
         
     ];
  
           
     $nom = [
         'title'=>'Ola Acabamos de receber a confirmaçao do seu pagamento ♥,o codigo da sua encomenda é=>'.$com->code_commande,
         'body'=>'Ja informamos para a farmacia que voce preferiu ir até la para retirar a sua encomenda.E outra coisa, nao se esqueça de levar a sua cateira de identidade e o codigo da sua encomenda que nos enviamos para voce. Caso voce nao souber da rotar para poder chegar até la, é so voltar para a pagina Home, procurar a capa da Farmacia e clicar no botao [ Rastrear Mapa],assim voce consegue chegar até la sem a ajuda de ninguem.',
         'thank'=> 'PHARMA-PLAT te Agradece pela Confiança 💌',
       
         
        
    ];

    $adm = [
     'title'=>'Ola ADM Pharma-Plat, Um Cliente Acabou de fazer uma Encomenda  mas foi sem frete♥',
     'body'=>'Espero que a Farmacia consegue atender lo com todo o maior carinho do mundo ☺☺',
     'thank'=> 'Obrigado PHARMA-PLAT 💌',
    
     
    
];


     Mail::to($result->pharmacie->email)->send(new TestMail($details));
     Mail::to("luxuluxu229@gmail.com")->send(new TestMail($adm));
     Mail::to(session('info_user')[0]->email)->send(new TestMail($nom));
  }
        //Mail::to("relaxmusik229@gmail.com")->send(new TestMail($details));
        //return redirect('merci_fin/aziz/folade/eko');

               //dd($credCard);
            return response()->json(['status'=>200,'message'=>'Payment made successfully!!']);
    


    }


    public function upd_stat_com(Request $request,$id){
       
      $upx = commande::find($id);
      $upx->statut = $request->statut;
      
      $pharma = session('info_boutique')[0]->id;
      $xit = list_commande::where('id_commande',$request->id_commande)->get();
       foreach($xit as $item){
        $item->statut = $request->statut;
        $item->update();
       

      

      
      
      
      if($upx->statut == 2){
        $comd_ci = [
          'title'=>'Pronto, A sua encomenda acabou de sair  💌',
          'body'=>'Fique atento !! Ja  estamos chegando ☺☺',
          'thank'=> 'PHARMA-PLAT te Agradece pela Confiança 💌',
          
          
         
     ];

      }elseif ($upx->statut == 3) {
        $comd_ci = [
          'title'=>'Opa, Confirmaçao de entrega de encomenda  💌',
          'body'=>'E ai,gostou da sua encomenda? ,ainda temos outras novidades, Fique atento !!.E outra coisa, se voce gostou do nosso serviço, pedimos por gentilesa para voce acessar la a nossa plataforma, procurar pela  Farmacia ,e apenas clicar naquele botao famoso (👍) ☺☺',
          'thank'=> 'PHARMA-PLAT te Agradece pela Confiança  💌',
          
          
         
     ];

     $comd_conf_adm = [
      'title'=>'Ola ADM Pharma-Plat  💌',
      'body'=>' Vim Confirmar que a Phramacia acabou de entregar o pedido ao cliente ♥♣♠',
      'thank'=> 'Obrigado PHARMA-PLAT  💌',
      
      
     
 ];
      }

      $pag  =  pagamento::where('id_pharmacie',session('info_boutique')[0]->id)->where('id_list_com',$upx->id)->first();
       //dd($pag);
       if(($upx->statut == 1)){

        $pag->statut = 1;
        $pag->update();
        
       }elseif(($upx->statut == 2)){
        $pag->statut = 1;
        $pag->update();
       }
        

        if($upx->statut == 3){
         $pag = pagamento::where('id_pharmacie',session('info_boutique')[0]->id)->where('id_list_com',$upx->id)->first();
         $pag->statut = 5;
         $pag->update();
         

          Mail::to($upx->email)->send(new TestMail($comd_ci));
          Mail::to("luxuluxu229@gmail.com")->send(new TestMail($comd_conf_adm));

        }elseif($upx->statut == 2){
          Mail::to($upx->email)->send(new TestMail($comd_ci));
           
        }


        $upx->update();
     
      return response()->json(['status'=>200,'message'=>'Status updated successfull']);
  }

}

  public function reclama_cliente(Request $request){
    if(session('info_user')){
      $user = session('info_user')[0]->id;
    $rec = new reclamation_cliente();
    $rec->email = $request->email;
    $rec->name = $request->name;
    $rec->objet = $request->objet;
    $rec->message = $request->message;
    $rec->id_user = session('info_user')[0]->id;
      //dd($rec);
      $reclam_uz = [
        'title'=>'Ola ADM Pharma-Plat ,Voce acabou de receber reclamaçao do cliente->'.$request->name.'♠♠  Email->'.$request->email,
        'body'=>'Motivo->'.$request->objet.'♠♠-------------------------------------Menssagem->'.$request->message,
        'thank'=> 'Obrigado PHARMA-PLAT   💌',
      ];


      Mail::to("luxuluxu229@gmail.com")->send(new TestMail($reclam_uz));

    $rec->save();
    return response()->json(["status"=>200,"message"=>"Reclamation sended successfull !!"]);
    }else{
      return response()->json(["status"=>100,"message"=>"Sorry,You need to connect before of send your Reclamation !!"]);

    }
  }

    public function response_reclo_cli(Request $request,$id){
   
      //dd($rec);
      $respo_cli = [
        'title'=>'Ola '.' '.$request->name_rec.',O ADMIN da PHARMA-PLAT deu retorno à sua reclamaçao ',
        'body'=>$request->message,
        'thank'=> 'PHARMA-PLAT te Agradece 💌',
      ];

      $edit_statut = reclamation_cliente::find($id);
      $edit_statut->statut = 1;
      $edit_statut->update();


      Mail::to($request->email_rec)->send(new TestMail($respo_cli));

    return response()->json(["status"=>200,"message"=>"Response sended successfull !!"]);
    }




    public function devolution(Request $request,$id){
     
      $eoix = list_commande::find($id);
      $eoix->statut = $request->statut;
      $eoix->update();

       $up_com = commande::where('id',$request->id_commande)->first();
       $up_com->statut = $eoix->statut;
       $up_com->update();

       $pag  =  pagamento::where('id_pharmacie',session('info_boutique')[0]->id)->where('id_list_com',$up_com->id)->first();
       //dd($pag);
       if(($eoix->statut == 0) &&  ($up_com->statut == 0)){

        $pag->statut = 1;
        $pag->update();
        
       }elseif(($eoix->statut == 1) &&  ($up_com->statut == 1)){
        $pag->statut = 1;
        $pag->update();
       }
         if(($eoix->statut == 2) &&  ($up_com->statut == 2)){
          $pag->statut = 1;
          $pag->update();
         }


         if(($eoix->statut == 3) &&  ($up_com->statut == 3)){
          $pag->statut = 5;
          $pag->update();
         }

       
          
     
     
          if(($eoix->statut == 4) &&  ($up_com->statut == 4)){
            $edit_pagamento = pagamento::where('id_list_com',$request->id_commande)->first();

            if($edit_pagamento){
              $edit_pagamento->statut = 3;
              $edit_pagamento->update();
            }
              

                
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
                         //stockage
                              
                              
                               $T_devolu = devolution::where('id_pharmacie',$automatization_devolution->id_pharmacie)->where('statut','1')->OrderBy('id','desc')->first();
                               if($T_devolu) {

                                     
                                      $stockage_valeur_devolutionx = calcul_total_devolution::where('id_pharmacie', $automatization_devolution->id_pharmacie)->where('statut','1')->first();
                                      if($stockage_valeur_devolutionx){
                                      $stockage_valeur_devolutionx->total_devolution_pharma = $stockage_valeur_devolutionx->total_devolution_pharma + $T_devolu->devolution_pharma;
                                      $stockage_valeur_devolutionx->update();
                                     }else{
                                      $stockage_valeur_devolution = new calcul_total_devolution();
                                      $stockage_valeur_devolution->id_pharmacie = $devolution->id_pharmacie;
                                      $stockage_valeur_devolution->total_devolution_pharma = $T_devolu->devolution_pharma;
                                      $stockage_valeur_devolution->save();
                                     }
                                    
                                     }
                                
                                   
                              

                           

                         //fin stockage
                          

                      $devop1 = [
                        'title'=>'Ola '.' '.$up_com->firstname.',Noticia sobre o pedido de devoluçao  💌',
                        'body'=>'A devoluçao do valor da sua encomenda acabou de ser efectuada com successo !!',
                        'thank'=> 'PHARMA-PLAT te Agradece  💌',
                      ];

                      $devop2x = [
                        'title'=>'Alerta de confirmaçao de devoluçao  💌',
                        'body'=>'Vimos confirmar que a devoluçao do valor da encomenda do cliente/'.$up_com->firstname.'/CPF:'.$up_com->cpf.'/'.'acabou de ser realizada com successo,....lembrando que essa transaçao gerou uma taxa de devoluçao de->'.$request->devolux.'% - do valor devolvido que sera retirado do seu beneficio mensual.',
                        'thank'=> 'PHARMA-PLAT te Agradece  💌',
                      ];
                

                      $devop3 = [
                        'title'=>'Alerta de confirmaçao de devoluçao  💌',
                        'body'=>' Ola ADIN PHARMA-PLAT, a devoluçao do valor da encomenda do cliente/'.$up_com->firstname.'/CPF:'.$up_com->cpf.'/'.'acabou de ser realizada com successo',
                        'thank'=> 'Obrigado PHARMA-PLAT 💌',
                      ];
                       
                
                
                
                      Mail::to($up_com->email)->send(new TestMail($devop1));
                      Mail::to($request->email)->send(new TestMail($devop2x));
                      Mail::to("luxuluxu229@gmail.com")->send(new TestMail($devop3));

        }
        return response()->json(['status'=>200,'message'=>'Return performed successfully !!']);

  

    }



    public function response_reclo_pharmacie(Request $request,$id){
   
      //dd($rec);
      $respo_phar = [
        'title'=>'Ola'.' '.$request->name_rec.',O ADMIN da PHARMA-PLAT deu retorno à sua reclamaçao  💌',
        'body'=>$request->message,
        'thank'=> 'PHARMA-PLAT te Agradece   💌',
      ];

      $edit_statut = contacto::find($request->id_rec);
      $edit_statut->statut = 3;
      $edit_statut->update();

      $add_resp_adm = new contacto();
      $add_resp_adm->message = $request->message;
      $add_resp_adm->id_pharmacie = $request->id_pharmacie;
      $add_resp_adm->id_adm = session('info_adm')[0]->id;

      if($request->hasFile('photo')){
        $file = $request->file('photo');
          $name = time().'.'.$file->getClientOriginalExtension();
            $file->move('contacto',$name);
            $add_resp_adm->photo = $name;
               
     } 

      $add_resp_adm->save();

      Mail::to($request->email_rec)->send(new TestMail($respo_phar));

    return response()->json(["status"=>200,"message"=>"Response sended successfull !!"]);
    }


   public function all_costumers(Request $request){

    $client = User::all();
     
       $all_cli = [
        'title'=>'Pronto, noticia boa chegou  💌',
        'body'=>' ☺'.$request->message.'☺',
        'thank'=> 'PHARMA-PLAT te Agradece pela Confiança  💌',
        
       ];

       $devopx = [
        'title'=>'Ola ADM Pharma-Plat  💌',
        'body'=>' Vim Confirmar que voce acabou enviar noticia com successo a todos os clientes da pharma-plat',
        'thank'=> 'Obrigado PHARMA-PLAT   💌',
   
   ];
     
        foreach($client as $item){
         Mail::to($item->email)->send(new TestMail($all_cli));

        }

      Mail::to("luxuluxu229@gmail.com")->send(new TestMail($devopx));

       return response()->json(["status"=>200, 'message'=>'message sended successfull']);

   }

   public function send_all_pharmacie(Request $request){

    $pharmacie = pharmacie::all();
     
       $all_phar = [
        'title'=>'Pronto, noticia boa chegou  💌',
        'body'=>' ☺'.$request->message.'☺',
        'thank'=> 'PHARMA-PLAT te Agradece pela Confiança  💌',
        
       ];

       $devopxi = [
        'title'=>'Ola ADM Pharma-Plat  💌',
        'body'=>' Vim Confirmar que voce acabou enviar noticia com successo a todas as pharmacias da pharma-plat ♥♣♠',
        'thank'=> 'Obrigado PHARMA-PLAT 💌',
   
   ];
     
        foreach($pharmacie as $item){
         Mail::to($item->email)->send(new TestMail($all_phar));

        }

      Mail::to("luxuluxu229@gmail.com")->send(new TestMail($devopxi));

       return response()->json(["status"=>200, 'message'=>'message sended successfull']);

   }


     public function like(Request $request){
      if(session('info_user')){

    if(like::where(['id_user'=> session('info_user')[0]->id,'id_pharmacie'=>$request->id_pharmacie])->count() > 0){
      return response()->json(['status'=>300,'message'=>'⭐Thank you for the strength you are giving to our service⭐']);
    }else{
      $like = new like();
      $user_name = session('info_user')[0]->name.'⭐⭐ CPF: '.session('info_user')[0]->cpf;
      $email_phar = pharmacie::find($request->id_pharmacie);
      $like->id_user = session('info_user')[0]->id;
      $like->id_pharmacie = $request->id_pharmacie;
      $like->save();

      
      $count_pharmo_like = like::where('id_pharmacie',$email_phar->id)->count();
      $email_phar->count_like = $count_pharmo_like;
      $email_phar->update();

      //return response()->json(['status'=>200,'message'=>'⭐Thank you for enjoying our service⭐']);
        

      $likon = [
        'title'=>'Pronto, noticia boa chegou 💌',
        'body'=>'Ola, '.$user_name.' acabou de gostar do seu serviço',
        'thank'=> 'PHARMA-PLAT te Agradece pela Confiança 💌',
        
       ];

       $likanx = [
        'title'=>'Ola ADM Pharma-Plat 💌',
        'body'=>' Parece que tem um cliente que acabou de gostar do serviço da farmacia '.$email_phar->email,
        'thank'=> 'Obrigado PHARMA-PLAT  💌',
   
   ];

   Mail::to($email_phar->email)->send(new TestMail($likon));
   Mail::to("luxuluxu229@gmail.com")->send(new TestMail($likanx));

   return response()->json(['status'=>200,'message'=>'⭐Thank you for enjoying our service⭐']);




     
    }


      }else{
        return redirect('formulaire_login/vegazi/nino');
      }

     }


   public function respox_pharma_cli(Request $request){
     if(session('info_boutique')){
        //dd($rec);
        $com_p_cli = [
        'title'=>'Ola '.$request->name_rec.' a Farmacia '.$request->name_pharma.' Email: '.$request->email_rec.' deu retorno à sua preocupaçao ',
        'body'=>$request->message,
        'thank'=> 'PHARMA-PLAT te Agradece  💌',
      ];

      $alert_p_cli = [
        'title'=>'Ola '.$request->name_pharma,
        'body'=>'a sua resposta que voce acabou de dar para o cliente '.$request->name_rec.' foi enviado com success',
        'thank'=> 'PHARMA-PLAT te Agradece  💌',
      ];

      $admo = [
        'title'=>'Ola ADM PHARMA-PLAT,a Farmacia '.$request->name_pharma.' Email: '.$request->email_rec.' acabou de enviar uma mensagem ao cliente  ' .$request->name_rec.' CPF: '.$request->cpf,
        'body'=>'O contido da messagem é: '.$request->message,
        'thank'=> 'PHARMA-PLAT 💌',
      ];

     

      Mail::to($request->email)->send(new TestMail($com_p_cli));
      Mail::to($request->email_rec)->send(new TestMail($alert_p_cli));
      Mail::to("luxuluxu229@gmail.com")->send(new TestMail($admo));

    return response()->json(["status"=>200,"message"=>"Response sended successfull !!"]);
     }else{
    return redirect('formulaire1_login_pharmacie/ekodide/lazaro');
     }

   }

   //securite user

   public function store(Request $request)
   {
     if(User::where('email',$request->email)->count() > 0){
      return response()->json(['status'=>500,'message'=>'Sorry, there is already an account with this Mail that you just informed !! ']);
    }else{
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
        
        $add_user->code_securite = time().'#x~wfk~'.rand(1111,9999);
       
        $add_user->save();
        //dd($add_user);
        if(empty($request->latitude) && empty($request->longitude)){
            return "Please turn on your location and try again!!";
        }else
          if(user::where(['email'=>$request->email,'password'=>$request->password1])->count()>0){
           $info_user =  user::where(['email'=>$request->email,'password'=>$request->password1])->get();
                session(['info_user_auth'=>$info_user ]);
                 
               //charger la table position
               if(session('info_user_auth')){
                $add_position = new position_user();
                $add_position->latitude = $request->latitude;
                $add_position->longitude = $request->longitude;
                $add_position->id_user = session('info_user_auth')[0]->id;
                $add_position->save();

              //send security code

             

              $store_cli = [
               'title'=>'Ola '.$request->name.', o seu codigo de segurança é:' ,
               'body'=> $add_user->code_securite,
               'thank'=> 'PHARMA-PLAT te agradece 💌',
             ];
       
             $adm_cli = [
               'title'=>'Ola ADM PHARMA-PLAT' ,
               'body'=> 'um usuario de Email '.$request->email.', acabou de criar uma conta Cliente com success.',
               'thank'=> 'PHARMA-PLAT 💌',
             ];
            
             
             Mail::to($request->email)->send(new TestMail($store_cli));
             Mail::to("luxuluxu229@gmail.com")->send(new TestMail($adm_cli));

            
                return response()->json(['status'=>200,'message'=>'success']);         

                //dd($add_position);
              }
          
          }

      

    }
    }
       
       
   }


   public function formulaire_securite(){
    if(session('info_user_auth')){
      
      return view('user.store_securite');
    }else{
      return redirect('formulaire_compte/giziva/lobo');
    }
   }

 
     public function add_security(Request $request){
      if(session('info_user_auth')){
        if(User::where(['code_securite'=>$request->code_securite,'id'=>$request->id])->count() > 0){
          $info_user = User::where(['code_securite'=>$request->code_securite,'id'=>$request->id])->get();
          session(['info_user'=>$info_user]);
          $info_ = User::where(['code_securite'=>$request->code_securite,'id'=>$request->id])->first();
          $info_->actif = 1;
          $info_->update();
          return response()->json(['status'=>200,'message'=>'success']);
        }
      }else{
        return redirect('formulaire_compte/giziva/lobo');
      }
     }


 
   public function formulaire_login_securite(){
    return view('user.login_securite');
   }

   
   public function login_user(Request $request){
   $xin = 0;
         if(empty($request->email) || empty($request->password1) || empty($request->latitude) || empty($request->longitude)){
            return response()->json(['status'=>300,'message'=>'Please turn on your location and try again!! if you have already activated your location and the error persists, be sure to check if your data is correct, if not, make sure that all input fields are filled in!! if this continues then probably you had not yet created an account, please create one, thank you !!😇']);

         }else if(user::where(['email'=>$request->email,'password'=>$request->password1])->count()>0){
            $info_user =  user::where(['email'=>$request->email,'password'=>$request->password1])->get();
                 session(['info_user_auth'=>$info_user ]);
                 $info_user_secu =  user::where(['email'=>$request->email,'password'=>$request->password1])->first();
         
              
              if(isset($info_user_secu->code_securite)){
                $info_user_secu->code_securite  = time().'x-yn~vi'.rand(1111,9999);
                $info_user_secu->update();
              }else{
                $info_user_secu->code_securite  = time().'x-on~xy'.rand(1111,9999);
                $info_user_secu->save();
              }


                 //charger la table position
            if(session('info_user_auth')){
                $add_position = new position_user();
                $add_position->latitude = $request->latitude;
                $add_position->longitude = $request->longitude;
                $add_position->id_user = session('info_user_auth')[0]->id;
                $add_position->save();
                


          $name = session('info_user_auth')[0]->name;
                $login_cli = [
                  'title'=>'Ola '.$name.', o seu codigo de segurança é:' ,
                  'body'=> $info_user_secu->code_securite,
                  'thank'=> 'PHARMA-PLAT te agradece 💌',
                ];

                Mail::to($request->email)->send(new TestMail($login_cli));

               
                return response()->json(['status'=>200,'message'=>'success']);         
                
                
              }else{
                return response()->json(['status'=>400,'message'=>'Please turn on your location and try again!! if you have already activated your location and the error persists, be sure to check if your data is correct, if not, make sure that all input fields are filled in!! if this continues then probably you had not yet created an account, please create one, thank you !!😇']);
 }
           }
           return response()->json(['status'=>500,'message'=>'Please turn on your location and try again!! if you have already activated your location and the error persists, be sure to check if your data is correct, if not, make sure that all input fields are filled in!! if this continues then probably you had not yet created an account, please create one, thank you !!😇']);


            
     }


      public function destroy_session_user_pre(){
        session()->forget('info_user_auth');
      }


}
