@extends('layouts.app')


@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#ID</th>
        <th scope="col">Titolo</th>
        <th scope="col">Opzioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.posts.show', $post) }}"></a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>


@endsection
