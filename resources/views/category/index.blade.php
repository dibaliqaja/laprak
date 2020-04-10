@extends('layouts.app')

@section('title', 'Aplikasi Toko Online')

@section('content')

    <div>
        @foreach ($category as $item)
            <h1>{{ $item->name }}</h1>
        @endforeach
        <hr>

        {{ $category->links() }}
    </div>

@endsection
