<?php
/*
 Template Name: Home
*/
?>

<?php get_header(); ?>

<style type="text/css">
.test {
	color: white;
	text-transform: uppercase;
	font-size: 70px;
	float: left;
	line-height: 1;
	letter-spacing: 8px;
	padding-left: 5%;
	margin-top: 11%;
}

#shoutoutBox {
	padding-left: 5%;
}

@media ( max-width : 1280px) {
}

@media ( max-width : 992px) {
}

@media ( max-width : 768px) {
}

@media ( max-width : 480px) {
}

#backgroundSlider {
	top: 0px;
	left: 0px;
	position: absolute;
}

.shoutout {
	cursor: text;
	position: relative;
	font-size: 17px;
	font-family: Lato;
	font-weight: bold;
	text-transform: none;
	padding: 17px;
	width: 1200px;
	height: 50px;
	overflow: hidden;
	background-color: white;
	color: black;
	letter-spacing: normal;
}

ol.carousel-indicators {
	top: 80%;
	position: absolute;
	display: inline-block;
	z-index: 2;
	left: 90%;
}

.carousel-caption{
	z-index: 2;
	bottom: 14.8%;
	left: 84.5%;
	font-family: Lato;
}

.next-half{
background-color: #d4d8d9;
}

#next-half-nav{
height: 126px;
background-color: white;
}

#next-half-content{
padding: 80px 150px; 
}

.pure-square-image-div {
padding: 2px;
}

.pure-square-image {
background-repeat: no-repeat;
background-size: cover;
}

.double-square-quote-div{
padding: 2px;
}

.instagram-div{
padding: 2px;
}

.double-square-quote {
background-image: url('<?php echo get_template_directory_uri(); ?>/library/quotebg.jpg');
background-repeat: no-repeat;
background-size: cover;
padding: 15%;
top: 50%;
font-weight: bold;
font-size: 45px;
color: white;
letter-spacing: 3px;
}

#twitter-inner{
background-image: url('<?php echo get_template_directory_uri(); ?>/library/twitterbg.png');
background-repeat: no-repeat;
background-size: cover;
color: white;
}

#instafeed {
position: relative;
}
#instafeed .bg {
position:absolute;
display:block;
top:0;
right:0;
bottom:0;
left:0;
background-size:cover;
}

.case-study-name{
text-transform: uppercase;
color: white;
text-align: center;
padding-top: 35%;
font-size: 25px;
letter-spacing: 2px;
}

.case-study-title{
text-transform: uppercase;
color: white;
text-align: center;
font-size: 30px;
padding-top: 3%;
letter-spacing: 3px;
}

#blog-title{
color: white;
text-align: center;
text-transform: uppercase;
font-size: 20px;
padding-top: 20%;
letter-spacing: 2px;
}

#post-title{
color: white;
text-align: center;
text-transform: uppercase;
font-size: 27px;
letter-spacing: 3px;
}

#post-content{
color: white;
text-align: center;
font-size: 15px;
font-family: Lato;
overflow: hidden;
}

#inner {
padding-left: 3%;

}

.footer{
margin-top:6%;
margin-left: 9%;
}

#next-half-button:hover {
cursor: pointer;
}

</style>

<?php
global $post;
$homePage = get_page_by_title('home');
$title = get_field('home_title', $homePage->ID);

$shoutout = get_field('repeater_shoutout_textbox', $homePage->ID);
$shout=array();
foreach($shoutout as $s){
	array_push($shout, $s['shoutout']);
}

/*$first_row = $shoutout[0];

$rows = $first_row['shoutout'];
$numOfShoutouts = count($shoutout);
$num=0;*/

function getShoutOut($number){
	global $shoutout;
	return $shoutout[$number]['shoutout'];
}

$rpImage = get_field('repeater_background_image');
$firstRow = $rpImage[0];
$firstRowImage = $firstRow['bkg_image'];

$squareImageRepeater = get_field('home_repeater_square_image');

$doubleSquareQuote = get_field('home_inspirational_quote');

$caseStudyImage = get_field('case_study_image');
$caseStudyTitle = get_field('case_study_title');

$args = array('posts_per_page' => 1, 'order'=>'ASC');
$myposts = get_posts($args);
$postID = $myposts[0]->ID;
$content = $myposts[0]->post_content;
$postLink = get_permalink($postID);
$postTitle = get_the_title($postID);
$content = apply_filters( 'the_content', $content );
$content = str_replace(']]>', ']]&gt;', $content);

?>

