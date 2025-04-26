<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Serenity Trails</title>
  <script src="<?php echo e(asset('styles/tailwindcss3.4.1.js')); ?>"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&family=Great+Vibes&display=swap" rel="stylesheet" />
</head>
<body class="min-h-screen bg-gray-100">
  
  <!-- Navbar -->
  <nav class="bg-black shadow-md">
    <div class="container mx-auto px-4 flex items-center justify-between h-20">
      
      <!-- Logo -->
      <div class="flex items-center">
        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo" class="h-14 object-contain">
      </div>
      
      <!-- Menu -->
      <div class="flex space-x-8 items-center">
        <a class="text-white text-lg font-roboto hover:font-bold hover:text-primary transition" href="<?php echo e(route('login')); ?>">Login</a>
        <a class="text-white text-lg font-roboto hover:font-bold hover:text-primary transition" href="<?php echo e(route('logout')); ?>">Logout</a>
      </div>
      
    </div>
  </nav>

</body>
</html>
<?php /**PATH D:\laravel\jualtiketbola\resources\views/header.blade.php ENDPATH**/ ?>