

<?php $__env->startSection('css'); ?>
<style>
    .form-group{
        margin-bottom: 3%;
    }
    .form-control{
        margin-top: 10px;
    }
</style>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="cal-md-12 mt-4">
    <?php if(Session::has('success')): ?>

        <div class="alert alert-success" role="alert" style="margin: 1%; width:100%">

            <?php echo e(Session::get('success')); ?>


        </div>

    <?php endif; ?>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger" role="alert" style="margin: 1%; width:100%">
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              - <?php echo e($error); ?> <br>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      <?php endif; ?>
    <section class="contact-form-section pb-5">
	    <div class="container pb-5">
            <div class="form-wrapper shadow-lg single-col-max-width mx-auto p-5">
                 <form role="form" action="<?php echo e(route('listeUrl.update',$url)); ?>" method="post">
                     <?php echo csrf_field(); ?>
                     <?php echo method_field('PUT'); ?>
                     <h3 class="text-center mb-4">Modifier URL</h3>
                     <div class="row">                                                           
                         <div class="form-group col-md-6">
                             <label class="" for="R_solution">Résolution</label>
                             <input type="text" class="form-control" id="R_solution" name="R_solution" value="<?php echo e($url->R_solution); ?>" minlength="2" required="" aria-required="true">
			                 <input type="hidden" class="form-control" id="id" name="id" value="<?php echo e($url->id); ?>">
                         </div>                    
                         <div class="form-group col-md-6">
                             <label class="" for="Ann_e">Année</label>
                             <input type="text" class="form-control" id="Ann_e" name="Ann_e" value="<?php echo e($url->Ann_e); ?>" minlength="4" required="" aria-required="true">
                         </div>
                         <div class="form-group col-md-6">
                             <label class="" for="URL_Anglais">URL Anglais</label>
                             <input type="text" class="form-control" id="URL_Anglais" name="URL_Anglais" value="<?php echo e($url->URL_Anglais); ?>" minlength="1" required="" aria-required="true">
                         </div>
                         <div class="form-group col-md-6">
                             <label class="" for="URL_Fran_ais">URL Français</label>
                             <input type="text" class="form-control" id="URL_Fran_ais" name="URL_Fran_ais" value="<?php echo e($url->URL_Fran_ais); ?>" minlength="1" required="" aria-required="true">
                         </div>
                         <div class="form-group col-md-6">
                             <label class="" for="URL_Arabe">URL Arabe</label>
                             <input type="text" class="form-control" id="URL_Arabe" name="URL_Arabe" value="<?php echo e($url->URL_Arabe); ?>" minlength="1" required="" aria-required="true">
                         </div>
                         <div class="form-group col-12 text-center">
                             <button type="submit" class="btn btn-block btn-success py-2">Modifier</button>
                             <a href="<?php echo e(route('listeUrl.index')); ?>" class="btn btn-block btn-warning py-2">Annuler</a>
                         </div>
                     </div><!--//form-row-->
                 </form>
            </div>
     </div><!--//container-->
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Discours\resources\views/listeUrl/edit.blade.php ENDPATH**/ ?>