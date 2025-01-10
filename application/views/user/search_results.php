<style>
        body {
            background-color: #f7f9fc;
            font-family: Arial, sans-serif;
            padding-top: 20px;
        }

        .container-fluid {
            max-width: 90%;
        }

        h1 {
            font-size: 2.5em;
            color: #007bff;
        }

        h3 {
            margin-top: 20px;
            color: #333;
            font-weight: bold;
            border-left: 4px solid #007bff;
            padding-left: 8px;
        }

        .search-results {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .list-group-item {
            transition: transform 0.2s ease;
        }

        .list-group-item:hover {
            transform: scale(1.02);
            background-color: #f1f1f1;
        }

        .no-results {
            color: #dc3545;
            font-weight: bold;
            font-size: 1.2em;
        }

        .back-btn {
            background-color: #28a745;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .back-btn:hover {
            background-color: #218838;
            color: #fff;
        }

        .icon {
            font-size: 1.5em;
            color: #007bff;
            margin-right: 8px;
        }
    </style>
<br>
<br>
<br>
<br>




    <div class="container-fluid">
    <div class="search-results">
    <h1>Hasil Pencarian untuk: "<?php echo $query; ?>"<span class="icon">🔍</span></h1>
    <hr>

    <?php if (!empty($results)): ?>
        <?php foreach ($results as $category => $items): ?>
            <h3><?php echo ucfirst($category); ?></h3>
            <ul class="list-group mb-4">
                <?php foreach ($items as $item): ?>
                    <li class="list-group-item">
                        <strong>
                        <a href="<?php echo site_url($category . '/detail/' . $item['slug']); ?>">
                        <?php echo $query; ?>                            </a>
                          </li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="alert alert-warning">Tidak ada hasil ditemukan.</div>
    <?php endif; ?>
    
    <a href="<?php echo base_url(); ?>" class="btn btn-primary">Kembali ke Beranda</a>
    </div>
</div>