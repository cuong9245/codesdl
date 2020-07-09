/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';


	config.filebrowserBrowseUrl = '/admin/image-ckfinder';
 
	config.filebrowserImageBrowseUrl = '/admin/image-ckfinder';
	 
	config.filebrowserFlashBrowseUrl = '/ckfinder/ckfinder.php?type=Flash';
	 
	config.filebrowserUploadUrl = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	 
	config.filebrowserImageUploadUrl = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	 
	config.filebrowserFlashUploadUrl = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
