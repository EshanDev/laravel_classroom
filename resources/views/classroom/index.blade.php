@extends('layouts.classroom')
@section('main-container')
<div id="ClassroomUserProfile">
	<div class="grid-container">
		<div class="grid-item">
			<div class="col-12">
				col-12
				<div id="test-content-div"></div>
			</div>
		</div>
		<div class="grid-item">
			<div id="test" class="col-12">
				col-12
			</div>
		</div>
	</div>
</div>
@endsection


@section('script')

	<script>
		$.get(
			"test",
			function(data) {
				$("#test-content-div").html(data);
			}
			);
	</script>
@endsection