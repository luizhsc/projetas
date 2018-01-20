<?php $__env->startSection('content'); ?>

<div class="container">

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Marca</th>                                         
                <th class="text-center">Cor</th>                                         
                <th class="text-center">Ano</th>
                <th class="text-center">Preço</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $veiculo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $veiculo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>			
                <td class="text-center"><?php echo e($veiculo->id); ?></td>
                <td class="text-center"><?php echo e($veiculo->marca); ?></td>
                <td class="text-center"><?php echo e($veiculo->cor); ?></td>
                <td class="text-center"><?php echo e($veiculo->ano); ?></td>
                <td class="text-center"><?php echo e($veiculo->preco); ?></td>
                <td class="text-center">														
                    <a href="<?php echo e(route('veiculo.show', $veiculo->id)); ?>" class="btn btn-info">View Detail</a>
                </td>							
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>