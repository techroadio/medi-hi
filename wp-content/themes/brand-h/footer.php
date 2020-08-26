<?php

/*
		This is the template for the footer
		
		@package sunsettheme
	*/

?>

<footer class="text-center mt-20 font-roboto ">
	<!-- Footer links (start) -->
	<!-- <h2 class="px-8 font-bold text-left font-size-24 font-roboto leading-relaxed " style="font-size:22px"> -->
	<div class="text-2xl mb-5  font-roboto ">
		<a href="https://himedi.com/en?terms=true" class="text-gray-600 font-bold ">Terms of Use</a> .
		<a href="https://himedi.com/en?privacy=true" class="text-gray-600 font-bold">Privacy Policy</a>
	</div>
	<!-- Footer links (end) -->

	<!-- Address (start) -->
	<p class="text-gray-500 font-roboto " style="font-size:13px">
		10, Anson Road, #34-10, International Plaza,<br class="lg:hidden"> Singapore 079903
	</p>
	<!-- Address (end) -->

	<!-- Copyright notice (start) -->
	<p class="text-gray-500 mt-8 mb-32">
		© HIMEDI SEA PTE. LTD.
	</p>
	<!-- Copyright notice (end) -->


</footer> 

<?php wp_footer(); ?>

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
	var mySwiper = new Swiper('.swiper-container', {
		// Optional parameters
		loop: false,

		// If we need pagination
		// pagination: {
		// 	el: '.swiper-pagination',
		// },

		//Navigation arrows
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},

		// And if we need scrollbar
		scrollbar: {
			el: '.swiper-scrollbar',
		},
	});

	jQuery(document).ready(
		function() {

			for (let i = 0; i < 3; i++) {
				const chart = jQuery('.chart' + i);
				const trig = jQuery('.chartTrig' + i);
				chart.hide();

				trig.on('click', function() {
					jQuery(this).addClass('active').siblings().removeClass('active');
					jQuery(this).addClass('border-2').siblings().removeClass('border-2');
					if (trig.hasClass('active')) {
						chart.addClass('active').siblings().removeClass('active');
					}
				});
			}

			jQuery("form input").on('invalid', function() {
				$('input,textarea,radio').addClass('border border-red-500');
			});
		}
	);
</script>
<script>



	// start logo

	function myFunction1(){
		
	const popUpBgElement = document.getElementById("pop_up_bg");
	const popUpElement = document.getElementById("popup");
	const cancelBtn = document.getElementById("popup_cancel_btn");
	const button = document.getElementById("click_me_btn");
	let isPopUpShowing = false;

	const popUpHandeler = ()=>{
		isPopUpShowing = !isPopUpShowing;
		if(isPopUpShowing){
			popUpBgElement.classList.remove("hidden");
			popUpElement.classList.remove("hidden");
			cancelBtn.classList.remove("hidden");
		}else{
			popUpBgElement.classList.add("hidden");
			popUpElement.classList.add("hidden");
			cancelBtn.classList.add("hidden");
		}
	}

	//** Events */
	button.addEventListener('click', popUpHandeler);
	cancelBtn.addEventListener('click', popUpHandeler);
	}

	function myFunction2(){
		
		const popUpBgElement = document.getElementById("pop_up_bg");
		const cancelBtn = document.getElementById("popup_cancel_btn");

		const popUpElement = document.getElementById("popup2");
		const button = document.getElementById("click_me_btn2");
		let isPopUpShowing = false;
	
		const popUpHandeler = ()=>{
			isPopUpShowing = !isPopUpShowing;
			if(isPopUpShowing){
				popUpBgElement.classList.remove("hidden");
				popUpElement.classList.remove("hidden");
				cancelBtn.classList.remove("hidden");
			}else{
				popUpBgElement.classList.add("hidden");
				popUpElement.classList.add("hidden");
				cancelBtn.classList.add("hidden");
			}
		}
	
		//** Events */
		button.addEventListener('click', popUpHandeler);
		cancelBtn.addEventListener('click', popUpHandeler);
	}	

	function myFunction3(){
		
		const popUpBgElement = document.getElementById("pop_up_bg");
		const cancelBtn = document.getElementById("popup_cancel_btn");

		const popUpElement = document.getElementById("popup3");
		const button = document.getElementById("click_me_btn3");
		let isPopUpShowing = false;
	
		const popUpHandeler = ()=>{
			isPopUpShowing = !isPopUpShowing;
			if(isPopUpShowing){
				popUpBgElement.classList.remove("hidden");
				popUpElement.classList.remove("hidden");
				cancelBtn.classList.remove("hidden");
			}else{
				popUpBgElement.classList.add("hidden");
				popUpElement.classList.add("hidden");
				cancelBtn.classList.add("hidden");
			}
		}
	
		//** Events */
		button.addEventListener('click', popUpHandeler);
		cancelBtn.addEventListener('click', popUpHandeler);
	}	

	function myFunction4(){
		
		const popUpBgElement = document.getElementById("pop_up_bg");
		const cancelBtn = document.getElementById("popup_cancel_btn");

		const popUpElement = document.getElementById("popup4");
		const button = document.getElementById("click_me_btn4");
		let isPopUpShowing = false;
	
		const popUpHandeler = ()=>{
			isPopUpShowing = !isPopUpShowing;
			if(isPopUpShowing){
				popUpBgElement.classList.remove("hidden");
				popUpElement.classList.remove("hidden");
				cancelBtn.classList.remove("hidden");
			}else{
				popUpBgElement.classList.add("hidden");
				popUpElement.classList.add("hidden");
				cancelBtn.classList.add("hidden");
			}
		}
	
		//** Events */
		button.addEventListener('click', popUpHandeler);
		cancelBtn.addEventListener('click', popUpHandeler);
	}	

function success_cases_popup(){

	const popUpBgElement = document.getElementById("pop_up_bg");
	const popUpElement = document.getElementById("main_pop_up");
	const choleithiasisButton = document.getElementById("choleithiasis_button");
	let isPopUpShowing = false;

	const popUpHandeler = ()=>{
	isPopUpShowing = !isPopUpShowing;
	if(isPopUpShowing){
		popUpBgElement.classList.remove("hidden");
		popUpElement.classList.remove("hidden");
	}else{
		popUpBgElement.classList.add("hidden");
		popUpElement.classList.add("hidden");
	}
	}

	/** Events */
	choleithiasisButton.addEventListener('click', popUpHandeler);
	popUpBgElement.addEventListener('click', popUpHandeler);



}	


//** Affiliate Page JS */

let popUp = document.getElementById("bms_popup");
let popUpCancelBtn = document.getElementById("bms_popup_cancel_btn");
let popUpBg = document.getElementById("bms_pop_up_bg");

let avatarImg = document.getElementById("bms_avatar_image");
let backImg = document.getElementById("bms_back_image");
let headingText = document.getElementById("bms_heading");
let aboutText = document.getElementById("bms_about_text");
let tagsElm = document.getElementById("bms_tags");


let isPopUpShowing = false;
//** Popup handler */

const getPopupHandler = (meta)=>{
	return ()=>{
		if(meta){
			//** Init meta */
			avatarImg.src = meta.avatarImage
			backImg.src = meta.backImage
			headingText.innerText = meta.headingText
			aboutText.innerText = meta.aboutText
			tagsElm.innerText = meta.tags
		}
		isPopUpShowing = !isPopUpShowing;
		console.log("run>>", isPopUpShowing);
		if(isPopUpShowing){
			popUpBg.classList.remove("hidden");
			popUp.classList.remove("hidden");
			popUpCancelBtn.classList.remove("hidden");
		}else{
			popUpBg.classList.add("hidden");
			popUp.classList.add("hidden");
			popUpCancelBtn.classList.add("hidden");
		}
	}
}


//** Events */
popUpCancelBtn.addEventListener('click', getPopupHandler());
popUpBg.addEventListener('click', getPopupHandler());

function affiliateLoboClickHandler ({btnId, meta={avatarImage, backImage, headingText, aboutText}}){
	let loboBtn = document.getElementById(btnId);
	loboBtn.addEventListener('click', getPopupHandler(meta));
}

affiliateLoboClickHandler({btnId: "best_medical_staff_1", meta:{
	avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/01-logo.png",
	backImage: "<?php bloginfo('template_directory') ?>/img/partners/01.jpg",
	headingText: "CHA Gangnam Medical Center",
	tags:"#IVF #Infertilityspecialtyhospital #Infertilitycounseling",
	aboutText: "IVF, Additional treatments for IVF, IUI, Male Infertility, Fertility Tests for Men and Women",
}})

