<!-- <div style="margin-top: 20px; margin-left: 20px;">
	<div style="clear: both;">
		<h2><?php echo Yii::t('BirthdayModule.base', 'Birthdays'); ?></h2>
	</div>
	<?php if (count($todayers)){ ?>
		<div style="clear: both;">
			<h2><?php echo Yii::t('BirthdayModule.base', 'today'); ?></h2>
		</div>
		<table>
			<?php foreach ($todayers as $user) {
				echo '</tr>' . $user->profile->lastname . ', ' . $user->profile->firstname . '</tr><br/>';
			} ?>
		</table>
	<?php } ?>

	<?php if (count($tomorrowers)) { ?>	
		
		<div style="clear: both;">
			<h2><?php echo Yii::t('BirthdayModule.base', 'Tomorrow'); ?></h2>
		</div>
		<table>
			<?php foreach ($tomorrowers as $user) {
				echo '</tr>' . $user->profile->lastname . ', ' . $user->profile->firstname . '</tr><br/>';
			} ?>
		</table>
	<?php } ?>
</div>
-->

<div style="margin-top: 20px; margin-left: 20px;">
	<div style="width: 30%;clear: both; margin:auto;">
		<h2><?php echo Yii::t('BirthdayModule.base', 'Next Birthdays'); ?></h2>
	</div>
	<?php if (count($bdayers)){ ?>
	<table style="background: #fff; width: 30%; margin:auto; border-radius :5px; padding:5px; font-size: 15px;">
		<thead>
			<th style="border-bottom: 1px black solid;"> Dia </th>
			<th style="border-bottom: 1px black solid; border-left: 1px black solid;"> Nombre </th>
		</thead>
		<tbody>
			<?php foreach ($bdayers as $user) { 
				$date = new \DateTime($user->profile->birthday);
            	$date = $date->format('d-m');
            	$day = new \DateTime($date .'-'.date('Y'));
            	$day = $day->format('l');
				echo '<tr><td style="padding:3px;">'.Yii::t('BirthdayModule.base', $day).' '.$date.'</td><td style="border-left: 1px black solid; padding:3px;">'.$user->profile->lastname. ', '.$user->profile->firstname.'</td></tr>';
				} ?>
		</tbody>
	</table>
	<?php } ?>
</div>