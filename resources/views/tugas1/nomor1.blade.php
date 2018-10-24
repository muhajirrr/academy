<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ url()->full() === route('nomor3') ? 'Nomor 3' : 'Nomor 1' }}</title>

    <style>
        form {
            width: 30%;
            margin: auto;
        }

        .input input, .input textarea {
            width: 100%;
        }

        .input {
            margin-bottom: 8px;
        }
    </style>
</head>

<body>
    <div style="width: 100%; height: 100vh;">
        <form action="{{ url()->full() === route('nomor3') ? route('nomor3') : route('nomor2') }}" method="POST">
            @csrf

            @if (url()->full() === route('nomor3'))
                @method('PUT')
            @endif

            <div class="input">
                <input type="text" name="nama" placeholder="Nama">
            </div>

            <div class="input">
                <input type="text" name="tempat_lahir" placeholder="Tempat Lahir">
            </div>

            <div class="input">
                <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir">
            </div>

            <div class="input">
                Jenis Kelamin: 
                <input type="radio" name="jenis_kelamin" value="l" id="jkl" style="width: unset">
                <label for="jkl">Laki-Laki</label>
                <input type="radio" name="jenis_kelamin" value="p" id="jkp" style="width: unset">
                <label for="jkp">Perempuan</label>
            </div>

            <div class="input">
                <input type="email" name="email" placeholder="Email">
            </div>

            <div class="input">
                <textarea name="alamat" cols="30" rows="3" placeholder="Alamat"></textarea>
            </div>

            <button type="submit">Save</button>
        </form>
    </div>
</body>

</html>
