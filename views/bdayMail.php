<div style="margin-top: 20px; margin-left: 20px;">
	<div style="clear: both;">
		<h2><?php echo Yii::t('BirthdayModule.base', 'Birthdays'); ?></h2>
	</div>
	<div style="clear: both;">
		<h2><?php echo Yii::t('BirthdayModule.base', 'today'); ?></h2>
	</div>
	<table>
		<?php foreach ($todayers as $user) {
			echo '</tr>' . $user->profile->lastname . ', ' . $user->profile->firstname . '</tr><br/>';
		} ?>
	</table>
	<div style="clear: both;">
		<h2><?php echo Yii::t('BirthdayModule.base', 'Tomorrow'); ?></h2>
	</div>
	<table>
		<?php foreach ($tomorrowers as $user) {
			echo '</tr>' . $user->profile->lastname . ', ' . $user->profile->firstname . '</tr><br/>';
		} ?>
	</table>
</div>
