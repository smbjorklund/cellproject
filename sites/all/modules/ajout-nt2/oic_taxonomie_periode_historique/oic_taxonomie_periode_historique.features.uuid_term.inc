<?php
/**
 * @file
 * oic_taxonomie_periode_historique.features.uuid_term.inc
 */

/**
 * Implements hook_uuid_features_default_terms().
 */
function oic_taxonomie_periode_historique_uuid_features_default_terms() {
  $terms = array();

  $terms[] = array(
    'name' => 'Préhistoire',
    'description' => '',
    'format' => 'html',
    'weight' => '-2',
    'uuid' => '0c132d55-a08f-4ad5-be32-b6ddbab07603',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'epoque',
  );
  $terms[] = array(
    'name' => 'XXe siècle',
    'description' => '',
    'format' => 'html',
    'weight' => '6',
    'uuid' => '0c2d7280-f09d-4c83-a2b1-9ef609c4a110',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'epoque',
  );
  $terms[] = array(
    'name' => 'XVIIe siècle',
    'description' => '',
    'format' => 'html',
    'weight' => '3',
    'uuid' => '1380fb45-fe3f-4169-95e7-bfdf4b4e96c1',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'epoque',
  );
  $terms[] = array(
    'name' => '1900-1920',
    'description' => '',
    'format' => 'html',
    'weight' => '-2',
    'uuid' => '19b0bace-48b2-4368-a4e9-de66774717e6',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'epoque',
    'parent' => array(
      0 => '0c2d7280-f09d-4c83-a2b1-9ef609c4a110',
    ),
  );
  $terms[] = array(
    'name' => '2000-2010',
    'description' => '',
    'format' => 'html',
    'weight' => '0',
    'uuid' => '1f3d32dc-c59e-433e-a1e7-8fdccf1a7eaf',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'epoque',
    'parent' => array(
      0 => '27821c22-33ce-4514-951c-e666ef9c3b8f',
    ),
  );
  $terms[] = array(
    'name' => 'XXIe siècle',
    'description' => '',
    'format' => 'html',
    'weight' => '7',
    'uuid' => '27821c22-33ce-4514-951c-e666ef9c3b8f',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'epoque',
  );
  $terms[] = array(
    'name' => '1980-2000',
    'description' => '',
    'format' => 'html',
    'weight' => '4',
    'uuid' => '27b83936-98e0-40a6-804f-a797aacb5fb1',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'epoque',
    'parent' => array(
      0 => '0c2d7280-f09d-4c83-a2b1-9ef609c4a110',
    ),
  );
  $terms[] = array(
    'name' => 'Moyen Âge',
    'description' => '',
    'format' => 'html',
    'weight' => '0',
    'uuid' => '30ba58fa-5e1f-4814-80e7-5a79f6a415a5',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'epoque',
  );
  $terms[] = array(
    'name' => 'XIXe siècle',
    'description' => '',
    'format' => 'html',
    'weight' => '5',
    'uuid' => '44abaa2e-1ced-4c7e-8c7c-2941e729008b',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'epoque',
  );
  $terms[] = array(
    'name' => '2010 +',
    'description' => '',
    'format' => 'html',
    'weight' => '15',
    'uuid' => '590f7408-158d-4bea-8f06-e87affe578d2',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'epoque',
    'parent' => array(
      0 => '27821c22-33ce-4514-951c-e666ef9c3b8f',
    ),
  );
  $terms[] = array(
    'name' => 'XVIIIe siècle',
    'description' => '',
    'format' => 'html',
    'weight' => '4',
    'uuid' => '5ceb61ca-d700-40fe-888b-305c00f17639',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'epoque',
  );
  $terms[] = array(
    'name' => '1920-1940',
    'description' => '',
    'format' => 'html',
    'weight' => '-2',
    'uuid' => '68f8b726-89fc-475e-9f7d-49dfd1b8e07e',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'epoque',
    'parent' => array(
      0 => '0c2d7280-f09d-4c83-a2b1-9ef609c4a110',
    ),
  );
  $terms[] = array(
    'name' => '1940-1960',
    'description' => '',
    'format' => 'html',
    'weight' => '0',
    'uuid' => 'cb44780f-0881-4684-90ff-df10c1f55902',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'epoque',
    'parent' => array(
      0 => '0c2d7280-f09d-4c83-a2b1-9ef609c4a110',
    ),
  );
  $terms[] = array(
    'name' => '1960-1980',
    'description' => '',
    'format' => 'html',
    'weight' => '2',
    'uuid' => 'd54bbf70-5a46-4f88-bf82-bdbab12cac5c',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'epoque',
    'parent' => array(
      0 => '0c2d7280-f09d-4c83-a2b1-9ef609c4a110',
    ),
  );
  $terms[] = array(
    'name' => 'XVIe siècle',
    'description' => '',
    'format' => 'html',
    'weight' => '2',
    'uuid' => 'eecdbd76-63f9-45d4-b89a-468012cb3a47',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'epoque',
  );
  $terms[] = array(
    'name' => 'Antiquité',
    'description' => '',
    'format' => 'html',
    'weight' => '-1',
    'uuid' => 'f0ba381f-2a5b-47c4-bf4b-cec630fea14d',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'epoque',
  );
  $terms[] = array(
    'name' => 'Renaissance',
    'description' => '',
    'format' => 'html',
    'weight' => '1',
    'uuid' => 'f79bde1b-3c81-472c-a535-5ab055380b4f',
    'language' => 'und',
    'i18n_tsid' => '0',
    'vocabulary_machine_name' => 'epoque',
  );
  return $terms;
}
