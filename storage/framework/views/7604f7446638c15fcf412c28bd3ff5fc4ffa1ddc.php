

<?php $__env->startSection('content'); ?>
<style type="text/css">
    .pagination li{
        float: left;
        list-style-type: none;
        margin: 5px;
    }
</style>
<br>
<!-- Main Content -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-light">
                    <div class="card-header">
                        <h4 class="card-title"><?php echo e($menu); ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php if(count($galleries)>0): ?>
                                <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-2">
                                        <div>
                                            <a class="example-image-link" href="<?php echo e(asset ('storage/project/'.$gal->imagePath)); ?>"
                                            data-lightbox="example-2" data-title="<?php echo e($gal->description); ?>">
                                                <img class="example-image img-fluid mb-2"
                                                src="<?php echo e(asset ('storage/project/'.$gal->imagePath)); ?>" alt="image-1"></a>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <h3> Tidak ada data. </h3>
                            <?php endif; ?>
                            <div class="d-flex">
                                <?php echo e($galleries->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\SEMESTER 3\PPW 2\TUGAS\Ridha-Fauziyya-Rahma_479064\resources\views/gallery/index.blade.php ENDPATH**/ ?>