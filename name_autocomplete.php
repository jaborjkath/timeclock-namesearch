<?php

/*
	S.I. Training: jQuery Assignment - Conversion of Ajax Timeclock Name Autocomplete
	Name: Kath Borja
	Date Submitted: August 16, 2014
*/

$employee_names = array("Kath Borja", "Elaine Vyke", "Vivo Merkle", "Bela Summersdale", "Jung Ki-Ho");

if(strlen($_GET['str']) > 0){
	for($n = 0; $n < count($employee_names); $n++){
		$pos = stripos($employee_names[$n], $_GET['str']);
		
		if($pos !== FALSE){
			//echo str_replace($_GET['str'], '<b style="color: blue; font-family: Trebuchet MS">'.$_GET['str'].'</b>', $employee_names[$n]) . '<br>';
			?> 
				<div style="background: #ffffff; border-width: 1px; border-color: #808080;">
					<?php
						//echo str_replace($_GET['str'], '<b style="color: blue; font-family: Trebuchet MS">'.$_GET['str'].'</b>', $employee_names[$n]) . '<br>';
					?>
					<div style="padding: 3px; height: 14px;" onmouseover="this.style.background = '#F17600'" onmouseout="this.style.background = '#ffffff'" onclick="setvalue ('<?php echo $employee_names[$n]; ?>')"> 
						<?php 
							echo str_replace($_GET['str'], '<span style="color: blue; font-family: Trebuchet MS">'.$_GET['str'].'</span>', $employee_names[$n]) . '<br>'; 
						?>
					</div>
				</div>
   <?php 
		} 
	}
}
?>