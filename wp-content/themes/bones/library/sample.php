<?php
/*
Template Name: sample
*/
?>

<?php get_header(); ?>

<style type="text/css">
    #header-text{
        font-size: 40px;
        padding-top: 50px;
        font-family: Comic Sans MS, sans-serif;
        color: red;
        line-height: 50px;
        background: #000;

    }
    
    .borderedText{
    	padding: 20px;
    	width: 180px;
    	margin: 25px;
    }
    
    .row-centered{
    	text-align:center;
    }
    
    .col-centered{
    	display: inline-block;
    	float: none;
    	text-align:center;
    	margin-right:-4px;
    }
    
    .test{
    	border: 2px solid #99FF99;
    	padding: 50px;
    }

    /* Desktop lg */
    @media (max-width: 1280px) {

    }

    /* Tablet md */
    @media (max-width: 992px) {

    }

    /* Plabet sm */
    @media (max-width: 768px) {

    }

    /* Mobile xs*/
    @media (max-width: 480px) {

    }
</style>

<?php
global $post;
$home = get_page_by_title("HOme");
$backgroundColor = get_field('bgcolor', $home->ID);
$boxedText = get_field('boxed_text', $home->ID);
$image = get_field('image', $home->ID);
$description = get_field('description', $home->ID);


?>

<script type="text/javascript">
    $(document).ready(function () {
		//document.body.style.backgroundColor="<?php echo $backgroundColor; ?>";
		//$(".borderedText").css("border", "2px solid <?php echo $boxedText[0]['border_color']; ?>");
    });
</script>

<div class="row margin-0">
    <div class="col-lg-6 col-lg-offset-3 col-md-12 col-sm-12 col-xs-12 padding-0 text-center test" style="color: #8D8D7D; margin-top: 230px">
			HIHI
    </div>
    <div class="col-lg-6 col-lg-offset-3 col-md-12 col-sm-12 col-xs-12 padding-0 text-center test" style="color: #8D8D7D; margin-top: 230px">
			HIHI
    </div>
</div>



<?php get_footer(); ?>
