<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <main class="container">
        <br>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <center>
                <h2>Kelompok Satu</h2>
            </center>
        <table class="table table-striped">
            <a href='{{ url('mahasiswa') }}' class="btn btn-secondary"><< Kembali</a>
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-2">NIM</th>
                    <th class="col-md-2">Nama</th>
                    <th class="col-md-2">Jurusan</th>
                    <th class="col-md-3">Alamat</th>
                    <th class="col-md-3">WhatsApp</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>IST2104021</td>
                    <td>Fathor Rozi</td>
                    <td>Teknologi Informasi</td>
                    <td>Prenduan, Pragaan, Sumenep</td>
                    <td><a href="">https://wa.me/6287803224618</a></td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td>2</td>
                    <td>IST2104022</td>
                    <td>Asril Hidayat</td>
                    <td>Teknologi Informasi</td>
                    <td>Kapedi, Bluto, Sumenep</td>
                    <td><a href="">https://wa.me/6281249356051</a></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>3</td>
                    <td>IST2104023</td>
                    <td>Moh. Syauqi Asyif</td>
                    <td>Teknologi Informasi</td>
                    <td>Gadu Barat, Ganding, Sumenep</td>
                    <td><a href="">https://wa.me/6281908612547</a></td>
                </tr>
            </tbody>
        </table>
        </div>
        <footer>
            <a href='{{ url('mahasiswa/kelompok')}}' style="text-decoration: none">Kelompok Satu</a> - &copy; 2023 Teknologi Informasi A.
        </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>