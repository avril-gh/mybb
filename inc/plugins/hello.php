<?php
/**
 * MyBB 1.2
 * Copyright � 2006 MyBB Group, All Rights Reserved
 *
 * Website: http://www.mybboard.com
 * License: http://www.mybboard.com/eula.html
 *
 * $Id$
 */

$plugins->add_hook("pre_output_page", "hello_world");
$plugins->add_hook("postbit", "hello_world_postbit");

function hello_info()
{
	return array(
		"name"			=> "Hello World!",
		"description"	=> "A sample plugin that prints hello world and changes the content of each post to 'Hello world!'",
		"website"		=> "http://www.mybboard.com",
		"author"		=> "MyBB Group",
		"authorsite"	=> "http://www.mybboard.com",
		"version"		=> "1.0",
	);
}

function hello_activate()
{
}

function hello_deactivate()
{
}

function hello_world($page)
{
	$page = str_replace("<div id=\"content\">", "<div id=\"content\"><p>Hello World!<br />This is a sample MyBB Plugin (which can be disabled!) that displays this message on all pages.</p>", $page);
	return $page;
}

function hello_world_postbit($post)
{
	$post['message'] = "<strong>Hello world!</strong><br /><br />{$post['message']}";
}
?>
