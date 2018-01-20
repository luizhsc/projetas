<?php $__env->startSection('content'); ?>

<div class="col-md-10 col-md-offset-1 container">
    <h1>Veiculo: <?php echo e($veiculo->modelo); ?></h1>

    <hr>	

    <a href="<?php echo e(route('veiculo.index')); ?>" class="btn btn-warning">Back</a>
    <a href="<?php echo e(route('veiculo.edit', $veiculo->id)); ?>" class="btn btn-primary">Edit</a>

    <div class="pull-right">        
        <?php echo Form::open([
        'method' => 'DELETE',
        'route' => ['veiculo.destroy', $veiculo->id]
        ]); ?>

        <?php echo Form::submit('Delete this Veiculo?', ['class' => 'btn btn-danger']); ?>

        <?php echo Form::close(); ?>        
    </div>    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>