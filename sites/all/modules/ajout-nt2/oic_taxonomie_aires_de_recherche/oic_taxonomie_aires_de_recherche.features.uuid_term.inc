<?php
/**
 * @file
 * oic_taxonomie_aires_de_recherche.features.uuid_term.inc
 */

/**
 * Implements hook_uuid_features_default_terms().
 */
function oic_taxonomie_aires_de_recherche_uuid_features_default_terms() {
  $terms = array();

  $terms[] = array(
    'name' => 'Archéologie du contemporain',
    'description' => '<p>Aire de recherche consacrée aux antécédents historiques et épistémologiques des figures et des enjeux de l’imaginaire contemporain.</p>',
    'format' => 'html',
    'weight' => '0',
    'uuid' => '450e46f8-2be0-4f3f-a23f-2483bca6ab2c',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'aires_de_recherche',
  );
  $terms[] = array(
    'name' => 'Penser le contemporain',
    'description' => 'Aire de recherche consacrée à la théorisation et à la compréhension de la notion de «contemporain»',
    'format' => 'plain_text',
    'weight' => '0',
    'uuid' => '7870f494-c277-4eb3-920c-2d2d7f79e9bd',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'aires_de_recherche',
  );
  $terms[] = array(
    'name' => 'Enjeux artistiques contemporains',
    'description' => '<p>Aire de recherche consacrée à la modification ou à la transformation de la perception et de la conception contemporaines d\'un fait artistique.</p>',
    'format' => 'html',
    'weight' => '0',
    'uuid' => 'b9fe5fed-c926-41f5-bfd0-fdf10a21635d',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'aires_de_recherche',
  );
  $terms[] = array(
    'name' => 'Imaginaire de la création',
    'description' => 'Aire de recherche consacrée aux réflexions sur les processus créateurs et sur le rôle du créateur.',
    'format' => 'plain_text',
    'weight' => '0',
    'uuid' => 'c138f637-dcb4-4a88-b6d5-944285ac3ea6',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'aires_de_recherche',
  );
  $terms[] = array(
    'name' => 'Enjeux littéraires contemporains',
    'description' => '<p>Aire de recherche consacrée à la modification ou à la transformation de la perception et de la conception contemporaines d\'un fait littéraire.</p>',
    'format' => 'html',
    'weight' => '0',
    'uuid' => 'dc562ab3-1c8c-4d06-a5f7-d813bdf2699c',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'aires_de_recherche',
  );
  $terms[] = array(
    'name' => 'Figures contemporaines',
    'description' => '<p>Aire de recherche consacrée aux figures centrales de l\'imaginaire contemporain.</p>',
    'format' => 'html',
    'weight' => '0',
    'uuid' => 'df1aaec6-c28c-4a2c-9741-f320ae24a79f',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'aires_de_recherche',
  );
  $terms[] = array(
    'name' => 'Imaginaire de la théorie',
    'description' => '<p>Aire de recherche consacrée aux théories de la littérature, de l\'art, de l\'imaginaire et des relations entre le texte et l\'image.</p>',
    'format' => 'html',
    'weight' => '0',
    'uuid' => 'ff18e302-c2e2-4a59-b69a-fa1195f53cbd',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'aires_de_recherche',
  );
  return $terms;
}
