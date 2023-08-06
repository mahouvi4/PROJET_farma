<?php

namespace App\Http\Controllers;
use App\Models\medico;
use App\Models\pharmacie;
use App\Models\user;
use App\Models\Note;
use App\Models\position_user;
use App\Models\card;
use\App\Models\distance;
use App\Model\like;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class medicocontroller extends Controller
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
        return view('produit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if(session('info_boutique')){
        $add_medico = new medico();
        $add_medico->Reference = $request->reference;
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
            if($request->hasFile('photo')){
                $file = $request->file('photo');
                $name = time().'.'.$file->getClientOriginalExtension();
                $file->move('medico',$name);
                $add_medico->photo = $name;

            }

        $add_medico->save();
        return response()->json(["status"=>200,"message"=>"Your medication has been registered successfully!!😍"]); 
      }else{
        return response()->json(["status"=>300,"message"=>"success"]); 

        
      }  

    }

    public function home_pharmacie(Request $request,$idf=null){
        if(session('info_user')){
            $position_users = position_user::where('id_user',session('info_user')[0]->id)->OrderBy('id','desc')->take(1)->first();
         
        $location = DB::table('pharmacies')
        ->select('name_pharma', 'latitude', 'longitude','photo','address','email','id','statut','on_time','close_time','holiday','count_like','rastrear', 
        DB::raw(sprintf(
            '(6371 * acos(cos(radians(%1$.7f)) * cos(radians(latitude)) * cos(radians(longitude) - radians(%2$.7f)) + sin(radians(%1$.7f)) * sin(radians(latitude)))) AS distance',
            $position_users->latitude,
            $position_users->longitude
        )))->orderBy('distance', 'asc');

        if($idf!=null){
          
            $location=medico::join('pharmacies','medicos.id_pharmacie','=','pharmacies.id')
            ->where('medicos.nom_pro',$idf)
            ->where('medicos.stock','>','0')
            ->where('medicos.statut','=','1')
            ->select('pharmacies.name_pharma', 'pharmacies.statut',
            'pharmacies.latitude', 'pharmacies.longitude','pharmacies.photo','pharmacies.address','pharmacies.email','pharmacies.id','pharmacies.on_time','pharmacies.close_time','pharmacies.holiday', 'pharmacies.count_like','pharmacies.rastrear',
            DB::raw(sprintf(
                '(6371 * acos(cos(radians(%1$.7f)) * cos(radians(pharmacies.latitude)) * cos(radians(pharmacies.longitude) - radians(%2$.7f)) + sin(radians(%1$.7f)) * sin(radians(pharmacies.latitude)))) AS distance',
                $position_users->latitude,
                $position_users->longitude

            )))
          
           // ->having('distance', '<',50)
            ->orderBy('distance', 'asc');
        }
       
    
          $resultat=$location->take(15)->get();
           $commentaire=Note::orderBy('id','DESC')->limit(3)->get();

       




           $h_act =  Carbon::now()->format('H:i:s');
           $h_1 = date('1:0:0');
           $h_acto = strtotime($h_1) + strtotime($h_act);
           $dato = date("H:i:s",$h_acto);
           // dd($dato);
            //$h_1 = date('3:0:0');
           // $h_acto = strtotime($h_act) - $h_acto = strtotime($h_1);

           
          return view('projet_fama.homa',['location'=>$resultat,'data'=>$commentaire,'dato'=>$dato]);
       

    }else{
        return redirect('formulaire_login/vegazi/nino');
    
    }
}

    

    public function filter_product_pharma(Request $request){
    //$filter_produuit_pharma = DB::SELECT("SELECT * FROM pharmacies WHERE id
                                 //IN (SELECT id_pharmacie FROM medicos where nom_pro AND stock LIKE '%'.$name.'%')");
                              
                                    $t=DB::table('medicos')->where('nom_pro','LIKE','%'.$request->name.'%')
                                                ->select('nom_pro')
                                                ->distinct()->get();
                                    return response()->json($t);
                                   
                                   }  
                                                    

                                                                                                          
                                                    
                                                    
                                                   
     /**   accord moi un instantok
     * Display the specified resource.'
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

        
     public function show_medico_pharma(Request $request,$id)
     {   
         if(session('info_user')){
             $pharma = pharmacie::find($id);
             //dd($pharma);
             $commentaire=Note::join('users','users.id','=','notes.id_user')
                                 ->where('notes.id_pharmacie',$id)
                                 ->distinct('notes.id')
                                 ->get(['notes.*','users.*']);
             //dd($commentaire);
             $medico_p = medico::where('id_pharmacie',$id)->first();
             $medico_pharma = medico::where('id_pharmacie',$id)->get();
             
             $request->session()->put('idemail',$id.$pharma->email);
             $request->session()->put('key',$id);
             
             return view('projet_fama.medico_pharma',['medico_pharma'=>$medico_pharma,'pharma'=>$pharma,'commentaire'=> $commentaire]);
             //session(['info_phama'=>$pharma ]);
         }else{
             return redirect('formulaire_login');
 
         }
     }

    public function description_medico($id)
    {   
        if(session('info_user')){
            $pharma_desc = medico::find($id);
           
            $distance = distance::where('id_user',session('info_user')[0]->id)->first();
            //dd($distance);
          
            //$email_pharma = medico::where('id_pharmacie',$pharma_desc->id_pharacie)->first();
          
            return view('projet_fama.description',['pharma_desc'=>$pharma_desc,'distance'=>$distance]);
        }else{
            return redirect('formulaire_login');

        }
    }


    public function inter_pharma($id)
    {   
        if(session('info_user')){
            $pharma = pharmacie::find($id);
            $medico_pharma = medico::where('id_pharmacie',$id)->get();
           
            return view('projet_fama.inter_pharma',['medico_pharma'=>$medico_pharma,'pharma'=>$pharma]);
        }else{
            return redirect('formulaire_login');

        }
    }

    public function add_coment_pharm2(Request $request){
        $add_com2=new Note();
        $add_com2->id_user=$request->id_u;
        $add_com2->id_pharmacie=$request->id_f;
        //dd($add_com2);
        $add_com2->messages=$request->meganx;
        $add_com2->save();
        return response()->json([ 'status'=>200,'message'=>'Your comment has been successfully submitted!!' ]);

       

    }

    public function message(Request $request){
        $message=new Note();
        Note::create(['id_user'=>$request->id_u,'messages'=>$request->comment]);
     
        return back()->with('success','Your comment has been successfully submitted!!');     

    }
   

 // çca marche pas.  verifies ton telephone de
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


    public function buscar(Request $request){
        $mot=$request->data;
        $id_pharmacie=$request->id_pharmacie;
        //dd($id_pharmacie);
        $medicaments=medico::where('nom_pro', 'LIKE','%'.$mot.'%')->distinct('nom_pro')->where('id_pharmacie',$id_pharmacie)->get();
        return response()->json($medicaments);
        
    
    }

    public function frete(Request $request){
       if(session('info_user')){
        $dexo = distance::where('id_user',session('info_user')[0]->id)->where('statut','1')->first();
        if($dexo){
          $dexo->distance = $request->distance;
          $dexo->update(); 
        }else{
            $dix = new distance();
            $dix->distance = $request->distance;
            $dix->id_user = session('info_user')[0]->id;
            //dd($dix->distance);
            $dix->save();
            return response()->json(["status"=>200]);
        }
       }
      
    }



   public function page_acueil(){
    $data = Note::where('statut','1')->orderBy('id','desc')->take(3)->get();
    //dd($data);
     return view('brou_css_importnt',['data'=>$data]);
   }



    
}