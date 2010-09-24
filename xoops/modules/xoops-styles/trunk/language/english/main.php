<?php
/* @version             $Id $*/

/* general */
define("_MD_XOSTYLE_WITHTXT","with text");
define("_MD_XOSTYLE_WITHIMG","with image");
define("_MD_XOSTYLE_WITHLINK","with hypertext link");
define("_MD_XOSTYLE_WITHOUT","without style (default)");
define("_MD_XOSTYLE_LINE1","Line 1");
define("_MD_XOSTYLE_LINE2","Line 2");
define("_MD_XOSTYLE_LINE3","Line 3");
define("_MD_XOSTYLE_CELL1","Cell 1");
define("_MD_XOSTYLE_CELL2","Cell 2");
define("_MD_XOSTYLE_CELL3","Cell 3");
define("_MD_XOSTYLE_TAG","Tag");
define("_MD_XOSTYLE_IMG","Image");
define("_MD_XOSTYLE_IMGLINK","Image with hypertext link");
define("_MD_XOSTYLE_OR","or");
define("_MD_XOSTYLE_AND","and");
define("_MD_XOSTYLE_LOREM","Lorem ipsum");
define("_MD_XOSTYLE_LOREMLINK","Lorem ipsum with hypertext link");
define("_MD_XOSTYLE_DEPREC","<span class='red smallsmall italic'>(Warning ! Deprecead !!)</span>");
define("_MD_XOSTYLE_TITTABLE","Table");

