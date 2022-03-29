<?php
$item = $data['item'];
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

<div class="jet-listing-grid__item jet-listing-dynamic-post-344" data-post-id="344">
    <div data-elementor-type="jet-listing-items" data-elementor-id="417" class="elementor custom-event-box" data-elementor-settings="[]">
        <div class="elementor-section-wrap">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-65904c6 elementor-section-boxed elementor-section-height-default elementor-section-height-default jet-parallax-section" data-id="65904c6" data-element_type="section" data-settings="">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-efbc985" data-id="efbc985" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-a67c280 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default" data-id="a67c280" data-element_type="section" data-settings="{&quot;jet_parallax_layout_list&quot;:[]}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-43630d2" data-id="43630d2" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-df44089 elementor-widget elementor-widget-heading is-mac" data-id="df44089" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default"><?= $item->post_title ?></h2>
                                                </div>
                                            </div>
                                            <?php if ($client_exclusive) : ?>
                                                <div class="elementor-element elementor-element-eedd5f9 jedv-enabled--yes elementor-widget elementor-widget-heading is-mac" data-id="eedd5f9" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">*Client-Exclusive Event</p>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-331c3a9 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default" data-id="331c3a9" data-element_type="section" data-settings="{&quot;jet_parallax_layout_list&quot;:[]}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-744aede" data-id="744aede" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-c68bd72 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-hidden-laptop elementor-hidden-tablet_extra elementor-hidden-mobile_extra elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list is-mac" data-id="c68bd72" data-element_type="widget" data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                    <path d="M10 5V10L13 13M19 10C19 14.9706 14.9706 19 10 19C5.02944 19 1 14.9706 1 10C1 5.02944 5.02944 1 10 1C14.9706 1 19 5.02944 19 10Z" stroke="#438AE6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text"><?= $formattedDate ?></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-eebdf9b elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list is-mac" data-id="eebdf9b" data-element_type="widget" data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                    <path d="M10 5V10L13 13M19 10C19 14.9706 14.9706 19 10 19C5.02944 19 1 14.9706 1 10C1 5.02944 5.02944 1 10 1C14.9706 1 19 5.02944 19 10Z" stroke="#438AE6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text"><?= $formattedDate ?></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <?php if ($venue) : ?>
                                                <div class="elementor-element elementor-element-f884c28 jedv-enabled--yes elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-hidden-laptop elementor-hidden-tablet_extra elementor-hidden-mobile_extra elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list is-mac" data-id="f884c28" data-element_type="widget" data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
                                                                        <path d="M17 9C17 13.4183 13.4183 17 9 19C4.58172 17 1 13.4183 1 9C1 4.58172 4.58172 1 9 1C13.4183 1 17 4.58172 17 9Z" stroke="#438AE6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M12 9C12 10.6569 10.6569 12 9 12C7.34315 12 6 10.6569 6 9C6 7.34315 7.34315 6 9 6C10.6569 6 12 7.34315 12 9Z" stroke="#438AE6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text"></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1d03271 jedv-enabled--yes elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list is-mac" data-id="1d03271" data-element_type="widget" data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
                                                                        <path d="M17 9C17 13.4183 13.4183 17 9 19C4.58172 17 1 13.4183 1 9C1 4.58172 4.58172 1 9 1C13.4183 1 17 4.58172 17 9Z" stroke="#438AE6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M12 9C12 10.6569 10.6569 12 9 12C7.34315 12 6 10.6569 6 9C6 7.34315 7.34315 6 9 6C10.6569 6 12 7.34315 12 9Z" stroke="#438AE6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text"><?= $venue ?></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($speaker) : ?>
                                                <div class="elementor-element elementor-element-7b0c0cd elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-hidden-laptop elementor-hidden-tablet_extra elementor-hidden-mobile_extra elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list is-mac" data-id="7b0c0cd" data-element_type="widget" data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                                        <path d="M17 17V15C17 12.7909 15.2091 11 13 11H5C2.79086 11 1 12.7909 1 15V17M13 5C13 7.20914 11.2091 9 9 9C6.79086 9 5 7.20914 5 5C5 2.79086 6.79086 1 9 1C11.2091 1 13 2.79086 13 5Z" stroke="#438AE6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text"></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-528a444 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list is-mac" data-id="528a444" data-element_type="widget" data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                                        <path d="M17 17V15C17 12.7909 15.2091 11 13 11H5C2.79086 11 1 12.7909 1 15V17M13 5C13 7.20914 11.2091 9 9 9C6.79086 9 5 7.20914 5 5C5 2.79086 6.79086 1 9 1C11.2091 1 13 2.79086 13 5Z" stroke="#438AE6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg> </span>
                                                                <span class="elementor-icon-list-text"><?= $speaker ?></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <div class="elementor-element elementor-element-bd02d5a elementor-widget__width-auto elementor-widget elementor-widget-button is-mac" data-id="bd02d5a" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-size-sm" role="button" href="<?= $event_url ?>">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-icon elementor-align-icon-right">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                                        <path d="M4.5 5L3 5C1.89543 5 1 5.89543 1 7L1 14C1 15.1046 1.89543 16 3 16L10 16C11.1046 16 12 15.1046 12 14L12 12.5" stroke="#438AE6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M13.8392 2.8284L7.8288 8.83881M13.8392 2.8284L13.8392 8.48526M13.8392 2.8284L8.18235 2.8284" stroke="#001A72" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg> </span>
                                                <span class="elementor-button-text">Join Event</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>