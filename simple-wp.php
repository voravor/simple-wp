<?php

/**
 * @package voravor
 * @version 1.5
 */
/*
Plugin Name: Simple WP
Plugin URI: http://www.voravor.com
Description: Simple functions I can't live without...
Author: vvor
Version: 1.5
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

if(!function_exists('jsonp_decode')) {
    
    function jsonp_decode($jsonp, $assoc = false)
    {
            
        if($jsonp[0] !== '[' && $jsonp[0] !== '{') { // we have JSONP
            $jsonp = substr($jsonp, strpos($jsonp, '('));
        }
        
        return json_decode(trim($jsonp,'();'), $assoc);
        
    }
}

if(!function_exists('is_login_page')) {

	function is_login_page() {
    	return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
	}
}
    