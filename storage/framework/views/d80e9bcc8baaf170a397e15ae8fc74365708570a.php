<?php $__env->startSection('title','Form Data Dosen'); ?>

<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Data Dosen</h1>
            
    <form method="post" action="/dosen">
    <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nik">Nik</label>
            <input type="text" class="form-control" id="nik" placeholder="Masukan nik" name="nik" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukan alamat" name="alamat">
        </div>
        <div class="form-group">
            <label for="matakuliah">Matakuliah</label>
            <input type="text" class="form-control" id="matakuliah" placeholder="Masukan matakuliah" name="matakuliah">
        </div>
        <div class="form-group">
            <label for="sks">Sks</label>
            <input type="text" class="form-control" id="sks" placeholder="Masukan sks" name="sks">
        </div>
        <div class="form-group">
            <label for="handphone">Handphone</label>
            <input type="text" class="form-control" id="handphone" placeholder="Masukan handphone" name="handphone">
        </div>
        <button type="submit" class="btn btn-primary">create</button>
    </form>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
   
<?php echo $__env->make('layout/app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>