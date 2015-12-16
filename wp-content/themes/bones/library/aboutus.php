<?php
/*
 Template Name: About Us
*/
?>

<?php get_header(); ?>

<style type="text/css">


@media ( max-width : 1280px) {
}

@media ( max-width : 992px) {
}

@media ( max-width : 768px) {
}

@media ( max-width : 480px) {
}

#banner{
background-image: url('<?php echo get_template_directory_uri(); ?>/library/aboutbanner.jpg');
background-repeat: no-repeat;
background-size: cover;
margin-top: 130px;
height: 450px;
width: 100%;
}

#banner-title{
color: white;
padding-left: 8%;
padding-top: 8%;
font-size: 79px;
letter-spacing: 3px;
}

.tag-title{
font-size: 60px;
font-family: bebas_neueregular;
margin-bottom: 7%;
}

#content{
padding: 8%;
font-family: Lato;
font-size: 20px;
}

#content-two{
padding: 8%;
}

.title-with-content{
padding-top: 6%;
padding-right: 10%;
}

#about-image{
margin-top: 150px;
right: 0px;
position: absolute;
}

#team-title{
color: #e73137;
font-size: 50px;
letter-spacing: 2px;
padding-left: 1%;
}

#author{
color: #e73137;
font-size: 27px;
padding-left: 20%;
padding-top: 3%;
text-transform: uppercase;
}

#quote{
font-size: 40px;
color: black;
text-transform: uppercase; 
text-align: justify;
padding-left: 20%;
line-height: 150%;
padding-right: 1%;
}

.team-photo{
position: relative;
background-size: cover;
background-repeat: no-repeat;
}

#team {
margin-top: 140px;
}

.member-description {
background-color: rgba(231, 49, 55, 0.4);
color: white;
text-align: center;
position: absolute;
display: none;
top: 0px;
left: 0px; 
height: 100%;
width: 100%;
}

.member-name {
margin-top: 20%;
font-size: 30px;
letter-spacing: 2px;
}

.member-position{
font-size: 20px;
font-family: Lato;
}

.member-quote {
margin-top: 5%;
font-weight: bold;
font-size: 20px;
font-family: Lato;
}

.div-wrapper{
padding: 1%;
background-color: transparent;
float: left;
}
</style>

<?php
global $post;
$aboutPage = get_page_by_title('about');
$title = get_field('home_title', $aboutPage->ID);
$image = get_field('single_image', $aboutPage->ID);
$main_content = get_field('single_content_block', $aboutPage->ID);
$content_repeater = get_field('tags', $aboutPage->ID);
$quote = get_field('main_quote', $aboutPage->ID);
$author = get_field('author', $aboutPage->ID);

$ourTeam = get_field('about_page_team', $aboutPage->ID);
$numOfMembers = count($ourTeam);
/*
$shoutout = get_field('repeater_shoutout_textbox', $homePage->ID);
$shout=array();
foreach($shoutout as $s){
	array_push($shout, $s['shoutout']);
}

/*$first_row = $shoutout[0];

$rows = $first_row['shoutout'];
$numOfShoutouts = count($shoutout);
$num=0;

function getShoutOut($number){
	global $shoutout;
	return $shoutout[$number]['shoutout'];
}

$rpImage = get_field('repeater_background_image');
$firstRow = $rpImage[0];
$firstRowImage = $firstRow['bkg_image'];*/
?>

<script type="text/javascript">
$(document).ready(function(){
	$("#menuButton").css('color', 'black');
	var h = $("#header-content").height().toString() + "px";
	$("#team-title").css('height', h); 

	$("#about-image").css('width', $("#parent").width());
	$(".team-photo").css('height', $(".team-photo").width());

	$(".team-photo").mouseenter(function(){
		$(this).find(".member-description").fadeIn(500);
	});

	$(".team-photo").mouseleave(function(){
		$(".member-description").fadeOut(500);
	});

	$("#menuButton").css('color', '#d4d8d9');
	$("#homePageNav").attr('src', '<?php echo get_template_directory_uri(); ?>/library/logogrey.png');

});

</script>

<div class="row margin-0">
	<div id="banner" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test">
		<div class="row margin-0" id="banner-title">
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 padding-0">
			<?php echo $title; ?>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 padding-0">
			<img src="<?php echo get_template_directory_uri(); ?>/library/aboutlogo.png"/>
			</div>
		</div>
	</div>
</div>

