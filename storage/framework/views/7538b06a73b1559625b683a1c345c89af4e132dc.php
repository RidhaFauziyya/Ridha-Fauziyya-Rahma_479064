

<?php $__env->startSection('content'); ?>
<div class="container">
    <br>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success alert-block">
            <strong><?php echo e($message); ?></strong>
        </div>
    <?php endif; ?>
    <?php if($message = Session::get('berhasil')): ?>
        <div class="alert alert-success alert-block">
            <strong><?php echo e($message); ?></strong>
        </div>
    <?php endif; ?>
    <?php if($message = Session::get('update')): ?>
        <div class="alert alert-success alert-block">
            <strong><?php echo e($message); ?></strong>
        </div>
    <?php endif; ?>
    <div class="jumbotron jumbotron-fluid bg-white">
        <h1 class="display-4 text-center font-weight-bolder text-dark"><b>Project</b></h1>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <div class="row">
            <div class="col-md-5">
                <img class="px-5" src="https://www.publichealthnotes.com/wp-content/uploads/2020/03/project-planning-header@2x.png" class="rounded" widht= "400px" height="200px">
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-5">
                <p class="lead">This web page contains projects and works that I have or are currently working on.</p>
                <?php if(auth()->guard()->check()): ?> 
                    <p>Add new project here:</p>
                    <a href="/project/create" class="btn button bg-lightblue">Add Project</a>
                <?php endif; ?>
                <br>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h3 class="font-weight-bolder">Project:</h3>
    <br>
    <div class="row">
        <?php if(count($project)>0): ?>
            <?php $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="<?php echo e(asset ('storage/project/'.$pro->imagePath)); ?>" class="p-2 border-bottom" style="height: 200px" alt="Rounded Image">
                        <div class="card-body text-white bg-light">
                            <h5><b><?php echo e($pro->namaProject); ?></b></h5>
                            <p>Upload: <?php echo e($pro->created_at); ?></p>
                            <p>Update: <?php echo e($pro->updated_at); ?></p>
                            <a href="/project/<?php echo e($pro->id); ?>" class="btn button bg-lightblue">Read More</a>
                        </div>
                    </div>
                    <br>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <h5>Data Project Tidak Tersedia</h5>
        <?php endif; ?>
    </div>
    <div class="container text-center">
        Halaman : <?php echo e($project->currentPage()); ?> <br />
        Jumlah Data : <?php echo e($project->total()); ?> <br />
        Data Per Halaman : <?php echo e($project->perPage()); ?> <br></br>
        <div class="d-flex justify-content-center" >
            <?php echo e($project->links()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\SEMESTER 3\PPW 2\TUGAS\Ridha-Fauziyya-Rahma_479064\resources\views/project/project.blade.php ENDPATH**/ ?>