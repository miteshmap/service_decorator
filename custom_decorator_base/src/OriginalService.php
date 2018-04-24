<?php

namespace Drupal\custom_decorator_base;

use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Class OriginalService
 */
class OriginalService implements CustomDecoratorInterface {

  /**
   * Request stack object.
   *
   * @var \Symfony\Component\HttpFoundation\RequestStack
   */
  protected $requestStack;

  /**
   * OriginalService constructor.
   *
   * @param \Symfony\Component\HttpFoundation\RequestStack $request_stack
   */
  public function __construct(RequestStack $request_stack) {
    $this->requestStack = $request_stack;
  }

  public function helper() {
    $uri = $this->requestStack->getCurrentRequest()->getRequestUri();
    return t('current page uri: :uri', [':uri' => $uri]);
  }

}
