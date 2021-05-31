{{-- @include('layout.header', ['title' => 'Halaman Falkutas']) --}}

@extends('layout.master')
@section('title', 'Halaman Falkutas')

@section('content')
<h2>Falkutas</h2>
<ul>
    @if (count($falkutas) > 0)
        @foreach ($falkutas as $item)
            <li> {{ $item }} </li>
        @endforeach
    @else
        <li>Belum Ada Data</li>
    @endif
</ul>
@endsection

{{-- @include('layout.footer') --}}