<script type="text/javascript">

	function showShoutOut(){
		var arr = <?php echo json_encode($shout); ?>;
		var i=0;

		$("#inner").replaceWith('<div id="inner">'+arr[0]+'</div>');
		i++;
		
		setInterval(function(){
			if(i==arr.length){
				i=0;
			}
			$("#inner").replaceWith('<div id="inner">'+arr[i]+'</div>');
			i++;
		}, 10000);
	}

    $(document).ready(function(){

        $('.carousel').carousel();
	
        $('.bg-img').css({
            'width': screen.width + 'px',//window.innerWidth+'px',
            'height': screen.height + 'px'//window.innerHeight+'px'
        });
        
	//	document.body.style.backgroundImage="url('<?php echo $firstRowImage; ?>')";
		
		showShoutOut();		

		$(".next-half").offset({top: screen.height, left: 0});

		/*
		$(".next-half").css({
			'width': window.innerWidth + 'px'
			//'height': window.innerHeight + 'px'
		});*/

		$(".pure-square-image").css('height', $(".pure-square-image").width());
		$(".double-square-quote").css('height', $(".pure-square-image").width());
		$(".case-studies").css('height', $(".pure-square-image").width());
		
		var userFeed = new Instafeed({
			get: 'user',
			userId: 568670468,
			accessToken: '568670468.467ede5.e75c61ed550a4ac29e4a04132e2df709',
			limit: 1,
			resolution: 'standard_resolution',
			template: '<div class="bg" style="background-image: url({{image}})"><img src="<?php echo get_template_directory_uri(); ?>/library/instagramicon.png" style="margin-left: 40px; margin-top: 300px;"/></div>'
		});

		userFeed.run();

		$(".instagram").css('height', $(".pure-square-image").width());

		var ele = $('.pure-square-image-div').map(function(index){
			return this.id;
		}); 
		
		var rand1=3;

		//blocks to swap with the double block must not be the extreme right
		while(rand1==3 || rand1==5){
			rand1 = Math.floor(Math.random()*(ele.length-1));
		}
		
		var doubleBlock = $("#double");
		var doubleClone = doubleBlock.clone();
		doubleBlock.attr("id", "doubleRemove");
		console.log(doubleBlock);
		console.log(doubleClone);

		var block1 = $("#"+ele[rand1]);
		var block2 = $("#"+ele[rand1+1]);
		var blockClone1 = (block1.clone()).add(block2.clone());
		block2.remove();
		console.log(block2);
		block1.replaceWith(doubleClone);
		doubleBlock.replaceWith(blockClone1);

		
		//Randomizing single blocks
		for(var h=ele.length-1; h>0; h--){
			var r = Math.floor(Math.random() * (h+1));
			var v = Math.floor(Math.random() * (h+1));

			console.log(v);
			console.log(r);
			
			var content1 = $("#"+ele[v]);
			var content2 = $("#"+ele[r]);

			console.log(content1);
			console.log(content2);
			
			var clone1 = content1.clone();
			var clone2 = content2.clone();

			content1.replaceWith(clone2);
			content2.replaceWith(clone1);
			
		}


		$("#next-half-button").click(function() {
			$("body, html").animate({
				scrollTop:$(".next-half").offset().top 
			}, 1000);	
		});

		
		$(document).scroll(function(){
			var doc = $(document).scrollTop();
			var pageTop = $(".next-half").offset().top -100;
			var pageBottom = $(".next-half").offset().top + 26;
			if(doc>=pageTop && doc<=pageBottom){
				$("#menuButton").css('color', '#d4d8d9');
				$("#homePageNav").attr('src', '<?php echo get_template_directory_uri(); ?>/library/logogrey.png');
			} else {
				$("#menuButton").css('color', 'white');
				$("#homePageNav").attr('src', '<?php echo get_template_directory_uri(); ?>/library/logo.png');
			}
		});

		$(".arrow1").addClass("slideIn"); 

    });
    

</script>

<div class="row margin-0">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
<div id="backgroundSlider" class="carousel slide">
	<ol class="carousel-indicators">
		<li data-target="#backgroundSlider" data-slide-to="0" class="active"></li>
		<?php for($i=1; $i<count($rpImage); $i++): ?>
		<li data-target="#backgroundSlider" data-slide-to="<?php echo $i;?>"></li>
		<?php endfor;?>
	</ol>
	<div class="carousel-inner">
		<div class="item active">
			<img class="bg-img" src="<?php echo $firstRowImage['url']; ?>" style="max-width: none" />
			<div class="carousel-caption">
				<p>
					<?php echo $firstRowImage['title'] ?>
				</p>
			</div>
		</div>
		<?php 
		for($i=1; $i<count($rpImage); $i++):
		$ithRow = $rpImage[$i];
		?>
		<div class="item">
			<img class="bg-img" src="<?php echo $ithRow['bkg_image']['url']; ?>" style="max-width:none" />
			<div class="carousel-caption">
				<p>
					<?php echo $ithRow['bkg_image']['title']?>
				</p>
			</div>
		</div>
		<?php endfor; ?>
	</div>
