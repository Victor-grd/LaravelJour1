<?php $__env->startSection( ' title ' , ' h1 ' ); ?>
<?php $__env->startSection('content'); ?>
<!-- Code dans le Content de base.blade.php -->

<h1>Ajouter une musique</h1>
<div class="form">
    <?php echo Form::open(['url' => '/nouvelleMusique']); ?>

   
    <div class="create">
    	<?php echo e(Form::label('artiste', 'artiste: ')); ?>

    	<?php echo e(Form::text('artiste', 'Artiste')); ?>

    </div>

    <div class="create">
    	<?php echo e(Form::label('nom', 'nom: ')); ?>

    	<?php echo e(Form::text('nom', 'nom')); ?>

    </div>

    <div class="create">
    	<?php echo e(Form::label('genre', 'genre: ')); ?>

    	<?php echo e(Form::select('genre', [
            'genre'=>['blues'=>'blues', 'country'=>'country', 'disco'=>'disco', 'folk'=>'folk', 'funk'=>'funk', 'jazz'=>'jazz', 'rap'=>'rap', 'reggae'=>'reggae', 'rock'=>'rock', 'salsa'=>'salsa', 'soul'=>'soul', 'techno'=>'techno','autre'=>'autre']
        ])); ?>

    </div>
    
    <div class="create">
    	<?php echo e(Form::label('exemplaire', 'exemplaire: ')); ?>

    	<?php echo e(Form::number('exemplaire', '0')); ?>

    </div>
        <div class="create">
    	<?php echo e(Form::submit('Ajouter nouvelle musique')); ?>

               <div class="create">
       <a class="transition" href="<?php echo e(url('/liste')); ?>">Retour</a>
       </div>
    </div>
       <?php echo Form::close(); ?>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>