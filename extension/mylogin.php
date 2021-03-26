<?php
defined('JEXEC') or die('Access Deny');
class plgUserMyLogin extend JPlugin
{
    function onUserLogin($user, $options=array()){
        $menu_id=$$this->params->get('menu_id');
        $app=JFactory::getApplication();
        $menu=$app->getMenu();
        $item=$menu->getItem($menu_id);
        $url=JRoute:: ($item->link.'&ietmId='$menu_id');
        $app->redirect($url,'LOGIN SUCCESSFULLY AND USING THIS THING IS AWESOME');
        

    }

}