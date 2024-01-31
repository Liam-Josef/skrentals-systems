<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home-nh-master','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home-nh-master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>


    <?php $__env->startSection('content'); ?>

               <form action="<?php echo e(route('rental.store')); ?>" method="post" enctype="multipart/form-data">
                   <?php echo method_field('POST'); ?>
                   <?php echo csrf_field(); ?>


                       <input type="text" class="form-control" name="booking_id" id="booking_id">








                   <input type="text" class="form-control" name="email" id="email">
                       <input type="text" class="form-control" name="first_name" id="first_name">
                       <input type="text" class="form-control" name="last_name" id="last_name">
                       <input type="text" class="form-control" name="zip_code" id="zip_code">
                   <input type="text" class="form-control" name="activity_item" id="activity_item" value="sometrhing">
                   <input type="text" class="form-control" name="ticket_list" id="ticket_list" value="something">
                       <input type="text" class="form-control" name="payment_status" id="payment_status" value="Paid">
                       <input type="text" class="form-control" name="phone" id="phone" value="502-333-4533">
                       <input type="text" class="form-control" name="source" id="source" value="Widget">
                   <input type="text" class="hidden" name="activity_date" id="activity_date" value="2023-04-26 18:0:0">
                   <input type="text" class="hidden" name="purchase_date" id="purchase_date" value="2023-04-24 18:0:0">
                   <input type="text" class="hidden" name="purchase_type" id="purchase_type" value="Peek">
                   <input type="text" class="hidden" name="payment_type" id="payment_type" value="Peek">
                   <input type="text" class="hidden" name="list_price" id="list_price" value="$0.00">
                   <input type="text" class="hidden" name="total_discount_amount" id="total_discount_amount" value="$0.00">
                   <input type="text" class="hidden" name="customer_fees" id="customer_fees" value="$0.00">
                   <input type="text" class="hidden" name="total_charge" id="total_charge" value="$0.00">
                   <input type="submit" value="Submit"/>
               </form>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('sidebar-post'); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('scripts'); ?>

    <?php $__env->stopSection(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/home/zap-this-shiznit-beotch.blade.php ENDPATH**/ ?>