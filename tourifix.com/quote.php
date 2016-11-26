<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/favicon.ico">
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<!-- 
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
     -->
	<script type="text/javascript" src="assets/js/moment.js"></script>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/carousel.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">

	<link href="https://silviomoreto.github.io/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">

<style type="text/css">
    body{font-family:Verdana;}
    
    #display{font-size:smaller}
	.notes{font-weight:bold;border:none 0px black;font-size:10px;text-align:center;padding:6px;}

	.ui-dialog.my-dialog .ui-dialog-contain { margin-top: 0 }	
</style>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
	<!-- <link href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" rel="stylesheet"> -->
	<!-- <link href="../themes/allc.min.css" rel="stylesheet"> -->
	<link href="themes/jquery.mobile.icons.min.css" rel="stylesheet">
	    
	<link rel="stylesheet" href="http://cdn.jtsage.com/datebox/1.4.5/jqm-datebox-1.4.5.min.css" />	
	<script type="text/javascript" src="http://cdn.jtsage.com/datebox/1.4.5/jqm-datebox-1.4.5.core.min.js"></script>
    <script type="text/javascript" src="http://cdn.jtsage.com/datebox/1.4.5/jqm-datebox-1.4.5.mode.calbox.min.js"></script>
	        
<title>Trip Quote Request</title>
<!-- <title>Check your Servers</title> -->
  </head>
  <body>
  <!-- NAV -->

<?php
include('nav.php');
?>

<!-- NAV -->

<!-- BODY -->

      <div class="container">

      <div id="regform" class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">

<div class="panel-group">
  <div class="panel panel-default">
		<div class="panel-heading">Quotation Request Form</div>
		<div class="panel-body" style="text-align:left;">

     <form class="form-signin">
        <h2 class="form-signin-heading">Trip Quote</h2>

<!-- <div class="form-group">
    <label for="number_of_night">Number of nights :</label>
    <select name="number_of_night" id="number_of_night" class="form-control">
		<option value="" selected="selected">Number of nights</option>
		<option value="1">1 night</option>
		<option value="2">2 nights</option>
		<option value="3">3 nights</option>
		<option value="4">4 nights</option>
    </select>
</div>
<div class="form-group">
    <label for="number_of_pax">Number of Adults:</label>
	<select name="number_of_pax" id="number_of_pax" class="form-control">
		<option value="" selected="selected">Number of Adults</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="10+">10+</option>
    </select>
</div>

<div class="form-group">

 <fieldset data-role="controlgroup" data-type="horizontal">
        <b>Age group of adults:</b>
        <input name="cb_group_a" id="cb_group_a" type="checkbox">
        <label for="cb_group_a">18-30</label>
        <input name="cb_group_b" id="cb_group_b" type="checkbox">
        <label for="cb_group_b">31-50</label>
        <input name="cb_group_c" id="cb_group_c" type="checkbox">
        <label for="cb_group_c">51-64</label>
        <input name="cb_group_d" id="cb_group_d" type="checkbox">
        <label for="cb_group_d">65+</label>
    </fieldset>
</div>



	<div class="form-group"><fieldset data-role="controlgroup" data-type="horizontal">
        <b>Accomodation:</b>
        <input name="radRating" id="radRating5" value="5" checked="checked" type="radio">
        <label for="radRating5">5 Stars</label>
        <input name="radRating" id="radRating4" value="4" type="radio">
        <label for="radRating4">4 Stars</label>
        <input name="radRating" id="radRating3" value="3" type="radio">
        <label for="radRating3">3 Stars</label>
    </fieldset></div> -->

    <div class="form-group"><label for="first_name">First Name:</label><input class="form-control" name="first_name" id="first_name" value="" type="text" placeholder="First Name"></div>
    <div class="form-group"><label for="last_name">Last Name:</label><input class="form-control" name="last_name" id="last_name" value="" type="text" placeholder="Last Name" ></div>
    <div class="form-group"><label for="email_address">Email Address:</label><input class="form-control" name="email_address" id="email_address" value="" type="text" placeholder="Email Address" ></div>
	<div class="form-group"><label for="phone_number">Phone Number:</label><input class="form-control" name="phone_number" id="phone_number" value="" type="text" placeholder="Phone Number" ></div>
	<div class="form-group">
	<label for="country">Country of residence</label>
	<select class="form-control" id="country" 	name="country" 	class="field select addr" 	tabindex="14" data-mini="true"			>
									<option value="" selected="selected">Country of residence</option>
									<option value="United States" >United States</option>
									<option value="United Kingdom" >United Kingdom</option>
									<option value="Australia" >Australia</option>
									<option value="Canada" >Canada</option>
									<option value="France" >France</option>
									<option value="New Zealand" >New Zealand</option>
									<option value="India" >India</option>
									<option value="Brazil" >Brazil</option>
									<option value="----" >----</option>
									<option value="Afghanistan" >Afghanistan</option>
									<option value="Åland Islands" >Åland Islands</option>
									<option value="Albania" >Albania</option>
									<option value="Algeria" >Algeria</option>
									<option value="American Samoa" >American Samoa</option>
									<option value="Andorra" >Andorra</option>
									<option value="Angola" >Angola</option>
									<option value="Anguilla" >Anguilla</option>
									<option value="Antarctica" >Antarctica</option>
									<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
									<option value="Argentina" >Argentina</option>
									<option value="Armenia" >Armenia</option>
									<option value="Aruba" >Aruba</option>
									<option value="Austria" >Austria</option>
									<option value="Azerbaijan" >Azerbaijan</option>
									<option value="Bahamas" >Bahamas</option>
									<option value="Bahrain" >Bahrain</option>
									<option value="Bangladesh" >Bangladesh</option>
									<option value="Barbados" >Barbados</option>
									<option value="Belarus" >Belarus</option>
									<option value="Belgium" >Belgium</option>
									<option value="Belize" >Belize</option>
									<option value="Benin" >Benin</option>
									<option value="Bermuda" >Bermuda</option>
									<option value="Bhutan" >Bhutan</option>
									<option value="Bolivia" >Bolivia</option>
									<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
									<option value="Botswana" >Botswana</option>
									<option value="British Indian Ocean Territory" >British Indian Ocean Territory</option>
									<option value="Brunei Darussalam" >Brunei Darussalam</option>
									<option value="Bulgaria" >Bulgaria</option>
									<option value="Burkina Faso" >Burkina Faso</option>
									<option value="Burundi" >Burundi</option>
									<option value="Cambodia" >Cambodia</option>
									<option value="Cameroon" >Cameroon</option>
									<option value="Cape Verde" >Cape Verde</option>
									<option value="Cayman Islands" >Cayman Islands</option>
									<option value="Central African Republic" >Central African Republic</option>
									<option value="Chad" >Chad</option>
									<option value="Chile" >Chile</option>
									<option value="China" >China</option>
									<option value="Colombia" >Colombia</option>
									<option value="Comoros" >Comoros</option>
									<option value="Democratic Republic of the Congo" >Democratic Republic of the Congo</option>
									<option value="Republic of the Congo" >Republic of the Congo</option>
									<option value="Cook Islands" >Cook Islands</option>
									<option value="Costa Rica" >Costa Rica</option>
									<option value="C&ocirc;te d'Ivoire" >C&ocirc;te d'Ivoire</option>
									<option value="Croatia" >Croatia</option>
									<option value="Cuba" >Cuba</option>
									<option value="Cyprus" >Cyprus</option>
									<option value="Czech Republic" >Czech Republic</option>
									<option value="Denmark" >Denmark</option>
									<option value="Djibouti" >Djibouti</option>
									<option value="Dominica" >Dominica</option>
									<option value="Dominican Republic" >Dominican Republic</option>
									<option value="East Timor" >East Timor</option>
									<option value="Ecuador" >Ecuador</option>
									<option value="Egypt" >Egypt</option>
									<option value="El Salvador" >El Salvador</option>
									<option value="Equatorial Guinea" >Equatorial Guinea</option>
									<option value="Eritrea" >Eritrea</option>
									<option value="Estonia" >Estonia</option>
									<option value="Ethiopia" >Ethiopia</option>
									<option value="Faroe Islands" >Faroe Islands</option>
									<option value="Fiji" >Fiji</option>
									<option value="Finland" >Finland</option>
									<option value="Gabon" >Gabon</option>
									<option value="Gambia" >Gambia</option>
									<option value="Georgia" >Georgia</option>
									<option value="Germany" >Germany</option>
									<option value="Ghana" >Ghana</option>
									<option value="Gibraltar" >Gibraltar</option>
									<option value="Greece" >Greece</option>
									<option value="Grenada" >Grenada</option>
									<option value="Guatemala" >Guatemala</option>
									<option value="Guinea" >Guinea</option>
									<option value="Guinea-Bissau" >Guinea-Bissau</option>
									<option value="Guyana" >Guyana</option>
									<option value="Haiti" >Haiti</option>
									<option value="Honduras" >Honduras</option>
									<option value="Hong Kong" >Hong Kong</option>
									<option value="Hungary" >Hungary</option>
									<option value="Iceland" >Iceland</option>
									<option value="Indonesia" >Indonesia</option>
									<option value="Iran" >Iran</option>
									<option value="Iraq" >Iraq</option>
									<option value="Ireland" >Ireland</option>
									<option value="Israel" >Israel</option>
									<option value="Italy" >Italy</option>
									<option value="Jamaica" >Jamaica</option>
									<option value="Japan" >Japan</option>
									<option value="Jordan" >Jordan</option>
									<option value="Kazakhstan" >Kazakhstan</option>
									<option value="Kenya" >Kenya</option>
									<option value="Kiribati" >Kiribati</option>
									<option value="North Korea" >North Korea</option>
									<option value="South Korea" >South Korea</option>
									<option value="Kuwait" >Kuwait</option>
									<option value="Kyrgyzstan" >Kyrgyzstan</option>
									<option value="Laos" >Laos</option>
									<option value="Latvia" >Latvia</option>
									<option value="Lebanon" >Lebanon</option>
									<option value="Lesotho" >Lesotho</option>
									<option value="Liberia" >Liberia</option>
									<option value="Libya" >Libya</option>
									<option value="Liechtenstein" >Liechtenstein</option>
									<option value="Lithuania" >Lithuania</option>
									<option value="Luxembourg" >Luxembourg</option>
									<option value="Macedonia" >Macedonia</option>
									<option value="Madagascar" >Madagascar</option>
									<option value="Malawi" >Malawi</option>
									<option value="Malaysia" >Malaysia</option>
									<option value="Maldives" >Maldives</option>
									<option value="Mali" >Mali</option>
									<option value="Malta" >Malta</option>
									<option value="Marshall Islands" >Marshall Islands</option>
									<option value="Mauritania" >Mauritania</option>
									<option value="Mauritius" >Mauritius</option>
									<option value="Mexico" >Mexico</option>
									<option value="Micronesia" >Micronesia</option>
									<option value="Moldova" >Moldova</option>
									<option value="Monaco" >Monaco</option>
									<option value="Mongolia" >Mongolia</option>
									<option value="Montenegro" >Montenegro</option>
									<option value="Morocco" >Morocco</option>
									<option value="Mozambique" >Mozambique</option>
									<option value="Myanmar" >Myanmar</option>
									<option value="Namibia" >Namibia</option>
									<option value="Nauru" >Nauru</option>
									<option value="Nepal" >Nepal</option>
									<option value="Netherlands" >Netherlands</option>
									<option value="Netherlands Antilles" >Netherlands Antilles</option>
									<option value="Nicaragua" >Nicaragua</option>
									<option value="Niger" >Niger</option>
									<option value="Nigeria" >Nigeria</option>
									<option value="Norway" >Norway</option>
									<option value="Oman" >Oman</option>
									<option value="Pakistan" >Pakistan</option>
									<option value="Palau" >Palau</option>
									<option value="Palestine" >Palestine</option>
									<option value="Panama" >Panama</option>
									<option value="Papua New Guinea" >Papua New Guinea</option>
									<option value="Paraguay" >Paraguay</option>
									<option value="Peru" >Peru</option>
									<option value="Philippines" >Philippines</option>
									<option value="Poland" >Poland</option>
									<option value="Portugal" >Portugal</option>
									<option value="Puerto Rico" >Puerto Rico</option>
									<option value="Qatar" >Qatar</option>
									<option value="Romania" >Romania</option>
									<option value="Russia" >Russia</option>
									<option value="Rwanda" >Rwanda</option>
									<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
									<option value="Saint Lucia" >Saint Lucia</option>
									<option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
									<option value="Samoa" >Samoa</option>
									<option value="San Marino" >San Marino</option>
									<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
									<option value="Saudi Arabia" >Saudi Arabia</option>
									<option value="Senegal" >Senegal</option>
									<option value="Serbia" >Serbia</option>
									<option value="Seychelles" >Seychelles</option>
									<option value="Sierra Leone" >Sierra Leone</option>
									<option value="Singapore" >Singapore</option>
									<option value="Slovakia" >Slovakia</option>
									<option value="Slovenia" >Slovenia</option>
									<option value="Solomon Islands" >Solomon Islands</option>
									<option value="Somalia" >Somalia</option>
									<option value="South Africa" >South Africa</option>
									<option value="Spain" >Spain</option>
									<option value="Sri Lanka" >Sri Lanka</option>
									<option value="Sudan" >Sudan</option>
									<option value="Suriname" >Suriname</option>
									<option value="Swaziland" >Swaziland</option>
									<option value="Sweden" >Sweden</option>
									<option value="Switzerland" >Switzerland</option>
									<option value="Syria" >Syria</option>
									<option value="Taiwan" >Taiwan</option>
									<option value="Tajikistan" >Tajikistan</option>
									<option value="Tanzania" >Tanzania</option>
									<option value="Thailand" >Thailand</option>
									<option value="Togo" >Togo</option>
									<option value="Tonga" >Tonga</option>
									<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
									<option value="Tunisia" >Tunisia</option>
									<option value="Turkey" >Turkey</option>
									<option value="Turkmenistan" >Turkmenistan</option>
									<option value="Tuvalu" >Tuvalu</option>
									<option value="Uganda" >Uganda</option>
									<option value="Ukraine" >Ukraine</option>
									<option value="United Arab Emirates" >United Arab Emirates</option>
									<option value="United States Minor Outlying Islands" >United States Minor Outlying Islands</option>
									<option value="Uruguay" >Uruguay</option>
									<option value="Uzbekistan" >Uzbekistan</option>
									<option value="Vanuatu" >Vanuatu</option>
									<option value="Vatican City" >Vatican City</option>
									<option value="Venezuela" >Venezuela</option>
									<option value="Vietnam" >Vietnam</option>
									<option value="Virgin Islands, British" >Virgin Islands, British</option>
									<option value="Virgin Islands, U.S." >Virgin Islands, U.S.</option>
									<option value="Yemen" >Yemen</option>
									<option value="Zambia" >Zambia</option>
									<option value="Zimbabwe" >Zimbabwe</option>
							</select>	
	</div>

      <!--   <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> -->


    

        <div class="checkbox">
          <label>
            <input type="checkbox" value="cb-agree"> Yes! I'd like to receive Tourifix's newsletter on travel news &amp; specials.
          </label>
          <p>By clicking "Get My Trip Quoted" below, I agree to the Terms of Use and Privacy Policy.<!-- Terms &amp; Conditions --></p>
        </div>
        <button class="btn btn-lg btn-primary" type="submit">Get My Trip Quoted</button>
		<button id="breset" class="btn btn-lg" type="reset">Reset</button>

      </form>

		</div>
		<div class="panel-footer">&copy; 2016 Tourifix</div>
  </div>
</div>

	</div>
	<div class="col-md-2"></div>
  </div>

</div>
      <!-- FOOTER -->
    <div class="footer-fix1">

      <?php
      include('footer.php');
      ?>

    </div>

<!-- BODY -->
 
 <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!--<script src="../assets/js/vendor/holder.min.js"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="https://silviomoreto.github.io/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
  </body>
</html>