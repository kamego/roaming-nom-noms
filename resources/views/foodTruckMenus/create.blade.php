@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<h2>{{ $foodTruck->name }}</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-4">
			<food-truck-menu-create-form csrf-token='{{ csrf_token() }}' food-truck='{!! json_encode($foodTruck) !!}'></food-truck-menu-create-form>
			<food-truck-menus menus='{!! json_encode($menus) !!}'></food-truck-menus>
		</div>
		<div class="col-8">
			<food-truck-menu csrf-token='{{ csrf_token() }}' default-menu='{!! json_encode($foodTruck->defaultMenu()) !!}'></food-truck-menu>
		</div>
	</div>
</div>

@endsection