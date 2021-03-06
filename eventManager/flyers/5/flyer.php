<?php include("../eventFlyerFunctions.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<link href="styles.css" media="screen" rel="stylesheet" type="text/css" />
	</head>
	<body margin="0" padding="0">
	<div id="shell">
		<div id="eventHeadline"><?PHP echo $eventInfo['eventName'] ?></div>
		
		<div id="eventTime">
			<?php echo $eventInfo['eventDate1DayName'] . ", " . $monthInfo['month'] . " " . $eventInfo['eventDate1Day'] . $suffixInfo['suffix'] . " - " .  $eventInfo['eventTime1Hour'] . ":" .  $eventInfo['eventTime1Minutes'] . $eventInfo['eventTime1AMPM'] . " to ". $eventInfo['eventTime1EndHour'] . ":" .  $eventInfo['eventTime1EndMinutes'] . $eventInfo['eventTime1EndAMPM']  ?>
		</div>
		
		<div id="eventLocation">
				<b><?PHP echo $eventInfo['eventLocationName'] ?></b><br /> 			
				<?PHP echo $eventInfo['eventLocAdd1'] ?><br />
				<?php if( !empty( $eventInfo['eventLocAdd2']  ) ): ?>
					<?PHP echo $eventInfo['eventLocAdd2']?><br />
				<?php endif; ?>
				<?PHP echo $eventInfo['eventLocCity'] ?>, <?PHP echo $eventInfo['eventLocState'] ?> <?PHP echo $eventInfo['eventLocZip'] ?>
			</div>
			
			
	<div id="eventDescription">
		<p><?PHP echo ($eventInfo['eventDesc']) ?></p>
		<ul>
			<?php if( !empty( $eventInfo['eventHighlight1']  ) ): ?>
				<li><?PHP echo $eventInfo['eventHighlight1'] ?></li>
			<?php endif; ?>
			
			<?php if( !empty( $eventInfo['eventHighlight2']  ) ): ?>
				<li><?PHP echo $eventInfo['eventHighlight2'] ?></li>
			<?php endif; ?>
			
			<?php if( !empty( $eventInfo['eventHighlight3']  ) ): ?>
				<li><?PHP echo $eventInfo['eventHighlight3'] ?></li>
			<?php endif; ?>
			
			<?php if( !empty( $eventInfo['eventHighlight4']  ) ): ?>
				<li><?PHP echo $eventInfo['eventHighlight4'] ?></li>
			<?php endif; ?>
		</ul>
	</div>
			
		
		<div id="eventPhone">
				<?PHP echo $eventInfo['rsvpPhone'] ?>
		</div>
		

	</body>
</html>

<?php include("../../inc/dbClose.php"); ?>                                                                                                                                                               