affiliateLoboClickHandler({btnId: "best_medical_staff_2", meta:{
	avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/02-logo.png",
	backImage: "<?php bloginfo('template_directory') ?>/img/partners/02.jpg",
	headingText: "MizMedi Hospital",
	tags:"#Women'sHospital #IVF",
	aboutText: "Polycystic Ovary Syndrome/Ovulation Disorder, Ovarian Dysfunction, Male Infertility, IUI, IVF, Selection of Best Embryo, Creating the Optimum Condition for Implantation, Recurrent Miscarriage/Recurrent Implantation Failure, Preimplantation Genetic Diagnosis, Fertility Preservation (Egg Freezing), Laparoscopy, Hysteroscopy",
}})

affiliateLoboClickHandler({btnId: "best_medical_staff_3", meta:{
	avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/03-logo.png",
	backImage: "<?php bloginfo('template_directory') ?>/img/partners/03.jpg",
	headingText: "Seoul National University Bundang Hospital",
	tags:"#Women'sHospital #IVF",
	aboutText: `Test: Spine X-rays, Spine MRI, Spine CT, Dexa bone densitometry, Pre-operative tests, Knee X-rays (knee series & teleradiogram), Knee MRI, Shoulder X-rays, Rotator cuff X-rays, Dexa bone densitometry, Shoulder CT, Shoulder MRI, Ultrasound Extremity, GU Kidney & bladder CT, Kidney SPECT/CT, Chest CT, Bone scan, Mammography, Breast ultrasound, breast gun biopsy, other types of biopsy (needle or punch)
	Tests for metastasis: Breast MRI, chest CT, abdomen & pelvis CT, PET scan, bone scan, pre-op labs

	Surgery: Interbody fusion, C-spine or L-spine, Posterior fusion, Total Knee Replacement Arthroplasty and other arthroscopic, Total shoulder arthroplasty, Robot-assisted Partial Nephrectomy or Radical Nephrectomy, Total mastectomy, In Vitro Fertilization`,
}})

affiliateLoboClickHandler({btnId: "best_medical_staff_4", meta:{
	avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/04-logo.png",
	backImage: "<?php bloginfo('template_directory') ?>/img/partners/04.jpg",
	headingText: "The Catholic Univ. of Korea Seoul St.Mary's Hospital",
	tags:"#state-of-the-art-systems",
	aboutText: `Robotic-assisted myomectomy and reconstructive surgery, Robotic-assisted total laparoscopic hysterectomy, Preoperative examination(MRI)`,
}})

affiliateLoboClickHandler({btnId: "best_medical_staff_5", meta:{
	avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/05-logo.png",
	backImage: "<?php bloginfo('template_directory') ?>/img/partners/05.jpg",
	headingText: "Seoul National University Hospital",
	tags:"#besthospital #famous-in-Korea #international&arabic",
	aboutText: `Laparoscopy or open surgery or etc. Holmium laser or etc. Endoscopy, surgery, chemotherapy, radiation
	(The treatment is decided according to the clinical stage and medical condition)
	Determine the surgical method depending on the metastasis, Laparoscopy surgery or da Vinci surgery or open surgery, Determination of treatment method and duration of treatment, such as chemotherapy or surgery, based on test results
	Interview & physical exam, 1st~2nd work up(donor), recipient work up, operation(donor/recipient)
	Blood test & pre-examination, Kidney transplantation surgery
	`,
}})

affiliateLoboClickHandler({btnId: "best_medical_staff_6", meta:{
	avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/06-logo.png",
	backImage: "<?php bloginfo('template_directory') ?>/img/partners/06.jpg",
	headingText: "CHA Ilsan Women's & Children's Hospital",
	tags:"#Women'sHospital #Cervicalcancer #Breastcancer",
	aboutText: `Drug Therapy, Surgical Treatment, Surgical Treatments (Conization, LEEP, Simple Hysterectomy, Radical Hysterectomy), Radiation Therapy, Chemotherapy, Targeted Therapy, Cancer Immunotherapy`,
}})

affiliateLoboClickHandler({btnId: "best_medical_staff_7", meta:{
	avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/07-logo.png",
	backImage: "<?php bloginfo('template_directory') ?>/img/partners/07.jpg",
	headingText: "Jaseng Hospital of Korean Medicine",
	tags:"#acupuncture #herbalmedicine #backpainspecialist",
	aboutText: `Consultation, Chuna manipulation, acupuncture, herbal injection(pharmacopuncture), cupping, physio-manual therapy, herbal medicine for a month`,
}})

affiliateLoboClickHandler({btnId: "best_medical_staff_8", meta:{
	avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/08-logo.png",
	backImage: "<?php bloginfo('template_directory') ?>/img/partners/08.jpg",
	headingText: "Wooridul Spine Hospital",
	tags:"#EndoscopySpineSpecialty #minimally-invasive-spine-surgery #CausalTreatment",
	aboutText: `Consultation, Diagnostic exams (spinal imaging studies, blood test, etc.), Pre&post-operative exams`,
}})

affiliateLoboClickHandler({btnId: "best_medical_staff_9", meta:{
	avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/09-logo.png",
	backImage: "<?php bloginfo('template_directory') ?>/img/partners/09.jpg",
	headingText: "Medrex Hospital",
	tags:"#joint&spine #non-surgery&surgery #1:1service",
	aboutText: `MRI, X-ray, blood test, CT, DT, urine test, ECG, PFT, ultrasonography, Coronyzer  and more`,
}})

affiliateLoboClickHandler({btnId: "best_medical_staff_10", meta:{
	avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/10-logo.png",
	backImage: "<?php bloginfo('template_directory') ?>/img/partners/10.jpg",
	headingText: "Nanoori Hospital",
	tags:"#spine&joint_specialist #SpineSurgery #OrthorpedicSurgery",
	aboutText: `Test: X-ray, MRI, pre-op exams(a day before or on the day of the operation)

	Surgery: RACZ(Lumbar), Micro Lumbar Discectomy, Percutaneous Endoscopic Lumbar Discectomy, Anterior Lumbar Interbody Fusion, Posterior Lumbar Interbody Fusion, Transforaminal Lumbar Lateral Interbody Fusion, Hip Arthroscopy, Total Hip Replacement, Shoulder Arthroscopy, Arthroscopic Decompression(Shoulder), Arthroscopic Rotator Cuff Repair`,
}})

affiliateLoboClickHandler({btnId: "best_medical_staff_11", meta:{
	avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/11-logo.png",
	backImage: "<?php bloginfo('template_directory') ?>/img/partners/11.jpg",
	headingText: "Korea University Anam Hospital",
	tags:"#cancer #SeriousAcuteCondition #JCI-accredited",
	aboutText: `Test: Spine MRI, X-ray, Basic blood tests, Urine test, EKG, Blood analysis, Urine analysis, X-ray, EKG, PFT, Colonoscopy, Abdomen CT, Chest CT, TTE, PET-CT(If necessary)

	Surgery: Spinal fusion/Discectomy, Lapa, Hemicolectomy`,
}})

affiliateLoboClickHandler({btnId: "best_medical_staff_12", meta:{
	avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/12-logo.png",
	backImage: "<?php bloginfo('template_directory') ?>/img/partners/12.jpg",
	headingText: "Gachon Univ. Gil Medical Center",
	tags:"#cancer&spine #state-of-the-art-facility #FastTrack-for-foreigners",
	aboutText: `ACL/PCL Reconstruction(one side), Total Knee Arthroplasty(one side), Total Hip Replacement(one side), Colectomy(partial), Multi-disciplinary consultation using the AI ​​Watson program(if required), Nephrectomy(one side), Hysterectomy(laparoscopic)
		Liver transplantation from living donor
		Kidney transplantation from living donor`,
}})

affiliateLoboClickHandler({btnId: "best_medical_staff_13", meta:{
	avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/13-logo.png",
	backImage: "<?php bloginfo('template_directory') ?>/img/partners/13.jpg",
	headingText: "Samsung Medical Center",
	tags:"#GeneralHospital #state-of-the-art-facility #SurgerySpecialist",
	aboutText: `Blood test, ultrasonography, CT, MRI, PET, bone scan, bone marrow exam, Hematopoietic Stem Cell transplantation, Chemotherapy, Targeted therapy, Immunotherapy, Proton therapy, Radiation therapy, Surgery`,
}})

affiliateLoboClickHandler({btnId: "best_medical_staff_14", meta:{
	avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/14-logo.png",
	backImage: "<?php bloginfo('template_directory') ?>/img/partners/14.jpg",
	headingText: "Asan Medical Center",
	tags:"#largest-hospital-in-Korea #OrganTransplantation #AAHRPP-accredited",
	aboutText: `Evaluation tests (donor/recipient), Operation (living donor liver transplantation, Hepatectomy)`,
}})


</script>
</body>

</html>