<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add New</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
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
        color: #636b6f;
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
    <div class="flex-center position-ref full-height">
        <div class="content">
        	<h1>ADD NEW</h1>
            <form action="add" method="post" enctype="multipart/form-data">
            	{{csrf_field()}}
                <div id="tanggal">
                    <label for="judul">Tanggal:</label>
                    <input type="date" name="tanggal" id="tanggal" required>
                </div>
                <br>
            	<div id="ayat_emas">
                    <label for="judul">Ayat Emas:</label>
				    <input type="text" name="ayat_emas" id="ayat_emas">
	            </div>
	            <br>
            	<div id="gambar">
                    Select image to upload:
				    <input type="file" name="gambar" id="gambar">
				    <!-- <input type="submit" value="Upload Image" name="submit"> -->
	            </div>
	            <br>
	            <div id="judul">
	            	<label for="judul">Judul:</label>
	            	<input type="text" name="judul" required>
	            </div>
	            <br>
	            <div id="ayat">
	            	<label for="gambar">Ayat:</label>
	            	<input type="text" name="ayat" required>
	            </div>
	            <br>
	            <div id="isi">
	            	<label for="isi">Isi:</label>
	            	 <textarea name="isi" id="isi" rows="7" cols="70" required></textarea>
	            </div>
	            <br>
	            <div id="sumber">
	            	<label for="gambar">Sumber:</label>
	            	<input type="text" name="sumber" required>
	            </div>
	            <br>
	            <button type="submit">Add New</button>
            </form>
        </div>
    </div>
</body>
</html>
