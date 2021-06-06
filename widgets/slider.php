<?php
namespace Elementor;

class MY_Elementor_Slider extends Widget_Base {

    public function get_name() {
        return  'my_slider';
    }

    public function get_title() {
        return esc_html__( 'MMI Slider', 'majharul_islam' );
    }

    public function get_script_depends() {
        return [
            'myew-script'
        ];
    }

    public function get_icon() {
        return 'eicon-post-slider';
    }

    public function get_categories() {
        return [ 'my_catagory' ];
    }


    public function _register_controls() {
        // Style Tab
        $this->style_tab();
    }

    private function style_tab() {}

    protected function render() {}


}
Plugin::instance()->widgets_manager->register_widget_type( new MY_Elementor_Slider() );