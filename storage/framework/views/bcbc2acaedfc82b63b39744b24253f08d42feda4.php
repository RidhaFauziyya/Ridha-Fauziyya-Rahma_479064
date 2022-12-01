

<?php $__env->startSection('content'); ?>
<div class="container">
    <br>
    <div class="jumbotron jumbotron-fluid">
        <div class="row">
            <div class="col-md-7">
                <img class="px-5" src="<?php echo e(asset('storage/project/'.$project->imagePath)); ?>" class="rounded" style="height:280px;">
            </div>
            <div class="col-md-5">
                <h1><b><?php echo e($project->namaProject); ?></b></h1>
                <small>Tanggal Upload: <?php echo e($project->created_at); ?></small>
                <br></br>
                <p><?php echo e($project->description); ?></p>
                <a href="/project" class="btn button bg-lightblue">Back</a> 
                <a href="/project/<?php echo e($project->id); ?>/edit" class="btn button bg-lightblue">Edit</a>

                <!-- <form action= "<?php echo e(route('project.destroy', $project->id)); ?>" method="POST"><?php echo method_field('DELETE'); ?>
                <?php echo e(csrf_field()); ?> -->
                    <input type="hidden" name="id" value="<?php echo e($project->id); ?>"> <br></br>
                    <a href="/project/hapus/<?php echo e($project->id); ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Project Ini?');" class="btn btn-danger btn-sm">Delete</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\SEMESTER 3\PPW 2\TUGAS\Ridha-Fauziyya-Rahma_479064\resources\views/project/show.blade.php ENDPATH**/ ?>