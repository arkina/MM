<?PHP include("../../functions/nameFunc.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Marketing Manager - </title>
	<link href="downloadable-6.css" media="screen" rel="stylesheet" type="text/css" />
	</head>
	<body>
	<div id="shell">
   
	
	<div id="text">
				<div class="col1">
				<b class='label'><?PHP echo $userInfo['firstName'] . " " . $userInfo['lastName']; ?></b><br />
				
				<?php if( !empty( $userInfo['title'] ) ): ?>
				<?PHP echo $userInfo['title']; ?><br />
				<?php endif; ?>
				
				<?PHP echo $userInfo['email']; ?><br /><br />
				</div>
				
				<div class="col2">
				<?php if( !empty( $userInfo['mobilePhone'] ) ): ?>
				<?PHP echo "<b class='label'>Mobile:</b> " . $userInfo['mobilePhone']; ?><br />
				<?php endif; ?>
				<?PHP echo "<b class='label'>Phone:</b> " . $schoolInfo['phone']; ?>
				<?php if( !empty( $userInfo['extension'] ) ): ?><?PHP echo "<b class='label'> ext. </b> " . $userInfo['extension']; ?><?php endif; ?><br />
				<?PHP echo "<b class='label'>Fax:</b> " . $fax; ?>
				</div>
				
				<div class="col3">
				
					<?PHP echo $schoolInfo['add1']; ?><br />	
					<?php if( !empty( $schoolInfo['add2'] ) ): ?>
					<?PHP echo $schoolInfo['add2']; ?><br />
					<?php endif; ?>
					
					<?PHP echo $schoolInfo['city'] . ", " . $schoolInfo['state'] . " " . $schoolInfo['zip']; ?>
				</div>
	</div>
	
	</body>
</html>

<?php include("../../inc/dbClose.php"); ?>                                                                                                                                                               