<?php ///// tempfns.php

// Adds Stylesheets
function addCss(&$arr)
{
    if (count($arr))
    {
        reset($arr);
        foreach($arr as $file)

        {
	    //printf("css: $file");

            echo '<link rel="stylesheet" type="text/css" href="' .$file. "\" />\n";
        }
    }
}

// Adds JS files
function addJs(&$arr)
{
    if (count($arr))
    {
        reset($arr);
        foreach($arr as $file)
        {
            echo '<script type="text/javascript" src="' .$file. "\"/></script>\n";
        }
    }
}

// Adds arbitrary strings
function addAny(&$arr)
{
    if (count($arr))
    {
        reset($arr);
        foreach($arr as $str)
        {
            echo "$str\n";
        }
    }
}

// Adds code from files
function addFromfile(&$arr)
{
    if (count($arr))
    {
        reset($arr);
        foreach($arr as $file)
        {
            require($file);
        }
    }
}


?>