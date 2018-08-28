<?php
/**
 * @file
 * oic_taxonomie_champs_disciplinaires.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function oic_taxonomie_champs_disciplinaires_taxonomy_default_vocabularies() {
  return array(
    'savoirs' => array(
      'name' => 'Champs disciplinaires',
      'machine_name' => 'savoirs',
      'description' => 'Savoirs',
      'hierarchy' => 1,
      'module' => 'taxonomy',
      'weight' => -6,
      'language' => 'und',
      'i18n_mode' => 1,
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
