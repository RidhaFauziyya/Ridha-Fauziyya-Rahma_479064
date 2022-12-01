

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
        <h1 class="display-4 text-center font-weight-bolder text-dark"><b>About</b></h1>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <div class="row">
            <div class="col-md-5">
                <img class="px-5" src="https://static.vecteezy.com/system/resources/previews/006/648/546/original/muslim-woman-do-business-video-call-conference-telecommuting-webinar-using-laptop-talk-to-colleagues-online-learning-and-remote-working-concept-illustration-free-vector.jpg" class="rounded" widht= "400px" height="300px">
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-5">
                <p class="lead">Hi! My name is Ridha Fauziyah Rahma. I am currently studying for a D4 program in the field of software engineering technology at Gadjah Mada University Vocational School and am in 3rd semester.
                    During my school and college years, I participated in many activities ranging from organizations, committees, volunteering and many more. I got many benefits from this activity.</p>
                <?php if(auth()->guard()->check()): ?>
                    <p>Add new activity here:</p>
                    <a href="/about/create" class="btn button bg-lightblue">Add Activity</a>
                <?php endif; ?>
                <br>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h3>Activity:</h3>
    <br>
    <div class="row">
        <?php if(count($about)>0): ?>
            <?php $__currentLoopData = $about; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="<?php echo e(asset('storage/about/'.$ab->imagePath)); ?>" class="p-2 border-bottom" style="height: 200px" alt="Rounded Image">
                        <div class="card-body">
                            <h5><b><?php echo e($ab->namaAktifitas); ?></b></h5>
                            <p>Upload: <?php echo e($ab->created_at); ?></p>
                            <p>Update: <?php echo e($ab->updated_at); ?></p>
                            <a href="/about/<?php echo e($ab->id); ?>" class="btn button bg-lightblue">Read More</a>
                        </div>
                    </div>
                    <br>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <br>
            <h5>Data Aktifitas Tidak Tersedia</h5>
            <br>
        <?php endif; ?>
    </div>
    <div class="container text-center">
        Halaman : <?php echo e($about->currentPage()); ?> <br />
        Jumlah Data : <?php echo e($about->total()); ?> <br />
        Data Per Halaman : <?php echo e($about->perPage()); ?> <br></br>
        <div class="d-flex justify-content-center" >
            <?php echo e($about->links()); ?>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\SEMESTER 3\PPW 2\TUGAS\Ridha-Fauziyya-Rahma_479064\resources\views/about/about.blade.php ENDPATH**/ ?>