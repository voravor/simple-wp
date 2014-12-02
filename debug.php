<?php

/**
 * @package voravor
 * @version 1.2
 */
/*
Plugin Name: Simple WP
Plugin URI: http://www.voravor.com
Description: Simple functions I can't live without...
Author: vvor
Version: 1.0
Author URI: http://www.voravor.com
*/

if(!function_exists('debug')) {
    
    function debug($obj, $suppress = false)
    {
    
        echo '<pre><font size=2>';
        var_dump($obj);
        echo '</font></pre>';
     
        if(!$suppress) {
            $trace = debug_backtrace();
            echo "<font size=2>" . $trace[0]['file'];
            echo ':' . $trace[0]['line'] . '</font>';
        }   
    
    }
}

if(!function_exists('diebug')) {
    
    function diebug($obj, $suppress = false)
    {
        
        echo '<pre><font size=2>';
        var_dump($obj);
        echo '</font></pre>';
        
        if(!$suppress) {
            $trace = debug_backtrace();
            echo "<font size=2>" . $trace[0]['file'];
            echo ': ' . $trace[0]['line'] . '</font>';
        }        
        
        die();
    }
}