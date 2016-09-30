<?php

use humhub\modules\dashboard\widgets\Sidebar;
use humhub\commands\CronController;

return [
    'id' => 'birthday',
    'class' => 'humhub\modules\birthday\Module',
    'namespace' => 'humhub\modules\birthday',
    'events' => array(
    	['class' => Sidebar::className(), 'event' => Sidebar::EVENT_INIT, 'callback' => array('humhub\modules\birthday\Module', 'onSidebarInit')],
    	['class' => CronController::className(), 'event' => CronController::EVENT_ON_HOURLY_RUN, 'callback' => ['humhub\modules\birthday\Module', 'onCronRun']],
	)]
?>
