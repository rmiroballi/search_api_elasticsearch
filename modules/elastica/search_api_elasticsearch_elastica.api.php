<?php

/**
 * @file
 * This file contains no working PHP code; it exists to provide additional
 * documentation for Doxygen as well as to document hooks in the standard
 * Drupal manner.
 */

/**
 * Allows modules to alter Elastica query.
 *
 * @param \Elastica\Query $elastica_query
 *   The Elastica query object to be altered.
 * @param SearchApiQueryInterface $query
 *   The original Search API query.
 */
function hook_search_api_elasticsearch_elastica_query_alter(\Elastica\Query &$elastica_query, SearchApiQueryInterface $query) {

}