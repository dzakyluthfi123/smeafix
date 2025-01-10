<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            background: #f4f4f9;
            color: #333;
            text-align: center;
        }

        h1 {
            font-size: 6em;
            color: #ff6b6b;
            margin: 0;
            animation: shake 1s infinite;
        }

        p {
            font-size: 1.2em;
            margin: 10px 0 20px;
            color: #666;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }

        .animation {
            margin-top: 20px;
            font-size: 5em;
            color: #007bff;
            animation: float 3s infinite ease-in-out;
        }

        @keyframes shake {
            0% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-5px);
            }

            50% {
                transform: translateX(5px);
            }

            75% {
                transform: translateX(-5px);
            }

            100% {
                transform: translateX(0);
            }
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <h1>404</h1>
    <div class="animation">😕</div>
    <p>Oops! Halaman yang Anda cari tidak ditemukan.</p>
    <a href="<?php echo base_url(); ?>">Kembali ke Beranda</a>
</body>

</html>