<?php
/**
 * @file
 * oic_taxonomie_periode_historique.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function oic_taxonomie_periode_historique_taxonomy_default_vocabularies() {
  return array(
    'epoque' => array(
      'name' => 'Période historique',
      'machine_name' => 'epoque',
      'description' => 'Déterminé par le contenu du document et non l\'époque à laquelle il a été produit. ',
      'hierarchy' => '0',
      'module' => 'taxonomy',
      'weight' => '-8',
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
