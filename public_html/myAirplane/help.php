<?php
require_once "../includes.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>My Airplane Help</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="../favicon.ico" />
<link rel="stylesheet" href="../base.css?v=1" />
<script src="../base.js?v=1" type="text/javascript"></script>
</head>
<body>
<table class="topPanel"><tr><td>
<?php
require_once "../navSignOn.php";
?>
</td></tr></table>

<table class="pageResult"><tr><td>
<p>
Enter the information in the form to create an entry for your airplane.<br/>
You can enter more than one airplane.  Just click Save to save the current plane.<br/>
You will receive a list of airplanes if you have entered more than one plane.<br/>
You can make an account for each plane type if you are a school and have several planes that don't fit in the list box.<br/>
Use the equipment list to select multiple items for your airplane's equipment.<br/>
Taxi Depart, Climb, Enroute, Descent, Trafic Pattern, Taxi Arrive are entered as minutes,gallons.<br/>
Hobbs Maint is the Hobbs counter when the engine had its last overhaul.<br/>
Hobbs Current is the current Hobbs counter and is used to calculate the time to next engine overhaul.<br/>
Hobbs TBOH is the Hobbs counter for the amount of time running after the most recent engine overhaul.<br/>
The text area below the CG calculation is for any notes about your airplane.  I put CG limits in mine.<br/>
If available weight is negative then you need to remove some weight from the plane.<br/>
You can upload your own checklists in ay of these formats:html, pdf, jpg, gif, png.<br/>
The checklist file size must be 200K or smaller.<br/>
Use the Select Checklist button to open a file dialog so that you can select the checklist to upload.<br/>
After you select your checklist press the save button.  If your checklist name is long it might be visually truncated.<br/>
If there is another checklist with the same name try renaming yours with your registration. ie. regNbrPA28RRunup.jpg<br/>
Make sure to keep the same extension so if it's a jpg keep it jpg.<br/>
If you checkmark the checkbox and then press "Delete Checklist" it will delete the checked items.<br/>
</p>
</td></tr></table>

<table class="footer"><tr><td>
<?php
$f = new Footer();
?>
</td></tr></table>

</body></html>