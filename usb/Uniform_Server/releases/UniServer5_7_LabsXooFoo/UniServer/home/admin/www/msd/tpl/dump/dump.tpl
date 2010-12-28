<script type="text/javascript">
/*<![CDATA[*/
var scroll_log=true;
function doDump()
{
	new Ajax.Request('ajax/dump_ajax.php?MySQLDumper={SESSION_ID}', { method:'get',
	  onSuccess: function(transport,json){
			if (!(transport.responseText.substr(0,21)=='{"backup_in_progress"'))
			{
				// unnormal error returned
				var g = new Growler({location:"{NOTIFICATION_POSITION}", width:"650px"});
				g.growl(transport.responseText, {header:"<strong>{L_ERROR}<\/strong>:", className:"message", sticky:true, speedin: 1.2 });
				$('ajaxload').fade();
			}
			else
			{
				var json = transport.responseText.evalJSON(true);
				parseDumpResponse(json);
			}
	    },
		onFailure: function(){ alert('Something with the Ajax-Request went wrong. Maybe a server timout happened?') }
	  });
}
  
function parseDumpResponse(json) 
{
	if (json['config_file'])
	{
		// values only submitted once because they don't change during backup process
		$('config_file').innerHTML = json['config_file'];
		$('dump_encoding').innerHTML = json['dump_encoding'];
		$('speed_min').innerHTML = json['speed_min'];
		$('speed_max').innerHTML = json['speed_max'];
		$('tables_total').innerHTML = json['tables_total'];
		$('records_total').innerHTML = json['records_total'];
		$('comment').innerHTML = json['comment'];
	}
	$('tables_optimized').innerHTML=json['tables_optimized'];
 	if (json['dbs_to_backup']) $('dbs_to_backup').innerHTML = json['dbs_to_backup'] ;
	$('actual_database').innerHTML = json['actual_database'] ;
	if (json['actual_table']>'') $('actual_table').innerHTML = '`'+json['actual_database']+'`.`'+json['actual_table']+'`' ;
	else $('actual_table').innerHTML='';
	$('actual_table_nr').innerHTML = json['actual_table_nr'];
	$('table_records_total').innerHTML = json['table_records_total'];
	$('records_saved_total').innerHTML = json['records_saved_total'];
	$('filename').innerHTML = json['filename'];
	$('filesize').innerHTML = json['filesize'];
	$('elapsed_time').innerHTML = json['elapsed_time'];
	if (json['estimated_end']) $('estimated_end').innerHTML=json['estimated_end'];
	$('page_refreshs').innerHTML = json['page_refreshs'];
	$('record_offset_start').innerHTML = json['record_offset_start'];
	$('record_offset_end').innerHTML = json['record_offset_end'];
	$('progress_table_percent').innerHTML = json['progress_table_percent'];
	$('speed').innerHTML = json['speed'];
	$('nr_of_errors').innerHTML = json['nr_of_errors'];

	if (json['multipart_part']) $('multipart_part').innerHTML = json['multipart_part'];
	if (json['prefix']) $('prefix').innerHTML = json['prefix'];
	// Logs
	if (json['actions']) $('log').innerHTML+= json['actions']+'<br />';
	if (json['errors']) $('log').innerHTML+= '<span class="error">'+json['errors']+'<\/span><br />';
	//scroll log to bottom
	if (scroll_log && (json['actions'] || json['errors'])) $('log').scrollTop = $('log').scrollHeight;

	// progressbars
	$('progressbar_table').morph( 'progressbar_table', {
		  style: 'width:'+json['progressbar_table_width']+'px;',
		  duration: 0.3
		});		
	if (json['progress_overall_percent'])
	{
		$('progress_overall_percent').innerHTML = json['progress_overall_percent'];
		$('progressbar_overall').morph( 'progressbar_overall', {
			  style: 'width:'+json['progressbar_overall_width']+'px;',
			  duration: 0.3
			});		
	}
	
	$('speedbar').morph( 'speedbar', {
		  style: 'width:'+json['speedbar_width']+'px;',
		  duration: 0.3
		});		
	
	if (json['backup_in_progress']==1) doDump(); // Backup not finished -> continue
	else self.location.href='index.php?p=dump&action=done&MySQLDumper={SESSION_ID}';
	
}
Event.observe(window, 'load', doDump);
/*]]>*/
</script>
<div id="content">
<h2>{L_DUMP_HEADLINE}</h2>

<div id="dump_infos">
<table class="bdr">
<tr class="dbrow">
	<td class="small">{L_CONFIG}:</td>
	<td class="small right"><span id="config_file"></span></td>
</tr>

<tr class="dbrow1">
	<td class="small">{L_COMMENT}:</td>
	<td class="small right"><span id="comment"></span></td>
</tr>

<tr class="dbrow">
	<td class="small">{L_CHARSET}:</td>
	<td class="small right"><span id="dump_encoding"></span></td>
</tr>

<tr class="dbrow1">
	<td class="small">{L_GZIP_COMPRESSION}:</td>
	<td class="small right">{GZIP}</td>
</tr>

