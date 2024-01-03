<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok Satu</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999;
        }

        .loader {
            border: 8px solid #f3f3f3;
            border-top: 8px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="loading-screen">
        <div class="loader"></div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Simulasi loading dengan delay 2 detik
            setTimeout(function () {
                // Sembunyikan loading screen
                document.querySelector(".loading-screen").style.display = "none";

                // Arahkan ke halaman mahasiswa.index
                window.location.href = "{{ route('mahasiswa.index') }}";
            }, 2000);
        });
    </script>
</body>
</html>
