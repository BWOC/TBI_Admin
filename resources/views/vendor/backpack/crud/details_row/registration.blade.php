<div class="m-t-10 m-b-10 p-l-10 p-r-10 p-t-10 p-b-10">
	<div class="row">
		<div class="col-md-12">
			<strong>Phone Number:</strong> {{ $entry->application->phone_number }}
			<strong>Checked In:</strong> {{ $entry->registration->checked_in }}<br>
			<strong>Medical Confirmed:</strong> {{ $entry->registration->medical_confirmed }}<br>
			<strong>Information Confirmed:</strong> {{ $entry->registration->info_confirmed }}
		</div>
	</div>
</div>
<div class="clearfix"></div>