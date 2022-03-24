<?php

/**
 * View: List Event
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/list/event.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version 5.0.0
 *
 * @var WP_Post $event The event post object with properties added by the `tribe_get_event` function.
 *
 * @see tribe_get_event() For the format of the event object.
 */

$container_classes = ['tribe-common-g-row', 'tribe-events-calendar-list__event-row'];
$container_classes['tribe-events-calendar-list__event-row--featured'] = $event->featured;

$event_classes = tribe_get_post_class(['tribe-events-calendar-list__event', 'tribe-common-g-row', 'tribe-common-g-row--gutters'], $event->ID);
?>
<div <?php tribe_classes($container_classes); ?>>

    <?php $this->template('list/event/date-tag', ['event' => $event]); ?>

    <div class="tribe-events-calendar-list__event-wrapper tribe-common-g-col">
        <article <?php tribe_classes($event_classes) ?>>
            <?php $this->template('list/event/featured-image', ['event' => $event]); ?>

            <div class="tribe-events-calendar-list__event-details tribe-common-g-col">

                <header class="tribe-events-calendar-list__event-header">
                    <?php $this->template('list/event/date', ['event' => $event]); ?>
                    <?php $this->template('list/event/title', ['event' => $event]); ?>
                    <?php // $this->template( 'list/event/venue', [ 'event' => $event ] ); 
                    ?>
                    <?php $event_organizer = tribe_get_organizer($event->ID); ?>
                    <?php if ($event_organizer) : ?>
                        <div class="tribe-events-calendar-list__event-organizer">
                            by&nbsp;<?php echo $event_organizer; ?>
                        </div>
                    <?php endif; ?>
                </header>

                <?php $this->template('list/event/description', ['event' => $event]); ?>
                <a href="<?php echo tribe_get_event_website_url($event); ?>" class="tribe-events-calendar-list__event-url">Join Event&nbsp;&nbsp;
                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 11L6 6L1 1" stroke="#1E6FD9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                <?php // $this->template('list/event/cost', ['event' => $event]); 
                ?>

            </div>
        </article>
    </div>

</div>