<?php
$item = $data['event'];
$event_url = '#';

$startMonth = tribe_format_date(get_post_meta($item->ID, '_EventStartDate', true), false, 'F');
$endMonth = tribe_format_date(get_post_meta($item->ID, '_EventEndDate', true), false, 'F');
$startDay = tribe_format_date(get_post_meta($item->ID, '_EventStartDate', true), false, 'j');
$endDay = tribe_format_date(get_post_meta($item->ID, '_EventEndDate', true), false, 'j');
$year = tribe_format_date(get_post_meta($item->ID, '_EventStartDate', true), false, 'Y');
if ($startMonth == $endMonth && $startDay != $endDay) {
    $formattedDate = $startMonth . ' ' . $startDay . '-' . $endDay . ', ' . $year;
} else {
    $formattedDate = tribe_format_date(get_post_meta($item->ID, '_EventStartDate', true), false, 'F j, Y');
}

if (get_the_post_thumbnail_url($item->ID, 'large')) {
    $thumb_url = get_the_post_thumbnail_url($item->ID, 'medium');
}

if (get_post_meta($item->ID, '_EventVenueID', true)) {
    $venue = get_the_title(get_post_meta($item->ID, '_EventVenueID', true));
}

if (get_post_meta($item->ID, '_ecp_custom_2', true)) {
    $speaker = get_post_meta($item->ID, '_ecp_custom_2', true);
}


if (get_post_meta($item->ID, '_ecp_custom_4', true) === 'Yes') {
    $client_exclusive = true;
}

if (get_post_meta($item->ID, '_EventURL', true)) {
    $event_url = get_post_meta($item->ID, '_EventURL', true);
}
?>

<div class="featured-top">
    <div class="row container">
        <div class="col">
            <div class="img-wrap">
                <img width="800" height="514" src="<?= $thumb_url ?>" class="attachment-large size-large" alt="" loading="lazy">
            </div>
        </div>
        <div class="col text-col">
            <h3><?= $item->post_title ?></h3>
            <?php if ($client_exclusive) : ?>
                <div class="is-exclusive">
                    <p>*Client-Exclusive Event</p>
                </div>
            <?php endif; ?>
            <div class="event-meta">
                <?php if ($formattedDate) : ?>
                    <div class="meta-item">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M10 5V10L13 13M19 10C19 14.9706 14.9706 19 10 19C5.02944 19 1 14.9706 1 10C1 5.02944 5.02944 1 10 1C14.9706 1 19 5.02944 19 10Z" stroke="#438AE6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                        <span class="text">
                            <?= $formattedDate ?>
                        </span>
                    </div>
                <?php endif; ?>
                <?php if ($venue) : ?>
                    <div class="meta-item">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
                                <path d="M17 9C17 13.4183 13.4183 17 9 19C4.58172 17 1 13.4183 1 9C1 4.58172 4.58172 1 9 1C13.4183 1 17 4.58172 17 9Z" stroke="#438AE6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M12 9C12 10.6569 10.6569 12 9 12C7.34315 12 6 10.6569 6 9C6 7.34315 7.34315 6 9 6C10.6569 6 12 7.34315 12 9Z" stroke="#438AE6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                        <span class="text"><?= $venue ?></span>
                    </div>
                <?php endif; ?>
                <?php if ($speaker) : ?>
                    <div class="meta-item">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M17 17V15C17 12.7909 15.2091 11 13 11H5C2.79086 11 1 12.7909 1 15V17M13 5C13 7.20914 11.2091 9 9 9C6.79086 9 5 7.20914 5 5C5 2.79086 6.79086 1 9 1C11.2091 1 13 2.79086 13 5Z" stroke="#438AE6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg> </span>
                        <span class="text"><?= $speaker ?></span>
                    </div>
                <?php endif; ?>
            </div>

            <div class="event-button">
                <a role="button" href="<?= $event_url ?>" target="_blank">
                    <div class="wrapper">
                        <span class="text">Join Event</span>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                <path d="M4.5 5L3 5C1.89543 5 1 5.89543 1 7L1 14C1 15.1046 1.89543 16 3 16L10 16C11.1046 16 12 15.1046 12 14L12 12.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M13.8392 2.8284L7.8288 8.83881M13.8392 2.8284L13.8392 8.48526M13.8392 2.8284L8.18235 2.8284" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>

</div>