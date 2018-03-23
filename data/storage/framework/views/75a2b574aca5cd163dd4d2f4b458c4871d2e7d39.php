<?php $__env->startSection( ' title ' , ' h1 ' ); ?>
<?php $__env->startSection('content'); ?>
<h1>Ajouter Genre</h1>

<div class="form">
    <?php echo Form::open(['url' => '/nouveauGenre']); ?>

   
    <div class="create">
    	<?php echo e(Form::label('nameGenre', 'Genre: ')); ?>

    	<?php echo e(Form::text('nameGenre', 'nameGenre')); ?>

    </div>

    <div class="create">
    	<?php echo e(Form::submit('Ajouter genre')); ?>

    </div>

    <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>