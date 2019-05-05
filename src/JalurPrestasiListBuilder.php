<?php

namespace Drupal\jalur_prestasi;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Jalur prestasi entities.
 *
 * @ingroup jalur_prestasi
 */
class JalurPrestasiListBuilder extends EntityListBuilder {


  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('ID');
    $header['name'] = $this->t('Jalur prestasi');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\jalur_prestasi\Entity\JalurPrestasi */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.jalur_prestasi.canonical',
      ['jalur_prestasi' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
