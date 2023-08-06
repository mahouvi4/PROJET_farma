
@extends('template')

@section('css')
@endsection
     
@section('content')
      
@if(! session('info_user'))
                 <script>  
                    window.location.href="{{url('formulaire_login/vegazi/nino')}}";
                </script>
             @endif
<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0">
          <a href="{{url('show_medico_pharma/'.request()->session()->get('idemail'))}}">Home</a> <span class="mx-2 mb-0">/</span> 
          <strong class="text-black">Cart</strong>
        </div>
      </div>
    </div>
  </div>
  <input type="hidden" value="{{ request()->session()->get('key') }}" id="id_pharmacie">
  <div class="site-section">
    <div class="container">
      <div class="row mb-5" id="paniers">

      </div>
    </div>
  </div>
  
@section('scripts')

<script>
  function showcart(){
        $.get("{{url('show_card')}}/"+ $("#id_pharmacie").val(),{},function(egox){
            $("#paniers").html(egox);
        });
  }
</script>
     
<script>
  $(function(){
    showcart()
  })
</script>
   
@endsection
@endsection




