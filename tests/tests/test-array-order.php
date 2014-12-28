<?php
/**
 * Created by PhpStorm.
 * User: hiro
 * Date: 2014/12/27
 * Time: 23:47
 */

class SWEOptionArrayOrderTest extends WP_UnitTestCase {

    function test_array_order() {
        global $hm_swe_plugin_loader;

        // general
        $this->assertEquals('accordion_widget_condition', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_ACCORDION_WIDGET_CONDITION));
        $this->assertEquals('sidebar1_condition', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_SIDEBAR1_CONDITION));
        $this->assertEquals('sidebar2_condition', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_SIDEBAR2_CONDITION));
        $this->assertEquals('tab_widget_condition', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_TAB_WIDGET_CONDITION));
        $this->assertEquals('readable_js', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_READABLE_JS));

        // accordion
        $this->assertEquals('widget_select_mode', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_WIDGET_SELECT_MODE));
        $this->assertEquals('accordion_widget_areas', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_ACCORDION_WIDGET_AREAS));
        $this->assertEquals('widget_class', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_WIDGET_CLASS));
        $this->assertEquals('custom_selectors', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_CUSTOM_SELECTORS));
        $this->assertEquals('heading_marker', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_HEADING_MARKER));
        $this->assertEquals('heading_string', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_HEADING_STRING));
        $this->assertEquals('single_expansion', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_SINGLE_EXPANSION));
        $this->assertEquals('initially_collapsed', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_INITIALLY_COLLAPSED));
        $this->assertEquals('slide_duration', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_SLIDE_DURATION));

        // sidebar
        $this->assertEquals('maincol_id', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_MAINCOL_ID));
        $this->assertEquals('sidebar_id', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_SIDEBAR_ID));
        $this->assertEquals('scroll_mode', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_SCROLL_MODE));
        $this->assertEquals('recalc_after', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_RECALC_AFTER));
        $this->assertEquals('recalc_count', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_RECALC_COUNT));
        $this->assertEquals('header_space', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_HEADER_SPACE));
        $this->assertEquals('ignore_footer', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_IGNORE_FOOTER));
        $this->assertEquals('disable_iflt', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_DISABLE_IFLT));

        $this->assertEquals('sidebar_id2', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_SIDEBAR_ID2));
        $this->assertEquals('disable_iflt2', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_DISABLE_IFLT2));

        // tab
        $this->assertEquals('tab_sidebar_id', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_TAB_SIDEBAR_ID));
        $this->assertEquals('tab_sidebar_php_id', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_TAB_SIDEBAR_PHP_ID));
        $this->assertEquals('tab_widget_css', $hm_swe_plugin_loader->get_id_str($hm_swe_plugin_loader::I_TAB_WIDGET_CSS));

    }


}
