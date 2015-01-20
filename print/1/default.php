<?PHP include("../../functions/nameFunc.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<link href="print-1.css" media="screen" rel="stylesheet" type="text/css" />
		<title>Marketing Manager - Business Card Preview</title>
	<?PHP
	
	// Count Extra Fields Function //
		$count=1;
			
		if (!empty($userInfo['mobilePhone']))
			$count ++;
			
		if (!empty($schoolInfo['add2']))
			$count ++;
		// Count Extra Fields Function - END //

		if ($count==2)	{
				echo "<style>#rightText {font-size:28px; line-height:31px;}</style>";
		} 	elseif ($count==3)	{
				echo "<style>#rightText {font-size:25px; line-height:28px;}</style>";
		}
?>

			<script>
			//"Accept terms" form submission- By Dynamic Drive
			//For full source code and more DHTML scripts, visit http://www.dynamicdrive.com
			//This credit MUST stay intact for use
			
			var checkobj
			
			function agreesubmit(el){
			checkobj=el
			if (document.all||document.getElementById){
			for (i=0;i<checkobj.form.length;i++){  //hunt down submit button
			var tempobj=checkobj.form.elements[i]
			if(tempobj.type.toLowerCase()=="submit")
			tempobj.disabled=!checkobj.checked
			}
			}
			}
			
			function defaultagree(el){
			if (!document.all&&!document.getElementById){
			if (window.checkobj&&checkobj.checked)
			return true
			else{
			alert("Please read/accept terms to submit form")
			return false
			}
			}
			}
			
			</script>

	</head>
	<body margin="0" padding="0">
	<div id="shell">
		<div id="col1">
			<span id="userName"><?PHP echo $userInfo['firstName'] . " " . $userInfo['lastName']; ?></span><br>
			<span id="leftText"><?PHP echo $userInfo['title']; ?><br /><?PHP echo $userInfo['email']; ?></span>
	</div>
	
	<div id="col2">
			<span id="rightText">
				<?PHP echo $schoolInfo['add1']; ?><br />
				
				<?php if( !empty( $schoolInfo['add2'] ) ): ?>
				<?PHP echo $schoolInfo['add2']; ?><br />
				<?php endif; ?>
				
				<?PHP echo $schoolInfo['city'] . "," . $schoolInfo['state'] . " " . $schoolInfo['zip']; ?><br />
				
				<!--<?php if( !empty( $userInfo['mobilePhone'] ) ): ?>
				<?PHP echo "<b>Mobile:</b> " . $userInfo['mobilePhone']; ?><br />
				<?php endif; ?>-->
				
				<?php if( !empty( $schoolInfo['phone'] ) ): ?>
				<?PHP echo "<b>Phone:</b> " . $schoolInfo['phone']; ?><?php if( !empty( $userInfo['extension'] ) ): ?><?PHP echo "<b> ext. </b> " . $userInfo['extension']; ?><?php endif; ?><br /><?php endif; ?>
				
				<?php if($schoolInfo['id']!="15" ): ?>
				<b>Toll Free: </b>(800) 831-1300<br />
				<?php endif; ?>
				
				<?php if( !empty( $fax ) ): ?>
				<?PHP echo "<b>Fax:</b> " . $fax; ?><br />
				<?php endif; ?>
	</div>
	</div>
	
	<?PHP include("../../functions/orderFunc.php"); ?>
	</body>
</html>

<?php include("../../inc/dbClose.php"); ?>                                                                                                                                                               