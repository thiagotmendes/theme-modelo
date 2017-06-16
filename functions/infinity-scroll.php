<?php
/*************************
WEB REVENUE INFINITE SCROLLING
*************************/
/*
Function that will register and enqueue the infinite scolling's script to be used in the theme.
*/
function twentytwelve_script_infinite_scrolling(){
    wp_register_script(
        'infinite_scrolling',//name of script
        get_template_directory_uri().'/assets/js/infinityscroll.js',//where the file is
        array('jquery'),//this script requires a jquery script
        null,//don't have a script version number
        true//script will de placed on footer
    );
    if(!is_singular()){ //only when we have more than 1 post
        //we'll load this script
        wp_enqueue_script('infinite_scrolling');
    }
}
//Register our custom scripts!
add_action('wp_enqueue_scripts', 'twentytwelve_script_infinite_scrolling');
/*
Function that will set infinite scrolling to be displayed in the page.
*/
function set_infinite_scrolling(){
    if(!is_singular()){//again, only when we have more than 1 post
    //add js script below
    ?>
        <script type="text/javascript">
            /*
                This is the inifinite scrolling setting, you can modify this at your will
            */
            var inf_scrolling = {
                /*
                    img: is the loading image path, add a nice gif loading icon there
                    msgText: the loading message
                    finishedMsg: the finished loading message
                */
                loading:{
                    img: "http://i.imgur.com/T3Ht7S3.gif",
                    msgText: "Loading next posts....",
                    finishedMsg: "Posts loaded!!",
                },
                /*Next item is set nextSelector.
                NextSelector is the css class of page navigation.
                In our case is #nav-below .nav-previous a
                */
                "nextSelector":"#nav-below .nav-previous a",
                //navSelector is a css id of page navigation
                "navSelector":"#nav-below",
                //itemSelector is the div where post is displayed
                "itemSelector":"article",
                //contentSelector is the div where page content (posts) is displayed
                "contentSelector":".scroll"
            };
            /*
                Last thing to do is configure contentSelector to infinite scroll,
                with a function jquery from infinite-scroll.min.js
            */
            jQuery(inf_scrolling.contentSelector).infinitescroll(inf_scrolling);
        </script>
    <?php
    }
}
/*
    we need to add this action on page's footer.
    100 is a priority number that correpond a later execution.
*/
add_action( 'wp_footer', 'set_infinite_scrolling',100);
