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
                <td>XXX</td>
            </tr>
        @endforeach
    </tbody>
  </table>


@endsection
