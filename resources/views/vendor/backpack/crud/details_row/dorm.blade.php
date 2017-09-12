<div class="m-t-10 m-b-10 p-l-10 p-r-10 p-t-10 p-b-10">
	<div class="row">
		<div class="col-md-12 details-row">
			<div class="col-md-2">
				<img class="reg_profile_photo" src="{{ $entry->applicationGeneral->photo }}" />
			</div>
			<div class="col-md-3">
			@if (isset($entry->applicationDorm->dorm_notes))
				<strong>Notes:</strong> {{ $entry->applicationDorm->dorm_notes }}<br>
			@else
				- No Notes -
			@endif

			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>