<?php
/**
 * @file
 * oic_taxonomie_courants_artistiques.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function oic_taxonomie_courants_artistiques_taxonomy_default_vocabularies() {
  return array(
    'contenu' => array(
      'name' => 'Courants artistiques',
      'machine_name' => 'contenu',
      'description' => 'Autant que possible, choisir des mots-clés DÉJÀ recensés. Problématiques? Savoirs? Figures? Imaginaires? Pratiques?',
      'hierarchy' => '1',
      'module' => 'taxonomy',
      'weight' => '-5',
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
