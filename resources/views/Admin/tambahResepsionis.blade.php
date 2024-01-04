<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <b><i>{{ $msg ?? "" }}</i></b> <br/>
    <form method="POST" style="margin: 5%">
        @csrf
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off"><br>
        </div>

        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <input type="text" class="form-control" name="nama" placeholder="Nama" autocomplete="off"><br>
        </div>

        @error('user')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" autocomplete="off"><br>
        </div>

        @error('pass')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <input type="password" class="form-control" name="pass_confirmation" placeholder="Konfirmasi Password" autocomplete="off"><br>
        </div>

        @error('pass_confirmation')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <button type="submit" class="form-control btn btn-success submit px-3">Tambah</button><br><br>
        </div>

        <center><div>
            <a href="{{url("/listResepsionisAdmin")}}" style="font-style: italic">-- Kembali ke List Resepsionis --</a>
        </div></center>
    </form>

    {{-- <b><i>{{ $msg ?? "" }}</i></b> <br/>
    <form method="POST" style="margin: 5%">
        @csrf @method("PATCH")
        <div class="form-group">
            <input type="email" class="form-control"  name="email" placeholder="Email" value="{{ session()->get("login")->email }}">
        </div>

        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ session()->get("login")->nama }}">
        </div>

        @error('user')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" value="{{ session()->get("login")->password }}">
            <span toggle="#pass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
        </div>

        @error('pass')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <input type="password" class="form-control" name="pass_confirmation" placeholder="Konfirmasi Password">
            <span toggle="#pass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
        </div>

        @error('pass_confirmation')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <button type="submit" class="form-control btn btn-success submit px-3">Change</button>
        </div>
    </form> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

