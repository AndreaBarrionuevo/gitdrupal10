<?php

declare(strict_types=1);

namespace Drupal\test_modul;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a test entity entity type.
 */
interface TestEntityInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
