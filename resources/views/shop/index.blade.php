@extends('shop.layout')

@section('main')

<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{url('/home')}}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
        </div>
      </div>
    </div>

<div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
                <div class="d-flex">


               </div>
              </div>
            </div>
            
            <div class="row mb-5">

               @php
               //print_r($products);
               @endphp

               @include('shop.brick-standard');

            </div>
           
        </div>
     </div>
    </div>
 </div>

@endsection

@section('js')

<script>

$(document).ready(function(){
   //$('.button_search').click(function(){
   $('.icon.icon-search2').click(function(){ 
      //BaseRecord.search($('#search').val());
      BaseRecord.search($('.form-control.border-0').val());
   });
}); 
 


</script>

@endsection