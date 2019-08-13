<?php

namespace Drupal\elasticsearch_helper_content;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * Interface ElasticsearchContentIndexInterface
 */
interface ElasticsearchContentIndexInterface extends ConfigEntityInterface {

  /**
   * Returns target entity type.
   *
   * @return string
   */
  public function getTargetEntityType();

  /**
   * Sets target entity type.
   *
   * @param string $entity_type
   *
   * @return string
   */
  public function setTargetEntityType($entity_type);

  /**
   * Returns target bundle.
   *
   * @return string
   */
  public function getTargetBundle();

  /**
   * Sets target bundle.
   *
   * @param string $bundle
   *
   * @return string
   */
  public function setTargetBundle($bundle);

  /**
   * Returns index name.
   *
   * @return string
   */
  public function getIndexName();

  /**
   * Returns TRUE if index supports multiple languages.
   *
   * @return boolean
   */
  public function isMultilingual();

  /**
   * Returns normalizer.
   *
   * @return string
   */
  public function getNormalizer();

  /**
   * Sets normalizer.
   *
   * @param string $normalizer
   *
   * @return string
   */
  public function setNormalizer($normalizer);

  /**
   * Returns normalizer instance.
   *
   * @return \Drupal\elasticsearch_helper_content\ElasticsearchNormalizerInterface
   */
  public function getNormalizerInstance();

  /**
   * Returns normalizer configuration.
   *
   * @return array
   */
  public function getNormalizerConfiguration();

  /**
   * Sets normalizer configuration.
   *
   * @param array $configuration
   *
   * @return array
   */
  public function setNormalizerConfiguration(array $configuration = []);

}