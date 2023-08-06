
      
      @if(! session('info_user'))
                 <script>  
                    window.location.href="{{url('formulaire_login/vegazi/nino')}}";
                </script>
             @endif
      <form class="col-md-12" method="post">
        <div class="site-blocks-table">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="product-thumbnail">Image</th>
                <th class="product-name">Product</th>
                <th class="product-price">Price</th>
                <th class="product-quantity">Quantity</th>
                <th class="product-total">Total</th>
                <th class="product-remove">Remove</th>
              </tr>
            </thead>
            <tbody>
              @foreach($show_cart as $item)
              
              @php
              $total1 = 0;
              if( $item->medico->desconte > 0){
                if($item->aller_retirer == 0){
                  $total1 = $item->medico->prix - ($item->medico->prix * $item->medico->desconte/100);

                  
              }elseif($item->aller_retirer == 1 && $item->medico->desconte >=0 && $item->medico->desconte != NULL){
                $total1 = $item->prix_frete;
               
               }

                        
            
            
            }elseif($item->medico->desconte == 0){
              if($item->aller_retirer == 1){
                $total1 = $item->prix_frete;
                
               }else
              if($item->aller_retirer == 0){
                $total1 = $item->medico->prix;
                
              }
            }
              

             
              @endphp
                   @if($item->medico->stock > 0)
                   
                    
                    <tr class="pai">
                <td class="product-thumbnail">
                  <img src="{{asset('medico/'.$item->medico->photo)}}" alt="Image" class="img-fluid" >
                </td>
                <td class="product-name">
                  <h2 class="h5 text-black">{{$item->medico->nom_pro}}</h2>
                </td>
              
                 <td>${{$total1}}</td>
               
                
                <td>
                  <div class="input-group mb-3" style="max-width: 120px;">
                    <div class="input-group-prepend">
                      <button class="btn btn-outline-primary decre mixt" type="button">&minus;</button>
                    </div>
                     <input type="text" class="form-control text-center quant" value="{{$item->qt}}" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" readonly="">
                    <div class="input-group-append">
                      <button class="btn btn-outline-primary  incre mixt" type="button">&plus;</button>
                    </div>
                  </div>
                    <input type="hidden" value="{{$item->medico->stock}}" class="stoq">
                    <input type="hidden" value="{{$item->medico->pharmacie->id}}" class="stoq">
                </td>
                @if( $item->medico->desconte > 0)
                  @if($item->aller_retirer == 1)
                  <td>${{$item->qt * $item->prix_frete}}</td>
               @elseif($item->aller_retirer == 0)
               <td>${{$item->qt * ($item->medico->prix - ($item->medico->prix * $item->medico->desconte/100))}}</td>
                  @endif
          
                   @endif


                   @if($item->medico->desconte == 0)
                  @if($item->aller_retirer == 1)
                  <td>${{$item->qt * $item->prix_frete}}</td>
               @elseif($item->aller_retirer == 0)
               <td>${{$item->qt * ($item->medico->prix )}}</td>
                  @endif
          
               @endif
               <input type="hidden" value="{{$item->id}}" class="cartx">
                <td><a href="#" class="btn btn-primary height-auto btn-sm" onclick="delete_med_cart({{$item->id}})">X</a></td>
               
              </tr>
                   @endif
              @endforeach
          
            </tbody>
          </table>
          
        </div>
      </form>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="row mb-5">
          <div class="col-md-6 mb-3 mb-md-0">
          @foreach($show_cart as $position => $item)   
          
          
            @if($position == 0)
             
              <a href="{{url('show_medico_pharma/'.$item->pharmacie->id.' '.$item->pharmacie->email)}}"><button class="btn btn-primary btn-md btn-block">XXXX</button></a>
                @endif
      
          @endforeach
        </div> 
          
          @foreach($show_cart as $position => $item)                             
             @if($position == 0)
             <div class="col-md-6">
              <a href="{{url('show_medico_pharma/'.$item->pharmacie->id.' '.$item->pharmacie->email)}}"> <button class="btn btn-outline-primary btn-md btn-block">Continue Shopping</button></a>
            </div>
             @endif
          @endforeach
        </div>
       
        <div class="row">
          <div class="col-md-12">
            <a href="{{url('/show_medico_pharma/12/email')}}" class="text-black h4" for="coupon">Coupon</a>
            <p>Enter your coupon code if you have one.</p>
          </div>
        

          <div class="col-md-8 mb-3 mb-md-0">
            <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
          </div>

         
          <div class="col-md-4">
          
           <a href="{{url('/show_medico_pharma/').'/'.request()->session()->get('idemail')}}" class="btn btn-primary btn-md px-4" for="coupon">Continue Shopping</a>
           
          </div>
         
        </div>
     
      </div>
      <div class="col-md-6 pl-5">
        @php
            $total = 0;
        
        @endphp
        <div class="row justify-content-end">
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-12 text-right border-bottom mb-5">
                <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <span class="text-black">Subtotal</span>
              </div>
              <div class="col-md-6 text-right">
                @foreach($show_cart as $item)
                  @if($item->medico->stock > 0)
                  @php
                   if($item->medico->desconte > 0){
                       if($item->aller_retirer == 1){
                        $total += $item->qt * $item->prix_frete;
                        }elseif($item->aller_retirer == 0)
                          $total += $item->qt * ($item->medico->prix - ($item->medico->prix * $item->medico->desconte/100));
                         }
                       elseif($item->medico->desconte == 0){
                                                        if($item->aller_retirer == 1){
                                                        $total += $item->qt * $item->prix_frete;
                                                    }elseif($item->aller_retirer == 0){
                                                        $total += $item->qt * $item->medico->prix;
                                                    }
                                                
                                                }
                          


                       



                      
                @endphp
                  @endif
                @endforeach
                
                <strong class="text-black">${{$total}}</strong>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-md-6">
                <span class="text-black">Total</span>
              </div>
              <div class="col-md-6 text-right">
                <strong class="text-black">${{$total}}</strong>
              </div>
            </div>

            <div class="row">
              @foreach($show_cart as $position => $item)  
              @if($item->medico->stock > 0)                           
              @if($position == 0)
              <input type="hidden" class="id_pharmacie" value="{{$item->pharmacie->id}}">
              <div class="col-md-12">
                  <a href="{{url('checkout/'.$item->pharmacie->id.''.$item->pharmacie->email)}}"><button class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout.html'">Proceed To
                    Checkout</button></a>
              </div>
              @endif
              @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  function add_card(){
      var formdata = new FormData($("#kixan")[0]);
      $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

      $.ajax({
          type: "post",
          url:"{{url('add_to_card')}}",
          data:formdata,
          processData:false,
          contentType:false,
          success:function(response){
              alert('okkk');
          }

      });
  }
