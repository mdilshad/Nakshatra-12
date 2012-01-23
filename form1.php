<h2>Registration Form</h2>
							<script type="text/javascript" src="js/register.validation.js"></script>
							<form id="contactForm" action="Register.php" method="post">
								<fieldset>
									<div>
										<label>Team Lead Name</label>
										<input name="teamLeader"  id="name" type="text" class="form-poshytip" title="Enter your full name" />
									</div>
									<div>
										<label>College Name</label>
										<input name="collegeName"  id="cname" type="text" class="form-poshytip" title="Enter your college name" />
									</div>
									<div>
										<label>Email</label>
										<input name="emailId"  id="email" type="text" class="form-poshytip" title="Enter your email address" />
									</div>
									<div>
										<label>Contact no.</label>
										<input name="phoneNo"  id="phone" type="text" class="form-poshytip" title="Enter your contact Number" />
									</div>
									<div>
										<label>Password</label>
										<input name="passwd"  id="passwd" type="password" class="form-poshytip" title="Enter your password" />
									</div>
									<div>
										<label>Confirm Password</label>
										<input name="cpasswd"  id="cpasswd" type="password" class="form-poshytip" title="Re-enter your password" />
									</div>
									
									
									
									<p><input type="submit" value="SUBMIT" name="submit" id="submit" /></p>
								</fieldset>
								<p id="error" class="warning">Message</p>
							</form>
