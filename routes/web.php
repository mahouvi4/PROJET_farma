<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pharmaciecontroller;
use App\Http\Controllers\medicocontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\cardcontroller;
use App\Http\Controllers\commandecontroller;
use App\Http\Controllers\MailController;
use App\Http\Controllers\admcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|



*/
//notification email-----
/*Route::get('/', function () {
    Mail::send('mail.treinaweb',['curso'=> 'eloquent'],function($m){
            $m->from('cineyoutub229@gmail.com','Elton');
            $m->to('Elon.relaxmusik229@gmail.com');
    });
});*/
/*Route::get('/', function () {
    return view('projet_fama.log');
});*/

/*Route::get('home_pharmacie', function () {
    return view('projet_fama.home');
});*/

/*Route::get('/', function () {
    return view('template');
});*/

Route::get('home_new', function () {
    return view('projet_fama.homa');
});

Route::get('/',[medicocontroller::class,'home_pharmacie'])->name('row');
Route::get('/{idf}',[medicocontroller::class,'home_pharmacie']);
//PHARMACIE
Route::get('formulaire_pharmacie/cadas/far',[pharmaciecontroller::class,'create']);
Route::post('store_pharmacie',[pharmaciecontroller::class,'store']);
Route::get('formulaire1_login_pharmacie/ekodide/lazaro',[pharmaciecontroller::class,'formulaire1_login_pharmacie']);
Route::post('login1_control',[pharmaciecontroller::class,'login1_control']);
Route::get('destroy_session_pharmacie/eco/polis',[pharmaciecontroller::class,'destroy_session_pharmacie']);

//MEDICAMENT
Route::get('formulaire_medico/tchizo/dagazi',[medicocontroller::class,'create']);
Route::post('add_medicament',[medicocontroller::class,'store']);

//TEMPLATE_PROJET

Route::get('show_medico_pharma/{id}',[medicocontroller::class,'show_medico_pharma']);
//Route::get('inter')
Route::get('description_medico/{id}',[medicocontroller::class,'description_medico']);
Route::post('add_to_card',[cardcontroller::class,'add_to_card']);
Route::get('count_card/{id}',[cardcontroller::class,'count_card']);
Route::get('show_card/{id}',[cardcontroller::class,'show_card'])->name('show_card');

Route::get('card_final/finalisa/home', function () {
    return view('projet_fama.card1');
});

//commande
Route::post('add_commande',[commandecontroller::class,'store']);
Route::get('show_command_uniq/{id}',[commandecontroller::class,'show_command_uniq']);

Route::post('update_cart',[cardcontroller::class,'update_cart']);
Route::get('delete_med_cart/{id}',[cardcontroller::class,'delete_med_cart']);
Route::get('checkout/{id}',[cardcontroller::class,'checkout']);

//Route::get('filter',[medicocontroller::class,'filter_product_pharma'])
Route::post('filter',[medicocontroller::class,'filter_product_pharma'])->name('filter');



//USER
Route::get('formulaire_compte/giziva/lobo',[usercontroller::class,'create']);
//Route::post('create_compte',[usercontroller::class,'store']);
Route::post('create_compte',[MailController::class,'store']);
Route::get('user/formulaire_securite',[MailController::class,'formulaire_securite']);
Route::get('user/add_security',[MailController::class,'add_security']);
Route::get('user/formulaire_login_securite',[MailController::class,'formulaire_login_securite']);
Route::get('user/destroy_session_user_pre',[MailController::class,'destroy_session_user_pre']);
Route::get('formulaire_login/vegazi/nino',[usercontroller::class,'formulaire_login']);
//Route::post('login_control',[usercontroller::class,'login_user']);
Route::post('login_control',[MailController::class,'login_user']);
Route::get('destroy_session_user/egozi/cica',[usercontroller::class,'destroy_session_user']);
Route::get('user/show',[usercontroller::class,'show']);
Route::post('user/edit_pass',[usercontroller::class,'edit_pass']);
Route::get('user/reclam_user/{id}',[pharmaciecontroller::class,'reclam_user']);
Route::post('user/reclama_cliente',[MailController::class,'reclama_cliente']);


//simulaçao
Route::get('pagar/{id}',[commandecontroller::class,'formulaire_credito']);
//Route::post('pagar_success',[commandecontroller::class,'add_pagar'])->name('pagar_success'); sendEmail
Route::post('pagar_success',[MailController::class,'sendEmail'])->name('pagar_success'); 


//commentaire

Route::post('add_coment_pharm2',[medicocontroller::class,'message'])->name('add_coment');

