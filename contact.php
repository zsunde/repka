<?php 
	print '
	<h1>Kontakt Forma</h1>
	<div id="contact">
		<iframe src="https://maps.google.com/maps?q=%20Ulica%20grada%20Vukovara%20269a&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		<form action="https://hns-cff.hr/" id="contact_form" name="contact_form" method="POST">
			<label for="fname">Ime *</label>
			<input type="text" id="fname" name="firstname" placeholder="Tvoje ime.." required>
			
			<label for="lname">Prezime *</label>
			<input type="text" id="lname" name="lastname" placeholder="Tvoje prezime.." required>
				
			<label for="email">E-mail *</label>
			<input type="email" id="email" name="email" placeholder="Tvoja e-mail adresa.." required>

			<label for="country">Država</label>
			<select id="country" name="country">
				<option value="">Please select</option>
				<option value="BE">Belgium</option>
				<option value="HR" selected>Croatia</option>
				<option value="LU">Luxembourg</option>
				<option value="HU">Hungary</option>
			</select>

			<label for="subject">Sadržaj</label>
			<textarea id="subject" name="subject" placeholder="Sadržaj..." style="height:200px"></textarea>

			<input type="submit" value="Pošalji">
		</form>
	</div>';
?>