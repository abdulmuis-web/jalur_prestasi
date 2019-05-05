<?php

namespace Drupal\jalur_prestasi;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Jalur prestasi entity.
 *
 * @see \Drupal\jalur_prestasi\Entity\JalurPrestasi.
 */
class JalurPrestasiAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\jalur_prestasi\Entity\JalurPrestasiInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished jalur prestasi entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published jalur prestasi entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit jalur prestasi entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete jalur prestasi entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add jalur prestasi entities');
  }

}
