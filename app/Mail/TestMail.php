<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;
     public $details;
     public $nom;
     public $adm;
     public $comd_ci;
     public $comd_conf_adm;
     public $reclam_uz;
     public $respo_cli;
     public $devop1;
     public $devop2x;
     public $devop3;
     public $respo_phar;
     public $all_cli;
     public $devopx;
     public $all_phar;
     public $devopxi;
     public $likon;
     public $likanx;
     public $com_p_cli;
     public $alert_p_cli;
     public $admo;
     public $store_cli;
     public $login_cli;
     public $adm_cli;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
        
    }

    public function __constructx( $nom)
    {
        
        $this->nom = $nom;
    }

    public function __constructxx( $adm)
    {
        
        $this->adm = $adm;
    }

    public function __constructxxx( $comd_ci)
    {
        
        $this->comd_ci = $comd_ci;
    }

    public function __constructxxxx( $comd_conf_adm)
    {
        
        $this->comd_conf_adm = $comd_conf_adm;
    }

    public function __constructxxxxx( $reclam_uz)
    {
        
        $this->reclam_uz =  $reclam_uz;
    }

    public function __constructxxxxxx( $respo_cli)
    {
        
        $this->respo_cli =  $respo_cli;
    }

    public function __constructxxxxxxx( $devop1)
    {
        
        $this->devop1 =  $devop1;
    }

    public function __constructxxxxxxxxxxxxxxxx( $devop2x)
    {
        
        $this->devop2x =  $devop2x;
    }

    public function __constructxxxxxxxx( $devop3)
    {
        
        $this->devop3 =  $devop3;
    }

    public function __constructyyyyyyyyyyy( $respo_phar)
    {
        
        $this->respo_phar =  $respo_phar;
    }

    public function __constructyyyyyyyyyyyeco($all_cli)
    {
        
        $this->all_cli =  $all_cli;
    }

    public function __constructyyyyyyyyyyyecoaa($devopx)
    {
        
        $this->devopx =  $devopx;
    }

    
    public function __constructyyyyyyyyyyyecoaalizo($all_phar)
    {
        
        $this->all_phar =  $all_phar;
    }

    
    public function __constructyyyyyyyyyyyecoaa__x($devopxi)
    {
        
        $this->devopxi =  $devopxi;
    }

    public function __constructyyyylikon__x($likon)
    {
        
        $this->likon =  $likon;
    }

    public function __constructyyylikanx($likanx)
    {
        
        $this->likanx =  $likanx;
    }

    public function __resp_phar_cli($com_p_cli)
    {
        
        $this->com_p_cli =  $com_p_cli;
    }

    public function __alert_phar_cli($alert_p_cli)
    {
        
        $this->alert_p_cli =  $alert_p_cli;
    }

    public function __alert_phar_cli_admino($admo)
    {
        
        $this->admo =  $admo;
    }

    public function __alert_store_cli($store_cli)
    {
        
        $this->store_cli =  $store_cli;
    }

    public function __alert_login_cli($login_cli)
    {
        
        $this->login_cli =  $login_cli;
    }

    public function __alert_comf_create_cli($adm_cli)
    {
        
        $this->adm_cli =  $adm_cli;
    }

   
    

    


  

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('PHARMA-PLAT ♠ALERTA DE ENCOMENDA♠')->view('emails.TestMail');
        return $this->subject('PHARMA-PLAT ♠CONFIRMACAO DE ENCOMENDA♠')->view('emails.ConfirmCli');
        return $this->subject('PHARMA-PLAT ♠ALERTA DE ENCOMENDA♠')->view('emails.AlertAdm');
        return $this->subject('PHARMA-PLAT ♠ESTATO DE ENCOMENDA♠')->view('emails.encomenda_saiu');
        return $this->subject('PHARMA-PLAT ♠ESTATO DE ENCOMENDA♠')->view('emails.alerta_encomenda_saiu');
        return $this->subject('PHARMA-PLAT ♠ALERTA DE RECLAMAÇÃO DE CLIENTE♠')->view('emails.reclam_client');
        return $this->subject('PHARMA-PLAT ♠RETORNO DO ADMINISTRADOR A SUA PREOCUPACAO♠')->view('emails.res_reclam_client');
        return $this->subject('PHARMA-PLAT ♠CONFIRMAÇÃO DE DEVOLUÇÃO ♠')->view('emails.devop11');
        return $this->subject('PHARMA-PLAT ♠ALERTA DE DEVOLUÇÃO♠')->view('emails.devop22');
        return $this->subject('PHARMA-PLAT ♠CONFIRMAÇÃO DE DEVOLUÇÃO♠')->view('emails.devop33');
        return $this->subject('PHARMA-PLAT ♠ALERTA DE RESPOSTA DO ADMIN♠')->view('emails.respo_ph');
        return $this->subject('PHARMA-PLAT ♠ALERTA DE NOTICIA BOA♠')->view('emails.all_costuma');
        return $this->subject('PHARMA-PLAT ♠ALERTA DE CONFIRMACAO♠')->view('emails.thank_adm');
        return $this->subject('PHARMA-PLAT ♠ALERTA DE NOTICIA BOA♠')->view('emails.all_pharmato');
        return $this->subject('PHARMA-PLAT ♠ALERTA DE CONFIRMACAO♠')->view('emails.thank_adm_p');
        return $this->subject('PHARMA-PLAT ♠ALERTA DE LIKE♠')->view('emails.like_phar');
        return $this->subject('PHARMA-PLAT ♠ALERTA DE CONFIRMACAO LIKE♠')->view('emails.thank_adm_like');
        return $this->subject('PHARMA-PLAT ♠ALERTA DE RETORNO DA FARMACIA♠')->view('emails.comuniq_p_cli');
        return $this->subject('PHARMA-PLAT ♠ALERTA DE CONFIRMACAO DE ENVIO DE RESPOSTA AO CLIENTE♠')->view('emails.alert_comu_p_cli');
        return $this->subject('PHARMA-PLAT ♠ALERTA DE CONFIRMACAO DE ENVIO DE RESPOSTA DA FARMACIA AO CLIENTE♠')->view('emails.admo_ret');
        return $this->subject('PHARMA-PLAT ♠ALERTA DE CONFIRMACAO DE ENVIO DE CODIGO DE SEGURANÇA♠')->view('emails.stor_cli');
        return $this->subject('PHARMA-PLAT ♠ALERTA DE CONFIRMACAO DE ENVIO DE CODIGO DE SEGURANÇA♠')->view('emails.log_cli');
        return $this->subject('PHARMA-PLAT ♠ALERTA DE CONFIRMACAO DE CRIACAO DE CONTA DE CLIENTE♠')->view('emails.new_cont_cli');


    }
}
