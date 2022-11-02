@extends('template')

@section('title', 'Session 5 | Menu Page')



@section('content')
    <div class="container-fluid">
        <div class="container" style="margin: auto;">
            <div class="d-flex">
                @foreach($data as $d)
                    @include('produk')
                @endforeach
            </div>
        </div>
    </div>
@endsection
