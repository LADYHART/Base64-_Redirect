<?php
/***********************************************************************************
** Written By Akanksha Adhikary(LADYHART)
** URL: www.ladyhart.in/about
** contact: ladyhart@protonmail.com
** Date: 23/11/2017 01.13 A.M.
************************************************************************************/
/**
 * this function geneerate base64 url
 *
 * @var string url
 * @return string encoded url
 */
function base64_url($url) {
	if (is_string($url) && filter_var($url, FILTER_VALIDATE_URL)) {
		$data = "data:text/html;base64,";
		$payload = "PCFET0NUWVBFIGh0bWw+CjxodG1sPgo8aGVhZD4gCiAgPG1ldGEgaHR0cC1lcXVpdj0icmVmcmVzaCIgY29udGVudD0iMDsgVVJMPXt7MH19IiAvPgo8L2hlYWQ+CjwvaHRtbD4=";
		$payload = base64_encode(str_replace('{{0}}', $url, base64_decode($payload)));
		return $data . $payload;
	}
	return base64_encode($url);
}
