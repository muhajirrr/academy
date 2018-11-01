@extends('template.layout')

@section('title', url()->full() === route('nomor3') ? 'Nomor 3' : 'Nomor 2')

@section('content')
<div class="row" style="padding-bottom:16px">
    <div class="col-xs-6">
        <form action="{{ route('nomor3_put') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama">
            </div>

            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir">
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="l" checked="">Laki-Laki
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="p">Perempuan
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" cols="30" rows="3" placeholder="Alamat"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection