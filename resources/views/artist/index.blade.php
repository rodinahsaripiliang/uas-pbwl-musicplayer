@extends('tamplate.index')

@section('content')

<div class="module">
        <div class="module-head" class="bg-primary">
        	<h3>Daftar Artist</h3>
        </div>

	<div class="module-body table">
	 <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
     <thead>
		<tr>
			<td>ARTIST ID</td>
			<td>ARTIST NAME</td>
			<td>ACTION</td>

		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->artist_id }}</td>
			<td>{{ $row->artist_name }}</td>
			
			<td>

			<form action="{{ url('artist/' . $row->artist_id) }}" method="POST">
				<a href="{{ url('artist/' . $row->artist_id . '/edit') }}" class="btn btn-primary">Edit</a>
				<input name="_method" type="hidden" value="DELETE">
				@csrf
				<button class="btn btn-primary">Hapus</button>
			</form>
			</td>

		</tr>
		@endforeach
	</tbody>
	</table>
</div>

</div>
</div>
<a href="{{ url('artist/create') }}" class="btn btn-primary">Tambah Data</a>

@endsection