/* xostyle_xoopscss.html */
define("_MD_XOSTYLE_TITLE","Generic Css Class in xoops.css");
define("_MD_XOSTYLE_TITTXT","Text");
define("_MD_XOSTYLE_TITTXT_DSC","Position, color, weight, size, transformation, cursor, text shadow");
define("_MD_XOSTYLE_TXT_TXT","
	<p class='txtright'>(.txtright or .right) Lorem ipsum <strong>strong</strong> sit amet, sup<sup>1</sup> sub<sub>1</sub> elit. Cras id <em>(em or i)</em> et nisl ultrices aliquam. Pellentesque vitae metus nec dolor bibendum faucibus a <u>(u underline)</u> eros. Duis cursus, velit ac ornare <del>(del text)</del>, nulla metus dignissim eros, ultrices fermentum libero massa at nunc. Integer molestie erat non enim rhoncus bibendum. <span class='shadow'>Pellentesque (.shadow)</span> ultricies commodo <span class='shadowlight'>elementum (.shadowlight)</span>.</p>
	<hr class='width50'/>
	<p class='txtleft'>(.txtleft or .left) <span class='red'>Quisque (.red)</span> consequat <span class='blue'>metus (.blue)</span> et ipsum <span class='black'>cursus (.black)</span> sit amet <span class='white'>dictum (.white)</span> leo fringilla. <span class='yellow'>Praesent (.yellow)</span> nec <span class='orange'>nulla (.orange)</span> nec metus <span class='green'>suscipit (.green)</span> accumsan <span class='silver'>vel sit (.silver)</span> amet ligula.</p>
	<hr class='width50'/>
	<p>Maecenas <span class='xx-small'>nulla diam (.xx-small or .verysmall)</span>, sollicitudin <span class='x-small'>vitae congue (.x-small or .smallsmall)</span> ac, commodo eu magna. <span class='small'>Vivamus (.small)</span> non lobortis <span class='normal'>eros (.normal)</span>. Pellentesque <span class='big'>bibendum (.big)</span> lacinia <span class='maxi'>arcu (.maxi)</span>, eget faucibus nisl feugiat sit amet.</p>
	<hr class='width50'/>
	<p class='txtcenter'>(.txtcenter or .center) Cras <span class='bold'>mollis (.bold)</span>, nisl <span class='bolder'>eget (.bolder)</span> suscipit <span class='lighter'>porttitor (.lighter)</span>, arcu tortor pretium dolor, sollicitudin sollicitudin augue tortor vel nibh.</p>
	<hr class='width50'/>
	<p>Etiam in <span class='italic'>tempus (.italic)</span> erat. <span class='oblique'>Nulla (.oblique)</span> quis quam <span class='condensed'>lacus (.condensed)</span>, non <span class='uppercase'>pulvinar (.uppercase)</span> eros. <span class='lowercase'>Sed arcu (.lowercase)</span> leo, <span class='capitalize'>vehicula (.capitalize)</span> in convallis vitae, aliquet id magna.</p>
	<hr class='width50'/>
	<p class='txtjustify'>(.txtjustify or .justify) <span class='cursordefault'>Donec (.cursordefault)</span> purus <span class='cursormove'>ipsum (.cursormove)</span>, dignissim <span class='cursorpointer'>pulvinar (.cursorpointer)</span> malesuada in, congue <span class='cursorhelp'>vitae erat (.cursorhelp)</span>.</p>
	");
define("_MD_XOSTYLE_TITFONTS","Fonts");
define("_MD_XOSTYLE_FONTS_TXT","
	<p>Lorem ipsum <strong>strong</strong> sit amet, sup<sup>1</sup> sub<sub>1</sub> elit. Cras id <em>(em or i)</em> et nisl ultrices aliquam. Pellentesque vitae metus nec dolor bibendum faucibus a <u>(u underline)</u> eros. Duis cursus, velit ac ornare <del>(del text)</del>, nulla metus dignissim eros, ultrices fermentum libero massa at nunc. Integer molestie erat non enim rhoncus bibendum. <span class='shadow'>Pellentesque (.shadow)</span> ultricies commodo <span class='shadowlight'>elementum (.shadowlight)</span>.</p>
	<hr class='width50'/>
	<p><span class='red'>Quisque (.red)</span> consequat <span class='blue'>metus (.blue)</span> et ipsum <span class='black'>cursus (.black)</span> sit amet <span class='white'>dictum (.white)</span> leo fringilla. <span class='yellow'>Praesent (.yellow)</span> nec <span class='orange'>nulla (.orange)</span> nec metus <span class='green'>suscipit (.green)</span> accumsan <span class='silver'>vel sit (.silver)</span> amet ligula.</p>
	<hr class='width50'/>
	<p>Maecenas <span class='xx-small'>nulla diam (.xx-small or .verysmall)</span>, sollicitudin <span class='x-small'>vitae congue (.x-small or .smallsmall)</span> ac, commodo eu magna. <span class='small'>Vivamus (.small)</span> non lobortis <span class='normal'>eros (.normal)</span>. Pellentesque <span class='big'>bibendum (.big)</span> lacinia <span class='maxi'>arcu (.maxi)</span>, eget faucibus nisl feugiat sit amet.</p>
	<hr class='width50'/>
	<p>Cras <span class='bold'>mollis (.bold)</span>, nisl <span class='bolder'>eget (.bolder)</span> suscipit <span class='lighter'>porttitor (.lighter)</span>, arcu tortor pretium dolor, sollicitudin sollicitudin augue tortor vel nibh.</p>
	<hr class='width50'/>
	<p>Etiam in <span class='italic'>tempus (.italic)</span> erat. <span class='oblique'>Nulla (.oblique)</span> quis quam <span class='condensed'>lacus (.condensed)</span>, non <span class='uppercase'>pulvinar (.uppercase)</span> eros. <span class='lowercase'>Sed arcu (.lowercase)</span> leo, <span class='capitalize'>vehicula (.capitalize)</span> in convallis vitae, aliquet id magna.</p>
	<hr class='width50'/>
	<p><span class='cursordefault'>Donec (.cursordefault)</span> purus <span class='cursormove'>ipsum (.cursormove)</span>, dignissim <span class='cursorpointer'>pulvinar (.cursorpointer)</span> malesuada in, congue <span class='cursorhelp'>vitae erat (.cursorhelp)</span>.</p>
	");
define("_MD_XOSTYLE_TITBORDER","Borders");
define("_MD_XOSTYLE_TITBORDER1","Basic Border");
define("_MD_XOSTYLE_TITBORDER2","Solid Border");
define("_MD_XOSTYLE_TITBORDER3","Dotted Border");
define("_MD_XOSTYLE_TITBORDER4","Dashed Border");
define("_MD_XOSTYLE_TITBORDER5","Double Border");
define("_MD_XOSTYLE_TITBORDER6","Groove Border");
define("_MD_XOSTYLE_TITBORDER7","Ridge Border");
define("_MD_XOSTYLE_TITBORDER8","Inset Border");
define("_MD_XOSTYLE_TITBORDER9","Outset Border");
define("_MD_XOSTYLE_TITMULTICOLUMN","Multi Columns");
define("_MD_XOSTYLE_TITMULTICOLUMN1","(only Safari, Chrome and Firefox)");
define("_MD_XOSTYLE_MULTICOLUMN_TXT","<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ante fermentum diam iaculis et pulvinar metus pharetra. Sed sed nisi eu metus viverra aliquam at eleifend sapien. Suspendisse nulla purus, dapibus scelerisque ornare vitae, vehicula sit amet diam. Aenean sit amet malesuada nibh. Praesent quam lorem, consectetur ac congue lacinia, viverra eget tellus. Duis sodales, sem quis vulputate lobortis, dui dui porttitor ipsum, in ornare nulla nisi eu nisl. In ultrices libero metus. In sed tellus magna. Aenean sit amet ornare nibh. Aenean nunc urna, venenatis sed mollis sed, pulvinar vitae metus. Donec mauris velit, lacinia quis convallis convallis, vehicula et purus. Etiam luctus dictum metus sed euismod. Vestibulum adipiscing condimentum ligula ullamcorper aliquet. Maecenas id nulla quam. Pellentesque libero lorem, pharetra vitae ullamcorper et, laoreet sed quam. Vivamus sed ante eget lorem viverra molestie euismod vitae elit. Nam vehicula cursus arcu ac blandit.</p><p>Suspendisse commodo massa quis quam congue sed mollis ante bibendum. Proin vitae arcu risus, eget egestas arcu. Nullam bibendum tellus at enim iaculis viverra. Etiam sapien metus, ornare quis vulputate at, tincidunt ac diam. Pellentesque in nisi nec risus adipiscing blandit. Proin non adipiscing leo. Duis consequat fermentum urna, rhoncus bibendum purus vestibulum quis. Proin eleifend consectetur risus, ac laoreet leo dapibus sed. Nulla facilisi. Phasellus elementum tincidunt nunc, hendrerit tempor augue sagittis quis.</p>");
define("_MD_XOSTYLE_TITIMG","Images");
define("_MD_XOSTYLE_TITBXSHAD","Box Shadow");
define("_MD_XOSTYLE_BXSHAD_DSC1","with black for background and round border");
define("_MD_XOSTYLE_BXSHAD_DSC2","with round border and silver border");
define("_MD_XOSTYLE_BXSHAD_TXT","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ante fermentum diam iaculis et pulvinar metus pharetra. Sed sed nisi eu metus viverra aliquam at eleifend sapien. Suspendisse nulla purus, dapibus scelerisque ornare vitae, vehicula sit amet diam. Aenean sit amet malesuada nibh. Praesent quam lorem, consectetur ac congue lacinia, viverra eget tellus. Duis sodales, sem quis vulputate lobortis, dui dui porttitor ipsum, in ornare nulla nisi eu nisl. In ultrices libero metus.");
define("_MD_XOSTYLE_TITRNDBORDER","Round Border");
define("_MD_XOSTYLE_RNDBORDER_TXT","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ante fermentum diam iaculis et pulvinar metus pharetra. Sed sed nisi eu metus viverra aliquam at eleifend sapien.");
define("_MD_XOSTYLE_TITOPAC","Opacity");
define("_MD_XOSTYLE_OPAC_TXT","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ante fermentum diam iaculis et pulvinar metus pharetra. Sed sed nisi eu metus viverra aliquam at eleifend sapien.");

/* xostyle_theme.html */
define("_MD_XOSTYLE_TITLE1","Style of the current theme");
define("_MD_XOSTYLE_TAGH","Tag \"h1 - h6\"");
define("_MD_XOSTYLE_TAGHLINK","Tag \"h1 - h6\" with hypertext link");
define("_MD_XOSTYLE_TITLEH1","Title h1");
define("_MD_XOSTYLE_TITLEH2","Title h2");
define("_MD_XOSTYLE_TITLEH3","Title h3");
define("_MD_XOSTYLE_TITLEH4","Title h4");
define("_MD_XOSTYLE_TITLEH5","Title h5");
define("_MD_XOSTYLE_TITLEH6","Title h6");
define("_MD_XOSTYLE_FONTGEN","Generic font class");
define("_MD_XOSTYLE_GENEL","General elements");
define("_MD_XOSTYLE_PAGINATION","Pagination");
define("_MD_XOSTYLE_TAGLI","Tag \"li\"");
define("_MD_XOSTYLE_TAGOL","Tag \"ol\"");
define("_MD_XOSTYLE_COREMSG","Core Messages");
define("_MD_XOSTYLE_COREMSGLINK","Core Messages with hypertext link");
define("_MD_XOSTYLE_TABLETAG","Table Tag");
define("_MD_XOSTYLE_TABLETAGLINK","Table Tag with hypertext link");
define("_MD_XOSTYLE_TABLEROW","Tables row class");
define("_MD_XOSTYLE_TABLEROWLINK","Tables row class with hypertext link");
define("_MD_XOSTYLE_TABLECLASS","Table Class");
define("_MD_XOSTYLE_TABLECLASSLINK","Table Class with hypertext link");
define("_MD_XOSTYLE_COMCLASS","Comments class");
define("_MD_XOSTYLE_COMCLASSLINK","Comments class with hypertext link");
define("_MD_XOSTYLE_PARAF","Paragraph style & text selection");
define("_MD_XOSTYLE_PARAFTXT","
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque facilisis quam at ante tempor tempor. Mauris condimentum dignissim fringilla. Fusce ut enim id augue <a href='#' title='My title'>dignissim molestie</a>. Proin nec lacus non leo ullamcorper scelerisque vitae in arcu. Donec fermentum, leo ac euismod consequat, nisl arcu interdum nunc, pellentesque vestibulum velit lectus et ligula. Praesent quis purus nec enim porta porta. Nulla sodales mollis massa vitae ultrices. Nullam in dolor elit, eu vulputate ligula.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque facilisis quam at ante tempor tempor. Mauris condimentum dignissim fringilla. Fusce ut enim id augue dignissim molestie. Proin nec lacus non leo ullamcorper scelerisque vitae in arcu. Donec fermentum, leo ac euismod consequat, nisl arcu interdum nunc, pellentesque vestibulum velit lectus et ligula. Praesent quis purus nec enim porta porta. Nulla sodales mollis massa vitae ultrices. Nullam in dolor elit, eu vulputate ligula.</p>
");
define("_MD_XOSTYLE_TPLCLASS","Tpl class");
define("_MD_XOSTYLE_TPLCLASSLINK","Tpl class with hypertext link");
define("_MD_XOSTYLE_STYLECODE","Style for code");
define("_MD_XOSTYLE_STYLEQUOTE","Style for quote");
define("_MD_XOSTYLE_STYLEQUOTETXT","
Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut <a href='#' title=''>aliquip</a> ex ea commodo Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
");
define("_MD_XOSTYLE_TITFORM","Forms");
define("_MD_XOSTYLE_CHEKME","Check me if you can");
define("_MD_XOSTYLE_SUBMIT","Submit");
define("_MD_XOSTYLE_GO","Go !");
define("_MD_XOSTYLE_LEGENDTAG","legend form tag");
define("_MD_XOSTYLE_RADBUTTON1","Radio button (.head)");
define("_MD_XOSTYLE_RADBUTTON","Radio button");
define("_MD_XOSTYLE_INPUTFILE1","Input File (label)");
define("_MD_XOSTYLE_INPUTFILE2","Input File (.head)");
define("_MD_XOSTYLE_INPUTSUBMIT1","Input Submit (label)");
define("_MD_XOSTYLE_INPUTSUBMIT2","Input Submit (tr.foot)");
define("_MD_XOSTYLE_INPUTFILE","Input File");
define("_MD_XOSTYLE_INPUTSUBMIT","Input Submit");
define("_MD_XOSTYLE_SELECT","Select Box (.head)");
define("_MD_XOSTYLE_SELECT1","Select Box (label)");
define("_MD_XOSTYLE_CHECKBOX","Checkbox (.head)");
define("_MD_XOSTYLE_TEXTAREA","Textarea (.head)");
define("_MD_XOSTYLE_TEXTAREA1","Textarea (label)");
define("_MD_XOSTYLE_TEXTFIELD","Textfield (.head)");
define("_MD_XOSTYLE_TEXTFIELD1","Textfield (label)");
define("_MD_XOSTYLE_XOFORMCLASS","Forms with xoops .class");
define("_MD_XOSTYLE_FORMTAG","Title form (th tag)");

/* xostyle_smartytag.html */
define("_MD_XOSTYLE_TITLE2","Smarty variables for XOOPS");

/* xostyle_exemple.html */
define("_MD_XOSTYLE_TITLE3","Coming soon ...");

/* xostyle_loremgenerator.html */
define("_MD_XOSTYLE_TITLE4","Lorem Ipsum Generator Text");
define("_MD_XOSTYLE_LOREM1","Settings");
define("_MD_XOSTYLE_LOREM2","HTML element type ");
define("_MD_XOSTYLE_LOREM3","Paragraph ");
define("_MD_XOSTYLE_LOREM4","List item");
define("_MD_XOSTYLE_LOREM5","Div");
define("_MD_XOSTYLE_LOREM6","Number of elements ");
define("_MD_XOSTYLE_LOREM7","Number of sentences per element ");
define("_MD_XOSTYLE_LOREM8","Get Lorem Ipsum text");
define("_MD_XOSTYLE_LOREM9","Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.");
define("_MD_XOSTYLE_LOREM10","Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.");
define("_MD_XOSTYLE_LOREM11","Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.");
define("_MD_XOSTYLE_LOREM12","Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
?>