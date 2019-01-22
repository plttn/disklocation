input.diskLocation {
	padding: 5px;
	width: 70px;
	height: 30px;
	background-color: #F2F2F2;
	margin-top: -20px;
	margin-bottom: -20px;
	margin-left: auto;
	margin-right: auto;
}
.grid-container {
	display: grid;
	justify-content: center;
	grid-gap: 0;
	grid-template-columns: <?php echo $grid_columns_styles ?>;
	grid-template-rows: <?php echo $grid_rows_styles ?>;
	grid-auto-flow: <?php echo $grid_count ?>; /* column: bays ordered from top to bottom from left to right | row: ..from left to right from top to bottom */
}
.grid-container>div {
	display: grid;
	grid-gap: 0;
}
.flex-container {
	display: flex;
	margin: 0;
	flex-direction: column;
	justify-content: flex-start;
}
.flex-container>div {
	display: flex;
	width: <?php echo $tray_height ?>px;
	height: <?php echo $tray_width ?>px;
	margin: 5px;
	padding: 10px 10px 10px 10px;
	flex-direction: column;
	border: 2px solid #000000;
	border-radius: 5px;
}
.flex-container-start {
	min-height: 25px;
	text-align: center;
}
.flex-container-start>div {
	display: flex;
}
.flex-container-middle {
	width: 100%;
	padding: 10px 0 20px ;
	writing-mode: vertical-rl;
	text-orientation: mixed;
	text-align: left;
	margin-bottom: auto;
}
.flex-container-middle>div {
	display: flex;
	text-align: left;
}
.flex-container-end {
	display: flex;
	text-align: right;
}
.flex-container-layout {
	display: flex;
	margin: 0;
	flex-direction: column;
	justify-content: flex-start;
}
.flex-container-layout>div {
	display: flex;
	width: <?php print($tray_height/10); ?>px;
	height: <?php print($tray_width/10); ?>px;
	margin: 1px;
	padding: 5px 5px 5px 5px;
	flex-direction: column;
	border: 1px solid #000000;
	border-radius: 1px;
	align-items: center;
	justify-content: center;
}
