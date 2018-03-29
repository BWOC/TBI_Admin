<div class="m-t-10 m-b-10 p-l-10 p-r-10 p-t-10 p-b-10 ">
	<div class="row">
		<div class="col-md-12">
			<div class="card-header clearfix">
				<div class="my-5 clearfix">
					<div class="col-md-4">
						<h4 class=""><b>Student</b></h4>
					</div>
					<!-- ./col-md-4 -->
					<div class="col-md-8">
						<h4><b>Applicant Information</b></h4>
					</div>
					<!-- ./col-md-8 -->
				</div>
				<!-- ./card-title -->
			</div>
			<div class="card-content clearfix">
				<div class="my-5">
					<!-- ./card-header -->
					<?php if (!empty($entry->applicationgeneral->id)): ?>
						<!-- {{ $entry->applicationgeneral->photo }} -->
						<!-- <div class="col-md-4">
							<img src="{{ $entry->applicationgeneral->photo }}">
						</div> -->
						<div class="col-md-4">
							<div class="card card-profile">
								<?php
									$profilepicture = $entry->applicationgeneral->photo;

									if(@file_get_contents($profilepicture,0,NULL,0,1))
									{

									}
									else
									{
										$profilepicture = str_replace("https://texasbibleinstitute.org/", "http://tbinetwork.wpengine.com/", $profilepicture);
										if(@file_get_contents($profilepicture,0,NULL,0,1)) {

										} else {
											$profilepicture = "http://127.0.0.1:8000/assets/img/tbilogo.png";
										}

									}
								?>
								<div class="card-avatar">
									<img src="{{ $profilepicture }}">
								</div>
								<!-- ./card-avatar -->
								<div class="card-content">
									<h6 class="category text-gray"> {{ $entry->applicationgeneral->gender }} | {{ date('D M d, Y', strtotime($entry->applicant->birthdate)) }} </h6>
									<h4 class="card-title"> <b>{{ $entry->applicant->last_name }}</b> <i>{{ $entry->applicationgeneral->middle_name }}</i> {{ $entry->applicant->first_name }}</h4>
									<a href="mailto:{{ $entry->applicant->student_email_address }}">{{ $entry->applicant->student_email_address }}</a>
									<p class="description">{{ $entry->applicationgeneral->phone_number }}</p>
								</div>
								<!-- ./card-content -->
								<div class="card-footer">
									<div class="stats">
										 <b>Application ID</b> {{ $entry->applicant->id }} | <b>Student ID</b> {{ $entry->applicant->applicant_id }}
									</div>
									<!-- <div class="pull-right ">
										<i class="material-icons">place</i>
										{{ $entry->applicationgeneral->address_city }}, {{ $entry->applicationgeneral->address_state }}
									</div> -->

								</div>
								<!-- ./card-footer -->
							</div>
							<!-- ./card -->
							<div class="card card-stats">
								<div class="card-header" data-background-color="red">
                    <i class="material-icons">local_hospital</i>
                </div>
								<div class="card-content">
									<p class="description">MEDICAL INSURANCE</p>
									<h4 class="card-title"> {{ $entry->applicationmedicalinsurance->holder_name }}</h4>
									<p class="text-danger">{{ $entry->applicationmedicalinsurance->holder_birthdate }}</p>
									<h6 class="category"><b> {{ $entry->applicationmedicalinsurance->company }} </b></h6>
								</div>
								<!-- ./card-content -->
								<div class="card-footer">
									<div class="">
										 <b>Policy #</b> {{ $entry->applicationmedicalinsurance->policy_number }}
									</div>
									<div class="pull-right stats">
										<i class="material-icons">phone</i>
										{{ $entry->applicationmedicalinsurance->phone }}
									</div>

								</div>
								<!-- ./card-footer -->
							</div>
							<!-- ./card -->
							<div class="card card-stats">
								<div class="card-header" data-background-color="blue">
                    <i class="material-icons">hotel</i>
                </div>
								<div class="card-content">
									<p class="description">DORM INFO</p>
									<h2 class="card-title"> {{ $entry->applicationdorm->dorm_building }} DORM</h2>
									<h5 class="text-info">ROOM #{{ $entry->applicationdorm->room_number }}</h5>
									<h6 class="category"><b> {{ $entry->applicationdorm->dorm_notes }} </b></h6>
									<p class="card-title"><b>DRIVER'S LICENSE #</b> {{ $entry->applicationvehicle->vehicle_license_id }}</p>
								</div>
								<!-- ./card-content -->
								<div class="card-footer">

									<div class="stats">
										<i class="material-icons">local_taxi</i>
										{{ $entry->applicationvehicle->vehicle_color }} {{ $entry->applicationvehicle->vehicle_model }} {{ $entry->applicationvehicle->vehicle_make }} | {{ $entry->applicationvehicle->vehicle_license_plate }}
									</div>

								</div>
								<!-- ./card-footer -->
							</div>
							<!-- ./card -->
							<div class="card card-stats">
								<div class="card-header" data-background-color="orange">
                    <i class="material-icons">report_problem</i>
                </div>
								<div class="card-content">
									<p class="description">EMERGENCY CONTACT</p>
									<h3 class="card-title"> {{ $entry->applicationmedicalcontact->last_name }} {{ $entry->applicationmedicalcontact->first_name }} </h3>
									<p class="text-warning">{{ $entry->applicationmedicalcontact->phone }}</p>
									<h6 class="category text-gray"> {{ $entry->applicationmedicalcontact->relationship }} </h6>
								</div>
								<!-- ./card-content -->
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">place</i>
										 {{ $entry->applicationmedicalcontact->address_street }}, {{ $entry->applicationmedicalcontact->address_city }} {{ $entry->applicationmedicalcontact->address_state }} {{ $entry->applicationmedicalcontact->address_zip }}
									</div>

								</div>
								<!-- ./card-footer -->
							</div>
							<!-- ./card -->
						</div>
						<!-- ./col-md-4 -->




						<div class="secondpane col-md-8">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Registration Form - <small class="category">Please Select a Tab</small></h4>

								</div>
								<!-- ./card-header -->
								<div class="card-content">
									<ul class="nav nav-pills nav-pills-danger">
	                  <li class="">
								      <a data-toggle="tab" href="#registrationgeneral">General</a>
									  </li>
									  <li>
									      <a data-toggle="tab" href="#registrationpersonal">Background</a>
									  </li>
										<li>
									      <a data-toggle="tab" href="#registrationmedical">Medical</a>
									  </li>
									  <li>
									      <a data-toggle="tab" href="#registrationmisc">More</a>
									  </li>
									</ul>
									<!-- ul./nav -->
									<div class="tab-content">

										<div class="tab-pane active" id="registrationgeneral">
											<h4 class="card-title">General</h4>
											<div class="card-content">

                        <div aria-multiselectable="true" class="panel-group" id="accordion" role="tablist">
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingOne" role="tab">
                                    <a aria-controls="collapseOne" aria-expanded="true" data-parent="#accordion" data-toggle="collapse" href="#collapseOne" role="button">
                                        <h4 class="panel-title text-danger">
                                            Personal
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </h4>
                                    </a>
                                </div>
                                <div aria-labelledby="headingOne" class="panel-collapse collapse in" id="collapseOne" role="tabpanel">
                                    <div class="panel-body">
																			<div class="row">
																				<div class="col-md-6">
																					<b>Citizenship</b><br>
																			    {{ $entry->applicationpersonal->citizenship }}<br>
																					<b>Race</b><br>
																					{{ $entry->applicationpersonal->race }} {{ $entry->applicationpersonal->race_other }}<br>
																					<b>English Speaker</b><br>
																					{{ $entry->applicationpersonal->language_english }} {{ $entry->applicationpersonal->language_other }}<br>
																					<b>Saved</b><br>
																					{{ $entry->applicationchurch->saved }}<br>
																					<b>Religion</b><br>
																					{{ $entry->applicationchurch->religion }}
																				</div>
																				<div class="col-md-6">
																					<b>Address</b><br>
																			    {{ $entry->applicationbackground->address_street_1 }} {{ $entry->applicationbackground->address_street_2 }}<br>
																					{{ $entry->applicationbackground->address_city }}, {{ $entry->applicationbackground->address_state }}<br>
																					{{ $entry->applicationbackground->address_zip }}<br>
																					{{ $entry->applicationbackground->address_country }}<br>
																					<br><b>Social Security </b><br>
																					{{ $entry->applicationgeneral->ssn }}<br><br>
																					<b>Signature</b><br>
																			    {{ $entry->applicationpersonal->student_signature_printed }} | {{ date('D M d, Y', strtotime($entry->applicationpersonal->student_signature_date)) }}
																				</div>
																			</div>
																			<br><br><b>Referred by</b><br>
																			{{ $entry->applicationgeneral->referred_by }}<br>
																			<b>Enrollment Reason</b><br>
																			{{ $entry->applicationpersonal->enrollment_reason }}<br>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingTwo" role="tab">
                                    <a aria-controls="collapseTwo" aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#generalfamily" role="button">
                                        <h4 class="panel-title text-danger">
                                            Family
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </h4>
                                    </a>
                                </div>
                                <div aria-labelledby="headingTwo" class="panel-collapse collapse" id="generalfamily" role="tabpanel">
                                    <div class="panel-body">
																				<div class="row">
																					<div class="col-md-4">
																						<b>{{ $entry->applicationparent->parent_01_type }}</b><br>
																						{{ $entry->applicationparent->parent_01_name }}
																						<br>
																						<b>Address</b><br>
																						{{ $entry->applicationparent->parent_01_address_street }}<br>
																						{{ $entry->applicationparent->parent_01_address_city }} {{ $entry->applicationparent->parent_01_address_state }}, {{ $entry->applicationparent->parent_01_address_zip }}<br>
																						<b>Home Phone</b><br>
																					  {{ $entry->applicationparent->parent_01_phone_home }}<br>
																						<b>Work Phone</b><br>
																					  {{ $entry->applicationparent->parent_01_phone_work }}<br>
																						<b>Cell Phone</b><br>
																					  {{ $entry->applicationparent->parent_01_phone_cell }}<br>
																						<a href="mailto:{{ $entry->applicationparent->parent_01_email }}">{{ $entry->applicationparent->parent_01_email }}</a><br>
																					</div>
																					<div class="col-md-4">
																						<b>{{ $entry->applicationparent->parent_02_type }}</b><br>
																					  {{ $entry->applicationparent->parent_02_name }}
																					  <br>
																					  <b>Address</b><br>
																					  {{ $entry->applicationparent->parent_02_address_street }}<br>
																					  {{ $entry->applicationparent->parent_02_address_city }} {{ $entry->applicationparent->parent_02_address_state }}, {{ $entry->applicationparent->parent_02_address_zip }}<br>
																					  <b>Home Phone</b><br>
																					  {{ $entry->applicationparent->parent_02_phone_home }}<br>
																					  <b>Work Phone</b><br>
																					  {{ $entry->applicationparent->parent_02_phone_work }}<br>
																					  <b>Cell Phone</b><br>
																					  {{ $entry->applicationparent->parent_02_phone_cell }}<br>
																					  <a href="mailto:{{ $entry->applicationparent->parent_02_email }}">{{ $entry->applicationparent->parent_02_email }}</a>


																					</div>
																					<div class="col-md-4">
																						<b>Marital Status</b><br>
																						{{ $entry->applicationpersonal->marital_status }}<br>
																						<b>Children</b><br>
																						{{ $entry->applicationpersonal->children }}<br>
																						<b>Children Ages</b><br>
																						{{ $entry->applicationpersonal->children_ages }}
																					</div>
																				</div>

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingThree" role="tab">
                                    <a aria-controls="collapseThree" aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#churchFamilySlider" role="button">
                                        <h4 class="panel-title text-danger">
                                            Church Family
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </h4>
                                    </a>
                                </div>
                                <div aria-labelledby="headingThree" class="panel-collapse collapse" id="churchFamilySlider" role="tabpanel">
                                    <div class="panel-body">
																			<div class="row">
																				<div class="col-md-4">
																					<b>Saved</b><br>
																					{{ $entry->applicationchurch->saved }}<br>
																					<b>Religion</b><br>
																					{{ $entry->applicationchurch->religion }}<br>
																					<b>Saved Time</b><br>
																					{{ $entry->applicationchurch->saved_time }}<br>
																				</div>
																				<div class="col-md-4">
																					<b>Church</b><br>
																					{{ $entry->applicationchurch->church_name }}<br>
																					<b>Church Membership</b><br>
																					{{ $entry->applicationchurch->member }}<br>
																					<b>Attendance</b><br>
																					{{ $entry->applicationchurch->attendance }}<br>
																				</div>
																				<div class="col-md-4">
																					<b>Pastor</b><br>
																					{{ $entry->applicationchurch->pastor }}<br>
																					<b>Youth Pastor</b><br>
																					{{ $entry->applicationchurch->youth_pastor }}<br>
																				</div>
																			</div>

                                    </div>
                                </div>
                            </div>
                        </div>
	                    </div>
											<div class="card-footer">
												<div class="">
													 <b>Social Security </b>{{ $entry->applicationgeneral->ssn }}
												</div>
												<div class="pull-right stats">
													<i class="material-icons">place</i>
													{{ $entry->applicationgeneral->address_street_1 }}, {{ $entry->applicationgeneral->address_street_2 }} | {{ $entry->applicationgeneral->address_city }}, {{ $entry->applicationgeneral->address_state }} | {{ $entry->applicationgeneral->address_country }}, {{ $entry->applicationgeneral->address_zip }}
												</div>

											</div>
                    </div>
										<div class="tab-pane" id="registrationpersonal">
											<h4 class="card-title">Background</h4>
											<div class="card-content">
												<div aria-multiselectable="true" class="panel-group" id="accordionbackground" role="tablist">
                          <div class="panel panel-default">
                            <div class="panel-heading" id="medicalHeadingOne" role="tab">
                                <a aria-controls="collapseOne" aria-expanded="true" data-parent="#accordionbackground" data-toggle="collapse" href="#backgroundPageOne" role="button">
                                    <h4 class="panel-title text-danger">
                                        Spiritual Background
                                        <i class="material-icons">keyboard_arrow_down</i>
                                    </h4>
                                </a>
                            </div>
														<!-- ./panel-heading -->
														<div aria-labelledby="medicalHeadingOne" class="panel-collapse collapse in" id="backgroundPageOne" role="tabpanel">
                              <div class="panel-body">
																<div class="row">
																	<div class="col-md-6">
																		<b>Church</b><br>
																		{{ $entry->applicationchurch->church_name }}<br>
																		<b>Church Membership</b><br>
																		{{ $entry->applicationchurch->member }}<br>
																		<b>Attendance</b><br>
																		{{ $entry->applicationchurch->attendance }}<br>
																		<b>Church Activities</b><br>
																		{{ $entry->applicationchurch->activities }}<br>
																		{{ $entry->applicationchurch->activities_explanation }}<br>
																	</div>
																	<!-- ./col-md-6 -->
																	<div class="col-md-6">
																		<b>Minister</b><br>
																		{{ $entry->applicationminister->first_name }} {{ $entry->applicationminister->last_name }} <br>
																		<b>Contact</b><br>
																		{{ $entry->applicationminister->phone_number }}<br>
																		 <a href="mailto:{{ $entry->applicationminister->email_address }}">{{ $entry->applicationminister->email_address }}</a><br>
																		<b>Church Pastor</b><br>
																		{{ $entry->applicationchurch->pastor }}<br>
																		<b>Youth Pastor</b><br>
																		{{ $entry->applicationchurch->youth_pastor }}<br>
																	</div>
																	<!-- ./col-md-6 -->
																</div>
																<!-- ./row -->
															</div>
															<!-- ./panel-body -->
														</div>
														<!-- ./panel-collapse -->
													</div>
													<!-- Spiritual Background ./panel -->


													<div class="panel panel-default">
                            <div class="panel-heading" id="academicHeadingOne" role="tab">
                                <a aria-controls="collapseOne" class="collapsed" aria-expanded="false" data-parent="#accordionbackground" data-toggle="collapse" href="#backgroundAcademic" role="button">
                                    <h4 class="panel-title text-danger">
                                        Academic Background
                                        <i class="material-icons">keyboard_arrow_down</i>
                                    </h4>
                                </a>
                            </div>
														<!-- ./panel-heading -->
														<div aria-labelledby="academicHeadingOne" class="panel-collapse collapse" id="backgroundAcademic" role="tabpanel">
                              <div class="panel-body">
																<div class="row">
																	<div class="col-md-6">
																		<b>{{ $entry->applicationschool->school_name }}</b><br>
																		{{ $entry->applicationschool->school_city }}, {{ $entry->applicationschool->school_state }} ({{ $entry->applicationschool->school_graduation }})<br>
																		<b>Disabilities</b><br>
																		{{ $entry->applicationschool->disabilities }}<br>
																		<b>Disabilities Explanation</b><br>
																		{{ $entry->applicationschool->disabilities_explain }}<br>
																	</div>
																	<!-- ./col-md-6 -->
																	<div class="col-md-3">
																		<b>Homeschooled</b><br>
																		{{ $entry->applicationschool->homeschooled }}<br>
																		<b>Training</b><br>
																		{{ $entry->applicationschool->training }}<br>
																		<b>Explanation</b><br>
																		{{ $entry->applicationschool->training_explain }}<br>
																	</div>
																	<!-- ./col-md-3 -->
																	<div class="col-md-3">
																		<b>Declined</b><br>
																		{{ $entry->applicationschool->declined }}<br>
																		<b>Declined Explanation</b><br>
																		{{ $entry->applicationschool->declined_explain }}
																	</div>
																	<!-- ./col-md-3 -->

																</div>
																<b>Expelled</b><br>
																{{ $entry->applicationschool->expelled }}<br>
																<b>Explanation</b><br>
																{{ $entry->applicationschool->expelled_explain }}<br>
																<!-- ./row -->
															</div>
															<!-- ./panel-body -->
														</div>
														<!-- ./panel-collapse -->
													</div>
													<!-- Academic Background ./panel -->


													<div class="panel panel-default">
															<div class="panel-heading" id="headingChallenges" role="tab">
																	<a aria-controls="collapseThree" aria-expanded="false" class="collapsed" data-parent="#accordionbackground" data-toggle="collapse" href="#backgroundpageTwo" role="button">
																			<h4 class="panel-title text-danger">
																					Challenges
																					<i class="material-icons">keyboard_arrow_down</i>
																			</h4>
																	</a>
															</div>
															<!-- ./panel-heading -->
															<div aria-labelledby="headingThree" class="panel-collapse collapse" id="backgroundpageTwo" role="tabpanel">
																	<div class="panel-body">
																		<div class="row">
																			<div class="col-md-6">
																				<b>Overcoming</b><br>
																				{{ $entry->applicationchallenges->overcoming }}<br>
																				<b>Tempted how often?</b><br>
																				{{ $entry->applicationchallenges->overcoming_tempted }}<br>
																				<b>Solutions</b><br>
																				{{ $entry->applicationchallenges->overcoming_solutions }}<br>
																				<b>Probation</b><br>
																				{{ $entry->applicationchallenges->probation }}<br>
																				<b>Probation Reason</b><br>
																				{{ $entry->applicationchallenges->probation_reason }}<br>
																				<b>Disorder</b><br>
																				{{ $entry->applicationchallenges->disorder }}<br>
																				<b>Disorder Reason</b><br>
																				{{ $entry->applicationchallenges->disorder_reason }}
																			</div>
																			<!-- ./col-md-6 -->
																			<div class="col-md-6">
																				<b>Drugs</b><br>
																				{{ $entry->applicationchallenges->drugs_type }}<br>
																				<b>Drugs State</b><br>
																				{{ $entry->applicationchallenges->drugs_state }}<br>
																				<b>Arrested?</b><br>
																				{{ $entry->applicationchallenges->arrested }}<br>
																				<b>Arrested Reason</b><br>
																				{{ $entry->applicationchallenges->arrested_reason }}<br>
																				<b>Convicted</b><br>
																				{{ $entry->applicationchallenges->conviction_reason }}
																			</div>
																			<!-- ./col-md-6 -->
																		</div>
																		<!-- ./row -->
																	</div>
																	<!-- ./panel-body -->
															</div>
															<!-- ./panel-collapse -->
													</div>
													<!-- Challenges ./panel -->

													<div class="panel panel-default">
															<div class="panel-heading" id="headingCharacter" role="tab">
																	<a aria-controls="collapseThree" aria-expanded="false" class="collapsed" data-parent="#accordionbackground" data-toggle="collapse" href="#backgroundpageThree" role="button">
																			<h4 class="panel-title text-danger">
																					Character
																					<i class="material-icons">keyboard_arrow_down</i>
																			</h4>
																	</a>
															</div>
															<!-- ./panel-heading -->
															<div aria-labelledby="headingThree" class="panel-collapse collapse" id="backgroundpageThree" role="tabpanel">
																	<div class="panel-body">
																		<div class="row">
																			<div class="col-md-3">
																				<b>Honesty</b><br>
																				{{ $entry->applicationcharacter->honesty }}<br>
																				<b>Respect</b><br>
																				{{ $entry->applicationcharacter->respect }}<br>
																				<b>Emotions</b><br>
																				{{ $entry->applicationcharacter->emotion }}<br>
																				<b>Interpersonal</b><br>
																				{{ $entry->applicationcharacter->interpersonal }}<br>
																			</div>
																			<!-- ./col-md-3 -->
																			<div class="col-md-3">
																				<b>Finances</b><br>
																				{{ $entry->applicationcharacter->finances }}<br>
																				<b>Consistency</b><br>
																				{{ $entry->applicationcharacter->consistency }}<br>
																				<b>Dependability</b><br>
																				{{ $entry->applicationcharacter->dependability }}<br>
																				<b>Work</b><br>
																				{{ $entry->applicationcharacter->work }}
																			</div>
																			<!-- ./col-md-3 -->
																			<div class="col-md-3">
																				<b>Leadership</b><br>
																				{{ $entry->applicationcharacter->leadership_ability }}<br>
																				<b>Cooperation</b><br>
																				{{ $entry->applicationcharacter->cooperation }}<br>
																				<b>Self</b><br>
																				{{ $entry->applicationcharacter->self }}<br>
																				<b>Involvement</b><br>
																				{{ $entry->applicationcharacter->involvement }}
																			</div>
																			<!-- ./col-md-3 -->
																			<div class="col-md-3">
																				<b>Leadership Potential</b><br>
																				{{ $entry->applicationcharacter->leadership_potential }}<br>
																				<b>Cleanliness</b><br>
																				{{ $entry->applicationcharacter->cleanliness }}<br>
																				<b>Parents</b><br>
																				{{ $entry->applicationcharacter->parents }}
																			</div>
																			<!-- ./col-md-3 -->
																		</div>
																		<!-- ./row -->
																	</div>
																	<!-- ./panel-body -->
															</div>
															<!-- ./panel-collapse -->
													</div>
													<!-- Character ./panel -->

												</div>
												<!-- ./panel-group -->
											</div>
											<!-- ./card-content -->
											<div class="card-footer">
												<div class="">
													 <b>Religion</b> {{ $entry->applicationchurch->religion }}
												</div>
												<div class="pull-right stats">
													<i class="material-icons">book</i>
													{{ $entry->applicationchurch->church_name }}
													<i class="material-icons">school</i>
													{{ $entry->applicationschool->school_name }}
												</div>

											</div>
											<!-- ./card-footer -->
                    </div>
										<!-- Personal Registration Tab ./tab-pane -->

										<div class="tab-pane" id="registrationmedical">
											<h4 class="card-title">Medical</h4>
											<div class="card-content">

                        <div aria-multiselectable="true" class="panel-group" id="accordionmedical" role="tablist">
                            <div class="panel panel-default">
                                <div class="panel-heading" id="medicalHeadingOne" role="tab">
                                    <a aria-controls="collapseOne" aria-expanded="true" data-parent="#accordionmedical" data-toggle="collapse" href="#medicalpageOne" role="button">
                                        <h4 class="panel-title text-danger">
                                            General Medical Information
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </h4>
                                    </a>
                                </div>
                                <div aria-labelledby="medicalHeadingOne" class="panel-collapse collapse in" id="medicalpageOne" role="tabpanel">
                                    <div class="panel-body">
																			<div class="row">
																				<div class="col-md-6">
																					<b>Hospitalizations</b><br>
																					{{ $entry->applicationmedical->hospitalization }}
																					<br><b>Explanation</b><br>
																					{{ $entry->applicationmedical->hospitalization_explain }}
																					<br><b>Operations</b><br>
																					{{ $entry->applicationmedicalcondition->operations }}
																					<br><b>Activities</b><br>
																					{{ $entry->applicationmedicalcondition->activities }}
																				</div>
																				<!-- ./col-md-6 -->
																				<div class="col-md-6">
																					<b>Medication</b><br>
																					{{ $entry->applicationmedicalcondition->medications }}
																					<br><b>Diet</b><br>
																					{{ $entry->applicationmedicalcondition->diet }}
																					<?php
																						$immunizationURL = $entry->applicationimmunization->immunization_record;

																						if(@file_get_contents($immunizationURL,0,NULL,0,1))
																						{

																						}
																						else
																						{
																							$immunizationURL = str_replace("https://texasbibleinstitute.org/", "http://tbinetwork.wpengine.com/", $immunizationURL);
																							if(@file_get_contents($immunizationURL,0,NULL,0,1)) {

																							} else {
																								$immunizationURL = "http://127.0.0.1:8000/assets/img/tbilogo.png";
																							}

																						}
																					?>

																					<br><b>Signature</b><br>
																					{{ $entry->applicationmedical->signature_printed }} | {{ date('D M d, Y', strtotime($entry->applicationmedical->signature_date)) }}
																				</div>
																				<!-- ./col-md-6 -->
																			</div>
																			<!-- ./row -->


                                    </div>
																		<!-- ./panel-body -->
                                </div>
																<!-- ./panel-collapse -->
                            </div>
														<!-- ./panel -->

														<div class="panel panel-default">
                                <div class="panel-heading" id="headingThree" role="tab">
                                    <a aria-controls="collapseThree" aria-expanded="false" class="collapsed" data-parent="#accordionmedical" data-toggle="collapse" href="#medicalpageThree" role="button">
                                        <h4 class="panel-title text-danger">
                                            Immunizations
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </h4>
                                    </a>
                                </div>
                                <div aria-labelledby="headingThree" class="panel-collapse collapse" id="medicalpageThree" role="tabpanel">
                                    <div class="panel-body">
																			<div class="row">
																				<div class="col-md-4">
																					<b>Meningococcal 1</b><br>{{ $entry->applicationimmunization->meningococcal_dose_01 }}<br>
																					<b>Meningococcal 2</b><br>{{ $entry->applicationimmunization->meningococcal_dose_02 }}<br>
																					<b>HEPA 1</b><br>{{ $entry->applicationimmunization->hep_a_dose_01 }}<br>
																					<b>HEPA 2</b><br>{{ $entry->applicationimmunization->hep_a_dose_02 }}<br>
																					<b>HEPB 1</b><br>{{ $entry->applicationimmunization->hep_b_dose_01 }}<br>
																					<b>HEPB 2</b><br>{{ $entry->applicationimmunization->hep_b_dose_02 }}<br>
																					<b>HEPB 3</b><br>{{ $entry->applicationimmunization->hep_b_dose_03 }}<br>

																				</div>
																				<div class="col-md-4">
																					<b>Dtap 1</b><br>{{ $entry->applicationimmunization->dtap_dose_01 }}<br>
																					<b>Dtap 2</b><br>{{ $entry->applicationimmunization->dtap_dose_02 }}<br>
																					<b>Dtap 3</b><br>{{ $entry->applicationimmunization->dtap_dose_03 }}<br>
																					<b>VARICELL 1</b><br>{{ $entry->applicationimmunization->varicella_dose_01 }}<br>
																					<b>VARICELL 2</b><br>{{ $entry->applicationimmunization->varicella_dose_02 }}<br>
																					<b>VARICELL 3</b><br>{{ $entry->applicationimmunization->varicella_dose_03 }}<br>
																				</div>
																				<div class="col-md-4">
																					<b>Polio 1</b><br>{{ $entry->applicationimmunization->polio_dose_01 }}<br>
																					<b>Polio 2</b><br>{{ $entry->applicationimmunization->polio_dose_02 }}<br>
																					<b>Polio 3</b><br>{{ $entry->applicationimmunization->polio_dose_03 }}<br>
																					<b>Polio 4</b><br>{{ $entry->applicationimmunization->polio_dose_04 }}<br>
																					<b>MMR 1</b><br>{{ $entry->applicationimmunization->mmr_dose_01 }}<br>
																					<b>MMR 2</b><br>{{ $entry->applicationimmunization->mmr_dose_02 }}<br>
																				</div>
																			</div>
																			<br><b>Immunization Record</b><br>
																			<a href="{{$immunizationURL}}" target="_blank">Preview Record</a>
																			<br><b>Other</b><br>
																			{{ $entry->applicationmedicalcondition->other }}
																			<br><b>Explanations</b><br>
																			{{ $entry->applicationmedicalcondition->explanations }}
                                    </div>
                                </div>
																<!-- ./panel-collapse -->
                            </div>
														<!-- ./panel -->

                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingTwo" role="tab">
                                    <a aria-controls="collapseTwo" aria-expanded="false" class="collapsed" data-parent="#accordionmedical" data-toggle="collapse" href="#medicalpageTwo" role="button">
                                        <h4 class="panel-title text-danger">
                                            Medical Conditions
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </h4>
                                    </a>
                                </div>
                                <div aria-labelledby="headingTwo" class="panel-collapse collapse" id="medicalpageTwo" role="tabpanel">
                                    <div class="panel-body">
																			<div class="row">
																			  <div class="col-md-4">
																			    <b>Allergies</b>
																			    {{ $entry->applicationmedicalcondition->allergies }}
																			    <br>
																			    <b>Asthma</b>
																			    {{ $entry->applicationmedicalcondition->asthma }}
																			    <br>
																			    <b>Diabetes</b>
																			    {{ $entry->applicationmedicalcondition->diabetes }}
																			    <br>
																			    <b>Heart</b>
																			    {{ $entry->applicationmedicalcondition->heart }}
																			    <br>
																			    <b>Bleeding</b>
																			    {{ $entry->applicationmedicalcondition->bleeding }}
																			    <br>
																			    <b>Hypertension</b>
																			    {{ $entry->applicationmedicalcondition->hypertension }}

																			  </div>
																			  <div class="col-md-4">

																			    <b>Back</b>
																			    {{ $entry->applicationmedicalcondition->back }}
																			    <br>
																			    <b>Stomach</b>
																			    {{ $entry->applicationmedicalcondition->stomach }}
																			    <br>
																			    <b>TB</b>
																			    {{ $entry->applicationmedicalcondition->tb }}
																			    <br>
																			    <b>Disabilities</b>
																			    {{ $entry->applicationmedicalcondition->disabilities }}
																			    <br>
																			    <b>HIV</b>
																			    {{ $entry->applicationmedicalcondition->hiv }}
																			    <br>
																			    <b>STDs</b>
																			    {{ $entry->applicationmedicalcondition->sexual }}




																			  </div>
																			  <div class="col-md-4">
																			    <b>Infections</b>
																			    {{ $entry->applicationmedicalcondition->infections }}
																			    <br>
																			    <b>Cancer</b>
																			    {{ $entry->applicationmedicalcondition->cancer }}
																			    <br>
																			    <b>Mononucleosis</b>
																			    {{ $entry->applicationmedicalcondition->mononucleosis }}
																			    <br>
																			    <b>Epilepsy</b>
																			    {{ $entry->applicationmedicalcondition->epilepsy }}
																			    <br>
																			    <b>Depression</b>
																			    {{ $entry->applicationmedicalcondition->depression }}
																			    <br>
																			    <b>Suicidal</b>
																			    {{ $entry->applicationmedicalcondition->suicidal }}
																			  </div>
																			</div>
																			<br><br><b>Other</b><br>
																			{{ $entry->applicationmedicalcondition->other }}
																			<br><b>Explanations</b><br>
																			{{ $entry->applicationmedicalcondition->explanations }}
                                    </div>
                                </div>
                            </div>
														<!-- ./panel -->
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingThree" role="tab">
                                    <a aria-controls="collapseThree" aria-expanded="false" class="collapsed" data-parent="#accordionmedical" data-toggle="collapse" href="#medicalpageFour" role="button">
                                        <h4 class="panel-title text-danger">
                                            Additional Conditions
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </h4>
                                    </a>
                                </div>
                                <div aria-labelledby="headingThree" class="panel-collapse collapse" id="medicalpageFour" role="tabpanel">
                                    <div class="panel-body">
																			<b>Other</b><br>
																			{{ $entry->applicationmedicalcondition->other }}
																			<br><b>Explanations</b><br>
																			{{ $entry->applicationmedicalcondition->explanations }}
                                    </div>
                                </div>
                            </div>
                        </div>
	                    </div>
											<div class="card-footer">
												<div class="">
													 <b> {{ $entry->applicationmedicalinsurance->company }} </b>| {{ $entry->applicationmedicalinsurance->holder_name }}
												</div>
												<div class="pull-right stats">
													<i class="material-icons">local_hospital</i>
													<b>Policy Number </b>{{ $entry->applicationmedicalinsurance->policy_number }}
												</div>

											</div>
											<!-- ./card-footer -->
                    </div>
										<!-- Medical Registration ./tab-pane -->

										<div class="tab-pane" id="registrationmisc">
										  <h4 class="card-title">More</h4>
										  <div class="card-content">
										    <div aria-multiselectable="true" class="panel-group" id="accordionmisc" role="tablist">
										      <div class="panel panel-default">
										        <div class="panel-heading" id="medicalHeadingOne" role="tab">
										            <a aria-controls="collapseOne" aria-expanded="true" data-parent="#accordionmisc" data-toggle="collapse" href="#miscPageOne" role="button">
										                <h4 class="panel-title text-danger">
										                    Employment History
										                    <i class="material-icons">keyboard_arrow_down</i>
										                </h4>
										            </a>
										        </div>
										        <!-- ./panel-heading -->
										        <div aria-labelledby="medicalHeadingOne" class="panel-collapse collapse in" id="miscPageOne" role="tabpanel">
										          <div class="panel-body">
										            <div class="row">
										              <div class="col-md-6">
										                <b> {{ $entry->applicationemployment->employer_01_name }} </b><br>
										                {{ $entry->applicationemployment->employer_01_duties }}
										              </div>
										              <!-- ./col-md-6 -->
										              <div class="col-md-6">
																		<b> {{ $entry->applicationemployment->employer_02_name }} </b><br>
										                {{ $entry->applicationemployment->employer_02_duties }}
										              </div>
										              <!-- ./col-md-6 -->
										            </div>
										            <!-- ./row -->
										          </div>
										          <!-- ./panel-body -->
										        </div>
										        <!-- ./panel-collapse -->
										      </div>
										      <!-- ./panel -->
										      <div class="panel panel-default">
										          <div class="panel-heading" id="headingChallenges" role="tab">
										              <a aria-controls="collapseThree" aria-expanded="false" class="collapsed" data-parent="#accordionmisc" data-toggle="collapse" href="#miscPageTwo" role="button">
										                  <h4 class="panel-title text-danger">
										                      Liability Form
										                      <i class="material-icons">keyboard_arrow_down</i>
										                  </h4>
										              </a>
										          </div>
										          <!-- ./panel-heading -->
										          <div aria-labelledby="headingThree" class="panel-collapse collapse" id="miscPageTwo" role="tabpanel">
										              <div class="panel-body">
										                <div class="row">
										                  <div class="col-md-6">
										                    <b>Overcoming</b><br>
										                    {{ $entry->applicationchallenges->overcoming }}<br>
										                    <b>Tempted how often?</b><br>
										                    {{ $entry->applicationchallenges->overcoming_tempted }}<br>
										                    <b>Solutions</b><br>
										                    {{ $entry->applicationchallenges->overcoming_solutions }}<br>
										                    <b>Probation</b><br>
										                    {{ $entry->applicationchallenges->probation }}<br>
										                    <b>Probation Reason</b><br>
										                    {{ $entry->applicationchallenges->probation_reason }}<br>
										                    <b>Disorder</b><br>
										                    {{ $entry->applicationchallenges->disorder }}<br>
										                    <b>Disorder Reason</b><br>
										                    {{ $entry->applicationchallenges->disorder_reason }}
										                  </div>
										                  <!-- ./col-md-6 -->
										                  <div class="col-md-6">
										                    <b>Drugs</b><br>
										                    {{ $entry->applicationchallenges->drugs_type }}<br>
										                    <b>Drugs State</b><br>
										                    {{ $entry->applicationchallenges->drugs_state }}<br>
										                    <b>Arrested?</b><br>
										                    {{ $entry->applicationchallenges->arrested }}<br>
										                    <b>Arrested Reason</b><br>
										                    {{ $entry->applicationchallenges->arrested_reason }}<br>
										                    <b>Convicted</b><br>
										                    {{ $entry->applicationchallenges->conviction_reason }}
										                  </div>
										                  <!-- ./col-md-6 -->
										                </div>
										                <!-- ./row -->
										              </div>
										              <!-- ./panel-body -->
										          </div>
										          <!-- ./panel-collapse -->
										      </div>
										      <!-- ./panel -->

										      <div class="panel panel-default">
										          <div class="panel-heading" id="headingCharacter" role="tab">
										              <a aria-controls="collapseThree" aria-expanded="false" class="collapsed" data-parent="#accordionmisc" data-toggle="collapse" href="#miscPageThree" role="button">
										                  <h4 class="panel-title text-danger">
										                      Financial Form
										                      <i class="material-icons">keyboard_arrow_down</i>
										                  </h4>
										              </a>
										          </div>
										          <!-- ./panel-heading -->
										          <div aria-labelledby="headingThree" class="panel-collapse collapse" id="miscPageThree" role="tabpanel">
										              <div class="panel-body">
										                <div class="row">
										                  <div class="col-md-6">
										                    <b>Signature</b><br>
										                  </div>
										                  <!-- ./col-md-3 -->
										                  <div class="col-md-6">
										                    <b>Finances</b><br>
										                    {{ $entry->applicationcharacter->finances }}<br>
										                    <b>Consistency</b><br>
										                    {{ $entry->applicationcharacter->consistency }}<br>
										                    <b>Dependability</b><br>
										                    {{ $entry->applicationcharacter->dependability }}<br>
										                    <b>Work</b><br>
										                    {{ $entry->applicationcharacter->work }}
										                  </div>
										                  <!-- ./col-md-3 -->
										                </div>
										                <!-- ./row -->
										              </div>
										              <!-- ./panel-body -->
										          </div>
										          <!-- ./panel-collapse -->
										      </div>
										      <!-- ./panel -->

										    </div>
										    <!-- ./panel-group -->
										  </div>
										  <!-- ./card-content -->
										  <div class="card-footer">
										    <div class="">
										       <b>Religion</b> {{ $entry->applicationchurch->religion }}
										    </div>
										    <div class="pull-right stats">
										      <i class="material-icons">book</i>
										      {{ $entry->applicationchurch->church_name }}
										    </div>

										  </div>
										  <!-- ./card-footer -->
										</div>
										<!-- More - Registration ./tab-pane -->
									</div>
								</div>
								<!-- ./card-content -->
							</div>
							<!-- ./card -->
						</div>

					<?php endif; ?>
					</div>
			</div>
			<!-- ./card-content -->
		</div>
		<!-- ./col-md-12 -->
	</div>
	<!-- ./row -->
</div>
<!-- ./m-t-10 m-b-10 p-l-10 p-r-10 p-t-10 p-b-10 -->
<div class="clearfix"></div>
