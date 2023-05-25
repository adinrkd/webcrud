<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Tambah Siswa</title>
</head>
<body>
<div class="container">
    <h3>Tambah Siswa</h3>
    <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
        Nama :
        <input type="text" name="nama" value="" class="form-control">

        Absensi :
        <textarea name="absen" cols = 147 class = "form-control"></textarea>

        Kelas :
        <input type="text" name="kelas" value="" class="form-control">

        Foto :
        <input type="file" name="foto" class="form-control">

        <br>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>