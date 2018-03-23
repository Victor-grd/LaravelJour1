<?php $__env->startSection( ' title ' , ' h1 ' ); ?>
<?php $__env->startSection('content'); ?>
<h1>Ajouter Genre</h1>

<div class="form">
    <?php echo Form::open(['url' => '/nouveauGenre']); ?>

   
    <div class="create">
    	<?php echo e(Form::label('genre', 'Genre: ')); ?>

    	<?php echo e(Form::text('genre', 'Genre')); ?>

    </div>

    <div class="create">
    	<?php echo e(Form::submit('Ajouter genre')); ?>

    </div>
       <?php echo Form::close(); ?>

</div>

<table>
    <tr>
        <th>Genre</th>
        <th>Supprimer</th>
    </tr>
    <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($genre['genre']); ?></td>
        <td>
            <?php echo e(Form::open(['url' => '/supprimer'])); ?>

            <?php echo e(Form::hidden('id', '')); ?>

            <?php echo e(Form::submit('X')); ?>

            <?php echo e(Form::close()); ?>

        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>