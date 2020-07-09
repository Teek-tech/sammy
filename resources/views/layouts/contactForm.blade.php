<section class="ftco-appointment ftco-section img" style="background-image: url(images/bg_2.jpg);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 half ftco-animate">
				<h2 class="mb-4">Send a Message &amp; Get in touch!</h2>
				<form action="#" class="appointment">

				@csrf
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Your Name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<div class="form-field">
									<div class="select-wrap">
										<div class="icon"><span class="fa fa-chevron-down"></span></div>
										<select name="" id="" class="form-control">
											<option value="">Services</option>
											<option value="">Business Training</option>
											<option value="">Life coaching</option>
											<option value="">Corporate Training</option>
											<option value="">Speaking Engagements</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="Send message" class="btn new-btn">
							</div>
						</div>
					</div>
			</form>
			</div>
		</div>
	</div>
    </section>