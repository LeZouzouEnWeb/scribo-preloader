<?php

namespace scribo_preloader;

class Wpspld
{
    public function __construct()
    {

        add_action('wp_head', array($this, 'preloader_head'));
        add_action('wp_head', array($this, 'ajouter_element_dans_body'));
        add_action('wp_footer', array($this, 'preloader_script'));
    }




    public function ajouter_element_dans_body($content)
    {

        printf(
            "<div id='chgt'>
                <img class='scribo-header__logo' src='%1\$s' alt='Logo'>        
                <span class='w3-panel w3-leftbar w3-border-grey w3-card-4 w3-tag w3-padding w3-round-large w3-center'>%2\$s</span>
            </div>",
            WPSPLD_R_IM . "/hamster-unscreen.gif",
            __("Charging in progress ...", 'scribo-preloader')
        );
    }

    public function preloader_head()
    {
?>
        <style id='chgt-style'>
            #chgt {
                position: absolute;
                top: 10px;
                left: 0px;
                width: 100vw;
                height: 135px;
            }

            #chgt img {
                display: inline-block;
                position: relative;
                left: -100px;
                top: 0px;
                width: 100px;
                animation-name: hamster;
                animation-duration: 8s;
                animation-timing-function: linear;
                animation-iteration-count: infinite;
            }

            @keyframes hamster {
                0% {
                    left: -100px;
                    top: 0px;
                }

                45% {
                    left: 45vw;
                    top: 70px;
                }

                55% {
                    left: 55vw;
                    top: 70px;
                }

                100% {
                    left: calc(100px + 100vw);
                    top: 0px;
                }
            }

            #chgt span {
                right: 4vw;
                position: absolute;
                bottom: 0px;
                font-size: 0.65em;
                font-weight: bold;
                white-space: nowrap;
                color: #fff !important;
                background-color: hsl(303deg 81.56% 39.47% / 61%) !important;
                transform: skewX(-20deg);
                animation-name: mon_span;
                animation-duration: 2s;
                animation-timing-function: linear;
                animation-iteration-count: infinite;
            }

            @keyframes mon_span {
                0% {
                    transform: skewX(-20deg);
                }


                50% {
                    transform: skewX(20deg);
                }

                0% {
                    transform: skewX(-20deg);
                }
            }

            @media screen and (max-width: 768px) {
                #chgt {
                    height: 130px;
                }

                #chgt img {
                    width: 100px;
                }

                #chgt span {
                    font-size: 0.9em;

                }
            }
        </style>
<?
    }

    // PRECHARGEMENT ANIMED
    public function preloader_script()
    {

        echo "<script id='wpspld__script'></script>";
    }
}

class initialyse extends Wpspld
{
    public function __construct()
    {
        parent::__construct();
        add_action('after_setup_theme', array($this, 'setup'));
        add_filter('action_links_' . basename(__FILE__), array($this, 'settings_action_links', 10, 2));
        add_action('wp_enqueue_scripts', array($this, 'init'));
        add_action('wp_enqueue_scripts', array($this, 'styles'));
    }
    public function setup()
    {
        /*
* Make theme available for translation.
* Translations can be filed in the /languages/ directory.
* If you're building a theme based on CorbyCats, use a find and replace
* to change 'corbycats' to the name of your theme in all the template files.
*/
        load_theme_textdomain('scribo-preloader', get_template_directory() . '/languages');
    }

    public function settings_action_links($links, $file)
    {
        // lien vers la page de config de ce plugin
        array_unshift($links, '<a href="' . admin_url('options-general.php?page=wpspld') . '">' . __('Settings') . '</a>');
        return $links;
    }

    public function init()
    {
        global $wpspld_version;
        $v = $wpspld_version;
        wp_register_script('script-scribo-preloader', WPSPLD_R_JS . '/script.min.js', '', $v['js'], true);
    }

    public function styles()
    {
        if (!is_admin())
            wp_enqueue_script('script-scribo-preloader');
    }
}
