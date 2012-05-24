<?php
/*
Copyright (c) 2009 Grzegorz Żydek

This file is part of PGRFileManager v2.1.0

Permission is hereby granted, free of charge, to any person obtaining a copy
of PGRFileManager and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

PGRFileManager IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/
if (session_id() == null) {
	session_start();
}
/*PGRFILEMANAGER_SPIP_CONFIG*/
error_reporting(0);
if (!array_key_exists('PGRFILEMANAGER', $_SESSION) || !$_SESSION['PGRFILEMANAGER']['enabled']) die('Not allowed!');
if(array_key_exists('type',$_GET)) {
	$_SESSION['PGRFILEMANAGER']['dir'] = $_SESSION['PGRFILEMANAGER']['dirs'][$_GET['type']] ;
	$_SESSION['PGRFILEMANAGER']['ext'] = $_SESSION['PGRFILEMANAGER']['exts'][$_GET['type']] ;
}
$pgrdir = $_SESSION['PGRFILEMANAGER']['dir'] ;
$pgrext = $_SESSION['PGRFILEMANAGER']['ext'] ;

//Include your own script with authentication if you wish
//i.e. include($_SERVER['DOCUMENT_ROOT'].'/_files/application/PGRFileManagerConfig.php');

//real absolute path to root directory (directory you want to use with PGRFileManager) on your server  
//i.e  PGRFileManagerConfig::$rootPath = '/home/user/htdocs/userfiles'
//you can check your absoulte path using
PGRFileManagerConfig::$rootPath = $_SESSION['PGRFILEMANAGER']['path'] . ($pgrdir?'/'.$pgrdir:'') ;
//url path to root directory
//this path is using to display images and will be returned to ckeditor with relative path to selected file
//i.e http://my-super-web-page/gallery
//i.e /gallery
PGRFileManagerConfig::$urlPath = $_SESSION['PGRFILEMANAGER']['url'] . ($pgrdir?'/'.$pgrdir:'') ;

//Max file upload size in bytes
PGRFileManagerConfig::$fileMaxSize = 1024 * 1024 * 10;
//Allowed file extensions
//PGRFileManagerConfig::$allowedExtensions = '' means all files
PGRFileManagerConfig::$allowedExtensions = $pgrext ;
//Allowed image extensions
PGRFileManagerConfig::$imagesExtensions = 'jpg|gif|jpeg|png|bmp';
//Max image file height in px
PGRFileManagerConfig::$imageMaxHeight = 724;
//Max image file width in px
PGRFileManagerConfig::$imageMaxWidth = 1280;
//Thanks to Cycle.cz
//Allow or disallow edit, delete, move, upload, rename files and folders
PGRFileManagerConfig::$allowEdit = $_SESSION['PGRFILEMANAGER']['canedit'] ;		// true - false
//Autorization
PGRFileManagerConfig::$authorize = false;        // true - false
PGRFileManagerConfig::$authorizeUser = md5(date('r').microtime()) ;
PGRFileManagerConfig::$authorizePass = md5(date('r').microtime()) ;
//Path to CKEditor script
//i.e. http://mypage/ckeditor/ckeditor.js
//PGRFileManagerConfig::$ckEditorScriptPath = '../ckeditor/ckeditor.js';
//File extensions editable by CKEditor
//PGRFileManagerConfig::$ckEditorExtensions = 'html|html|txt';
?>
