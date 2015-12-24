<?php

/**
 * Created by PhpStorm.
 * User: phan
 * Date: 11/5/2015
 * Time: 11:49 PM
 */

/**
 * Return sizes readable by humans
 */
function human_filesize($bytes, $decimals = 2) 
{
	dd(567);
    $size = ['B', 'kB', 'MB', 'GB', 'TB', 'PB'];
    $factor = floor((strlen($bytes) - 1) / 3);
    
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
}

/**
 * Is the mime type an image
 */
function is_image($mimeType) 
{
	dd(789);
    return starts_with($mimeType, 'image/');
}
