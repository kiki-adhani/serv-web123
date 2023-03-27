<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <?php echo $__env->make('includes.landing.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title><?php echo $__env->yieldContent('title'); ?> | SERV</title>
    <?php echo $__env->yieldPushContent('before-style'); ?>
    <?php echo $__env->make('includes.landing.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('after-style'); ?>
</head>
<body class="antialiased">
    <div class="relative">
        <?php echo $__env->make('includes.landing.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('includes.landing.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldPushContent('before-script'); ?>
        <?php echo $__env->make('includes.landing.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldPushContent('after-script'); ?>

        <!-- modals -->
        <?php echo $__env->make('components.modal.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('components.modal.register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('components.modal.register-success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\bwa-jasa\resources\views/layouts/front.blade.php ENDPATH**/ ?>