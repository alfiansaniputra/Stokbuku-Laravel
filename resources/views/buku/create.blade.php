@extends('template.template')
@section('content')

<div class="row mt">
    @if(count($errors)>0)
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    @endif

    <form action="/list-buku" method="post" enctype="multipart/form-data">


        <input type="text" name="nama_buku" value="" placeholder="nama buku"><br>
        <input type="text" name="harga_jual" value="" placeholder="harga jual"><br>
        <input type="text" name="harga_dasar" value="" placeholder="harga_dasar"><br>
        <input type="text" name="penerbit_id" value="" placeholder="penerbit"><br>
        <input type="submit" value="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
    </form>
</div>

@stop