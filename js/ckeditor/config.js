/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
    config.entities_latin = false;
    config.extraPlugins = 'lineheight';
    config.line_height="1;1.1;1.2;1.3;1.4;1.5" ;
    config.lineHeight_style = {
        element: 'p',
        styles: { 'line-height': '#(size)' },
        overrides: [ {
            element: 'line-height', attributes: { 'size': null }
        } ]
    };
    // config.extraPlugins = 'imageresponsive';
    // config.extraPlugins = 'bootstrapVisibility';
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
};

