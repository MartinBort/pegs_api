@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-body text-center">
					<h1>{{ $user->username }}</h1>
					<h5>{{ $user->email }}</h5>
				</div>
			</div>
		</div>
	</div>
@endsection