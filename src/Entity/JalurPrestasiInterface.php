<?php

namespace Drupal\jalur_prestasi\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Jalur prestasi entities.
 *
 * @ingroup jalur_prestasi
 */
interface JalurPrestasiInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Jalur prestasi name.
   *
   * @return string
   *   Name of the Jalur prestasi.
   */
  public function getName();

  /**
   * Sets the Jalur prestasi name.
   *
   * @param string $name
   *   The Jalur prestasi name.
   *
   * @return \Drupal\jalur_prestasi\Entity\JalurPrestasiInterface
   *   The called Jalur prestasi entity.
   */
  public function setName($name);

  /**
   * Gets the Jalur prestasi creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Jalur prestasi.
   */
  public function getCreatedTime();

  /**
   * Sets the Jalur prestasi creation timestamp.
   *
   * @param int $timestamp
   *   The Jalur prestasi creation timestamp.
   *
   * @return \Drupal\jalur_prestasi\Entity\JalurPrestasiInterface
   *   The called Jalur prestasi entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Jalur prestasi published status indicator.
   *
   * Unpublished Jalur prestasi are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Jalur prestasi is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Jalur prestasi.
   *
   * @param bool $published
   *   TRUE to set this Jalur prestasi to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\jalur_prestasi\Entity\JalurPrestasiInterface
   *   The called Jalur prestasi entity.
   */
  public function setPublished($published);

}
