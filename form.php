<h2>Suggestion Form</h2>
							<script type="text/javascript" src="js/form-validation.js"></script>
							<form id="contactForm" action="suggestion.php" method="post">
								<fieldset>
									<div>
										<label>Name</label>
										<input name="name"  id="name" type="text" class="form-poshytip" title="Enter your full name" />
									</div>
									<div>
										<label>Email</label>
										<input name="emailId"  id="email" type="text" class="form-poshytip" title="Enter your email address" />
									</div>
									<div>
										<label>Suggestion</label>
										<textarea  name="msg"  id="comments" rows="5" cols="20" class="form-poshytip" title="Enter your comments"></textarea>
									</div>
									
									
									
									<p><input type="submit" value="SUBMIT" name="submit" id="submit" /></p>
								</fieldset>
								<p id="error" class="warning">Message</p>
							</form>
