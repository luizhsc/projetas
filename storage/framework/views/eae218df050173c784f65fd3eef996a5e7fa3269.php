<?php $__env->startSection('content'); ?>


<div class="col-md-10 col-md-offset-1 container">
    <h1>Edit Vehicle: <?php echo e($veiculo->model); ?> </h1>

    <hr>

    <?php echo Form::model($veiculo, ['method' => 'PUT','route' => ['vehicle.update', $veiculo->id]]); ?>


    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>

    <div class="form-group">
        <?php echo Form::label('brand', 'Marca:', ['class' => 'control-label']); ?>

        <?php echo Form::text('brand', null, ['class' => 'form-control']); ?>

    </div>    

    <div class="form-group">
        <?php echo Form::label('model', 'Modelo:', ['class' => 'control-label']); ?>

        <?php echo Form::textarea('model', null, ['class' => 'form-control']); ?>

    </div>
    
    <div class="form-group">
        <a href="<?php echo e(route('vehicle.index')); ?>" class="btn btn-warning">Back</a>
        <?php echo Form::submit('Update Vehicle    ', ['class' => 'btn btn-primary']); ?>
    </div>
    <?php echo Form::close(); ?>



</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>