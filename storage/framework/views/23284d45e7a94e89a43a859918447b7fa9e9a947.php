<?php $__env->startSection('content'); ?>

<div class="col-md-10 col-md-offset-1 container">
    <h1>Vehicle: <?php echo e($veiculo->model); ?></h1>

    <hr>	

    <a href="<?php echo e(route('vehicle.index')); ?>" class="btn btn-warning">Back</a>
    <a href="<?php echo e(route('vehicle.edit', $veiculo->id)); ?>" class="btn btn-primary">Edit</a>

    <div class="pull-right">        
        <?php echo Form::open([
        'method' => 'DELETE',
        'route' => ['vehicle.destroy', $veiculo->id]
        ]); ?>

        <?php echo Form::submit('Delete this Vehicle?', ['class' => 'btn btn-danger']); ?>

        <?php echo Form::close(); ?>        
    </div>    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>