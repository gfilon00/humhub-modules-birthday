<?php
/**
 * BirthdayModule is responsible for the the birthday functions.
 * 
 * @author Sebastian Stumpf
 *
 */

class BirthdayModule extends HWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application
	}
	
	/**
	 * On build of the dashboard sidebar widget, add the birthday widget if module is enabled.
	 *
	 * @param type $event
	 */	
	public static function onSidebarInit($event) {

        if (Yii::app()->moduleManager->isEnabled('birthday')) {
            $event->sender->addWidget('application.modules.birthday.widgets.BirthdaySidebarWidget', array(), array('sortOrder' => 200));
        }
	}
	
	public function getConfigUrl()
	{
		return Yii::app()->createUrl('//birthday/config/config');
	}
	
}
?>