<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tempat Ibadah - Serenity Trails</title>
    <script src="https://cdn.tailwindcss3.4.1.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&family=Great+Vibes&display=swap"
        rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Peta Wisata - Jelajahi berbagai destinasi wisata religi di Batam.">
    <?php

    @include('header.')
    

    ?>
    <style>
        nav {
            position: relative;
        }

        .grid-container {
            display: grid;
            grid-auto-flow: column;
            gap: 20px;
            overflow-x: scroll;
            white-space: nowrap;
            padding: 20px;
            scrollbar-width: none;
        }

        .grid-container::-webkit-scrollbar {
            display: none;
        }

        .grid-item {
            background: none;
            color: black;
            text-align: center;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-overflow: ellipsis;
            min-width: 200px;
            min-height: 300px;

        }

        .grid-item:hover {
            background-color: none;
            transform: scale(1.05);
            transition: 0.3s;
        }

        .grid-item img {
            width: 100%;
            height: 100%;
            border-radius: none;

        }

        .grid-item h2 {
            white-space: normal;
            word-wrap: break-word;
            text-align: center;
            background-color: none;
            padding: 10px;
            border-radius: 1rem;
        }

        .grid-item a {
            text-decoration: none;
            cursor: pointer;
            color: black;
        }

        .grid-item a:hover {
            text-decoration: underline;
            color: aqua;
        }
    </style>
</head>
<style>
    body {
        background-image: url('https://cdn0-production-images-kly.akamaized.net/Fz6QQ-xREHw2_rQFcShN1ljNuDY=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3194445/original/027995900_1596079993-lein-5265194_1280.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: #fff;
    }
</style>

<body class="bg-burlywood text-white">
    <main>
        <h1 class="text-4xl font-bold font-roboto text-black" style="text-align: center;">Tempat Ibadah</h1>
        <p class="text-xl font-light text-black" style="text-align: center">Jelajahi berbagai destinasi wisata</p>

        <div class="grid-container">
            <?php if (!empty($data)): ?>
                <?php foreach ($data as $row): ?>
                    <!-- Destinasi -->
                    <div class="grid-item">
                        <img src="<?= htmlspecialchars($row['foto']); ?>" alt="<?= htmlspecialchars($row['nama_tempat']); ?>">
                        <h2><a href="wisata_ibadah.php?id_ibadah=<?= urlencode($row['id_ibadah']); ?>" target="_blank"><?= htmlspecialchars($row['nama_tempat']);?></a></h2>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p style="text-align: center; color: black;">Tidak ada data tempat ibadah ditemukan.</p>
            <?php endif; ?>
        </div>
    </main>
</body>

</html>