<?php
/** 
 * @package Brand-H Plugin
 */
/* 
Plugin Name: Brand-H Plugin
Plugin URI: https://techroad.io/plguin/brand-h
Description: This is for Brand-H plugin.
Version: 1.0.0
Author: Techroad
Author URI: https://techroad.io
License: GPLv2 or later
Text Domain: brand-h
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

// public -> protected -> private 

defined( 'ABSPATH' ) or die( 'Opps Calle me by contact') ;

class BrandHPlugin
{

    protected static function register() {
        // admin
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) ); 
        // front
        // add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) ); 
    }

    protected function create_post_type() {
        add_action( 'init', array( $this, 'custom_post_type' ) );
    }

    private function activate() {
        // gernerate a CPT
        $this->custom_post_type();
        // flush rewrute rules
        flush_rewrite_rules();
    }
    
    protected function deactivate() {
        // flus rewrute rules

    }

    function custom_post_type() {
        register_post_type( 'book', ['public' => true, 'label' => 'InForm'] );
    }

    function enqueue() {
        // enqueue all our scripts
        wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/mystyle.css', __FILE__ ) );
        wp_enqueue_style( 'mypluginscript', plugins_url( '/assets/myscript.js', __FILE__ ) );
    }
}

class SecondClass extends BrandHPlugin
{
    function register_post_type() {
        $this->create_post_type();
    }
}

if ( class_exists( 'BrandHPlugin') ) {
    $brandHPlugin = new BrandHPlugin();
    $brandHPlugin->register();
}

$secondClass = new SecondClass();
$secondClass->register_post_type();

// activation
register_activation_hook( __FILE__, array( $brandHPlugin, 'activate' ) );

// deactivation
register_deactivation_hook( __FILE__, array( $brandHPlugin, 'deactivate' ) );

