@extends('layouts.app')
 
@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{ $foodTruck->name }}</h1>
    <p class="lead">{{ $foodTruck->blurb }}</p>
  </div>
</div>
<div class="container">
    <div class="row">
    	<div class="col-8">
    		<h2>Menu</h2>
            @foreach($foodTruck->menus as $menu)
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>{{ $menu->title }}</h3>
                    </div>
                    @foreach($menu->items as $item)
                    <div class="col-4">
                        {{ $item->name }}
                        <div class="float-right">{{ $item->price }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
    	</div>
        <div class="col-4">
        	<h2>Upcoming Events</h2>
        	{ include list of at least 3 events }
        </div>
    </div>
    <div class="row">
    	<div class="col-8">
    		<h2>About {{ $foodTruck->name }}</h2>
    		{{ $foodTruck->description }}
    	</div>
    </div>
</div>
@endsection