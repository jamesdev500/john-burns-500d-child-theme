<?php

/**
 * View: Events Bar Views List
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/components/events-bar/views/list.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version 5.0.0
 *
 * @var array $public_views Array of data of the public views, with the slug as the key.
 */
?>
<div class="tribe-events-c-view-selector__content tribe-events-c-view-container-custom" id="tribe-events-view-selector-content" data-js="tribe-events-view-selector-list-container">
    <style>
        .tribe-events-c-view-selector__list-item--active {
            background-color: #1E6FD9;
        }

        .tribe-events-c-view-selector__list-item--active>a>span:last-child {
            color: #FFFFFF;
        }

        .tribe-events .tribe-events-c-view-selector__list-item-text {
            font-family: Proxima Nova;
            font-style: normal;
            font-weight: bold;
            font-size: 16px;
        }
    </style>
    <div class="tribe-events-c-view-selector__list tribe-events-c-view-custom">
        <?php foreach (array_reverse($public_views) as $public_view_slug => $public_view_data) : ?>
            <?php $this->template(
                'components/events-bar/views/list/item',
                ['public_view_slug' => $public_view_slug, 'public_view_data' => $public_view_data]
            ); ?>
        <?php endforeach; ?>
    </div>
</div>