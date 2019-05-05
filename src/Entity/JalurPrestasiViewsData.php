<?php

namespace Drupal\jalur_prestasi\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Jalur prestasi entities.
 */
class JalurPrestasiViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

    return $data;
  }

}
