<?php

require get_template_directory() . '/inc/vendor/Mobile_Detect.php';
require get_template_directory() . '/inc/cleanup.php';
require get_template_directory() . '/inc/function-admin.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/theme-support.php';
require get_template_directory() . '/inc/custom-post-type.php';
require get_template_directory() . '/inc/walker.php';
require get_template_directory() . '/inc/ajax.php';
require get_template_directory() . '/inc/shortcodes.php';
require get_template_directory() . '/inc/widgets.php';

// Shortcode for homepage content

add_shortcode('home-cont', 'home_cont');
function home_cont()
{
    return '
    <!-- Section 1 (start) -->
    <section class="text-justify">
        <!-- Main slider (start) -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="' . get_stylesheet_directory_uri('template_url') . '/img/Bild2.jpg" width="632px" height="348px" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="' . get_stylesheet_directory_uri('template_url') . '/img/Bild3.jpg" width="632px" height="348px" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="' . get_stylesheet_directory_uri('template_url') . '/img/Bild4.jpg" width="632px" height="348px" alt="">
                </div>
                <!-- ... (use in case of pagination) -->
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
    
            <!-- If we need navigation buttons -->
            <!-- <div class="swiper-button-prev"></div> -->
            <!-- <div class="swiper-button-next"></div> -->
    
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
        <!-- Main slider (end) -->
    
        <!-- Content (start) -->
        <div class="mt-32 mb-24 p-10">
            <h2 class="font-bold">
                Himedi meets doctors of first-class hospitals in Korea on behlf of you
            </h2>
            <p class="text-4xl pt-40 text-gray-600">
                We lead you to world-best medical staff and medical remedies
            </p>
        </div>
        <!-- Content (end) -->
    
        <!-- Arrow icon (start) -->
        <img class="mx-auto pt-40 arrowAnimate" src="' . get_stylesheet_directory_uri('template_url') . '/img/arrow.png" alt="arrow icon">
        <!-- Arrow icon (end) -->
    
    </section>
    <!-- Section 1 (end) -->
    <!-- Section 2 (start) -->
<section class="mt-20 w-full text-center">
	<!-- Chart (start) -->
	<div class="chartsWrap bg-gray-100 text-justify">
		<div class="chart0 active p-10">
			<p class="text-3xl font-bold">
				The survival rate of patients with one of the 5 major cancers compared to that in the U.S.
			</p>
			<img class="mx-auto w-full" src="' . get_stylesheet_directory_uri('template_url') . '/img/chart1.png" alt="">
			<div class="flex justify-between p-5 text-gray-600">
				<span>Gastric Cancer</span>
				<span>Colon Cancer</span>
				<span>Breast Cancer</span>
				<span>Liver Cancer</span>
				<span>Cervical Cancer</span>
			</div>
		</div>
		<div class="chart1">
			<p class="text-3xl font-bold p-10">
				No. of hospitals per a thousand people among OECD countries
			</p>
			<img class="mx-auto" src="' . get_stylesheet_directory_uri('template_url') . '/img/chart2.svg" alt="">
			<div class="flex justify-between text-gray-600">
				<span class="inline-block" style="transform: rotate(-45deg);">South Korea</span>
				<span class="inline-block" style="transform: rotate(-45deg);">Japan</span>
				<span class="inline-block" style="transform: rotate(-45deg);">Australia</span>
				<span class="inline-block" style="transform: rotate(-45deg);">Finland</span>
				<span class="inline-block" style="transform: rotate(-45deg);">France</span>
				<span class="inline-block" style="transform: rotate(-45deg);">Germany</span>
				<span class="inline-block" style="transform: rotate(-45deg);">Mexico</span>
				<span class="inline-block" style="transform: rotate(-45deg);">Switzerland</span>
				<span class="inline-block" style="transform: rotate(-45deg);">Czech Republic</span>
				<span class="inline-block" style="transform: rotate(-45deg);">Canada</span>
				<span class="inline-block" style="transform: rotate(-45deg);">Chile</span>
				<span class="inline-block" style="transform: rotate(-45deg);">U.S.</span>
				<span class="inline-block" style="transform: rotate(-45deg);">Hungary</span>
			</div>
		</div>
		<div class="chart2">
			<p class="text-3xl font-bold p-10">
				Medical expenses for serious illnesses in Germany VS Korea
			</p>
			<img class="mx-auto w-full" src="' . get_stylesheet_directory_uri('template_url') . '/img/chart3.svg" alt="">
			<div class="flex justify-center text-gray-600 pt-5 pb-5">
				<span class="w-1/2">Hematologic malignancy</span>
				<span>Brain cancer</span>
			</div>
		</div>
	</div>
	<!-- Chart (end) -->

	<!-- Chart Trigger (start) -->
	<div class="pt-32 flex justify-between px-10 py-10">
		<button class="chartTrig0 border-2 border-dashed border-blue-500 shadow-md focus:outline-none outline-none rounded-full p-5" style="width: 10em; height:10em; text-shadow: 0px 2px 5px #777">5 major cancers compared to that in the U.S.</button>
		<button class="chartTrig1 border-dashed border-blue-500 shadow-md focus:outline-none outline-none rounded-full p-5" style="width: 10em; height:10em; text-shadow: 0px 2px 5px #777">No. of hospitals per a thousand people among OECD countries</button>
		<button class="chartTrig2 border-dashed border-blue-500 shadow-md focus:outline-none outline-none rounded-full p-5" style="width: 10em; height:10em; text-shadow: 0px 2px 5px #777">Korea’s medical service boasts a world-class level.</button>
	</div>
	<!-- Chart Trigger (end) -->

	<!-- Chart Text (start) -->
	<h2 class="p-24">
		Korea’s medical service boasts a world-class level.
	</h2>
	<p class="p-10 text-3xl">
		Every aspect of it—including technology, skills, infrastructures, and prices—is all highly credible.
	</p>
	<!-- Chart Text (end) -->

</section>
<!-- Section 2 (end) -->

<!-- Section 3 (start) -->
<section class="text-center">
	<!-- Content (start) -->
	<div class="endCont flex">
		<p class="h-full overlay text-white font-bold text-6xl p-5 pt-56">
			In addition, Himedi has cared for 4,239 patients while addressing 10,290 inquiries in consultation with Korea’s best medical staff.
		</p>
	</div>
	<p class="pt-24 text-3xl">
		You can reserve six world-class hospitals and other great hospitals.<br>(World\'s best 100 hospitals, April 2020 Newsweek)
	</p>
	<!-- Content (end) -->

	<!-- Sponsor (start) -->
	<div class="w-full pt-10 px-32 py-32">
		<div class="flex justify-between items-center content-center pb-5" style="height: 63.8px;">
			<img class="inline-block" src="' . get_stylesheet_directory_uri('template_url') . '/img/log1.png" width="73px" alt="asan">
			<img class="inline-block" src="' . get_stylesheet_directory_uri('template_url') . '/img/log2.png" width="73px" alt="samsung">
			<img class="inline-block" src="' . get_stylesheet_directory_uri('template_url') . '/img/log6.png" width="63.8px" alt="yonsel">

		</div>
		<div class="flex justify-between items-center content-center pt-5" style="height: 63.8px;">
			<img class="inline" src="' . get_stylesheet_directory_uri('template_url') . '/img/log4.png" width="73px" alt="medicine">
			<img class="inline" src="' . get_stylesheet_directory_uri('template_url') . '/img/log5.png" width="73px" alt="catholic">
			<img class="inline" src="' . get_stylesheet_directory_uri('template_url') . '/img/log3.png" width="73px" alt="snuh">
		</div>
	</div>
	<!-- Sponsor (end) -->

	<!-- Button (start) -->
	<button class="bg-brand p-10 text-white w-1/2 mx-auto mt-10" style="border-radius:10px; font-size:18px">
		Check Success Story
	</button>
	<!-- Button (end) -->

</section>
<!-- Section 3 (end) -->

<!-- Section 4 (start) -->
<section class="items-center pt-40">

	<!-- Icon (start) -->
	<img class="mx-auto mb-24" src="' . get_stylesheet_directory_uri('template_url') . '/img/videocall.png" width="46px" height="46px" alt="">
	<!-- Icon (end) -->

	<!-- Content (start) -->
	<h3 class="text-center p-10">
		Please leave your contact information and inquiry. An answer will be given within 24 hours.
	</h3>
	<p class="text-center text-4xl text-blue-500 p-10">
		* If you have an urget inquiry please leave it via WhatsApp.
	</p>
	<!-- Content (end) -->

	<!-- Divider (start) -->
	<div class="divider mx-auto w-1/3 h-1 bg-gray-500"></div>
	<!-- Divider (end) -->

	<!-- Form (start) -->
	<form class="w-full mt-20 text-3xl p-16">
		<div class="flex items-center mb-10">
			<div class="w-1/3">
				<label class="block font-bold mb-1 mb-0 pr-4" for="inline-full-name">
					<img class="inline pr-2" src="' . get_stylesheet_directory_uri('template_url') . '/img/check.svg" alt="">
					Full Name <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-2/3">
				<input class="appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Jane Doe" required>
			</div>
		</div>
		<div class="flex items-center mb-10">
			<div class="w-1/3">
				<label class="block font-bold mb-1 mb-0 pr-4" for="inline-number">
					<img class="inline pr-2" src="' . get_stylesheet_directory_uri('template_url') . '/img/check.svg" alt="">
					Phone <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-2/3 flex justify-between">
				<select class="w-1/3 border border-gray-200 text-gray-500 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                
                <option selected>Nation</option>
                <option data-countryCode="KR" value="82">S. Korea (+82)</option>
                <option data-countryCode="US" value="1">USA (+1)</option>
                <option data-countryCode="GB" value="44">UK (+44)</option>
                
                <option disabled="disabled">Other Countries</option>
                <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                <option data-countryCode="AD" value="376">Andorra (+376)</option>
                <option data-countryCode="AO" value="244">Angola (+244)</option>
                <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                <option data-countryCode="AG" value="1268"
                  >Antigua &amp; Barbuda (+1268)</option
                >
                <option data-countryCode="AR" value="54">Argentina (+54)</option>
                <option data-countryCode="AM" value="374">Armenia (+374)</option>
                <option data-countryCode="AW" value="297">Aruba (+297)</option>
                <option data-countryCode="AU" value="61">Australia (+61)</option>
                <option data-countryCode="AT" value="43">Austria (+43)</option>
                <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                <option data-countryCode="BY" value="375">Belarus (+375)</option>
                <option data-countryCode="BE" value="32">Belgium (+32)</option>
                <option data-countryCode="BZ" value="501">Belize (+501)</option>
                <option data-countryCode="BJ" value="229">Benin (+229)</option>
                <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                <option data-countryCode="BW" value="267">Botswana (+267)</option>
                <option data-countryCode="BR" value="55">Brazil (+55)</option>
                <option data-countryCode="BN" value="673">Brunei (+673)</option>
                <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                <option data-countryCode="BI" value="257">Burundi (+257)</option>
                <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                <option data-countryCode="CA" value="1">Canada (+1)</option>
                <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                <option data-countryCode="CF" value="236"
                  >Central African Republic (+236)</option
                >
                <option data-countryCode="CL" value="56">Chile (+56)</option>
                <option data-countryCode="CN" value="86">China (+86)</option>
                <option data-countryCode="CO" value="57">Colombia (+57)</option>
                <option data-countryCode="KM" value="269">Comoros (+269)</option>
                <option data-countryCode="CG" value="242">Congo (+242)</option>
                <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                <option data-countryCode="HR" value="385">Croatia (+385)</option>
                <!-- <option data-countryCode="CU" value="53">Cuba (+53)</option> -->
                <option data-countryCode="CY" value="90">Cyprus - North (+90)</option>
                <option data-countryCode="CY" value="357">Cyprus - South (+357)</option>
                <option data-countryCode="CZ" value="420">Czech Republic (+420)</option>
                <option data-countryCode="DK" value="45">Denmark (+45)</option>
                <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                <option data-countryCode="EG" value="20">Egypt (+20)</option>
                <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                <option data-countryCode="EE" value="372">Estonia (+372)</option>
                <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                <option data-countryCode="FI" value="358">Finland (+358)</option>
                <option data-countryCode="FR" value="33">France (+33)</option>
                <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                <option data-countryCode="GA" value="241">Gabon (+241)</option>
                <option data-countryCode="GM" value="220">Gambia (+220)</option>
                <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                <option data-countryCode="DE" value="49">Germany (+49)</option>
                <option data-countryCode="GH" value="233">Ghana (+233)</option>
                <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                <option data-countryCode="GR" value="30">Greece (+30)</option>
                <option data-countryCode="GL" value="299">Greenland (+299)</option>
                <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                <option data-countryCode="GU" value="671">Guam (+671)</option>
                <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                <option data-countryCode="GN" value="224">Guinea (+224)</option>
                <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                <option data-countryCode="GY" value="592">Guyana (+592)</option>
                <option data-countryCode="HT" value="509">Haiti (+509)</option>
                <option data-countryCode="HN" value="504">Honduras (+504)</option>
                <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                <option data-countryCode="HU" value="36">Hungary (+36)</option>
                <option data-countryCode="IS" value="354">Iceland (+354)</option>
                <option data-countryCode="IN" value="91">India (+91)</option>
                <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                <!-- <option data-countryCode="IR" value="98">Iran (+98)</option> -->
                <option data-countryCode="IE" value="353">Ireland (+353)</option>
                <option data-countryCode="IL" value="972">Israel (+972)</option>
                <option data-countryCode="IT" value="39">Italy (+39)</option>
                <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                <option data-countryCode="JP" value="81">Japan (+81)</option>
                <option data-countryCode="JO" value="962">Jordan (+962)</option>
                <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                <option data-countryCode="KE" value="254">Kenya (+254)</option>
                <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                <!-- <option data-countryCode="KP" value="850">Korea - North (+850)</option> -->
                <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                <option data-countryCode="LA" value="856">Laos (+856)</option>
                <option data-countryCode="LV" value="371">Latvia (+371)</option>
                <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                <option data-countryCode="LR" value="231">Liberia (+231)</option>
                <option data-countryCode="LY" value="218">Libya (+218)</option>
                <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                <option data-countryCode="MO" value="853">Macao (+853)</option>
                <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                <option data-countryCode="MW" value="265">Malawi (+265)</option>
                <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                <option data-countryCode="MV" value="960">Maldives (+960)</option>
                <option data-countryCode="ML" value="223">Mali (+223)</option>
                <option data-countryCode="MT" value="356">Malta (+356)</option>
                <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                <option data-countryCode="MX" value="52">Mexico (+52)</option>
                <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                <option data-countryCode="MD" value="373">Moldova (+373)</option>
                <option data-countryCode="MC" value="377">Monaco (+377)</option>
                <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                <option data-countryCode="MA" value="212">Morocco (+212)</option>
                <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                <option data-countryCode="NA" value="264">Namibia (+264)</option>
                <option data-countryCode="NR" value="674">Nauru (+674)</option>
                <option data-countryCode="NP" value="977">Nepal (+977)</option>
                <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                <option data-countryCode="NE" value="227">Niger (+227)</option>
                <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                <option data-countryCode="NU" value="683">Niue (+683)</option>
                <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                <option data-countryCode="NO" value="47">Norway (+47)</option>
                <option data-countryCode="OM" value="968">Oman (+968)</option>
                <option data-countryCode="PK" value="92">Pakistan (+92)</option>
                <option data-countryCode="PW" value="680">Palau (+680)</option>
                <option data-countryCode="PA" value="507">Panama (+507)</option>
                <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                <option data-countryCode="PE" value="51">Peru (+51)</option>
                <option data-countryCode="PH" value="63">Philippines (+63)</option>
                <option data-countryCode="PL" value="48">Poland (+48)</option>
                <option data-countryCode="PT" value="351">Portugal (+351)</option>
                <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                <option data-countryCode="QA" value="974">Qatar (+974)</option>
                <option data-countryCode="RE" value="262">Reunion (+262)</option>
                <option data-countryCode="RO" value="40">Romania (+40)</option>
                <option data-countryCode="RU" value="7">Russia (+7)</option>
                <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                <option data-countryCode="SM" value="378">San Marino (+378)</option>
                <option data-countryCode="ST" value="239"
                  >Sao Tome &amp; Principe (+239)</option
                >
                <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                <option data-countryCode="SN" value="221">Senegal (+221)</option>
                <option data-countryCode="CS" value="381">Serbia (+381)</option>
                <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                <option data-countryCode="SG" value="65">Singapore (+65)</option>
                <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                <option data-countryCode="SO" value="252">Somalia (+252)</option>
                <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                <option data-countryCode="ES" value="34">Spain (+34)</option>
                <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                <option data-countryCode="SR" value="597">Suriname (+597)</option>
                <option data-countryCode="SD" value="249">Sudan (+249)</option>
                <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                <option data-countryCode="SE" value="46">Sweden (+46)</option>
                <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                <!-- <option data-countryCode="SY" value="963">Syria (+963)</option> -->
                <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                <option data-countryCode="TJ" value="992">Tajikistan (+992)</option>
                <option data-countryCode="TH" value="66">Thailand (+66)</option>
                <option data-countryCode="TG" value="228">Togo (+228)</option>
                <option data-countryCode="TO" value="676">Tonga (+676)</option>
                <option data-countryCode="TT" value="1868"
                  >Trinidad &amp; Tobago (+1868)</option
                >
                <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                <option data-countryCode="TR" value="90">Turkey (+90)</option>
                <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                <option data-countryCode="TC" value="1649"
                  >Turks &amp; Caicos Islands (+1649)</option
                >
                <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                <option data-countryCode="UG" value="256">Uganda (+256)</option>
                <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                <option data-countryCode="UZ" value="998">Uzbekistan (+998)</option>
                <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                <option data-countryCode="VG" value="1">Virgin Islands - British (+1)</option>
                <option data-countryCode="VI" value="1">Virgin Islands - US (+1)</option>
                <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                

				</select>
				<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
					<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
						<path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
				</div>
				<input class="appearance-none border-2 border-gray-200 rounded-lg py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-blue-500" id="inline-number" type="number" placeholder="Your phone number" min="1">
			</div>
		</div>
		<div class="flex items-center mb-10">
			<div class="w-1/3">
				<label class="block font-bold mb-1 mb-0 pr-4" for="inline-email">
					<img class="inline pr-2" src="' . get_stylesheet_directory_uri('template_url') . '/img/check.svg" alt="">
					Email <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-2/3">
				<input class="appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-blue-500" id="inline-email" type="email" placeholder="Your email address" required>
			</div>
		</div>
		<div class="flex items-center mb-10">
			<div class="w-1/3">
				<label class="block font-bold mb-1 mb-0 pr-4" for="inline-disease">
					<img class="inline pr-2" src="' . get_stylesheet_directory_uri('template_url') . '/img/check.svg" alt="">
					Disease <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-2/3">
				<input class="appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-blue-500" id="inline-disease" type="text" placeholder="Write disease here">
			</div>
		</div>
		<div class="flex items-center mb-10">
			<div class="w-1/3">
				<label class="block font-bold mb-1 mb-0 pr-4">
					<img class="inline pr-2" src="' . get_stylesheet_directory_uri('template_url') . '/img/check.svg" alt="">
					Medical Report: <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-2/3 flex justify-between">
				<label class="inline font-bold px-5">
					<input class="mr-2" name="mediReport" type="radio" required>
					<span class="text-2xl">
						Applicable
					</span>
				</label>
				<label class="inline font-bold">
					<input class="mr-2" name="mediReport" type="radio">
					<span class="text-2xl">
						Not Applicable
					</span>
				</label>
			</div>
		</div>
		<div class="items-center mb-10">
			<div class="w-full">
				<label class="block font-bold mb-1 mb-0 pr-4">
					<img class="inline pr-2" src="' . get_stylesheet_directory_uri('template_url') . '/img/check.svg" alt="">
					Major questions to doctors: <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-full p-10">
				<textarea class="border border-gray-500 w-full" rows="10"></textarea>
			</div>
		</div>
		<div class="items-center mb-10">
			<div class="w-full">
				<label class="block font-bold mb-1 mb-0 pr-4">
					<img class="inline pr-2" src="' . get_stylesheet_directory_uri('template_url') . '/img/check.svg" alt="">
					Is there any aspect regarding the patient that Doctors need to take note of? <span class="text-red-500">*</span>
				</label>
			</div>
			<div class="w-full p-10">
				<textarea class="border border-gray-500 w-full" rows="10"></textarea>
			</div>
		</div>

		<!-- Consent (start) -->
		<div class="text-right p-10">
			<span>Consent to collect personal data</span>
			<input type="checkbox">
		</div>
		<!-- Consent (end) -->

		<div class="flex items-center text-center">
			<div class="w-full">
				<button class="applyBtn bg-brand p-10 text-white w-1/2 mx-auto mt-10">
					Apply
				</button>
			</div>
		</div>
	</form>
	<!-- Form (end) -->
</section>
<!-- Section 4 (end) -->
    ';
};
