<?php

/**
 * @file
 * Support for migration from OAI-PMH sources.
 */

use Phpoaipmh\Client;
use Phpoaipmh\Endpoint;

/**
 * Implementation of MigrateSource, to handle imports from OAI-PMH sources.
 */
class MigrateSourceOaiPmh extends MigrateSource {
  /**
   * List of available source fields.
   *
   * @var array
   */
  protected $fields = array();

  /**
   * @var Client
   */
  protected $client;

  /**
   * @var Endpoint
   */
  protected $endpoint;

  /**
   * @var RecordIterator
   */
  protected $sourceRecords;

  /**
   * Source constructor.
   *
   * @param string $url
   *   The url to the OAI-PMH source.
   * @param array $fields
   *   Optional - keys are field names, values are descriptions. Use to override
   *   the default descriptions, or to add additional source fields which the
   *   migration will add via other means (e.g., prepareRow()).
   * @param array $options
   *   Options applied to this source.
   */
  public function __construct($url, $metadata_prefix, $from = NULL, $until = NULL, $set = NULL, array $fields = array(), array $options = array()) {
    parent::__construct($options);

    $this->sourceUrl = $url;
    $this->metadataPrefix = $metadata_prefix;
    $this->from = $from;
    $this->until = $until;
    $this->set = $set;
    $this->fields = $fields;
    $this->options = $options;

    // Make sure the autoloader is always registered since the migrate module
    // doesn't always bootstrap far enough.
    drupal_load('module', 'composer_manager');
    composer_manager_register_autoloader();

    $this->client = new Client($this->sourceUrl);
    $this->endpoint = new Endpoint($this->client);

    // Get a ResponseList object to fetch the source records.
    $this->sourceRecords = $this->endpoint->listRecords($this->metadataPrefix, $this->from, $this->until, $this->set);
  }

  /**
   * Return a string representing the source query.
   *
   * @return string
   *   Return a string representing the source query.
   */
  public function __toString() {
    return $this->sourceUrl;
  }

  /**
   * Returns a list of fields available to be mapped from the source query.
   *
   * @return array
   *   Keys: machine names of the fields (to be passed to addFieldMapping)
   *   Values: Human-friendly descriptions of the fields.
   */
  public function fields() {
    return $this->fields;
  }

  /**
   * Return a count of all available source records.
   */
  public function computeCount() {
    return $this->sourceRecords->getTotalRecordsInCollection();
  }

  /**
   * Implementation of MigrateSource::performRewind().
   */
  public function performRewind() {
    // Get a new ResponseList object to fetch the reset the source records.
    $this->sourceRecords->rewind();
  }

  /**
   * Implementation of MigrateSource::getNextRow().
   *
   * Return the next line of the OAI-PMH source as a SimpleXMLElement.
   *
   * @return SimpleXMLElement
   *   Data for the next row from the XML source files.
   */
  public function getNextRow() {
    $row = new stdClass();
    $row->xml = $this->sourceRecords->nextItem();

    // Register namespaces for row.
    $namespaces = $row->xml->getNamespaces(TRUE);
    foreach ($namespaces as $prefix => $url) {
      $row->xml->registerXPathNamespace($prefix, $url);
    }
    return $row;
  }

  /**
   * {@inheritdoc}
   */
  protected function hash($row) {
    // $row->xml is a SimpleXMLElement. Temporarily set it as an XML string
    // to prevent parent::hash() failing when try to create the hash.
    return parent::hash($row->xml->asXML());
  }
}
