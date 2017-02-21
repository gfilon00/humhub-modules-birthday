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
	<div style="clear: both;">
		<h2><?php echo Yii::t('BirthdayModule.base', 'Birthdays'); ?></h2>
	</div>
	<?php if (count($bdayers)){ ?>
	<table style="background: #fff; width: 30%; margin:auto; border-radius :5px; padding:5px; font-size: 15px;">
		<thead>
			<th style="border-bottom: 1px black solid; border-right: 1px black solid;"> Nombre </th>
			<th style="border-bottom: 1px black solid;"> Dia </th>
		</thead>
		<tbody>
			<?php foreach ($bdayers as $user) { 
				$date = new \DateTime($user->profile->birthday);
            	$date = $date->format('d-m');
            	$date = new \DateTime($date .'-'.date('Y'));
            	$date = $date->format('l');
				echo '<tr><td style="border-right: 1px black solid;">'.$user->profile->lastname. ', '.$user->profile->firstname.'</td><td>'.Yii::t('BirthdayModule.base', $date).'</td></tr>';
				} ?>
		</tbody>
	</table>
	<?php } ?>
</div>