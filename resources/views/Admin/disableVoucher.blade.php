<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disable Voucher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="row" style="margin: 5%">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Kode Voucher</th>
                                    <th>Nama Voucher</th>
                                    <th>Tanggal Awal</th>
                                    <th>Tanggal Akhir</th>
                                    <th>Potongan Voucher</th>
                                    <th>Kuota</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($listVoucher) <= 0)
                                <tr>
                                    <td colspan="7">Tidak ada data Voucher</td>
                                </tr>
                                @else
                                @foreach ($listVoucher as $Voucher)
                                    <tr>
                                        <td>{{ $Voucher->kode }}</td>
                                        <td>{{ $Voucher->nama }}</td>
                                        <td>{{ $Voucher->tglAwal }}</td>
                                        <td>{{ $Voucher->tglAkhir }}</td>
                                        <td>{{ $Voucher->potongan }}</td>
                                        <td>{{ $Voucher->kuota }}</td>
                                        <td>
                                            <a href="{{ url("restoreVoucher/".$Voucher->kode."") }}"><button class="btn btn-warning" type="button">Restore</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <center><div>
            <a href="{{url("/tambahVoucher")}}" style="font-style: italic">-- Kembali ke List Voucher --</a>
        </div></center>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

