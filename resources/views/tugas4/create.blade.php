@extends('template.layout')

@section('title', 'Tugas 4')

@section('content')
<div class="row" style="padding-bottom:16px">
    <div class="col-xs-6">
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <div class="col">
                <a href="{{ route('tugas4.show') }}" class="btn btn-info pull-right">Show Data</a>
            </div>
        </div>

        <form action="{{ route('tugas4.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Categories</label>
                <select name="category_id" class="form-control">
                    <option value="" selected>Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" cols="30" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" name="price" placeholder="Price">
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection