<?php
 get_header(); 
 ?>
 <style>
 	.custom-container{
 		min-width:320px;
 		max-width:620px;
 	}
 	.container-fluid {
    min-width: 320px;
   
}
.fixed-top{
	position: fixed;
    right: 0;
    left: 0;
    z-index: 1030;
    top:0;
}
.main-navbar{
	display:flex;
	align-items: center;
}
.header{
	min-height: 56px;
    padding: 0 16px;
    position: relative;
}
#customnavbar{
	display:none;
}
.custom-navbar-collapse{
	background:#ffffff;
	color:green;
}
.mobileMenu{
width: 300px;
    position: fixed;
    top: 0;
    bottom: 0;
    margin:auto;
    transition: all .25s ease;
    z-index: 1030;
}
.mobileMenu.onright {
    left: auto;
    right: 0;
}
.mobileMenu.open {
    -webkit-transform: translateX(0);
    transform: translateX(0);
}
.overlay {
    position: fixed;
    -ms-touch-action: pan-x;
    touch-action: pan-x;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    background-color: rgba(0,0,0,.6);
    display: none;
    z-index: 999;
    min-width: 100vw!important;
}
/* begin slider*/
/* Slider */

.item{
    background: #333;    
    text-align: center;
    height: auto !important;
}
.control-buttons{
	text-align:center;
}
.transition-timer-carousel-progress-bar {
    height: 3px;
    background-color: #5cb85c;
    width: 0%;
    margin: 0px 0px 0px 0px;
    border: none;
    z-index: 11;
    position: relative;
}


/* end slider */
/* begin Graph */
.section3{
  margin: 0;
  padding: 0;
  height: 50vh;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: "Roboto", sans-serif;
  background: #333;
}

.chart{
  width: 600px;
  height: 300px;
  display: block;
}

.numbers{
  color: #fff;
  margin: 0;
  padding: 0;
  width: 50px;
  height: 100%;
  display: inline-block;
  float: left;
}

.numbers li{
  list-style: none;
  height: 150px;
  position: relative;
  bottom: 145px;
}

.numbers span{
  font-size: 12px;
  font-weight: 600;
  position: absolute;
  bottom: 0;
  right: 10px;
}

.bars{
  color: #fff;
  font-size: 12px;
  font-weight: 600;
  background: #555;
  margin: 0;
  padding: 0;
  display: inline-block;
  width: 500px;
  height: 300px;
  box-shadow: 0 0 10px 0 #555;
  border-radius: 5px;
}

.bars li{
  display: table-cell;
  width: 100px;
  height: 300px;
  position: relative;
}

.bars span{
  width: 100%;
  position: absolute;
  bottom: -30px;
  text-align: center;
}

.bars .bar{
  display: block;
  background: #17C0EB;
  width: 50px;
  position: absolute;
  bottom: 0;
  margin-left: 25px;
  text-align: center;
  box-shadow: 0 0 10px 0 rgba(23, 192, 235, 0.5);
  transition: 0.5s;
  transition-property: background, box-shadow;
}

.bars .bar:hover{
  background: #55EFC4;
  box-shadow: 0 0 10px 0 rgba(85, 239, 196, 0.5);
  cursor: pointer;
}

.bars .bar:before{
  color: #fff;
  content: attr(data-percentage) '%';
  position: relative;
  bottom: 20px;
}
                           
/* end Graph */
.navbar-nav {
    overflow-y: auto;
}
 </style>

 
<div class="container-fluid p-0">
	<Header class="fixed-top  flex justify-center ">
		<nav class="main-navbar justify-center header flex-grow" style="max-width: 632px;">
			<div class="logo  "><img src="/medi-hi/wp-content/uploads/2020/08/download.png" /></div>
			<button onclick="menuopen()" id="button" class="navbar-toggler absolute p-0" style="right:16px;"> <img src="http://127.0.0.1/medi-hi/wp-content/uploads/2020/08/icons8-menu-26.png" /> </button>
			<div id="customnavbar" class="custom-navbar-collapse mobileMenu flex flex-col onright open">
				<ul class="navbar-nav self-stretch flex-grow">
					<div id="closesidebar" class="flex justify-between" style="margin: 0px 20px; min-height: 28px;">
						<img onclick="menuclose()" src="/medi-hi/wp-content/uploads/2020/08/download-2.png"/>
					</div>
					<div>
						<button data-v-526db336="" class="btn btn-height-44 btn-normal btn-all-rounded font-semi-bold font-size-16 btn-block" style="margin-top: 20px;"> Get started </button>
					</div>
					<div>
						<h3>text1</h3>
						<h3>text2</h3>
						<h3>text3</h3>
						<h3>text4</h3>
					</div>

				</ul>
				<div class="side-bar-footer"></div>
			</div>
		</nav>
		<!-- -->
		<div class="overlay "></div>

		
	
	</Header>
