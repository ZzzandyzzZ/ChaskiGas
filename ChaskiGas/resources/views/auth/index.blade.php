@extends('layouts.subWindow')

@section('title','showUser')

@section('content')
<div class="grad"></div>
<section >
	<div class="tbl-header">
	    <table cellpadding="0" cellspacing="0" border="0">
	      <thead>
	        <tr>
	        	<th>ID</th>
	        	<th>NOMBRE</th>
	         	<th>USERNAME</th>
	          	<th>ROL</th>
	          
	        </tr>
	      </thead>
	    </table>
	  
	</div>
<div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
    	<tbody>	
    	@foreach($users as $user)
			<tr><td>{{$user->id}}</td>
			<td>{{$user->name}}</td>
			<td>{{$user->username}}</td>
			<td>{{$user->role_id}}</td></tr>
    	@endforeach
        
			
		</tbody>
	</table>
</div>
</section>
@endsection()
