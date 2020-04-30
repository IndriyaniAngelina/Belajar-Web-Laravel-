<?php $__env->startSection('title','Detail Dosen'); ?>

<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Detail Dosenr</h1>
            <div class="row no-gutters">
    
  
    <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title"><b><?php echo e($dosen->nik); ?></b></h4>
              <p class="card-text"><?php echo e($dosen->nama); ?></p>
              <p class="card-text"><?php echo e($dosen->alamat); ?></p>
              <p class="card-text"><?php echo e($dosen->matakuliah); ?></p>
              <p class="card-text"><?php echo e($dosen->sks); ?></p>
              <p class="card-text"><?php echo e($dosen->email); ?></p>


              <a href="<?php echo e($dosen->id); ?>/edit" class="btn btn-primary">Edit</a>
              
              <form action="<?php echo e($dosen->id); ?>" method="post" class="d-inline">
              <?php echo method_field('delete'); ?>
              <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              <a href="/dosen" class="card-link">back<<</a>
            </div>
          </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
   
<?php echo $__env->make('layout/app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>