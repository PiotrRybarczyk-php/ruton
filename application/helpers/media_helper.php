<?php
defined('BASEPATH') or exit('No direct script access allowed');

function addMedia($data = '')
{
	$CI = &get_instance();
	$media['name'] = $data['file_name'];
	$media['raw_name'] = $data['raw_name'];
	$media['type'] = $data['file_type'];
	$media['size'] = $data['file_size'];
	$media['full_path'] = $data['full_path'];
	$media['file_path'] = $data['file_path'];
	if (substr($data['file_type'], 0, 5) == 'image') {
		$media['is_photo'] = 1;
	} else $media['is_photo'] = 0;
	if ($CI->back_m->insert('media', $media)) {
		return true;
	} else {
		return false;
	}
}
