<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class FeaturedEvents extends Widget_Base {

    public function get_name() {
        return 'featured-events';
    }

    public function get_title() {
        return 'Featured Events';
    }

    public function get_icon() {
        return 'eicon-custom';
    }

    public function get_categories() {
        return ['basic'];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'section_content',
            [
                'label' => 'Featured Events',
            ]
        );


        $this->end_controls_section();
    }


    protected function render() {
        $settings = $this->get_settings_for_display();

?>
        <?php partial('featured-events-wrapper') ?>
    <?php
    }

    protected function content_template() {
    ?>
        <div class="custom-widget-fe">
            <p>Featured Events Custom Widget: THis won't show Elementor Editor on first drag since it contains custom hard-coded queries only, but generates dynamic latest events calendar posts sorted by event date.
                Just save page after adding custom widget then reload elementopr editor to see preview. OR check actual page.  
            </p>
        </div>
<?php
    }
}
