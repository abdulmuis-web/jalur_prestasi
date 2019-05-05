<?php

/**
 * @file
 * Contains jalur_prestasi.page.inc.
 *
 * Page callback for Jalur prestasi entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Jalur prestasi templates.
 *
 * Default template: jalur_prestasi.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_jalur_prestasi(array &$variables) {
  // Fetch JalurPrestasi Entity Object.
  $jalur_prestasi = $variables['elements']['#jalur_prestasi'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
