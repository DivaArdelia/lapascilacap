<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            text-align: center;
            background-color: #f3f3f3;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .container img {
            margin-top: -120px;
            max-width: 70%;
            height: auto;
        }
        .text-overlay {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: -120px; /* Increased margin for desktop */
            background: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-radius: 5px;
            max-width: 90%;
        }
        .text-overlay h1, .text-overlay p {
            margin: 0;
            color: #EF9471;
        }
        .btn-container {
            margin-top: 20px;
        }
        @media (max-width: 900px) {
            .container img {
                max-width: 90%;
            }
            .text-overlay {
                margin-top: 10px; /* Smaller margin for mobile */
                padding: 5px;
            }
            .text-overlay h1 {
                font-size: 1.2em;
            }
            .text-overlay p {
                font-size: 0.9em;
            }
            
        }
        @media (max-width: 450px) {
            .container {
                width: 100%;
            }
            .container img {
                margin-top: 10px;
                max-width: 100%;
            }
            .text-overlay {
                margin-top: 10px;
                padding: 5px;
                max-width: 100%;
                text-align: center;
            }
            .text-overlay h1 {
                font-size: 1em;
            }
            .text-overlay p {
                font-size: 0.8em;
            }
        }
    </style>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <img src="assets/img/404.png" alt="404 - Page Not Found">
        <div class="text-overlay">
            <h1>Halaman Tidak Ditemukan</h1>
            <p>Maaf, halaman yang anda tuju tidak ditemukan (error 404)</p>
        </div>
        <div class="btn-container">
            <a href="index.php" class="btn btn-danger btn-lg">Kembali</a>
        </div>
    </div>
</body>
</html>
