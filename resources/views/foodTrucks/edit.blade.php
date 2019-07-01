@extends('layouts.admin')

@section('content')
<food-truck-update-form csrf-token='{{ csrf_token() }}' food-truck='{!! json_encode($foodTruck) !!}'></food-truck-update-form>
@endsection