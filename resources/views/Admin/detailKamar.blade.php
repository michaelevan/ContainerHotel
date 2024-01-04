<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="row" style="margin: 5%">

        <form method="POST">
            @csrf
            <div class="form-group">
                Kode Tipe Kamar<input class="form-control" value="{{ $dataKamar->Kodejenis }}" disabled>
            </div><br>

            <div class="form-group">
                No Kamar<input type="text" class="form-control" name="nokamar" value="{{ $dataKamar->Nokamar }}" autocomplete="off">
            </div><br>

            @error('nokamar')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <div class="form-group">
                Harga<input type="text" class="form-control" name="harga" value="{{ $dataKamar->Harga }}" autocomplete="off">
            </div><br>

            @error('harga')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <div class="form-group">
                <button type="submit" class="form-control btn btn-success submit px-3">Change</button>
            </div><br>
        </form>
        <center><div>
            <a href="{{url("/tambahKamar")}}" style="font-style: italic">-- Kembali ke List Kamar --</a>
        </div></center>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

