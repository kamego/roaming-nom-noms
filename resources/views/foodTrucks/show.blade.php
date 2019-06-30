@extends('layouts.app')
 
@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{ $truck->name }}</h1>
    <p class="lead">{{ $truck->blurb }}</p>
  </div>
</div>
<div class="container">
    <div class="row">
    	<div class="col-8">
    		<h2>Menu</h2>

    	</div>
        <div class="col-4">
        	<h2>Upcoming Events</h2>
        	{ include list of at least 3 events }
        </div>
    </div>
    <div class="row">
    	<div class="col-8">
    		<h2>About {{ $truck->name }}</h2>
    		{{ $truck->description }}
    	</div>
    </div>
</div>
{{ $truck }}
@endsection