<style>
  body{
    background:black;
  }
  th{
    font-family:aharoni;
  }

  td{
    font-family:aharoni;
  }
  a{
    text-decoration:none;
  }

  .lopix{
    font-family:Matura MT Script Capitals;
  }
</style>
<div id="lonxf">

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <p class="js-logo-clone" style="font-size:2.5rem;text-align:center;color:#ed1697">Pharma-Plat</p>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
            
            </nav>
          </div>
          <div class="icons">
            <a href="cart.html" class="icons-btn d-inline-block bag">
           
              
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none">
          </div>
        </div>
      </div>
    </div>

    <div class="bg-light py-3">
      <div class="container" style="background-color:black">
        <div class="row">
          <div class="col-md-12 mb-0">
            <p class="text-black"style="text-align:center;color:#fff">Beneficio</p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
      @php
      $h_1 = 0;
      $h_acto =  0;
      $soma = 0;
      $dato = 0;
     $created_at = 0;


      
          @endphp
        <div class="row mb-5">
          
        <!--   WORK  -->

              <div style="text-align:center;color:rgb(0, 247, 255)"><strong>{{$pharmox->name_pharma.'-CNPJ:'.$pharmox->cpf}} </strong></div><br><br>
              <div style="text-align:center;color:#fff;font-size:3rem"><strong>D E T A L H E S </strong></div><br>

               <table class="table">
                 <thead >
                      <tr>
                      <th style="text-align:center ;font-family:cambria;color:#ed1697">Total venda</th>
                                <th style="text-align:center ;color:#8fff0f;font-family:cambria">comissão</th>
                                <th style="text-align:center ;color:#fff;font-family:cambria">Motivo</th>
                                <th style="text-align:center ;color:blue;font-family:cambria">Beneficio Pharma_plat</th>
                                <th style="text-align:center ;font-family:cambria;color:rgb(0, 247, 255)"> Beneficio Total Farmácia</th>
                                <th style="text-align:center ;font-family:cambria;color:#fff">Data</th>
                                <th style="text-align:center ;color:#22f2f9">Status</th>
                     </tr>
                 </thead>

                   <tbody>
                   @php
                   $devix = 0;
                    $total=0;
                    $egonzo=0;
                    $total_pere = 0;
                    @endphp  

                                       
                    @foreach($list_sal as $item)
                 
                               <tr>               
                                          <td style="text-align:center;width:100%;color:#ed1697;">${{$item->benefice_pharma}}</td>
                                            <td style="text-align:center;width:100% ;color:#8fff0f">{{$item->comix}}%</td>
                                            @if($item->motiva)
                                            <td style="text-align:center;width:100% ;color:#fff">{{$item->motiva}}</td>
                                                @else
                                                <td style="text-align:center;width:100% ;color:#ed1697;font-size:2rem;font-family:aharoni">X</td>

                                            @endif
                                            <td style="text-align:center;width:100% ;color:blue">${{$item->benefice_plat}}</td> 
                                            <td style="text-align:center;width:100% ;color:rgb(0, 247, 255)">${{$item->benefice_pharma - $item->benefice_plat}}</td>
                                            <td style="text-align:center;color:#fff">{{$item->datax}}</td>  
                                            @if($item->statut == 1)
                                            <td style="text-align:center;color:#22f2f9">Pago</td> 
                                            @else
                                            <td style="text-align:center;color:red">Nao Pago</td>
                                               @endif

                                    
                                               @php
                       if($item->statut == 1){
                        $total += number_format(($item->benefice_pharma - $item->benefice_plat),2,'.','');
                        $total_pere +=$item->benefice_pharma;

                       }else{
                        $total = 0;
                        $total_pere = 0;
                      
                       }
                         
    
                       
                    @endphp
                    

                                </tr>

                                @endforeach
                   </tbody>
      <br><br>
                      <tfoot>
                     
                         <tr>
                           <td style="color:#fff;text-align:center"><strong>LISTA DE TODAS AS DEVOLUÇÕES:</strong></td>
                         </tr>
                                                           
                      @if(isset($list_devolu) && count($list_devolu) > 0)
                                       
                                           
                                    
                                             <!--   devolution    -->
                                             @foreach($list_devolu as $item)
                                              <tr>
                                             @php
                                             $devoxa = 0;
                                             $devoxa += number_format($item->devolution_pharma,"2",".","");
  
                                             @endphp
                                             
                                              
                                             @php
      $h_1 = date('0000-00-00 1:0:0');
      $h_acto =  $item->created_at;
      $soma = strtotime($h_1) + strtotime($h_acto);
      $dato = date("H:i:s",$soma);
     $created_at = Date("d-m-Y",strtotime($h_acto));


      
          @endphp
                                             
                                                 <td style="color:#ff0f5b;text-align:center">{{$created_at}} {{$dato}}</td>
                                                <td style="color:#ff0f5b;text-align:center">{{$item->user->cpf}}</td>
                                                 <td style="color:#ff0f5b;text-align:center">{{$item->code_commande}}</td>
                                                <td style="color:#ff0f5b;text-align:center">{{$item->taxo}}%</td>
                                                   @if($item->statut == 2)
                                                   <td style="color:#ff0f5b;text-align:center">DEVOLUIDO</td>

                                                   @endif
                                                   
                                             
                                          
                                            
                                               </tr>
                                            @endforeach
                                             
                                                  <!--  findevolution     -->

                                   
                                  
                                         @endif


                                         <tr>
                                         
                                        @if(isset($T_calcul_devo))
                                             @foreach($T_calcul_devo as $item)
                                               @php
                                              
                                                $devix += number_format($item->total_devolution_pharma,"2",".","");

                                               @endphp

                                               @endforeach
                                        <td colSpan="6">
                                          
                                           <p style="color:#fff"> <h3 style="color:#ff0f5b;text-align:center"><strong>VALOR TOTAL COM TAXA DE DEVOLUÇÃO: ${{$devix}}</strong></h1></p>
                                          
                                           <p style="color:#fff"> <h3 style="color:#fff;text-align:center"><strong>VENDA TOTAL SEM COMISSÃO: ${{$total_pere}}</strong></h3></p>

                                            <p style="color:#fff"> <h1 style="color:#27eff6;text-align:center"><strong>BENEFICIO TOTAL PAGO: ${{$total}}</strong></h2></p>
                                           </td>
                                          
                                                  
                                           @else

                                           <td colSpan="6">
                                            
                                            <p style="color:#fff"> <h1 style="color:#27eff6;text-align:center">TOTAL PAID: ${{$total}}</h1></p>
                                           </td>
                                           @endif
                                       </tr>

                      </tfoot>
               </table>
         <!--  END WORK  -->
         
        </div>
      </div>
    </div>
    <div class="site-section bg-secondary bg-image" style="background-image: url('{{asset('farm/images/bg_2.jpg')}}');">
      <div class="container">
          <div class="row align-items-stretch">
              <div class="col-lg-6 mb-5 mb-lg-0">
                  <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('{{asset('farm/images/bg_1.jpg')}}');">
                      <div class="banner-1-inner align-self-center">
                          <h2 style="text-align:center;color:#8fff0f">Pharma Produtos</h2>
                          <p style="text-align:center;color:#8fff0f">Saúde é como riqueza, não basta ter, é preciso saber guardar.</p>
                      </div>
                  </a>
              </div>
              <div class="col-lg-6 mb-5 mb-lg-0">
                  <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('{{asset('farm/images/bg_2.jpg')}}');">
                      <div class="banner-1-inner ml-auto  align-self-center">
                          <h2 style="text-align:center">Avaliado por Especialistas</h2>
                          <p style="text-align:center">Saúde é como riqueza, não basta ter, é preciso saber guardar.
                          </p>
                      </div>
                  </a>
              </div>
          </div>
      </div>
  </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4" style="color:#fff;text-align:center">Sobre Nós</h3>
              <p style="color:#fff;text-align:center">Saúde é como riqueza, não basta ter, é preciso saber guardar.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4"style="text-align:center;color:#fff">Links Rápidos</h3>
            <ul class="list-unstyled" style="text-align:center">
              <li><a href="#">Suplementos</a></li>
              <li><a href="#">Vitaminas</a></li>
              <li><a href="#">Dieta &amp; Nutritição</a></li>
              <li><a href="#">Tea &amp; Coffee</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
                <h3 class="footer-heading mb-4" style="color:#fff;text-align:center">Contato Info</h3>
                <ul class="list-unstyled" style="text-align:center">
                    <li class="address" style="color:#fff;text-align:center">Travessa Raiumundo Maciel Pereira 19 , Nossa Senhora de Fatima 62900-000, Russas-Ceara Brasil</li>
                    <li class="phone"><a href="tel:// +55 (85) 996776852">+55 (85) 99677-6852</a></li>
                    <li class="phone"><a href="tel:// +55 (85) 996776852">+55 (84) 99808-7249</a></li>
                    <li class="email"style="color:#fff">manuagondanou229@gmail.com</li>
                </ul>
            </div>

        </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
          
          </div>

        </div>
      </div>
    </footer>
  </div>
  </div>
  <script src="{{asset('farm/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('farm/js/jquery-ui.js')}}"></script>
  <script src="{{asset('farm/js/popper.min.js')}}"></script>
  <script src="{{asset('farm/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('farm/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('farm/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('farm/js/aos.js')}}"></script>
  <script src="{{asset('farm/js/main.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

        <script>
              function delete_pharma(id){
                alert('Are you sure deleted this Pharmacy ??');

                $.get("{{url('admin/delete_pharma')}}/"+id,{}, function(e){
                    window.location.href="{{url('admin/list_phamacie')}}";
                   // e.preventdefault();
                })
              }
          </script>

  
          
          
</body>

</html>