</div>

	<div class="sm:container mx-auto custom-container ">
		<div class="grid grid-cols-1 lg:grid-cols-1 section1">
		  
		  <div style="background-image: url('/medi-hi/wp-content/uploads/2020/08/main-beauty-1@2x.jpg'); height:300px;background-repeat:no-repeat;">
		  
		  </div>

		</div>
		<div class="grid grid-cols-1 lg:grid-cols-1 section2">
		 
                         <!-- START  SLIDER -->
<div id="myCarousel" class="carousel slide" data-interval="false" data-ride="carousel">

				    	        
				        <!-- Carousel items -->
				        <div class="carousel-inner">
				            <div class="active item">
                        <div class="container">
                        	<img src="/medi-hi/wp-content/uploads/2020/08/main-beauty-1@2x.jpg" />
				         		
                        </div>
				            </div>
				            <div class="item">
                        <div class="container">
				                <img src="/medi-hi/wp-content/uploads/2020/08/main-beauty-1@2x.jpg" />
                        </div>
				            </div>
				            <div class="item">
                        <div class="container">
				                <img src="/medi-hi/wp-content/uploads/2020/08/main-beauty-1@2x.jpg" />
                        </div>
				            </div>
				        </div>
				    </div>
				        <hr class="transition-timer-carousel-progress-bar" />
    <center>
    </center>
<!-- END  SLIDER -->

		</div>
		<div class="grid grid-cols-1 lg:grid-cols-1 section3">
		  
		  <!-- begin Graph -->
	<!--chart start-->
    <div class="chart">
      <ul class="numbers">
        <li><span>100%</span></li>
        <li><span>50%</span></li>
        <li><span>0%</span></li>
      </ul>
      <ul class="bars">
        <li><div class="bar" data-percentage="50"></div><span>Option 01</span></li>
        <li><div class="bar" data-percentage="30"></div><span>Option 02</span></li>
        <li><div class="bar" data-percentage="60"></div><span>Option 03</span></li>
        <li><div class="bar" data-percentage="100"></div><span>Option 04</span></li>
        <li><div class="bar" data-percentage="80"></div><span>Option 05</span></li>
      </ul>
    </div>
    <!--chart end-->
		  <!-- end Graph   -->

		</div>



		<h1 ><?php _e('Page is Home','brand-h-domain'); ?></h1>

		<p><?php _e('Flushed Homepage as Blank','brand-h-domain'); ?></p>

<Footer>
<?php _e('Powered by Techroad','brand-h-domain'); ?>
</Fotter>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script type="text/javascript">

function menuopen()
{
	$("#customnavbar").css("display", "block");
	$(".overlay").css("display", "block");
}
function menuclose()
{
	$("#customnavbar").css("display", "none");
	$(".overlay").css("display", "none");
}
$(document).ready(function(){
      var percent = 0, bar = $('.transition-timer-carousel-progress-bar'), crsl = $('#myCarousel');
			function progressBarCarousel() {
			  bar.css({width:percent+'%'});
			 percent = percent +0.5;
			  if (percent>100) {
			      percent=0;
			      crsl.carousel('next');
			  }      
			}
			crsl.carousel({
			    interval: false,
			    pause: true
			}).on('slid.bs.carousel', function () {});var barInterval = setInterval(progressBarCarousel, 30);
			crsl.hover(
			    function(){
			        clearInterval(barInterval);
			    },
			    function(){
			        barInterval = setInterval(progressBarCarousel, 30);
          })
    });
</script>
 <script type="text/javascript">
    $(function(){
      $('.bars li .bar').each(function(key, bar){
        var percentage = $(this).data('percentage');
        $(this).animate({
          'height' : percentage + '%'
        },1000);
      });
    });
    </script>
<?php
get_footer();?>
