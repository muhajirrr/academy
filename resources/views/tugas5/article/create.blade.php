@extends('template.layout')

@section('title', 'Tugas 5')

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

        <div class="row" style="margin-bottom: 16px">
            <div class="col" style="text-align:right">
                <a href="{{ route('tugas5.article.show') }}" class="btn btn-info ">Show Article</a>
                <a href="{{ route('tugas5.category.show') }}" class="btn btn-info ">Show Category</a>
            </div>
        </div>

        <form action="{{ route('tugas5.article.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title">
            </div>

            <div class="form-group">
                <label>Body</label>
                <textarea name="body" class="form-control" cols="30" rows="3"></textarea>
            </div>

            @foreach ($categories as $category)
                <div class="checkbox">
                    <label><input type="checkbox" name="category[]" value="{{ $category->id }}">{{ $category->name }}</label>
                </div>
            @endforeach
            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection