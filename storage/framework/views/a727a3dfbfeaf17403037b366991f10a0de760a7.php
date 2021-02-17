

<?php $__env->startSection('content'); ?>
<div class="cal-md-12 p-3" style="text-align: end;">
    <a class="btn btn-primary f-right" href="<?php echo e(route('discour.create')); ?>"><i class="fas fa-plus"></i> Ajouter</a>
</div>
<div class="cal-md-12 mt-4">
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
                        <a class ="btn btn-danger btn-sm" href="#">Supprimer</a>
                        <a class ="btn btn-info btn-sm" href="#">Modifier</a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Discours\resources\views/discour/index.blade.php ENDPATH**/ ?>