Route::post('add_coment_pharm1',[medicocontroller::class,'add_coment_pharm2'])->name('add_coment2');
Route::post('buscar_remedio',[medicocontroller::class,'buscar'])->name('buscar_remedio');

//message pagamento

Route::get('merci_fin/aziz/folade/eko',[commandecontroller::class,'merci_fin']);
Route::get('ma_commande/oljsg/{id}',[commandecontroller::class,'ma_commande']);
Route::get('alization/pagamento/{id}',[commandecontroller::class,'list_pagment_phar']);
Route::get('salaire_pharmacie/ogoxi',[commandecontroller::class,'salaire_pharmacie']);

//ADMIN
Route::get('admin/list_phamacie',[pharmaciecontroller::class,'show']);
Route::get('admin/edit_pharma/{id}',[pharmaciecontroller::class,'edit']);
Route::post('admin/update_pharma/{id}',[pharmaciecontroller::class,'update']);
Route::get('admin/delete_pharma/{id}',[pharmaciecontroller::class,'destroy']);
Route::get('admin/create_login2_pharma/{id}',[pharmaciecontroller::class,'formulaire2_login_pharmacie']);
Route::get('admin/create_login3_pharma/{id}',[pharmaciecontroller::class,'formulaire3_login_pharmacie']);

Route::post('admin/formulaire1_login2_ph/{id}',[pharmaciecontroller::class,'logax']);
Route::post('admin/formulaire1_login3_ph/{id}',[pharmaciecontroller::class,'logux']);


Route::get('admin/option_pharma/{id}',[pharmaciecontroller::class,'opition_pharma']);
Route::get('admin/opition_pharma_salaire/{id}',[pharmaciecontroller::class,'opition_pharma_salaire']);
Route::get('admin/list_medic_phar_admin/{id}',[pharmaciecontroller::class,'list_medic_phar_admin']);
Route::get('admin/create_admin_med/{id}',[pharmaciecontroller::class,'create_admin_med']);
Route::post('admin/upd_medic_admin/{id}',[pharmaciecontroller::class,'upd_medic_admin']);
Route::get('admin/delet_med_admin/{id}',[pharmaciecontroller::class,'delet_med_admin']);
Route::get('admin/list_client_bout_admin/{id}',[pharmaciecontroller::class,'list_client_bout_admin']);
Route::get('admin/list_com_cli_bout_adm/{id}',[pharmaciecontroller::class,'list_com_bout_adm']);
Route::get('admin/comission_pharma_payment',[pharmaciecontroller::class,'comix']);
Route::get('admin/fixo_number',[pharmaciecontroller::class,'fixo_number']);
Route::post('admin/updat_fixo_number',[pharmaciecontroller::class,'updat_fixo_number']);
Route::get('admin/updat_comission',[pharmaciecontroller::class,'updat_comission']);
Route::get('admin/list_all_custumer_admin',[pharmaciecontroller::class,'list_all_custumer_admin']);
Route::get('admin/edit_user_admin/{id}',[pharmaciecontroller::class,'edit_user_admin']);
Route::post('admin/update_custumer/{id}',[pharmaciecontroller::class,'update_custumer']);
Route::get('admin/crt_mood/{id}',[pharmaciecontroller::class,'crt_mood']);
Route::get('admin/apply/{id}',[pharmaciecontroller::class,'apply_yy']);
Route::get('admin/detail_com_bout_adm/{id}/{id_phamacie}',[pharmaciecontroller::class,'detail_com_bout_adm']);
Route::get('admin/edit_status_commande/{id}',[pharmaciecontroller::class,'edit_status_commande']);
Route::post('admin/upd_stat_com/{id}',[MailController::class,'upd_stat_com']);
Route::get('admin/create_reclam/{id}',[pharmaciecontroller::class,'create_reclam']);
Route::post('admin/reclamation',[pharmaciecontroller::class,'add_reclamation']);

Route::get('admin/red_reclamation',[pharmaciecontroller::class,'red_reclamation']);
Route::get('admin/update_stat_reclam/{id}',[pharmaciecontroller::class,'update_stat_reclam']);
Route::get('admin/delete_reclam/{id}',[pharmaciecontroller::class,"delete_reclam"]);
Route::get('admin/list_comentaire',[pharmaciecontroller::class,'list_comentaire']);
Route::get('admin/comment/{id}',[pharmaciecontroller::class,'comment_update']);
Route::get('admin/delete_coment/{id}',[pharmaciecontroller::class,"delete_coment"]);
Route::get('admin/meil',[pharmaciecontroller::class,'meilx']);
Route::get('admin/list_medico',[pharmaciecontroller::class,'list_medico']);

