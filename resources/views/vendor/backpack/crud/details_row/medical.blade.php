<div class="m-t-10 m-b-10 p-l-10 p-r-10 p-t-10 p-b-10">
	<div class="row">
		<div class="col-md-12 details-row">
			<div class="col-md-2">
				<img class="reg_profile_photo" src="{{ $entry->applicationGeneral->photo }}" />
			</div>
			<div class="col-md-3">
			@if (isset($entry->registration->checked_in_summary))
				<strong>Checked In:</strong> {{ $entry->registration->checked_in_summary }}<br>
				<strong>Medical Confirmed:</strong> {{ $entry->registration->medical_confirmed_summary }}<br>
				<strong>Information Confirmed:</strong> {{ $entry->registration->info_confirmed_summary }}
			@else
				- Review Needed -
			@endif

			</div>
			<div class="col-md-4">
				<h3>General Information</h3>
				<strong>Phone Number:</strong> {{ $entry->applicationGeneral->phone_number }}<br>
				<strong>Mailing Address:</strong> {{ $entry->applicationGeneral->address_street_1 }}<br>
				<strong>Mailing Address 2:</strong> {{ $entry->applicationGeneral->address_street_2 }}<br>
				<strong>City:</strong> {{ $entry->applicationGeneral->address_city }}<br>
				<strong>State:</strong> {{ $entry->applicationGeneral->address_state }}<br>
				<strong>ZIP:</strong> {{ $entry->applicationGeneral->address_zip }}<br>
				<strong>Country:</strong> {{ $entry->applicationGeneral->address_country }}<br><br>
				<h3>Emergency Contact</h3>
				<strong>Name:</strong> {{ $entry->applicationMedicalContact->medical_contact_full_name }}<br>
				<strong>Address:</strong> {{ $entry->applicationMedicalContact->address_street }}<br>
				<strong>City:</strong> {{ $entry->applicationMedicalContact->address_city }}<br>
				<strong>State:</strong> {{ $entry->applicationMedicalContact->address_state }}<br>
				<strong>ZIP:</strong> {{ $entry->applicationMedicalContact->address_zip }}<br>
				<strong>Phone:</strong> {{ $entry->applicationMedicalContact->phone }}<br>
				<strong>Relationship:</strong> {{ $entry->applicationMedicalContact->relationship }}<br>
				<strong>Medical Record:</strong>
			</div>
			<div class="col-md-3">
				<h3>Job Information</h3>
				@if (isset($entry->applicationJob->job_active))
					<strong>Employed:</strong> {{ $entry->applicationJob->job_active_summary }}<br>
					<strong>Supervisor:</strong> {{ $entry->applicationJob->job_contact_name }}<br>
					<strong>Location:</strong> {{ $entry->applicationJob->job_location }}<br>
					<strong>Phone:</strong> {{ $entry->applicationJob->job_contact_number }}<br>
					<strong>Schedule:</strong> {{ $entry->applicationJob->job_schedule }}<br>
				@else
					- No Information -
				@endif
				<br><br>
				<h3>Vehicle Registration</h3>
				@if (isset($entry->applicationJob->job_active))
					<strong>Make:</strong> {{ $entry->applicationVehicle->vehicle_make }}<br>
					<strong>Model:</strong> {{ $entry->applicationVehicle->vehicle_model }}<br>
					<strong>Color:</strong> {{ $entry->applicationVehicle->vehicle_color }}<br>
					<strong>Insurance:</strong> {{ $entry->applicationVehicle->vehicle_insurance }}<br>
					<strong>License Plate:</strong> {{ $entry->applicationVehicle->vehicle_license_plate }}<br>
					<strong>Driver's ID#:</strong> {{ $entry->applicationVehicle->vehicle_license_id }}<br>
					<strong>State Issued:</strong> {{ $entry->applicationVehicle->vehicle_state }}<br>
				@else
					- No Information -
				@endif
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>