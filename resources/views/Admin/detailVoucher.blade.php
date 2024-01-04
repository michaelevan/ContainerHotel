<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Voucher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="row" style="margin: 5%">

        <form method="POST">
            @csrf
            <div class="form-group">
                Kode Voucher<input class="form-control" value="{{ $dataVoucher->kode }}" disabled>
            </div><br>

            <div class="form-group">
                Nama Voucher<input type="text" class="form-control" name="nama" value="{{ $dataVoucher->nama }}" autocomplete="off">
            </div><br>

            @error('noVoucher')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <div class="form-group">
                Potongan Harga<input type="number" class="form-control" name="potongan" value="{{ $dataVoucher->potongan }}" autocomplete="off">
            </div><br>

            @error('noVoucher')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <div class="form-group">
                Tanggal Awal<input type="date" class="form-control" name="tglAwal" value="{{ $dataVoucher->tglAwal }}" autocomplete="off">
            </div><br>

            @error('tglAwal')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <div class="form-group">
                Tanggal Akhir<input type="date" class="form-control" name="tglAkhir" value="{{ $dataVoucher->tglAkhir }}" autocomplete="off">
            </div><br>

            @error('tglAkhir')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <div class="form-group">
                Kuota<input type="number" class="form-control" name="kuota" value="{{ $dataVoucher->kuota }}" autocomplete="off">
            </div><br>

            @error('kuota')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <div class="form-group">
                <button type="submit" class="form-control btn btn-success submit px-3">Change</button>
            </div><br>
        </form>
        <center><div>
            <a href="{{url("/tambahVoucher")}}" style="font-style: italic">-- Kembali ke List Voucher --</a>
        </div></center>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

