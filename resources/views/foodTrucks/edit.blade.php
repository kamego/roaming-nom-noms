@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
			<h2>Menu</h2>
		</div>
		<div class="col-12">
			<h2>Upcoming Events</h2>
			{ include list of at least 3 events }
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<h2>About {{ $truck->name }}</h2>
			{{ $truck->description }}
		</div>
	</div>
</div>
{{ $truck }}
@endsection

@section('scripts')
<script type="text/javascript">
	const truck = {!! json_encode( $truck ) !!}
	
	export default {
        data() {
            return {
                truck: truck
            };
        },
        props: {
        },
        methods: {
        }
    };
</script>
@endsection