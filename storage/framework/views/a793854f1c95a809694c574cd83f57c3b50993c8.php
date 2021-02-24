

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
                    <form role="form" action="<?php echo e(route('discour.update',$discour)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
				        <h3 class="text-center mb-4">Ajouter Discours</h3>
				        <div class="row">                                                           
			                <div class="form-group col-md-6">
			                    <label class="" for="Occasion">Titre</label>
			                    <input type="text" class="form-control" id="Occasion" name="Occasion" value="<?php echo e($discour->Occasion); ?>" minlength="2" required="" aria-required="true">
			                    <input type="hidden" class="form-control" id="Id_Discours" name="Id_Discours" value="<?php echo e($discour->Id_Discours); ?>">
			                </div>                    
			                <div class="form-group col-md-6">
			                    <label class="" for="Type">Type</label>
                                <select class="form-control" name="Type">
                                    <option value="Discours" <?php if($discour->Type == 'Discours'): ?> selected <?php endif; ?>>Discours</option>
                                    <option value="Allocution" <?php if($discour->Type == 'Allocution'): ?> selected <?php endif; ?>>Allocution</option>
                                    <option value="Message" <?php if($discour->Type == 'Message'): ?> selected <?php endif; ?>>Message</option>
                                    <option value="Ordre du jour" <?php if($discour->Type == 'Ordre du jour'): ?> selected <?php endif; ?>>Ordre du jour</option>
                                    <option value="Lettre" <?php if($discour->Type == 'Lettre'): ?> selected <?php endif; ?>>Lettre</option>
                                  </select>
			                </div>
                            <div class="form-group col-12">
			                    <label class="" for="Date_disc">Date de publication</label>
			                    <input type="date" class="form-control" value="<?php echo e($discour->Date_disc); ?>" id="Date_disc" name="Date_disc" required="" aria-required="true">
			                </div>
			                <div class="form-group col-12">
			                    <label class="" for="Text_fr">Texte en Français</label>
			                    <textarea class="form-control" id="Text_fr" name="Text_fr" rows="10" required="" aria-required="true"><?php echo e($discour->Text_fr); ?></textarea>
			                </div>
                            <div class="form-group col-12">
			                    <label class="" for="Text_ar">Texte en Arabe</label>
			                    <textarea class="form-control" id="Text_ar" name="Text_ar" rows="10" required="" aria-required="true" style=" text-align: right; "><?php echo e($discour->Text_ar); ?></textarea>
			                </div>
                            <div class="form-group col-md-6">
			                    <label class="" for="cnPj_frame">Nom Ficher Fr</label>
			                    <input type="text" class="form-control" id="Pj_fr" value="<?php echo e($discour->Pj_fr); ?>" name="Pj_fr" required="" aria-required="true">
			                </div>                    
			                <div class="form-group col-md-6">
			                    <label class="" for="Pj_ar">Nom Ficher Ar</label>
			                    <input type="text" class="form-control" id="Pj_ar" value="<?php echo e($discour->Pj_ar); ?>" name="Pj_ar" required="" aria-required="true">
			                </div>
                            <div class="form-group col-12 text-center">
			                    <button type="submit" class="btn btn-block btn-success py-2">Modifier</button>
                                <a href="<?php echo e(route('discour.index')); ?>" class="btn btn-block btn-warning py-2">Annuler</a>
			                </div>                    
			            </div><!--//form-row-->
			        </form>
		       </div>
	    </div><!--//container-->
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Discours\resources\views/discour/edit.blade.php ENDPATH**/ ?>