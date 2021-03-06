<?php

/**
 * @package voravor
 * @version 1.8
 */
/*
Plugin Name: Simple WP
Plugin URI: http://www.voravor.com
Description: Simple functions I can't live without...
Author: vvor
Version: 1.8
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

if(!function_exists('multi_implode')) {
    function multi_implode($glue, $array) {
        $ret = '';

        foreach ($array as $item) {
            if (is_array($item)) {
                $ret .= multi_implode($glue, $item) . $glue;
            } else {
                $ret .= $item . $glue;
            }
        }

        $ret = substr($ret, 0, 0-strlen($glue));

        return $ret;
    }
}

if(!function_exists('dirname_levels')) {
    function dirname_levels( $path, $depth = 2 ) {

        for( $d = 1 ; $d <= $depth ; $d++ ) {
            $path = dirname( $path );
        }

        return $path;
    }
}

if(!function_exists('post_exists_by_id')) {
    function post_exists_by_id($id) {
        return is_string( get_post_status( $id ) );
    }
}

if(!function_exists('str_lreplace')) {
    function str_lreplace($search, $replace, $subject) {
        $pos = strrpos($subject, $search);

        if($pos !== false)
        {
            $subject = substr_replace($subject, $replace, $pos, strlen($search));
        }

        return $subject;
    }
}
    