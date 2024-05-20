 <?php if(Route::has('login')): ?>
            <div class="p-6 text-right sm:fixed sm:top-0 sm:right-0">
                <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(route('home')); ?>" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Home</a>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Log in</a>

                    <?php if(Route::has('register')): ?>
                        <a href="<?php echo e(route('register')); ?>" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Register</a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        <?php endif; ?><?php /**PATH D:\Documents\laravel-final\receivables\resources\views/welcome.blade.php ENDPATH**/ ?>