<div id="title">
   		<h1><?php 
			//print $node->title; 
   			//dsm($node);
		?></h1>
</div>
<div id="information">
	<table border="1" style="font-family: Helvetica; font-size: 12pt;">
	   <tr>
		   	<td style="padding:20px; font-weight:bold;">Call Number: </td>
				<td>
					<?php
						//print "Call";
						print $node->field_call_number['und'][0]['value'];
					?>
				</td>
	   </tr>
	   <tr>
		   	<td style="padding:20px; font-weight:bold;">Category: </td>
				<td>
					<?php
						//print "Call";
						//print $node->field_province['und'][0]['value'];
						print l($node->field_subject_heading['und'][0]['taxonomy_term']->name, 'taxonomy/term/'.$node->field_subject_heading['und'][0]['tid'])." ";
					?>
				</td>
	   </tr>
	   <tr>
		   	<td style="padding:20px; font-weight:bold;">Creator: </td>
				<td>
					<?php
						//print $node->field_name['und'][0]['taxonomy_term']->name;
						print l($node->field_issuing_body['und'][0]['taxonomy_term']->name,'taxonomy/term/'.$node->field_issuing_body['und'][0]['tid']);
					?>
				</td>
	   </tr>
	   <tr>
		   	<td style="padding:20px; font-weight:bold;">Description: </td>
				<td>
					<?php
						print $node->field_number_of_sources['und'][0]['value']." ";
						print l($node->field_media_type['und'][0]['taxonomy_term']->name, 'taxonomy/term/'.$node->field_media_type['und'][0]['tid'])." ";
						print $node->field_record_info['und'][0]['value']." ";
						print $node->field_gauge['und'][0]['value']." ";
						
					?>
				</td>
	   </tr>
	   <tr>
		   	<td style="padding:20px; font-weight:bold;">Background: </td>
				<td><pre style="white-space: pre-line">
					<?php
						print $node->field_background_information['und'][0]['value'];
					?>
				</pre></td>
	   </tr>
	   <tr>
		   	<td style="padding:20px; font-weight:bold;">Contents: </td>
				<td><pre style="white-space: pre-line">
					<?php
						print $node->field_contents['und'][0]['value'];
					?>
				</pre></td>
	   </tr>
	   <tr>
		   	<td style="padding:20px; font-weight:bold;">Originals: </td>
				<td>
					<?php
						print $node->field_originals['und'][0]['value'];
					?>
				</td>
	   </tr>
	   <tr>
		   	<td style="padding:20px; font-weight:bold;">Other Numbers: </td>
				<td>
					<?php
						print $node->field_other_numbers['und'][0]['value'];
					?>
				</td>
	   </tr>
	   <tr>
		   	<td style="padding:20px; font-weight:bold;">Finding Aids: </td>
				<td><pre style="white-space: pre-line">
					<?php
						print $node->field_finding_aids['und'][0]['value'];
						//if($node->field_accompanying_record['und'][0]['value'] != null)
						//{
							//
						//}
					?>
				</pre></td>
	   </tr>

	   <tr>
		   	<td style="padding:20px; font-weight:bold;">Notes: </td>
				<td>
					<?php
						print $node->field_notes['und'][0]['value'];
					?>
				</td>
	   </tr>
	   <tr>
		   	<td style="padding:20px; font-weight:bold;">Has Record for Finding aid: </td>
				<td>
					<?php
						print $node->field_accompanying_record['und'][0]['value'];
					?>
				</td>
	   </tr>
	   <tr>
		   	<td style="padding:20px; font-weight:bold;">Part Of: </td>
				<td>
					<?php
						print $node->field_this_is_part_of['und'][0]['value'];
					?>
				</td>
	   </tr>
	   <tr>
		   	<td style="padding:20px; font-weight:bold;">Other With: </td>
				<td>
					<?php
						print $node->field_other_with['und'][0]['value'];
					?>
				</td>
	   </tr>
	   <tr>
	   		<td style="padding:20px; font-weight:bold;">Finding Aid Record: </td>
	   		<td>
	   			<a href="<?php print file_create_url($node->field_finding_aid_record['und'][0]['uri']); ?>" target="_blank"><?php print $node->field_finding_aid_record['und'][0]['filename']; ?></a>
	   		</td>
	   </tr>
	   <tr>
		   	<td style="padding:20px; font-weight:bold;">Database ID: </td>
				<td>
					<?php
						//print "Call";
						print $node->field_document_id['und'][0]['value'];
					?>
				</td>
	   </tr>
	   </table>
</div>