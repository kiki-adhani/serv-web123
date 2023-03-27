<!DOCTYPE html>
<html x-data="data()" lang="en">
<head>
    
    <?php echo $__env->make('includes.dashboard.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <title><?php echo $__env->yieldContent('title'); ?> | SERV</title>

    <?php echo $__env->yieldPushContent('before-style'); ?>

    <?php echo $__env->make('includes.dashboard.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('after-style'); ?>
</head>
<body class="antialiased">
    <div class="flex h-screen bg-serv-services-bg" :class="{ 'overflow-hidden': isSideMenuOpen }">

        <?php echo $__env->make('components.dashboard.desktop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 flex items-end bg-black bg-opacity-50 z-1 sm:items-center sm:justify-center"></div>

            <?php echo $__env->make('components.dashboard.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="flex flex-col flex-1 w-full">
            <?php echo $__env->make('components.dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->yieldContent('content'); ?>
        </div>

    </div>

    <?php echo $__env->yieldPushContent('before-script'); ?>

    <?php echo $__env->make('includes.dashboard.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('after-script'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\bwa-jasa\resources\views/layouts/app.blade.php ENDPATH**/ ?>