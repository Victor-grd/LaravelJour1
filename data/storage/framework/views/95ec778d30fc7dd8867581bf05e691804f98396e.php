<?php $__env->startSection( ' title ' , ' h1 ' ); ?>
<?php $__env->startSection('content'); ?>
<!-- Code dans le Content de base.blade.php -->
<h1>Musique</h1>
<table>
    <tr>
        <th>Artiste</th>
        <th>Nom</th>
        <th>Genre</th>
        <th>exemplaire</th>
        <th>Supprimer</th>
        <th>Update</th>
    </tr>

    <?php $__currentLoopData = $musiques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $musique): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($musique['artiste']); ?></td>
        <td><?php echo e($musique['nom']); ?></td>
        <td><?php echo e($musique['genre']); ?></td>
        <td><?php echo e($musique['exemplaire']); ?></td>
        <td>
            <?php echo e(Form::open(['url' => '/supprimer'])); ?>

            <?php echo e(Form::hidden('id', $musique['id'])); ?>

            <?php echo e(Form::submit('X')); ?>

            <?php echo e(Form::close()); ?>

        </td>
        <td>
            <?php echo e(Form::open(['url' => '/maj', 'method' => 'post'])); ?>

            <?php echo e(Form::hidden('id', $musique['id'])); ?>

            <?php echo e(Form::submit('Mettre à jour')); ?>

            <?php echo e(Form::close()); ?>

        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>