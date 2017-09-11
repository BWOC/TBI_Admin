<div class="m-t-10 m-b-10 p-l-10 p-r-10 p-t-10 p-b-10">
	<div class="row">
		<div class="col-md-12 details-row">
			<div class="col-md-2">
				<img class="reg_profile_photo" src="{{ $entry->applicationGeneral->photo }}" />
			</div>
			<div class="col-md-4">
				<h3>Personal Information</h3>
				<strong>Full Name:</strong> {{ $entry->applicant->first_name }} {{ $entry->applicationGeneral->middle_name }} {{ $entry->applicant->last_name }}<br>
				<strong>DOB:</strong> @php echo date('m\/d\/Y',strtotime($entry->applicant->birthdate)); @endphp<br>
				<strong>Age:</strong> @php $dateOfBirth = $entry->applicant->birthdate; $today = date("Y-m-d"); $diff = date_diff(date_create($dateOfBirth), date_create($today)); echo $diff->format('%y'); @endphp<br>
				<strong>Gender:</strong> {{ $entry->applicationGeneral->gender }}<br><br>
				<h3>Emergency Contact</h3>
				<strong>Name:</strong> {{ $entry->applicationMedicalContact->medical_contact_full_name }}<br>
				<strong>Address:</strong> {{ $entry->applicationMedicalContact->address_street }}<br>
				<strong>City:</strong> {{ $entry->applicationMedicalContact->address_city }}<br>
				<strong>State:</strong> {{ $entry->applicationMedicalContact->address_state }}<br>
				<strong>ZIP:</strong> {{ $entry->applicationMedicalContact->address_zip }}<br>
				<strong>Phone:</strong> {{ $entry->applicationMedicalContact->phone }}<br>
				<strong>Relationship:</strong> {{ $entry->applicationMedicalContact->relationship }}<br><br>
				<h3>Insurance Information</h3>
				<strong>Company:</strong> {{ $entry->applicationMedicalInsurance->company }}<br>
				<strong>Policy Holder Name:</strong> {{ $entry->applicationMedicalInsurance->holder_name }}<br>
				<strong>Policy Holder Birthdate:</strong> @php echo date('m\/d\/Y',strtotime($entry->applicationMedicalInsurance->holder_birthdate)); @endphp<br>
				<strong>Policy or Group #:</strong> {{ $entry->applicationMedicalInsurance->policy_number }}<br>
				<strong>Insurance Company Phone:</strong> {{ $entry->applicationMedicalInsurance->phone }}<br><br>
			</div>
			<div class="col-md-6">
				<h3>Medical Information</h3>
				<strong>Allergies (food, medicine, plant, animal, or insect):</strong> {{ $entry->applicationMedicalConditions->allergies }}<br>
				<strong>Asthma:</strong> {{ $entry->applicationMedicalConditions->asthma }}<br>
				<strong>Diabetes:</strong> {{ $entry->applicationMedicalConditions->diabetes }}<br>
				<strong>Heart disease or defect:</strong> {{ $entry->applicationMedicalConditions->heart }}<br>
				<strong>Bleeding or clotting disorder:</strong> {{ $entry->applicationMedicalConditions->bleeding }}<br>
				<strong>Hypertension:</strong> {{ $entry->applicationMedicalConditions->hypertension }}<br>
				<strong>Back or Joint Pain:</strong> {{ $entry->applicationMedicalConditions->back }}<br>
				<strong>Stomach or Intestinal infection or other condition:</strong>  {{ $entry->applicationMedicalConditions->stomach }}<br>
				<strong>Epilepsy or Seizures:</strong> {{ $entry->applicationMedicalConditions->epilepsy }}<br>
				<strong>Depression:</strong>  {{ $entry->applicationMedicalConditions->depression }}<br>
				<strong>Suicidal Thoughts:</strong> {{ $entry->applicationMedicalConditions->suicidal }}<br>
				<strong>HIV Virus (AIDS):</strong> {{ $entry->applicationMedicalConditions->hiv }}<br>
				<strong>Sexual Transmitted Disease:</strong> {{ $entry->applicationMedicalConditions->sexual }}<br>
				<strong>Frequent or Current Infections:</strong> {{ $entry->applicationMedicalConditions->infections }}<br> 
				<strong>Chronic or recurring illness:</strong> {{ $entry->applicationMedicalConditions->cancer }}<br> 
				<strong>Other:</strong> {{ $entry->applicationMedicalConditions->other }}<br>
				<strong>Explanations:</strong> {{ $entry->applicationMedicalConditions->explanations }}<br>
				<hr>
				<strong>Hospitalization:</strong> {{ $entry->applicationMedical->hospitalization }}<br>
				<strong>Explanation:</strong> {{ $entry->applicationMedical->hospitalization_explain }}<br>
				<strong>Operations:</strong> {{ $entry->applicationMedical->operations }}<br>
				<strong>Activities:</strong> {{ $entry->applicationMedical->activities }}<br>
				<strong>Medications:</strong> {{ $entry->applicationMedical->medications }}<br>
				<strong>Dietary Restrictions:</strong> {{ $entry->applicationMedical->diet }}<br><br>
				@if (isset($entry->applicationImmunization->immunization_record))
				<a href="{{ $entry->applicationImmunization->immunization_record }}" target="_blank">Download Immunization Record</a>
				@endif
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>