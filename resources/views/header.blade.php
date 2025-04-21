<!DOCTYPE html>
<html>
<head>
    <title>Header</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&amp;family=Great+Vibes&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/header_style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="Serenity Trails Logo">
        </div>
        <nav class="space-x-8">
            <a class="text-white text-lg font-roboto" href="index.php">Home</a>
            <a class="text-white text-lg font-roboto" href="kategori.php">Destination</a>
            <a class="text-white text-lg font-roboto" href="news.php">News</a>
        </nav>
        <div>
            <a href="login.php">
                <i class="fas fa-user-circle text-3xl"></i>
            </a>
            <a href="#"  onclick="confirmLogout(event)">
                <i class="fas fa-sign-out-alt text-3xl"></i>
            </a>
            <script>
                function confirmLogout(event) {
                    event.preventDefault();
                    if (confirm("Apakah anda yakin ingin logout?")) {
                        window.location.href = "logout.php";
                    }
                }
            </script>
        </div>

    </header>
</body>
</html>
