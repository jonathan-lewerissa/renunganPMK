<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>List Renungan</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
    html, body {
        background-color: #fff;
        color: #000000;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #000000;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
</head>
<body>
    <div class="full-height">
        <div class="content">
            @if($all->count())
            <table class="table" style="margin:50px; padding-right:15px">
                <caption style="margin-bottom:50px; font-size: 30px">RENUNGAN</caption>
                <br><br>
                <thead>
                    <tr>
                      <th scope="col">Option</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Ayat Emas</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Isi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($all as $a)
                    <tr>
                        <th scope="row" rowspan="4">
                            <form action="/list/edit/{{$a->id}}" method="GET">
                               {{csrf_field()}}
                               <div class="col-md-6"><button type="submit">EDIT</button></div>
                            </form>
                            <form action="/list/delete/{{$a->id}}" method="POST">
                               {{csrf_field()}}
                               <div class="col-md-6"><button type="submit">DELETE</button></div>
                            </form>
                        </th>    
                      <th scope="row" rowspan="4">{{Carbon\Carbon::parse($a->tanggal)->format('l\\, j F Y')}}</th>
                      <th scope="row" rowspan="4">{{$a->ayat_emas}}</th>
                      <td rowspan="4">
                          @if($a->gambar == null)
                            <p>No image</p>
                          @else
                            <a href="{{$a->gambar}}" target="_blank">
                                <img src="{{$a->gambar}}" style="width:100px;height:100px;">
                            </a>
                          @endif
                      </td>
                      <td>[{{$a->judul}}]</td>
                    </tr>
                    <tr>
                        <td>Baca: {{$a->ayat}}</td>
                    </tr>
                    <tr>
                        <td>{{$a->isi}}</td>
                    </tr>
                    <tr>
                        <td>Sumber: {{$a->sumber}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p>Tidak ada renungan</p>
            @endif
        </div>
        {{ $all->links() }}
    </div>
</body>
</html>
