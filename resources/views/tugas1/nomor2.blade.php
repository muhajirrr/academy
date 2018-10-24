<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nomor 2</title>
</head>
<body>
    <div>
        <table>
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td>: {{ $data['nama'] }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: {{ $data['email'] }}</td>
                </tr>
                <tr>
                    <td>Tempat, Tgl Lahir</td>
                    <td>: {{ $data['tempat_lahir'] }}, {{ $data['tgl_lahir'] }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: {{ $data['jenis_kelamin'] == 'l' ? 'Laki-Laki' : 'Perempuan' }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: {{ $data['alamat'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>