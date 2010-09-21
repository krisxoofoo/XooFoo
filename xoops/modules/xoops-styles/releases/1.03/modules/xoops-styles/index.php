<?php
if (file_exists("mainfile.php")) {
include("mainfile.php");
} elseif (file_exists("../mainfile.php")) {
include("../mainfile.php");
} else { 
include("../../mainfile.php");
}
include(XOOPS_ROOT_PATH."/header.php");
if(isset($xoTheme) && is_object($xoTheme)) {
   $xoopsTpl->assign('xoops_sitename','Web Site Project');
   $xoopsTpl->assign('xoops_pagetitle', 'Test my Web Design');
   $xoTheme->addMeta( 'meta', 'keywords', 'web,design,css,html,xml,php,js,marvelous,burning');
   $xoTheme->addMeta( 'meta', 'description', 'Page example to test my theme stylesModule to test my theme styles.');
}
?>
<style type="text/css">
.marginbot10 {margin-bottom: 10px}
.clearboth {clear: both}
.element-name {background-color: transparent; color: #111; font-weight: bold; font-size: 14px; padding: 10px 0 10px 10px; text-transform: uppercase}
.element {margin: 0 20px;}
td.element-cell {width: 48%; vertical-align: top}
</style>
	<table>
		<tr>
			<td class="element-cell">
				<div class="marginbot10">
					<div class="element-name"><img src="ico_titles_off.png" width="24" height="24" alt="" title="">H1 -> H6 Tags</div>
						<div class="element">
						<h1>Title - H1</h1>
						<h2>Title - H2</h2>
						<h3>Title - H3</h3>
						<h4>Title - H4</h4>
						<h5>Title - H5</h5>
						<h6>Title - H6</h6>
					</div>
				</div>
			</td>
			<td class="element-cell">      
				<div class="marginbot10">
					<div class="element-name"><img src="ico_titles_hover.png" width="24" height="24" alt="" title="">H1 -> H6 Tags with link</div>
					<div class="element">
						<h1><a href="#" title="">Title - H1</a></h1>
						<h2><a href="#" title="">Title - H2</a></h2>
						<h3><a href="#" title="">Title - H3</a></h3>
						<h4><a href="#" title="">Title - H4</a></h4>
						<h5><a href="#" title="">Title - H5</a></h5>
						<h6><a href="#" title="">Title - H6</a></h6>
					</div>
				</div>
			</td>
		</tr>
	</table>
	
	<table>
		<tr>
			<td class="element-cell">      
				<div class="marginbot10">
					<div class="element-name"><img src="ico_img_off.png" width="24" height="24" alt="" title="">Images</div>
					<div class="element">
						<img src="image90.png" width="90" height="90" alt="" title="Without link">
					</div>
				</div>			  
			</td>
			<td class="element-cell">      
				<div class="marginbot10">
					<div class="element-name"><img src="ico_img_hover.png" width="24" height="24" alt="" title="">Images with link</div>
					<div class="element">
						<a href="#" title=""><img src="image90.png" width="90" height="90" alt="" title="With link"></a>						
					</div>
				</div>
				</div>
			</td>
		</tr>
	</table>

	<table>
		<tr>
			<td class="element-cell">
				<div class="element-name"><img src="ico_generic_fonts.png" width="24" height="24" alt="" title="">Generic font class</div>
				<div class="element boxshadow">
					<span class="verysmall">.verysmall or .xx-small</span>
					<br />
					<span class="smallsmall">.smallsmall or .x-small</span>
					<br />
					<span class="small">.small</span>
					<br />
					<span class="normal">.normal</span>
					<br />
					<span class="big ">.big </span>
					<br />
					<span class="maxi">.maxi</span>
					<br />
					<span class="bold">.bold</span>
					<br />
					<span class="bolder">.bolder</span>
					<br />
					<span class="lighter">.lighter</span>
					<br />
					<span class="italic">.italic</span>
					<br />
					<span class="oblique">.oblique</span>
					<br />
					<span class="underline">.underline</span>
					<br />
					<span class="shadow">.shadow</span>
					<br />
					<span class="shadowlight">.shadowlight</span>
					<br />
					<span class="cursordefault">.cursordefault</span>
					<br />
					<span class="cursormove">.cursormove</span>
					<br />
					<span class="cursorpointer">.cursorpointer</span>
					<br />
					<span class="cursorhelp">.cursorhelp</span>
				</div>			  
				</div>
			</td>
			<td class="element-cell">
				<div class="element-name"><img src="ico_general.png" width="24" height="24" alt="" title="">General elements</div>
					<div class="element">
						<a href="" title="">Link</a>
						<hr>hr Tag<hr>
						<em>em & i Tags</em>
						<br />
						<em>u Tag</em>
						<br />
						<strong>strong and b Tags</strong>
						<br />
						<del>del tag</del>
						<br />
						<small>small tag</small>
						<br />
						<acronym>acronym tag</acronym>
						<br />
						<abbr>abbr tag</abbr>
						<br />
						<cite>cite tag</cite>
						<br />
						<dfn>dfn tag</dfn>
						<br />
						<address>address tag</address>
					</div>		  
				</div>
			</td>
		</tr>
	</table>

	<table>
		<tr>
			<td class="element-cell">
				<div class="marginbot10">
					<div class="element-name"><img src="ico_li.png" width="24" height="24" alt="" title="">li tag</div>
					<div class="element">
						<ul>
							<li>Lorem</li>
							<li><a href="#" title="">Lorem link</a></li>
							<li>Lorem
								<ul>
									<li>Lorem</li>
									<li>Lorem</li>
									<li><a href="#" title="">Lorem link</a></li>	
								</ul>
							</li>
							<li>Lorem</li>
						</ul>	
					</div>
					</div>			  
				</div>
			</td>
			<td class="element-cell">
				<div class="marginbot10">
					<div class="element-name"><img src="ico_ol.png" width="24" height="24" alt="" title="">ol tag</div>
					<div class="element">
						<ol>
							<li>Lorem</li>
							<li><a href="#" title="">Lorem link</a></li>
							<li>Lorem
								<ol>
									<li>Lorem</li>
									<li>Lorem</li>
									<li><a href="#" title="">Lorem link</a></li>	
								</ol>
							</li>
							<li>Lorem</li>				
						</ol>	 
					</div>
					</div>			  
				</div>
			</td>
		</tr>
	</table>

	<table>
		<tr>
			<td class="element-cell">
				<div class="marginbot10">
					<div class="element-name"><img src="ico_pagination.png" width="24" height="24" alt="" title="">Pagination</div>
					<div class="element">
						<div class="xo-pagact">.xo-pagact</div>
						<div class="xo-counterpage"><a href="#" title="">.xo-counterpage</a></div>
						<div class="xo-pagarrow"><a href="#" title="">.xo-pagarrow</a></div>
					</div>
					</div>			  
				</div>
			</td>
			<td class="element-cell">
				<div class="marginbot10">
					<div class="element-name"><img src="ico_core.png" width="24" height="24" alt="" title="">Core messages</div>
					<div class="element">
						<table>
							<tr>
								<td>
									<div class="errorMsg">.errorMsg</div>
									<div class="confirmMsg">.confirmMsg</div>
									<div class="resultMsg">.resultMsg</div>
									<div class="successMsg">.successMsg</div>
									<div class="highlight">.highlight</div>
								</td>
								<td>
									<div class="errorMsg"><a href="#" title="">.errorMsg</a></div>
									<div class="confirmMsg"><a href="#" title="">.confirmMsg</a></div>
									<div class="resultMsg"><a href="#" title="">.resultMsg</a></div>
									<div class="successMsg"><a href="#" title="">.successMsg</a></div>
									<div class="highlight"><a href="#" title="">.highlight</a></div>
								</td>
							</tr>
						</table>
					</div>			  
				</div>
			</td>
		</tr>
	</table>

	<table>
		<tr>
			<td class="element-cell">
				<div class="marginbot10">
					<div class="element-name"><img src="ico_table_tags.png" width="24" height="24" alt="" title="">Tables tags</div>
					<div class="">
						<table>
							<tr>
								<th>th</th>
							</tr>
						</table>
						<table>
							<caption>caption</caption>
							<thead>
								<tr>
									<th>thead</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<td>tfoot</td>
								</tr>
							</tfoot>
							<tbody>
								<tr>
									<td>tbody</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</td>
			<td class="element-cell">
				<div class="marginbot10">
					<div class="element-name"><img src="ico_table_tags_hover.png" width="24" height="24" alt="" title="">Tables tags - links</div>
					<div class="">
						<table>
							<tr>
								<th><a href="#" title="">th</a></th>
							</tr>
						</table>
						<table>
							<caption><a href="#" title="">caption</a></caption>
							<thead>
								<tr>
									<th><a href="#" title="">thead</a></th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<td><a href="#" title="">tfoot</a></td>
								</tr>
							</tfoot>
							<tbody>
								<tr>
									<td><a href="#" title="">tbody</a></td>
								</tr>
								</tbody>
						</table>
					</div>
				</div>
			</td>
		</tr>
	</table>

	<table>
		<tr>
			<td class="element-cell">
				<div class="marginbot10">
					<div class="element-name"><img src="ico_tables_class_off.png" width="24" height="24" alt="" title="">Table classes</div>
					<div class="element">
						<div class="outer">.outer</div>
						<div class="head">.head</div>
						<div class="odd">.odd</div>
						<div class="even">.even</div>
						<div class="foot">.foot</div>
					</div>
					</div>			  
				</div>
			</td>
			<td class="element-cell">
				<div class="marginbot10">
					<div class="element-name"><img src="ico_tables_class_hover.png" width="24" height="24" alt="" title="">Table classes - links</div>
					<div class="element">
						<div class="outer"><a href="#" title="">.outer</a></div>
						<div class="head"><a href="#" title="">.head</a></div>
						<div class="odd"><a href="#" title="">.odd</a></div>
						<div class="even"><a href="#" title="">.even</a></div>
						<div class="foot"><a href="#" title="">.foot</a></div>
					</div>
					</div>			  
				</div>
			</td>
		</tr>
	</table>

 

	<table>
		<tr>
			<td class="element-cell">
				<div class="marginbot10">
					<div class="element-name"><img src="ico_tables_row_off.png" width="24" height="24" alt="" title="">Tables row classes</div>
					<div class="element">
						<table>
							<tr class="head">
								<td>tr.head</td>
							</tr>
						</table>
						<table>
							<tr class="odd">
								<td>tr.odd</td>
							</tr>
						</table>
						<table>
							<tr class="even">
								<td>tr.even</td>					
							</tr>
						</table>
						<table>
							<tr class="foot">
								<td>tr.foot</td>
							</tr>
						</table>
					</div>
				</div>
			</td>
			<td class="element-cell">
				<div class="marginbot10">
					<div class="element-name"><img src="ico_tables_row_hover.png" width="24" height="24" alt="" title="">Tables row classes - link</div>
					<div class="element">
						<table>
							<tr class="head">
								<td><a href="#" title="">tr.head</a></td>
							</tr>
						</table>
						<table>
							<tr class="odd">
								<td><a href="#" title="">tr.odd</a></td>
							</tr>
						</table>
						<table>
							<tr class="even">
								<td><a href="#" title="">tr.even</a></td>					
							</tr>
						</table>
						<table>
							<tr class="foot">
								<td><a href="#" title="">tr.foot</a></td>
							</tr>
						</table>
					</div>
				</div>
			</td>
		</tr>
	</table>
	
	<table>
		<tr>
			<td class="element-cell">
				<div class="marginbot10">
					<div class="element-name"><img src="ico_comments_off.png" width="24" height="24" alt="" title="">Comments .class</div>
					<div class="element">
						<div class="comTitle">.comTitle</div>
						<div class="comText">.comText</div>
						<div class="comUserStat">.comUserStat</div>
						<div class="comUserStatCaption ">.comUserStatCaption</div>
						<div class="comUserStatus">.comUserStatus</div>
						<div class="comUserRank">.comUserRank</div>
						<div class="comUserRankText">.comUserRankText</div>
						<div class="comDate">.comDate</div>
						<div class="comDateCaption">.comDateCaption</div>
						<div class="signature">.signature</div>
						<div class="comUserRankImg"><img src="rankimage109x24.png" alt=".comUserRankImg" title=".comUserRankImg" width="109" height="24"></div>
						<div class="comUserImg"><img src="comUserImg86.jpg" alt=".comUserImg" title=".comUserImg" width="86" height="86"></div>
					</div>
					</div>			  
				</div>
			</td>
			<td class="element-cell">
				<div class="marginbot10">
					<div class="element-name"><img src="ico_comments_hover.png" width="24" height="24" alt="" title="">Comments .class - links</div>
					<div class="element">
						<div class="comTitle"><a href="#" title="">.comTitle</a></div>
						<div class="comText"><a href="#" title="">.comText</a></div>
						<div class="comUserStat"><a href="#" title="">.comUserStat</a></div>
						<div class="comUserStatCaption"><a href="#" title="">.comUserStatCaption</a></div>
						<div class="comUserStatus"><a href="#" title="">.comUserStatus</a></div>
						<div class="comUserRank"><a href="#" title="">.comUserRank</a></div>
						<div class="comUserRankText"><a href="#" title="">.comUserRankText</a></div>
						<div class="comDate"><a href="#" title="">.comDate</a></div>
						<div class="comDateCaption"><a href="#" title="">.comDateCaption</a></div>
						<div class="signature"><a href="#" title="">.signature</a></div>
						<div class="comUserRankImg"><a href="#" title=""><img src="rankimage109x24.png" alt=".comUserRankImg" title=".comUserRankImg" width="109" height="24"></a></div>
						<div class="comUserImg"><a href="#" title=""><img src="comUserImg86.jpg" alt=".comUserImg" title=".comUserImg" width="86" height="86"></a></div>
					</div>
					</div>			  
				</div>
			</td>
		</tr>
	</table>
	<div><div class="element-name"><img src="package_editors.png" width="24" height="24" alt="" title="">Paragraph style & text selection</div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque facilisis quam at ante tempor tempor. Mauris condimentum dignissim fringilla. Fusce ut enim id augue <a href="#" title="My title">dignissim molestie</a>. Proin nec lacus non leo ullamcorper scelerisque vitae in arcu. Donec fermentum, leo ac euismod consequat, nisl arcu interdum nunc, pellentesque vestibulum velit lectus et ligula. Praesent quis purus nec enim porta porta. Nulla sodales mollis massa vitae ultrices. Nullam in dolor elit, eu vulputate ligula.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque facilisis quam at ante tempor tempor. Mauris condimentum dignissim fringilla. Fusce ut enim id augue dignissim molestie. Proin nec lacus non leo ullamcorper scelerisque vitae in arcu. Donec fermentum, leo ac euismod consequat, nisl arcu interdum nunc, pellentesque vestibulum velit lectus et ligula. Praesent quis purus nec enim porta porta. Nulla sodales mollis massa vitae ultrices. Nullam in dolor elit, eu vulputate ligula.</p></div>

	<table>
		<tr>
			<td class="element-cell">
			<div class="element-name"><img src="ico_tpl_class_off.png" width="24" height="24" alt="" title="">Tpl classes</div>
				<div class="element">
					<div class="item">.item</div>
					<div class="itemHead">.itemHead</div>
					<div class="itemInfo">.itemInfo</div>
					<div class="itemTitle">.itemTitle</div>
					<div class="itemPoster">.itemPoster</div>
					<div class="itemPostDate ">.itemPostDate </div>
					<div class="itemStats">.itemStats</div>
					<div class="itemBody">.itemBody</div>
					<div class="itemText">.itemText</div>
					<div class="itemText:first-letter">.itemText:first-letter</div>
					<div class="itemFoot">.itemFoot</div>
					<div class="itemAdminLink ">.itemAdminLink </div>
					<div class="itemPermaLink">.itemPermaLink</div>
				</div>
			</div>
			</td>
			<td class="element-cell">
				<div class="element-name"><img src="ico_tpl_class_hover.png" width="24" height="24" alt="" title="">Tpl classes - links</div>
					<div class="element">
						<div class="item"><a href="#" title="">.item</a></div>
						<div class="itemHead"><a href="#" title="">.itemHead</a></div>
						<div class="itemInfo"><a href="#" title="">.itemInfo</a></div>
						<div class="itemTitle"><a href="#" title="">.itemTitle</a></div>
						<div class="itemPoster"><a href="#" title="">.itemPoster</a></div>
						<div class="itemPostDate"><a href="#" title="">.itemPostDate</a></div>
						<div class="itemStats"><a href="#" title="">.itemStats</a></div>
						<div class="itemBody"><a href="#" title="">.itemBody</a></div>
						<div class="itemText"><a href="#" title="">.itemText</a></div>
						<div class="itemText:first-letter"><a href="#" title="">.itemText:first-letter</a></div>
						<div class="itemFoot"><a href="#" title="">.itemFoot</a></div>
						<div class="itemAdminLink"><a href="#" title="">.itemAdminLink</a></div>
						<div class="itemPermaLink"><a href="#" title="">.itemPermaLink</a></div>
					</div>
				</div>
			</td>
		</tr>
	</table>

	<table>
		<tr>
			<td class="element-cell">
				<div class="element-name"><img src="ico_code.png" width="24" height="24" alt="" title="">Style for Codes</div>
				<div class="element">
					<code>code : Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</code>
					<div class="xoopsCode">.xoopsCode : Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
				</div>			  
				</div>
			</td>
			<td class="element-cell">
				<div class="element-name"><img src="ico_quote.png" width="24" height="24" alt="" title="">Style for Quotes</div>
				<div class="element">
					<blockquote>blockquote : Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</blockquote>
					<div class="xoopsQuote">.xoopsQuote : Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
				</div>			  
				</div>
			</td>
		</tr>
	</table>
	
	<table>
		<tr>
			<td class="element-cell">
				<div class="element-name"><img src="ico_forms.png" width="24" height="24" alt="" title="">Forms</div>
				<div class="element">
					<fieldset>
					<legend>legend form tag</legend>
					<form action="" method="" class="">
						<div>
						  <label>Textfield (label)
							<input type="text" name="textfield" id="textfield" />
						  </label>
						</div>
						<div>
						  <label>Textarea (label)
							<textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
						  </label>
						</div>
						<div>
						  <label>
							<input type="checkbox" name="CheckboxGroup1" value="Check me if you can" id="CheckboxGroup1_0" />
							Check me if you can</label>
						  <br />
						  <label>
							<input type="checkbox" name="CheckboxGroup1" value="Check me if you can" id="CheckboxGroup1_1" />
							Check me if you can</label>
						  <br />
						  <label>
							<input type="checkbox" name="CheckboxGroup1" value="Check me if you can" id="CheckboxGroup1_2" />
							Check me if you can</label>
						</div>
						<div>
						  <label>
							<input type="radio" name="RadioGroup1" value="Radio button" id="RadioGroup1_0" />
							Radio button</label>
						  <br />
						  <label>
							<input type="radio" name="RadioGroup1" value="Radio button" id="RadioGroup1_1" />
							Radio button</label>
						  <br />
						  <label>
							<input type="radio" name="RadioGroup1" value="Radio button" id="RadioGroup1_2" />
							Radio button</label>
						  <br />
						</div>
						<div>
						  <label>Select A (label)
							<select name="select" id="select">
							  <option>Lorem ipsum 01</option>
							  <option>Lorem ipsum 02</option>
							  <option>Lorem ipsum 03</option>
							  <option>Lorem ipsum 04</option>
							  <option>Lorem ipsum 05</option>
							</select>
						  </label>  
						</div>
						<div>
						  <label>Select B (label)
							<select name="select2" size="5" id="select2">
							  <option>Lorem ipsum 01</option>
							  <option selected="selected">Lorem ipsum 02</option>
							  <option>Lorem ipsum 03</option>
							  <option>Lorem ipsum 04</option>
							  <option>Lorem ipsum 05</option>
							</select>
						  </label>
						</div>
						<div>
						  <label>Input File (label)
							<input type="file" name="fileField" id="fileField" />
						  </label>
						</div>
						<div>
						  <label>Input Submit (label)
							<input type="submit" name="button" id="button" value="Envoyer" />
						  </label>
						</form>
						</fieldset>
					</div>
				</div>
			</td>
			<td class="element-cell">
				<div class="element-name"><img src="ico_forms_xoops.png" width="24" height="24" alt="" title="">Forms with xoops .class</div>
				<div class="element">
					<table class="outer">
						<tr>
							<th colspan="2">Title form (th tag)</th>
						</tr>
						<tr>
							<td class="head">Textfield (.head)</td>
							<td class="odd"><input type="text" name="textfield" id="textfield" /></td>						
						</tr>
						<tr>
							<td class="head">Textarea (.head)</td>
							<td class="even"><textarea name="textarea" id="textarea" cols="45" rows="5"></textarea></td>						
						</tr>
						<tr>
							<td class="head">Checkboxes (.head)</td>
							<td class="odd">
								<input type="checkbox" name="CheckboxGroup1" value="Check me if you can" id="CheckboxGroup1_0" />Check me if you can
								<br />
								<input type="checkbox" name="CheckboxGroup1" value="Check me if you can" id="CheckboxGroup1_1" />Check me if you can</label>
								<br />
								<input type="checkbox" name="CheckboxGroup1" value="Check me if you can" id="CheckboxGroup1_2" />Check me if you can
							</td>						
						</tr>
						<tr>
							<td class="head">Radio buttons (.head)</td>
							<td class="even">
								<input type="radio" name="RadioGroup1" value="Radio button" id="RadioGroup1_0" />Radio button
								<br />
								<input type="radio" name="RadioGroup1" value="Radio button" id="RadioGroup1_1" />Radio button
								<br />
								<input type="radio" name="RadioGroup1" value="Radio button" id="RadioGroup1_2" />Radio button						
							</td>						
						</tr>
						<tr>
							<td class="head">Select A (.head)</td>
							<td class="odd">
								<select name="select" id="select">
								  <option>Lorem ipsum 01</option>
								  <option>Lorem ipsum 02</option>
								  <option>Lorem ipsum 03</option>
								  <option>Lorem ipsum 04</option>
								  <option>Lorem ipsum 05</option>
								</select>
							</td>						
						</tr>
						<tr>
							<td class="head">Select B (.head)</td>
							<td class="even">
								<select name="select2" size="5" id="select2">
								  <option>Lorem ipsum 01</option>
								  <option selected="selected">Lorem ipsum 02</option>
								  <option>Lorem ipsum 03</option>
								  <option>Lorem ipsum 04</option>
								  <option>Lorem ipsum 05</option>
								</select>
							</td>						
						</tr>
						<tr>
							<td class="head">Input File (.head)</td>
							<td class="odd"><input type="file" name="fileField" id="fileField" /></td>						
						</tr>
						<tr class="foot">
							<td>Input Submit (tr.foot)</td>
							<td><input type="submit" name="button" id="button" value="Envoyer" /></td>						
						</tr>						
					</table>
				</div>			  
			</td>
		</tr>
	</table>
<?php include(XOOPS_ROOT_PATH."/footer.php");?>