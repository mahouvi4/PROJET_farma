<?php

namespace App\Http\Controllers;
use App\Models\card;
use App\Models\medico;
use App\Models\user;
use App\Models\distance;
use Illuminate\Http\Request;

class cardcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function card_final($name="toto")
    {
        return view('projet_fama.card1');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add_to_card(Request $request)
    {
          if(session('info_user')){




            if(card::where('id_medico', $request->id_medico)->where('id_user',session('info_user')[0]->id)->where('id_pharmacie',$request->id_pharmacie)->count() > 0){
                   
                        $data=card::where('id_medico', $request->id_medico)
                        ->where('id_user',session('info_user')[0]->id)
                        ->where('id_pharmacie',$request->id_pharmacie)->first();
                        if($data->qt < $data->medico->stock && $data->qt < 10){
                            ++$data->qt;
                            
                         }

                         if($request->aller_retirer == TRUE){
                            $data->aller_retirer = 1;
                         }else{
                            $data->aller_retirer = 0;
                         }                         
                        $data->update();
                       
                        return response()->json(['status'=>300,'message'=>'The product you were addicted to already exists in the card!! 😍']);
                      }else{
                        $add_to_card = new card();
                        
                        $add_to_card->id_user = session('info_user')[0]->id;
                        $add_to_card->id_medico = $request->id_medico;
                        $add_to_card->id_pharmacie = $request->id_pharmacie;
                        $add_to_card->prix_frete = $request->prix_frete;
                         if($request->aller_retirer == TRUE){
                            $add_to_card->aller_retirer = 1;
                         }else{
                            $add_to_card->aller_retirer = 0;
                         }
                        $add_to_card->qt = 1;
                        
                        $add_to_card->save();
                        return response()->json(['status'=>200,'message'=>'Congratulations!!, you have successfully added a product to your basket! ! 😍']);

                        
                        
                      }
           

            
          }else{
            return redirect('formulaire_login');
          }
    }

     public function count_card($id){
       if(session('info_user')){
        $user = session('info_user')[0]->id;
        $count_card = card::where(['id_pharmacie'=>$id,'id_user'=>$user])->count();
       
        return response()->json($count_card);
       }
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_card(Request $request,$id)
    {
        if(session('info_user')){
            $user = session('info_user')[0]->id;

        


            $show_cart = card::where(['id_pharmacie'=>$id,'id_user'=>$user])->get();

            foreach($show_cart as $item){
                $atu = medico::find($item->stock);
               // $xxxxx = card::where('id')->get();

              //dd($atu);
                
             /* if($atu == 0){
                
               // $cardo = card::where($atu)->where('id_pharmacie',$id)->get();
               // dd($cardo);
                
               
              
            }*/
            }

            return view('projet_fama.card2',['show_cart'=>$show_cart]);
        }else{
            return redirect('formulaire_login');
        }
    }

     
    public function update_cart(Request $request){
       if(session('info_user')){
        $update_cart = card::find($request->id_cart_new);
        $update_cart->qt = $request->qt_new;
        $update_cart->update();
        return response()->json();
       }else{
        return redirect('formulaire_login');
       }

    }

    public function delete_med_cart($id){
        $delete_medico_card = card::find($id)->delete();
        

    }

    public function checkout($id){
        if(session('info_user')){
            $user = session('info_user')[0]->id;
            $show_checkout = card::where(['id_pharmacie'=>$id,'id_user'=>$user])->get();
            $distance = distance::where('id_user',session('info_user')[0]->id)->first();
            //dd($distance);
            return view('projet_fama.checkout',['show_checkout'=>$show_checkout,'distance'=>$distance]);
        }else{
            return redirect('formulaire_login');
        }
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

    /*public function carreg_pro(){
        $how_pro = medico::all();
        return view('rico',['how_pro'=>$how_pro]);
    }*/
}
