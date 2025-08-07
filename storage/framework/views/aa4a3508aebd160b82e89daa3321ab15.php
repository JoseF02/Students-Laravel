

<?php $__env->startSection('scripts'); ?>
    <script>
        alert('hi')
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main>
        <h2>About Us</h2>
        <p>This is a simple HTML and CSS template to start your project.</p>
        <p>Name: <?php echo e($name); ?></p>
        <p>ID: <?php echo e($id); ?></p>
    </main>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('styles'); ?>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('Layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\studentManagement\resources\views/aboutus.blade.php ENDPATH**/ ?>