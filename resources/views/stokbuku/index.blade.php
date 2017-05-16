@extends('template.template')
@section('content')
	
	<?php $no=1; ?>
	<table id="datatable" class="table table-striped table-bordered">
       <thead>          
        	<tr class="headings">
        	<th class="column-title">No </th>
        	<th class="column-title">Nama Buku</th>
        	<th class="column-title">Penerbit</th>
        	<th class="column-title">Jumlah</th>
        	<th class="column-title">Tanggal Masuk Gudang</th>
        	<th class="column-title no-link last"><span class="nobr">Action</span>
        	</th>
       </thead>
		<tbody>
			@foreach($stokbuku as $stokbuku)
			<tr>
				<td>{{ $no++ }}</td>
              	<td><a href="#"><a href="/liblary/{{$stokbuku->slug}}"><p> {{ $stokbuku->buku->nama_buku }} </p></a></a></td>
				<td>{{ $stokbuku->penerbit->nama_penerbit }}</td>
				<td><span class="label label-info label-mini" style="text-align: center;"> 
					{{ $stokbuku->jumlah }}
				</span>
				</td>
				<td>{{ $stokbuku->tgl_masuk_gudang }}</td>
				<td>
					<button class="edit-modal btn btn-primary btn-xs">
					    <i class='fa fa-eye' style="color: white"></i>
					</button>
					<button class="edit-modal btn btn-primary btn-xs">
					    <i class='fa fa-pencil' style="color: white"></i>
					</button>
					<button class="delete-modal btn btn-danger btn-xs" value="delete">
						<form action="/list-buku/{{$stokbuku->id}}" method="post">
						<input type="hidden" name="_method" value="delete">
						<input type="hidden" name="_token" value="{{csrf_token() }}">
							<span class="glyphicon glyphicon-trash"></span>
						</form>
					</button>
				</td>
			</tr>
			@endforeach
      	</tbody>
	</table>
@stop