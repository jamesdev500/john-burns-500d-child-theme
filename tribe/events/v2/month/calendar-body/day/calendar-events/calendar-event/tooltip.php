<?php

/**
 * View: Month View - Calendar Event Tooltip
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/month/calendar-body/day/calendar-events/calendar-event/tooltip.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version 4.9.13
 *
 * @var WP_Post $event The event post object with properties added by the `tribe_get_event` function.
 *
 * @see tribe_get_event() For the format of the event object.
 */

?>
<div class="tribe-events-calendar-month__calendar-event-tooltip-template tribe-common-a11y-hidden">
    <div class="tribe-events-calendar-month__calendar-event-tooltip" id="tribe-events-tooltip-content-<?php echo esc_attr($event->ID); ?>" role="tooltip">
        <?php $this->template('month/calendar-body/day/calendar-events/calendar-event/tooltip/featured-image', ['event' => $event]); ?>
        <div class="tribe-events-calendar-month__calendar-event-tooltip-info-container">
            <?php $this->template('month/calendar-body/day/calendar-events/calendar-event/tooltip/title', ['event' => $event]); ?>
            <div class="tribe-events-calendar-month__calendar-event-tooltip-date">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 3.66667V7L9 9M13 7C13 10.3137 10.3137 13 7 13C3.68629 13 1 10.3137 1 7C1 3.68629 3.68629 1 7 1C10.3137 1 13 3.68629 13 7Z" stroke="#1E6FD9" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <?php echo tribe_get_start_date($event, false, 'F j, Y'); ?>
            </div>
            <?php $event_location = tribe_get_venue($event); ?>
            <?php if ($event_location) : ?>
                <div class="tribe-events-calendar-month__calendar-event-tooltip-location">
                    <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3337 6.33333C11.3337 9.27885 8.94584 11.6667 6.00033 13C3.05481 11.6667 0.666992 9.27885 0.666992 6.33333C0.666992 3.38781 3.05481 1 6.00033 1C8.94584 1 11.3337 3.38781 11.3337 6.33333Z" stroke="#1E6FD9" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.00033 6.33333C8.00033 7.4379 7.1049 8.33333 6.00033 8.33333C4.89576 8.33333 4.00033 7.4379 4.00033 6.33333C4.00033 5.22876 4.89576 4.33333 6.00033 4.33333C7.1049 4.33333 8.00033 5.22876 8.00033 6.33333Z" stroke="#1E6FD9" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <?php echo $event_location; ?>
                </div>
            <?php endif; ?>

            <?php $fields = tribe_get_custom_fields($event->ID); ?>
            <?php if ($fields['Speaker']) : ?>
                <div class="tribe-events-calendar-month__calendar-event-tooltip-speaker">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3337 11.3334V10.0001C11.3337 8.52732 10.1398 7.33341 8.66699 7.33341H3.33366C1.8609 7.33341 0.666992 8.52732 0.666992 10.0001V11.3334M8.66699 3.33341C8.66699 4.80617 7.47308 6.00008 6.00033 6.00008C4.52757 6.00008 3.33366 4.80617 3.33366 3.33341C3.33366 1.86066 4.52757 0.666748 6.00033 0.666748C7.47308 0.666748 8.66699 1.86066 8.66699 3.33341Z" stroke="#1E6FD9" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <?php echo $fields['Speaker']; ?>
                </div>
            <?php endif; ?>

            <div class="tribe-events-calendar-month__calendar_event-tooltip-join">
                <a href="<?php echo esc_url($event->permalink) ?>">
                    Join Event&nbsp;&nbsp;
                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 11L6 6L1 1" stroke="#1E6FD9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>


        <?php // $this->template('month/calendar-body/day/calendar-events/calendar-event/tooltip/date', ['event' => $event]); 
        ?>
        <?php // $this->template('month/calendar-body/day/calendar-events/calendar-event/tooltip/description', ['event' => $event]); 
        ?>
        <?php // $this->template('month/calendar-body/day/calendar-events/calendar-event/tooltip/cost', ['event' => $event]); 
        ?>
    </div>
</div>