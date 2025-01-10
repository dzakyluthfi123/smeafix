<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? htmlspecialchars($title) : 'Default Title'; ?></title>    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>

<body>
    <header>
    </header>
<body>
    <h1><?php echo $sambutan->judul; ?></h1>
    <p><strong>Tanggal:</strong> <?php echo $sambutan->tanggal; ?></p>
    <p><strong>Sambutan:</strong> <?php echo $sambutan->isisambutan; ?></p>
    <?php if ($sambutan->foto): ?>
        <img src="<?php echo base_url('uploads/kepalasekolah/' . $sambutan->foto); ?>" alt="Foto Kepala Sekolah">
    <?php endif; ?>
    <footer>
    </footer>
</body>

</html>