<div class="row margin-0">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
		<div class="row margin-0">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 padding-0" id="content">
				<div class="row margin-0">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
					<?php echo $main_content;?>
					</div>
				</div>
				<div class="row margin-0">
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 padding-0 title-with-content" >
						<div class="row margin-0">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 tag-title" style="color: <?php echo $content_repeater[0]['tag_title_color']; ?>">
								<?php echo $content_repeater[0]['tag_title']; ?>
							</div>
						</div>
						<div class="row margin-0">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
								<?php echo $content_repeater[0]['tag_content']; ?>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 padding-0 title-with-content">
						<div class="row margin-0">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 tag-title" style="color: <?php echo $content_repeater[1]['tag_title_color']; ?>">
								<?php echo $content_repeater[1]['tag_title']; ?>
							</div>
						</div>
						<div class="row margin-0">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
								<?php echo $content_repeater[1]['tag_content']?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 padding-0" id="parent">
				<img src="<?php echo $image; ?>" id="about-image" style="opacity: 0.7" class="img-responsive"/>
			</div>
			<div class="row margin-0">
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 padding-0" style="position: absolute; right: 0; top: 0;">
					<img src="<?php echo get_template_directory_uri(); ?>/library/arrowgrey.png" style="display: inline; float: right;" class="arrow1" />
					<img src="<?php echo get_template_directory_uri(); ?>/library/arrowgrey.png" style="display: inline; float: right; position: relative; top: 120px;" class="arrow2"/>
					<img src="<?php echo get_template_directory_uri(); ?>/library/arrowgrey.png" style="display: inline; float: right;" class="arrow3"/>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row margin-0">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
		<img src="<?php echo get_template_directory_uri(); ?>/library/right.png" style="position: absolute; right:0; width: 70%;"/>
		<img src="<?php echo get_template_directory_uri(); ?>/library/left.png" style="position: absolute; left: 0; top: 65px; width: 32.5%;"/>
	</div>
</div>

<div class="row margin-0">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0" id="content-two">
		<div class="row margin-0" id="header-content">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding-0" id="team-title" style="position: relative">
				<div style="position:absolute; bottom: 0px;">OUR TEAM</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding-0">
				<div class="row margin-0">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0" id="quote">
						<span style="color:red; font-size: 40px;">"</span><?php echo $quote; ?><span style="color:red; font-size: 40px;">"</span>
					</div>
				</div>
				<div class="row margin-0">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0" id="author">
						- <?php echo $author; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row margin-0">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0" id="team">
				<?php for($i=0; $i<=$numOfMembers/4; $i++): ?>
						<div class = "row margin-0">
							<?php for($j=$i*4; $j<$i*4+4; $j++):
								if($j==$numOfMembers):
									break;
								endif;
							?>
							<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 div-wrapper">
								<div class="row margin-0">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 team-photo" style="background-image: url('<?php echo $ourTeam[$j]['photo']; ?>')">
										<div class="row margin-0" > 
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 member-description">
												<div class="row margin-0">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 member-name">
														<?php echo $ourTeam[$j]['name_of_member']; ?>
													</div>
												</div>
												<div class="row margin-0">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 member-position">
														<?php echo $ourTeam[$j]['position']; ?>
													</div>
												</div>
												<div class="row margin-0">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 member-quote">
														"<?php echo $ourTeam[$j]['personal_quote'];?>"
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endfor; ?>
						</div>
				<?php endfor;?>	
				
			</div>
		</div>
		<div class="row margin-0">
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 padding-0" style="position: absolute; z-index:-1; left: 30px; bottom: -70px; overflow: hidden;">
				<img src="<?php echo get_template_directory_uri(); ?>/library/arrowgrey.png" style="display: inline; float: left;" class="arrow1" />
				<img src="<?php echo get_template_directory_uri(); ?>/library/arrowgrey.png" style="display: inline; float: left; position: relative; top: 120px;" class="arrow2"/>
				<img src="<?php echo get_template_directory_uri(); ?>/library/arrowgrey.png" style="display: inline; float: left;" class="arrow3"/>
				<img src="<?php echo get_template_directory_uri(); ?>/library/arrowgrey.png" style="display: inline; position: relative; top: 120px;" class="arrow4"/>
			</div>
		</div>	
		<div class="row margin-0">
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 padding-0" style="position: absolute; z-index:-1; top: 50%;">
				<img src="<?php echo get_template_directory_uri(); ?>/library/teambg.png" style="width: 210%"/>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
