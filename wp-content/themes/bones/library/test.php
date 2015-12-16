<?php
/*
Template Name: Test Template
*/
?>

<?php get_header(); ?>

<style type="text/css">
    #test {
        color: orange;
        font-size: 35px;
        padding: 10%;
    }
    .test h5{

    }
    #header-text{
        font-size: 40px;
        padding-top: 50px;
        font-family: Comic Sans MS, sans-serif;
        color: red;
        line-height: 50px;
        background: #000;

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
$home = get_page_by_title('Home');
$homeTitle = get_field('title', $home->ID);
$homeSubTitle = get_field('sub_title', $home->ID);
$homeBlocks = get_field('repeater_blocks', $home->ID);

?>

<script type="text/javascript">
    shitian = 'test';
    $(document).ready(function () {
        var lacie = '<?php echo $homeTitle;?>';
        var blocks = '<?php json_encode($homeBlocks); ?>';
        console.log(lacie, blocks);

        $(".test").each(function(i){

            //i wanna do somthing
        });
        console.log(shitian, lacie);
    });
</script>
<div class="row margin-0">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 text-center">

    </div>
</div>

<div class="row margin-0" style="background: linear-gradient(black, white)">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test text-centre" >
        <div class="row margin-0">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test" >
                <div class="row margin-0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test text-center" id="header-text" >
                       WELCOME TO SHITIAN AND LACIE'S PAGE
                        <?php echo $homeTitle; 
                        echo get_page_template();?>
                    </div>
                </div>
                <div class="row margin-0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test text-center" >
                        where all your nightmares come true
                        <?php echo $homeSubTitle; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row margin-0">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test text-center" >
                <div class="row margin-0">
                    <?php if($homeBlocks): ?>
                        <?php foreach($homeBlocks as $block) : ?>
                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 padding-0 test" >
                                <div class="row margin-0 text-center">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test" >
                                        <img src="<?php echo $block['image']; ?>" />
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test" >
                                        <?php echo $block['title']; ?>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test" >
                                        <?php echo $block['content']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php else: ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
        for($homeBlocks as $block){

        }





        <div class="row margin-0 text-center">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 padding-0 test" >
                <div class="row margin-0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test" >
                         <img src="/wp-content/themes/bones/library/images/test.png" height="100px"/>
                    </div>
                </div>
                <div class="row margin-0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test" >
                        <?php wp_list_pages('sort_column=menu_order'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 padding-0 test" >
                <div class="row margin-0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test" >
                        Lacie picture 1
                    </div>
                </div>
                <div class="row margin-0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test" >
                        Lacie k
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row margin-0">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test" >
        <div class="row margin-0">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test" >
                <div class="row margin-0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test" >
                        <div class="row margin-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test" >
                                <div class="row margin-0">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test" >
                                        <div class="row margin-0">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test" >
                                                <div class="row margin-0">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0 test" >
                                                        <img src="http://lorempixel.com/1470/800/"/>
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
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
