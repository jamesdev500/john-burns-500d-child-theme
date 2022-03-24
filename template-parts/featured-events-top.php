<?php 
    $item = $data['event'];
    
    $startMonth = tribe_format_date( get_post_meta($item->ID, '_EventStartDate', true), false, 'F' );
    $endMonth = tribe_format_date( get_post_meta($item->ID, '_EventEndDate', true), false, 'F' );
    $startDay = tribe_format_date( get_post_meta($item->ID, '_EventStartDate', true), false, 'j' );
    $endDay = tribe_format_date( get_post_meta($item->ID, '_EventEndDate', true), false, 'j' );
    $year = tribe_format_date( get_post_meta($item->ID, '_EventStartDate', true), false, 'Y' );
    if ( $startMonth == $endMonth && $startDay != $endDay ) {
        $formattedDate = $startMonth.' '.$startDay.'-'.$endDay.', '.$year;
    } else {
        $formattedDate = tribe_format_date( get_post_meta($item->ID, '_EventStartDate', true), false, 'F j, Y' );
    }

    if ( get_the_post_thumbnail_url($item->ID, 'large') ) { 
        $thumb_url = get_the_post_thumbnail_url($item->ID, 'medium');
    } 
    
    if( get_post_meta($item->ID, '_EventVenueID', true) ) { 
        $venue = get_the_title( get_post_meta($item->ID, '_EventVenueID', true) );        
    }

    if ( get_post_meta($item->ID, '_ecp_custom_2', true) ) { 
        $speaker = get_post_meta($item->ID, '_ecp_custom_2', true);        
    } 


    if ( get_post_meta($item->ID, '_ecp_custom_4', true) === 'Yes' ) { 
        $client_exclusive = true;
    } 

    if ( get_post_meta($item->ID, '_EventURL', true) ) { 
        $event_url = get_post_meta($item->ID, '_EventURL', true);
    } 
?>

<div class="jet-listing-grid__item jet-listing-dynamic-post-345 colspan-1" data-post-id="345">
    <div data-elementor-type="jet-listing-items" data-elementor-id="413" class="elementor elementor-413" data-elementor-settings="[]">
        <div class="elementor-section-wrap">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-fac9217 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fac9217" data-element_type="section" data-settings="">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f60a74b" data-id="f60a74b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-7125f30 elementor-widget elementor-widget-image is-mac" data-id="7125f30" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img width="800" height="514" src="<?= $thumb_url ?>" class="attachment-large size-large" alt="" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7eb72db" data-id="7eb72db" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-293a6c5 elementor-widget elementor-widget-heading is-mac" data-id="293a6c5" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default"><?= $item->post_title ?></h3>
                                </div>
                            </div>
                            <?php if ( $client_exclusive ) : ?>
                                <div class="elementor-element elementor-element-cedfe85 elementor-widget elementor-widget-heading is-mac" data-id="cedfe85" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">*Client-Exclusive Event</p>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if($formattedDate) : ?>
                            <div class="elementor-element elementor-element-d1f4d42 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-hidden-laptop elementor-hidden-tablet_extra elementor-hidden-mobile_extra elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list is-mac" data-id="d1f4d42" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M10 5V10L13 13M19 10C19 14.9706 14.9706 19 10 19C5.02944 19 1 14.9706 1 10C1 5.02944 5.02944 1 10 1C14.9706 1 19 5.02944 19 10Z" stroke="#438AE6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg> </span>
                                            <span class="elementor-icon-list-text">
                                                <?= $formattedDate ?>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if($formattedDate) : ?>
                            <div class="elementor-element elementor-element-363d425 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list is-mac" data-id="363d425" data-element_type="widget" data-widget_type="icon-list.default">
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
                            <?php endif; ?>
                            <?php if($venue) : ?>
                            <div class="elementor-element elementor-element-bf02689 jedv-enabled--yes elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-hidden-laptop elementor-hidden-tablet_extra elementor-hidden-mobile_extra elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list is-mac" data-id="bf02689" data-element_type="widget" data-widget_type="icon-list.default">
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
                            <div class="elementor-element elementor-element-4b998b5 jedv-enabled--yes elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list is-mac" data-id="4b998b5" data-element_type="widget" data-widget_type="icon-list.default">
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
                            <?php if($speaker) : ?>
                            <div class="elementor-element elementor-element-94ce9e3 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-hidden-laptop elementor-hidden-tablet_extra elementor-hidden-mobile_extra elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list is-mac" data-id="94ce9e3" data-element_type="widget" data-widget_type="icon-list.default">
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
                            <div class="elementor-element elementor-element-a46f302 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list is-mac" data-id="a46f302" data-element_type="widget" data-widget_type="icon-list.default">
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
                            <?php if($event_url) : ?>
                            <div class="elementor-element elementor-element-65b8fca elementor-widget elementor-widget-button is-mac" data-id="65b8fca" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-size-sm" role="button" href="<?= $event_url ?>">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-icon elementor-align-icon-right">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                                        <path d="M4.5 5L3 5C1.89543 5 1 5.89543 1 7L1 14C1 15.1046 1.89543 16 3 16L10 16C11.1046 16 12 15.1046 12 14L12 12.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M13.8392 2.8284L7.8288 8.83881M13.8392 2.8284L13.8392 8.48526M13.8392 2.8284L8.18235 2.8284" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg> </span>
                                                <span class="elementor-button-text">Join Event</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>