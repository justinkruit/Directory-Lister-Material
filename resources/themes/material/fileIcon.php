<?php
if ($fileInfo['icon_class'] == 'fa-folder') {
	$useIcon = 'folder';
} elseif ($fileInfo['icon_class'] == 'fa-level-up') {
	$useIcon = 'arrow-left';
} elseif ($fileInfo['icon_class'] == 'fa-file-archive-o') {
	$useIcon = 'zip-box';
} elseif ($fileInfo['icon_class'] == 'fa-music') {
	$useIcon = 'file-music';
} elseif ($fileInfo['icon_class'] == 'fa-code') {
	$useIcon = 'code-tags';
} elseif ($fileInfo['icon_class'] == 'fa-hdd-o') {
	$useIcon = 'database';
} elseif ($fileInfo['icon_class'] == 'fa-file-text') {
	$useIcon = 'file-document';
} elseif ($fileInfo['icon_class'] == 'fa-list-alt') {
	$useIcon = 'application';
} elseif ($fileInfo['icon_class'] == 'fa-font') {
	$useIcon = 'format-text';
} elseif ($fileInfo['icon_class'] == 'fa-gamepad') {
	$useIcon = 'gamepad';
} elseif ($fileInfo['icon_class'] == 'fa-floppy-o') {
	$useIcon = 'floppy';
} elseif ($fileInfo['icon_class'] == 'fa-picture-o') {
	$useIcon = 'file-image';
} elseif ($fileInfo['icon_class'] == 'fa-archive') {
	$useIcon = 'archive';
} elseif ($fileInfo['icon_class'] == 'fa-terminal') {
	$useIcon = 'file';
} elseif ($fileInfo['icon_class'] == 'fa-youtube-play') {
	$useIcon = 'file-video';
} elseif ($fileInfo['icon_class'] == 'fa-floppy') {
	$useIcon = 'floppy';
} elseif ($fileInfo['icon_class'] == 'fa-envelope') {
	$useIcon = 'email';
} elseif ($fileInfo['icon_class'] == 'fa-') {
	$useIcon = '';
}

 else {
	$useIcon = 'file';
}