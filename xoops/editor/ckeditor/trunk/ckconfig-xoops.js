/*
Copyright (c) 2003-2009, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license

MORE INFO HERE
http://docs.fckeditor.net/ckeditor_api/symbols/CKEDITOR.config.html#.skin
*/

CKEDITOR.editorConfig = function( config )
{
    config.baseHref = ''; // The base href URL used to resolve relative and absolute URLs in the editor content. 
    config.autoUpdateElement = true;
    config.blockedKeystrokes = 
        [
            CKEDITOR.CTRL + 66 /*B*/,
            CKEDITOR.CTRL + 73 /*I*/,
            CKEDITOR.CTRL + 85 /*U*/
        ];
    config.docType = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
    config.skin = 'kama'; // 'v2' 'kama' 'office2003'

    config.entities_greek = true;
    config.entities_latin = true;
    //config.entities_processNumerical = false;

    config.keystrokes = 
        [
            [ CKEDITOR.ALT + 121 /*F10*/, 'toolbarFocus' ],
            [ CKEDITOR.ALT + 122 /*F11*/, 'elementsPathFocus' ],

            [ CKEDITOR.SHIFT + 121 /*F10*/, 'contextMenu' ],

            [ CKEDITOR.CTRL + 90 /*Z*/, 'undo' ],
            [ CKEDITOR.CTRL + 89 /*Y*/, 'redo' ],
            [ CKEDITOR.CTRL + CKEDITOR.SHIFT + 90 /*Z*/, 'redo' ],

            [ CKEDITOR.CTRL + 76 /*L*/, 'link' ],

            [ CKEDITOR.CTRL + 66 /*B*/, 'bold' ],
            [ CKEDITOR.CTRL + 73 /*I*/, 'italic' ],
            [ CKEDITOR.CTRL + 85 /*U*/, 'underline' ],

            [ CKEDITOR.ALT + 109 /*-*/, 'toolbarCollapse' ]
        ];


    config.smiley_descriptions = [
        ':)', ':(', ';)', ':D', ':/', ':P',
        '', '', '', '', '', '',
        '', ';(', '', '', '', '',
        '', ':kiss', '' ];
    config.smiley_images = [
        'regular_smile.gif','sad_smile.gif','wink_smile.gif','teeth_smile.gif','confused_smile.gif','tounge_smile.gif',
        'embaressed_smile.gif','omg_smile.gif','whatchutalkingabout_smile.gif','angry_smile.gif','angel_smile.gif','shades_smile.gif',
        'devil_smile.gif','cry_smile.gif','lightbulb.gif','thumbs_down.gif','thumbs_up.gif','heart.gif',
        'broken_heart.gif','kiss.gif','envelope.gif'];


    config.toolbar_Basic =
        [
            [ 'Source', '-', 'Bold', 'Italic' ]
        ];
    config.toolbar_Full =
        [
            ['Source','-','Save','NewPage','Preview','-','Templates'],
            ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
            ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
            ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
            '/',
            ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
            ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
            ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
            ['Link','Unlink','Anchor'],
            ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
            '/',
            ['Styles','Format','Font','FontSize'],
            ['TextColor','BGColor'],
            ['Maximize', 'ShowBlocks','-','About']
        ];
    config.toolbar_Xoops =
        [
            ['Source', '-', 'Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
            ['Cut','Copy','Paste','PasteText','PasteFromWord'],
            ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
            '/',
            ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
            ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
            ['Link','Unlink','Anchor'],
            ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
            '/',
            ['Styles','Format','Font','FontSize'],
            ['TextColor','BGColor'],
            ['Maximize', 'ShowBlocks','-','About']
        ];

    config.toolbar = 'Xoops'; // 'Basic' 'Full'
};