</script>


 <script>
     $(document).ready(function(){
      count_card();
     });
 </script>

<script>
  function count_card(){
        var ego =  $('.id_pharmacie').val();
       // alert(ego)
   
                
          
      $.ajax({
          type:"get",
          url:"{{url('count_card')}}/"+ego,
          success:function(response){
            // console.log(response);
            $(".count_card").html("");
              $(".count_card").html(response); 
          }
      });
  }
</script>

<script>
  function delete_med_cart(id){
   $.get("{{url('delete_med_cart')}}/"+id,{},function(){
    count_card();
    showcart()
   });
  }
</script>

<script>
  
       $(".decre").on("click",function(){
             let decrement = parseInt($(this).closest('.pai').find('.quant').val());
          if(decrement > 1){
                decrement--;
                parseInt($(this).closest('.pai').find('.quant').val( decrement));
             }
        });

            $(".incre").on("click",function(){
                let increment = parseInt($(this).closest('.pai').find('.quant').val());
                var stockinx = $(this).closest('.pai').find(".stoq").val();
                 if(increment < 10 && increment < stockinx){
                 increment++;
                 parseInt($(this).closest('.pai').find('.quant').val(increment));
            }else{
              alert(' Desculpe !! este produto, só temos  ('  +stockinx+   ')  quantidade em estoque no momento');

            }

             if(increment == 10){
              alert('Só você tem a possibilidade de escolher no máximo 10 quantidades por compra.')
             }
                    
           
            });

                                     $(".mixt").on('click',function(){
                                         var qtx = $(this).closest('.pai').find('.quant').val();
                                         var id_cart = $(this).closest('.pai').find('.cartx').val();
                                    
                      $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

                         $.ajax({
                              type:"post",
                              url:"{{url('update_cart')}}",
                              data:{
                                 'qt_new' : qtx,
                                 'id_cart_new' : id_cart,
                              },
                              success:function(response){
                                 //alert('okkk')
                                 count_card();
                                 showcart()
                              }
                         });
                     });



</script>


