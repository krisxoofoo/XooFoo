<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>markItUp! Html Tidy report</title>
	<style type="text/css">
		<!--
		body {
			overflow:auto;
			margin:0; padding:0;
		}
		table {
			width:100%;
			border:4 solid #3C769D;
			font:11px Arial, Helvetica, sans-serif;
			border-collapse:collapse;
		}
		thead th, tfoot td {
			text-align:left;
			background-color:#3C769D;
			color:#FFF;
			padding:3px;
		}
		td {
			border:1px solid #CCC;
			padding:3px;
		}
		td.lines, td.cols {
			background-color:#F5F5F5;
		}
		-->
	</style>
</head>
<body>
	<table>
	<thead>
		<tr>
			<th>Line</th>
			<th>Col</th>
			<th>Type</th>
			<th>Message</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="4"><?php echo $count ?></td>
		</tr> 
	</tfoot>
	<tbody>
	<?php if (count($rows) === 0) : ?>
		<tr>
			<td colspan="4">No error or warning</td>
		</tr>
	<?php else : ?>
	<?php foreach($rows as $row) : ?>
		<tr>
			<td class="lines"><?php echo $row["line"] ?></td>
			<td class="cols"><?php echo $row["col"] ?></td>
			<td><?php echo $row["type"] ?></td>
			<td><?php echo $row["message"] ?></td>
		</tr>
	<? endforeach ?>
	<?php endif ?>
	</tbody>
	</table>
</body>
</html>