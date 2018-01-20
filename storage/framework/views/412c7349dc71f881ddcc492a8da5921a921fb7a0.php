<?php $__env->startSection('content'); ?>
<div class="col-md-10 col-md-offset-1 container">

    <h1 class="text-primary">Create new Veiculo</h1>
    <hr>
    
    <?php echo Form::open(array('route' => 'veiculo.store', 'class' => 'form')); ?>

    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
    
    <div class="form-group">			
        <?php echo Form::text('marca', null, 
        array('required', 
        'class'=>'form-control', 
        'placeholder'=>'Marca')); ?>

    </div>
    
    <div class="form-group">			
        <?php echo Form::text('modelo', null, 
        array('required', 
        'class'=>'form-control', 
        'placeholder'=>'Modelo')); ?>

    </div>
    
    
    <div class="form-group">                
        <select name="cor" class="form-control">
            <option value="">Select</option>            
            <option value="Preto">Preto</option>            
            <option value="Prata">Prata</option>
            <option value="Vermelho">Vermelho</option>
            <option value="Azul">Azul</option>
        </select>
    </div>
    
    
    <div class="form-group">			
        <?php echo Form::text('ano', null, 
        array('required', 
        'class'=>'form-control', 
        'placeholder'=>'Ano')); ?>

    </div>
    
    
    <div class="form-group">			
        <?php echo Form::text('preco', null, 
        array('required', 
        'class'=>'form-control', 
        'placeholder'=>'Preço')); ?>

    </div>
    
    <div class="form-group">			
        <?php echo Form::text('descicao', null, 
        array('required', 
        'class'=>'form-control', 
        'placeholder'=>'Descrição')); ?>

    </div>
    
     <div class="form-group">                
        <select name="tipo" class="form-control">
            <option value="">Select</option>            
            <option value="0">Novo</option>            
            <option value="1">Usado</option>
        </select>
    </div>
    
    <hr>

    <div class="form-group">
        <a href="<?php echo e(route('veiculo.index')); ?>" class="btn btn-warning">Back</a>
        <?php echo Form::submit('Save', 
        array('class'=>'btn btn-primary')); ?>


    </div>


    <?php echo Form::close(); ?>







</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>