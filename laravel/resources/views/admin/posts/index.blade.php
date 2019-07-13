@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Posts list</h1>
            </div>
        </div>
        <div class="row">

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Status</th>
                    <th scope="col">Author</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->status }}</td>
                        <td></td>
                        <td>{{ $post->created_at }}</td>
                        <td>
                            
                        </td>
                    </tr>
                @endforeach

            </table>


        </div>
    </div>
@endsection