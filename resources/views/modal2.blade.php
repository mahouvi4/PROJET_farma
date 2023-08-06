<?php

namespace App\Http\Controllers;
use App\Models\medico;
use App\Models\pharmacie;
use App\Models\user;
use App\Models\position_user;
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
        $add_medico->reference = $request->reference;
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
      }  

    }

    public function home_pharmacie($name=null){
        if(session('info_user')){
            $position_users = position_user::where('id_user',session('info_user')[0]->id)->OrderBy('id','desc')->take(1)->first();
         
        $location = DB::table('pharmacies')
        ->select('name_pharma', 'latitude', 'longitude','photo','address','email','id', 
        DB::raw(sprintf(
            '(6371 * acos(cos(radians(%1$.7f)) * cos(radians(latitude)) * cos(radians(longitude) - radians(%2$.7f)) + sin(radians(%1$.7f)) * sin(radians(latitude)))) AS distance',
            $position_users->latitude,
            $position_users->longitude
        )))
       
        ->orderBy('distance', 'asc');
        if($name!=""){
            $location=medico::join('pharmacies','medicos.id_pharmacie','=','pharmacies.id')
            ->where('medicos.nom_pro',$name)
            ->where('medicos.stock','>','0')
            ->select('pharmacies.name_pharma', 
            'pharmacies.latitude', 'pharmacies.longitude','pharmacies.photo','pharmacies.address','pharmacies.email','pharmacies.id', 
            DB::raw(sprintf(
                '(6371 * acos(cos(radians(%1$.7f)) * cos(radians(pharmacies.latitude)) * cos(radians(pharmacies.longitude) - radians(%2$.7f)) + sin(radians(%1$.7f)) * sin(radians(pharmacies.latitude)))) AS distance',
                $position_users->latitude,
                $position_users->longitude

            )))
           // ->having('distance', '<',50)
            ->orderBy('distance', 'asc');
          

        }
      

        $resultat=$location->get();
        
   
          return view('projet_fama.homa',['location'=>$resultat]);
       

    }else{
        return redirect('formulaire_login');
    
    }
}

    

    public function filter_product_pharma(Request $request){
    //$filter_produuit_pharma = DB::SELECT("SELECT * FROM pharmacies WHERE id
                                 //IN (SELECT id_pharmacie FROM medicos where nom_pro AND stock LIKE '%'.$name.'%')");
                              
                                    $t=medico::where('nom_pro','LIKE','%'.$request->name.'%')->get();
                                    $sortir="";
                                    $sortir='<ul class="list-group ul" style="display:block;position:relative;">';
                                   
                                                     foreach($t as $row){
                                                      $sortir.="<li class='list-group-item i'><a href='/$row->nom_pro'>$row->nom_pro</a></li>";
                                                     }
                                                     $sortir.='</ul>';
                                                    echo $sortir;

                                                    }  
                                                    

                                                                                                               
                                                    
                                                    
                                                   
     /**   accord moi un instantok
     * Display the specified resource.'
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

        
    public function show_medico_pharma($id,Request $request)
    {   
        if(session('info_user')){
            $pharma = pharmacie::find($id);
            //dd($pharma);
            $medico_pharma = medico::where('id_pharmacie',$id)->get();
            $request->session()->put('key',$pharma->id);
            return view('projet_fama.medico_pharma',['medico_pharma'=>$medico_pharma,'pharma'=>$pharma]);
            //session(['info_phama'=>$pharma ]);
        }else{
            return redirect('formulaire_login');

        }
    }

    public function description_medico($id)
    {   
        if(session('info_user')){
            $pharma_desc = medico::find($id);
          
            //$email_pharma = medico::where('id_pharmacie',$pharma_desc->id_pharacie)->first();
          
            return view('projet_fama.description',['pharma_desc'=>$pharma_desc]);
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
}
