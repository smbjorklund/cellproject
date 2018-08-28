<?php
/**
 * @file
 * oic_taxonomie_aires_de_recherche.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function oic_taxonomie_aires_de_recherche_taxonomy_default_vocabularies() {
  return array(
    'aires_de_recherche' => array(
      'name' => 'Aires de recherche',
      'machine_name' => 'aires_de_recherche',
      'description' => '',
      'hierarchy' => '0',
      'module' => 'taxonomy',
      'weight' => '-9',
      'language' => 'und',
      'i18n_mode' => '1',
      'rdf_mapping' => array(
        'rdftype' => array(
          0 => 'skos:ConceptScheme',
        ),
        'name' => array(
          'predicates' => array(
            0 => 'dc:title',
          ),
        ),
        'description' => array(
          'predicates' => array(
            0 => 'rdfs:comment',
          ),
        ),
      ),
    ),
  );
}
