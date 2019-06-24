@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
        	@foreach($trucks as $truck)
        	{{ $truck->name }}<br>
        	@endforeach
        </div>
    </div>
</div>
@endsection