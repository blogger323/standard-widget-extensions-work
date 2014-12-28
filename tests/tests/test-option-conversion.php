<?php
/**
 * Created by PhpStorm.
 * User: hiro
 * Date: 2014/12/27
 * Time: 21:55
 */

class OptionConversionTest extends WP_UnitTestCase {

    protected $SWE;

    function setUp() {
        global $hm_swe_plugin_loader;

        parent::setUp();

//        $this->$SWE       = $hm_swe_plugin_loader;
    }

    function test_option_conversion_17to2() {
        global $hm_swe_plugin_loader;

        $this->assertNotNull($hm_swe_plugin_loader);

        $version1_7_option = array(
            'expert_options'         => 'disabled', // deprecated
            'maincol_id'             => 'primary',
            'sidebar_id'             => 'secondary',
            'widget_class'           => 'widget',
            'readable_js'            => 'disabled',
            'accordion_widget'       => 'enabled',
            'heading_marker'         => 'default',
            'custom_plus'            => '',
            'custom_minus'           => '',
            'enable_css'             => 'enabled', // deprecated
            'single_expansion'       => 'disabled',
            'initially_collapsed'    => 'enabled',
            'slide_duration'         => 400,
            'heading_string'         => 'h3',
            'accordion_widget_areas' => array( '' ),
            'custom_selectors'       => array( '' ),
            'scroll_stop'            => 'enabled',
            'scroll_mode'            => 1, // 1: Normal, 2: Quick Switch Back
            'proportional_sidebar'   => 0,
            'disable_iflt'           => 620,
            'recalc_after'           => 5,
            'recalc_count'           => 2,
            'header_space'           => 0,
            'ignore_footer'          => 'disabled',
            'enable_reload_me'       => 'disabled', // deprecated
            'float_attr_check_mode'  => 'disabled',

            'sidebar_id2'            => '',
            'proportional_sidebar2'  => 0,
            'disable_iflt2'          => 0,
            'float_attr_check_mode2' => 'disabled',
        );

        delete_option('hm_swe_options');
        add_option('hm_swe_options', $version1_7_option);
        $options = $hm_swe_plugin_loader->get_hm_swe_option();

        $this->assertEquals('always', $options['accordion_widget_condition']);
        $this->assertEquals('always', $options['sidebar1_condition']);
        $this->assertEquals('never', $options['sidebar2_condition']);
        $this->assertEquals('secondary', $options['accordion_widget_areas'][0]);

        // 2nd case
        $options = $version1_7_option;
        $options['accordion_widget'] = 'disabled';
        $options['float_attr_check_mode'] = 'enabled';
        $options['sidebar_id2'] = 'sidebar-2';

        delete_option('hm_swe_options');
        add_option('hm_swe_options', $options);
        $options = $hm_swe_plugin_loader->get_hm_swe_option();

        $this->assertEquals('never', $options['accordion_widget_condition']);
        $this->assertEquals('floated', $options['sidebar1_condition']);
        $this->assertEquals('always', $options['sidebar2_condition']);

        // 3rd case
        $options = $version1_7_option;
        $options['accordion_widget'] = 'disabled';
        $options['sidebar_id2'] = 'sidebar-2';
        $options['float_attr_check_mode2'] = 'enabled';

        delete_option('hm_swe_options');
        add_option('hm_swe_options', $options);
        $options = $hm_swe_plugin_loader->get_hm_swe_option();

        $this->assertEquals('always', $options['sidebar1_condition']);
        $this->assertEquals('floated', $options['sidebar2_condition']);

        // 4th case
        $options = $version1_7_option;
        $options['accordion_widget'] = 'disabled';
        $options['sidebar_id2'] = 'sidebar-2';
        $options['float_attr_check_mode2'] = 'enabled';
        $options['scroll_stop'] = 'disabled';

        delete_option('hm_swe_options');
        add_option('hm_swe_options', $options);
        $options = $hm_swe_plugin_loader->get_hm_swe_option();

        $this->assertEquals('never', $options['sidebar1_condition']);
        $this->assertEquals('never', $options['sidebar2_condition']);

        // 5th case
        $options = $version1_7_option;
        $options['float_attr_check_mode1'] = 'enabled';
        $options['scroll_stop'] = 'disabled';

        delete_option('hm_swe_options');
        add_option('hm_swe_options', $options);
        $options = $hm_swe_plugin_loader->get_hm_swe_option();

        $this->assertEquals('never', $options['sidebar1_condition']);
        $this->assertEquals('never', $options['sidebar2_condition']);

        // 6th case
        $options = $version1_7_option;
        $options['accordion_widget_areas'] = array('custom1', 'custom2');;

        delete_option('hm_swe_options');
        add_option('hm_swe_options', $options);
        $options = $hm_swe_plugin_loader->get_hm_swe_option();

        $this->assertEquals(array('custom1', 'custom2'), $options['accordion_widget_areas']);
    }