</div>
<div class="row margin-0">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test">
		<div class="row margin-0">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test">
				<?php echo $title; ?>
				<br> <br>
			</div>
		</div>

		<div class="row margin-0">
			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 padding-0"
				id="shoutoutBox">
				<form role="form">
					<div class="row margin-0">
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 padding-0 shoutout">
							<img src="<?php echo get_template_directory_uri(); ?>/library/wireless.png" style="position: absolute; left: 4;"><div id="inner"></div><img src="<?php echo get_template_directory_uri(); ?>/library/ear.png" style="position: absolute; right: 1%; top: 20%;">
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
<div class="row margin-0 footer">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
		<img id="next-half-button" src="<?php echo get_template_directory_uri(); ?>/library/nextPageNav.png" style="position: relative; z-index: 2;"/>
	</div>
</div>
</div>
<div class="row margin-0" style="position: relative;">
	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 padding-0" style="position: absolute; right: 0; top: 0;">
		<img src="<?php echo get_template_directory_uri(); ?>/library/arrow.png" style="display: inline;" class="arrow1" />
		<img src="<?php echo get_template_directory_uri(); ?>/library/arrow.png" style="display: inline; position: relative; top: 120px;" class="arrow2"/>
		<img src="<?php echo get_template_directory_uri(); ?>/library/arrow.png" style="display: inline;" class="arrow3"/>
		<img src="<?php echo get_template_directory_uri(); ?>/library/arrow.png" style="display: inline; position: relative; top: 120px;" class="arrow4"/>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 padding-0"></div>
	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 padding-0" style="position: absolute; left: 0; bottom: 0;">
		<img src="<?php echo get_template_directory_uri(); ?>/library/arrow.png" style="display: inline;" class="arrow5"/>
		<img src="<?php echo get_template_directory_uri(); ?>/library/arrow.png" style="display: inline; position: relative; top: 120px;" class="arrow6"/>
		<img src="<?php echo get_template_directory_uri(); ?>/library/arrow.png" style="display: inline;" class="arrow7"/>
		<img src="<?php echo get_template_directory_uri(); ?>/library/arrow.png" style="display: inline; position: relative; top: 120px;" class="arrow8"/>
	</div>
</div>
</div>

<div class="row margin-0">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 next-half">
		<div class="row margin-0">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0" id="next-half-nav">
				<!-- HEADER HERE -->
			</div>
		</div>
		<?php $x=1; ?>
		<div class="row margin-0">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0" id="next-half-content">
				<div class="row margin-0">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">	
						<div class="row margin-0" id="firstRow">
						<?php for($i=0; $i<4; $i++): ?>
							<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding-0 pure-square-image-div" id="pic<?php echo $x++; ?>">
								<div class="row margin-0">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 pure-square-image" style="background-image: url('<?php echo $squareImageRepeater[$i]['square_image']; ?>'); height: 100px;">
										<div style="background-color: black; opacity: 0.4; height: 100%; width: 100%;"></div>
									</div>
								</div>
							</div>
						<?php endfor; ?>
						</div>
						<div class="row margin-0" id="secondRow">
							<?php for($j=4; $j<6; $j++): ?>
								<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding-0 pure-square-image-div" id="pic<?php echo $x++; ?>">
									<div class="row margin-0">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 pure-square-image" style="background-image: url('<?php echo $squareImageRepeater[$j]['square_image']; ?>'); height: 100px;">
											<div style="background-color: black; opacity: 0.4; height: 100%; width: 100%;"></div>
										</div>
									</div>
								</div>
							<?php endfor; ?>
							<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 padding 0 double-square-quote-div" id="double" >
								<div class="row margin-0">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 double-square-quote">
										<?php echo $doubleSquareQuote; ?>
									</div>
								</div>
							</div>
						</div>
						<div class="row margin-0" id="thirdRow">
							<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding-0 pure-square-image-div" id="insta">
								<div class="row margin-0">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 instagram" id="instafeed">
										
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding-0 pure-square-image-div" id="case">
								<div class="row margin-0">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 case-studies" style="background-image: url('<?php echo $caseStudyImage; ?>')">
										<div class="row margin-0"  style="background-color: black; opacity: 0.8; height: 100%; width: 100%;">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"">
												<div class="row margin-0">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 case-study-name">
														Case Studies
													</div>
												</div>
												<div class="row margin-0">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 case-study-title">
														<?php echo $caseStudyTitle; ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>								
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding-0 pure-square-image-div" id="blog">
								<div class="row margin-0 pure-square-image" style="background-color: #1d1d1e; height: 100%; width: 100%;">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
										<div class="row margin-0">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0" id="blog-title">
												BLOG
											</div>
										</div>
										<div class="row margin-0">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0" id="post-title">
											<?php echo $postTitle; ?>
											</div>
										</div>
										<div class="row margin-0">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-5" id="post-content">
											<?php echo get_field('content', $postID); ?>
											</div>
										</div>
									</div>
								</div>	
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding-0 pure-square-image-div" id="twitter">
								<div class="row margin-0 pure-square-image" id="twitter-inner">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
