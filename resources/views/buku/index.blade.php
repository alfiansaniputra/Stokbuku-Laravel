@extends('template.template')
@section('content')
	<?php $no=1; ?>
	<table id="datatable" class="table table-striped table-bordered">
       <thead>          
        	<tr class="headings">
        	<th class="column-title">No </th>
        	<th class="column-title">Nama Buku</th>
        	<th class="column-title">Harga Jual</th>
        	<th class="column-title">Harga Dasar</th>
        	<th class="column-title">Penerbit</th>
        	<th class="column-title no-link last"><span class="nobr">Action</span>
        	</th>
       </thead>
		<tbody>
			@foreach($buku as $buku)
			<tr>
				<td>{{ $no++ }}</td>
              	<td><a href="#"><a href="/liblary/{{$buku->slug}}"><p> {{ $buku->nama_buku}} </p></a></a></td>
				<td class="hidden-phone">Rp.{{ $buku->harga_jual}}</td>
				<td>Rp.{{ $buku->harga_dasar }}</td>
				<td>{{ $buku->penerbit->nama_penerbit }}</td>
				<td>
						<button class="btn btn-primary btn-xs">
							<a href="/list-buku/{{$buku->slug}}/edit"><i class='fa fa-pencil' style="color: white"></i></a>
						</button>
						<button class="btn btn-danger btn-xs">
							<form action="/list-buku/{{$buku->id}}" method="post">
							<input type="hidden" name="_method" value="delete">
							<input type="hidden" name="_token" value="{{csrf_token() }}">
							<input type="submit">
								<i class="glyphicon glyphicon-trash"></i>
							</form>
						</button>
					
					
				</td>
			</tr>
			@endforeach
      	</tbody>
	</table>







@stop