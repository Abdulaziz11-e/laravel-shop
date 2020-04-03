                <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="<?php echo e(asset('public/images/' . $cart->image)); ?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo e($cart->name); ?></h2>
                    </td>
                    <td><?php echo e($cart->price); ?></td>
                    
                    <td>1</td>
                    <td><a href="#" class="btn btn-primary btn-sm listbuttonremove" id="<?php echo e($cart->id); ?>">X</a></td>
                  </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/html/laravel-shop/resources/views/shop/cart-standard.blade.php ENDPATH**/ ?>