<?php $__env->startSection('content'); ?>


<div class="col-md-10 col-md-offset-1 container">
    <h1>Edit Veiculo: <?php echo e($veiculo->modelo); ?> </h1>

    <hr>

    <?php echo Form::model($veiculo, ['method' => 'PUT','route' => ['veiculo.update', $veiculo->id]]); ?>


    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>

    <div class="form-group">
        <?php echo Form::label('marca', 'Marca:', ['class' => 'control-label']); ?>

        <?php echo Form::text('marca', null, ['class' => 'form-control']); ?>

    </div>    

    <div class="form-group">
        <?php echo Form::label('modelo', 'Modelo:', ['class' => 'control-label']); ?>

        <?php echo Form::textarea('modelo', null, ['class' => 'form-control']); ?>

    </div>
    
    <div class="form-group">
        <a href="<?php echo e(route('veiculo.index')); ?>" class="btn btn-warning">Back</a>
        <?php echo Form::submit('Update Veiculo    ', ['class' => 'btn btn-primary']); ?>    
    </div>
    <?php echo Form::close(); ?>



</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>