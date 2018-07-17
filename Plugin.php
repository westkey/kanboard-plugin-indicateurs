<?php

namespace Kanboard\Plugin\Activity;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Security\Role;

class Plugin extends Base
{
    public function initialize()
    {
        $this->applicationAccessMap->add('ActivityController', '*', Role::APP_USER);

        $this->template->hook->attach('template:project-list:menu:after', 'Activity:menu');

        $this->route->enable();
        $this->route->addRoute('/Activity', 'ActivityController', 'index', 'Activity');
    }

    public function getClasses()
    {
        return array();
    }

    public function getPluginName()
    {
        return 'Activity';
    }

    public function getPluginDescription()
    {
        return t("Activity : état d'avancement des projets, nombre de projets par service, vue synthétique des projets");
    }

    public function getPluginAuthor()
    {
        return 'Jade Tavernier, Pascal Rigaux';
    }

    public function getPluginVersion()
    {
        return '1.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/UnivParis1/kanboard-plugin-Activity';
    }
}
