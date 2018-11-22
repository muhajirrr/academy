@extends('template.layout')

@section('title', 'Tugas 4')

@section('css')
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
@endsection

@section('content')
<div class="row" style="padding-bottom:16px">
    <div class="col-xs-6">
        <table>
            <thead>
                <th>Title</th>
                <th>Body</th>
                <th>Categories</th>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->body }}</td>
                        <td>{{ implode(', ', $article->category->pluck('name')->toArray()) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection