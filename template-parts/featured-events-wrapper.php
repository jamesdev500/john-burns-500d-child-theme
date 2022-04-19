<?php
$featured_events_args = array(
    'post_type' => array('tribe_events', 'events'),
    'posts_per_page' => 4,
    'meta_key'          => '_EventStartDateUTC',
    'orderby'           => 'meta_value',
    'order' => 'DESC',
    // 'order' => 'DESC',
    'meta_query' => array(
        'meta_query' => array(
            'relation' => 'AND',
            // array(
            //     'key'     => 'client-exclusive-event',
            //     'compare' => 'EXISTS',
            // ),
            // array(
            //     'key'     => 'featured',
            //     'compare' => 'EXISTS',
            // ),
            // array(
            //     'key'     => 'event-date',
            //     'compare' => 'EXISTS',
            // ),
            // array(
            //     'key'   => '_EventOrigin',
            //     'value' => 'events-calendar'
            // )
        )
    )
);

$featured_events = new WP_Query($featured_events_args);
$event_posts = $featured_events->posts;
?>

<div id="customFeaturedEvents" class="elementor-element" data-id="4be9d0b" data-element_type="widget" data-settings="{&quot;columns&quot;:&quot;3&quot;,&quot;columns_tablet&quot;:&quot;1&quot;}" data-widget_type="jet-listing-grid.default">
    <div class="elementor-widget-container">
        <div class="jet-listing-grid jet-listing">
            <div class="jet-listing-grid__items grid-col-desk-3 grid-col-tablet-1 grid-col-mobile-1 jet-listing-grid--417" data-nav="" data-page="1" data-pages="1" data-listing-source="posts">
                <!-- START featured event -->
                <?php partial('featured-events-top', [
                    'event' => $event_posts[0]
                ]) ?>
                <!-- END featured event -->
                <!-- START events row -->
                <div class="events-bottom container">
                    <?php 
                        foreach(array_slice($event_posts, 1, 3) as $key => $item) {
                            partial('event-box', [ 'item' => $item ]);
                        }
                    ?>
                </div>
                <!-- END events row -->

            </div>
            <!-- END EVENTS ROW -->
        </div>
    </div>
</div>
