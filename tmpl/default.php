<?php 
// No direct access
defined('_JEXEC') or die ('Restricted access');
?>

<div id="slickSlider">
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

<script type="text/javascript" src="modules/mod_slick_slider/slick/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="modules/mod_slick_slider/slick/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="modules/mod_slick_slider/slick/slick.min.js"></script>

<script type="text/javascript">
    jQuery('#slickSlider').slick({
        accessibility: <?php echo($params->get('accessibility'))?>, //[boolean] Enables tabbing and arrow key navigation
        adaptiveHeight: <?php echo($params->get('adaptiveHeight'))?>, //[boolean] Enables adaptive height for single slide horizontal carousels.
        autoplay: <?php echo($params->get('autoplay'))?>, //[boolean] Enables Autoplay
        autoplaySpeed: <?php echo($params->get('autoplayspeed'))?>, //[int(ms)] Autoplay Speed in milliseconds
        arrows: <?php echo($params->get('arrows'))?>, //[boolean] Prev/Next Arrows
        asNavFor: <?php echo($params->get('asNavFor'))?>, // [string] Set the slider to be the navigation of other slider (Class or ID Name)
        //appendArrows: $(element), [string]Change where the navigation arrows are attached (Selector, htmlString, Array, Element, jQuery object)
        //appendDots: $(element), [string]Change where the navigation dots are attached (Selector, htmlString, Array, Element, jQuery object)
        prevArrow: "<?php echo($params->get('prevArrow'))?>", //Allows you to select a node or customize the HTML for the "Previous" arrow.
        nextArrow: "<?php echo($params->get('nextArrow'))?>", //Allows you to select a node or customize the HTML for the "Next" arrow.
        centerMode: <?php echo($params->get('centerMode'))?>, //[boolean] Enables centered view with partial prev/next slides. Use with odd numbered slidesToShow counts.
        centerPadding: '<?php echo($params->get('centerPadding'))?>', //[string] Side padding when in center mode (px or %)
        cssEase: '<?php echo($params->get('cssEase'))?>', //[string] CSS3 Animation Easing
        dots: <?php echo($params->get('indicators'))?>, //[boolean] Show dot indicators
        dotsClass: '<?php echo($params->get('dotsClass'))?>', //[string] Class for slide indicator dots container
        draggable: <?php echo($params->get('draggable'))?>, //[boolean] Enable mouse dragging
        fade: <?php echo($params->get('fade'))?>, //[boolean] Enable fade
        focusOnSelect: <?php echo($params->get('focusOnSelect'))?>, //[boolean] Enable focus on selected element (click)
        easing: '<?php echo($params->get('easing'))?>', //[string] Add easing for jQuery animate. Use with easing libraries or default easing methods
        edgeFriction: <?php echo($params->get('edgeFriction'))?>, //[integer] Resistance when swiping edges of non-infinite carousels
        infinite: <?php echo($params->get('infinite'))?>, //[boolean] Infinite loop sliding
        initialSlide: <?php echo($params->get('initialSlide'))?>, //[integer] Slide to start on
        lazyLoad: '<?php echo($params->get('lazyLoad'))?>', //[string] Set lazy loading technique. Accepts 'ondemand' or 'progressive'
        mobileFirst: <?php echo($params->get('mobileFirst'))?>, //[boolean] Responsive settings use mobile first calculation
        pauseOnFocus: <?php echo($params->get('pauseOnFocus'))?>, //[boolean] Pause Autoplay On Focus
        pauseOnHover: <?php echo($params->get('pauseOnHover'))?>, //[boolean] Pause Autoplay On Hover
        pauseOnDotsHover: <?php echo($params->get('pauseOnDotsHover'))?>, //[boolean] Pause Autoplay when a dot is hovered
        respondTo: '<?php echo($params->get('respondTo'))?>', //[string] Width that responsive object responds to. Can be 'window', 'slider' or 'min' (the smaller of the two)
        //responsive: none, //[object] Object containing breakpoints and settings objects (see demo). Enables settings sets at given screen width. Set settings to "unslick" instead of an object to disable slick at a given breakpoint.
        rows: <?php echo($params->get('rows'))?>, //[int] Setting this to more than 1 initializes grid mode. Use slidesPerRow to set how many slides should be in each row.
        slide: '<?php echo($params->get('slide'))?>', //[element] Element query to use as slide
        slidesPerRow: <?php echo($params->get('slidesPerRow'))?>, //[int] With grid mode intialized via the rows option, this sets how many slides are in each grid row. dver
        slidesToShow: <?php echo($params->get('slidesToShow'))?>, //[int] # of slides to show
        slidesToScroll: <?php echo($params->get('slidesToScroll'))?>, //[int] # of slides to scroll
        speed: <?php echo($params->get('animationspeed'))?>, //[int(ms)] Slide/Fade animation speed
        swipe: <?php echo($params->get('swipe'))?>, //[boolean] Enable swiping
        swipeToSlide: <?php echo($params->get('swipeToSlide'))?>, //[boolean] Allow users to drag or swipe directly to a slide irrespective of slidesToScroll
        touchMove: <?php echo($params->get('touchMove'))?>, //[boolean] Enable slide motion with touch
        touchThreshold: <?php echo($params->get('touchThreshold'))?>, //[int] To advance slides, the user must swipe a length of (1/touchThreshold) * the width of the slider
        useCSS: <?php echo($params->get('useCSS'))?>, //[boolean] Enable/Disable CSS Transitions
        useTransform: <?php echo($params->get('useTransform'))?>, //[boolean] Enable/Disable CSS Transforms
        variableWidth: <?php echo($params->get('variableWidth'))?>, //[boolean] Variable width slides
        vertical: <?php echo($params->get('vertical'))?>, //[boolean] Vertical slide mode
        verticalSwiping: <?php echo($params->get('verticalSwiping'))?>, //[boolean] Vertical swipe mode
        rtl: false, //[boolean] Change the slider's direction to become right-to-left
        waitForAnimate: <?php echo($params->get('waitForAnimate'))?>, //[boolean] Ignores requests to advance the slide while animating
        zIndex: <?php echo($params->get('zIndex'))?> //[number] Set the zIndex values for slides, useful for IE9 and lower
    }).css({
        'width': <?php echo($params->get('slider-width'))?>,
        'max-height': <?php echo($params->get('slider-height'))?>
    });

</script>