    function test_option_conversion_15to2() {
        global $hm_swe_plugin_loader;

        $this->assertNotNull($hm_swe_plugin_loader);

        $version1_5_option = array(
            'expert_options'         => 'disabled',
            'maincol_id'             => 'primary',
            'sidebar_id'             => 'secondary',
            'widget_class'           => 'widget',
            'readable_js'            => 'disabled',
            'accordion_widget'       => 'enabled',
            'heading_marker'         => 'default',
            'custom_plus'            => '',
            'custom_minus'           => '',
            'enable_css'             => 'enabled',
            'single_expansion'       => 'disabled',
            'initially_collapsed'    => 'enabled',
            'slide_duration'         => 400,
            'heading_string'         => 'h3',
            'accordion_widget_areas' => array( '' ),
            'custom_selectors'       => array( '' ),
            'scroll_stop'            => 'enabled',
            'scroll_mode'            => 1, // 1: Normal, 2: Quick Switch Back
            'proportional_sidebar'   => 0,
            'disable_iflt'           => 620,
            'recalc_after'           => 5,
            'recalc_count'           => 2,
            'header_space'           => 0,
            'ignore_footer'          => 'disabled',
            'enable_reload_me'       => 'disabled',

            'sidebar_id2'            => '',
            'proportional_sidebar2'  => 0,
            'disable_iflt2'          => 0,
        );


        delete_option('hm_swe_options');
        add_option('hm_swe_options', $version1_5_option);
        $options = $hm_swe_plugin_loader->get_hm_swe_option();

        $this->assertEquals('always', $options['accordion_widget_condition']);
        $this->assertEquals('always', $options['sidebar1_condition']);
        $this->assertEquals('never', $options['sidebar2_condition']);
        $this->assertEquals('secondary', $options['accordion_widget_areas'][0]);


        $options = $version1_5_option;
        $options['accordion_widget'] = 'disabled';
        $options['sidebar_id2'] = 'sidebar-2';

        delete_option('hm_swe_options');
        add_option('hm_swe_options', $options);
        $options = $hm_swe_plugin_loader->get_hm_swe_option();

        $this->assertEquals('never', $options['accordion_widget_condition']);
        $this->assertEquals('always', $options['sidebar1_condition']);
        $this->assertEquals('always', $options['sidebar2_condition']);

        $options = $version1_5_option;
        $options['scroll_stop'] = 'disabled';
        $options['sidebar_id2'] = 'sidebar-2';

        delete_option('hm_swe_options');
        add_option('hm_swe_options', $options);
        $options = $hm_swe_plugin_loader->get_hm_swe_option();

        $this->assertEquals('never', $options['sidebar1_condition']);
        $this->assertEquals('never', $options['sidebar2_condition']);

    }


    function test_option_conversion_13to2() {
        global $hm_swe_plugin_loader;

        $version1_3_option = array(
            'expert_options'         => 'disabled',
            'maincol_id'             => 'primary',
            'sidebar_id'             => 'secondary',
            'widget_class'           => 'widget',
            'readable_js'            => 'disabled',
            'accordion_widget'       => 'enabled',
            'heading_marker'         => 'default',
            'custom_plus'            => '',
            'custom_minus'           => '',
            'enable_css'             => 'enabled',
            'single_expansion'       => 'disabled',
            'slide_duration'         => 400,
            'heading_string'         => 'h3',
            'accordion_widget_areas' => array( '' ),
            'custom_selectors'       => array( '' ),
            'scroll_stop'            => 'enabled',
            'scroll_mode'            => 1,
            'proportional_sidebar'   => 0,
            'disable_iflt'           => 620,
            'recalc_after'           => 5,
            'ignore_footer'          => 'disabled',
        );

        delete_option('hm_swe_options');
        add_option('hm_swe_options', $version1_3_option);
        $options = $hm_swe_plugin_loader->get_hm_swe_option();

        $this->assertEquals('always', $options['accordion_widget_condition']);
        $this->assertEquals('always', $options['sidebar1_condition']);
        $this->assertEquals('never', $options['sidebar2_condition']);
        $this->assertEquals('secondary', $options['accordion_widget_areas'][0]);
    }

    function test_option_conversion_10to2() {
        global $hm_swe_plugin_loader;

        $version1_option = array(
            'maincol_id'   => 'primary',
            'sidebar_id'   => 'secondary',
            'widget_class' => 'widget',
            'accordion_widget' => 'enabled',
            'enable_css'   => 'enabled',
            'heading_marker' => 'default',
            'custom_plus'  => '',
            'custom_minus' => '',
            'scroll_stop'  => 'enabled',
            'disable_iflt' => 620,
            'accordion_widget_areas' => array(''),
        );

        delete_option('hm_swe_options');
        add_option('hm_swe_options', $version1_option);
        $options = $hm_swe_plugin_loader->get_hm_swe_option();

        $this->assertEquals('always', $options['accordion_widget_condition']);
        $this->assertEquals('always', $options['sidebar1_condition']);
        $this->assertEquals('never', $options['sidebar2_condition']);
        $this->assertEquals('secondary', $options['accordion_widget_areas'][0]);
    }

    function tearDown() {
        parent::tearDown();
    }
}
