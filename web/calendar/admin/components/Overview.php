<?php
/*
	Helios Calendar - Professional Event Management System
	Copyright � 2005 Refresh Web Development [http://www.refreshwebdev.com]
	
	Developed By: Chris Carlevato <chris@refreshwebdev.com>
	
	For the most recent version, visit the Helios website:
	[http://www.helioscalendar.com]
	
	License Information is found in docs/license.html
*/
	if(isset($_GET['print'])){
	include('../../events/includes/include.php');
	if(!isset($_SESSION['AdminLoggedIn'])){
		exit;
	}//end if	?>
	<link rel="stylesheet" type="text/css" href="<?php echo CalAdminRoot;?>/admin.css">
	<table cellpadding="0" cellspacing="0" border="0" width="650">
		<tr>
			<td class="eventMain" valign="top">
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td class="eventMain">
						<span style="font-family:verdana;font-size:15px;font-weight:bold;"><?echo CalName;?> Overview Report</span><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Created at:</b> <?echo date("Y-m-d g:i:s A");?><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Calendar:</b> <?echo CalRoot;?>/<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Generated by:</b> Helios Calendar <?echo HC_Version;?>
					</td>
					<td class="eventMain" align="right" valign="top">
						<img src="<?echo CalAdminRoot;?>/images/cq_logo.gif" width="128" height="88" alt="" style="border: 1px solid black;">
						<br>www.HeliosCalendar.com</td>
				</tr>
			</table>
			<br>
<?	} else {	?>
	<table cellpadding="0" cellspacing="0" border="0" width="100%">
		<tr>
			<td class="eventMain">
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td width="20"><img src="<?echo CalAdminRoot;?>/images/icons/iconPrint.gif" width="15" height="15" alt="" border="0"></td>
					<td class="eventMain"><a href="<?echo CalAdminRoot;?>/components/Overview.php?print=1" class="main" target="_blank">Printer Friendly</a></td>
				</tr>
			</table>
			<br>
<?	}//end if	?>
			<table cellpadding="1" cellspacing="0" border="0" width="100%">
				<tr>
					<td class="eventMain" valign="bottom"><b>Calendar Details</b></td>
					<td class="eventMain" valign="bottom" align="right" width="100"><b>Stats</b></td>
				</tr>
				<tr>
					<td class="eventMain">Total Events</td>
					<td class="eventMain" align="right">
					<?	$result = doQuery("SELECT COUNT(*) FROM " . HC_TblPrefix . "events");
						if(hasRows($result)){
							$totalEvents = mysql_result($result,0,0);
							echo $totalEvents;
						} else {
							echo "N/A";
						}//end if?>
					</td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="tblListHL">Active Events</td>
					<td class="tblListHL" align="right">
					<?	$result = doQuery("SELECT COUNT(*) FROM " . HC_TblPrefix . "events WHERE IsActive = 1 AND IsApproved = 1 AND StartDate >= NOW()");
						if(hasRows($result)){
							$activeEvents = mysql_result($result,0,0);
							echo $activeEvents;
						} else {
							echo "N/A";
						}//end if?>
					</td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="eventMain">Passed Events</td>
					<td class="eventMain" align="right">
					<?	$result = doQuery("SELECT COUNT(*) FROM " . HC_TblPrefix . "events WHERE IsActive = 1 AND IsApproved = 1 AND StartDate < NOW()");
						if(hasRows($result)){
							$pastEvents = mysql_result($result,0,0);
							echo $pastEvents;
						} else {
							echo "N/A";
						}//end if?>
					</td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="tblListHL">Deleted Events</td>
					<td class="tblListHL" align="right">
					<?	$result = doQuery("SELECT COUNT(*) FROM " . HC_TblPrefix . "events WHERE IsActive = 0");
						if(hasRows($result)){
							echo mysql_result($result,0,0);
						} else {
							echo "N/A";
						}//end if?>
					</td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="eventMain">Active Billboard Events</td>
					<td class="eventMain" align="right">
					<?	$result = doQuery("SELECT COUNT(*) FROM " . HC_TblPrefix . "events WHERE IsActive = 1 AND IsApproved = 1 AND IsBillboard = 1 AND StartDate >= NOW()");
						if(hasRows($result)){
							echo mysql_result($result,0,0);
						} else {
							echo "N/A";
						}//end if?>
					</td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="tblListHL">Orphan Events</td>
					<td class="tblListHL" align="right">
					<?	$result = doQuery("	SELECT " . HC_TblPrefix . "events.*
											FROM " . HC_TblPrefix . "events
												LEFT JOIN " . HC_TblPrefix . "eventcategories ON (" . HC_TblPrefix . "events.PkID = " . HC_TblPrefix . "eventcategories.EventID)
												LEFT JOIN " . HC_TblPrefix . "categories ON (" . HC_TblPrefix . "categories.PkID = " . HC_TblPrefix . "eventcategories.CategoryID)
											WHERE 
												" . HC_TblPrefix . "events.IsActive = 1 AND
												" . HC_TblPrefix . "events.IsApproved = 1 AND
												" . HC_TblPrefix . "events.StartDate >= NOW() AND
												(" . HC_TblPrefix . "eventcategories.EventID IS NULL OR
												" . HC_TblPrefix . "categories.IsActive = 0)
											ORDER BY StartDate");
						echo mysql_num_rows($result);?>
					</td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="eventMain">Events Today</td>
					<td class="eventMain" align="right">
					<?	$result = doQuery("SELECT COUNT(*) FROM " . HC_TblPrefix . "events WHERE IsActive = 1 AND IsApproved = 1 AND StartDate = NOW()");
						if(hasRows($result)){
							echo mysql_result($result,0,0);
						} else {
							echo "N/A";
						}//end if?>
					</td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="tblListHL">Events Through Next Sunday</td>
					<td class="tblListHL" align="right">
					<?	$now = date("Y-m-d");
						
						$addDays = 0;
						if(date("w") != 6){
							$addDays = 6 - date("w");
						}//end if
						$then = date("Y-m-d", mktime(0,0,0,date("m"),date("d") + $addDays,date("Y")));
						
						$result = doQuery("SELECT COUNT(*) FROM " . HC_TblPrefix . "events WHERE StartDate BETWEEN '" . $now . "' AND '" . $then . "'");
						if(hasRows($result)){
							echo mysql_result($result,0,0);
						} else {
							echo "N/A";
						}//end if?>
					</td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="eventMain">Events Through End of Month</td>
					<td class="eventMain" align="right">
					<?	$now = date("Y-m-d");
						$then = date("Y-m-d", mktime(0,0,0,date("m") + 1,0,date("Y")));
						
						$result = doQuery("SELECT COUNT(*) FROM " . HC_TblPrefix . "events WHERE StartDate BETWEEN '" . $now . "' AND '" . $then . "'");
						if(hasRows($result)){
							echo mysql_result($result,0,0);
						} else {
							echo "N/A";
						}//end if?>
					</td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="tblListHL">Active Users</td>
					<td class="tblListHL" align="right">
					<?	$result = doQuery("SELECT COUNT(*) FROM " . HC_TblPrefix . "users WHERE IsRegistered = 1");
						if(hasRows($result)){
							echo mysql_result($result,0,0);
						} else {
							echo "N/A";
						}//end if?>
					</td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="eventMain">Total Users</td>
					<td class="eventMain" align="right">
					<?	$result = doQuery("SELECT COUNT(*) FROM " . HC_TblPrefix . "users");
						if(hasRows($result)){
							echo mysql_result($result,0,0);
						} else {
							echo "N/A";
						}//end if?>
					</td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="tblListHL">Earliest Event</td>
					<td class="tblListHL" align="right">
					<?	$result = doQuery("SELECT MIN(StartDate) FROM " . HC_TblPrefix . "events WHERE IsActive = 1");
						if(hasRows($result)){
							echo mysql_result($result,0,0);
						} else {
							echo "N/A";
						}//end if?>
					</td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="eventMain">Latest Event</td>
					<td class="eventMain" align="right">
					<?	$result = doQuery("SELECT MAX(StartDate) FROM " . HC_TblPrefix . "events WHERE IsActive = 1");
						if(hasRows($result)){
							echo mysql_result($result,0,0);
						} else {
							echo "N/A";
						}//end if?>
					</td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="tblListHL">Average Active Events Per Category</td>
					<td class="tblListHL" align="right">
					<?	$result = doQuery("SELECT COUNT(*) FROM " . HC_TblPrefix . "categories WHERE IsActive = 1");
						if(hasRows($result)){
							$activeCategories = mysql_result($result,0,0);
							echo number_format($activeEvents / $activeCategories, 2, '.', ',');
						} else {
							echo "N/A";
						}//end if?>
					</td>
				</tr>
			</table>
				
			<br>
			<?
				$result = doQuery("	SELECT SUM(Views) as Views,
										SUM(Directions) as Directions,
										SUM(Downloads) as Downloads,
										SUM(EmailToFriend) as EmailToFriend,
										SUM(URLClicks) as URLClicks,
										SUM(MViews) as MViews
									FROM " . HC_TblPrefix . "events
									WHERE IsActive = 1 AND StartDate >= NOW()");
				$aViews = mysql_result($result,0,0);
				$aDirections = mysql_result($result,0,1);
				$aDownloads = mysql_result($result,0,2);
				$aEmail = mysql_result($result,0,3);
				$aURL = mysql_result($result,0,4);
				$aMViews = mysql_result($result,0,5);
			?>
			<table cellpadding="1" cellspacing="0" border="0" width="100%">
				<tr>
					<td class="eventMain" valign="bottom"><b>Active Event Statistics</b></td>
					<td class="eventMain" valign="bottom" width="100" align="right"><b>Event<br>Average</b></td>
					<td class="eventMain" valign="bottom" width="50" align="right"><b>Total</b></td>
				</tr>
				<tr>
					<td class="eventMain">Views</td>
					<td class="eventMain" align="right"><?echo number_format($aViews / $activeEvents, 2, '.', ',');?></td>
					<td class="eventMain" align="right"><?echo $aViews;?></td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="tblListHL">Mobile Views</td>
					<td class="tblListHL" align="right"><?echo number_format($aMViews / $activeEvents, 2, '.', ',');?></td>
					<td class="tblListHL" align="right"><?echo $aMViews;?></td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="eventMain">Driving Directions</td>
					<td class="eventMain" align="right"><?echo number_format($aDirections / $activeEvents, 2, '.', ',');?></td>
					<td class="eventMain" align="right"><?echo $aDirections;?></td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="tblListHL">Downloads</td>
					<td class="tblListHL" align="right"><?echo number_format($aDownloads / $activeEvents, 2, '.', ',');?></td>
					<td class="tblListHL" align="right"><?echo $aDownloads;?></td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="eventMain">Email to Friend</td>
					<td class="eventMain" align="right"><?echo number_format($aEmail / $activeEvents, 2, '.', ',');?></td>
					<td class="eventMain" align="right"><?echo $aEmail;?></td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="tblListHL">URL Clicks</td>
					<td class="tblListHL" align="right"><?echo number_format($aURL / $activeEvents, 2, '.', ',');?></td>
					<td class="tblListHL" align="right"><?echo $aURL;?></td>
				</tr>
			</table>
			
			<br>
			<?
				$result = doQuery("	SELECT SUM(Views) as Views,
										SUM(Directions) as Directions,
										SUM(Downloads) as Downloads,
										SUM(EmailToFriend) as EmailToFriend,
										SUM(URLClicks) as URLClicks,
										SUM(MViews) as MViews
									FROM " . HC_TblPrefix . "events
									WHERE IsActive = 1 AND StartDate < NOW()");
				$pViews = mysql_result($result,0,0);
				$pDirections = mysql_result($result,0,1);
				$pDownloads = mysql_result($result,0,2);
				$pEmail = mysql_result($result,0,3);
				$pURL = mysql_result($result,0,4);
				$pMViews = mysql_result($result,0,5);
			?>
			<table cellpadding="1" cellspacing="0" border="0" width="100%">
				<tr>
					<td class="eventMain" valign="bottom"><b>Past Event Statistics</b></td>
					<td class="eventMain" valign="bottom" width="100" align="right"><b>Event<br>Average</b></td>
					<td class="eventMain" valign="bottom" width="50" align="right"><b>Total</b></td>
				</tr>
				<tr>
					<td class="eventMain">Views</td>
					<td class="eventMain" align="right"><?echo number_format($pViews / $pastEvents, 2, '.', ',');?></td>
					<td class="eventMain" align="right"><?echo $pViews;?></td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="tblListHL">Mobile Views</td>
					<td class="tblListHL" align="right"><?echo number_format($pMViews / $pastEvents, 2, '.', ',');?></td>
					<td class="tblListHL" align="right"><?echo $pMViews;?></td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="eventMain">Driving Directions</td>
					<td class="eventMain" align="right"><?echo number_format($pDirections / $pastEvents, 2, '.', ',');?></td>
					<td class="eventMain" align="right"><?echo $pDirections;?></td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="tblListHL">Downloads</td>
					<td class="tblListHL" align="right"><?echo number_format($pDownloads / $pastEvents, 2, '.', ',');?></td>
					<td class="tblListHL" align="right"><?echo $pDownloads;?></td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="eventMain">Email to Friend</td>
					<td class="eventMain" align="right"><?echo number_format($pEmail / $pastEvents, 2, '.', ',');?></td>
					<td class="eventMain" align="right"><?echo $pEmail;?></td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="tblListHL">URL Clicks</td>
					<td class="tblListHL" align="right"><?echo number_format($pURL / $pastEvents, 2, '.', ',');?></td>
					<td class="tblListHL" align="right"><?echo $pURL;?></td>
				</tr>
			</table>
			
			<br>
			<?
				$result = doQuery("	SELECT SUM(Views) as Views,
										SUM(Directions) as Directions,
										SUM(Downloads) as Downloads,
										SUM(EmailToFriend) as EmailToFriend,
										SUM(URLClicks) as URLClicks,
										SUM(MViews) as MViews
									FROM " . HC_TblPrefix . "events");
				$tViews = mysql_result($result,0,0);
				$tDirections = mysql_result($result,0,1);
				$tDownloads = mysql_result($result,0,2);
				$tEmail = mysql_result($result,0,3);
				$tURL = mysql_result($result,0,4);
				$tMViews = mysql_result($result,0,5);
			?>
			<table cellpadding="1" cellspacing="0" border="0" width="100%">
				<tr>
					<td class="eventMain" valign="bottom"><b>Total Event Statistics</b></td>
					<td class="eventMain" valign="bottom" width="100" align="right"><b>Event<br>Average</b></td>
					<td class="eventMain" valign="bottom" width="50" align="right"><b>Total</b></td>
				</tr>
				<tr>
					<td class="eventMain">Views</td>
					<td class="eventMain" align="right"><?echo number_format($tViews / $totalEvents, 2, '.', ',');?></td>
					<td class="eventMain" align="right"><?echo $tViews;?></td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="tblListHL">Mobile Views</td>
					<td class="tblListHL" align="right"><?echo number_format($tMViews / $totalEvents, 2, '.', ',');?></td>
					<td class="tblListHL" align="right"><?echo $tMViews;?></td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="eventMain">Driving Directions</td>
					<td class="eventMain" align="right"><?echo number_format($tDirections / $totalEvents, 2, '.', ',');?></td>
					<td class="eventMain" align="right"><?echo $tDirections;?></td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="tblListHL">Downloads</td>
					<td class="tblListHL" align="right"><?echo number_format($tDownloads / $totalEvents, 2, '.', ',');?></td>
					<td class="tblListHL" align="right"><?echo $tDownloads;?></td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="eventMain">Email to Friend</td>
					<td class="eventMain" align="right"><?echo number_format($tEmail / $totalEvents, 2, '.', ',');?></td>
					<td class="eventMain" align="right"><?echo $tEmail;?></td>
				</tr>
				<tr><td colspan="2"><img src="<?echo CalAdminRoot;?>/images/spacer.gif" width="1" height="1" alt="" border="0"></td></tr>
				<tr>
					<td class="tblListHL">URL Clicks</td>
					<td class="tblListHL" align="right"><?echo number_format($tURL / $totalEvents, 2, '.', ',');?></td>
					<td class="tblListHL" align="right"><?echo $tURL;?></td>
				</tr>
			</table>
			
		<?	if(isset($_GET['print'])){	?>
				<br>
				<span class="eventMain"><b>Generated by Helios Calendar <?echo HC_Version;?> -- www.HeliosCalendar.com</b></span>
				<p style="page-break-before: always;">
				<span class="eventMain"><b><?echo CalName;?> Calendar Overview -- Page 2/4</b></span>
				</p>
		<?	} else {	?>
				<br><br>
		<?	}//end if	?>
			<table cellpadding="1" cellspacing="0" border="0" width="100%">
			<?	$result = doQuery("SELECT Title, StartDate, Views FROM " . HC_TblPrefix . "events WHERE IsApproved = 1 AND Views > 0 ORDER BY Views DESC, Title LIMIT 10");
				if(hasRows($result)){	?>
					<tr>
						<td class="eventMain"><b>Most Viewed Events</b></td>
						<td class="eventMain" width="100"><b>Date</b></td>
						<td class="eventMain" width="50" align="right"><b>Count</b></td>
					</tr>
			<?		$cnt = 0;
					while($row = mysql_fetch_row($result)){	?>
						<tr>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo $row[0];?></td>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo $row[1];?></td>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top" align="right"><?echo $row[2];?></td>
						</tr>
			<?		$cnt++;
					}//end while
				} else {
			?>	<tr>
					<td class="eventMain">There are no events currently available for the <b>Most Viewed Events</b> report.</td>
				</tr>
			<?	}//end if
			?>
			</table>
			
			<br><br>
			<table cellpadding="1" cellspacing="0" border="0" width="100%">
			<?	$result = doQuery("SELECT Title, StartDate, MViews FROM " . HC_TblPrefix . "events WHERE IsApproved = 1 AND MViews > 0 ORDER BY MViews DESC, Title LIMIT 10");
				if(hasRows($result)){	?>
					<tr>
						<td class="eventMain"><b>Most Mobile Viewed Events</b></td>
						<td class="eventMain" width="100"><b>Date</b></td>
						<td class="eventMain" width="50" align="right"><b>Count</b></td>
					</tr>
			<?		$cnt = 0;
					while($row = mysql_fetch_row($result)){	?>
						<tr>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo $row[0];?></td>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo $row[1];?></td>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top" align="right"><?echo $row[2];?></td>
						</tr>
			<?		$cnt++;
					}//end while
				} else {
			?>	<tr>
					<td class="eventMain">There are no events currently available for the <b>Most Mobile Viewed Events</b> report.</td>
				</tr>
			<?	}//end if
			?>
			</table>
			
			<br><br>
			<table cellpadding="1" cellspacing="0" border="0" width="100%">
			<?	$result = doQuery("SELECT Title, StartDate, Directions FROM " . HC_TblPrefix . "events WHERE IsApproved = 1 AND Directions > 0 ORDER BY Directions DESC, Title LIMIT 10");
				if(hasRows($result)){	?>
					<tr>
						<td class="eventMain"><b>Most Driving Directions</b></td>
						<td class="eventMain" width="100"><b>Date</b></td>
						<td class="eventMain" width="50" align="right"><b>Count</b></td>
					</tr>
			<?		$cnt = 0;
					while($row = mysql_fetch_row($result)){	?>
						<tr>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo $row[0];?></td>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo $row[1];?></td>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top" align="right"><?echo $row[2];?></td>
						</tr>
			<?		$cnt++;
					}//end while
				} else {
			?>	<tr>
					<td class="eventMain">There are no events currently available for the <b>Most Driving Directions</b> report.</td>
				</tr>
			<?	}//end if
			?>
			</table>
			
		<?	if(isset($_GET['print'])){	?>
				<br>
				<span class="eventMain"><b>Generated by Helios Calendar <?echo HC_Version;?> -- www.HeliosCalendar.com</b></span>
				<p style="page-break-before: always;">
				<span class="eventMain"><b><?echo CalName;?> Calendar Overview -- Page 3/4</b></span>
				</p>
		<?	} else {	?>
				<br><br>
		<?	}//end if	?>
			<table cellpadding="1" cellspacing="0" border="0" width="100%">
			<?	$result = doQuery("SELECT Title, StartDate, Downloads FROM " . HC_TblPrefix . "events WHERE IsApproved = 1 AND Downloads > 0 ORDER BY Downloads DESC, Title LIMIT 10");
				if(hasRows($result)){	?>
					<tr>
						<td class="eventMain"><b>Most Downloads</b></td>
						<td class="eventMain" width="100"><b>Date</b></td>
						<td class="eventMain" width="50" align="right"><b>Count</b></td>
					</tr>
			<?		$cnt = 0;
					while($row = mysql_fetch_row($result)){	?>
						<tr>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo $row[0];?></td>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo $row[1];?></td>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top" align="right"><?echo $row[2];?></td>
						</tr>
			<?		$cnt++;
					}//end while
				} else {
			?>	<tr>
					<td class="eventMain">There are no events currently available for the <b>Most Downloads</b> report.</td>
				</tr>
			<?	}//end if
			?>
			</table>
			
			<br><br>
			<table cellpadding="1" cellspacing="0" border="0" width="100%">
			<?	$result = doQuery("SELECT Title, StartDate, EmailToFriend FROM " . HC_TblPrefix . "events WHERE IsApproved = 1 AND EmailToFriend > 0 ORDER BY EmailToFriend DESC, Title LIMIT 10");
				if(hasRows($result)){	?>
					<tr>
						<td class="eventMain"><b>Most Email to Friend</b></td>
						<td class="eventMain" width="100"><b>Date</b></td>
						<td class="eventMain" width="50" align="right"><b>Count</b></td>
					</tr>
			<?		$cnt = 0;
					while($row = mysql_fetch_row($result)){	?>
						<tr>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo $row[0];?></td>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo $row[1];?></td>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top" align="right"><?echo $row[2];?></td>
						</tr>
			<?		$cnt++;
					}//end while
				} else {
			?>	<tr>
					<td class="eventMain">There are no events currently available for the <b>Most Email to Friend</b> report.</td>
				</tr>
			<?	}//end if
			?>
			</table>
			
			<br><br>
			<table cellpadding="1" cellspacing="0" border="0" width="100%">
			<?	$result = doQuery("SELECT Title, StartDate, URLClicks FROM " . HC_TblPrefix . "events WHERE IsApproved = 1 AND URLClicks > 0 ORDER BY URLClicks DESC, Title LIMIT 10");
				if(hasRows($result)){	?>
					<tr>
						<td class="eventMain"><b>Most URL Clicks</b></td>
						<td class="eventMain" width="100"><b>Date</b></td>
						<td class="eventMain" width="50" align="right"><b>Count</b></td>
					</tr>
			<?		$cnt = 0;
					while($row = mysql_fetch_row($result)){	?>
						<tr>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo $row[0];?></td>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo $row[1];?></td>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top" align="right"><?echo $row[2];?></td>
						</tr>
			<?		$cnt++;
					}//end while
				} else {
			?>	<tr>
					<td class="eventMain">There are no events currently available for the <b>Most URL Clicks</b> report.</td>
				</tr>
			<?	}//end if
			?>
			</table>
			
		<?	if(isset($_GET['print'])){	?>
				<br>
				<span class="eventMain"><b>Generated by Helios Calendar <?echo HC_Version;?> -- www.HeliosCalendar.com</b></span>
				<p style="page-break-before: always;">
				<span class="eventMain"><b><?echo CalName;?> Calendar Overview -- Page 4/4</b></span>
				</p>
		<?	} else {	?>
				<br><br>
		<?	}//end if	?>
			<table cellpadding="1" cellspacing="0" border="0" width="100%">
			<?	$result = doQuery("SELECT Title, StartDate, PublishDate FROM " . HC_TblPrefix . "events WHERE IsApproved = 1 ORDER BY PublishDate DESC, Title LIMIT 10");
				if(hasRows($result)){	?>
					<tr>
						<td class="eventMain"><b>Recently Added Events</b></td>
						<td class="eventMain" width="100"><b>Event Date</b></td>
						<td class="eventMain" width="85"><b>Publish&nbsp;Date</b></td>
					</tr>
			<?		$cnt = 0;
					while($row = mysql_fetch_row($result)){	?>
						<tr>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo $row[0];?></td>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo $row[1];?></td>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo stampToDate($row[2], "Y-m-d");?></td>
						</tr>
			<?		$cnt++;
					}//end while
				} else {
			?>	<tr>
					<td class="eventMain">There are no events currently available for the <b>Recently Added Events</b> report.</td>
				</tr>
			<?	}//end if
			?>
			</table>
			
			<br><br>
			<table cellpadding="1" cellspacing="0" border="0" width="100%">
			<?	$result = doQuery("SELECT Title, StartDate, PublishDate FROM " . HC_TblPrefix . "events WHERE IsApproved = 1 AND SubmittedByName IS NOT NULL ORDER BY PublishDate DESC, Title LIMIT 10");
				if(hasRows($result)){	?>
					<tr>
						<td class="eventMain"><b>Recently Submitted Events</b></td>
						<td class="eventMain" width="100"><b>Event Date</b></td>
						<td class="eventMain" width="85"><b>Publish&nbsp;Date</b></td>
					</tr>
			<?		$cnt = 0;
					while($row = mysql_fetch_row($result)){	?>
						<tr>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo $row[0];?></td>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo $row[1];?></td>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo stampToDate($row[2], "Y-m-d");?></td>
						</tr>
			<?		$cnt++;
					}//end while
				} else {
			?>	<tr>
					<td class="eventMain">There are no events currently available for the <b>Recently Submitted Events</b> report.</td>
				</tr>
			<?	}//end if
			?>
			</table>
			
			<br><br>
			<table cellpadding="1" cellspacing="0" border="0" width="100%">
			<?	$result = doQuery("SELECT FirstName, LastName, Email, RegisteredAt FROM " . HC_TblPrefix . "users WHERE IsRegistered = 1 ORDER BY RegisteredAt DESC, LastName, FirstName LIMIT 10");
				if(hasRows($result)){	?>
					<tr>
						<td class="eventMain"><b>Newest Users</b></td>
						<td class="eventMain" width="100"><b>Email</b></td>
						<td class="eventMain" width="115"><b>Registration&nbsp;Date</b></td>
					</tr>
			<?		$cnt = 0;
					while($row = mysql_fetch_row($result)){	?>
						<tr>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo $row[0] . " " . $row[1];?></td>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo $row[2];?></td>
							<td <?if($cnt % 2 == 1){echo "class=\"tblListHL\"";}else{echo "class=\"eventMain\"";}//end if?> valign="top"><?echo stampToDate($row[3], "Y-m-d");?></td>
						</tr>
			<?		$cnt++;
					}//end while
				} else {
			?>	<tr>
					<td class="eventMain">There are no stats currently available for the <b>Newest Users</b> report.</td>
				</tr>
			<?	}//end if
			?>
			</table>
		<?	if(isset($_GET['print'])){	?>
				<br>
				<span class="eventMain"><b>Generated by Helios Calendar <?echo HC_Version;?> -- www.HeliosCalendar.com</b></span>
		<?	}//end if	?>
		</td>
	</tr>
</table>
