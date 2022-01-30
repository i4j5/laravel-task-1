@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">link</th>
                                <th scope="col">url</th>
                                <th scope="col">transitions</th>
                                <th scope="col">data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($links as $link)
                            <tr>
                                <th scope="row">{{ $link->id }}</th>
                                <td>{{ $link->link }}</td>
                                <td>{{ $link->url }}</td>
                                <td>{{ $link->transitions }}</td>
                                <td>{{ $link->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
