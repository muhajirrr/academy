@extends('template.layout')

@section('title', url()->full() === route('nomor3') ? 'Nomor 3' : 'Nomor 2')

@section('content')
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
@endsection