Route::get('admin/edit_all_medic/{id}',[pharmaciecontroller::class,'edit_all_medic']);
Route::post('admin/upd_medic_all_admin/{id}',[pharmaciecontroller::class,'upd_medic_all_admin']);
Route::get('admin/list_commande_all',[pharmaciecontroller::class,'list_commande_all']);
Route::get('admin/liste_salary_all',[pharmaciecontroller::class,'liste_salary_all']);
Route::get('admin/delet_med_all/{id}',[pharmaciecontroller::class,'delet_med_all']);
Route::get('admin/list_salaire/{id}',[pharmaciecontroller::class,'list_salaire']);   
Route::get('admin/PDF_salaire/{id}',[pharmaciecontroller::class,'PDF_salaire']);
Route::get('admin/PDF_salaire2/{id}',[pharmaciecontroller::class,'PDF_salaire2']);

//Route::get('admin/detail_cli_com',[pharmaciecontroller::class,'detail_cli_com']);
Route::get('admin/detail_cli_com/{id}',[pharmaciecontroller::class,'detail_cli_com']);

Route::get('admin/lista_pagamento_client/{id}',[pharmaciecontroller::class,'lista_pagamento_client']);
Route::get('admin/delete_pagment/{id}',[pharmaciecontroller::class,'delete_pagment']);
Route::get('admin/delete_salaire_phar/{id}',[pharmaciecontroller::class,'delete_salaire_phar']);
Route::get('admin/order_unpaid/{id}',[pharmaciecontroller::class,'order_unpaid']);
Route::get('admin/delete_commande_unpaid/{id}',[pharmaciecontroller::class,'delete_commande_unpaid']);
Route::get('admin/restore_chambre',[pharmaciecontroller::class,'restore_chambre']);
//Route::get('add_tex/tex',[pharmaciecontroller::class,'tex']);
//Route::post('add_emil/admn',[pharmaciecontroller::class,'storno'])->name('add_emil/admn');
Route::get('admin/list_all_order',[pharmaciecontroller::class,'list_all_order']);
Route::get('admin/search',[pharmaciecontroller::class,'search']);
Route::get('admin/list_reclam_client',[pharmaciecontroller::class,'list_reclam_client']);
Route::get('admin/response_cli/{id}',[pharmaciecontroller::class,'response_cli']);
Route::get('admin/response_reclo_cli/{id}',[MailController::class,'response_reclo_cli']);
Route::get('admin/recherche_comm',[pharmaciecontroller::class,'recherche_comm']);
Route::get('admin/formulaire_devolution/{id}',[pharmaciecontroller::class,'formulaire_devolution']);
Route::post('admin/devolution/{id}',[MailController::class,'devolution']);
Route::get('admin/responx_pharma/{id}',[pharmaciecontroller::class,'responx_pharma']);
Route::post('admin/response_reclo_pharmacie/{id}',[MailController::class,'response_reclo_pharmacie']);
Route::get('admin/contact_all_client',[pharmaciecontroller::class,'contact_all_client']);
Route::post('admin/all_costumers',[MailController::class,'all_costumers']);
Route::get('admin/contact_all_pharmacie',[pharmaciecontroller::class,'contact_all_pharmacie']);
Route::post('admin/send_all_pharmacie',[MailController::class,'send_all_pharmacie']);
Route::get('admin/formulaire_comuniq_pharma_client/{email}',[pharmaciecontroller::class,'inter_pharma_client']);
Route::get('admin/respox_pharma_cli',[MailController::class,'respox_pharma_cli']);
Route::get('admin/apagar_commande/{id}',[pharmaciecontroller::class,'apagar_commande']);

//ADMIN

Route::get('administrateur/create',[admcontroller::class,'create']);
Route::post('administrateur/store',[admcontroller::class,'store']);
Route::get('administrateur/create_login_admin',[admcontroller::class,'create_login_admin']);
Route::post('administrateur/login_adm',[admcontroller::class,'login_adm']);
Route::get('administrateur/destroy_session_adm',[admcontroller::class,'destroy_session_adm']);
  
 //FRETE

Route::post('pharmacie/frete',[medicocontroller::class,'frete']);

//LIKES
Route::get('user/like',[MailController::class,'like']);


//text
Route::get('admin/dublon_chat',[pharmaciecontroller::class,'dublon_chatx']);

//page d'acueille. . . 
Route::get('page/page_acueil',[medicocontroller::class,'page_acueil']);
