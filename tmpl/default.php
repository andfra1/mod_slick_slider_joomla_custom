<?php 
// No direct access
defined('_JEXEC') or die; 
$doc->addStyleSheet('modules/mod_slickSlider/custom/slick-custom.css');
$doc->addStyleSheet('modules/mod_slickSlider/slick/slick.css');
$doc->addStyleSheet('modules/mod_slickSlider/slick/slick-theme.css');
?>
    
<div id="slickSlider">
    <div class="slickSlider_wrapper">
       <!-- slide 1 -->
        <?php if ($params->get('slide_1_image') !== null):?>
        <div>
           <img src="<?php echo($params->get('slide_1_image'))?>" alt="">
            <?php if ($params->get('slide_1_desc') !== null):?>
            <p>
                <?php echo($params->get('slide_1_desc'))?>
            </p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
       
        <!-- slide 2 -->
        <?php if ($params->get('slide_2_image') !== null):?>
        <div>
           <img src="<?php echo($params->get('slide_2_image'))?>" alt="">
            <?php if ($params->get('slide_2_desc') !== null):?>
            <p>
                <?php echo($params->get('slide_2_desc'))?>
            </p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
       <!-- slide 3 -->
        <?php if ($params->get('slide_3_image') !== null):?>
        <div>
           <img src="<?php echo($params->get('slide_3_image'))?>" alt="">
            <?php if ($params->get('slide_3_desc') !== null):?>
            <p>
                <?php echo($params->get('slide_3_desc'))?>
            </p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
       <!-- slide 4 -->
        <?php if ($params->get('slide_4_image') !== null):?>
        <div>
           <img src="<?php echo($params->get('slide_4_image'))?>" alt="">
            <?php if ($params->get('slide_4_desc') !== null):?>
            <p>
                <?php echo($params->get('slide_4_desc'))?>
            </p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
       <!-- slide 5 -->
        <?php if ($params->get('slide_5_image') !== null):?>
        <div>
           <img src="<?php echo($params->get('slide_5_image'))?>" alt="">
            <?php if ($params->get('slide_5_desc') !== null):?>
            <p>
                <?php echo($params->get('slide_5_desc'))?>
            </p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
       <!-- slide 6 -->
        <?php if ($params->get('slide_6_image') !== null):?>
        <div>
           <img src="<?php echo($params->get('slide_6_image'))?>" alt="">
            <?php if ($params->get('slide_6_desc') !== null):?>
            <p>
                <?php echo($params->get('slide_6_desc'))?>
            </p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
       <!-- slide 7 -->
        <?php if ($params->get('slide_7_image') !== null):?>
        <div>
           <img src="<?php echo($params->get('slide_7_image'))?>" alt="">
            <?php if ($params->get('slide_7_desc') !== null):?>
            <p>
                <?php echo($params->get('slide_7_desc'))?>
            </p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
       <!-- slide 8 -->
        <?php if ($params->get('slide_8_image') !== null):?>
        <div>
           <img src="<?php echo($params->get('slide_8_image'))?>" alt="">
            <?php if ($params->get('slide_8_desc') !== null):?>
            <p>
                <?php echo($params->get('slide_8_desc'))?>
            </p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
       <!-- slide 9 -->
        <?php if ($params->get('slide_9_image') !== null):?>
        <div>
           <img src="<?php echo($params->get('slide_9_image'))?>" alt="">
            <?php if ($params->get('slide_9_desc') !== null):?>
            <p>
                <?php echo($params->get('slide_9_desc'))?>
            </p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
       <!-- slide 10 -->
        <?php if ($params->get('slide_10_image') !== null):?>
        <div>
           <img src="<?php echo($params->get('slide_10_image'))?>" alt="">
            <?php if ($params->get('slide_10_desc') !== null):?>
            <p>
                <?php echo($params->get('slide_10_desc'))?>
            </p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
        
        
        </div>
</div>

<script type="text/javascript" src="modules/mod_slickSlider/slick/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="modules/mod_slickSlider/slick/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="modules/mod_slickSlider/slick/slick.min.js"></script>

<script type="text/javascript">
    jQuery('.slickSlider_wrapper').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: <?php echo($params->get('autoplay'))?>,
        autoplaySpeed: <?php echo($params->get('autoplayspeed'))?>,
        arrows: <?php echo($params->get('arrows'))?>,
        dots: <?php echo($params->get('indicators'))?>,
        infinite: true,
        mobileFirst: true,
        pauseOnHover: false,
        speed: <?php echo($params->get('animationspeed'))?>, //[int(ms)] Slide/Fade animation speed
        swipe: true, //[boolean] Enable swiping
        useCSS: true, //[boolean] Enable/Disable CSS Transitions
        useTransform: true, //[boolean] Enable/Disable CSS Transforms
    }).css({
        'width': <?php echo($params->get('slider-width'))?>,
        'max-height': <?php echo($params->get('slider-height'))?>
    }); //remove this if you don't want set maximum height of slider
</script>
