<?php
require_once('config.php'); 
function getHeader(){
	require_once('includes/header.php');
}
function getThemePart($part){
		include_once('includes/'.$part.".php"); //includes/header.php
}
function getSlider(){
	include_once('includes/slider.php');
}
function getPhotoSlider(){
	include_once('includes/photo-slider.php');
}
function getBreadcrumb(){
	include_once('includes/breadcrumb.php');
}
function getFooter(){
	require_once('footer.php');
}