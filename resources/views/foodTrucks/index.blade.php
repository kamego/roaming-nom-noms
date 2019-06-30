@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
        	@foreach($trucks as $truck)
        	<h3><a href="/food-trucks/{{ $truck->slug }}">{{ $truck->name }}</a></h3><br>
        	{{ $truck }}
        	@endforeach
        </div>
    </div>
</div>
@endsection