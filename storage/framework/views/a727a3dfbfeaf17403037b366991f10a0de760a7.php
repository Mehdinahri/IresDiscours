

<?php $__env->startSection('content'); ?>
<div class="cal-md-12 p-3" style="text-align: end;">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Accueil</a></li>
          <li class="breadcrumb-item active" aria-current="page">Discours</li>
        </ol>
      </nav>
    <div class="row">
        <div class="col-md-4 col-sm-6 col-12 info-box">
          <span class="info-box-icon text-light bg-primary"><i class="fas fa-scroll"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Discours</span>
            <span class="info-box-number"><?php echo e(count($discours)); ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="col-md-4 col-sm-6 col-12">
        </div>
        <div class="col-md-4 col-sm-6 col-12 text-right">
            <a class="btn btn-primary f-right" href="<?php echo e(route('discour.create')); ?>"><i class="fas fa-plus"></i> Ajouter</a>
        </div>
    </div>    
</div>
<?php if(Session::has('success')): ?>

        <div class="alert alert-success" role="alert" style="margin: 1%; width:100%">

            <?php echo e(Session::get('success')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>

    <?php endif; ?>
<div class="cal-md-12 mt-4" style=" border: 1px solid #f2dbdf; padding: 1%; border-radius: 6px; ">
    
    <table id="example" class="table table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>Type</th>
                <th>Titre</th>
                <th>Date de publication</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $discours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($discour->Id_Discours); ?> </td>
                    <td><?php echo e($discour->Type); ?></td>
                    <td><?php echo e(substr($discour->Occasion, 0, 50)); ?>...</td>
                    <td><?php echo e($discour->Date_disc); ?></td>
                    <td>
                        <form role="form" action="<?php echo e(url("/discour/$discour->Id_Discours")); ?>" method="post" id='form<?php echo e($discour->Id_Discours); ?>'>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field("DELETE"); ?>
                            <a class="btn btn-danger btn-sm text-light" onclick="deleteConfirmation(<?php echo e($discour->Id_Discours); ?>)"><i class="fas fa-trash-alt"></i> Supprimer</a>
                            <a class ="btn btn-info btn-sm text-light" href="<?php echo e(route('discour.edit',$discour)); ?>"><i class="fas fa-edit"></i> Modifier</a>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
            <tr>
                <th>id</th>
                <th>Type</th>
                <th>Titre</th>
                <th>Date de publication</th>
            </tr>
        </tfoot>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

<script type="text/javascript">

    function deleteConfirmation(pack) {
        swal({
            title: "Suppression?",
            text: "Veuillez vous assurer et ensuite confirmer!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Oui, Supprimez-le!",
            cancelButtonText: "Non, Annuler!",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                $('#form'+pack).submit();
            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script>
<script>
$(document).ready(function(){
    $(".nav-link").removeClass("active");
    $("#Discours").addClass("active");
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Discours\resources\views/discour/index.blade.php ENDPATH**/ ?>