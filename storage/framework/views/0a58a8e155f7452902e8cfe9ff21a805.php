<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login</title>

    <!-- Tailwind CSS lokal dari public/styles -->
    <script src="<?php echo e(asset('styles/tailwindcss3.4.1.js')); ?>"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6366f1',
                        secondary: '#9333ea',
                        background: '#f3f4f6',
                        dark: '#1f2937',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-background min-h-screen flex items-center justify-center" style="background-image: url('https://cdn0-production-images-kly.akamaized.net/Fz6QQ-xREHw2_rQFcShN1ljNuDY=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3194445/original/027995900_1596079993-lein-5265194_1280.jpg'); background-size: cover; background-position: center;">

    <div class="bg-white p-8 rounded-xl shadow-xl w-full max-w-sm">
        <h1 class="text-2xl font-bold text-center text-primary mb-6">Login</h1>

        <!-- Pesan Error -->
        <?php if(session('error')): ?>
            <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4 text-sm">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <!-- Pesan Sukses -->
        <?php if(session('success')): ?>
            <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4 text-sm">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('login.submit')); ?>" class="space-y-4">
            <?php echo csrf_field(); ?>

            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                <input type="text" name="username" id="username" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" />
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" id="email" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" />
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" name="password" id="password" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" />
            </div>

            <button type="submit"
                    class="w-full bg-primary text-white font-semibold py-2 rounded-md hover:bg-indigo-700 transition duration-200">
                Log In
            </button>

            <p class="text-center text-sm text-gray-600 mt-4">
                Don't have an account?
                <a href="#" class="text-secondary hover:underline">Create Account</a>
            </p>
        </form>
    </div>

</body>
</html>
<?php /**PATH D:\laravel\jualtiketbola\resources\views/login.blade.php ENDPATH**/ ?>