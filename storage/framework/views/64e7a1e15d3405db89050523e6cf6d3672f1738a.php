<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
              	 <a href="<?php echo e(route('product', [$product->id])); ?>">
                <div class="block-4 text-center border">
                       <figure class="block-4-image">
                         <a href="<?php echo e(route('product', [$product->id])); ?>"><img src="<?php echo e(asset('public/images/'. $product->image)); ?>" alt="Image placeholder" class="img-fluid"></a>
                        </figure>
                    <div class="block-4-text p-4">
                    <h3><a href="<?php echo e(route('product',  [$product->id])); ?>"><?php echo e($product->name); ?></a></h3> <!--<?php echo e($product['name']); ?> -- second type!--> 
                      <p class="text-primary font-weight-bold"><?php echo e($product->price); ?></p>
                    </div>
                </div>

                </a>

              </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/html/laravel-shop/resources/views/shop/brick-standard.blade.php ENDPATH**/ ?>