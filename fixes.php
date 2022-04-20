<!-- 
THESE ARE ALL CODE SNIPPETS YOU CAN COPY AND PAST INTO YOUR
CODE TO MAKE ADJUSTMENTS FOR NON-UPDATED WORK IN THE COURSE 
-->





<!-- SETTINGS.JSON FILE IN VS CODE SHOULD HAVE THIS IF EMMET NOT WORKING: -->
{
    "liveServer.settings.donotShowInfoMsg": true,
    "files.autoSave": "afterDelay",
    "emmet.includeLanguages": {
        "php": "html"
    },
    "emmet.showExpandedAbbreviation": "always",
    "html-css-class-completion.enableEmmetSupport": true,
    "emmet.syntaxProfiles": {
        "php": "html"
    },
    "window.zoomLevel": -1
}

<!-- 
///////////////////
END OF CODE/SNIPPET 
///////////////////
-->

<!--
 LESSON 27 SECTION 7

When typing in your university_post_types.php file in the mu-plugins foler -

Be sure to addjust your code to look like this: 
-->

<?php
function university_post_types() {
    register_post_type('event', array(
        'public' => true,
        'menu_icon' => 'dashicons-tickets',
        'labels' => array(
            'name' => 'Events',
            // MAKE SURE THIS LINE OF CODE  BELOW MATCHES 
            'add_new' => 'Add New Event',
            // THIS ONE ^
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events'
        )
    ));
?>

<!-- 
///////////////////
END OF CODE/SNIPPET 
///////////////////
-->



<!-- 

LESSON 29 SECTION 7:

When you don't see any changes happening towards the middle and end of the video reference this
----------

STEP 1: Go to the WordPress admin Dashboard

STEP 2: Scroll down to SETTINGS

STEP 3: Click Permalinks Settings

STEP 4: Scroll down to the bottom and PRESS Save Changes


!!!!!!!You do NOT need to add or delete anything from the permalinks settings just press Save Changes -->


<!-- 
///////////////////
END OF CODE/SNIPPET 
///////////////////
-->



<!-- LESSON 30 SECTION 7:

If you have update your excerpts but still the excerpts not showing, try to change your article show.

1. Go to Settings > Reading.
2. Scroll to For each article in a feed, show.
3. Select Excerpt. -->


<!-- 
///////////////////
END OF CODE/SNIPPET 
///////////////////
-->


<!-- LESSON 31 SECTION 7:

Note: Advanced custom themes fields author's name is no longer Elliot,
 downlaod and activate the the one that matches the icon on the lesson.  -->

 <!-- 
///////////////////
END OF CODE/SNIPPET 
///////////////////
-->