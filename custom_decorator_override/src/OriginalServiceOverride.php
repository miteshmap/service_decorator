<?php

namespace Drupal\custom_decorator_override;

use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Class OriginalServiceOverride
 *
 * Here, crerated CustomDecoratorInterface and implemented for example purpose
 * only. If you do not want to change anything in OriginalServiceinterface 
 * interface, You should implement OriginalServiceinterface only.
 */
class OriginalServiceOverride implements CustomDecoratorInterface {

  /**
   * Original service object.
   *
   * @var \Drupal\custom_decorator_base\OriginalService
   */
  protected $originalService;

  /**
   * OriginalServiceOverride constructor.
   *
   * @param \Drupal\custom_decorator_base\OriginalService $original_service
   * @param \Symfony\Component\HttpFoundation\RequestStack $request_stack
   */
  public function __construct(OriginalService $original_service, RequestStack $request_stack) {
    $this->originalService = $original_service;
    parent::__construct($request_stack);
  }

  public function helper() {
    return t('Overridden helper');
  }

  public function newPublicFunction() {
    return t('use of new available function');
  }

}
