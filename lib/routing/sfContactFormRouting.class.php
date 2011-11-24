<?php

class sfContactFormRouting
{
  /**
   * Listens to the routing.load_configuration event.
   *
   * @param sfEvent An sfEvent instance
   * @static
   */
  static public function listenToRoutingLoadConfigurationEvent(sfEvent $event)
  {
    $r = $event->getSubject();
    // preprend our routes
    $r->prependRoute('sf_contact_form', new sfRoute('/contact', array('module' => 'contact', 'action' => 'index')));
    $r->prependRoute('sf_contact_form_image', new sfRoute('/contact/image.png', array('module' => 'contact', 'action' => 'image')));
  }
}
