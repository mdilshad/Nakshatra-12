<?php 
$msg='';
if (isset($_POST['submit'])) 
{
	include('src/response.suggestion.php');
}
?>
<!DOCTYPE  html>
<html>
	<head>
		<meta charset="utf-8">
		<title>NAKSHATRA '12 | The All India Annual MCA Meet</title>
		<?php include('header.php')?>
		
			
			<!-- MAIN -->
			<div id="main">
				<!-- wrapper-main -->
				<div class="wrapper">
					
					<!-- content -->
					<div id="content">
						
						<!-- title -->
						<div id="page-title">
							<span class="title">Give Your Suggestion</span>
							<span class="subtitle"></span>
						</div>
						<!-- ENDS title -->
							
						<!-- column (left)-->
						<div class="one-column">
							<!-- form -->
							<?php
							if($msg == '') 
							 include('form.php');?>
							 <?php echo $msg;?>
							<p id="success" class="success">Thanks for your Suggestion.</p>
							<!-- ENDS form -->
						</div>
						<!-- ENDS column -->
						
						<!-- column (right)-->
						<div class="one-column">
							
						</div>
						<!-- ENDS column -->							
		
					</div>
					<!-- ENDS content -->

				</div>
				<!-- ENDS wrapper-main -->
			</div>
			<!-- ENDS MAIN -->
			
			

			
				<!-- FOOTER -->
			<div id="footer">
				<!-- wrapper-footer -->
				<div class="wrapper">
					
				</div>
				<!-- ENDS wrapper-footer -->
			</div>
			<!-- ENDS FOOTER -->
		
		
			<!-- Bottom -->
			<div id="bottom">
				<!-- wrapper-bottom -->
				<div class="wrapper">
					<div id="bottom-text">NAKSHATRA 2012 all rights reserved. <a href="http://www.nitc.ac.in">National Institute Of Technology Calicut</a> </div>
					<!-- Social -->
					<ul class="social ">
						<li><a href="https://www.facebook.com/pages/Nakshatra/340712882619726" target="_blank" class="poshytip  facebook" title="Become a fan"></a></li>
						<li><a href="https://twitter.com/#!/Nakshatra_NITC" target="_blank" class="poshytip twitter" title="Follow our tweets"></a></li>
						<li><a href="http://www.youtube.com/user/NakshatraTheMCAMeet" target="_blank" class="poshytip youtube" title="View our videos"></a></li>
					</ul>
					<!-- ENDS Social -->
					<div id="to-top" class="poshytip" title="To top"></div>
				</div>
				<!-- ENDS wrapper-bottom -->
			</div>
			<!-- ENDS Bottom -->
	
	</body>
</html>
