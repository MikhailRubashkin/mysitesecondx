<?php

/**
 * @file
 * reviewsecond.features.inc
 */

/**
 * Implements hook_node_info().
 */
function reviewsecond_node_info() {
  $items = array(
    'review' => array(
      'name' => t('Review'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