<tr class="dbrow">
	<td class="small">{L_DUMP_FILENAME}:</td>
	<td class="small right"><span id="filename">{DUMP_FILENAME}</span></td>
</tr>
<tr class="dbrow1">
	<td class="small">{L_FILESIZE}:</td>
	<td class="small right"><span id="filesize">{DUMP_FILESIZE}</span></td>
</tr>
<!-- BEGIN MULTIPART -->
	<tr class="dbrow">
		<td class="small">{L_MULTI_PART}:</td>
		<td class="small right">
			<table width="100%">
				<tr>
					<td class="small">{L_MULTIPART_ACTUAL_PART}:</td>
					<td class="small right"><span id="multipart_part"></span></td>
				</tr>
				<tr class="dbrow1">
					<td class="small">{L_MULTIPART_SIZE}:</td>
					<td class="small right">{MULTIPART.SIZE}</td>
				</tr>
			</table>
		</td>
	</tr>
<!-- END MULTIPART -->

<tr class="dbrow">
	<td class="small">{L_DBS}:</td>
	<td class="small right"><span id="dbs_to_backup"></span></td>
</tr>

<tr class="dbrow1">
	<td class="small">{L_INFO_ACTDB}:</td>
	<td class="small right"><span id="actual_database"></span></td>
</tr>

<tr class="dbrow">
	<td class="small">{L_SAVING_TABLE}:</td>
	<td class="small right">
		<span id="actual_table_nr"></span>&nbsp;{L_OF} <span id="tables_total">{TABLE_COUNT}</span>
	</td>
</tr>

<tr class="dbrow1">
	<td class="small">{L_PREFIX}:</td>
	<td class="small right"><span id="prefix"></span></td>
</tr>

<tr class="dbrow">
	<td colspan="2" class="small right">
		<span id="tables_optimized"></span>
	</td>
</tr>

<tr class="dbrow1">
	<td class="small">{L_ERROR}:</td>
	<td class="small right">
		<strong><span id="nr_of_errors"></span></strong>
	</td>
</tr>

<tr class="dbrow" style="line-height:12px;"><td colspan="2">&nbsp;</td></tr>
<tr class="dbrow1">
	<td class="small nowrap">{L_PROGRESS_TABLE}:</td>
	<td class="small"><strong><span id="actual_table"></span></strong></td>
</tr>

<tr class="dbrow1">
	<td>&nbsp;</td>
	<td>
		<table style="width:400px">
			<tr>
				<td style="width:60px" class="small right nowrap"><span id="progress_table_percent">0</span> %</td>
				<td>
					<img src="{ICONPATH}progressbar_dump.gif" id="progressbar_table" alt="" width="0" height="16" />
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td class="small">
					{L_ENTRY} <strong><span id="record_offset_start"></span></strong>&nbsp;{L_UPTO} 
					<strong><span id="record_offset_end"></span></strong>&nbsp;{L_OF} <strong><span id="table_records_total"></span></strong>
				</td>
			</tr>			
		</table>
	</td>
</tr>

<tr class="dbrow" style="line-height:12px;"><td colspan="2">&nbsp;</td></tr>
<tr class="dbrow1">
	<td class="small">{L_RECORDS_PER_PAGECALL}:</td>
	<td>
		<table width="400">
		<tr>
			<td style="width:60px" valign="top" class="small right">
				<span id="speed"></span>
			</td>
			<td colspan="2">
				<img src="{ICONPATH}progressbar_speed.gif" id="speedbar" alt="" width="0" height="14" />
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td class="nowrap small"><span id="speed_min"></span></td>
			<td class="nowrap small right"><span id="speed_max"></span></td>
		</tr>
		</table>
	</td>
</tr>

<tr class="dbrow" style="line-height:12px;">
	<td colspan="2">&nbsp;</td>
</tr>
<tr class="dbrow1">
	<td class="small nowrap">{L_PROGRESS_OVER_ALL}:</td>
	<td>
		<table style="width:400px">
		<tr>
			<td style="width:60px" class="right small"><span id="progress_overall_percent"></span> %</td>
			<td class="small">
				<img src="{ICONPATH}progressbar_dump.gif" id="progressbar_overall" alt="" width="0" height="16" /><br />
				{L_RECORDS} <strong><span id="records_saved_total"></span></strong>
				&nbsp;{L_OF} <strong><span id="records_total"></span></strong><br />
			</td>
		</tr>
		</table>
	</td>
</tr>

<tr class="dbrow">
	<td class="small nowrap">{L_PAGE_REFRESHS}:</td>
	<td class="small right"><span id="page_refreshs">0</span></td>
</tr>
<tr class="dbrow1">
	<td class="small nowrap">{L_DURATION}:</td>
	<td class="small right"><span id="elapsed_time"></span></td>
</tr>
<tr class="dbrow">
	<td class="small nowrap">{L_ESTIMATED_END}:</td>
	<td class="small right"><span id="estimated_end"></span></td>
</tr>
</table>
</p>
</div>

<h3>{L_LOG}:</h3>
<div id="log" class="bdr small" style="height:100px;overflow:auto;" onmouseover="scroll_log=false" onmouseout="scroll_log=true"></div>
</div>
<p>
	<br /><br />
</p>