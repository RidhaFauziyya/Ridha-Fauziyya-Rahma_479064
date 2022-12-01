

<?php $__env->startSection('content'); ?>
<div class="container">
    <br>
    <div class="jumbotron jumbotron-fluid">
        <div class="row">
            <div class="col-md-7">
                <img class="px-5" src="<?php echo e(asset('storage/about/'.$about->imagePath)); ?>"  style="height: 280px;">
            </div>
            <div class="col-md-5">
                <h1><b><?php echo e($about->namaAktifitas); ?></b></h1>
                <small>Tanggal Upload: <?php echo e($about->created_at); ?></small>
                <br></br>
                <p><?php echo e($about->description); ?></p>
                <a href="/about" class="btn button bg-lightblue">Back</a>
                <?php if(auth()->guard()->check()): ?> 
                <a href="/about/<?php echo e($about->id); ?>/edit" class="btn button bg-lightblue">Edit</a>

                <!-- <form action= "<?php echo e(route('about.destroy', $about->id)); ?>" method="POST"><?php echo method_field('DELETE'); ?>
                <?php echo e(csrf_field()); ?> -->
                <input type="hidden" name="id" value="<?php echo e($about->id); ?>"> <br></br>
                <a href="/about/hapus/<?php echo e($about->id); ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Aktifitas Ini?');" class="btn btn-danger btn-sm">Delete</a>
                <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\SEMESTER 3\PPW 2\TUGAS\Ridha-Fauziyya-Rahma_479064\resources\views/about/show.blade.php ENDPATH**/ ?>