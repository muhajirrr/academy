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
                <th>Category</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </thead>
            <tbody>
                @foreach ($products as $p)
                    <tr>
                        <td>{{ $p->category_id }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->description }}</td>
                        <td>{{ $p->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection