<?php
/*
Template Name: Non Modal Register
*/
?>
<?php

get_header ();

$values = get_post_custom ( $post->ID );

$userkey = get_option ( 'api_user_key' );
$siteURL = site_url ();
?>
<script type="text/javascript">
	var siteurl = "<?php bloginfo('siteurl');?>";
</script>

<div class="content">
<div id="main">
<?php

	if (have_posts ()) :
		the_post ();
		?>
	<!-- Start Overview Page-->
	<div class="pageTitleWrapper">
		<div class="pageTitle container">
			<h2 class="overviewPageTitle <?php echo str_replace(" ", "", get_the_title());?>PageTitle">
				<?php the_title();?>
			</h2>
		</div>
	</div>
	<article id="mainContent" class="splitLayout singleColumnPage">
		<div class="container">
			<div class="rightSplit  grid-1-1">
				<div class="mainStream postContent pageContent grid-1-1">

					<?php the_content();?>

					<?php /*
					<script type="text/javascript">
						$(document).ready(function() {
						if ($('.tcssoUsingJS').length > 0) {
						  var regCookie = app.isLoggedIn();
						  if (regCookie) window.location.replace("/");
						}
						});
					</script>
					*/ ?>

					<div id="register">
						<div class="content">
							<h2>Register Using An Existing Account</h2>

							<div id="socials">
						  		<a class="register-facebook" href="javascript:;"><span class="animeButton shareFacebook"><span class="shareFacebookHover animeButtonHover"></span></span></a>
						  		<a class="register-google" href="javascript:;"><span class="animeButton shareGoogle"><span class="shareGoogleHover animeButtonHover"></span></span></a>
						  		<a class="register-twitter" href="javascript:;"><span class="animeButton shareTwitter"><span class="shareTwitterHover animeButtonHover"></span></span></a>
						  		<a class="register-github" href="javascript:;"><span class="animeButton shareGithub"><span class="shareGithubHover animeButtonHover"></span></span></a>

							  	<p>
							  		Using an existing account is quick and easy.<br/>
									Select the account you would like to use and we'll do the rest for you.
								</p>

								<div class="clear"></div>
							</div>
							<!-- END .socials -->


							<h2>Or Register Using Your Email</h2>

							<form class="register" id="registerForm">
								<p class="row">
							  		<span class="socialUnavailableErrorMessage">Social profile already in use. Please use another profile or register below</span>
								</p>

								<p class="row">
									<label>First Name</label>
									<input type="text" class="name firstName" placeholder="First Name"/>
									<span class="err1">Required field</span>
									<span class="err2">Maximum length is 64 characters</span>
									<!--Bugfix I-107905: add error message for invalid characters-->
									<span class="err3">First Name contains invalid characters</span>
									<span class="err4">First Name cannot consist solely of punctuation</span>
									<span class="err5">First Name is invalid</span>
									<span class="valid"></span>
								</p>

								<p class="row">
									<label>Last Name</label>
									<input type="text" class="name lastName" placeholder="Last Name"/>
									<span class="err1">Required field</span>
									<span class="err2">Maximum length is 64 characters</span>
									<!--Bugfix I-107905: add error message for invalid characters-->
									<span class="err3">Last Name contains invalid characters</span>
									<span class="err4">Last Name cannot consist solely of punctuation</span>
									<span class="err5">Last Name is invalid</span>
									<span class="valid"></span>
								</p>

								<p class="row">
									<label>Username</label>
									<input type="text" class="handle name" placeholder="Username"/>
									<span class="err1">Required field</span>
									<span class="err2">Username already exists or is invalid</span>
									<span class="err3">Username cannot contain a space</span>
									<span class="err4">Username cannot consist solely of punctuation</span>
									<span class="err5">Username contains invalid characters</span>
									<span class="err6">Username cannot start with "admin"</span>
									<span class="err7">Username must be between 2 and 15 characters long</span>
									<span class="valid"></span>
								</p>

								<p class="row">
								<label>Country</label>
								<select id="selCountry" class="applyCustomSelect" name="user.country">
								  <option value="">Please Select</option>
								  <option value="Afghanistan">Afghanistan</option>
								  <option value="Albania">Albania</option>
								  <option value="Algeria">Algeria</option>
								  <option value="American Samoa">American Samoa</option>
								  <option value="Andorra">Andorra</option>
								  <option value="Angola">Angola</option>
								  <option value="Anguilla">Anguilla</option>
								  <option value="Antarctica">Antarctica</option>
								  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
								  <option value="Argentina">Argentina</option>
								  <option value="Armenia">Armenia</option>
								  <option value="Aruba">Aruba</option>
								  <option value="Australia">Australia</option>
								  <option value="Austria">Austria</option>
								  <option value="Azerbaijan">Azerbaijan</option>
								  <option value="Bahamas">Bahamas</option>
								  <option value="Bahrain">Bahrain</option>
								  <option value="Bangladesh">Bangladesh</option>
								  <option value="Barbados">Barbados</option>
								  <option value="Belarus">Belarus</option>
								  <option value="Belgium">Belgium</option>
								  <option value="Belize">Belize</option>
								  <option value="Benin">Benin</option>
								  <option value="Bermuda">Bermuda</option>
								  <option value="Bhutan">Bhutan</option>
								  <option value="Bolivia">Bolivia</option>
								  <option value="Bosnia &amp; Herzegowina">Bosnia &amp; Herzegowina</option>
								  <option value="Botswana">Botswana</option>
								  <option value="Bouvet Island">Bouvet Island</option>
								  <option value="Brazil">Brazil</option>
								  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
								  <option value="Brunei Darussalam">Brunei Darussalam</option>
								  <option value="Bulgaria">Bulgaria</option>
								  <option value="Burkina Faso">Burkina Faso</option>
								  <option value="Burundi">Burundi</option>
								  <option value="Cambodia">Cambodia</option>
								  <option value="Cameroon">Cameroon</option>
								  <option value="Canada">Canada</option>
								  <option value="Cape Verde">Cape Verde</option>
								  <option value="Cayman Islands">Cayman Islands</option>
								  <option value="Central African Republic">Central African Republic</option>
								  <option value="Chad">Chad</option>
								  <option value="Chile">Chile</option>
								  <option value="China">China</option>
								  <option value="Christmas Island">Christmas Island</option>
								  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
								  <option value="Colombia">Colombia</option>
								  <option value="Comoros">Comoros</option>
								  <option value="Congo">Congo</option>
								  <option value="Cook Islands">Cook Islands</option>
								  <option value="Costa Rica">Costa Rica</option>
								  <option value="Cote D'Ivoire">Cote D'Ivoire</option>
								  <option value="Croatia">Croatia</option>
								  <option value="Cuba">Cuba</option>
								  <option value="Cyprus">Cyprus</option>
								  <option value="Czech Republic">Czech Republic</option>
								  <option value="Denmark">Denmark</option>
								  <option value="Djibouti">Djibouti</option>
								  <option value="Dominica">Dominica</option>
								  <option value="Dominican Republic">Dominican Republic</option>
								  <option value="East Timor">East Timor</option>
								  <option value="Ecuador">Ecuador</option>
								  <option value="Egypt">Egypt</option>
								  <option value="El Salvador">El Salvador</option>
								  <option value="Equatorial Guinea">Equatorial Guinea</option>
								  <option value="Eritrea">Eritrea</option>
								  <option value="Estonia">Estonia</option>
								  <option value="Ethiopia">Ethiopia</option>
								  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
								  <option value="Faroe Islands">Faroe Islands</option>
								  <option value="Fiji">Fiji</option>
								  <option value="Finland">Finland</option>
								  <option value="France">France</option>
								  <option value="French Guiana">French Guiana</option>
								  <option value="French Polynesia">French Polynesia</option>
								  <option value="French Southern Territories">French Southern Territories</option>
								  <option value="Gabon">Gabon</option>
								  <option value="Gambia">Gambia</option>
								  <option value="Georgia">Georgia</option>
								  <option value="Germany">Germany</option>
								  <option value="Ghana">Ghana</option>
								  <option value="Gibraltar">Gibraltar</option>
								  <option value="Greece">Greece</option>
								  <option value="Greenland">Greenland</option>
								  <option value="Grenada">Grenada</option>
								  <option value="Guadeloupe">Guadeloupe</option>
								  <option value="Guam">Guam</option>
								  <option value="Guatemala">Guatemala</option>
								  <option value="Guinea">Guinea</option>
								  <option value="Guinea-Bissau">Guinea-Bissau</option>
								  <option value="Guyana">Guyana</option>
								  <option value="Haiti">Haiti</option>
								  <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
								  <option value="Honduras">Honduras</option>
								  <option value="Hong Kong">Hong Kong</option>
								  <option value="Hungary">Hungary</option>
								  <option value="Iceland">Iceland</option>
								  <option value="India">India</option>
								  <option value="Indonesia">Indonesia</option>
								  <option value="Iran">Iran</option>
								  <option value="Iraq">Iraq</option>
								  <option value="Ireland">Ireland</option>
								  <option value="Israel">Israel</option>
								  <option value="Italy">Italy</option>
								  <option value="Jamaica">Jamaica</option>
								  <option value="Japan">Japan</option>
								  <option value="Jordan">Jordan</option>
								  <option value="Kazakhstan">Kazakhstan</option>
								  <option value="Kenya">Kenya</option>
								  <option value="Kiribati">Kiribati</option>
								  <option value="Kuwait">Kuwait</option>
								  <option value="Kyrgyzstan">Kyrgyzstan</option>
								  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
								  <option value="Latvia">Latvia</option>
								  <option value="Lebanon">Lebanon</option>
								  <option value="Lesotho">Lesotho</option>
								  <option value="Liberia">Liberia</option>
								  <option value="Libya">Libya</option>
								  <option value="Liechtenstein">Liechtenstein</option>
								  <option value="Lithuania">Lithuania</option>
								  <option value="Luxembourg">Luxembourg</option>
								  <option value="Macau">Macau</option>
								  <option value="Macedonia">Macedonia</option>
								  <option value="Madagascar">Madagascar</option>
								  <option value="Malawi">Malawi</option>
								  <option value="Malaysia">Malaysia</option>
								  <option value="Maldives">Maldives</option>
								  <option value="Mali">Mali</option>
								  <option value="Malta">Malta</option>
								  <option value="Marshall Islands">Marshall Islands</option>
								  <option value="Martinique">Martinique</option>
								  <option value="Mauritania">Mauritania</option>
								  <option value="Mauritius">Mauritius</option>
								  <option value="Mayotte">Mayotte</option>
								  <option value="Mexico">Mexico</option>
								  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
								  <option value="Moldova, Republic of">Moldova, Republic of</option>
								  <option value="Monaco">Monaco</option>
								  <option value="Mongolia">Mongolia</option>
								  <option value="Montenegro">Montenegro</option>
								  <option value="Montserrat">Montserrat</option>
								  <option value="Morocco">Morocco</option>
								  <option value="Mozambique">Mozambique</option>
								  <option value="Myanmar">Myanmar</option>
								  <option value="Namibia">Namibia</option>
								  <option value="Nauru">Nauru</option>
								  <option value="Nepal">Nepal</option>
								  <option value="Netherlands">Netherlands</option>
								  <option value="Netherlands Antilles">Netherlands Antilles</option>
								  <option value="New Caledonia">New Caledonia</option>
								  <option value="New Zealand">New Zealand</option>
								  <option value="Nicaragua">Nicaragua</option>
								  <option value="Niger">Niger</option>
								  <option value="Nigeria">Nigeria</option>
								  <option value="Niue">Niue</option>
								  <option value="Norfolk Island">Norfolk Island</option>
								  <option value="North Korea">North Korea</option>
								  <option value="Northern Mariana Islands">Northern Mariana Islands</option>
								  <option value="Norway">Norway</option>
								  <option value="Oman">Oman</option>
								  <option value="Pakistan">Pakistan</option>
								  <option value="Palau">Palau</option>
								  <option value="Palestine">Palestine</option>
								  <option value="Panama">Panama</option>
								  <option value="Papua New Guinea">Papua New Guinea</option>
								  <option value="Paraguay">Paraguay</option>
								  <option value="Peru">Peru</option>
								  <option value="Philippines">Philippines</option>
								  <option value="Pitcairn">Pitcairn</option>
								  <option value="Poland">Poland</option>
								  <option value="Portugal">Portugal</option>
								  <option value="Puerto Rico">Puerto Rico</option>
								  <option value="Qatar">Qatar</option>
								  <option value="Reunion">Reunion</option>
								  <option value="Romania">Romania</option>
								  <option value="Russia">Russia</option>
								  <option value="Rwanda">Rwanda</option>
								  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
								  <option value="Saint Lucia">Saint Lucia</option>
								  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
								  <option value="Samoa">Samoa</option>
								  <option value="San Marino">San Marino</option>
								  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
								  <option value="Saudi Arabia">Saudi Arabia</option>
								  <option value="Senegal">Senegal</option>
								  <option value="Serbia">Serbia</option>
								  <option value="Seychelles">Seychelles</option>
								  <option value="Sierra Leone">Sierra Leone</option>
								  <option value="Singapore">Singapore</option>
								  <option value="Slovakia">Slovakia</option>
								  <option value="Slovenia">Slovenia</option>
								  <option value="Solomon Islands">Solomon Islands</option>
								  <option value="Somalia">Somalia</option>
								  <option value="South Africa">South Africa</option>
								  <option value="South Georgia and The S.Sandwich Is.">South Georgia and The S.Sandwich Is.</option>
								  <option value="South Korea">South Korea</option>
								  <option value="Spain">Spain</option>
								  <option value="Sri Lanka">Sri Lanka</option>
								  <option value="St. Helena">St. Helena</option>
								  <option value="St. Kitts and Nevis">St. Kitts and Nevis</option>
								  <option value="St. Lucia">St. Lucia</option>
								  <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
								  <option value="St. Vincent and Grenadines">St. Vincent and Grenadines</option>
								  <option value="Sudan">Sudan</option>
								  <option value="Suriname">Suriname</option>
								  <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
								  <option value="Swaziland">Swaziland</option>
								  <option value="Sweden">Sweden</option>
								  <option value="Switzerland">Switzerland</option>
								  <option value="Syria">Syria</option>
								  <option value="Taiwan">Taiwan</option>
								  <option value="Tajikistan">Tajikistan</option>
								  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
								  <option value="Thailand">Thailand</option>
								  <option value="Togo">Togo</option>
								  <option value="Tokelau">Tokelau</option>
								  <option value="Tonga">Tonga</option>
								  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
								  <option value="Tunisia">Tunisia</option>
								  <option value="Turkey">Turkey</option>
								  <option value="Turkmenistan">Turkmenistan</option>
								  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
								  <option value="Tuvalu">Tuvalu</option>
								  <option value="Uganda">Uganda</option>
								  <option value="Ukraine">Ukraine</option>
								  <option value="United Arab Emirates">United Arab Emirates</option>
								  <option value="United Kingdom">United Kingdom</option>
								  <option value="United States">United States</option>
								  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
								  <option value="Uruguay">Uruguay</option>
								  <option value="Uzbekistan">Uzbekistan</option>
								  <option value="Vanuatu">Vanuatu</option>
								  <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
								  <option value="Venezuela">Venezuela</option>
								  <option value="Viet Nam">Viet Nam</option>
								  <option value="Virgin Islands (British)">Virgin Islands (British)</option>
								  <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
								  <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
								  <option value="Western Sahara">Western Sahara</option>
								  <option value="Yemen">Yemen</option>
								  <option value="Zaire">Zaire</option>
								  <option value="Zambia">Zambia</option>
								  <option value="Zimbabwe">Zimbabwe</option>
								</select>
								<span class="err1">Required field</span>
								<span class="valid"></span>
							</p>
							<p class="row">
							  <label>Email</label>
							  <input type="text" class="email" placeholder="Email"/>
							  <span class="err1">Required field</span>
							  <span class="err2">Invalid email address</span>
							  <span class="err3">Email already in use</span>
							  <span class="valid"></span>
							</p>

							<p class="row">
							  <label>Password</label>
							  <input type="password" class="pwd" placeholder="Password"/>
							  <span class="err1">Required field</span>
							  <span class="err2">Password strength is weak</span>
							  <span class="err3">Password cannot contain an apostrophe</span>
							  <span class="err4">Password must be between 7 and 30 characters</span>
							  <span class="err5">Password must not contain only spaces</span>
							  <span class="valid">Strong</span>
							</p>

							<p class="row info lSpace">
									  <span class="strength">
										<span class="field"></span>
										<span class="field"></span>
										<span class="field"></span>
										<span class="field"></span>
									  </span>
							  7 characters with letters, numbers, &amp; symbols
							</p>

							<p class="row">
							  <label>Password Confirmation</label>
							  <input type="password" class="confirm" placeholder="Password Confirmation"/>
							  <span class="err1">Required field</span>
							  <span class="err2">Password confirmation different from above field</span>
							  <span class="valid"></span>
							</p>

							<p class="row lSpace">
							  <label><input type="checkbox">I agree to the <a target="_blank" href="/community/how-it-works/terms/">terms of
								  service</a> and <a target="_blank" href="/community/how-it-works/privacy-policy/">privacy policy</a></label>
							  <span class="err1">You must agree to the terms</span>
							  <span class="err2">You must agree to the terms</span>
							</p>

							</form>
						<!-- END .form register -->
						<div class="clear"></div>
						<p class="submitBtn">
						  <a href="javascript:;" class="btn btnSubmit">Sign Up</a>
						</p>
						</div>
					</div><!-- END #register -->

					<?php endif; wp_reset_query();?>

					<!-- /.pageContent -->

				</div>
				<!-- /.mainStream -->

				<div class="clear"></div>
			</div>
			<!-- /.rightSplit -->
		</div>
	</article>
	<!-- /#mainContent -->
<?php get_footer(); ?>
