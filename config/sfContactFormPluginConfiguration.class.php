<?php

class sfContactFormPluginConfiguration extends sfPluginConfiguration
{
  public function initialize()
  {
    if (sfConfig::get('app_contact_form_register_routes', true))
    {
      $enabledModules = sfConfig::get('sf_enabled_modules', array());
      if (in_array('contact', $enabledModules))
      {
        $this->dispatcher->connect('routing.load_configuration', array('sfContactFormRouting', 'listenToRoutingLoadConfigurationEvent'));
      }
    }
  }
}
