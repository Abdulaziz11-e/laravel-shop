<?php $__env->startSection('main'); ?>

<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="<?php echo e(url('/home')); ?>">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
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

               <?php
               //print_r($products);
               ?>

               <?php echo $__env->make('shop.brick-standard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

            </div>
           
        </div>
     </div>
    </div>
 </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script>

$(document).ready(function(){
   //$('.button_search').click(function(){
   $('.icon.icon-search2').click(function(){ 
      //BaseRecord.search($('#search').val());
      BaseRecord.search($('.form-control.border-0').val());
   });
}); 
 


</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-shop/resources/views/shop/index.blade.php ENDPATH**/ ?>