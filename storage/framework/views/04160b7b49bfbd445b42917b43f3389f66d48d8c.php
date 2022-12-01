

<?php $__env->startSection('content'); ?>
<div class="jumbotron jumbotron-fluid bg-white">
    <h1 class="display-5 text-center font-weight-bolder text-dark"><b>Account Information</b></h1>
</div>
<div class="container">
  <div class="jumbotron jumbotron-fluid">
    <div class="container" style="margin-left:30px">
        <table cellpadding="10">
            <tr>
                <td><b>Nama </b></td>
                <td><b>: </b></td>
                <td><?php echo e(Auth::user()->name); ?></td>
            </tr>
            <tr>
                <td><b>Email </b></td>
                <td><b>: </b></td>
                <td><?php echo e(Auth::user()->email); ?></td>
            </tr>
            <tr>
                <td><b>Tanggal Akun Dibuat </b></td>
                <td><b>: </b></td>
                <td><?php echo e(Auth::user()->created_at); ?></td>
            </tr>
            <tr>
                <td><b>Tanggal Akun Diupdate </b></td>
                <td><b>: </b></td>
                <td><?php echo e(Auth::user()->updated_at); ?></td>
            </tr>
        </table>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\SEMESTER 3\PPW 2\TUGAS\Ridha-Fauziyya-Rahma_479064\resources\views/akun.blade.php ENDPATH**/ ?>