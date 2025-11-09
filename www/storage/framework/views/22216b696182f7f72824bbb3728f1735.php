<!DOCTYPE html>
<html lang="en" <?php echo $__env->yieldContent('html-attributes'); ?>>

<head>
    <?php echo $__env->make('layouts.partials.title-meta', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!--===== CSS LINK =======-->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/scss/main.scss']); ?>

    <?php echo $__env->yieldContent('css'); ?>

</head>

<body <?php echo $__env->yieldContent('body-attributes'); ?>>

    <?php echo $__env->make('layouts.partials.loader', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('layouts.partials.searchbox', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->yieldContent('header'); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->yieldContent('scripts'); ?>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/main.js']); ?>
</body>

</html>
<?php /**PATH /home/theseopp/public_html/resources/views/layouts/base.blade.php ENDPATH**/ ?>