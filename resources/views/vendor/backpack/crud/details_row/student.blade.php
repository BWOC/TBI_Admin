<div class="m-t-10 m-b-10 p-l-10 p-r-10 p-t-10 p-b-10">
	<div class="row">
		<div class="col-md-12">
			<h3>Basic Information</h3>
			<div class="col-md-4"><strong>Full Name :</strong> {{ $entry->first_name }} {{ $entry->last_name }} <br></div>
			<div class="col-md-4"><strong>Email Address :</strong> <a href="mailto:{{ $entry->student_email_address }}">{{ $entry->student_email_address }}</a><br></div>
			<div class="col-md-4"><strong>Birthdate :</strong> {{ date('D, M d, Y', strtotime($entry->birthdate)) }}<br></div>
			<br>
			<h3><br>Student Accounts</h3>

			<div class="col-md-12">
				<strong>Balance :</strong> ${{ $entry->balance->account_balance }} <br>
				<a href="/admin/expense"><h4>Expenses</h4></a>

				<?php if ($entry->expense->count()==0): ?>
					<div class="col-md-12"><p>No Expenses to display.</p></div>
				<?php else: ?>
					<div class="col-md-2"><strong>Date</strong></div>
					<div class="col-md-2"><strong>Expense Type</strong></div>
					<div class="col-md-6"><strong>Description</strong></div>
					<div class="col-md-2"><strong>Amount</strong></div>
				<?php endif; ?>


				@for ($i = 0; $i < $entry->expense->count(); $i++)
				    <!-- <br>Payment - $entry->payment-> {{ $i }} -->
						<br>
						<div class="col-md-2">
							{{ date('D, M d, Y', strtotime($entry->expense->get($i)->due_date)) }}
						</div>
						<div class="col-md-2">
							{{ $entry->expense->get($i)->expense_type }}
						</div>
						<div class="col-md-6">
							{{ $entry->expense->get($i)->description }}
						</div>
						<div class="col-md-2">
							${{ $entry->expense->get($i)->amount }}
						</div>
				@endfor
				<!-- <strong>Payments:</strong> {{ $entry->payment->pluck('payment_type') }} <br> -->
				  <br>

				<!-- {{ $entry->expense->pluck('expense_type') }} <br> -->
				<a href="/admin/payment"><h4>Payments</h4></a>

				<?php if ($entry->payment->count()==0): ?>
					<div class="col-md-12"><p>No Payments to display.</p></div>
				<?php else: ?>
					<div class="col-md-2"><strong>Date</strong></div>
					<div class="col-md-2"><strong>Payment Type</strong></div>
					<div class="col-md-6"><strong>Description</strong></div>
					<div class="col-md-2"><strong>Amount</strong></div>
				<?php endif; ?>

				@for ($i = 0; $i < $entry->payment->count(); $i++)
				    <!-- <br>Payment - $entry->payment-> {{ $i }} -->
						<br>
						<div class="col-md-2">
							{{ date('D, M d, Y', strtotime($entry->payment->get($i)->paid_date)) }}
						</div>
						<div class="col-md-2">
							{{ $entry->payment->get($i)->payment_type }}
						</div>
						<div class="col-md-6">
							{{ $entry->payment->get($i)->description }}
						</div>
						<div class="col-md-2">
							${{ $entry->payment->get($i)->amount }}
						</div>

				@endfor

				<!-- <strong>Payments:</strong> {{ $entry->payment->pluck('payment_type') }} <br> -->

			</div>
			<!-- End .colmd12 -->
			<h3>Student Life</h3>
			<div class="col-md-12">
				<a href="/admin/pass"><h4>Passes</h4></a>

				<?php if ($entry->pass->count()==0): ?>
					<div class="col-md-12"><p>No Passes to display.</p></div>
				<?php else: ?>
					<strong>Total Passes:</strong> {{ $entry->pass->count() }} |
					<strong>Academic Passes:</strong> {{ $entry->pass->where('pass_type',1)->count() }} | <strong>Event Passes:</strong> {{ $entry->pass->where('pass_type',2)->count() }} | <strong>Fun Passes:</strong> {{ $entry->pass->where('pass_type',3)->count() }} | <strong>Custom Passes:</strong> {{ $entry->pass->where('pass_type',4)->count() }}  <br><br>



					<div class="col-md-2"><strong>Duration</strong></div>
					<div class="col-md-2"><strong>Pass Type</strong></div>
					<div class="col-md-6"><strong>Remarks</strong></div>
					<div class="col-md-2"><strong>Contact</strong></div>
				<?php endif; ?>


				@for ($i = 0; $i < $entry->pass->count(); $i++)
				    <!-- <br>Payment - $entry->payment-> {{ $i }} -->
						<br>
						<div class="col-md-12">
						<div class="col-md-2">
							{{ date('M d', strtotime($entry->pass->get($i)->start_date)) }} - {{ date('M d', strtotime($entry->pass->get($i)->end_date)) }}
						</div>
						<div class="col-md-2">
							<!-- {{ $entry->pass->get($i)->pass_type }} |  -->
							{{ $entry->pass->get($i)->passtypelabel->title }}
						</div>
						<div class="col-md-6">
							{{ $entry->pass->get($i)->remarks }}
						</div>
						<div class="col-md-2">
							{{ $entry->pass->get($i)->contact }}
						</div>
						</div>
				@endfor

			</div>
			<!-- End .colmd12 -->

			<div class="col-md-12">
				<a href="/admin/absence"><h4><br>Absences</h4></a>
				<?php if ($entry->absence->count()==0): ?>
					<div class="col-md-12"><p>No Absence records to display.</p></div>
				<?php else: ?>
					<strong>Total Absences:</strong> {{ $entry->absence->count() }}
				<?php endif; ?>

				@for ($i = 0; $i < $entry->absence->count(); $i++)
				    <!-- <br>Payment - $entry->payment-> {{ $i }} -->

						<div class="col-md-12">
							{{ date('D, M d, Y', strtotime($entry->absence->get($i)->date)) }} <br>
						</div>

				@endfor
			</div>
			<!-- End .colmd12 -->
			<!-- <strong>Student Passes:</strong> {{ $entry->pass->pluck('pass_type') }} <br> -->
			<!-- <strong>Student Absences:</strong> {{ $entry->absence }}<br> -->

		</div>
	</div>
</div>
<div class="clearfix"></div>
