<?php
/**
 * @file
 * oic_taxonomie_contexte_geographique.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function oic_taxonomie_contexte_geographique_taxonomy_default_vocabularies() {
  return array(
    'provenance' => array(
      'name' => 'Contexte géographique',
      'machine_name' => 'provenance',
      'description' => 'Déterminé par le contenu du document et non la provenance de l\'auteur.',
      'hierarchy' => '1',
      'module' => 'taxonomy',
      'weight' => '-7',
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
