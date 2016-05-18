@extends('app')

@section('content')
<h4>Country</h4>
<table>
	<thead>
		<tr>
			<th>Airport Name</th>
			<th>Location</th>
			<th>Country</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $key)
		<tr>
			<td>{{ $key->airport_name }}</td>
			<td>{{ $key->location_name }}</td>
			<td>{{ $key->country_id }}</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection