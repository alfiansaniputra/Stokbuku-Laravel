@extends('template.template')
@section('content')

<?php $no=1; ?>
	<table id="datatable" class="table table-striped table-bordered">
       <thead>          
        	<tr class="headings">
        	<th class="column-title">No </th>
        	<th class="column-title">Nama Penerbit</th>
        	<th class="column-title">Alamat</th>
        	<th class="column-title">Kontak</th>
        	<th class="column-title no-link last"><span class="nobr">Action</span>
        	</th>
       </thead>
		<tbody>
			@foreach($penerbit as $penerbit)
			<tr>
				<td>{{ $no++ }}</td>
              	<td><a href="#"><a href="/liblary/{{$penerbit->slug}}"><p> {{ $penerbit->nama_penerbit}} </p></a></a></td>
				<td>{{ $penerbit->alamat_penerbit }}</td>
				<td>{{ $penerbit->kontak_penerbit}}</td>
				<td>
					<button class="edit-modal btn btn-primary btn-xs">
					    <i class='fa fa-eye' style="color: white"></i>
					</button>
					<button class="edit-modal btn btn-primary btn-xs">
					    <i class='fa fa-pencil' style="color: white"></i>
					</button>
					
						<button class="delete-modal btn btn-danger btn-xs" value="delete">
							<form action="/list-buku/{{$penerbit->id}}" method="post">
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