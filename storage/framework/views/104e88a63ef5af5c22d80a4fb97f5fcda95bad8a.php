

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="jumbotron jumbotron-fluid bg-white">
        <h1 class="display-4 text-center font-weight-bolder text-dark"><b>Education</b></h1>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <div class="row">
            <div class="col-md-6">
                <img class="px-5 rounded mx-auto d-block" src="https://img2.storyblok.com//f/90801/2000x1106/41bc9bbb40/blog-technology-background.jpg" class="rounded" widht= "400px" height="250px">
            </div>
            <div class="col-md-5">
                <p class="lead">Here is my education history:</p>
                <?php if(count($education)>0): ?>
                    <?php $__currentLoopData = $education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <ul class="ml-auto">
                        <li class="nav-item">
                            <h3 class="card-title"><?php echo e($education->jenjangpendidikan); ?></h3>
                            <p class="card-text"><?php echo e($education->namaInstansi); ?></p>
                            <p class="card-text"><?php echo e($education->waktu); ?></p>
                        </li>  
                    </ul>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <h5>Data Education Tidak Tersedia</h5>
                <?php endif; ?>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\SEMESTER 3\PPW 2\TUGAS\Ridha-Fauziyya-Rahma_479064\resources\views/edu/education.blade.php ENDPATH**/ ?>