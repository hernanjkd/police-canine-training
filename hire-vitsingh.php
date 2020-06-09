<?php
include('wp/wp-load.php');
include('wp/wp-content/themes/twentyten/header.php');
?>

<table id="tmain">
<tr><td id="tleft">

		<div id="container"> 
			<div id="content" role="main"> 
 
 
				<div id="post-13" class="post-13 page type-page hentry"> 
											<h1 class="entry-title">Hire Vit Singh &#038; EMCTTS Now</h1> 
					
					<div class="entry-content"> 
						<p>Congratulations on your decision to hire Vit Singh and EMCTTS as your police canine trainers, seminar and workshop hosts, defensive tactics trainers, and personal defense readiness coach&#8217;s.</p> 
<p>This is also the page to use if you need assistance of any kind from Vit and his incredible ‘No Hassle’ team.</p> 
<p>Vit and his fellow law enforcement trainers work hard to respond to most correspondence within 48 hours (typically within 24 hours). Please don’t be discouraged if it takes longer to get back to you.</p> 
<p>The Best (and Fastest) Way to Get a Quick Reply is by Email.To help us respond to you quickly, please provide the following information:</p> 
									
</div><!-- .entry-content --> 
				</div><!-- #post-## --> 
			</div><!-- #content --> 
 


<form id="hire_form">
<table>
<tr><td>
First Name <span>*</span>
</td><td>
<input type="text" name="firstname" />
</td></tr>

<tr><td>
Last Name <span>*</span>
</td><td>
<input type="text" name="lastname" />
</td></tr>

<tr><td>
E-Mail Address <span>*</span>
</td><td>
<input type="text" name="email" />
</td></tr>

<tr><td>
Telephone Number <span>*</span>
</td><td>
<input type="text" name="telephone" />
</td></tr>

<tr><td>
Fax Number
</td><td>
<input type="text" name="fax" />
</td></tr>

<tr><td>
This is regarding...
</td><td>
<input type="checkbox" name="lmcat" value="LEA/MIL Canine Training" />
LEA/MIL Canine Training <br />
<input type="checkbox" name="psckt" value="Private Security/Civilian K9 Training" />
Private Security/Civilian K9 Training <br />
<input type="checkbox" name="lmcot" value="LEA/MIL Combative Training" />
LEA/MIL Combative Training <br />
<input type="checkbox" name="pcpdt" value="Private Civilian Personal Defense Training" />
Private Civilian Personal Defense Training <br />
<input type="checkbox" name="se" value="Speaking Engagement" />
Speaking Engagement <br />
<input type="checkbox" name="cc" value="Consulting/Coaching" />
Consulting/Coaching
</td></tr>

<tr><td>
Subject
</td><td>
<input type="text" name="subject" />
</td></tr>

<tr><td class="align-top">
Comments/Questions
</td><td>
<textarea name="comments"></textarea>
</td></tr>
</table>

<div id="alert_message"></div>
 <div>
<input type="button" id="submit_hire_form" value="C o n t a c t    Us    N o w !" />
 </div>
</form>


		</div><!-- #container --> 



</td><td id="tright">
<?php 
include('wp/wp-content/themes/twentyten/sidebar-signup.php');
?>
</td></tr>
</table> <!-- tmain -->

<?php
include('wp/wp-content/themes/twentyten/footer.php');
?>

<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript">

var thank_you = '<div class="thank-you"><b>Thank You For Contacting Us!</b><br />'+
'Your e-mail has been sent to our offices and a member of our team will get back to you shortly.<br /><br />'+
'<img src="http://policecaninetraining.com/wp/wp-content/uploads/2010/12/vit-signiture.jpg" /><br />'+
'Vit Singh<br />'+
'EMCTTS</div>';
var incomplete = 'The form is incomplete, make sure to fill in the fields with <span>*</span>'
function verify() {
	if ($('input[name="firstname"]').val() == '')
		return false
	if ($('input[name="lastname"]').val() == '')
		return false
	if ($('input[name="email"]').val() == '')
		return false
	if ($('input[name="telephone"]').val() == '')
		return false
	return true		
}

$('#hire_form td:even').css('width', '170px');

$('#submit_hire_form').click( function() {
    if ( verify() ) {
	$.ajax({
	type: 'POST',
	url: 'scripts/hire_form.php',
	data: $('#hire_form').serialize(),
	success: function() {
		$('#hire_form').html(thank_you);
		}
	});
    }
    else
	$('#alert_message').html(incomplete);
});

</script>