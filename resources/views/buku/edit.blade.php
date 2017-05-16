@extends('template.template')
@section('content')


@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif

<h1>CREATE</h1>

<form action="/list-buku//{{$buku->slug}}" method="post">

        <input type="text" name="nama_buku" value="{{ $buku->nama_buku  }}" placeholder="nama buku"><br>
        <input type="text" name="harga_jual" value="{{ $buku->harga_jual  }}" placeholder="harga jual"><br>
        <input type="text" name="harga_dasar" value="{{ $buku->harga_dasar  }}" placeholder="harga_dasar"><br>
        <input type="text" name="penerbit_id" value="{{ $buku->penerbit_id  }}" placeholder="penerbit"><br>


	<input type="submit" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>


@stop