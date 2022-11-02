<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <form action="index.php" method="POST">
<div class="d-flex flex-column align-items-center">
        <div class="form-group mb-3 col-4">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" placeholder="masukkan nama">
        </div>
        <div class="form-group mb-3 col-4">
            <label for="">Kelas</label>
            <input type="text" class="form-control" name="kelas" placeholder="masukkan kelas">
        </div>
        <div class="form-group mb-3 col-4">
            <label for="">Jurusan</label>
            <input type="text" class="form-control" name="jurusan" placeholder="masukkan jurusan">
        </div>
        <div class="form-group mb-3 col-4">
            <label for="">Sekolah</label>
            <input type="text" class="form-control" name="sekolah" placeholder="masukkan sekolah">
        </div>
        <div class="form-group mb-3 col-4">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" placeholder="masukkan email">
        </div>
        <div class="form-group mb-3 col-4">
            <label for="">No Hp</label>
            <input type="text" class="form-control" name="no_hp" placeholder="masukkan no hp">
        </div>
        <div class="form-group mb-3 col-4">
            <label for="">Jenis Kelamin</label>
            <input type="text" class="form-control" name="jenis_kelamin" placeholder="masukkan jenis kelamin">
        </div>
        <div class="form-group mb-3 col-4">
            <label for="">Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="masukkan alamat">
        </div>
        <div class="form-group mb-3 col-4">
            <button type="submit" class="btn btn-primary" name="add">Submit</button>
        </div>
</div>
    </form>
</body>
</html>