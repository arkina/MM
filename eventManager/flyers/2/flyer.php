<?php include("../eventFlyerFunctions.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<link href="styles.css" media="screen" rel="stylesheet" type="text/css" />
	</head>
	<body margin="0" padding="0">
	<div id="shell">
		<div id="eventHeadline"><?PHP echo $eventInfo['eventName'] ?></div>
		
		<div id="eventDescription">
		<p><?PHP echo nl2br($eventInfo['eventDesc']) ?></p>
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
			
			<?php if( !empty( $eventInfo['eventHighlight5']  ) ): ?>
				<li><?PHP echo $eventInfo['eventHighlight5'] ?></li>
			<?php endif; ?>
		</ul>
		</div>


		
		<div id="info">
		
			<div id="eventLocation">
				<?PHP echo $eventInfo['eventLocationName'] ?><br>			
				<?PHP echo $eventInfo['eventLocAdd1'] ?>
				<?php if( !empty( $eventInfo['eventLocAdd2']  ) ): ?>
					<?PHP echo " | " . $eventInfo['eventLocAdd2'] ?>
				<?php endif; ?>
				<br><?PHP echo $eventInfo['eventLocCity'] ?>, <?PHP echo $eventInfo['eventLocState'] ?> <?PHP echo $eventInfo['eventLocZip'] ?>
		</div><!-- END id=eventLocation -->
		
		<div id="eventTime">
		<ul>
						<?php echo "<li>" . $eventInfo['eventDate1DayName'] . ", " . $eventInfo['eventDate1Month'] . "/" . $eventInfo['eventDate1Day'] . " at " .  $eventInfo['eventTime1Hour'] . ":" .  $eventInfo['eventTime1Minutes'] . $eventInfo['eventTime1AMPM'] . " to ". $eventInfo['eventTime1EndHour'] . ":" .  $eventInfo['eventTime1EndMinutes'] . $eventInfo['eventTime1EndAMPM']  . "</li><br>" ?>
						
						<?php if( !empty( $eventInfo['eventDate2DayName']  ) ): ?>
							<?php echo "<li>" . $eventInfo['eventDate2DayName'] . ", " . $eventInfo['eventDate2Month'] . "/" . $eventInfo['eventDate2Day'] . " at " .  $eventInfo['eventTime2Hour'] . ":" .  $eventInfo['eventTime2Minutes'] . $eventInfo['eventTime2AMPM'] . " to ". $eventInfo['eventTime2EndHour'] . ":" .  $eventInfo['eventTime2EndMinutes'] . $eventInfo['eventTime2EndAMPM']  . "</li><br>" ?>
						<?php endif; ?>
						
						<?php if( !empty( $eventInfo['eventDate3DayName']  ) ): ?>
							<?php echo "<li>" . $eventInfo['eventDate3DayName'] . ", " . $eventInfo['eventDate3Month'] . "/" . $eventInfo['eventDate3Day'] . " at " .  $eventInfo['eventTime3Hour'] . ":" .  $eventInfo['eventTime3Minutes'] . $eventInfo['eventTime3AMPM'] . " to ". $eventInfo['eventTime3EndHour'] . ":" .  $eventInfo['eventTime3EndMinutes'] . $eventInfo['eventTime3EndAMPM']  . "</li><br>" ?>
						<?php endif; ?>
						
						<?php if( !empty( $eventInfo['eventDate4DayName']  ) ): ?>
							<?php echo "<li>" . $eventInfo['eventDate4DayName'] . ", " . $eventInfo['eventDate4Month'] . "/" . $eventInfo['eventDate4Day'] . " at " .  $eventInfo['eventTime4Hour'] . ":" .  $eventInfo['eventTime4Minutes'] . $eventInfo['eventTime4AMPM'] . " to ". $eventInfo['eventTime4EndHour'] . ":" .  $eventInfo['eventTime4EndMinutes'] . $eventInfo['eventTime4EndAMPM']  . "</li><br>" ?>
						<?php endif; ?>
						
						<?php if( !empty( $eventInfo['eventDate5DayName']  ) ): ?>
							<?php echo "<li>" . $eventInfo['eventDate5DayName'] . ", " . $eventInfo['eventDate5Month'] . "/" . $eventInfo['eventDate5Day'] . " at " .  $eventInfo['eventTime5Hour'] . ":" .  $eventInfo['eventTime5Minutes'] . $eventInfo['eventTime5AMPM'] . " to ". $eventInfo['eventTime5EndHour'] . ":" .  $eventInfo['eventTime5EndMinutes'] . $eventInfo['eventTime5EndAMPM']  . "</li><br>" ?>
						<?php endif; ?>
		</ul>
</div> <!-- END id=eventTime -->
					
	</div><!-- END id=info -->
	
		<div id="phone">
			<div id="eventPhone"><?PHP echo $eventInfo['rsvpPhone'] ?></div>
		</div><!-- END id=phone -->
		
	</body>
</html>

<?php include("../../inc/dbClose.php"); ?>                                                                                                                                                               