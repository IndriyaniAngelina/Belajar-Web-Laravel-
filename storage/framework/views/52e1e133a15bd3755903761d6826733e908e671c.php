<?php $__env->startSection('title','Data Dosen'); ?>

<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Data Dosen</h1>
            
            <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            <?php $__currentLoopData = $dosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dosen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center"> 
                    <tr>
                    <td><?php echo e($dosen->nama); ?></td>
                    <td>
                    <a href="/dosen/<?php echo e($dosen->id); ?>" class="badge badge-info">Detail</a>
                    </td>
                    </tr>
                </li>
            </ul>
        </tbody>
    </table>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        

            <a href="/dosen/create" class="btn btn-primary my-3">create</a>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
   
<?php echo $__env->make('layout/app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>