<?php 


$options['sites'] = array (
  0 => 'odft.aegirnt2.uqam.ca',
  1 => 'spirale.aegirnt2.uqam.ca',
  2 => 'sandbox.aegirnt2.uqam.ca',
  3 => 'postures-dev.aegirnt2.uqam.ca',
  4 => 'hochelaga-dev.aegirnt2.uqam.ca',
  5 => 'cellproject.net',
  6 => 'bibliotheque.aegirnt2.uqam.ca',
  7 => 'odft11aout.aegirnt2.uqam.ca',
  8 => 'uneq.nt2.ca',
  9 => 'popenstock.ca',
);
$options['profiles'] = array (
  0 => 'standard',
  1 => 'testing',
  2 => 'minimal',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'trigger_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/trigger/tests/trigger_test.module',
        'basename' => 'trigger_test.module',
        'name' => 'trigger_test',
        'info' => 
        array (
          'name' => 'Trigger Test',
          'description' => 'Support module for Trigger tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'trigger' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => '',
        'version' => '7.24',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => '',
        'version' => '7.24',
      ),
      'translation_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/translation/tests/translation_test.module',
        'basename' => 'translation_test.module',
        'name' => 'translation_test',
        'info' => 
        array (
          'name' => 'Content Translation Test',
          'description' => 'Support module for the content translation tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'translation' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => '',
        'version' => '7.24',
      ),
      'text' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => '',
        'version' => '7.24',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => '',
        'version' => '7.24',
      ),
      'list_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/field/modules/list/tests/list_test.module',
        'basename' => 'list_test.module',
        'name' => 'list_test',
        'info' => 
        array (
          'name' => 'List test',
          'description' => 'Support module for the List module tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'list' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => '',
        'version' => '7.24',
      ),
      'options' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'number' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'field_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/field/tests/field_test.module',
        'basename' => 'field_test.module',
        'name' => 'field_test',
        'info' => 
        array (
          'name' => 'Field API Test',
          'description' => 'Support module for the Field API tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'files' => 
          array (
            0 => 'field_test.entity.inc',
          ),
          'version' => '7.24',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'field' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'field.info.class.inc',
            3 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => '',
        'version' => '7.24',
      ),
      'profile' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'profile',
        'info' => 
        array (
          'name' => 'Profile',
          'description' => 'Supports configurable user profiles.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'profile.test',
          ),
          'configure' => 'admin/config/people/profile',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => '',
        'version' => '7.24',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => '',
        'version' => '7.24',
      ),
      'image_module_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/image/tests/image_module_test.module',
        'basename' => 'image_module_test.module',
        'name' => 'image_module_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Provides hook implementations for testing Image module functionality.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'image_module_test.module',
          ),
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'image' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => '',
        'version' => '7.24',
      ),
      'menu' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => '',
        'version' => '7.24',
      ),
      'poll' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => '',
        'version' => '7.24',
      ),
      'forum' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'project' => '',
        'version' => '7.24',
      ),
      'field_ui' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'contextual' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'user_form_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/user/tests/user_form_test.module',
        'basename' => 'user_form_test.module',
        'name' => 'user_form_test',
        'info' => 
        array (
          'name' => 'User module form tests',
          'description' => 'Support module for user form testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7018',
        'project' => '',
        'version' => '7.24',
      ),
      'openid_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/openid/tests/openid_test.module',
        'basename' => 'openid_test.module',
        'name' => 'openid_test',
        'info' => 
        array (
          'name' => 'OpenID dummy provider',
          'description' => 'OpenID provider used for testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'openid',
          ),
          'hidden' => true,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'openid' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.24',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6000',
        'project' => '',
        'version' => '7.24',
      ),
      'block_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/block/tests/block_test.module',
        'basename' => 'block_test.module',
        'name' => 'block_test',
        'info' => 
        array (
          'name' => 'Block test',
          'description' => 'Provides test blocks.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7008',
        'project' => '',
        'version' => '7.24',
      ),
      'shortcut' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'aggregator_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/aggregator/tests/aggregator_test.module',
        'basename' => 'aggregator_test.module',
        'name' => 'aggregator_test',
        'info' => 
        array (
          'name' => 'Aggregator module tests',
          'description' => 'Support module for aggregator related testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'aggregator' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => '',
        'version' => '7.24',
      ),
      'bbb_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/update/tests/bbb_update_test.module',
        'basename' => 'bbb_update_test.module',
        'name' => 'bbb_update_test',
        'info' => 
        array (
          'name' => 'BBB Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'ccc_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/update/tests/ccc_update_test.module',
        'basename' => 'ccc_update_test.module',
        'name' => 'ccc_update_test',
        'info' => 
        array (
          'name' => 'CCC Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'update_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/update/tests/update_test.module',
        'basename' => 'update_test.module',
        'name' => 'update_test',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'aaa_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/update/tests/aaa_update_test.module',
        'basename' => 'aaa_update_test.module',
        'name' => 'aaa_update_test',
        'info' => 
        array (
          'name' => 'AAA Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.24',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => '',
        'version' => '7.24',
      ),
      'overlay' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'rdf_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/rdf/tests/rdf_test.module',
        'basename' => 'rdf_test.module',
        'name' => 'rdf_test',
        'info' => 
        array (
          'name' => 'RDF module tests',
          'description' => 'Support module for RDF module testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'rdf' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'drupal_system_listing_incompatible_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
        'basename' => 'drupal_system_listing_incompatible_test.module',
        'name' => 'drupal_system_listing_incompatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing incompatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'drupal_system_listing_compatible_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
        'basename' => 'drupal_system_listing_compatible_test.module',
        'name' => 'drupal_system_listing_compatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing compatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'psr_0_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/psr_0_test/psr_0_test.module',
        'basename' => 'psr_0_test.module',
        'name' => 'psr_0_test',
        'info' => 
        array (
          'name' => 'PSR-0 Test cases',
          'description' => 'Test classes to be discovered by simpletest.',
          'core' => '7.x',
          'hidden' => true,
          'package' => 'Testing',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'entity_crud_hook_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/entity_crud_hook_test.module',
        'basename' => 'entity_crud_hook_test.module',
        'name' => 'entity_crud_hook_test',
        'info' => 
        array (
          'name' => 'Entity CRUD Hooks Test',
          'description' => 'Support module for CRUD hook tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'update_test_2' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/update_test_2.module',
        'basename' => 'update_test_2.module',
        'name' => 'update_test_2',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => '',
        'version' => '7.24',
      ),
      'system_incompatible_core_version_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/system_incompatible_core_version_test.module',
        'basename' => 'system_incompatible_core_version_test.module',
        'name' => 'system_incompatible_core_version_test',
        'info' => 
        array (
          'name' => 'System incompatible core version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '5.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'entity_cache_test_dependency' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/entity_cache_test_dependency.module',
        'basename' => 'entity_cache_test_dependency.module',
        'name' => 'entity_cache_test_dependency',
        'info' => 
        array (
          'name' => 'Entity cache test dependency',
          'description' => 'Support dependency module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'entity_query_access_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/entity_query_access_test.module',
        'basename' => 'entity_query_access_test.module',
        'name' => 'entity_query_access_test',
        'info' => 
        array (
          'name' => 'Entity query access test',
          'description' => 'Support module for checking entity query results.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'error_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/error_test.module',
        'basename' => 'error_test.module',
        'name' => 'error_test',
        'info' => 
        array (
          'name' => 'Error test',
          'description' => 'Support module for error and exception testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'system_incompatible_module_version_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/system_incompatible_module_version_test.module',
        'basename' => 'system_incompatible_module_version_test.module',
        'name' => 'system_incompatible_module_version_test',
        'info' => 
        array (
          'name' => 'System incompatible module version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '1.0',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '1.0',
      ),
      'ajax_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/ajax_test.module',
        'basename' => 'ajax_test.module',
        'name' => 'ajax_test',
        'info' => 
        array (
          'name' => 'AJAX Test',
          'description' => 'Support module for AJAX framework tests.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'xmlrpc_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/xmlrpc_test.module',
        'basename' => 'xmlrpc_test.module',
        'name' => 'xmlrpc_test',
        'info' => 
        array (
          'name' => 'XML-RPC Test',
          'description' => 'Support module for XML-RPC tests according to the validator1 specification.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'module_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/module_test.module',
        'basename' => 'module_test.module',
        'name' => 'module_test',
        'info' => 
        array (
          'name' => 'Module test',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'image_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/image_test.module',
        'basename' => 'image_test.module',
        'name' => 'image_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Support module for image toolkit tests.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'filter_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/filter_test.module',
        'basename' => 'filter_test.module',
        'name' => 'filter_test',
        'info' => 
        array (
          'name' => 'Filter test module',
          'description' => 'Tests filter hooks and functions.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'system_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/system_test.module',
        'basename' => 'system_test.module',
        'name' => 'system_test',
        'info' => 
        array (
          'name' => 'System test',
          'description' => 'Support module for system testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system_test.module',
          ),
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'update_test_1' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/update_test_1.module',
        'basename' => 'update_test_1.module',
        'name' => 'update_test_1',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => '',
        'version' => '7.24',
      ),
      'update_script_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/update_script_test.module',
        'basename' => 'update_script_test.module',
        'name' => 'update_script_test',
        'info' => 
        array (
          'name' => 'Update script test',
          'description' => 'Support module for update script testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => '',
        'version' => '7.24',
      ),
      'requirements2_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/requirements2_test.module',
        'basename' => 'requirements2_test.module',
        'name' => 'requirements2_test',
        'info' => 
        array (
          'name' => 'Requirements 2 Test',
          'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
          'dependencies' => 
          array (
            0 => 'requirements1_test',
            1 => 'comment',
          ),
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'common_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/common_test.module',
        'basename' => 'common_test.module',
        'name' => 'common_test',
        'info' => 
        array (
          'name' => 'Common Test',
          'description' => 'Support module for Common tests.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'common_test.css',
            ),
            'print' => 
            array (
              0 => 'common_test.print.css',
            ),
          ),
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'system_incompatible_module_version_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/system_incompatible_module_version_dependencies_test.module',
        'basename' => 'system_incompatible_module_version_dependencies_test.module',
        'name' => 'system_incompatible_module_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible module version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_module_version_test (>2.0)',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'system_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/system_dependencies_test.module',
        'basename' => 'system_dependencies_test.module',
        'name' => 'system_dependencies_test',
        'info' => 
        array (
          'name' => 'System dependency test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => '_missing_dependency',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'file_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/file_test.module',
        'basename' => 'file_test.module',
        'name' => 'file_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Support module for file handling tests.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'file_test.module',
          ),
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'entity_cache_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/entity_cache_test.module',
        'basename' => 'entity_cache_test.module',
        'name' => 'entity_cache_test',
        'info' => 
        array (
          'name' => 'Entity cache test',
          'description' => 'Support module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity_cache_test_dependency',
          ),
          'hidden' => true,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'common_test_cron_helper' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/common_test_cron_helper.module',
        'basename' => 'common_test_cron_helper.module',
        'name' => 'common_test_cron_helper',
        'info' => 
        array (
          'name' => 'Common Test Cron Helper',
          'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'requirements1_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/requirements1_test.module',
        'basename' => 'requirements1_test.module',
        'name' => 'requirements1_test',
        'info' => 
        array (
          'name' => 'Requirements 1 Test',
          'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'batch_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/batch_test.module',
        'basename' => 'batch_test.module',
        'name' => 'batch_test',
        'info' => 
        array (
          'name' => 'Batch API test',
          'description' => 'Support module for Batch API tests.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'form_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/form_test.module',
        'basename' => 'form_test.module',
        'name' => 'form_test',
        'info' => 
        array (
          'name' => 'FormAPI Test',
          'description' => 'Support module for Form API tests.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'ajax_forms_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/ajax_forms_test.module',
        'basename' => 'ajax_forms_test.module',
        'name' => 'ajax_forms_test',
        'info' => 
        array (
          'name' => 'AJAX form test mock module',
          'description' => 'Test for AJAX form calls.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'update_test_3' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/update_test_3.module',
        'basename' => 'update_test_3.module',
        'name' => 'update_test_3',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => '',
        'version' => '7.24',
      ),
      'menu_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/menu_test.module',
        'basename' => 'menu_test.module',
        'name' => 'menu_test',
        'info' => 
        array (
          'name' => 'Hook menu tests',
          'description' => 'Support module for menu hook testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'url_alter_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/url_alter_test.module',
        'basename' => 'url_alter_test.module',
        'name' => 'url_alter_test',
        'info' => 
        array (
          'name' => 'Url_alter tests',
          'description' => 'A support modules for url_alter hook testing.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'taxonomy_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/taxonomy_test.module',
        'basename' => 'taxonomy_test.module',
        'name' => 'taxonomy_test',
        'info' => 
        array (
          'name' => 'Taxonomy test module',
          'description' => '"Tests functions and hooks not used in core".',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'path_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/path_test.module',
        'basename' => 'path_test.module',
        'name' => 'path_test',
        'info' => 
        array (
          'name' => 'Hook path tests',
          'description' => 'Support module for path hook testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'session_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/session_test.module',
        'basename' => 'session_test.module',
        'name' => 'session_test',
        'info' => 
        array (
          'name' => 'Session test',
          'description' => 'Support module for session data testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'theme_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/theme_test.module',
        'basename' => 'theme_test.module',
        'name' => 'theme_test',
        'info' => 
        array (
          'name' => 'Theme test',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'actions_loop_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/actions_loop_test.module',
        'basename' => 'actions_loop_test.module',
        'name' => 'actions_loop_test',
        'info' => 
        array (
          'name' => 'Actions loop test',
          'description' => 'Support module for action loop testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'database_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/database_test.module',
        'basename' => 'database_test.module',
        'name' => 'database_test',
        'info' => 
        array (
          'name' => 'Database Test',
          'description' => 'Support module for Database layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'system_incompatible_core_version_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/tests/system_incompatible_core_version_dependencies_test.module',
        'basename' => 'system_incompatible_core_version_dependencies_test.module',
        'name' => 'system_incompatible_core_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible core version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_core_version_test',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'simpletest' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/bootstrap.test',
            6 => 'tests/cache.test',
            7 => 'tests/common.test',
            8 => 'tests/database_test.test',
            9 => 'tests/entity_crud_hook_test.test',
            10 => 'tests/entity_query.test',
            11 => 'tests/error.test',
            12 => 'tests/file.test',
            13 => 'tests/filetransfer.test',
            14 => 'tests/form.test',
            15 => 'tests/graph.test',
            16 => 'tests/image.test',
            17 => 'tests/lock.test',
            18 => 'tests/mail.test',
            19 => 'tests/menu.test',
            20 => 'tests/module.test',
            21 => 'tests/pager.test',
            22 => 'tests/password.test',
            23 => 'tests/path.test',
            24 => 'tests/registry.test',
            25 => 'tests/schema.test',
            26 => 'tests/session.test',
            27 => 'tests/tablesort.test',
            28 => 'tests/theme.test',
            29 => 'tests/unicode.test',
            30 => 'tests/update.test',
            31 => 'tests/xmlrpc.test',
            32 => 'tests/upgrade/upgrade.test',
            33 => 'tests/upgrade/upgrade.comment.test',
            34 => 'tests/upgrade/upgrade.filter.test',
            35 => 'tests/upgrade/upgrade.forum.test',
            36 => 'tests/upgrade/upgrade.locale.test',
            37 => 'tests/upgrade/upgrade.menu.test',
            38 => 'tests/upgrade/upgrade.node.test',
            39 => 'tests/upgrade/upgrade.taxonomy.test',
            40 => 'tests/upgrade/upgrade.trigger.test',
            41 => 'tests/upgrade/upgrade.translatable.test',
            42 => 'tests/upgrade/upgrade.upload.test',
            43 => 'tests/upgrade/upgrade.user.test',
            44 => 'tests/upgrade/update.aggregator.test',
            45 => 'tests/upgrade/update.trigger.test',
            46 => 'tests/upgrade/update.field.test',
            47 => 'tests/upgrade/update.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'php' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.24',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'book' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'locale_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/locale/tests/locale_test.module',
        'basename' => 'locale_test.module',
        'name' => 'locale_test',
        'info' => 
        array (
          'name' => 'Locale Test',
          'description' => 'Support module for the locale layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => '',
        'version' => '7.24',
      ),
      'dblog' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => '',
        'version' => '7.24',
      ),
      'search_embedded_form' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/search/tests/search_embedded_form.module',
        'basename' => 'search_embedded_form.module',
        'name' => 'search_embedded_form',
        'info' => 
        array (
          'name' => 'Search embedded form',
          'description' => 'Support module for search module testing of embedded forms.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'search_extra_type' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/search/tests/search_extra_type.module',
        'basename' => 'search_extra_type.module',
        'name' => 'search_extra_type',
        'info' => 
        array (
          'name' => 'Test search type',
          'description' => 'Support module for search module testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => '',
        'version' => '7.24',
      ),
      'tracker' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => '',
        'version' => '7.24',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => '',
        'version' => '7.24',
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => '',
        'version' => '7.24',
      ),
      'blog' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'file_module_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/file/tests/file_module_test.module',
        'basename' => 'file_module_test.module',
        'name' => 'file_module_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Provides hooks for testing File module functionality.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'file' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'configure' => 'admin/config/development/logging',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7078',
        'project' => '',
        'version' => '7.24',
      ),
      'node_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/node/tests/node_test.module',
        'basename' => 'node_test.module',
        'name' => 'node_test',
        'info' => 
        array (
          'name' => 'Node module tests',
          'description' => 'Support module for node related testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'node_test_exception' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/node/tests/node_test_exception.module',
        'basename' => 'node_test_exception.module',
        'name' => 'node_test_exception',
        'info' => 
        array (
          'name' => 'Node module exception tests',
          'description' => 'Support module for node related exception testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'node_access_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/node/tests/node_access_test.module',
        'basename' => 'node_access_test.module',
        'name' => 'node_access_test',
        'info' => 
        array (
          'name' => 'Node module access tests',
          'description' => 'Support module for node permission testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7013',
        'project' => '',
        'version' => '7.24',
      ),
      'dashboard' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.24',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.24',
      ),
      'tagclouds' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/tagclouds/tagclouds.module',
        'basename' => 'tagclouds.module',
        'name' => 'tagclouds',
        'info' => 
        array (
          'name' => 'TagClouds',
          'description' => 'TagClouds makes weighted tag clouds from your taxonomy terms.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'package' => 'Taxonomy',
          'configure' => 'admin/config/content/tagclouds',
          'version' => '7.x-1.9',
          'project' => 'tagclouds',
          'datestamp' => '1360479605',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'tagclouds',
        'version' => '7.x-1.9',
      ),
      'search_api_db' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/search_api_db/search_api_db.module',
        'basename' => 'search_api_db.module',
        'name' => 'search_api_db',
        'info' => 
        array (
          'name' => 'Database search',
          'description' => 'Offers an implementation of the Search API that uses database tables for indexing content.',
          'dependencies' => 
          array (
            0 => 'search_api',
          ),
          'core' => '7.x',
          'package' => 'Search',
          'files' => 
          array (
            0 => 'search_api_db.test',
            1 => 'service.inc',
          ),
          'version' => '7.x-1.4',
          'project' => 'search_api_db',
          'datestamp' => '1410186261',
          'php' => '5.2.4',
        ),
        'schema_version' => '7106',
        'project' => 'search_api_db',
        'version' => '7.x-1.4',
      ),
      'oic_taxonomie_aires_de_recherche' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/oic_taxonomie_aires_de_recherche/oic_taxonomie_aires_de_recherche.module',
        'basename' => 'oic_taxonomie_aires_de_recherche.module',
        'name' => 'oic_taxonomie_aires_de_recherche',
        'info' => 
        array (
          'name' => 'OIC Taxonomie: Aires de recherche',
          'core' => '7.x',
          'package' => 'OIC',
          'version' => '7.x-1.0',
          'project' => 'oic_taxonomie_aires_de_recherche',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'taxonomy',
            2 => 'uuid',
            3 => 'uuid_features',
          ),
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'taxonomy' => 
            array (
              0 => 'aires_de_recherche',
            ),
            'uuid_term' => 
            array (
              0 => '450e46f8-2be0-4f3f-a23f-2483bca6ab2c',
              1 => '7870f494-c277-4eb3-920c-2d2d7f79e9bd',
              2 => 'b9fe5fed-c926-41f5-bfd0-fdf10a21635d',
              3 => 'c138f637-dcb4-4a88-b6d5-944285ac3ea6',
              4 => 'dc562ab3-1c8c-4d06-a5f7-d813bdf2699c',
              5 => 'df1aaec6-c28c-4a2c-9741-f320ae24a79f',
              6 => 'ff18e302-c2e2-4a59-b69a-fa1195f53cbd',
            ),
          ),
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'oic_taxonomie_aires_de_recherche',
        'version' => '7.x-1.0',
      ),
      'field_permissions' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/field_permissions/field_permissions.module',
        'basename' => 'field_permissions.module',
        'name' => 'field_permissions',
        'info' => 
        array (
          'name' => 'Field Permissions',
          'description' => 'Set field-level permissions to create, update or view fields.',
          'package' => 'Fields',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field_permissions.module',
            1 => 'field_permissions.admin.inc',
            2 => 'field_permissions.test',
          ),
          'configure' => 'admin/reports/fields/permissions',
          'version' => '7.x-1.0-beta2',
          'project' => 'field_permissions',
          'datestamp' => '1327510549',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'field_permissions',
        'version' => '7.x-1.0-beta2',
      ),
      'path_facets' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/path_facets/path_facets.module',
        'basename' => 'path_facets.module',
        'name' => 'path_facets',
        'info' => 
        array (
          'name' => 'Path Facets',
          'description' => 'Provides hierarchical Solr facets for path-like values.',
          'core' => '7.x',
          'package' => 'Search Toolkit',
          'dependencies' => 
          array (
            0 => 'apachesolr',
            1 => 'facetapi',
            2 => 'taxonomy',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'galleryformatter' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/galleryformatter/galleryformatter.module',
        'basename' => 'galleryformatter.module',
        'name' => 'galleryformatter',
        'info' => 
        array (
          'name' => 'Gallery Formatter',
          'description' => 'Provides a jquery gallery CCK formatter for imagefield',
          'dependencies' => 
          array (
            0 => 'image',
            1 => 'file',
          ),
          'core' => '7.x',
          'package' => 'User interface',
          'files' => 
          array (
            0 => 'galleryformatter.install',
            1 => 'galleryformatter.module',
            2 => 'includes/galleryformatter.theme.inc',
            3 => 'includes/galleryformatter_imagecache.inc',
            4 => 'theme/galleryformatter.tpl.php',
          ),
          'version' => '7.x-1.3',
          'project' => 'galleryformatter',
          'datestamp' => '1355821655',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'galleryformatter',
        'version' => '7.x-1.3',
      ),
      'computed_field' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/computed_field/computed_field.module',
        'basename' => 'computed_field.module',
        'name' => 'computed_field',
        'info' => 
        array (
          'name' => 'Computed Field',
          'description' => 'Defines a field type that allows values to be "computed" via PHP code.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'computed_field.install',
            1 => 'computed_field.module',
          ),
          'version' => '7.x-1.0',
          'project' => 'computed_field',
          'datestamp' => '1386094705',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'computed_field',
        'version' => '7.x-1.0',
      ),
      'feeds_imagegrabber' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/feeds_imagegrabber/feeds_imagegrabber.module',
        'basename' => 'feeds_imagegrabber.module',
        'name' => 'feeds_imagegrabber',
        'info' => 
        array (
          'name' => 'Feeds Image Grabber',
          'description' => 'Grabs image for each feed-item from their respective web pages and stores it in an image field.',
          'core' => '7.x',
          'package' => 'Feeds Addon',
          'dependencies' => 
          array (
            0 => 'feeds',
            1 => 'image',
          ),
          'files' => 
          array (
            0 => 'libraries/url_to_absolute.inc',
          ),
          'version' => '7.x-1.0-alpha2',
          'project' => 'feeds_imagegrabber',
          'datestamp' => '1351773135',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'feeds_imagegrabber',
        'version' => '7.x-1.0-alpha2',
      ),
      'restws_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/restws/tests/restws_test.module',
        'basename' => 'restws_test.module',
        'name' => 'restws_test',
        'info' => 
        array (
          'name' => 'RESTful web services test module',
          'description' => 'Support module for the RestWS tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-2.2',
          'project' => 'restws',
          'datestamp' => '1405421039',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'restws',
        'version' => '7.x-2.2',
      ),
      'restws_basic_auth' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/restws/restws_basic_auth/restws_basic_auth.module',
        'basename' => 'restws_basic_auth.module',
        'name' => 'restws_basic_auth',
        'info' => 
        array (
          'name' => 'Basic authentication login',
          'description' => 'User login from HTTP authorization headers (part of RESTful web services).',
          'core' => '7.x',
          'version' => '7.x-2.2',
          'project' => 'restws',
          'datestamp' => '1405421039',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'restws',
        'version' => '7.x-2.2',
      ),
      'restws' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/restws/restws.module',
        'basename' => 'restws.module',
        'name' => 'restws',
        'info' => 
        array (
          'name' => 'RESTful web services',
          'description' => 'Provides RESTful web services.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'restws.entity.inc',
            1 => 'restws.formats.inc',
            2 => 'restws.test',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-2.2',
          'project' => 'restws',
          'datestamp' => '1405421039',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'restws',
        'version' => '7.x-2.2',
      ),
      'koha_connector' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/koha_connector/koha_connector.module',
        'basename' => 'koha_connector.module',
        'name' => 'koha_connector',
        'info' => 
        array (
          'name' => 'Koha connector',
          'description' => 'Koha connector for OPAC module',
          'package' => 'opac',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'opac',
          ),
          'files' => 
          array (
            0 => 'koha.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'koha_connector',
          'datestamp' => '1381992615',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'koha_connector',
        'version' => '7.x-1.3',
      ),
      'xmlrpc_server' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/services/servers/xmlrpc_server/xmlrpc_server.module',
        'basename' => 'xmlrpc_server.module',
        'name' => 'xmlrpc_server',
        'info' => 
        array (
          'name' => 'XMLRPC Server',
          'description' => 'Provides a XMLRPC server.',
          'package' => 'Services - servers',
          'files' => 
          array (
            0 => 'xmlrpc_server.module',
          ),
          'dependencies' => 
          array (
            0 => 'services',
          ),
          'core' => '7.x',
          'version' => '7.x-3.10',
          'project' => 'services',
          'datestamp' => '1411583340',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'services',
        'version' => '7.x-3.10',
      ),
      'rest_server' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/services/servers/rest_server/rest_server.module',
        'basename' => 'rest_server.module',
        'name' => 'rest_server',
        'info' => 
        array (
          'name' => 'REST Server',
          'description' => 'Provides an REST server.',
          'package' => 'Services - servers',
          'files' => 
          array (
            0 => 'rest_server.module',
            1 => 'includes/RESTServer.inc',
            2 => 'includes/ServicesContentTypeNegotiator.inc',
            3 => 'includes/ServicesRESTServerFactory.inc',
            4 => 'includes/ServicesContext.inc',
            5 => 'includes/ServicesParser.inc',
            6 => 'includes/ServicesFormatter.inc',
            7 => 'tests/ServicesRESTServerTests.test',
            8 => 'tests/rest_server_mock_classes.inc',
            9 => 'lib/bencode.php',
            10 => 'lib/mimeparse.php',
          ),
          'dependencies' => 
          array (
            0 => 'services',
            1 => 'libraries (>=2.x)',
          ),
          'core' => '7.x',
          'version' => '7.x-3.10',
          'project' => 'services',
          'datestamp' => '1411583340',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'services',
        'version' => '7.x-3.10',
      ),
      'services_oauth' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/services/auth/services_oauth/services_oauth.module',
        'basename' => 'services_oauth.module',
        'name' => 'services_oauth',
        'info' => 
        array (
          'name' => 'OAuth Authentication',
          'description' => 'Provides OAuth authentication for the services module',
          'package' => 'Services - authentication',
          'dependencies' => 
          array (
            0 => 'services',
            1 => 'oauth_common',
          ),
          'core' => '7.x',
          'php' => '5.2',
          'version' => '7.x-3.10',
          'project' => 'services',
          'datestamp' => '1411583340',
        ),
        'schema_version' => '6200',
        'project' => 'services',
        'version' => '7.x-3.10',
      ),
      'services_test_resource' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/services/tests/services_test_resource/services_test_resource.module',
        'basename' => 'services_test_resource.module',
        'name' => 'services_test_resource',
        'info' => 
        array (
          'name' => 'Services Test Resource',
          'description' => 'Provide test methods to check different situations.',
          'package' => 'Services',
          'core' => '7.x',
          'php' => '5.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'services',
          ),
          'version' => '7.x-3.10',
          'project' => 'services',
          'datestamp' => '1411583340',
        ),
        'schema_version' => 0,
        'project' => 'services',
        'version' => '7.x-3.10',
      ),
      'services' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/services/services.module',
        'basename' => 'services.module',
        'name' => 'services',
        'info' => 
        array (
          'name' => 'Services',
          'description' => 'Provide an API for creating web services.',
          'package' => 'Services',
          'core' => '7.x',
          'php' => '5.x',
          'configure' => 'admin/structure/services',
          'files' => 
          array (
            0 => 'includes/services.runtime.inc',
            1 => 'tests/functional/NoAuthEndpointTestRunner.test',
            2 => 'tests/functional/ServicesResourceNodeTests.test',
            3 => 'tests/functional/ServicesResourceUserTests.test',
            4 => 'tests/functional/ServicesResourceSystemTests.test',
            5 => 'tests/functional/ServicesResourceCommentTests.test',
            6 => 'tests/functional/ServicesResourceTaxonomyTests.test',
            7 => 'tests/functional/ServicesResourceFileTests.test',
            8 => 'tests/functional/ServicesResourceDisabledTests.test',
            9 => 'tests/functional/ServicesEndpointTests.test',
            10 => 'tests/functional/ServicesParserTests.test',
            11 => 'tests/functional/ServicesAliasTests.test',
            12 => 'tests/functional/ServicesXMLRPCTests.test',
            13 => 'tests/functional/ServicesVersionTests.test',
            14 => 'tests/functional/ServicesArgumentsTests.test',
            15 => 'tests/functional/ServicesSecurityTests.test',
            16 => 'tests/unit/ServicesSpycLibraryTests.test',
            17 => 'tests/ui/ServicesUITests.test',
            18 => 'tests/services.test',
          ),
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-3.10',
          'project' => 'services',
          'datestamp' => '1411583340',
        ),
        'schema_version' => '7402',
        'project' => 'services',
        'version' => '7.x-3.10',
      ),
      'webform_multiple_file' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/webform_multiple_file/webform_multiple_file.module',
        'basename' => 'webform_multiple_file.module',
        'name' => 'webform_multiple_file',
        'info' => 
        array (
          'name' => 'Webform multiple file',
          'description' => 'Adds a new component to webform to allow multiple file uploads.',
          'core' => '7.x',
          'package' => 'Webform',
          'dependencies' => 
          array (
            0 => 'webform (4.x)',
            1 => 'file',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'webform_multiple_file',
          'datestamp' => '1399971828',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'webform_multiple_file',
        'version' => '7.x-1.0-beta3',
      ),
      'ckeditor' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/ckeditor/ckeditor.module',
        'basename' => 'ckeditor.module',
        'name' => 'ckeditor',
        'info' => 
        array (
          'name' => 'CKEditor',
          'description' => 'Enables CKEditor (WYSIWYG HTML editor) for use instead of plain text fields.',
          'core' => '7.x',
          'package' => 'User interface',
          'configure' => 'admin/config/content/ckeditor',
          'version' => '7.x-1.13',
          'project' => 'ckeditor',
          'datestamp' => '1365759619',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'ckeditor',
        'version' => '7.x-1.13',
      ),
      'oic_facets' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/oic_facets/oic_facets.module',
        'basename' => 'oic_facets.module',
        'name' => 'oic_facets',
        'info' => 
        array (
          'name' => 'OIC Facets',
          'description' => 'Provides facets for the OIC network.',
          'core' => '7.x',
          'package' => 'OIC',
          'dependencies' => 
          array (
            0 => 'apachesolr',
            1 => 'facetapi',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'views_data_export' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/views_data_export/views_data_export.module',
        'basename' => 'views_data_export.module',
        'name' => 'views_data_export',
        'info' => 
        array (
          'name' => 'Views Data Export',
          'description' => 'Plugin to export views data into various file formats',
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_data_export.module',
            1 => 'plugins/views_data_export_plugin_display_export.inc',
            2 => 'plugins/views_data_export_plugin_style_export.inc',
            3 => 'plugins/views_data_export_plugin_style_export_csv.inc',
            4 => 'plugins/views_data_export_plugin_style_export_doc.inc',
            5 => 'plugins/views_data_export_plugin_style_export_txt.inc',
            6 => 'plugins/views_data_export_plugin_style_export_xls.inc',
            7 => 'plugins/views_data_export_plugin_style_export_xml.inc',
            8 => 'theme/views_data_export.theme.inc',
            9 => 'theme/views-data-export-csv-body.tpl.php',
            10 => 'theme/views-data-export-csv-footer.tpl.php',
            11 => 'theme/views-data-export-csv-header.tpl.php',
            12 => 'theme/views-data-export-doc-body.tpl.php',
            13 => 'theme/views-data-export-doc-footer.tpl.php',
            14 => 'theme/views-data-export-doc-header.tpl.php',
            15 => 'theme/views-data-export-txt-body.tpl.php',
            16 => 'theme/views-data-export-txt-footer.tpl.php',
            17 => 'theme/views-data-export-txt-header.tpl.php',
            18 => 'theme/views-data-export-xls-body.tpl.php',
            19 => 'theme/views-data-export-xls-footer.tpl.php',
            20 => 'theme/views-data-export-xls-header.tpl.php',
            21 => 'theme/views-data-export-xml-body.tpl.php',
            22 => 'theme/views-data-export-xml-footer.tpl.php',
            23 => 'theme/views-data-export-xml-header.tpl.php',
            24 => 'theme/views-data-export.tpl.php',
          ),
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'version' => '7.x-3.0-beta6',
          'project' => 'views_data_export',
          'datestamp' => '1336632688',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'views_data_export',
        'version' => '7.x-3.0-beta6',
      ),
      'oic_taxonomie_contexte_geographique' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/oic_taxonomie_contexte_geographique/oic_taxonomie_contexte_geographique.module',
        'basename' => 'oic_taxonomie_contexte_geographique.module',
        'name' => 'oic_taxonomie_contexte_geographique',
        'info' => 
        array (
          'name' => 'OIC Taxonomie: Contexte géographique',
          'core' => '7.x',
          'package' => 'OIC',
          'version' => '7.x-1.0',
          'project' => 'oic_taxonomie_contexte_geographique',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'taxonomy',
            2 => 'uuid',
            3 => 'uuid_features',
          ),
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'taxonomy' => 
            array (
              0 => 'provenance',
            ),
            'uuid_term' => 
            array (
              0 => '0048850f-6df4-45fc-bbe6-139957e352f5',
              1 => '0143a7b6-5e52-424b-a4dc-31532cb84ab1',
              2 => '01c4e5b0-17f3-40be-aba9-3ae5807d6fd9',
              3 => '024bf0b8-641e-4d24-b4cf-857499135831',
              4 => '02bf4f06-d5d8-4757-904d-5d705364ed1c',
              5 => '02d6b815-d8a4-4772-8a19-d8de21a7b126',
              6 => '0310432d-ce25-4c6b-b5d2-3ea8ea0d24c2',
              7 => '03bb0fa2-eb93-4d08-b6f2-5df72adf4857',
              8 => '0547742c-52db-4ecf-901a-5f86fa309465',
              9 => '06a26012-163c-4918-b456-df467a314b8c',
              10 => '07c34c74-6e96-41f3-ae09-cf1e540f338e',
              11 => '080f7316-3162-4021-a4c9-ab9de5de6e4c',
              12 => '0872d081-dcd4-4cf6-99ee-a4862511f68e',
              13 => '09562c69-1fcb-4902-a3e9-2121ff8d985f',
              14 => '0990bc05-9e85-42b3-914a-e38f6da87f5e',
              15 => '09e285ca-8eb2-44e4-a15a-70dd0f5cc6b0',
              16 => '0b2d95f8-fd73-408a-9ddd-dfde1cc07401',
              17 => '0c25435e-f7b8-47db-9e64-84c9e4b75c80',
              18 => '0c47b542-ef79-4e0c-ab8f-ef64fdb3af1e',
              19 => '0d56338b-3373-45a4-8267-1eaaa1d809ea',
              20 => '0e4d268d-d759-407a-8967-c50ed4894a0b',
              21 => '110f9619-f29f-4321-98cd-789419c3026a',
              22 => '12cc9695-b2da-4fd9-84d8-4c748933190e',
              23 => '190fdc95-cd9c-4838-bc9a-17442ce946df',
              24 => '1a024a34-912c-4eed-9908-5d2abe2f273d',
              25 => '1a100b75-a207-4fac-bf77-77bcb9bb19e7',
              26 => '1a7f5572-a430-4279-bf68-065d73040ff2',
              27 => '1bab0a8c-7527-4d60-aad5-31b8eef0e284',
              28 => '1cf5f66e-9d64-45d5-a511-46421d166151',
              29 => '1d5a93b8-c179-4dc5-b76a-225509b22202',
              30 => '1dedfa2a-d780-4793-babb-2bbe0db33451',
              31 => '1e12936c-ad69-44e8-9e95-34a3e3af02cd',
              32 => '1e31833b-f6a0-4e97-af67-289ee82c58d6',
              33 => '1f3ffce5-f4b8-4b2e-a56a-0c2dc3007189',
              34 => '1f51666d-9081-4a5b-a36f-f4883656f2f0',
              35 => '1fbbda92-73dc-4182-b60b-2224c13394eb',
              36 => '1fee0e07-8876-4c6b-8a21-b87c48cc119c',
              37 => '217c146b-1efb-4189-a84d-da605e3fc1e3',
              38 => '23d61b6b-ece1-4c27-ae4f-40b2c189aaee',
              39 => '25f9ebae-c8b4-405b-b1d2-24300bf42d6d',
              40 => '269999ae-304a-4e89-a4ba-81e31f468f8f',
              41 => '27104054-98b0-4f9a-8faa-45c8b8c100cb',
              42 => '279fc5f3-1332-4b57-b933-ec4e96551b7b',
              43 => '27c22c3a-a063-44ce-a59c-e334a19564d9',
              44 => '27dead99-c735-4cbb-89eb-8da8ba493ed8',
              45 => '289881a4-3acf-46dc-bc3a-daa5ccb98257',
              46 => '28ae7661-a9ec-4610-b4b0-b1f56648458a',
              47 => '296423c1-572e-4413-9dbb-9cef9c1700ea',
              48 => '29d0b3f0-12ee-4e8f-a049-66ef6ee1a4f0',
              49 => '2bc2d49f-a4c3-48bc-af2e-03e0af740509',
              50 => '2bc97af0-f9a6-43c9-aa49-c1b606abcb9f',
              51 => '2d182a57-5189-488a-98bf-2d05f48ff0e1',
              52 => '2e25c878-58ef-491c-8b62-06a928c9d40a',
              53 => '2f4b3833-19cd-4b57-8a86-e3c165870721',
              54 => '3097ad20-cc36-45d3-9fa6-6fb3d6094869',
              55 => '30bec241-e156-4a59-873d-b5765c84bbef',
              56 => '31b1b16c-9c89-4a6f-a1b1-39521e509558',
              57 => '339671bc-413c-47fb-9883-c331138a35f4',
              58 => '3536e837-61ef-41c9-9c96-71b6754c125c',
              59 => '36f27dfc-17d1-4f2d-9836-824d1deda1c4',
              60 => '3736cc10-2c33-4549-9fdc-1a6eb8bf6c43',
              61 => '39112744-d22c-4f29-907d-63a31f9fbbac',
              62 => '3b5d0cb8-b804-4b36-9db7-e939008c5b38',
              63 => '3c73d3c9-0783-4a16-9904-33eda1ec8a2e',
              64 => '3e2cf261-25d2-499e-b05b-31376c648ac3',
              65 => '3f4dd855-8a76-4f22-a6c9-ee0c348bf620',
              66 => '3fdd3534-6d74-4c02-aa9b-45e02503c77d',
              67 => '4022db14-7754-4121-8a6a-7a3618bcb0f3',
              68 => '4040f5ae-174f-463e-ac21-d2a41af1c0a5',
              69 => '427becef-4f9d-499d-a7fe-6e6b0f4fb66e',
              70 => '432c09d3-6bee-448f-ad43-485548d2a6ba',
              71 => '43caac8e-c935-4eed-a8e0-3d35251e2000',
              72 => '43f0fd86-0e8e-4f8b-ba2c-48a32f806fd6',
              73 => '44469d6a-266f-466c-991e-f896a719ecae',
              74 => '45a4980a-5b5b-4a83-af29-9c974c9dea28',
              75 => '48b533eb-bc8f-4729-b7ee-26875fa4196c',
              76 => '48bf5374-961d-4865-8056-f681e7651943',
              77 => '495fbeea-5faa-4de2-b95b-63ca0acfe51d',
              78 => '49d370e1-0059-4070-ba7f-2d1791e22fdd',
              79 => '4ad5d794-4f86-4795-b340-6ff246d25eb9',
              80 => '4b4ad18d-8666-4206-840d-e896dbe2b50c',
              81 => '4c171af1-39b0-4729-9ac6-fcda4744a147',
              82 => '4c4a96f7-ccc8-4c65-b5b2-d7b865c38767',
              83 => '4cb0016d-fd8f-4388-9ee3-7e233962caa6',
              84 => '4f073da0-bde7-411a-8b2f-330e9a3eacf4',
              85 => '5197b145-693d-4d73-9f81-2f417082d63b',
              86 => '527805f1-ce88-49f7-b04e-e6239c687ebd',
              87 => '535ebeb3-b175-4de6-8235-84158746a221',
              88 => '538bfbd8-dba1-473d-b2bf-1ef543ad1e33',
              89 => '5605c36d-45c1-4968-9009-513f1f084ab1',
              90 => '580467d3-e6a8-4052-b07b-ada40777bedc',
              91 => '59134f7e-600b-4783-932c-d12991c96e62',
              92 => '597fdd6a-8472-41e5-a78c-561213b9e59b',
              93 => '5a846b84-6607-4063-9567-ea0ec94a0252',
              94 => '5acccd8a-d280-40b1-b1db-c3653402add4',
              95 => '5b0109a6-6c95-4ac5-98b7-5726ce4cf0c4',
              96 => '5b59bbc4-c997-49ba-b0bc-89bbd8c4db45',
              97 => '5c6a4a18-6177-4882-9981-6ec20b196557',
              98 => '5e125aec-bcc1-4c3a-9b36-e795cb512454',
              99 => '6013ef0b-c0c2-48f8-bc32-2fa32a134a17',
              100 => '628bac1e-6247-4c10-ab40-be57ec98f141',
              101 => '64eab00c-a563-4cd4-963c-ce4be915f6c9',
              102 => '6544777c-80be-4e43-862f-68e736350a98',
              103 => '65ff9b4a-df29-4047-923b-e0ff8d9bc400',
              104 => '67702c43-5aec-485d-8727-865f5d4639a6',
              105 => '69045afe-bdb7-455f-9590-27f132e4f091',
              106 => '69fabafd-f496-4dae-8473-87ef80cc901b',
              107 => '6a8606b0-f848-4418-b837-c1d8caf58476',
              108 => '6abb1478-369a-41bc-a834-92b20e94a42b',
              109 => '6acede19-7720-48f4-9148-203890a93f0b',
              110 => '6ba2f980-fca6-479e-8084-3c92fa5551e8',
              111 => '6bdee2a7-4439-4a77-8731-26406066609f',
              112 => '6bf0ccce-be0e-4644-8a1f-438865ef3736',
              113 => '6da9a859-7c58-4cc9-a8dc-79d5dba6577c',
              114 => '6fff4719-d92c-4741-9679-f418eb466c6e',
              115 => '72a1a131-08d1-4597-a8ef-da74d7c42f65',
              116 => '736d8dda-fe90-4387-afd7-1954ebd4a75b',
              117 => '7401758b-07ec-41f8-b6b4-396932ff1c9e',
              118 => '741262c7-e3a7-496b-9779-44f84a6c0492',
              119 => '74a1b02d-dc07-42fe-8e88-fda3c7db983e',
              120 => '778809d6-52c4-420d-9ee4-06eb114e8ab5',
              121 => '78131b14-2e0b-4eed-ae98-ddbb0e6bf695',
              122 => '789bbac5-a9bc-4a17-8397-4b1b3de3087d',
              123 => '7ad80a36-bc28-4c44-b88a-1ba0226769ab',
              124 => '7af0a5f7-5388-418f-891b-055e2efcfac5',
              125 => '7bc5b8d8-87f3-4f32-82ab-80d688f67b36',
              126 => '7bfdb7b2-8767-494e-8d33-cfcc501d5ebd',
              127 => '7ceed8ff-3351-4866-a1d1-c37defe97615',
              128 => '7d7bd79f-3ec4-42ed-825c-adb72c6dd584',
              129 => '7d948fcb-bf1a-455b-aa35-71435dbf1db1',
              130 => '7fd6941d-f1f3-4c2b-a40e-5a357a34c234',
              131 => '80c33cbf-9929-4a32-a9cc-72ac0f1a526f',
              132 => '817b930c-3a2e-44f8-9a88-35136a8345f9',
              133 => '840ac2f7-fc9f-4995-8058-607718fd4c57',
              134 => '8489c3d3-7b67-4a5e-a6e0-c8b823510de4',
              135 => '86f84658-9852-4803-978e-8d7b17da0039',
              136 => '882938b0-0c38-4e4a-a975-e6270cae9b28',
              137 => '8a12e23a-6e46-4064-8632-0c537444542c',
              138 => '8a3e5d39-42ec-42ea-bb87-d142ed262a8c',
              139 => '8cbebc89-d8d8-4010-99c6-502ca43010d8',
              140 => '8de53803-782f-4fa5-a684-351dd98f8951',
              141 => '8e094166-a565-4abc-96d5-df2dd6cc6c5b',
              142 => '8e561d23-686b-4e28-af92-cff2958089f2',
              143 => '8e9fdda8-6ecb-4cc0-a138-431fd54ce401',
              144 => '8f60e603-9f36-4dcd-81bf-75ea8c104cf3',
              145 => '8fb6b59c-8d3f-48fe-ac99-3a0bf14ae723',
              146 => '8fdc3b01-6bee-43c8-8d2c-7c647dc4cc05',
              147 => '907c98f0-be17-4b31-9e28-e19a8b2a17e6',
              148 => '909af47c-fc1a-48d4-8583-afdf06e54368',
              149 => '929a8e6c-b9a7-4aed-82cb-78c965536ec0',
              150 => '92d3f907-4b65-4397-9e11-b724d4a13119',
              151 => '92efa1ca-d015-487a-8eb8-0bb33c0e4fe4',
              152 => '92f5c202-87eb-4af0-9c37-cca07b03b160',
              153 => '9699acca-f2a6-475f-8a14-04159a0b522c',
              154 => '9840295b-bbfc-4d11-a8e4-92a6fb11d567',
              155 => '9a5dcd07-0285-4896-b2c9-5b019824ddea',
              156 => '9b786cc1-5502-4f06-b9f3-4f48e9a1666a',
              157 => '9dfdc6d1-8140-44a9-8563-3f99ac7d8d63',
              158 => '9e16f225-d905-44fc-a51b-8ca4c29916a7',
              159 => '9e5164fa-4c5a-4d2a-95df-f342be62d2eb',
              160 => '9f041975-589e-44c4-b049-99519f0d4542',
              161 => '9f414238-8ebb-4459-b324-c72a759a9cae',
              162 => '9f61a152-c3fd-42f9-b0d9-f46af39a94fc',
              163 => 'a08e8d6a-822f-4085-83e1-dfd3f5ad4f1c',
              164 => 'a10d4f45-8401-4d71-9ae8-19875f329575',
              165 => 'a296a9ab-792c-429c-9004-7714690a8d88',
              166 => 'a327d8ca-46ff-4ae5-a913-42777dbc9fcb',
              167 => 'a68c14e2-fab4-4165-910e-c73b52e432b4',
              168 => 'a7ede740-480c-49db-9297-82cc51c0e322',
              169 => 'a859c3a4-89cf-4e0d-b6ab-700fe80f33e7',
              170 => 'a9d9a8ba-341a-46b2-b76d-ea13a86d1ad3',
              171 => 'a9fbc80a-b60b-4015-b025-38a46639331d',
              172 => 'ab122b6f-f4b9-4dd5-980a-37998bcc0cdd',
              173 => 'ab7c09c9-ed94-463e-9f42-1c0148d15837',
              174 => 'ac64aebc-0179-406b-bcc6-0c6484ca1201',
              175 => 'ac887183-d43a-423e-88ba-44c14bd62f6e',
              176 => 'acf6239b-b61f-42b9-965b-552166bdbfd4',
              177 => 'ad67e215-eb8c-4a94-bd42-5aa54749d767',
              178 => 'add21d1a-6a38-406a-8e0c-ad9230736fba',
              179 => 'ae29a736-9d32-425c-b2ab-7bf3984365ab',
              180 => 'af54d419-3bf9-4d9e-91e9-52186097417f',
              181 => 'b0ad7e5e-b3c8-440b-85c4-0e8dfd9e0bfd',
              182 => 'b175ffab-2fef-4939-b17c-638565c589a8',
              183 => 'b19fc95f-5d3c-40a2-acfa-200ebea16b5f',
              184 => 'b21f0179-f6a4-4fe5-9d95-307e08419c0d',
              185 => 'b3789739-c907-40a0-8092-d52644b499ed',
              186 => 'b6754b6d-484b-41ca-9eae-2a4e95c4cf60',
              187 => 'b6eb04d5-3dd8-400d-896a-7a726d728c71',
              188 => 'b782d244-5adb-4bde-a610-938c7d90d413',
              189 => 'b816e76a-6b5b-468f-9397-d5340b1d5d31',
              190 => 'b829c72b-abb7-4cf7-b9f0-58a730fc5588',
              191 => 'bc06200d-3ecc-48d4-bda1-81c51b75da40',
              192 => 'bc4095dc-9065-4002-ba0a-5247c6c62011',
              193 => 'bd97a16a-651f-48c1-a91e-753e00127658',
              194 => 'be3b3a45-f31b-4337-bb9d-e7f3b7f4e528',
              195 => 'bee8394a-c3ab-44eb-a387-84d84cf67739',
              196 => 'c16dcf96-cc35-4d49-84f1-453bab014855',
              197 => 'c1f9e682-c6ab-42f9-ad3b-b7a70d85e82f',
              198 => 'c21b20cf-2aae-4c86-9454-b225329438ef',
              199 => 'c3600ac9-9f8e-4f23-8073-3b20349f7f95',
              200 => 'c4576e5d-e2e9-4a39-a51b-a2b929ec6815',
              201 => 'c514f0f2-8506-4a78-99d2-eba98ffb063b',
              202 => 'c5c0c93d-9c3b-4814-b421-4a6654599f40',
              203 => 'c81a06f0-9c7a-4f6d-91b2-ad935a9a4e66',
              204 => 'c889463d-64b5-4942-93f1-e8e39a315354',
              205 => 'c8e776ef-3552-4b3e-a24e-636c9959f6c1',
              206 => 'ca1672d7-600f-42a8-a8dc-88b66d655fda',
              207 => 'ca851e3d-ae02-44f0-af36-b95fa0ef0884',
              208 => 'caf28c1c-6d28-4938-9bc4-a4cff1ec5c82',
              209 => 'cc2495fa-991e-4ca3-b4db-a040d5fc37aa',
              210 => 'cdde519f-1eea-44b7-8c8d-2f46685a369d',
              211 => 'cee0b981-d05a-4389-8d71-d9353c438547',
              212 => 'cef4f172-5147-43ef-9b8f-647153f3c0a9',
              213 => 'cfb59b94-2217-4e71-9399-cd50cf35cbdb',
              214 => 'cfe1e0ab-ee4e-4325-b671-b7eacbd2ec7f',
              215 => 'd0053a0c-051c-4259-90b5-ef26469b3707',
              216 => 'd1acc691-f78a-4988-8534-21f1563df3a5',
              217 => 'd1d0a8a5-08b7-48f6-bdab-2a0bc9c712f7',
              218 => 'd270e32a-dcc1-40a0-876b-01ada17da751',
              219 => 'd3bcc6ee-f072-4573-b535-0c9e789b5267',
              220 => 'd3e34d4a-cacc-4f72-addf-a10942459aa6',
              221 => 'd48d21eb-525a-424c-a233-785baa4294a4',
              222 => 'd6ccd3a9-136a-4655-802e-c7a898c7dfad',
              223 => 'd7a20806-1b5b-455d-9eab-2a8df614b80c',
              224 => 'd8139e29-f58d-4208-a032-69c438599bc1',
              225 => 'dd1c423f-98f1-467d-9903-383301925cc7',
              226 => 'df40e569-8df4-482b-a1e4-58089976056e',
              227 => 'dfc9304f-69f5-4ba3-8ee0-f555f0128508',
              228 => 'e02d81ad-416a-4a46-8973-d24111e5fdd7',
              229 => 'e2372206-b612-48c4-ad72-7ac1703af9da',
              230 => 'e2500eb9-2f6e-499b-bfd8-e039a48d1c36',
              231 => 'e3ad4e56-59b2-44fa-8799-3c64fefd58e6',
              232 => 'e4000b54-1185-4f84-bfff-441d46679e76',
              233 => 'e56c38b9-a86f-4e5d-a28b-3963ef312000',
              234 => 'e660a108-ac09-487f-bb6e-1fe6afab9c77',
              235 => 'e6639489-2de4-4843-bc2b-ee2679d40023',
              236 => 'e72db327-4d93-4139-809d-457bcbba77e1',
              237 => 'e7c3f64c-ad61-4b3d-b0a1-50caee66a86b',
              238 => 'e7ee0676-dd6f-4936-9a43-bc03c1f89db6',
              239 => 'e82b3c07-afa2-4fac-971e-367b107eeb9b',
              240 => 'e84c1058-25b5-4d2e-a314-46daabb93969',
              241 => 'e9571078-20c0-47ca-8979-028778cac919',
              242 => 'eb52bcdc-09ec-4b7c-8659-0524d1b4d91d',
              243 => 'ec33e71b-242f-4155-b9b5-2838f13734f9',
              244 => 'ed3e336a-6a5a-4d69-bc63-c91d81332426',
              245 => 'ee58e1ae-3829-4e0e-b1fd-c1e903fe9348',
              246 => 'eeb905f2-5961-4070-bcb8-37cc9ccf4d0a',
              247 => 'ef8aed17-24b4-4a51-acad-b8da56ffb209',
              248 => 'f15c8994-d17c-4a59-bffc-2701618a087f',
              249 => 'f1cf43a8-45d5-47a2-9fd5-b04a26b6a6e4',
              250 => 'f29cd01f-acc8-4fef-b563-cd8a48fb8323',
              251 => 'f44dda47-7b72-4986-8bb0-f5eb98f0bc16',
              252 => 'f5123795-e1f0-4dcf-8c95-1e2e1950e073',
              253 => 'f72b3edb-734e-441e-9866-2895e3cfcbfe',
              254 => 'f7b1b6b0-4a3a-48b1-b503-aa1636c5e535',
              255 => 'f7dc3263-2adc-45f0-a371-e7f81f8f6834',
              256 => 'f8d32748-3fad-4db6-a3f0-2ba5b9afbd1c',
              257 => 'f96315d4-845f-440c-83aa-161eb7f662e0',
              258 => 'fa4372ee-24ec-43a3-8a36-d3e1f36cfc45',
              259 => 'fa91c881-5758-443e-8d6b-0556420244b9',
              260 => 'fa934c5b-b49f-43d1-a865-3fcad859da09',
              261 => 'fabd48c5-4b2e-488b-8ae9-c70a320ff0c2',
              262 => 'fb1bba97-b299-4a7d-9650-070f22b2e832',
              263 => 'fb59bdac-2d71-4eb2-a135-ae9cfdf918a4',
              264 => 'fc9f4031-1a62-4e3a-9f90-9b2192dd5b21',
              265 => 'fd1a33ef-1a30-4675-ad45-0c4abf2a45c8',
              266 => 'fdb1ddbd-97d2-4b5b-bc73-3ea274b60bb9',
              267 => 'fe0aec8b-d1f4-4d84-8b52-d61ad9ab5e79',
              268 => 'feb0c5a8-5dba-4d40-a1fa-7e4ae5b61392',
              269 => 'ff364b61-da3c-4c9d-af3c-f409a333ac53',
              270 => 'ff714b6a-0dcf-4ae4-a6f0-aecf1a2e6da6',
            ),
          ),
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'oic_taxonomie_contexte_geographique',
        'version' => '7.x-1.0',
      ),
      'oic_taxonomie_periode_historique' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/oic_taxonomie_periode_historique/oic_taxonomie_periode_historique.module',
        'basename' => 'oic_taxonomie_periode_historique.module',
        'name' => 'oic_taxonomie_periode_historique',
        'info' => 
        array (
          'name' => 'OIC Taxonomie: Période historique',
          'core' => '7.x',
          'package' => 'OIC',
          'version' => '7.x-1.0',
          'project' => 'oic_taxonomie_periode_historique',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'taxonomy',
            2 => 'uuid',
            3 => 'uuid_features',
          ),
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'taxonomy' => 
            array (
              0 => 'epoque',
            ),
            'uuid_term' => 
            array (
              0 => '0c132d55-a08f-4ad5-be32-b6ddbab07603',
              1 => '0c2d7280-f09d-4c83-a2b1-9ef609c4a110',
              2 => '1380fb45-fe3f-4169-95e7-bfdf4b4e96c1',
              3 => '19b0bace-48b2-4368-a4e9-de66774717e6',
              4 => '1f3d32dc-c59e-433e-a1e7-8fdccf1a7eaf',
              5 => '27821c22-33ce-4514-951c-e666ef9c3b8f',
              6 => '27b83936-98e0-40a6-804f-a797aacb5fb1',
              7 => '30ba58fa-5e1f-4814-80e7-5a79f6a415a5',
              8 => '44abaa2e-1ced-4c7e-8c7c-2941e729008b',
              9 => '590f7408-158d-4bea-8f06-e87affe578d2',
              10 => '5ceb61ca-d700-40fe-888b-305c00f17639',
              11 => '68f8b726-89fc-475e-9f7d-49dfd1b8e07e',
              12 => 'cb44780f-0881-4684-90ff-df10c1f55902',
              13 => 'd54bbf70-5a46-4f88-bf82-bdbab12cac5c',
              14 => 'eecdbd76-63f9-45d4-b89a-468012cb3a47',
              15 => 'f0ba381f-2a5b-47c4-bf4b-cec630fea14d',
              16 => 'f79bde1b-3c81-472c-a535-5ab055380b4f',
            ),
          ),
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'oic_taxonomie_periode_historique',
        'version' => '7.x-1.0',
      ),
      'delete_all' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/delete_all/delete_all.module',
        'basename' => 'delete_all.module',
        'name' => 'delete_all',
        'info' => 
        array (
          'name' => 'Delete content and users',
          'description' => 'Allows deletion of all nodes, comments and users on a site. Useful for development or prior to launching a site.',
          'package' => 'Development',
          'core' => '7.x',
          'version' => '7.x-1.1',
          'project' => 'delete_all',
          'datestamp' => '1351902070',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'delete_all',
        'version' => '7.x-1.1',
      ),
      'cors' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/cors/cors.module',
        'basename' => 'cors.module',
        'name' => 'cors',
        'info' => 
        array (
          'name' => 'CORS',
          'description' => 'Allows Cross-origin resource sharing.',
          'package' => 'Other',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'cors.module',
          ),
          'configure' => 'admin/config/services/cors',
          'version' => '7.x-1.3',
          'project' => 'cors',
          'datestamp' => '1395477558',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'cors',
        'version' => '7.x-1.3',
      ),
      'cincopa' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/cincopa/cincopa.module',
        'basename' => 'cincopa.module',
        'name' => 'cincopa',
        'info' => 
        array (
          'name' => 'Cincopa Multimedia Platform',
          'description' => 'Cincopa Multimedia Platform Drupal Plugin',
          'package' => 'Input filters',
          'core' => '7.x',
          'version' => '7.x-2.0',
          'project' => 'cincopa',
          'datestamp' => '1377185767',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'cincopa',
        'version' => '7.x-2.0',
      ),
      'module_filter' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/module_filter/module_filter.module',
        'basename' => 'module_filter.module',
        'name' => 'module_filter',
        'info' => 
        array (
          'name' => 'Module filter',
          'description' => 'Filter the modules list.',
          'core' => '7.x',
          'package' => 'Administration',
          'files' => 
          array (
            0 => 'module_filter.install',
            1 => 'module_filter.js',
            2 => 'module_filter.module',
            3 => 'module_filter.admin.inc',
            4 => 'module_filter.theme.inc',
            5 => 'css/module_filter.css',
            6 => 'css/module_filter_tab.css',
            7 => 'js/module_filter.js',
            8 => 'js/module_filter_tab.js',
          ),
          'configure' => 'admin/config/user-interface/modulefilter',
          'version' => '7.x-2.0-alpha2',
          'project' => 'module_filter',
          'datestamp' => '1386356916',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'module_filter',
        'version' => '7.x-2.0-alpha2',
      ),
      'services_views' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/services_views/services_views.module',
        'basename' => 'services_views.module',
        'name' => 'services_views',
        'info' => 
        array (
          'name' => 'Services Views',
          'description' => 'Build service endpoints with Views.',
          'package' => 'Services',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'services',
            1 => 'views',
          ),
          'files' => 
          array (
            0 => 'includes/views/views_plugin_display_services.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'services_views',
          'datestamp' => '1388679507',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'services_views',
        'version' => '7.x-1.0',
      ),
      'scald_quickstart' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/scald/modules/scald_quickstart/scald_quickstart.module',
        'basename' => 'scald_quickstart.module',
        'name' => 'scald_quickstart',
        'info' => 
        array (
          'name' => 'Scald Quickstart',
          'description' => 'Help quickstarting a project using Scald',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'scald',
            1 => 'scald_image',
          ),
          'dependencis' => 
          array (
            0 => 'scald_dnd_library',
          ),
          'version' => '7.x-1.1',
          'project' => 'scald',
          'datestamp' => '1374669086',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'scald',
        'version' => '7.x-1.1',
      ),
      'atom_reference' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/scald/modules/fields/atom_reference/atom_reference.module',
        'basename' => 'atom_reference.module',
        'name' => 'atom_reference',
        'info' => 
        array (
          'name' => 'Atom Reference',
          'package' => 'Scald',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'scald',
            2 => 'dnd',
          ),
          'version' => '7.x-1.1',
          'project' => 'scald',
          'datestamp' => '1374669086',
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'scald',
        'version' => '7.x-1.1',
      ),
      'mee' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/scald/modules/fields/mee/mee.module',
        'basename' => 'mee.module',
        'name' => 'mee',
        'info' => 
        array (
          'name' => 'Multimedia Editorial Element',
          'package' => 'Scald',
          'description' => 'Allows users to define metadata on atoms that are embedded in text fields',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'text',
            2 => 'dnd',
            3 => 'scald',
          ),
          'core' => '7.x',
          'version' => '7.x-1.1',
          'project' => 'scald',
          'datestamp' => '1374669086',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'scald',
        'version' => '7.x-1.1',
      ),
      'scald_dnd_library' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/scald/modules/library/scald_dnd_library/scald_dnd_library.module',
        'basename' => 'scald_dnd_library.module',
        'name' => 'scald_dnd_library',
        'info' => 
        array (
          'name' => 'Scald DnD Library',
          'description' => 'Bridge between Scald and DnD',
          'package' => 'Scald',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'scald',
            1 => 'dnd',
            2 => 'views',
          ),
          'files' => 
          array (
            0 => 'includes/scald_dnd_library.views.inc',
            1 => 'includes/scald_plugin_display_library.inc',
            2 => 'includes/scald_plugin_style_library.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'scald',
          'datestamp' => '1374669086',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'scald',
        'version' => '7.x-1.1',
      ),
      'dnd' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/scald/modules/library/dnd/dnd.module',
        'basename' => 'dnd.module',
        'name' => 'dnd',
        'info' => 
        array (
          'name' => 'DnD Library',
          'package' => 'Scald',
          'description' => 'Enable a drag and drop media interface.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'scald',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/editor-global.css',
            ),
          ),
          'version' => '7.x-1.1',
          'project' => 'scald',
          'datestamp' => '1374669086',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'scald',
        'version' => '7.x-1.1',
      ),
      'scald_vimeo' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/scald/modules/providers/scald_vimeo/scald_vimeo.module',
        'basename' => 'scald_vimeo.module',
        'name' => 'scald_vimeo',
        'info' => 
        array (
          'name' => 'Scald Vimeo',
          'description' => 'Provides Video atoms from Vimeo.',
          'package' => 'Scald Providers',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'scald',
          ),
          'version' => '7.x-1.1',
          'project' => 'scald',
          'datestamp' => '1374669086',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'scald',
        'version' => '7.x-1.1',
      ),
      'scald_image' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/scald/modules/providers/scald_image/scald_image.module',
        'basename' => 'scald_image.module',
        'name' => 'scald_image',
        'info' => 
        array (
          'name' => 'Scald Image',
          'description' => 'Provides Image atoms from image files.',
          'package' => 'Scald Providers',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'scald',
            1 => 'image',
          ),
          'version' => '7.x-1.1',
          'project' => 'scald',
          'datestamp' => '1374669086',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'scald',
        'version' => '7.x-1.1',
      ),
      'scald_flash' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/scald/modules/providers/scald_flash/scald_flash.module',
        'basename' => 'scald_flash.module',
        'name' => 'scald_flash',
        'info' => 
        array (
          'name' => 'Scald Flash',
          'description' => 'Provides Flash atoms from SWF files.',
          'package' => 'Scald Providers',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'scald',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'scald_flash.css',
            ),
          ),
          'version' => '7.x-1.1',
          'project' => 'scald',
          'datestamp' => '1374669086',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'scald',
        'version' => '7.x-1.1',
      ),
      'scald_dailymotion' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/scald/modules/providers/scald_dailymotion/scald_dailymotion.module',
        'basename' => 'scald_dailymotion.module',
        'name' => 'scald_dailymotion',
        'info' => 
        array (
          'name' => 'Scald Dailymotion',
          'description' => 'Provides Video atoms from Dailymotion.',
          'package' => 'Scald Providers',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'scald',
          ),
          'version' => '7.x-1.1',
          'project' => 'scald',
          'datestamp' => '1374669086',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'scald',
        'version' => '7.x-1.1',
      ),
      'scald_audio' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/scald/modules/providers/scald_audio/scald_audio.module',
        'basename' => 'scald_audio.module',
        'name' => 'scald_audio',
        'info' => 
        array (
          'name' => 'Scald Audio',
          'description' => 'Provides Audio atoms from audio files.',
          'package' => 'Scald Providers',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'scald',
          ),
          'version' => '7.x-1.1',
          'project' => 'scald',
          'datestamp' => '1374669086',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'scald',
        'version' => '7.x-1.1',
      ),
      'scald_youtube' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/scald/modules/providers/scald_youtube/scald_youtube.module',
        'basename' => 'scald_youtube.module',
        'name' => 'scald_youtube',
        'info' => 
        array (
          'name' => 'Scald YouTube',
          'description' => 'Provides Video atoms from YouTube.',
          'package' => 'Scald Providers',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'scald',
          ),
          'version' => '7.x-1.1',
          'project' => 'scald',
          'datestamp' => '1374669086',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'scald',
        'version' => '7.x-1.1',
      ),
      'scald' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/scald/scald.module',
        'basename' => 'scald.module',
        'name' => 'scald',
        'info' => 
        array (
          'name' => 'Scald Core',
          'description' => 'Scald is Content, Attribution, Licensing, Distribution.  This is the core of the framework.',
          'package' => 'Scald',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'ctools',
            2 => 'image',
          ),
          'files' => 
          array (
            0 => 'includes/scald_views_handler_field_actions.inc',
            1 => 'includes/scald_views_handler_field_data.inc',
            2 => 'includes/scald_views_handler_field_representation.inc',
            3 => 'includes/scald_views_handler_filter_actions.inc',
            4 => 'includes/scald_views_handler_filter_atom_provider.inc',
            5 => 'includes/scald_views_handler_filter_atom_type.inc',
            6 => 'includes/ScaldAtom.inc',
            7 => 'includes/ScaldAtomController.inc',
            8 => 'tests/scald.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'scald',
          'datestamp' => '1374669086',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'scald',
        'version' => '7.x-1.1',
      ),
      'oic_taxonomie_champs_disciplinaires' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/oic_taxonomie_champs_disciplinaires/oic_taxonomie_champs_disciplinaires.module',
        'basename' => 'oic_taxonomie_champs_disciplinaires.module',
        'name' => 'oic_taxonomie_champs_disciplinaires',
        'info' => 
        array (
          'name' => 'OIC Taxonomie: Champs disciplinaires',
          'core' => '7.x',
          'package' => 'OIC',
          'version' => '7.x-1.0',
          'project' => 'oic_taxonomie_champs_disciplinaires',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'taxonomy',
            2 => 'uuid',
            3 => 'uuid_features',
          ),
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'taxonomy' => 
            array (
              0 => 'savoirs',
            ),
            'uuid_term' => 
            array (
              0 => '02304fd6-2f26-42b1-b2ea-0d9d8c40cfbc',
              1 => '04409e9f-194a-4791-82f5-58a4f9181189',
              2 => '09962476-88a7-4ee9-b389-f77d75d21a87',
              3 => '0d4be6c4-85a1-4fed-a506-3b3a26de8c6d',
              4 => '0f183ac3-4d93-49e9-9dbb-ccf8caa02c91',
              5 => '11225495-b6a9-49e4-b5c3-9d65ef257e6f',
              6 => '13a200eb-cd40-409d-8e77-7bbb6c1ea3a8',
              7 => '16ebdf0d-602e-4329-8d8d-624bad2f8c11',
              8 => '18043788-7a24-4feb-a4d2-7eee689b89fc',
              9 => '19d3e2f0-f83d-45d3-87a2-cdf8b30002bf',
              10 => '1a9912e3-c719-4845-964a-216207dadbba',
              11 => '1ee68cf1-6b4b-45f0-9fc4-c372b72a34c6',
              12 => '2016249b-f7bd-4231-9c77-12ddcfe8a5b1',
              13 => '23be08d2-e15e-4c81-9eb7-f33f1be9f84b',
              14 => '26f70029-2e03-4cd6-aa99-8d610ccbaf54',
              15 => '2b817daa-abf2-4cc5-88be-90d260835a26',
              16 => '2c067a3b-6d1f-47e1-bd8a-0cdf4d500f47',
              17 => '2cd46d93-f7fe-4b33-a6d0-60e4e3f838c3',
              18 => '314821c9-76a4-498c-9a26-7b7eb7199ac6',
              19 => '333cdd20-203e-4f63-9674-2732dd1494ba',
              20 => '3a672dba-26c7-4a84-8250-d8ff775b0ce5',
              21 => '3ca2eebc-e9f5-4d41-80c2-e906c380a5f7',
              22 => '4ab173b6-dec7-4c91-9a01-b733f6373d8d',
              23 => '4ae302f2-d27b-400a-9cd9-bd360e4c69b4',
              24 => '4c583da4-21f0-41b1-92ae-9be7a2531cf9',
              25 => '4ce344da-512d-4dde-b4ed-877aa114fb0c',
              26 => '51e031b6-3093-40a1-b481-595ef4010383',
              27 => '557bf2b9-442b-45dd-87c7-23d5d4097636',
              28 => '58d60234-e1d7-4ccb-8f95-1e1a1678755f',
              29 => '5e49107f-66cb-40b5-8740-bc4433435fa9',
              30 => '5fa2e63f-83cb-4375-bd73-a848d7df5a8b',
              31 => '72bbb0e2-0352-4d9d-bbd0-8808544896a4',
              32 => '73f3b4bf-5c56-4b1a-8c49-4109a22468c9',
              33 => '78297c77-7080-44a5-96d3-2d3334a55bac',
              34 => '7a6176e7-51b3-4080-99a2-0fd937cab4be',
              35 => '7b4f7ae6-9752-45dd-b15d-3cb6fd7a3695',
              36 => '828830ba-8423-45b0-b1e2-a5b599fde656',
              37 => '83ba2989-c7fc-4cca-8791-57f124e73a76',
              38 => '849a7562-aaf3-49f5-99fb-4acb205faba1',
              39 => '85f202de-4d88-4d70-83bb-7943166cee45',
              40 => '8610cf8c-fb8a-440d-90a8-ad13ddd9f074',
              41 => '880854d2-69a1-4101-ae9c-f1e6ed11d4e7',
              42 => '8cb49b6d-c12d-42e5-a847-6a3445e7f0e2',
              43 => '8d2863d1-5e66-4104-9d2a-6f5772b86c89',
              44 => '8e963310-f2bc-4f83-9806-6e72736f371c',
              45 => '92a60180-2a4d-4393-9343-18aef9dc7ec4',
              46 => '96085bf4-6dd5-473b-88cb-66da071093d1',
              47 => '97203487-af90-4719-b84d-4cd109833766',
              48 => '983f3858-d8d4-4ddf-a06b-b0f55487d7d1',
              49 => '99665aa1-0e81-4186-8d2e-102a54061d63',
              50 => '99d239b9-d7a7-48cb-b4bd-d0098aa2dead',
              51 => '9daf01aa-2dae-4926-a244-7bd09d8c823f',
              52 => 'a18ba54d-62c3-4cbf-a9a8-e685414b5f41',
              53 => 'a1c6e55a-345d-400e-a4f5-cd2da09b0de3',
              54 => 'a327a5ab-4243-4cae-9f56-16da963aa2c7',
              55 => 'adccfa44-c26f-40f5-b8d3-17c767919111',
              56 => 'aeb94827-6942-4aed-b3ac-3534431b5e36',
              57 => 'b12dfa9c-aef5-45a0-bc7b-5092ebcaa729',
              58 => 'b32e83c2-ed37-46f8-b598-51b2f01f3988',
              59 => 'bb806d67-5d18-4f8c-8e7c-7feb7b8774a6',
              60 => 'bc243f3b-2b0a-446b-86e6-1de1ac1af16d',
              61 => 'bd5b99da-1fe0-4ceb-b4bc-324aad13e22b',
              62 => 'be98fcea-6778-4a6d-ad88-db2b76d178e0',
              63 => 'bf7dd5de-09b8-4303-8596-10304a611890',
              64 => 'c10926b4-d0cc-4d40-ab64-df622c8863bd',
              65 => 'c9298d9b-7e6c-4a7f-ad5c-900374b996b9',
              66 => 'ca69080a-b87b-4f4d-90ba-f9f2f85a9235',
              67 => 'cdf7dc88-aaee-4f17-b9bb-be4b4c8eac69',
              68 => 'ced2f3f1-dbe5-4a6c-b2af-1f040895a393',
              69 => 'd144513b-e280-411c-8f2e-9c20e5d03f19',
              70 => 'd3184583-5845-4663-a50d-3696df49b805',
              71 => 'd4418d6b-9869-449a-a74e-2676ac7c3d46',
              72 => 'd7493d61-93dc-4e9e-be9f-9f155247ab48',
              73 => 'd873a939-5fb0-4634-83ed-4c3c1234fb5b',
              74 => 'da6d0148-466c-46e2-a3b8-69d2b6885b54',
              75 => 'dc801c78-1f83-4a83-b73b-1cb6e2045fbc',
              76 => 'ddd9ea97-c197-4195-a9e3-fccc18c63673',
              77 => 'ddfa6036-342d-401e-b6ed-3daffcd72455',
              78 => 'e4bc34cf-6c6f-49a8-bac3-51c2035166e8',
              79 => 'e4f6006d-0545-4bbc-a969-a728cad10f52',
              80 => 'e6125fae-d706-445e-860f-5447b6577b9b',
              81 => 'e8f82f9c-6b40-4225-bffd-3ee093b2abbc',
              82 => 'eb4c6b9c-7bad-4a00-92a9-e8459e073871',
              83 => 'f21040a3-6775-4e24-82fc-83d81acab885',
              84 => 'f2282e01-b2c9-49cc-985e-0aa8f603577e',
              85 => 'f825a98d-1622-4da5-b930-b6fb90345c26',
              86 => 'f897475d-eb7c-4d61-859d-9acfcf67c037',
              87 => 'fa077197-65cc-4a9a-9761-18c7c0165a03',
              88 => 'fec870d1-eeae-4f11-a958-036f2ee51c18',
            ),
          ),
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'oic_taxonomie_champs_disciplinaires',
        'version' => '7.x-1.0',
      ),
      'views_conditional' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/views_conditional/views_conditional.module',
        'basename' => 'views_conditional.module',
        'name' => 'views_conditional',
        'info' => 
        array (
          'name' => 'Views Conditional',
          'description' => 'Allows conditional views output.',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views/handlers/views_conditional_handler.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'views_conditional',
          'datestamp' => '1372873258',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_conditional',
        'version' => '7.x-1.1',
      ),
      'oic_taxonomie_courants_artistiques' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/oic_taxonomie_courants_artistiques/oic_taxonomie_courants_artistiques.module',
        'basename' => 'oic_taxonomie_courants_artistiques.module',
        'name' => 'oic_taxonomie_courants_artistiques',
        'info' => 
        array (
          'name' => 'OIC Taxonomie: Courants artistiques',
          'core' => '7.x',
          'package' => 'OIC',
          'version' => '7.x-1.0',
          'project' => 'oic_taxonomie_courants_artistiques',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'taxonomy',
            2 => 'uuid',
            3 => 'uuid_features',
          ),
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'taxonomy' => 
            array (
              0 => 'contenu',
            ),
            'uuid_term' => 
            array (
              0 => '05bbc480-c91e-43a4-832c-10c0eda9f45b',
              1 => '07da9cb8-613c-4bf1-a3eb-210f834f86b4',
              2 => '0d336f61-fa4d-439e-a7f5-f351a5322d5c',
              3 => '1036b97c-494c-42c2-850f-a0bb6f966407',
              4 => '1078eeb2-f1b2-4d16-9b82-4f845d10f5b7',
              5 => '133ff3c8-8afe-4d3c-b127-ce181749e95a',
              6 => '14c01321-f1ac-4f37-a248-c5932fdefbda',
              7 => '162424c4-1495-44b9-9c69-ae23e014a97f',
              8 => '165066ca-358c-47d5-a19a-5a969caa4572',
              9 => '1787c9db-0a24-40df-ab5c-917215ca6456',
              10 => '18200fee-99e1-42e8-a70d-aefa446251b8',
              11 => '187f03b6-bd5a-4e56-a0a9-7106892c05e4',
              12 => '19a46d86-5c3f-43be-a52e-66feb6b77e07',
              13 => '1a281101-15d0-4370-a823-218e7e153d0c',
              14 => '1a635976-2a1f-4bb7-9ade-97d13b1c3ddc',
              15 => '1c987cb0-b1cf-48e4-bc9c-9a1f016810dd',
              16 => '241da44f-e125-4c20-8ce8-71c393237f54',
              17 => '246f7482-33e7-478e-b7dd-9c7fac3a9383',
              18 => '27404946-4532-4671-a3d4-b640e7f0deee',
              19 => '28fff72e-e572-4ca5-8908-2b3992e5e84f',
              20 => '2d8da86b-10ea-44a3-b058-80eef28cf28d',
              21 => '2e8f07f3-876e-4e13-a3cd-5da0530ee334',
              22 => '33d78b83-38ba-4267-8d51-0bf632eb0338',
              23 => '35f654a3-51b7-4d0e-952e-d22ad6538ec5',
              24 => '360c4626-a8e1-4b46-9126-0b436156da7b',
              25 => '377eb71d-7901-4599-8e15-789de96e60d8',
              26 => '3854f695-9cd4-4f72-9425-b76fa85c797d',
              27 => '38e1d22e-ca8c-4b3e-889a-f9bb371f894e',
              28 => '3b2f364b-d320-4a7f-9d78-dcde2762fb85',
              29 => '3bb213d8-9148-424a-8027-0ac51d3331ee',
              30 => '3c7c05bf-086d-4079-8f44-a7c292837313',
              31 => '4174cb69-3c1d-414d-a52a-4ea52c1659f5',
              32 => '41b09ed1-abf9-4a1a-a3aa-4bf547679cec',
              33 => '4255c10a-c890-44f5-a444-1be87e2eef0c',
              34 => '44009866-7c7e-4754-9ca2-8cd1282b3e13',
              35 => '46a3c19e-7435-4f14-8bfe-8c8ab2e990da',
              36 => '4727aa5c-5003-46f1-b180-57c1e16a11e1',
              37 => '473c5335-5b6a-4040-8e76-0a742428a28d',
              38 => '49c4613a-7a87-430f-aec8-af2244f65804',
              39 => '4a32e4a1-4bef-4527-b5c9-6e9616827024',
              40 => '4cba0d2b-98b1-4b1d-a4a3-0a12c8092b45',
              41 => '51538368-99a4-4e8c-8e11-e54e38deac59',
              42 => '54925e58-de82-411d-82d8-18bd8d639825',
              43 => '5513b901-6cc5-4422-8a97-acb24c4ffe8f',
              44 => '562c70c4-ec81-4be3-9837-fc02917de5e8',
              45 => '5bcb19a4-3396-4b96-aebe-ba35ba83f679',
              46 => '5d0900d0-c2a7-4a57-9852-00881cf6763a',
              47 => '5e562a5d-a877-42dc-a653-bbb435d38e39',
              48 => '5f4df12b-568a-442e-8084-75160584e4c1',
              49 => '63207401-275a-469f-9ccb-abd96c158af8',
              50 => '637ca275-cef8-462b-875b-a182c2fc9f85',
              51 => '65451329-a3a1-4339-a49c-0eb25504453c',
              52 => '69652819-4cfc-4759-8afb-2165b942ae1a',
              53 => '6b1e9ec3-b477-4fb9-8138-d8d49f2fe991',
              54 => '6eb80c27-e3ee-4906-ac8f-f3b359fad7fd',
              55 => '73c1f217-98c7-4362-895d-a2c9a2fe2fc9',
              56 => '75f85298-9ed6-4275-94f5-407798347303',
              57 => '7ac67826-cc3e-4d01-a6a0-6666459a26c7',
              58 => '7c6fe29e-1415-49fa-ac7c-bcae7a5f0898',
              59 => '7d9f5010-c85d-4b08-9bb7-6a550467662e',
              60 => '7e6b9757-91d4-4a6a-a461-9a7d652e7f55',
              61 => '7ed0534b-5071-424d-a667-07cfb0f0801d',
              62 => '7f23902a-4ea7-4070-a2d9-c318a1c9ab4b',
              63 => '858d1d9c-b8dc-4303-94d3-572fc0d18119',
              64 => '88299cf0-1ddf-4677-87b9-2c6e36a4ee7a',
              65 => '8981f4dd-1caf-40c2-b43e-ac223c7af11f',
              66 => '8a0733da-d70a-4b79-afcc-95ebd010449a',
              67 => '8a808320-acf7-45c4-b192-b18c3da49a8e',
              68 => '8be3a829-404c-4b55-ab33-d9b912e32bae',
              69 => '8e9c59d7-70f0-4e55-a1c9-4547bd49329b',
              70 => '8ebd83d2-2e05-4c37-be1f-fb223a4458cc',
              71 => '91097706-18c0-4919-b03e-af76a82c172f',
              72 => '91a8356c-5738-4a4f-85a3-eb0f51ee2956',
              73 => '92fb8c30-6a43-40f8-a8c2-4de3a27c06ec',
              74 => '9996fe74-25f5-4c01-b289-393589a229fc',
              75 => '9ab2262e-b024-4ba2-b06a-824fe81bd94e',
              76 => '9fa4c9a2-6e9f-4d30-a7d9-7593cdd8790e',
              77 => 'a31d6700-7ce7-4181-ad3b-016373f837e8',
              78 => 'a3f56d11-9d3c-46bc-b49c-17ee65ab0547',
              79 => 'a57f8d98-6578-42cc-9173-df926ecb73bc',
              80 => 'a5bd5ab7-fc8b-44f2-8585-2443f7338d1a',
              81 => 'a5c2ff96-c656-4f7d-892a-8f18996389f8',
              82 => 'a67445d9-8f59-4186-8a6b-83761ded64e0',
              83 => 'aac6fdd3-f6a0-437a-867b-00e5cc9bf25e',
              84 => 'ab23e597-9f02-45fc-9ace-42157e053232',
              85 => 'ac9822c3-a381-48c6-a56d-8b83457cb33f',
              86 => 'ad0c8f4d-7ccc-4053-ae9f-ab61557b2b7d',
              87 => 'b335c7b5-534e-4e56-8e3a-4a9aeecd4fed',
              88 => 'bb54d4ba-676b-484f-9347-f07439c7ea96',
              89 => 'bf2ed061-aca5-4517-9eec-21efb50870c7',
              90 => 'c586c3b4-e22c-4647-9e6d-199b15bcc4a0',
              91 => 'c5cbe270-367f-4344-845c-d625530a14c9',
              92 => 'c6b4e0d7-17b5-49ff-8932-e331739f8d7f',
              93 => 'c6ca9e77-eb5b-4e9e-954c-f28ec89ebd53',
              94 => 'ca5edb4e-9b89-483e-834c-2822d8d3e861',
              95 => 'cacdb1ea-5de8-4f70-a25c-930c84815518',
              96 => 'cf1329ab-bdb1-4a4e-9981-07aede306b54',
              97 => 'd00c1aa4-ae99-4fa4-b906-c77867d8309f',
              98 => 'd16e99d0-388c-4da4-a7ec-24f81dee300c',
              99 => 'd2c90c09-99a4-4b76-b860-2d4b29398a7f',
              100 => 'd58b739f-882f-4212-bbbd-bbeb1f9021f0',
              101 => 'd9f78e36-4974-4259-a9d9-7335e5d3cb52',
              102 => 'da061497-49fa-4b5f-9c66-bbba2eef31f6',
              103 => 'da29dad1-7ad0-4d40-a6e0-81796296aac7',
              104 => 'db75c32a-4c87-4fcd-9c72-e351f200fbcd',
              105 => 'dfbd89c8-25a9-4c40-9a8a-1074fc0a5ea9',
              106 => 'e1152eb4-ff25-4d03-86a2-a509da250b08',
              107 => 'e11ad8cb-758c-45e2-8463-32769d3c6902',
              108 => 'e34419b2-1b71-44f9-b1b9-a93c586bfc65',
              109 => 'e425271b-1f67-4fb0-8a0d-abb58b997179',
              110 => 'e4822b7c-2a61-4ff1-8332-2c6fd23ad966',
              111 => 'e9b8525e-3f5d-46be-a2e6-5f17fd95e583',
              112 => 'ee17edb1-6b74-42ca-82a0-15874aa472ed',
              113 => 'ee89b03d-57ef-40e6-8526-bec9e1fb445c',
              114 => 'ef477a04-12ea-48c6-95e3-ffb7dfc7292e',
              115 => 'f139c64d-f7c0-42f1-9bcf-838918a853d0',
              116 => 'f17d4bf7-16f7-47e0-9b29-9984895a7eef',
              117 => 'f2d0c15d-886e-4d71-9d06-2528deb20b52',
              118 => 'f4739c76-9796-4e1f-951e-96201fc48587',
              119 => 'f6368d86-cf0d-4235-b3b8-890cca11d096',
              120 => 'f646b8a5-3186-4db5-a027-b873974797d0',
              121 => 'f9b9f202-8ae4-404d-b0af-65967fe5c7a5',
              122 => 'fdad88f9-c895-4633-8c2f-6dd507f4524f',
              123 => 'fe914e6c-842f-408a-b4a5-9b609a08e041',
              124 => 'ff9dd888-723e-47a8-95ff-5c732a0001d7',
            ),
          ),
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'oic_taxonomie_courants_artistiques',
        'version' => '7.x-1.0',
      ),
      'nopremium' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/nopremium/nopremium.module',
        'basename' => 'nopremium.module',
        'name' => 'nopremium',
        'info' => 
        array (
          'name' => 'Node Option Premium',
          'description' => 'Shows only the teasers of premium contents to unprivileged users.',
          'configure' => 'admin/config/workflow/nopremium',
          'core' => '7.x',
          'version' => '7.x-1.1',
          'project' => 'nopremium',
          'datestamp' => '1301749569',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'project' => 'nopremium',
        'version' => '7.x-1.1',
      ),
      'webform_multifile' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/webform_multifile/webform_multifile.module',
        'basename' => 'webform_multifile.module',
        'name' => 'webform_multifile',
        'info' => 
        array (
          'name' => 'Webform multifile',
          'description' => 'Adds a new field to webform to allow multiple file uploads',
          'core' => '7.x',
          'package' => 'Webform',
          'dependencies' => 
          array (
            0 => 'webform',
            1 => 'transliteration',
            2 => 'file',
          ),
          'files' => 
          array (
            0 => 'multifile.inc',
            1 => 'webform_multifile.install',
            2 => 'webform_multifile.module',
          ),
          'version' => '7.x-1.2',
          'project' => 'webform_multifile',
          'datestamp' => '1340091161',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'webform_multifile',
        'version' => '7.x-1.2',
      ),
      'twitter_signin' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/twitter/twitter_signin/twitter_signin.module',
        'basename' => 'twitter_signin.module',
        'name' => 'twitter_signin',
        'info' => 
        array (
          'name' => 'Twitter Signin',
          'description' => 'Adds support for "Sign in with Twitter"',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'twitter',
          ),
          'configure' => 'admin/config/services/twitter/signin',
          'version' => '7.x-5.8',
          'project' => 'twitter',
          'datestamp' => '1370303463',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'twitter',
        'version' => '7.x-5.8',
      ),
      'twitter_post' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/twitter/twitter_post/twitter_post.module',
        'basename' => 'twitter_post.module',
        'name' => 'twitter_post',
        'info' => 
        array (
          'name' => 'Twitter Post',
          'description' => 'Enables posting to twitter',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'twitter',
          ),
          'configure' => 'admin/config/services/twitter/post',
          'version' => '7.x-5.8',
          'project' => 'twitter',
          'datestamp' => '1370303463',
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'project' => 'twitter',
        'version' => '7.x-5.8',
      ),
      'twitter_mock' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/twitter/tests/twitter_mock.module',
        'basename' => 'twitter_mock.module',
        'name' => 'twitter_mock',
        'info' => 
        array (
          'name' => 'Twitter Mock',
          'description' => 'Sets up a mock web server to simulate API calls on tests',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'twitter',
            1 => 'simpletest',
          ),
          'version' => '7.x-5.8',
          'project' => 'twitter',
          'datestamp' => '1370303463',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'twitter',
        'version' => '7.x-5.8',
      ),
      'twitter_actions' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/twitter/twitter_actions/twitter_actions.module',
        'basename' => 'twitter_actions.module',
        'name' => 'twitter_actions',
        'info' => 
        array (
          'name' => 'Twitter actions',
          'description' => 'Exposes Drupal actions to send Twitter messages.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'twitter',
          ),
          'version' => '7.x-5.8',
          'project' => 'twitter',
          'datestamp' => '1370303463',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'twitter',
        'version' => '7.x-5.8',
      ),
      'twitter' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/twitter/twitter.module',
        'basename' => 'twitter.module',
        'name' => 'twitter',
        'info' => 
        array (
          'name' => 'Twitter',
          'description' => 'Adds integration with the Twitter microblogging service.',
          'php' => '5.1',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'twitter_views_field_handlers.inc',
            1 => 'twitter.lib.php',
            2 => 'tests/core.test',
            3 => 'tests/input_filters.test',
          ),
          'dependencies' => 
          array (
            0 => 'oauth_common',
            1 => 'views',
          ),
          'configure' => 'admin/config/services/twitter',
          'version' => '7.x-5.8',
          'project' => 'twitter',
          'datestamp' => '1370303463',
        ),
        'schema_version' => '7500',
        'project' => 'twitter',
        'version' => '7.x-5.8',
      ),
      'sharethis' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/sharethis/sharethis.module',
        'basename' => 'sharethis.module',
        'name' => 'sharethis',
        'info' => 
        array (
          'name' => 'ShareThis',
          'description' => 'Add the <a href="http://sharethis.com/">ShareThis</a> widget to nodes on your site.',
          'core' => '7.x',
          'package' => 'Sharing',
          'configure' => 'admin/config/services/sharethis',
          'files' => 
          array (
            0 => 'views/sharethis_handler_field_link.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'sharethis',
          'datestamp' => '1349883717',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'sharethis',
        'version' => '7.x-2.5',
      ),
      'opac_register' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/opac/modules/opac_register/opac_register.module',
        'basename' => 'opac_register.module',
        'name' => 'opac_register',
        'info' => 
        array (
          'name' => 'opac register',
          'description' => 'Allows drupal users to register to a library',
          'package' => 'opac',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'opac',
          ),
          'version' => '7.x-2.0',
          'project' => 'opac',
          'datestamp' => '1383643731',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'opac',
        'version' => '7.x-2.0',
      ),
      'opac_items' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/opac/modules/opac_items/opac_items.module',
        'basename' => 'opac_items.module',
        'name' => 'opac_items',
        'info' => 
        array (
          'name' => 'Opac Items',
          'description' => 'Get items information for a given record.',
          'package' => 'opac',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'opac',
          ),
          'version' => '7.x-2.0',
          'project' => 'opac',
          'datestamp' => '1383643731',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'opac',
        'version' => '7.x-2.0',
      ),
      'opac_authorities' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/opac/modules/opac_authorities/opac_authorities.module',
        'basename' => 'opac_authorities.module',
        'name' => 'opac_authorities',
        'info' => 
        array (
          'name' => 'opac authorities',
          'description' => 'Provides an authority entity.',
          'package' => 'opac',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'opac',
          ),
          'files' => 
          array (
            0 => 'includes/opac_authority.inc',
            1 => 'includes/opac_authority_type.inc',
          ),
          'version' => '7.x-2.0',
          'project' => 'opac',
          'datestamp' => '1383643731',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'opac',
        'version' => '7.x-2.0',
      ),
      'opac_asin' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/opac/modules/opac_asin/opac_asin.module',
        'basename' => 'opac_asin.module',
        'name' => 'opac_asin',
        'info' => 
        array (
          'name' => 'Opac ASIN',
          'description' => 'Provide Opac harvesting plugin for Amazon ASIN field type',
          'package' => 'opac',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'opac',
            1 => 'asin',
          ),
          'version' => '7.x-2.0',
          'project' => 'opac',
          'datestamp' => '1383643731',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'opac',
        'version' => '7.x-2.0',
      ),
      'opac_users' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/opac/modules/opac_users/opac_users.module',
        'basename' => 'opac_users.module',
        'name' => 'opac_users',
        'info' => 
        array (
          'name' => 'opac users',
          'description' => 'Allows drupal users to interact with their ILS account.',
          'package' => 'opac',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'opac',
            1 => 'opac_items',
            2 => 'ctools',
          ),
          'version' => '7.x-2.0',
          'project' => 'opac',
          'datestamp' => '1383643731',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'opac',
        'version' => '7.x-2.0',
      ),
      'opac_marc' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/opac/modules/opac_marc/opac_marc.module',
        'basename' => 'opac_marc.module',
        'name' => 'opac_marc',
        'info' => 
        array (
          'name' => 'Opac Marc',
          'description' => 'Provide a MARC view for opac records (for marc compliant ILS only).',
          'package' => 'opac',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'opac',
          ),
          'version' => '7.x-2.0',
          'project' => 'opac',
          'datestamp' => '1383643731',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'opac',
        'version' => '7.x-2.0',
      ),
      'opac' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/opac/opac.module',
        'basename' => 'opac.module',
        'name' => 'opac',
        'info' => 
        array (
          'name' => 'opac',
          'description' => 'Drupal powered opac.',
          'package' => 'opac',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'number',
            2 => 'text',
            3 => 'entity',
            4 => 'list',
          ),
          'files' => 
          array (
            0 => 'includes/opac_server.inc',
            1 => 'includes/opac_server_controller.inc',
            2 => 'includes/opac.connector.inc',
          ),
          'version' => '7.x-2.0',
          'project' => 'opac',
          'datestamp' => '1383643731',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'opac',
        'version' => '7.x-2.0',
      ),
      'oauth_common' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/oauth/oauth_common.module',
        'basename' => 'oauth_common.module',
        'name' => 'oauth_common',
        'info' => 
        array (
          'name' => 'OAuth',
          'description' => 'Provides OAuth functionality',
          'configure' => 'admin/config/services/oauth',
          'package' => 'OAuth',
          'recommends' => 
          array (
            0 => 'ctools',
          ),
          'suggests' => 
          array (
            0 => 'inputstream',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'lib/OAuth.php',
            1 => 'includes/DrupalOAuthServer.inc',
            2 => 'includes/DrupalOAuthDataStore.inc',
            3 => 'includes/DrupalOAuthRequest.inc',
            4 => 'includes/DrupalOAuthToken.inc',
            5 => 'includes/DrupalOAuthConsumer.inc',
            6 => 'includes/DrupalOAuthClient.inc',
            7 => 'includes/OAuthSignatureMethod_HMAC.inc',
          ),
          'version' => '7.x-3.2',
          'project' => 'oauth',
          'datestamp' => '1390561406',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'oauth',
        'version' => '7.x-3.2',
      ),
      'oauth_common_providerui' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/oauth/oauth_common_providerui.module',
        'basename' => 'oauth_common_providerui.module',
        'name' => 'oauth_common_providerui',
        'info' => 
        array (
          'name' => 'OAuth Provider UI',
          'description' => 'Provides a UI for when OAuth is acting as a provider.',
          'package' => 'OAuth',
          'dependencies' => 
          array (
            0 => 'oauth_common',
          ),
          'core' => '7.x',
          'version' => '7.x-3.2',
          'project' => 'oauth',
          'datestamp' => '1390561406',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'oauth',
        'version' => '7.x-3.2',
      ),
      'fb_permissions' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/fb_autopost/fb_permissions/fb_permissions.module',
        'basename' => 'fb_permissions.module',
        'name' => 'fb_permissions',
        'info' => 
        array (
          'name' => 'Facebook Permissions',
          'description' => 'Helper module to select the permissions a Facebook App needs to be perform the appropriate actions.',
          'package' => 'Facebook Autopost',
          'core' => '7.x',
          'version' => '7.x-1.2',
          'project' => 'fb_autopost',
          'datestamp' => '1400138934',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'fb_autopost',
        'version' => '7.x-1.2',
      ),
      'fb_autopost_entity' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/fb_autopost/fb_autopost_entity/fb_autopost_entity.module',
        'basename' => 'fb_autopost_entity.module',
        'name' => 'fb_autopost_entity',
        'info' => 
        array (
          'name' => 'Facebook Autopost Entity',
          'description' => 'Creates publication entities to add support for Rules, Views, …',
          'package' => 'Facebook Autopost',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'fb_autopost',
            1 => 'entity',
          ),
          'files' => 
          array (
            0 => 'fb_autopost_entity.admin.inc',
            1 => 'fb_autopost_entity.info.inc',
            2 => 'class/FBAutopostEntity.php',
            3 => 'class/FBAutopostEntityPhoto.php',
            4 => 'class/FBAutopostEntityEvent.php',
            5 => 'class/FBAutopostEntityPost.php',
          ),
          'version' => '7.x-1.2',
          'project' => 'fb_autopost',
          'datestamp' => '1400138934',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fb_autopost',
        'version' => '7.x-1.2',
      ),
      'fb_autopost_types' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/fb_autopost/fb_autopost_types/fb_autopost_types.module',
        'basename' => 'fb_autopost_types.module',
        'name' => 'fb_autopost_types',
        'info' => 
        array (
          'name' => 'Facebook autopost types',
          'description' => 'Feature containing Facebook publication types and fields attached.',
          'core' => '7.x',
          'package' => 'Facebook Autopost',
          'php' => '5.2.4',
          'version' => '7.x-1.2',
          'project' => 'fb_autopost',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'fb_autopost_entity',
            2 => 'features',
            3 => 'file',
            4 => 'image',
            5 => 'list',
            6 => 'number',
            7 => 'options',
            8 => 'text',
          ),
          'features' => 
          array (
            'facebook_publication_type' => 
            array (
              0 => 'album',
              1 => 'event',
              2 => 'link',
              3 => 'note',
              4 => 'photo',
              5 => 'post',
              6 => 'question',
              7 => 'status',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field_base' => 
            array (
              0 => 'field_facebook_actions',
              1 => 'field_facebook_allow_new_options',
              2 => 'field_facebook_caption',
              3 => 'field_facebook_description',
              4 => 'field_facebook_end_time',
              5 => 'field_facebook_feed_targeting',
              6 => 'field_facebook_link',
              7 => 'field_facebook_location',
              8 => 'field_facebook_location_id',
              9 => 'field_facebook_message',
              10 => 'field_facebook_name',
              11 => 'field_facebook_options',
              12 => 'field_facebook_picture',
              13 => 'field_facebook_privacy_type',
              14 => 'field_facebook_published',
              15 => 'field_facebook_question',
              16 => 'field_facebook_scheduled_publish',
              17 => 'field_facebook_source',
              18 => 'field_facebook_start_time',
              19 => 'field_facebook_subject',
              20 => 'field_facebook_targeting',
            ),
            'field_instance' => 
            array (
              0 => 'facebook_publication-album-field_facebook_message',
              1 => 'facebook_publication-album-field_facebook_name',
              2 => 'facebook_publication-event-field_facebook_description',
              3 => 'facebook_publication-event-field_facebook_end_time',
              4 => 'facebook_publication-event-field_facebook_location',
              5 => 'facebook_publication-event-field_facebook_location_id',
              6 => 'facebook_publication-event-field_facebook_name',
              7 => 'facebook_publication-event-field_facebook_privacy_type',
              8 => 'facebook_publication-event-field_facebook_start_time',
              9 => 'facebook_publication-link-field_facebook_link',
              10 => 'facebook_publication-link-field_facebook_message',
              11 => 'facebook_publication-link-field_facebook_published',
              12 => 'facebook_publication-link-field_facebook_scheduled_publish',
              13 => 'facebook_publication-note-field_facebook_message',
              14 => 'facebook_publication-note-field_facebook_subject',
              15 => 'facebook_publication-photo-field_facebook_feed_targeting',
              16 => 'facebook_publication-photo-field_facebook_message',
              17 => 'facebook_publication-photo-field_facebook_published',
              18 => 'facebook_publication-photo-field_facebook_scheduled_publish',
              19 => 'facebook_publication-photo-field_facebook_source',
              20 => 'facebook_publication-photo-field_facebook_targeting',
              21 => 'facebook_publication-post-field_facebook_actions',
              22 => 'facebook_publication-post-field_facebook_caption',
              23 => 'facebook_publication-post-field_facebook_description',
              24 => 'facebook_publication-post-field_facebook_link',
              25 => 'facebook_publication-post-field_facebook_message',
              26 => 'facebook_publication-post-field_facebook_name',
              27 => 'facebook_publication-post-field_facebook_picture',
              28 => 'facebook_publication-post-field_facebook_published',
              29 => 'facebook_publication-post-field_facebook_scheduled_publish',
              30 => 'facebook_publication-post-field_facebook_targeting',
              31 => 'facebook_publication-question-field_facebook_allow_new_options',
              32 => 'facebook_publication-question-field_facebook_options',
              33 => 'facebook_publication-question-field_facebook_published',
              34 => 'facebook_publication-question-field_facebook_question',
              35 => 'facebook_publication-question-field_facebook_scheduled_publish',
              36 => 'facebook_publication-status-field_facebook_message',
              37 => 'facebook_publication-status-field_facebook_published',
              38 => 'facebook_publication-status-field_facebook_scheduled_publish',
            ),
          ),
          'features_exclude' => 
          array (
            'field' => 
            array (
              'facebook_publication-album-field_facebook_name' => 'facebook_publication-album-field_facebook_name',
              'facebook_publication-album-field_facebook_message' => 'facebook_publication-album-field_facebook_message',
              'facebook_publication-event-field_facebook_description' => 'facebook_publication-event-field_facebook_description',
              'facebook_publication-event-field_facebook_end_time' => 'facebook_publication-event-field_facebook_end_time',
              'facebook_publication-event-field_facebook_location' => 'facebook_publication-event-field_facebook_location',
              'facebook_publication-event-field_facebook_location_id' => 'facebook_publication-event-field_facebook_location_id',
              'facebook_publication-event-field_facebook_name' => 'facebook_publication-event-field_facebook_name',
              'facebook_publication-event-field_facebook_privacy_type' => 'facebook_publication-event-field_facebook_privacy_type',
              'facebook_publication-event-field_facebook_start_time' => 'facebook_publication-event-field_facebook_start_time',
              'facebook_publication-post-field_facebook_actions' => 'facebook_publication-post-field_facebook_actions',
              'facebook_publication-post-field_facebook_caption' => 'facebook_publication-post-field_facebook_caption',
              'facebook_publication-post-field_facebook_description' => 'facebook_publication-post-field_facebook_description',
              'facebook_publication-post-field_facebook_link' => 'facebook_publication-post-field_facebook_link',
              'facebook_publication-post-field_facebook_message' => 'facebook_publication-post-field_facebook_message',
              'facebook_publication-post-field_facebook_name' => 'facebook_publication-post-field_facebook_name',
              'facebook_publication-post-field_facebook_picture' => 'facebook_publication-post-field_facebook_picture',
              'facebook_publication-post-field_facebook_published' => 'facebook_publication-post-field_facebook_published',
              'facebook_publication-post-field_facebook_scheduled_publish' => 'facebook_publication-post-field_facebook_scheduled_publish',
              'facebook_publication-post-field_facebook_targeting' => 'facebook_publication-post-field_facebook_targeting',
              'facebook_publication-link-field_facebook_link' => 'facebook_publication-link-field_facebook_link',
              'facebook_publication-link-field_facebook_message' => 'facebook_publication-link-field_facebook_message',
              'facebook_publication-link-field_facebook_published' => 'facebook_publication-link-field_facebook_published',
              'facebook_publication-link-field_facebook_scheduled_publish' => 'facebook_publication-link-field_facebook_scheduled_publish',
              'facebook_publication-note-field_facebook_message' => 'facebook_publication-note-field_facebook_message',
              'facebook_publication-note-field_facebook_subject' => 'facebook_publication-note-field_facebook_subject',
              'facebook_publication-photo-field_facebook_feed_targeting' => 'facebook_publication-photo-field_facebook_feed_targeting',
              'facebook_publication-photo-field_facebook_message' => 'facebook_publication-photo-field_facebook_message',
              'facebook_publication-photo-field_facebook_published' => 'facebook_publication-photo-field_facebook_published',
              'facebook_publication-photo-field_facebook_scheduled_publish' => 'facebook_publication-photo-field_facebook_scheduled_publish',
              'facebook_publication-photo-field_facebook_source' => 'facebook_publication-photo-field_facebook_source',
              'facebook_publication-photo-field_facebook_targeting' => 'facebook_publication-photo-field_facebook_targeting',
              'facebook_publication-status-field_facebook_message' => 'facebook_publication-status-field_facebook_message',
              'facebook_publication-status-field_facebook_published' => 'facebook_publication-status-field_facebook_published',
              'facebook_publication-status-field_facebook_scheduled_publish' => 'facebook_publication-status-field_facebook_scheduled_publish',
              'facebook_publication-question-field_facebook_allow_new_options' => 'facebook_publication-question-field_facebook_allow_new_options',
              'facebook_publication-question-field_facebook_options' => 'facebook_publication-question-field_facebook_options',
              'facebook_publication-question-field_facebook_published' => 'facebook_publication-question-field_facebook_published',
              'facebook_publication-question-field_facebook_question' => 'facebook_publication-question-field_facebook_question',
              'facebook_publication-question-field_facebook_scheduled_publish' => 'facebook_publication-question-field_facebook_scheduled_publish',
            ),
          ),
          'datestamp' => '1400138934',
        ),
        'schema_version' => 0,
        'project' => 'fb_autopost',
        'version' => '7.x-1.2',
      ),
      'fb_autopost' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/fb_autopost/fb_autopost.module',
        'basename' => 'fb_autopost.module',
        'name' => 'fb_autopost',
        'info' => 
        array (
          'name' => 'Facebook Autopost',
          'description' => 'Allows auto-posting to Facebook Fan Pages when publishing a node',
          'package' => 'Facebook Autopost',
          'core' => '7.x',
          'configure' => 'admin/config/services/fbautopost',
          'php' => '5.3',
          'dependencies' => 
          array (
            0 => 'fb_permissions',
            1 => 'libraries',
            2 => 'entity',
          ),
          'files' => 
          array (
            0 => 'class/FBAutopost.php',
            1 => 'class/FBAutopostException.php',
            2 => 'class/FBAutopostPhoto.php',
            3 => 'class/FBAutopostEvent.php',
            4 => 'class/FBAutopostPost.php',
            5 => 'class/FBSession.php',
          ),
          'version' => '7.x-1.2',
          'project' => 'fb_autopost',
          'datestamp' => '1400138934',
        ),
        'schema_version' => '7101',
        'project' => 'fb_autopost',
        'version' => '7.x-1.2',
      ),
      'search_api_views' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/search_api/contrib/search_api_views/search_api_views.module',
        'basename' => 'search_api_views.module',
        'name' => 'search_api_views',
        'info' => 
        array (
          'name' => 'Search views',
          'description' => 'Integrates the Search API with Views, enabling users to create views with searches as filters or arguments.',
          'dependencies' => 
          array (
            0 => 'search_api',
            1 => 'views',
          ),
          'core' => '7.x',
          'package' => 'Search',
          'files' => 
          array (
            0 => 'includes/display_facet_block.inc',
            1 => 'includes/handler_argument.inc',
            2 => 'includes/handler_argument_fulltext.inc',
            3 => 'includes/handler_argument_more_like_this.inc',
            4 => 'includes/handler_argument_string.inc',
            5 => 'includes/handler_argument_date.inc',
            6 => 'includes/handler_argument_taxonomy_term.inc',
            7 => 'includes/handler_filter.inc',
            8 => 'includes/handler_filter_boolean.inc',
            9 => 'includes/handler_filter_date.inc',
            10 => 'includes/handler_filter_entity.inc',
            11 => 'includes/handler_filter_fulltext.inc',
            12 => 'includes/handler_filter_language.inc',
            13 => 'includes/handler_filter_options.inc',
            14 => 'includes/handler_filter_taxonomy_term.inc',
            15 => 'includes/handler_filter_text.inc',
            16 => 'includes/handler_filter_user.inc',
            17 => 'includes/handler_sort.inc',
            18 => 'includes/plugin_cache.inc',
            19 => 'includes/query.inc',
          ),
          'version' => '7.x-1.13',
          'project' => 'search_api',
          'datestamp' => '1406105328',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'search_api',
        'version' => '7.x-1.13',
      ),
      'search_api_facetapi' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/search_api/contrib/search_api_facetapi/search_api_facetapi.module',
        'basename' => 'search_api_facetapi.module',
        'name' => 'search_api_facetapi',
        'info' => 
        array (
          'name' => 'Search facets',
          'description' => 'Integrate the Search API with the Facet API to provide facetted searches.',
          'dependencies' => 
          array (
            0 => 'search_api',
            1 => 'facetapi',
          ),
          'core' => '7.x',
          'package' => 'Search',
          'files' => 
          array (
            0 => 'plugins/facetapi/adapter.inc',
            1 => 'plugins/facetapi/query_type_term.inc',
            2 => 'plugins/facetapi/query_type_date.inc',
          ),
          'version' => '7.x-1.13',
          'project' => 'search_api',
          'datestamp' => '1406105328',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'search_api',
        'version' => '7.x-1.13',
      ),
      'search_api_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/search_api/tests/search_api_test.module',
        'basename' => 'search_api_test.module',
        'name' => 'search_api_test',
        'info' => 
        array (
          'name' => 'Search API test',
          'description' => 'Some dummy implementations for testing the Search API.',
          'core' => '7.x',
          'package' => 'Search',
          'dependencies' => 
          array (
            0 => 'search_api',
          ),
          'files' => 
          array (
            0 => 'search_api_test.module',
          ),
          'hidden' => true,
          'version' => '7.x-1.13',
          'project' => 'search_api',
          'datestamp' => '1406105328',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'search_api',
        'version' => '7.x-1.13',
      ),
      'search_api' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/search_api/search_api.module',
        'basename' => 'search_api.module',
        'name' => 'search_api',
        'info' => 
        array (
          'name' => 'Search API',
          'description' => 'Provides a generic API for modules offering search capabilites.',
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'core' => '7.x',
          'package' => 'Search',
          'files' => 
          array (
            0 => 'search_api.test',
            1 => 'includes/callback.inc',
            2 => 'includes/callback_add_aggregation.inc',
            3 => 'includes/callback_add_hierarchy.inc',
            4 => 'includes/callback_add_url.inc',
            5 => 'includes/callback_add_viewed_entity.inc',
            6 => 'includes/callback_bundle_filter.inc',
            7 => 'includes/callback_comment_access.inc',
            8 => 'includes/callback_language_control.inc',
            9 => 'includes/callback_node_access.inc',
            10 => 'includes/callback_node_status.inc',
            11 => 'includes/callback_role_filter.inc',
            12 => 'includes/datasource.inc',
            13 => 'includes/datasource_entity.inc',
            14 => 'includes/datasource_external.inc',
            15 => 'includes/exception.inc',
            16 => 'includes/index_entity.inc',
            17 => 'includes/processor.inc',
            18 => 'includes/processor_highlight.inc',
            19 => 'includes/processor_html_filter.inc',
            20 => 'includes/processor_ignore_case.inc',
            21 => 'includes/processor_stopwords.inc',
            22 => 'includes/processor_tokenizer.inc',
            23 => 'includes/processor_transliteration.inc',
            24 => 'includes/query.inc',
            25 => 'includes/server_entity.inc',
            26 => 'includes/service.inc',
          ),
          'configure' => 'admin/config/search/search_api',
          'version' => '7.x-1.13',
          'project' => 'search_api',
          'datestamp' => '1406105328',
          'php' => '5.2.4',
        ),
        'schema_version' => '7117',
        'project' => 'search_api',
        'version' => '7.x-1.13',
      ),
      'uuid_features' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/ajout-nt2/uuid_features/uuid_features.module',
        'basename' => 'uuid_features.module',
        'name' => 'uuid_features',
        'info' => 
        array (
          'name' => 'UUID Features',
          'description' => 'Provides features integration for content (nodes, taxonomy, etc) based on the UUID module.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'uuid',
            2 => 'entity',
          ),
          'package' => 'Features',
          'version' => '7.x-1.0-alpha4',
          'project' => 'uuid_features',
          'datestamp' => '1393064905',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'uuid_features',
        'version' => '7.x-1.0-alpha4',
      ),
      'i18nviews' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/i18nviews/i18nviews.module',
        'basename' => 'i18nviews.module',
        'name' => 'i18nviews',
        'info' => 
        array (
          'name' => 'Views translation',
          'description' => 'Translation of views strings and content selection for views. Requires Views 3.x',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18nviews.inc',
            1 => 'i18nviews.i18n.inc',
            2 => 'includes/i18nviews_handler_argument_taxonomy_index_tid.inc',
            3 => 'includes/i18nviews_handler_argument_taxonomy_term_name.inc',
            4 => 'includes/i18nviews_handler_argument_term_language.inc',
            5 => 'includes/i18nviews_handler_argument_term_node_tid_depth.inc',
            6 => 'includes/i18nviews_handler_field_taxonomy_term_description.inc',
            7 => 'includes/i18nviews_handler_field_taxonomy_term_language.inc',
            8 => 'includes/i18nviews_handler_field_taxonomy_term_name.inc',
            9 => 'includes/i18nviews_handler_field_term_node_tid.inc',
            10 => 'includes/i18nviews_handler_filter_field_list.inc',
            11 => 'includes/i18nviews_handler_filter_taxonomy_index_tid.inc',
            12 => 'includes/i18nviews_handler_filter_taxonomy_term_name.inc',
            13 => 'includes/i18nviews_handler_filter_taxonomy_term_language.inc',
            14 => 'includes/i18nviews_handler_filter_term_node_tid_depth.inc',
            15 => 'includes/i18nviews_plugin_argument_validate_i18n_taxonomy_term.inc',
            16 => 'includes/i18nviews_plugin_localization_i18nstrings.inc',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'i18nviews',
          'datestamp' => '1380582437',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18nviews',
        'version' => '7.x-3.x-dev',
      ),
      'html5_tools' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/html5_tools/html5_tools.module',
        'basename' => 'html5_tools.module',
        'name' => 'html5_tools',
        'info' => 
        array (
          'name' => 'HTML5 Tools',
          'description' => 'Provides a set of tools to allow sites to be built using HTML5.',
          'core' => '7.x',
          'php' => '5',
          'package' => 'Markup',
          'dependencies' => 
          array (
            0 => 'elements',
            1 => 'field',
          ),
          'configure' => 'admin/config/development/html5-tools',
          'version' => '7.x-1.2',
          'project' => 'html5_tools',
          'datestamp' => '1336411555',
        ),
        'schema_version' => 0,
        'project' => 'html5_tools',
        'version' => '7.x-1.2',
      ),
      'globalredirect' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/globalredirect/globalredirect.module',
        'basename' => 'globalredirect.module',
        'name' => 'globalredirect',
        'info' => 
        array (
          'name' => 'Global Redirect',
          'description' => 'Searches for an alias of the current URL and 301 redirects if found. Stops duplicate content arising when path module is enabled.',
          'package' => 'Path management',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'globalredirect.test',
          ),
          'configure' => 'admin/config/system/globalredirect',
          'version' => '7.x-1.5',
          'project' => 'globalredirect',
          'datestamp' => '1339748779',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'globalredirect',
        'version' => '7.x-1.5',
      ),
      'flowplayer' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/flowplayer/flowplayer.module',
        'basename' => 'flowplayer.module',
        'name' => 'flowplayer',
        'info' => 
        array (
          'name' => 'Flowplayer API',
          'description' => 'Provides integration with the Flowplayer video player.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'color',
          ),
          'files' => 
          array (
            0 => 'flowplayer.module',
          ),
          'configure' => 'admin/config/media/flowplayer',
          'version' => '7.x-1.0-alpha1',
          'project' => 'flowplayer',
          'datestamp' => '1301318168',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'flowplayer',
        'version' => '7.x-1.0-alpha1',
      ),
      'devel_themer' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/devel_themer/devel_themer.module',
        'basename' => 'devel_themer.module',
        'name' => 'devel_themer',
        'info' => 
        array (
          'name' => 'Theme developer',
          'description' => 'Essential theme API information for theme developers',
          'package' => 'Development',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'devel',
            1 => 'simplehtmldom',
          ),
          'configure' => 'admin/config/development/devel_themer',
          'files' => 
          array (
            0 => 'devel_themer.module',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'devel_themer',
          'datestamp' => '1380804859',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'project' => 'devel_themer',
        'version' => '7.x-1.x-dev',
      ),
      'uuid_path' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/uuid/uuid_path/uuid_path.module',
        'basename' => 'uuid_path.module',
        'name' => 'uuid_path',
        'info' => 
        array (
          'name' => 'UUID Path',
          'description' => 'Provides export functionality for url aliases.',
          'core' => '7.x',
          'package' => 'UUID',
          'dependencies' => 
          array (
            0 => 'uuid',
          ),
          'version' => '7.x-1.0-alpha5',
          'project' => 'uuid',
          'datestamp' => '1373620283',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha5',
      ),
      'uuid_services' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/uuid/uuid_services/uuid_services.module',
        'basename' => 'uuid_services.module',
        'name' => 'uuid_services',
        'info' => 
        array (
          'name' => 'UUID Services',
          'description' => 'Provides integration with the Services module, like exposing a UUID entity resource.',
          'core' => '7.x',
          'package' => 'Services - resources',
          'dependencies' => 
          array (
            0 => 'services',
            1 => 'uuid',
            2 => 'entity',
          ),
          'version' => '7.x-1.0-alpha5',
          'project' => 'uuid',
          'datestamp' => '1373620283',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha5',
      ),
      'uuid_default_entities_example' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/uuid/uuid_default_entities_example/uuid_default_entities_example.module',
        'basename' => 'uuid_default_entities_example.module',
        'name' => 'uuid_default_entities_example',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'features',
            2 => 'uuid',
          ),
          'description' => 'Example feature mainly used for testing.',
          'features' => 
          array (
            'uuid_entities' => 
            array (
              0 => 'deploy_example_plan',
            ),
          ),
          'name' => 'UUID default entities example',
          'package' => 'Features',
          'version' => '7.x-1.0-alpha5',
          'project' => 'uuid',
          'datestamp' => '1373620283',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha5',
      ),
      'uuid_services_example' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/uuid/uuid_services_example/uuid_services_example.module',
        'basename' => 'uuid_services_example.module',
        'name' => 'uuid_services_example',
        'info' => 
        array (
          'name' => 'UUID Services Example',
          'description' => 'Example feature of a UUID service. Works well with the Deploy Example feature as a client.',
          'core' => '7.x',
          'package' => 'Features',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'rest_server',
            1 => 'services',
            2 => 'uuid',
            3 => 'uuid_services',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'services:services:3',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'services_endpoint' => 
            array (
              0 => 'uuid_services_example',
            ),
          ),
          'version' => '7.x-1.0-alpha5',
          'project' => 'uuid',
          'datestamp' => '1373620283',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha5',
      ),
      'uuid' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/uuid/uuid.module',
        'basename' => 'uuid.module',
        'name' => 'uuid',
        'info' => 
        array (
          'name' => 'Universally Unique ID',
          'description' => 'Extends the entity functionality and adds support for universally unique identifiers.',
          'core' => '7.x',
          'package' => 'UUID',
          'configure' => 'admin/config/system/uuid',
          'files' => 
          array (
            0 => 'uuid.test',
          ),
          'version' => '7.x-1.0-alpha5',
          'project' => 'uuid',
          'datestamp' => '1373620283',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha5',
      ),
      'link' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/link/link.module',
        'basename' => 'link.module',
        'name' => 'link',
        'info' => 
        array (
          'name' => 'Link',
          'description' => 'Defines simple link field types.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'link.module',
            1 => 'link.migrate.inc',
            2 => 'tests/link.test',
            3 => 'tests/link.attribute.test',
            4 => 'tests/link.crud.test',
            5 => 'tests/link.crud_browser.test',
            6 => 'tests/link.token.test',
            7 => 'tests/link.validate.test',
            8 => 'views/link_views_handler_argument_target.inc',
            9 => 'views/link_views_handler_filter_protocol.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'link',
          'datestamp' => '1360444361',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'link',
        'version' => '7.x-1.1',
      ),
      'widgets_service_links' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/widgets/modules/widgets_service_links/widgets_service_links.module',
        'basename' => 'widgets_service_links.module',
        'name' => 'widgets_service_links',
        'info' => 
        array (
          'name' => 'Widgets Service links',
          'description' => 'Enables links from Service links module to be used as widget elements',
          'package' => 'Widgets',
          'dependencies' => 
          array (
            0 => 'widgets',
            1 => 'service_links',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-rc1',
          'project' => 'widgets',
          'datestamp' => '1346720847',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'widgets',
        'version' => '7.x-1.0-rc1',
      ),
      'widgets' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/widgets/widgets.module',
        'basename' => 'widgets.module',
        'name' => 'widgets',
        'info' => 
        array (
          'name' => 'Widgets',
          'description' => 'Enables easy management of code snipets like Twitter, Facebook and Google+ buttons.',
          'package' => 'Widgets',
          'core' => '7.x',
          'configure' => 'admin/structure/widgets-sets',
          'version' => '7.x-1.0-rc1',
          'project' => 'widgets',
          'datestamp' => '1346720847',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'widgets',
        'version' => '7.x-1.0-rc1',
      ),
      'scheduler' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/scheduler/scheduler.module',
        'basename' => 'scheduler.module',
        'name' => 'scheduler',
        'info' => 
        array (
          'name' => 'Scheduler',
          'description' => 'This module allows nodes to be published and unpublished on specified dates and time.',
          'core' => '7.x',
          'configure' => 'admin/config/content/scheduler',
          'files' => 
          array (
            0 => 'scheduler.install',
            1 => 'scheduler.module',
            2 => 'scheduler.views.inc',
            3 => 'scheduler.test',
            4 => 'scheduler_handler_field_scheduler_countdown.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'scheduler',
          'datestamp' => '1366294356',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'scheduler',
        'version' => '7.x-1.1',
      ),
      'conditional_styles_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/conditional_styles/tests/conditional_styles_test.module',
        'basename' => 'conditional_styles_test.module',
        'name' => 'conditional_styles_test',
        'info' => 
        array (
          'name' => 'Conditional Stylesheets Tests',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'conditional_styles',
          ),
          'files' => 
          array (
            0 => 'conditional_styles_test.module',
          ),
          'version' => '7.x-2.2',
          'project' => 'conditional_styles',
          'datestamp' => '1373559072',
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'conditional_styles',
        'version' => '7.x-2.2',
      ),
      'conditional_styles' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/conditional_styles/conditional_styles.module',
        'basename' => 'conditional_styles.module',
        'name' => 'conditional_styles',
        'info' => 
        array (
          'name' => 'Conditional Stylesheets',
          'description' => 'Allows themes to add conditional stylesheets.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'conditional_styles.install',
            1 => 'conditional_styles.module',
            2 => 'tests/conditional_styles.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'conditional_styles',
          'datestamp' => '1373559072',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'conditional_styles',
        'version' => '7.x-2.2',
      ),
      'apachesolr_access' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/apachesolr/apachesolr_access/apachesolr_access.module',
        'basename' => 'apachesolr_access.module',
        'name' => 'apachesolr_access',
        'info' => 
        array (
          'name' => 'Apache Solr Access',
          'description' => 'Integrates node access and other permissions with Apache Solr search',
          'dependencies' => 
          array (
            0 => 'apachesolr',
          ),
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'apachesolr_access.module',
            1 => 'tests/apachesolr_access.test',
          ),
          'version' => '7.x-1.6',
          'project' => 'apachesolr',
          'datestamp' => '1384712308',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'apachesolr',
        'version' => '7.x-1.6',
      ),
      'apachesolr_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/apachesolr/tests/apachesolr_test/apachesolr_test.module',
        'basename' => 'apachesolr_test.module',
        'name' => 'apachesolr_test',
        'info' => 
        array (
          'name' => 'Apache Solr helper module for tests',
          'description' => 'Support module for apachesolr module testing.',
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'apachesolr',
          ),
          'version' => '7.x-1.6',
          'project' => 'apachesolr',
          'datestamp' => '1384712308',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'apachesolr',
        'version' => '7.x-1.6',
      ),
      'apachesolr_search' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/apachesolr/apachesolr_search.module',
        'basename' => 'apachesolr_search.module',
        'name' => 'apachesolr_search',
        'info' => 
        array (
          'name' => 'Apache Solr search',
          'description' => 'Search with Solr',
          'dependencies' => 
          array (
            0 => 'search',
            1 => 'apachesolr',
          ),
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'configure' => 'admin/config/search/apachesolr/search-pages',
          'files' => 
          array (
            0 => 'apachesolr_search.install',
            1 => 'apachesolr_search.module',
            2 => 'apachesolr_search.admin.inc',
            3 => 'apachesolr_search.pages.inc',
          ),
          'version' => '7.x-1.6',
          'project' => 'apachesolr',
          'datestamp' => '1384712308',
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'project' => 'apachesolr',
        'version' => '7.x-1.6',
      ),
      'apachesolr' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/apachesolr/apachesolr.module',
        'basename' => 'apachesolr.module',
        'name' => 'apachesolr',
        'info' => 
        array (
          'name' => 'Apache Solr framework',
          'description' => 'Framework for searching with Solr',
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'configure' => 'admin/config/search/apachesolr/settings',
          'files' => 
          array (
            0 => 'apachesolr.install',
            1 => 'apachesolr.module',
            2 => 'apachesolr.admin.inc',
            3 => 'apachesolr.index.inc',
            4 => 'apachesolr.interface.inc',
            5 => 'Drupal_Apache_Solr_Service.php',
            6 => 'Apache_Solr_Document.php',
            7 => 'Solr_Base_Query.php',
            8 => 'plugins/facetapi/adapter.inc',
            9 => 'plugins/facetapi/query_type_date.inc',
            10 => 'plugins/facetapi/query_type_term.inc',
            11 => 'plugins/facetapi/query_type_numeric_range.inc',
            12 => 'plugins/facetapi/query_type_geo.inc',
            13 => 'tests/Dummy_Solr.php',
            14 => 'tests/apachesolr_base.test',
            15 => 'tests/solr_index_and_search.test',
            16 => 'tests/solr_base_query.test',
            17 => 'tests/solr_base_subquery.test',
            18 => 'tests/solr_document.test',
          ),
          'version' => '7.x-1.6',
          'project' => 'apachesolr',
          'datestamp' => '1384712308',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7017',
        'project' => 'apachesolr',
        'version' => '7.x-1.6',
      ),
      'entity_feature' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/entity/tests/entity_feature.module',
        'basename' => 'entity_feature.module',
        'name' => 'entity_feature',
        'info' => 
        array (
          'name' => 'Entity feature module',
          'description' => 'Provides some entities in code.',
          'version' => '7.x-1.2',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_feature.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
          'hidden' => true,
          'project' => 'entity',
          'datestamp' => '1376493705',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.2',
      ),
      'entity_test_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/entity/tests/entity_test_i18n.module',
        'basename' => 'entity_test_i18n.module',
        'name' => 'entity_test_i18n',
        'info' => 
        array (
          'name' => 'Entity-test type translation',
          'description' => 'Allows translating entity-test types.',
          'dependencies' => 
          array (
            0 => 'entity_test',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.2',
          'project' => 'entity',
          'datestamp' => '1376493705',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.2',
      ),
      'entity_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/entity/tests/entity_test.module',
        'basename' => 'entity_test.module',
        'name' => 'entity_test',
        'info' => 
        array (
          'name' => 'Entity CRUD test module',
          'description' => 'Provides entity types based upon the CRUD API.',
          'version' => '7.x-1.2',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_test.module',
            1 => 'entity_test.install',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'hidden' => true,
          'project' => 'entity',
          'datestamp' => '1376493705',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.2',
      ),
      'entity_token' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/entity/entity_token.module',
        'basename' => 'entity_token.module',
        'name' => 'entity_token',
        'info' => 
        array (
          'name' => 'Entity tokens',
          'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_token.tokens.inc',
            1 => 'entity_token.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.2',
          'project' => 'entity',
          'datestamp' => '1376493705',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.2',
      ),
      'entity' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'entity',
        'info' => 
        array (
          'name' => 'Entity API',
          'description' => 'Enables modules to work with any entity type and to provide entities.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity.features.inc',
            1 => 'entity.i18n.inc',
            2 => 'entity.info.inc',
            3 => 'entity.rules.inc',
            4 => 'entity.test',
            5 => 'includes/entity.inc',
            6 => 'includes/entity.controller.inc',
            7 => 'includes/entity.ui.inc',
            8 => 'includes/entity.wrapper.inc',
            9 => 'views/entity.views.inc',
            10 => 'views/handlers/entity_views_field_handler_helper.inc',
            11 => 'views/handlers/entity_views_handler_area_entity.inc',
            12 => 'views/handlers/entity_views_handler_field_boolean.inc',
            13 => 'views/handlers/entity_views_handler_field_date.inc',
            14 => 'views/handlers/entity_views_handler_field_duration.inc',
            15 => 'views/handlers/entity_views_handler_field_entity.inc',
            16 => 'views/handlers/entity_views_handler_field_field.inc',
            17 => 'views/handlers/entity_views_handler_field_numeric.inc',
            18 => 'views/handlers/entity_views_handler_field_options.inc',
            19 => 'views/handlers/entity_views_handler_field_text.inc',
            20 => 'views/handlers/entity_views_handler_field_uri.inc',
            21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
            22 => 'views/handlers/entity_views_handler_relationship.inc',
            23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
          ),
          'version' => '7.x-1.2',
          'project' => 'entity',
          'datestamp' => '1376493705',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entity',
        'version' => '7.x-1.2',
      ),
      'embeddable' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/embeddable/embeddable.module',
        'basename' => 'embeddable.module',
        'name' => 'embeddable',
        'info' => 
        array (
          'name' => 'embeddable',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'context',
            1 => 'entity_autocomplete',
          ),
          'version' => '7.x-1.0-alpha3',
          'project' => 'embeddable',
          'datestamp' => '1324406745',
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'embeddable',
        'version' => '7.x-1.0-alpha3',
      ),
      'custom_breadcrumbs_taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/custom_breadcrumbs/custom_breadcrumbs_taxonomy/custom_breadcrumbs_taxonomy.module',
        'basename' => 'custom_breadcrumbs_taxonomy.module',
        'name' => 'custom_breadcrumbs_taxonomy',
        'info' => 
        array (
          'name' => 'Custom breadcrumbs for taxonomy',
          'description' => 'Enables taxonomy based breadcrumbs and allows for node assosciations with taxonomy terms.',
          'package' => 'Custom breadcrumbs',
          'dependencies' => 
          array (
            0 => 'custom_breadcrumbs',
            1 => 'taxonomy',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/user-interface/custom-breadcrumbs',
          'files' => 
          array (
            0 => 'custom_breadcrumbs_taxonomy.admin.inc',
            1 => 'custom_breadcrumbs_taxonomy.inc',
            2 => 'custom_breadcrumbs_taxonomy.install',
            3 => 'custom_breadcrumbs_taxonomy.module',
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'custom_breadcrumbs',
          'datestamp' => '1353872502',
          'php' => '5.2.4',
        ),
        'schema_version' => '6200',
        'project' => 'custom_breadcrumbs',
        'version' => '7.x-2.0-alpha3',
      ),
      'custom_breadcrumbs_views' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/custom_breadcrumbs/custom_breadcrumbs_views/custom_breadcrumbs_views.module',
        'basename' => 'custom_breadcrumbs_views.module',
        'name' => 'custom_breadcrumbs_views',
        'info' => 
        array (
          'name' => 'Custom breadcrumbs for views',
          'package' => 'Custom breadcrumbs',
          'dependencies' => 
          array (
            0 => 'custom_breadcrumbs',
            1 => 'views',
          ),
          'description' => 'Provides custom breadcrumbs for views pages.',
          'core' => '7.x',
          'configure' => 'admin/config/user-interface/custom-breadcrumbs',
          'files' => 
          array (
            0 => 'custom_breadcrumbs_views.install',
            1 => 'custom_breadcrumbs_views.module',
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'custom_breadcrumbs',
          'datestamp' => '1353872502',
          'php' => '5.2.4',
        ),
        'schema_version' => '6200',
        'project' => 'custom_breadcrumbs',
        'version' => '7.x-2.0-alpha3',
      ),
      'custom_breadcrumbs_identifiers' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/custom_breadcrumbs/custom_breadcrumbs_identifiers/custom_breadcrumbs_identifiers.module',
        'basename' => 'custom_breadcrumbs_identifiers.module',
        'name' => 'custom_breadcrumbs_identifiers',
        'info' => 
        array (
          'name' => 'Custom breadcrumbs identifiers',
          'package' => 'Custom breadcrumbs',
          'description' => 'Provides special identifiers for custom breadcrumbs.',
          'dependencies' => 
          array (
            0 => 'custom_breadcrumbs',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/user-interface/custom-breadcrumbs',
          'files' => 
          array (
            0 => 'custom_breadcrumbs_identifiers.module',
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'custom_breadcrumbs',
          'datestamp' => '1353872502',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'custom_breadcrumbs',
        'version' => '7.x-2.0-alpha3',
      ),
      'custom_breadcrumbs_paths' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/custom_breadcrumbs/custom_breadcrumbs_paths/custom_breadcrumbs_paths.module',
        'basename' => 'custom_breadcrumbs_paths.module',
        'name' => 'custom_breadcrumbs_paths',
        'info' => 
        array (
          'name' => 'Custom breadcrumbs for paths',
          'package' => 'Custom breadcrumbs',
          'dependencies' => 
          array (
            0 => 'custom_breadcrumbs',
          ),
          'description' => 'Provides custom breadcrumbs for specific paths.',
          'core' => '7.x',
          'configure' => 'admin/config/user-interface/custom-breadcrumbs',
          'files' => 
          array (
            0 => 'custom_breadcrumbs_paths.install',
            1 => 'custom_breadcrumbs_paths.module',
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'custom_breadcrumbs',
          'datestamp' => '1353872502',
          'php' => '5.2.4',
        ),
        'schema_version' => '6200',
        'project' => 'custom_breadcrumbs',
        'version' => '7.x-2.0-alpha3',
      ),
      'custom_breadcrumbs_panels' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/custom_breadcrumbs/custom_breadcrumbs_panels/custom_breadcrumbs_panels.module',
        'basename' => 'custom_breadcrumbs_panels.module',
        'name' => 'custom_breadcrumbs_panels',
        'info' => 
        array (
          'name' => 'Custom breadcrumbs for panels',
          'package' => 'Custom breadcrumbs',
          'dependencies' => 
          array (
            0 => 'custom_breadcrumbs',
            1 => 'panels',
            2 => 'ctools',
            3 => 'page_manager',
          ),
          'description' => 'Provides custom breadcrumbs for panels pages.',
          'core' => '7.x',
          'configure' => 'admin/config/user-interface/custom-breadcrumbs',
          'files' => 
          array (
            0 => 'custom_breadcrumbs_panels.install',
            1 => 'custom_breadcrumbs_panels.module',
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'custom_breadcrumbs',
          'datestamp' => '1353872502',
          'php' => '5.2.4',
        ),
        'schema_version' => '6200',
        'project' => 'custom_breadcrumbs',
        'version' => '7.x-2.0-alpha3',
      ),
      'custom_breadcrumbsapi' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/custom_breadcrumbs/custom_breadcrumbsapi/custom_breadcrumbsapi.module',
        'basename' => 'custom_breadcrumbsapi.module',
        'name' => 'custom_breadcrumbsapi',
        'info' => 
        array (
          'name' => 'Custom breadcrumbs API',
          'package' => 'Custom breadcrumbs',
          'dependencies' => 
          array (
            0 => 'custom_breadcrumbs',
          ),
          'description' => 'Provides a simple API to set breadcrumbs on module pages not served by other custom breadcrumbs submodules.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'custom_breadcrumbsapi.install',
            1 => 'custom_breadcrumbsapi.module',
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'custom_breadcrumbs',
          'datestamp' => '1353872502',
          'php' => '5.2.4',
        ),
        'schema_version' => '6200',
        'project' => 'custom_breadcrumbs',
        'version' => '7.x-2.0-alpha3',
      ),
      'custom_breadcrumbs' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/custom_breadcrumbs/custom_breadcrumbs.module',
        'basename' => 'custom_breadcrumbs.module',
        'name' => 'custom_breadcrumbs',
        'info' => 
        array (
          'name' => 'Custom breadcrumbs',
          'package' => 'Custom breadcrumbs',
          'description' => 'Allows administrators to define custom breadcrumb trails for node types.',
          'core' => '7.x',
          'configure' => 'admin/config/user-interface/custom-breadcrumbs',
          'files' => 
          array (
            0 => 'custom_breadcrumbs.admin.inc',
            1 => 'custom_breadcrumbs.install',
            2 => 'custom_breadcrumbs.module',
            3 => 'custom_breadcrumbs_common.inc',
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'custom_breadcrumbs',
          'datestamp' => '1353872502',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'custom_breadcrumbs',
        'version' => '7.x-2.0-alpha3',
      ),
      'insight' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/insight/insight.module',
        'basename' => 'insight.module',
        'name' => 'insight',
        'info' => 
        array (
          'name' => 'Insight',
          'description' => 'Provides marketing insight integration',
          'package' => 'Insight',
          'core' => '7.x',
          'php' => '5.1',
          'dependencies' => 
          array (
            0 => 'contentanalysis',
          ),
          'configure' => 'admin/config/insight',
          'files' => 
          array (
            0 => 'insight.module',
            1 => 'insight.admin.inc',
          ),
          'version' => '7.x-1.0-alpha2',
          'project' => 'insight',
          'datestamp' => '1326409840',
        ),
        'schema_version' => 0,
        'project' => 'insight',
        'version' => '7.x-1.0-alpha2',
      ),
      'drupalforfirebug_preprocess' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/drupalforfirebug/drupalforfirebug_preprocess.module',
        'basename' => 'drupalforfirebug_preprocess.module',
        'name' => 'drupalforfirebug_preprocess',
        'info' => 
        array (
          'name' => 'Drupal for Firebug Preprocessor',
          'description' => 'A helper extension for the Drupal for Firebug Firefox extension to do preprocessing of forms',
          'package' => 'Development',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'drupalforfirebug_preprocess.info',
          ),
          'version' => '7.x-1.4',
          'project' => 'drupalforfirebug',
          'datestamp' => '1351752371',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupalforfirebug',
        'version' => '7.x-1.4',
      ),
      'drupalforfirebug' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/drupalforfirebug/drupalforfirebug.module',
        'basename' => 'drupalforfirebug.module',
        'name' => 'drupalforfirebug',
        'info' => 
        array (
          'name' => 'Drupal for Firebug',
          'description' => 'A helper extension for the Drupal for Firebug Firefox extension addon',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'drupalforfirebug_preprocess',
          ),
          'files' => 
          array (
            0 => 'drupalforfirebug.module',
          ),
          'core' => '7.x',
          'version' => '7.x-1.4',
          'project' => 'drupalforfirebug',
          'datestamp' => '1351752371',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupalforfirebug',
        'version' => '7.x-1.4',
      ),
      'gravatar' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/gravatar/gravatar.module',
        'basename' => 'gravatar.module',
        'name' => 'gravatar',
        'info' => 
        array (
          'name' => 'Gravatar',
          'description' => 'Integrate Gravatar pictures registered at Gravatar.com in Drupal sites',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'gravatar.module',
            1 => 'gravatar.install',
            2 => 'gravatar.admin.inc',
          ),
          'configure' => 'admin/config/people/gravatar',
          'version' => '7.x-1.1',
          'project' => 'gravatar',
          'datestamp' => '1297971182',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6000',
        'project' => 'gravatar',
        'version' => '7.x-1.1',
      ),
      'file_styles' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/styles/contrib/file_styles/file_styles.module',
        'basename' => 'file_styles.module',
        'name' => 'file_styles',
        'info' => 
        array (
          'name' => 'File Styles',
          'description' => 'Allows preset transformation of files and media for display.',
          'package' => 'Styles',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'file_styles.module',
            1 => 'file_styles.admin.inc',
            2 => 'includes/styles/FileStyles.inc',
          ),
          'dependencies' => 
          array (
            0 => 'styles',
            1 => 'image',
          ),
          'version' => '7.x-2.0-alpha8',
          'project' => 'styles',
          'datestamp' => '1306964517',
          'php' => '5.2.4',
        ),
        'schema_version' => '7210',
        'project' => 'styles',
        'version' => '7.x-2.0-alpha8',
      ),
      'styles_ui' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/styles/contrib/styles_ui/styles_ui.module',
        'basename' => 'styles_ui.module',
        'name' => 'styles_ui',
        'info' => 
        array (
          'name' => 'Styles UI',
          'description' => 'Allows administration of the Styles modules.',
          'package' => 'Styles',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'styles_ui.admin.inc',
          ),
          'dependencies' => 
          array (
            0 => 'styles',
          ),
          'version' => '7.x-2.0-alpha8',
          'project' => 'styles',
          'datestamp' => '1306964517',
          'php' => '5.2.4',
        ),
        'schema_version' => '7206',
        'project' => 'styles',
        'version' => '7.x-2.0-alpha8',
      ),
      'styles' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/styles/styles.module',
        'basename' => 'styles.module',
        'name' => 'styles',
        'info' => 
        array (
          'name' => 'Styles',
          'description' => 'Bundles similar display formatters together.',
          'package' => 'Styles',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'styles.module',
            1 => 'includes/Styles.inc',
          ),
          'version' => '7.x-2.0-alpha8',
          'project' => 'styles',
          'datestamp' => '1306964517',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7215',
        'project' => 'styles',
        'version' => '7.x-2.0-alpha8',
      ),
      'cck_blocks' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/cck_blocks/cck_blocks.module',
        'basename' => 'cck_blocks.module',
        'name' => 'cck_blocks',
        'info' => 
        array (
          'name' => 'CCK Blocks',
          'description' => 'Shows CCK fields as block.',
          'package' => 'CCK',
          'version' => '7.x-1.1',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'cck_blocks.install',
            1 => 'cck_blocks.module',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'project' => 'cck_blocks',
          'datestamp' => '1323070537',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'cck_blocks',
        'version' => '7.x-1.1',
      ),
      'image_captcha' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/captcha/image_captcha/image_captcha.module',
        'basename' => 'image_captcha.module',
        'name' => 'image_captcha',
        'info' => 
        array (
          'name' => 'Image CAPTCHA',
          'description' => 'Provides an image based CAPTCHA.',
          'package' => 'Spam control',
          'dependencies' => 
          array (
            0 => 'captcha',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/people/captcha/image_captcha',
          'files' => 
          array (
            0 => 'image_captcha.install',
            1 => 'image_captcha.module',
            2 => 'image_captcha.admin.inc',
            3 => 'image_captcha.user.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'captcha',
          'datestamp' => '1372203950',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'captcha',
        'version' => '7.x-1.0',
      ),
      'captcha' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/captcha/captcha.module',
        'basename' => 'captcha.module',
        'name' => 'captcha',
        'info' => 
        array (
          'name' => 'CAPTCHA',
          'description' => 'Base CAPTCHA module for adding challenges to arbitrary forms.',
          'package' => 'Spam control',
          'core' => '7.x',
          'configure' => 'admin/config/people/captcha',
          'files' => 
          array (
            0 => 'captcha.module',
            1 => 'captcha.inc',
            2 => 'captcha.admin.inc',
            3 => 'captcha.install',
            4 => 'captcha.test',
          ),
          'version' => '7.x-1.0',
          'project' => 'captcha',
          'datestamp' => '1372203950',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'captcha',
        'version' => '7.x-1.0',
      ),
      'jcarousel' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/jcarousel/jcarousel.module',
        'basename' => 'jcarousel.module',
        'name' => 'jcarousel',
        'info' => 
        array (
          'name' => 'jCarousel',
          'description' => 'Create jQuery-based carousel rotators.',
          'package' => 'User interface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jcarousel.module',
            1 => 'includes/jcarousel.views.inc',
            2 => 'includes/jcarousel_style_plugin.inc',
          ),
          'version' => '7.x-2.6',
          'project' => 'jcarousel',
          'datestamp' => '1322116852',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'jcarousel',
        'version' => '7.x-2.6',
      ),
      'og_access' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/og/og_access/og_access.module',
        'basename' => 'og_access.module',
        'name' => 'og_access',
        'info' => 
        array (
          'name' => 'Organic groups access control',
          'description' => 'Enable access control for private and public groups and group content.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
          ),
          'core' => '7.x',
          'version' => '7.x-2.4',
          'files' => 
          array (
            0 => 'og_access.module',
            1 => 'og_access.install',
            2 => 'og_access.test',
          ),
          'project' => 'og',
          'datestamp' => '1384971519',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'og',
        'version' => '7.x-2.4',
      ),
      'og_field_access' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/og/og_field_access/og_field_access.module',
        'basename' => 'og_field_access.module',
        'name' => 'og_field_access',
        'info' => 
        array (
          'name' => 'Organic groups field access',
          'description' => 'Provide field access based on group.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'og_field_access.module',
            1 => 'og_field_access.test',
          ),
          'version' => '7.x-2.4',
          'project' => 'og',
          'datestamp' => '1384971519',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'og',
        'version' => '7.x-2.4',
      ),
      'og_context' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/og/og_context/og_context.module',
        'basename' => 'og_context.module',
        'name' => 'og_context',
        'info' => 
        array (
          'name' => 'Organic groups context',
          'description' => 'Get a group from a viewed page.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'og_context.module',
            1 => 'og_context.install',
            2 => 'includes/views/handlers/og_context_plugin_argument_default_group_context.inc',
            3 => 'includes/views/handlers/og_context_plugin_access_og_perm.inc',
          ),
          'version' => '7.x-2.4',
          'project' => 'og',
          'datestamp' => '1384971519',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'og',
        'version' => '7.x-2.4',
      ),
      'og_example' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/og/og_example/og_example.module',
        'basename' => 'og_example.module',
        'name' => 'og_example',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'entityreference_prepopulate',
            2 => 'features',
            3 => 'list',
            4 => 'message_notify',
            5 => 'og',
            6 => 'og_ui',
            7 => 'page_manager',
            8 => 'panels',
            9 => 'rules',
            10 => 'views_content',
          ),
          'description' => 'Example module to show Organic groups configuration that can be used as building block.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'page_manager:pages_default:1',
            ),
            'field' => 
            array (
              0 => 'message-og_new_content-field_node_reference',
              1 => 'node-group-body',
              2 => 'node-group-group_group',
              3 => 'node-post-body',
              4 => 'node-post-og_group_ref',
              5 => 'node-post-og_group_ref_other_groups',
            ),
            'message_type' => 
            array (
              0 => 'og_new_content',
            ),
            'node' => 
            array (
              0 => 'group',
              1 => 'post',
            ),
            'page_manager_handlers' => 
            array (
              0 => 'node_view_panel_context',
            ),
            'rules_config' => 
            array (
              0 => 'rules_og_new_content_message',
            ),
          ),
          'name' => 'OG example',
          'package' => 'Features',
          'php' => '5.2.4',
          'version' => '7.x-2.4',
          'project' => 'og',
          'datestamp' => '1384971519',
        ),
        'schema_version' => 0,
        'project' => 'og',
        'version' => '7.x-2.4',
      ),
      'og_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/og/tests/og_test.module',
        'basename' => 'og_test.module',
        'name' => 'og_test',
        'info' => 
        array (
          'name' => 'OG test module',
          'description' => 'Functionality to assist OG testing.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'og',
          ),
          'hidden' => true,
          'version' => '7.x-2.4',
          'project' => 'og',
          'datestamp' => '1384971519',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'og',
        'version' => '7.x-2.4',
      ),
      'og_register' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/og/og_register/og_register.module',
        'basename' => 'og_register.module',
        'name' => 'og_register',
        'info' => 
        array (
          'name' => 'Organic groups register',
          'description' => 'Allow subscribing to groups during the user registration.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'og_register.module',
            1 => 'og_register.install',
          ),
          'version' => '7.x-2.4',
          'project' => 'og',
          'datestamp' => '1384971519',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'og',
        'version' => '7.x-2.4',
      ),
      'og_ui' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/og/og_ui/og_ui.module',
        'basename' => 'og_ui.module',
        'name' => 'og_ui',
        'info' => 
        array (
          'name' => 'Organic groups UI',
          'description' => 'Organic groups UI.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
            1 => 'views_bulk_operations',
          ),
          'core' => '7.x',
          'version' => '7.x-2.4',
          'files' => 
          array (
            0 => 'og_ui.test',
            1 => 'includes/views/handlers/og_ui_handler_area_og_membership_overview.inc',
            2 => 'includes/migrate/7000/add_field.inc',
            3 => 'includes/migrate/7000/populate_field.inc',
            4 => 'includes/migrate/7000/set_roles.inc',
          ),
          'configure' => 'admin/config/group',
          'project' => 'og',
          'datestamp' => '1384971519',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'og',
        'version' => '7.x-2.4',
      ),
      'og' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/og/og.module',
        'basename' => 'og.module',
        'name' => 'og',
        'info' => 
        array (
          'name' => 'Organic groups',
          'description' => 'API to allow associating content with groups.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'options',
            1 => 'list',
            2 => 'text',
            3 => 'entity',
            4 => 'entityreference',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'og.info.inc',
            1 => 'includes/og.admin.inc',
            2 => 'includes/og.exception.inc',
            3 => 'includes/og.membership.inc',
            4 => 'includes/og.membership_type.inc',
            5 => 'includes/views/og.views.inc',
            6 => 'og.test',
            7 => 'includes/views/handlers/og_plugin_argument_validate_group.inc',
            8 => 'includes/views/handlers/og_plugin_argument_default_user_groups.inc',
            9 => 'includes/views/handlers/og_handler_field_group_member_count.inc',
            10 => 'includes/views/handlers/og_handler_field_group_audience_state.inc',
            11 => 'includes/views/handlers/og_handler_field_prerender_list.inc',
            12 => 'includes/views/handlers/og_handler_field_user_roles.inc',
            13 => 'includes/views/handlers/og_handler_field_group_permissions.inc',
            14 => 'includes/views/handlers/og_handler_field_og_membership_link_edit.inc',
            15 => 'includes/views/handlers/og_handler_filter_group_audience_state.inc',
            16 => 'includes/views/handlers/og_handler_filter_user_roles.inc',
            17 => 'includes/views/handlers/og_handler_relationship.inc',
            18 => 'includes/migrate/plugins/destinations/og_membership.inc',
            19 => 'includes/migrate/7000/og_add_fields.inc',
            20 => 'includes/migrate/7000/og_content.inc',
            21 => 'includes/migrate/7000/og_group.inc',
            22 => 'includes/migrate/7000/og_user.inc',
            23 => 'includes/migrate/7000/og_ogur_roles.migrate.inc',
            24 => 'includes/migrate/7000/og_ogur.migrate.inc',
            25 => 'includes/migrate/og.migrate.inc',
            26 => 'includes/migrate/7200/og_og_membership.migrate.inc',
            27 => 'includes/migrate/7200/og_roles.migrate.inc',
            28 => 'includes/migrate/7200/og_user_roles.migrate.inc',
          ),
          'version' => '7.x-2.4',
          'project' => 'og',
          'datestamp' => '1384971519',
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'project' => 'og',
        'version' => '7.x-2.4',
      ),
      'simplehtmldom' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/simplehtmldom/simplehtmldom.module',
        'basename' => 'simplehtmldom.module',
        'name' => 'simplehtmldom',
        'info' => 
        array (
          'name' => 'simplehtmldom API',
          'description' => 'A wrapper module around the simplehtmldom PHP library at sourceforge.',
          'package' => 'Filter',
          'core' => '7.x',
          'version' => '7.x-1.12',
          'project' => 'simplehtmldom',
          'datestamp' => '1307968619',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'simplehtmldom',
        'version' => '7.x-1.12',
      ),
      'current_search' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/facetapi/contrib/current_search/current_search.module',
        'basename' => 'current_search.module',
        'name' => 'current_search',
        'info' => 
        array (
          'name' => 'Current Search Blocks',
          'description' => 'Provides an interface for creating blocks containing information about the current search.',
          'dependencies' => 
          array (
            0 => 'facetapi',
          ),
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/current_search/item.inc',
            1 => 'plugins/current_search/item_active.inc',
            2 => 'plugins/current_search/item_group.inc',
            3 => 'plugins/current_search/item_text.inc',
            4 => 'tests/current_search.test',
          ),
          'configure' => 'admin/config/search/current_search',
          'version' => '7.x-1.3',
          'project' => 'facetapi',
          'datestamp' => '1364861711',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'facetapi',
        'version' => '7.x-1.3',
      ),
      'facetapi_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/facetapi/tests/facetapi_test.module',
        'basename' => 'facetapi_test.module',
        'name' => 'facetapi_test',
        'info' => 
        array (
          'name' => 'Facet API Test',
          'description' => 'Provides a test adapter and plugins.',
          'dependencies' => 
          array (
            0 => 'facetapi',
          ),
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.3',
          'project' => 'facetapi',
          'datestamp' => '1364861711',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'facetapi',
        'version' => '7.x-1.3',
      ),
      'facetapi' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/facetapi/facetapi.module',
        'basename' => 'facetapi.module',
        'name' => 'facetapi',
        'info' => 
        array (
          'name' => 'Facet API',
          'description' => 'An abstracted facet API that can be used by various search backends.',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/facetapi/adapter.inc',
            1 => 'plugins/facetapi/dependency.inc',
            2 => 'plugins/facetapi/dependency_bundle.inc',
            3 => 'plugins/facetapi/dependency_role.inc',
            4 => 'plugins/facetapi/empty_behavior.inc',
            5 => 'plugins/facetapi/empty_behavior_text.inc',
            6 => 'plugins/facetapi/filter.inc',
            7 => 'plugins/facetapi/query_type.inc',
            8 => 'plugins/facetapi/url_processor.inc',
            9 => 'plugins/facetapi/url_processor_standard.inc',
            10 => 'plugins/facetapi/widget.inc',
            11 => 'plugins/facetapi/widget_links.inc',
            12 => 'tests/facetapi_test.plugins.inc',
            13 => 'tests/facetapi.test',
          ),
          'version' => '7.x-1.3',
          'project' => 'facetapi',
          'datestamp' => '1364861711',
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'project' => 'facetapi',
        'version' => '7.x-1.3',
      ),
      'flexslider_example' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/flexslider/flexslider_example/flexslider_example.module',
        'basename' => 'flexslider_example.module',
        'name' => 'flexslider_example',
        'info' => 
        array (
          'name' => 'FlexSlider Example',
          'description' => 'Sample implementation of FlexSlider',
          'core' => '7.x',
          'package' => 'FlexSlider',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'context',
            1 => 'features',
            2 => 'flexslider',
            3 => 'flexslider_fields',
            4 => 'flexslider_views',
            5 => 'image',
            6 => 'menu',
            7 => 'strongarm',
            8 => 'views',
          ),
          'features' => 
          array (
            'context' => 
            array (
              0 => 'flexslider_example_thumbnail',
            ),
            'ctools' => 
            array (
              0 => 'context:context:3',
              1 => 'flexslider:flexslider_default_preset:1',
              2 => 'strongarm:strongarm:1',
              3 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'node-flexslider_example-field_flexslider_example_image',
              1 => 'node-flexslider_example-field_flexslider_example_slidesh',
            ),
            'flexslider_optionset' => 
            array (
              0 => 'flexslider_carousel_with_min_and_max_ranges',
              1 => 'flexslider_default_basic_carousel',
              2 => 'flexslider_default_slider_thumbnail_controlnav',
              3 => 'flexslider_default_slider_w_thumbnail_slider',
              4 => 'flexslider_default_thumbnail_captions',
              5 => 'flexslider_default_thumbnail_slider',
            ),
            'menu_custom' => 
            array (
              0 => 'menu-flexslider-example',
            ),
            'node' => 
            array (
              0 => 'flexslider_example',
            ),
            'variable' => 
            array (
              0 => 'field_bundle_settings_node__flexslider_example',
            ),
            'views_view' => 
            array (
              0 => 'flexslider_views_example',
            ),
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'flexslider',
          'datestamp' => '1378663043',
        ),
        'schema_version' => '7001',
        'project' => 'flexslider',
        'version' => '7.x-2.0-alpha3',
      ),
      'flexslider_views' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/flexslider/flexslider_views/flexslider_views.module',
        'basename' => 'flexslider_views.module',
        'name' => 'flexslider_views',
        'info' => 
        array (
          'name' => 'FlexSlider Views Style',
          'description' => 'Adds a Views style plugin for FlexSlider',
          'core' => '7.x',
          'package' => 'FlexSlider',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'flexslider',
          ),
          'files' => 
          array (
            0 => 'flexslider_views.module',
            1 => 'flexslider_views.views.inc',
            2 => 'flexslider_views_plugin_style_flexslider.inc',
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'flexslider',
          'datestamp' => '1378663043',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'flexslider',
        'version' => '7.x-2.0-alpha3',
      ),
      'flexslider_fields' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/flexslider/flexslider_fields/flexslider_fields.module',
        'basename' => 'flexslider_fields.module',
        'name' => 'flexslider_fields',
        'info' => 
        array (
          'name' => 'FlexSlider Fields',
          'description' => 'Adds a display mode in Fields for FlexSlider',
          'core' => '7.x',
          'package' => 'FlexSlider',
          'dependencies' => 
          array (
            0 => 'flexslider',
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'flexslider',
          'datestamp' => '1378663043',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'flexslider',
        'version' => '7.x-2.0-alpha3',
      ),
      'flexslider' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/flexslider/flexslider.module',
        'basename' => 'flexslider.module',
        'name' => 'flexslider',
        'info' => 
        array (
          'name' => 'FlexSlider',
          'description' => 'Integrate the FlexSlider 2 library with Drupal',
          'core' => '7.x',
          'package' => 'FlexSlider',
          'dependencies' => 
          array (
            0 => 'libraries (>=2.x)',
            1 => 'ctools',
            2 => 'image',
          ),
          'files' => 
          array (
            0 => 'theme/flexslider.theme.inc',
            1 => 'flexslider.test',
          ),
          'configure' => 'admin/config/media/flexslider',
          'version' => '7.x-2.0-alpha3',
          'project' => 'flexslider',
          'datestamp' => '1378663043',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'flexslider',
        'version' => '7.x-2.0-alpha3',
      ),
      'taxonomy_manager' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/taxonomy_manager/taxonomy_manager.module',
        'basename' => 'taxonomy_manager.module',
        'name' => 'taxonomy_manager',
        'info' => 
        array (
          'name' => 'Taxonomy Manager',
          'description' => 'Tool for administrating taxonomy terms.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'files' => 
          array (
            0 => 'taxonomy_manager.admin.inc',
          ),
          'configure' => 'admin/config/user-interface/taxonomy-manager-settings',
          'package' => 'Taxonomy',
          'version' => '7.x-1.0',
          'project' => 'taxonomy_manager',
          'datestamp' => '1369041918',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'taxonomy_manager',
        'version' => '7.x-1.0',
      ),
      'flexslider_views_slideshow' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/flexslider_views_slideshow/flexslider_views_slideshow.module',
        'basename' => 'flexslider_views_slideshow.module',
        'name' => 'flexslider_views_slideshow',
        'info' => 
        array (
          'name' => 'FlexSlider Views Slideshow',
          'description' => 'NOT FUNCTIONAL - Integrate the FlexSlider library with Views Slideshow',
          'core' => '7.x',
          'package' => 'FlexSlider',
          'dependencies' => 
          array (
            0 => 'flexslider',
            1 => 'views_slideshow',
          ),
          'files' => 
          array (
            0 => 'flexslider_views_slideshow.module',
            1 => 'flexslider_views_slideshow.views_slideshow.inc',
            2 => 'theme/flexslider_views_slideshow.theme.inc',
          ),
          'version' => '7.x-2.x-dev',
          'project' => 'flexslider_views_slideshow',
          'datestamp' => '1380579618',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'flexslider_views_slideshow',
        'version' => '7.x-2.x-dev',
      ),
      'views_bulk_operations' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/views_bulk_operations/views_bulk_operations.module',
        'basename' => 'views_bulk_operations.module',
        'name' => 'views_bulk_operations',
        'info' => 
        array (
          'name' => 'Views Bulk Operations',
          'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'views',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/operation_types/base.class.php',
            1 => 'views/views_bulk_operations_handler_field_operations.inc',
          ),
          'version' => '7.x-3.1',
          'project' => 'views_bulk_operations',
          'datestamp' => '1354500015',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_bulk_operations',
        'version' => '7.x-3.1',
      ),
      'actions_permissions' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/views_bulk_operations/actions_permissions.module',
        'basename' => 'actions_permissions.module',
        'name' => 'actions_permissions',
        'info' => 
        array (
          'name' => 'Actions permissions (VBO)',
          'description' => 'Provides permission-based access control for actions. Used by Views Bulk Operations.',
          'package' => 'Administration',
          'core' => '7.x',
          'version' => '7.x-3.1',
          'project' => 'views_bulk_operations',
          'datestamp' => '1354500015',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_bulk_operations',
        'version' => '7.x-3.1',
      ),
      'migrate_example_baseball' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/migrate/migrate_example_baseball/migrate_example_baseball.module',
        'basename' => 'migrate_example_baseball.module',
        'name' => 'migrate_example_baseball',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'migrate',
            2 => 'number',
          ),
          'description' => 'Import baseball box scores.',
          'features' => 
          array (
            'field' => 
            array (
              0 => 'node-migrate_example_baseball-body',
              1 => 'node-migrate_example_baseball-field_attendance',
              2 => 'node-migrate_example_baseball-field_duration',
              3 => 'node-migrate_example_baseball-field_home_batters',
              4 => 'node-migrate_example_baseball-field_home_game_number',
              5 => 'node-migrate_example_baseball-field_home_pitcher',
              6 => 'node-migrate_example_baseball-field_home_score',
              7 => 'node-migrate_example_baseball-field_home_team',
              8 => 'node-migrate_example_baseball-field_outs',
              9 => 'node-migrate_example_baseball-field_park',
              10 => 'node-migrate_example_baseball-field_start_date',
              11 => 'node-migrate_example_baseball-field_visiting_batters',
              12 => 'node-migrate_example_baseball-field_visiting_pitcher',
              13 => 'node-migrate_example_baseball-field_visiting_score',
              14 => 'node-migrate_example_baseball-field_visiting_team',
            ),
            'node' => 
            array (
              0 => 'migrate_example_baseball',
            ),
          ),
          'files' => 
          array (
            0 => 'migrate_example_baseball.migrate.inc',
          ),
          'name' => 'migrate_example_baseball',
          'package' => 'Migration',
          'php' => '5.2.4',
          'version' => '7.x-2.6-rc1+19-dev',
          'project' => 'migrate',
          'datestamp' => '1384192435',
        ),
        'schema_version' => '7201',
        'project' => 'migrate',
        'version' => '7.x-2.6-rc1+19-dev',
      ),
      'migrate_ui' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/migrate/migrate_ui/migrate_ui.module',
        'basename' => 'migrate_ui.module',
        'name' => 'migrate_ui',
        'info' => 
        array (
          'name' => 'Migrate UI',
          'description' => 'UI for managing migration processes',
          'package' => 'Migration',
          'configure' => 'admin/content/migrate/configure',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'migrate',
          ),
          'files' => 
          array (
            0 => 'migrate_ui.wizard.inc',
          ),
          'version' => '7.x-2.6-rc1+19-dev',
          'project' => 'migrate',
          'datestamp' => '1384192435',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'migrate',
        'version' => '7.x-2.6-rc1+19-dev',
      ),
      'migrate_example_oracle' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/migrate/migrate_example/migrate_example_oracle/migrate_example_oracle.module',
        'basename' => 'migrate_example_oracle.module',
        'name' => 'migrate_example_oracle',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'image',
            2 => 'migrate',
          ),
          'description' => 'Content type supporting example of Oracle migration',
          'features' => 
          array (
            'field' => 
            array (
              0 => 'node-migrate_example_oracle-body',
              1 => 'node-migrate_example_oracle-field_mainimage',
            ),
            'node' => 
            array (
              0 => 'migrate_example_oracle',
            ),
          ),
          'files' => 
          array (
            0 => 'migrate_example_oracle.migrate.inc',
          ),
          'name' => 'Migrate example - Oracle',
          'package' => 'Migration',
          'project' => 'migrate',
          'version' => '7.x-2.6-rc1+19-dev',
          'datestamp' => '1384192435',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'migrate',
        'version' => '7.x-2.6-rc1+19-dev',
      ),
      'migrate_example' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/migrate/migrate_example/migrate_example.module',
        'basename' => 'migrate_example.module',
        'name' => 'migrate_example',
        'info' => 
        array (
          'name' => 'Migrate Example',
          'description' => 'Example migration data.',
          'package' => 'Migration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'image',
            2 => 'comment',
            3 => 'migrate',
            4 => 'list',
            5 => 'number',
          ),
          'files' => 
          array (
            0 => 'migrate_example.module',
            1 => 'beer.inc',
            2 => 'wine.inc',
          ),
          'version' => '7.x-2.6-rc1+19-dev',
          'project' => 'migrate',
          'datestamp' => '1384192435',
          'php' => '5.2.4',
        ),
        'schema_version' => '7007',
        'project' => 'migrate',
        'version' => '7.x-2.6-rc1+19-dev',
      ),
      'migrate' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/migrate/migrate.module',
        'basename' => 'migrate.module',
        'name' => 'migrate',
        'info' => 
        array (
          'name' => 'Migrate',
          'description' => 'Import content from external sources',
          'package' => 'Migration',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/base.inc',
            1 => 'includes/field_mapping.inc',
            2 => 'includes/migration.inc',
            3 => 'includes/destination.inc',
            4 => 'includes/exception.inc',
            5 => 'includes/group.inc',
            6 => 'includes/handler.inc',
            7 => 'includes/map.inc',
            8 => 'includes/source.inc',
            9 => 'includes/team.inc',
            10 => 'migrate.mail.inc',
            11 => 'plugins/destinations/entity.inc',
            12 => 'plugins/destinations/term.inc',
            13 => 'plugins/destinations/user.inc',
            14 => 'plugins/destinations/node.inc',
            15 => 'plugins/destinations/comment.inc',
            16 => 'plugins/destinations/file.inc',
            17 => 'plugins/destinations/path.inc',
            18 => 'plugins/destinations/fields.inc',
            19 => 'plugins/destinations/poll.inc',
            20 => 'plugins/destinations/table.inc',
            21 => 'plugins/destinations/table_copy.inc',
            22 => 'plugins/destinations/menu.inc',
            23 => 'plugins/destinations/menu_links.inc',
            24 => 'plugins/destinations/statistics.inc',
            25 => 'plugins/sources/csv.inc',
            26 => 'plugins/sources/files.inc',
            27 => 'plugins/sources/json.inc',
            28 => 'plugins/sources/list.inc',
            29 => 'plugins/sources/multiitems.inc',
            30 => 'plugins/sources/sql.inc',
            31 => 'plugins/sources/sqlmap.inc',
            32 => 'plugins/sources/mssql.inc',
            33 => 'plugins/sources/oracle.inc',
            34 => 'plugins/sources/xml.inc',
            35 => 'tests/import/options.test',
            36 => 'tests/plugins/destinations/comment.test',
            37 => 'tests/plugins/destinations/node.test',
            38 => 'tests/plugins/destinations/table.test',
            39 => 'tests/plugins/destinations/term.test',
            40 => 'tests/plugins/destinations/user.test',
            41 => 'tests/plugins/sources/xml.test',
          ),
          'version' => '7.x-2.6-rc1+19-dev',
          'project' => 'migrate',
          'datestamp' => '1384192435',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7207',
        'project' => 'migrate',
        'version' => '7.x-2.6-rc1+19-dev',
      ),
      'i18n_field' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/i18n/i18n_field/i18n_field.module',
        'basename' => 'i18n_field.module',
        'name' => 'i18n_field',
        'info' => 
        array (
          'name' => 'Field translation',
          'description' => 'Translate field properties',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_field.inc',
            1 => 'i18n_field.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_sync' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/i18n/i18n_sync/i18n_sync.module',
        'basename' => 'i18n_sync.module',
        'name' => 'i18n_sync',
        'info' => 
        array (
          'name' => 'Synchronize translations',
          'description' => 'Synchronizes taxonomy and fields accross translations of the same content.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_sync.module',
            1 => 'i18n_sync.install',
            2 => 'i18n_sync.module.inc',
            3 => 'i18n_sync.node.inc',
            4 => 'i18n_sync.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_string' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/i18n/i18n_string/i18n_string.module',
        'basename' => 'i18n_string.module',
        'name' => 'i18n_string',
        'info' => 
        array (
          'name' => 'String translation',
          'description' => 'Provides support for translation of user defined strings.',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_string.admin.inc',
            1 => 'i18n_string.inc',
            2 => 'i18n_string.test',
          ),
          'configure' => 'admin/config/regional/i18n/strings',
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_user' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/i18n/i18n_user/i18n_user.module',
        'basename' => 'i18n_user.module',
        'name' => 'i18n_user',
        'info' => 
        array (
          'name' => 'User mail translation',
          'description' => 'Translate emails sent from the User module.',
          'core' => '7.x',
          'package' => 'Multilingual - Internationalization',
          'dependencies' => 
          array (
            0 => 'i18n_variable',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_node' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/i18n/i18n_node/i18n_node.module',
        'basename' => 'i18n_node.module',
        'name' => 'i18n_node',
        'info' => 
        array (
          'name' => 'Multilingual content',
          'description' => 'Extended node options for multilingual content',
          'dependencies' => 
          array (
            0 => 'translation',
            1 => 'i18n',
            2 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/node',
          'files' => 
          array (
            0 => 'i18n_node.test',
            1 => 'i18n_node.variable.inc',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_variable' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/i18n/i18n_variable/i18n_variable.module',
        'basename' => 'i18n_variable.module',
        'name' => 'i18n_variable',
        'info' => 
        array (
          'name' => 'Variable translation',
          'description' => 'Multilingual variables that switch language depending on page language.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'variable_store (7.x-2.x)',
            2 => 'variable_realm (7.x-2.x)',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/variable',
          'files' => 
          array (
            0 => 'i18n_variable.class.inc',
            1 => 'i18n_variable.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/i18n/tests/i18n_test.module',
        'basename' => 'i18n_test.module',
        'name' => 'i18n_test',
        'info' => 
        array (
          'name' => 'Internationalization tests',
          'description' => 'Helper module for testing i18n (do not enable manually)',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'translation',
            2 => 'i18n',
          ),
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_forum' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/i18n/i18n_forum/i18n_forum.module',
        'basename' => 'i18n_forum.module',
        'name' => 'i18n_forum',
        'info' => 
        array (
          'name' => 'Multilingual forum',
          'description' => 'Enables multilingual forum, translates names and containers.',
          'dependencies' => 
          array (
            0 => 'forum',
            1 => 'i18n_taxonomy',
            2 => 'i18n_node',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_forum.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_select' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/i18n/i18n_select/i18n_select.module',
        'basename' => 'i18n_select.module',
        'name' => 'i18n_select',
        'info' => 
        array (
          'name' => 'Multilingual select',
          'description' => 'API module for multilingual content selection',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/select',
          'files' => 
          array (
            0 => 'i18n_select.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_menu' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/i18n/i18n_menu/i18n_menu.module',
        'basename' => 'i18n_menu.module',
        'name' => 'i18n_menu',
        'info' => 
        array (
          'name' => 'Menu translation',
          'description' => 'Supports translatable custom menu items.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'menu',
            2 => 'i18n_string',
            3 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_menu.inc',
            1 => 'i18n_menu.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/i18n/i18n_taxonomy/i18n_taxonomy.module',
        'basename' => 'i18n_taxonomy.module',
        'name' => 'i18n_taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy translation',
          'description' => 'Enables multilingual taxonomy.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'i18n_string',
            2 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_taxonomy.inc',
            1 => 'i18n_taxonomy.pages.inc',
            2 => 'i18n_taxonomy.admin.inc',
            3 => 'i18n_taxonomy.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_contact' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/i18n/i18n_contact/i18n_contact.module',
        'basename' => 'i18n_contact.module',
        'name' => 'i18n_contact',
        'info' => 
        array (
          'name' => 'Contact translation',
          'description' => 'Makes contact categories and replies available for translation.',
          'dependencies' => 
          array (
            0 => 'contact',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_block' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/i18n/i18n_block/i18n_block.module',
        'basename' => 'i18n_block.module',
        'name' => 'i18n_block',
        'info' => 
        array (
          'name' => 'Block languages',
          'description' => 'Enables language selector for blocks and optional block translation.',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_block.inc',
            1 => 'i18n_block.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_redirect' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/i18n/i18n_redirect/i18n_redirect.module',
        'basename' => 'i18n_redirect.module',
        'name' => 'i18n_redirect',
        'info' => 
        array (
          'name' => 'Translation redirect',
          'description' => 'Redirect to translated page when available. SEO for multilingual sites.',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_path' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/i18n/i18n_path/i18n_path.module',
        'basename' => 'i18n_path.module',
        'name' => 'i18n_path',
        'info' => 
        array (
          'name' => 'Path translation',
          'description' => 'Define translations for generic paths',
          'dependencies' => 
          array (
            0 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_path.inc',
            1 => 'i18n_path.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_translation' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/i18n/i18n_translation/i18n_translation.module',
        'basename' => 'i18n_translation.module',
        'name' => 'i18n_translation',
        'info' => 
        array (
          'name' => 'Translation sets',
          'description' => 'Simple translation sets API for generic objects',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_translation.inc',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/i18n/i18n.module',
        'basename' => 'i18n.module',
        'name' => 'i18n',
        'info' => 
        array (
          'name' => 'Internationalization',
          'description' => 'Extends Drupal support for multilingual features.',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'variable',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_object.inc',
            1 => 'i18n.test',
          ),
          'configure' => 'admin/config/regional/i18n',
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'views_field_view' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/views_field_view/views_field_view.module',
        'basename' => 'views_field_view.module',
        'name' => 'views_field_view',
        'info' => 
        array (
          'name' => 'Views Field View',
          'description' => 'Embeds a view inside a view as field',
          'core' => '7.x',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_field_view_handler_field_view.inc',
            1 => 'tests/views_field_view.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'views_field_view',
          'datestamp' => '1369511162',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_field_view',
        'version' => '7.x-1.1',
      ),
      'publishcontent_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/publishcontent/tests/publishcontent_test.module',
        'basename' => 'publishcontent_test.module',
        'name' => 'publishcontent_test',
        'info' => 
        array (
          'name' => 'Publish Content Test Module',
          'description' => 'Provdes a callback which lists all nodes with publish unpublish links for testing callbacks',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.x-1.2',
          'hidden' => true,
          'project' => 'publishcontent',
          'datestamp' => '1375566693',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'publishcontent',
        'version' => '7.x-1.2',
      ),
      'publishcontent' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/publishcontent/publishcontent.module',
        'basename' => 'publishcontent.module',
        'name' => 'publishcontent',
        'info' => 
        array (
          'name' => 'Publish Content',
          'description' => 'Adds a \'Publish\' or \'Unpublish\' link on the node edit/view pages, and a \'Publish Link\' field if the Views module is enabled.',
          'core' => '7.x',
          'configure' => 'admin/config/content/publishcontent',
          'files' => 
          array (
            0 => 'publishcontent_views_handler_field_node_link.inc',
            1 => 'tests/publishcontent.test',
          ),
          'version' => '7.x-1.2',
          'project' => 'publishcontent',
          'datestamp' => '1375566693',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'publishcontent',
        'version' => '7.x-1.2',
      ),
      'imce_mkdir' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/imce_mkdir/imce_mkdir.module',
        'basename' => 'imce_mkdir.module',
        'name' => 'imce_mkdir',
        'info' => 
        array (
          'name' => 'IMCE Mkdir',
          'description' => 'Allows users manage directories in IMCE',
          'core' => '7.x',
          'package' => 'Media',
          'dependencies' => 
          array (
            0 => 'imce',
          ),
          'version' => '7.x-1.0',
          'project' => 'imce_mkdir',
          'datestamp' => '1319103332',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'imce_mkdir',
        'version' => '7.x-1.0',
      ),
      'migrate_d2d_ui' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/migrate_d2d/migrate_d2d_ui/migrate_d2d_ui.module',
        'basename' => 'migrate_d2d_ui.module',
        'name' => 'migrate_d2d_ui',
        'info' => 
        array (
          'name' => 'UI for Drupal-to-Drupal migration',
          'description' => 'Support for migrating external Drupal sites into the current site',
          'package' => 'Development',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'migrate_d2d',
            1 => 'migrate_ui',
          ),
          'files' => 
          array (
            0 => 'migrate_d2d_ui.migrate.inc',
          ),
          'version' => '7.x-2.1-beta1+7-dev',
          'project' => 'migrate_d2d',
          'datestamp' => '1380587192',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'migrate_d2d',
        'version' => '7.x-2.1-beta1+7-dev',
      ),
      'migrate_d2d_example' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/migrate_d2d/migrate_d2d_example/migrate_d2d_example.module',
        'basename' => 'migrate_d2d_example.module',
        'name' => 'migrate_d2d_example',
        'info' => 
        array (
          'name' => 'Sample D6 to D7 migration',
          'description' => 'Migrate content from D6 site to D7',
          'package' => 'Development',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'migrate',
            1 => 'migrate_d2d',
          ),
          'files' => 
          array (
            0 => 'node.inc',
          ),
          'version' => '7.x-2.1-beta1+7-dev',
          'project' => 'migrate_d2d',
          'datestamp' => '1380587192',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'migrate_d2d',
        'version' => '7.x-2.1-beta1+7-dev',
      ),
      'migrate_d2d' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/migrate_d2d/migrate_d2d.module',
        'basename' => 'migrate_d2d.module',
        'name' => 'migrate_d2d',
        'info' => 
        array (
          'name' => 'Drupal-to-Drupal migration',
          'description' => 'Migration from one Drupal site to another, using migration mappings provided by CSV files',
          'package' => 'Migration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'migrate (>7.x-2.5)',
          ),
          'files' => 
          array (
            0 => 'migrate_d2d.migrate.inc',
            1 => 'comment.inc',
            2 => 'entity.inc',
            3 => 'file.inc',
            4 => 'menu.inc',
            5 => 'menu_links.inc',
            6 => 'node.inc',
            7 => 'role.inc',
            8 => 'taxonomy.inc',
            9 => 'user.inc',
            10 => 'd5/d5.inc',
            11 => 'd5/comment.inc',
            12 => 'd5/file.inc',
            13 => 'd5/node.inc',
            14 => 'd5/role.inc',
            15 => 'd5/taxonomy.inc',
            16 => 'd5/user.inc',
            17 => 'd6/d6.inc',
            18 => 'd6/comment.inc',
            19 => 'd6/entity.inc',
            20 => 'd6/file.inc',
            21 => 'd6/menu.inc',
            22 => 'd6/menu_links.inc',
            23 => 'd6/node.inc',
            24 => 'd6/role.inc',
            25 => 'd6/taxonomy.inc',
            26 => 'd6/user.inc',
            27 => 'd7/d7.inc',
            28 => 'd7/comment.inc',
            29 => 'd7/file.inc',
            30 => 'd7/node.inc',
            31 => 'd7/role.inc',
            32 => 'd7/taxonomy.inc',
            33 => 'd7/user.inc',
          ),
          'version' => '7.x-2.1-beta1+7-dev',
          'project' => 'migrate_d2d',
          'datestamp' => '1380587192',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'migrate_d2d',
        'version' => '7.x-2.1-beta1+7-dev',
      ),
      'alchemy_contentanalysis' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/alchemy/modules/alchemy_contentanalysis/alchemy_contentanalysis.module',
        'basename' => 'alchemy_contentanalysis.module',
        'name' => 'alchemy_contentanalysis',
        'info' => 
        array (
          'name' => 'Alchemy Content Analyzer',
          'package' => 'Content analysis',
          'description' => 'Provides an Alchemy based content analyzer.',
          'dependencies' => 
          array (
            0 => 'alchemy',
            1 => 'contentanalysis',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-beta1',
          'project' => 'alchemy',
          'datestamp' => '1326242465',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'alchemy',
        'version' => '7.x-1.0-beta1',
      ),
      'alchemy' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/alchemy/alchemy.module',
        'basename' => 'alchemy.module',
        'name' => 'alchemy',
        'info' => 
        array (
          'name' => 'Alchemy',
          'description' => 'Provides an interface to the Alchemy API service. AlchemyAPI provides content owners and web developers with a rich suite of content analysis and meta-data annotation tools.',
          'package' => 'Content analysis',
          'core' => '7.x',
          'configure' => 'admin/config/services/alchemy',
          'version' => '7.x-1.0-beta1',
          'project' => 'alchemy',
          'datestamp' => '1326242465',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'alchemy',
        'version' => '7.x-1.0-beta1',
      ),
      'markdown' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/markdown/markdown.module',
        'basename' => 'markdown.module',
        'name' => 'markdown',
        'info' => 
        array (
          'name' => 'Markdown filter',
          'description' => 'Allows content to be submitted using Markdown, a simple plain-text syntax that is transformed into valid XHTML.',
          'package' => 'Input filters',
          'core' => '7.x',
          'version' => '7.x-1.2',
          'project' => 'markdown',
          'datestamp' => '1376552801',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'markdown',
        'version' => '7.x-1.2',
      ),
      'front_page' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/front/front_page.module',
        'basename' => 'front_page.module',
        'name' => 'front_page',
        'info' => 
        array (
          'name' => 'Front Page',
          'description' => 'Allows site admins setup custom front pages for the site.',
          'package' => 'Administration',
          'core' => '7.x',
          'configure' => 'admin/config/front/settings',
          'version' => '7.x-2.4',
          'project' => 'front',
          'datestamp' => '1370619956',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'front',
        'version' => '7.x-2.4',
      ),
      'context_layouts' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/context/context_layouts/context_layouts.module',
        'basename' => 'context_layouts.module',
        'name' => 'context_layouts',
        'info' => 
        array (
          'name' => 'Context layouts',
          'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/context_layouts_reaction_block.inc',
          ),
          'version' => '7.x-3.1',
          'project' => 'context',
          'datestamp' => '1381976667',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'context',
        'version' => '7.x-3.1',
      ),
      'context_ui' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/context/context_ui/context_ui.module',
        'basename' => 'context_ui.module',
        'name' => 'context_ui',
        'info' => 
        array (
          'name' => 'Context UI',
          'description' => 'Provides a simple UI for settings up a site structure using Context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'configure' => 'admin/structure/context',
          'files' => 
          array (
            0 => 'context.module',
            1 => 'tests/context_ui.test',
          ),
          'version' => '7.x-3.1',
          'project' => 'context',
          'datestamp' => '1381976667',
          'php' => '5.2.4',
        ),
        'schema_version' => '6004',
        'project' => 'context',
        'version' => '7.x-3.1',
      ),
      'context' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/context/context.module',
        'basename' => 'context.module',
        'name' => 'context',
        'info' => 
        array (
          'name' => 'Context',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'description' => 'Provide modules with a cache that lasts for a single page request.',
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/context.test',
            1 => 'tests/context.conditions.test',
            2 => 'tests/context.reactions.test',
          ),
          'version' => '7.x-3.1',
          'project' => 'context',
          'datestamp' => '1381976667',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'context',
        'version' => '7.x-3.1',
      ),
      'block_class' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/block_class/block_class.module',
        'basename' => 'block_class.module',
        'name' => 'block_class',
        'info' => 
        array (
          'name' => 'Block Class',
          'description' => 'Allows assigning CSS classes to blocks.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'files' => 
          array (
            0 => 'block_class.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'context',
          ),
          'version' => '7.x-2.1',
          'project' => 'block_class',
          'datestamp' => '1377197769',
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'project' => 'block_class',
        'version' => '7.x-2.1',
      ),
      'performance' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/performance/performance.module',
        'basename' => 'performance.module',
        'name' => 'performance',
        'info' => 
        array (
          'name' => 'Performance Logging',
          'description' => 'Logs detailed and/or summary page generation time and memory consumption for page requests.',
          'package' => 'Development',
          'core' => '7.x',
          'configure' => 'admin/config/development/performance-logging',
          'tags' => 
          array (
            0 => 'developer',
            1 => 'monitoring',
          ),
          'version' => '7.x-2.0',
          'project' => 'performance',
          'datestamp' => '1384025307',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'performance',
        'version' => '7.x-2.0',
      ),
      'feeds_ui' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/feeds/feeds_ui/feeds_ui.module',
        'basename' => 'feeds_ui.module',
        'name' => 'feeds_ui',
        'info' => 
        array (
          'name' => 'Feeds Admin UI',
          'description' => 'Administrative UI for Feeds module.',
          'package' => 'Feeds',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'feeds',
          ),
          'configure' => 'admin/structure/feeds',
          'files' => 
          array (
            0 => 'feeds_ui.test',
          ),
          'version' => '7.x-2.0-alpha8',
          'project' => 'feeds',
          'datestamp' => '1366671911',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha8',
      ),
      'feeds_import' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/feeds/feeds_import/feeds_import.module',
        'basename' => 'feeds_import.module',
        'name' => 'feeds_import',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'feeds',
          ),
          'description' => 'An example of a node importer and a user importer.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'feeds:feeds_importer_default:1',
            ),
            'feeds_importer' => 
            array (
              0 => 'node',
              1 => 'user',
            ),
          ),
          'files' => 
          array (
            0 => 'feeds_import.test',
          ),
          'name' => 'Feeds Import',
          'package' => 'Feeds',
          'php' => '5.2.4',
          'version' => '7.x-2.0-alpha8',
          'project' => 'feeds',
          'datestamp' => '1366671911',
        ),
        'schema_version' => 0,
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha8',
      ),
      'feeds_news' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/feeds/feeds_news/feeds_news.module',
        'basename' => 'feeds_news.module',
        'name' => 'feeds_news',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'feeds',
            2 => 'views',
          ),
          'description' => 'A news aggregator built with feeds, creates nodes from imported feed items. With OPML import.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'feeds:feeds_importer_default:1',
              1 => 'views:views_default:3.0',
            ),
            'feeds_importer' => 
            array (
              0 => 'feed',
              1 => 'opml',
            ),
            'field' => 
            array (
              0 => 'node-feed_item-field_feed_item_description',
            ),
            'node' => 
            array (
              0 => 'feed',
              1 => 'feed_item',
            ),
            'views_view' => 
            array (
              0 => 'feeds_defaults_feed_items',
            ),
          ),
          'files' => 
          array (
            0 => 'feeds_news.module',
            1 => 'feeds_news.test',
          ),
          'name' => 'Feeds News',
          'package' => 'Feeds',
          'php' => '5.2.4',
          'version' => '7.x-2.0-alpha8',
          'project' => 'feeds',
          'datestamp' => '1366671911',
        ),
        'schema_version' => 0,
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha8',
      ),
      'feeds_tests' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/feeds/tests/feeds_tests.module',
        'basename' => 'feeds_tests.module',
        'name' => 'feeds_tests',
        'info' => 
        array (
          'name' => 'Feeds module tests',
          'description' => 'Support module for Feeds related testing.',
          'package' => 'Testing',
          'version' => '7.x-2.0-alpha8',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'feeds_test.module',
          ),
          'hidden' => true,
          'project' => 'feeds',
          'datestamp' => '1366671911',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha8',
      ),
      'feeds' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/feeds/feeds.module',
        'basename' => 'feeds.module',
        'name' => 'feeds',
        'info' => 
        array (
          'name' => 'Feeds',
          'description' => 'Aggregates RSS/Atom/RDF feeds, imports CSV files and more.',
          'package' => 'Feeds',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'job_scheduler',
          ),
          'files' => 
          array (
            0 => 'includes/FeedsConfigurable.inc',
            1 => 'includes/FeedsImporter.inc',
            2 => 'includes/FeedsSource.inc',
            3 => 'libraries/ParserCSV.inc',
            4 => 'libraries/http_request.inc',
            5 => 'libraries/PuSHSubscriber.inc',
            6 => 'plugins/FeedsCSVParser.inc',
            7 => 'plugins/FeedsFetcher.inc',
            8 => 'plugins/FeedsFileFetcher.inc',
            9 => 'plugins/FeedsHTTPFetcher.inc',
            10 => 'plugins/FeedsNodeProcessor.inc',
            11 => 'plugins/FeedsOPMLParser.inc',
            12 => 'plugins/FeedsParser.inc',
            13 => 'plugins/FeedsPlugin.inc',
            14 => 'plugins/FeedsProcessor.inc',
            15 => 'plugins/FeedsSimplePieParser.inc',
            16 => 'plugins/FeedsSitemapParser.inc',
            17 => 'plugins/FeedsSyndicationParser.inc',
            18 => 'plugins/FeedsTermProcessor.inc',
            19 => 'plugins/FeedsUserProcessor.inc',
            20 => 'tests/feeds.test',
            21 => 'tests/feeds_date_time.test',
            22 => 'tests/feeds_mapper_date.test',
            23 => 'tests/feeds_mapper_date_multiple.test',
            24 => 'tests/feeds_mapper_field.test',
            25 => 'tests/feeds_mapper_file.test',
            26 => 'tests/feeds_mapper_path.test',
            27 => 'tests/feeds_mapper_profile.test',
            28 => 'tests/feeds_mapper.test',
            29 => 'tests/feeds_mapper_config.test',
            30 => 'tests/feeds_fetcher_file.test',
            31 => 'tests/feeds_processor_node.test',
            32 => 'tests/feeds_processor_term.test',
            33 => 'tests/feeds_processor_user.test',
            34 => 'tests/feeds_scheduler.test',
            35 => 'tests/feeds_mapper_link.test',
            36 => 'tests/feeds_mapper_taxonomy.test',
            37 => 'tests/parser_csv.test',
            38 => 'views/feeds_views_handler_argument_importer_id.inc',
            39 => 'views/feeds_views_handler_field_importer_name.inc',
            40 => 'views/feeds_views_handler_field_log_message.inc',
            41 => 'views/feeds_views_handler_field_severity.inc',
            42 => 'views/feeds_views_handler_field_source.inc',
            43 => 'views/feeds_views_handler_filter_severity.inc',
          ),
          'version' => '7.x-2.0-alpha8',
          'project' => 'feeds',
          'datestamp' => '1366671911',
          'php' => '5.2.4',
        ),
        'schema_version' => '7208',
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha8',
      ),
      'views_slideshow_galleria' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/views_slideshow_galleria/views_slideshow_galleria.module',
        'basename' => 'views_slideshow_galleria.module',
        'name' => 'views_slideshow_galleria',
        'info' => 
        array (
          'name' => 'Views Slideshow: Galleria',
          'description' => 'Provides integration between the Galleria plugin and Views Slideshow.',
          'core' => '7.x',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views_slideshow',
            1 => 'libraries',
          ),
          'version' => '7.x-3.2',
          'project' => 'views_slideshow_galleria',
          'datestamp' => '1381153178',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_slideshow_galleria',
        'version' => '7.x-3.2',
      ),
      'bulk_export' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/ctools/bulk_export/bulk_export.module',
        'basename' => 'bulk_export.module',
        'name' => 'bulk_export',
        'info' => 
        array (
          'name' => 'Bulk Export',
          'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'page_manager' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/ctools/page_manager/page_manager.module',
        'basename' => 'page_manager.module',
        'name' => 'page_manager',
        'info' => 
        array (
          'name' => 'Page manager',
          'description' => 'Provides a UI and API to manage pages within the site.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_custom_content' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
        'basename' => 'ctools_custom_content.module',
        'name' => 'ctools_custom_content',
        'info' => 
        array (
          'name' => 'Custom content panes',
          'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'views_content' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/ctools/views_content/views_content.module',
        'basename' => 'views_content.module',
        'name' => 'views_content',
        'info' => 
        array (
          'name' => 'Views content panes',
          'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
            1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
            2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_plugin_example' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
        'basename' => 'ctools_plugin_example.module',
        'name' => 'ctools_plugin_example',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) Plugin Example',
          'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'panels',
            2 => 'page_manager',
            3 => 'advanced_help',
          ),
          'core' => '7.x',
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_ajax_sample' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
        'basename' => 'ctools_ajax_sample.module',
        'name' => 'ctools_ajax_sample',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) AJAX Example',
          'description' => 'Shows how to use the power of Chaos AJAX.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'core' => '7.x',
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_export_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/ctools/tests/ctools_export_test/ctools_export_test.module',
        'basename' => 'ctools_export_test.module',
        'name' => 'ctools_export_test',
        'info' => 
        array (
          'name' => 'CTools export test',
          'description' => 'CTools export test module',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'hidden' => true,
          'files' => 
          array (
            0 => 'ctools_export.test',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_plugin_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/ctools/tests/ctools_plugin_test.module',
        'basename' => 'ctools_plugin_test.module',
        'name' => 'ctools_plugin_test',
        'info' => 
        array (
          'name' => 'Chaos tools plugins test',
          'description' => 'Provides hooks for testing ctools plugins.',
          'package' => 'Chaos tool suite',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'ctools.plugins.test',
            1 => 'object_cache.test',
            2 => 'css.test',
            3 => 'context.test',
            4 => 'math_expression.test',
            5 => 'math_expression_stack.test',
          ),
          'hidden' => true,
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_access_ruleset' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
        'basename' => 'ctools_access_ruleset.module',
        'name' => 'ctools_access_ruleset',
        'info' => 
        array (
          'name' => 'Custom rulesets',
          'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'stylizer' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/ctools/stylizer/stylizer.module',
        'basename' => 'stylizer.module',
        'name' => 'stylizer',
        'info' => 
        array (
          'name' => 'Stylizer',
          'description' => 'Create custom styles for applications such as Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'color',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'ctools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'description' => 'A library of helpful tools by Merlin of Chaos.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'files' => 
          array (
            0 => 'includes/context.inc',
            1 => 'includes/math-expr.inc',
            2 => 'includes/stylizer.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6008',
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'backup_migrate' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/backup_migrate/backup_migrate.module',
        'basename' => 'backup_migrate.module',
        'name' => 'backup_migrate',
        'info' => 
        array (
          'name' => 'Backup and Migrate',
          'description' => 'Backup or migrate the Drupal Database quickly and without unnecessary data.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'backup_migrate.module',
            1 => 'backup_migrate.install',
            2 => 'includes/destinations.inc',
            3 => 'includes/profiles.inc',
            4 => 'includes/schedules.inc',
          ),
          'configure' => 'admin/config/system/backup_migrate',
          'version' => '7.x-2.8',
          'project' => 'backup_migrate',
          'datestamp' => '1383686305',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7205',
        'project' => 'backup_migrate',
        'version' => '7.x-2.8',
      ),
      'views_boxes' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/views_boxes/views_boxes.module',
        'basename' => 'views_boxes.module',
        'name' => 'views_boxes',
        'info' => 
        array (
          'name' => 'Views Boxes',
          'description' => 'Provides configurable views through boxes.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'boxes',
            2 => 'views',
            3 => 'entity_autocomplete',
          ),
          'files' => 
          array (
            0 => 'views_boxes.module',
            1 => 'plugins/views_boxes_context_list.inc',
            2 => 'handlers/views_boxes_handler_argument_limit.inc',
            3 => 'handlers/views_boxes_handler_filter_sort.inc',
          ),
          'version' => '7.x-1.0-beta8',
          'project' => 'views_boxes',
          'datestamp' => '1329171345',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_boxes',
        'version' => '7.x-1.0-beta8',
      ),
      'audiofield' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/audiofield/audiofield.module',
        'basename' => 'audiofield.module',
        'name' => 'audiofield',
        'info' => 
        array (
          'name' => 'AudioField',
          'description' => 'Handle audio upload using fields.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'audiofield.install',
            1 => 'audiofield.module',
            2 => 'audiofield_formatter.inc',
            3 => 'audiofield_widget.inc',
          ),
          'version' => '7.x-1.0-beta8',
          'project' => 'audiofield',
          'datestamp' => '1349709067',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'audiofield',
        'version' => '7.x-1.0-beta8',
      ),
      'navigation404' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/navigation404/navigation404.module',
        'basename' => 'navigation404.module',
        'name' => 'navigation404',
        'info' => 
        array (
          'name' => '404 Navigation',
          'description' => 'On a 404 page, ensure navigation links are displayed properly.',
          'core' => '7.x',
          'version' => '7.x-1.0',
          'project' => 'navigation404',
          'datestamp' => '1294419091',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'navigation404',
        'version' => '7.x-1.0',
      ),
      'date_ical' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/date_ical/date_ical.module',
        'basename' => 'date_ical.module',
        'name' => 'date_ical',
        'info' => 
        array (
          'name' => 'Date iCal',
          'description' => 'Enables export of iCal feeds using Views, and import of iCal feeds using Feeds.',
          'package' => 'Date/Time',
          'php' => '5.3',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views (>=7.x-3.5)',
            1 => 'date_views',
            2 => 'entity',
            3 => 'libraries (>=7.x-2.0)',
            4 => 'date',
            5 => 'date_api',
          ),
          'files' => 
          array (
            0 => 'includes/date_ical_plugin_row_ical_entity.inc',
            1 => 'includes/date_ical_plugin_row_ical_fields.inc',
            2 => 'includes/date_ical_plugin_style_ical_feed.inc',
            3 => 'includes/DateiCalFeedsParser.inc',
          ),
          'version' => '7.x-3.0',
          'project' => 'date_ical',
          'datestamp' => '1384805609',
        ),
        'schema_version' => '7300',
        'project' => 'date_ical',
        'version' => '7.x-3.0',
      ),
      'recaptcha' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/recaptcha/recaptcha.module',
        'basename' => 'recaptcha.module',
        'name' => 'recaptcha',
        'info' => 
        array (
          'name' => 'reCAPTCHA',
          'description' => 'Uses the reCAPTCHA web service to improve the CAPTCHA system.',
          'dependencies' => 
          array (
            0 => 'captcha',
          ),
          'package' => 'Spam control',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'recaptcha.admin.inc',
            1 => 'recaptcha.module',
            2 => 'recaptcha.install',
          ),
          'version' => '7.x-1.10',
          'project' => 'recaptcha',
          'datestamp' => '1377803514',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'recaptcha',
        'version' => '7.x-1.10',
      ),
      'recaptcha_mailhide' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/recaptcha/recaptcha_mailhide.module',
        'basename' => 'recaptcha_mailhide.module',
        'name' => 'recaptcha_mailhide',
        'info' => 
        array (
          'name' => 'reCAPTCHA Mailhide',
          'description' => 'Uses the reCAPTCHA web service to protect email addresses.',
          'package' => 'Spam control',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'recaptcha_mailhide.module',
          ),
          'version' => '7.x-1.10',
          'project' => 'recaptcha',
          'datestamp' => '1377803514',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'recaptcha',
        'version' => '7.x-1.10',
      ),
      'googleanalytics' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/google_analytics/googleanalytics.module',
        'basename' => 'googleanalytics.module',
        'name' => 'googleanalytics',
        'info' => 
        array (
          'name' => 'Google Analytics',
          'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
          'core' => '7.x',
          'package' => 'Statistics',
          'configure' => 'admin/config/system/googleanalytics',
          'files' => 
          array (
            0 => 'googleanalytics.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'version' => '7.x-1.4',
          'project' => 'google_analytics',
          'datestamp' => '1382021586',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7007',
        'project' => 'google_analytics',
        'version' => '7.x-1.4',
      ),
      'nice_menus' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/nice_menus/nice_menus.module',
        'basename' => 'nice_menus.module',
        'name' => 'nice_menus',
        'info' => 
        array (
          'name' => 'Nice Menus',
          'description' => 'CSS/jQuery drop-down, drop-right and drop-left menus to be placed in blocks',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/user-interface/nice_menus',
          'version' => '7.x-2.5',
          'project' => 'nice_menus',
          'datestamp' => '1373943668',
          'php' => '5.2.4',
        ),
        'schema_version' => '6002',
        'project' => 'nice_menus',
        'version' => '7.x-2.5',
      ),
      'l10n_client_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/l10n_client/l10n_client_test/l10n_client_test.module',
        'basename' => 'l10n_client_test.module',
        'name' => 'l10n_client_test',
        'info' => 
        array (
          'name' => 'l10n client test',
          'description' => 'localization client test module',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'l10n_client',
          ),
          'hidden' => true,
          'version' => '7.x-1.3',
          'project' => 'l10n_client',
          'datestamp' => '1377794199',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'l10n_client',
        'version' => '7.x-1.3',
      ),
      'l10n_client' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/l10n_client/l10n_client.module',
        'basename' => 'l10n_client.module',
        'name' => 'l10n_client',
        'info' => 
        array (
          'name' => 'Localization client',
          'description' => 'Provides on-page localization',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'core' => '7.x',
          'package' => 'Multilingual',
          'configure' => 'admin/config/regional/translate/client',
          'files' => 
          array (
            0 => 'l10n_client.test',
          ),
          'version' => '7.x-1.3',
          'project' => 'l10n_client',
          'datestamp' => '1377794199',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'l10n_client',
        'version' => '7.x-1.3',
      ),
      'menu_block_export' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/menu_block/menu_block_export.module',
        'basename' => 'menu_block_export.module',
        'name' => 'menu_block_export',
        'info' => 
        array (
          'name' => 'Menu Block Export',
          'description' => 'Provides export interface for Menu block module.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'menu_block',
          ),
          'files' => 
          array (
            0 => 'menu_block_export.module',
            1 => 'menu_block_export.admin.inc',
          ),
          'configure' => 'admin/config/user-interface/menu-block/export',
          'version' => '7.x-2.3',
          'project' => 'menu_block',
          'datestamp' => '1328286646',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'menu_block',
        'version' => '7.x-2.3',
      ),
      'menu_block' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/menu_block/menu_block.module',
        'basename' => 'menu_block.module',
        'name' => 'menu_block',
        'info' => 
        array (
          'name' => 'Menu Block',
          'description' => 'Provides configurable blocks of menu items.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'menu (>7.11)',
          ),
          'files' => 
          array (
            0 => 'menu_block.module',
            1 => 'menu_block.admin.inc',
            2 => 'menu_block.follow.inc',
            3 => 'menu_block.pages.inc',
            4 => 'menu_block.sort.inc',
            5 => 'menu_block.install',
            6 => 'plugins/content_types/menu_tree/menu_tree.inc',
          ),
          'configure' => 'admin/config/user-interface/menu-block',
          'version' => '7.x-2.3',
          'project' => 'menu_block',
          'datestamp' => '1328286646',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'menu_block',
        'version' => '7.x-2.3',
      ),
      'superfish' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/superfish/superfish.module',
        'basename' => 'superfish.module',
        'name' => 'superfish',
        'info' => 
        array (
          'name' => 'Superfish',
          'description' => 'jQuery Superfish plugin for your Drupal menus.',
          'package' => 'User interface',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'configure' => 'admin/config/user-interface/superfish',
          'core' => '7.x',
          'version' => '7.x-1.9',
          'project' => 'superfish',
          'datestamp' => '1367054112',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'superfish',
        'version' => '7.x-1.9',
      ),
      'node_export_feeds' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/node_export/modules/node_export_feeds/node_export_feeds.module',
        'basename' => 'node_export_feeds.module',
        'name' => 'node_export_feeds',
        'info' => 
        array (
          'name' => 'Node export feeds',
          'description' => 'Node export feeds importer.  This is a more advanced importer than the one built into node export, but tricky to use.',
          'core' => '7.x',
          'package' => 'Node export',
          'dependencies' => 
          array (
            0 => 'feeds',
            1 => 'node_export',
          ),
          'files' => 
          array (
            0 => 'FeedsNodeExportParser.inc',
            1 => 'FeedsNodeExportProcessor.inc',
          ),
          'version' => '7.x-3.0',
          'project' => 'node_export',
          'datestamp' => '1345435979',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'node_export',
        'version' => '7.x-3.0',
      ),
      'node_export_relation' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/node_export/modules/node_export_relation/node_export_relation.module',
        'basename' => 'node_export_relation.module',
        'name' => 'node_export_relation',
        'info' => 
        array (
          'name' => 'Node export relation (deprecated)',
          'description' => 'Helps maintain relationships.  Supports node references, taxonomy, and organic groups.',
          'dependencies' => 
          array (
            0 => 'node_export',
            1 => 'uuid',
          ),
          'core' => '7.x',
          'package' => 'Node export',
          'version' => '7.x-3.0',
          'project' => 'node_export',
          'datestamp' => '1345435979',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'node_export',
        'version' => '7.x-3.0',
      ),
      'node_export_dependency' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/node_export/modules/node_export_dependency/node_export_dependency.module',
        'basename' => 'node_export_dependency.module',
        'name' => 'node_export_dependency',
        'info' => 
        array (
          'name' => 'Node export dependency (experimental)',
          'description' => 'Helps maintain relationships to dependent entities.  Intended to make Node export relation obsolete.',
          'dependencies' => 
          array (
            0 => 'node_export',
            1 => 'uuid',
          ),
          'core' => '7.x',
          'package' => 'Node export',
          'version' => '7.x-3.0',
          'project' => 'node_export',
          'datestamp' => '1345435979',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'node_export',
        'version' => '7.x-3.0',
      ),
      'node_export_features' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/node_export/modules/node_export_features/node_export_features.module',
        'basename' => 'node_export_features.module',
        'name' => 'node_export_features',
        'info' => 
        array (
          'name' => 'Node export features',
          'description' => 'Adds Features support to Node export, so you can put your exports into Features modules.',
          'dependencies' => 
          array (
            0 => 'node_export',
            1 => 'uuid',
            2 => 'features',
          ),
          'core' => '7.x',
          'package' => 'Node export',
          'version' => '7.x-3.0',
          'project' => 'node_export',
          'datestamp' => '1345435979',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'node_export',
        'version' => '7.x-3.0',
      ),
      'node_export' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/node_export/node_export.module',
        'basename' => 'node_export.module',
        'name' => 'node_export',
        'info' => 
        array (
          'name' => 'Node export',
          'description' => 'Allows users to export content and then import into another Drupal installation.',
          'dependencies' => 
          array (
            0 => 'uuid',
          ),
          'core' => '7.x',
          'package' => 'Node export',
          'configure' => 'admin/config/content/node_export',
          'files' => 
          array (
            0 => 'views/views_handler_field_node_link_export.inc',
          ),
          'version' => '7.x-3.0',
          'project' => 'node_export',
          'datestamp' => '1345435979',
          'php' => '5.2.4',
        ),
        'schema_version' => '7303',
        'project' => 'node_export',
        'version' => '7.x-3.0',
      ),
      'themekey_example' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/themekey/themekey_example/themekey_example.module',
        'basename' => 'themekey_example.module',
        'name' => 'themekey_example',
        'info' => 
        array (
          'name' => 'ThemeKey Example',
          'description' => 'Implements parts of the ThemeKey API as an example for Developers.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'themekey',
          ),
          'package' => 'Development',
          'files' => 
          array (
            0 => 'themekey_example.module',
            1 => 'themekey_example_validators.inc',
            2 => 'themekey_example_mappers.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'themekey',
          'datestamp' => '1373990478',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'themekey',
        'version' => '7.x-2.5',
      ),
      'themekey_compat' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/themekey/themekey_compat.module',
        'basename' => 'themekey_compat.module',
        'name' => 'themekey_compat',
        'info' => 
        array (
          'name' => 'ThemeKey Compatibility',
          'description' => 'Integration of different theme switching modules into ThemeKey and its theme switching rule chain.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'themekey',
          ),
          'package' => 'ThemeKey',
          'configure' => 'admin/config/user-interface/themekey/settings/compat',
          'version' => '7.x-2.5',
          'project' => 'themekey',
          'datestamp' => '1373990478',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'themekey',
        'version' => '7.x-2.5',
      ),
      'themekey_user_profile' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/themekey/themekey_user_profile.module',
        'basename' => 'themekey_user_profile.module',
        'name' => 'themekey_user_profile',
        'info' => 
        array (
          'name' => 'ThemeKey User Profile',
          'description' => 'Allows users to select their own theme for this site. ThemeKey User Profile replaces the corresponding feature that existed in Drupal 6 Core but has been removed in Drupal 7 Core.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'themekey',
            1 => 'themekey_ui',
          ),
          'package' => 'ThemeKey',
          'configure' => 'admin/config/user-interface/themekey/settings/ui',
          'files' => 
          array (
            0 => 'themekey_user_profile.install',
            1 => 'themekey_user_profile.module',
            2 => 'themekey_user_profile_help.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'themekey',
          'datestamp' => '1373990478',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'themekey',
        'version' => '7.x-2.5',
      ),
      'themekey' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/themekey/themekey.module',
        'basename' => 'themekey.module',
        'name' => 'themekey',
        'info' => 
        array (
          'name' => 'ThemeKey',
          'description' => 'Map themes to Drupal paths or object properties.',
          'core' => '7.x',
          'package' => 'ThemeKey',
          'configure' => 'admin/config/user-interface/themekey/settings',
          'files' => 
          array (
            0 => 'themekey.install',
            1 => 'themekey-debug-messages.tpl.php',
            2 => 'themekey_validators.inc',
            3 => 'themekey_admin.inc',
            4 => 'themekey_base.inc',
            5 => 'themekey_build.inc',
            6 => 'themekey_cron.inc',
            7 => 'modules/themekey_browser_detection.php',
            8 => 'tests/themekey.test',
            9 => 'tests/ThemekeyDrupalPropertiesTestCase.test',
            10 => 'tests/ThemekeyNodePropertiesTestCase.test',
            11 => 'tests/ThemekeyMultipleNodePropertiesTestCase.test',
            12 => 'tests/ThemekeySystemPropertiesTestCase.test',
          ),
          'version' => '7.x-2.5',
          'project' => 'themekey',
          'datestamp' => '1373990478',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7104',
        'project' => 'themekey',
        'version' => '7.x-2.5',
      ),
      'themekey_debug' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/themekey/themekey_debug.module',
        'basename' => 'themekey_debug.module',
        'name' => 'themekey_debug',
        'info' => 
        array (
          'name' => 'ThemeKey Debug',
          'description' => 'Debug ThemeKey',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'themekey',
          ),
          'package' => 'ThemeKey',
          'configure' => 'admin/config/user-interface/themekey/settings/debug',
          'version' => '7.x-2.5',
          'project' => 'themekey',
          'datestamp' => '1373990478',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'themekey',
        'version' => '7.x-2.5',
      ),
      'themekey_features' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/themekey/themekey_features.module',
        'basename' => 'themekey_features.module',
        'name' => 'themekey_features',
        'info' => 
        array (
          'name' => 'ThemeKey Features (Experimental!)',
          'description' => 'Integrates ThemeKey with Features. Warning! Don\'t use in production! Highly Experimental!',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'themekey',
            1 => 'features',
          ),
          'package' => 'ThemeKey',
          'version' => '7.x-2.5',
          'project' => 'themekey',
          'datestamp' => '1373990478',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'themekey',
        'version' => '7.x-2.5',
      ),
      'themekey_ui' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/themekey/themekey_ui.module',
        'basename' => 'themekey_ui.module',
        'name' => 'themekey_ui',
        'info' => 
        array (
          'name' => 'ThemeKey UI',
          'description' => 'Integrates ThemeKey with Drupal administration forms.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'themekey',
          ),
          'package' => 'ThemeKey',
          'configure' => 'admin/config/user-interface/themekey/settings/ui',
          'files' => 
          array (
            0 => 'themekey_ui.install',
            1 => 'themekey_ui.module',
            2 => 'themekey_ui_admin.inc',
            3 => 'themekey_ui_help.inc',
            4 => 'themekey_ui_helper.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'themekey',
          'datestamp' => '1373990478',
          'php' => '5.2.4',
        ),
        'schema_version' => '6200',
        'project' => 'themekey',
        'version' => '7.x-2.5',
      ),
      'feeds_tamper_ui' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/feeds_tamper/feeds_tamper_ui/feeds_tamper_ui.module',
        'basename' => 'feeds_tamper_ui.module',
        'name' => 'feeds_tamper_ui',
        'info' => 
        array (
          'name' => 'Feeds Tamper Admin UI',
          'description' => 'Administrative UI for Feeds Tamper module.',
          'package' => 'Feeds',
          'dependencies' => 
          array (
            0 => 'feeds_tamper',
            1 => 'feeds_ui',
          ),
          'files' => 
          array (
            0 => 'tests/feeds_tamper_ui.test',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-beta5',
          'project' => 'feeds_tamper',
          'datestamp' => '1380093514',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'feeds_tamper',
        'version' => '7.x-1.0-beta5',
      ),
      'feeds_tamper' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/feeds_tamper/feeds_tamper.module',
        'basename' => 'feeds_tamper.module',
        'name' => 'feeds_tamper',
        'info' => 
        array (
          'name' => 'Feeds Tamper',
          'description' => 'Modify feeds data before it gets saved.',
          'package' => 'Feeds',
          'dependencies' => 
          array (
            0 => 'feeds',
          ),
          'files' => 
          array (
            0 => 'tests/feeds_tamper.test',
            1 => 'tests/feeds_tamper_plugins.test',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-beta5',
          'project' => 'feeds_tamper',
          'datestamp' => '1380093514',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'feeds_tamper',
        'version' => '7.x-1.0-beta5',
      ),
      'contentanalysisexample' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/contentanalysis/APIEXAMPLE/contentanalysisexample.module',
        'basename' => 'contentanalysisexample.module',
        'name' => 'contentanalysisexample',
        'info' => 
        array (
          'name' => 'Content Analysis API Example',
          'description' => 'Example Content Analyzer module',
          'package' => 'Content analysis',
          'dependencies' => 
          array (
            0 => 'contentanalysis',
          ),
          'files' => 
          array (
            0 => 'contentanalysisexample.module',
          ),
          'scripts' => 
          array (
            0 => 'contentanalysisexample.js',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-beta6',
          'project' => 'contentanalysis',
          'datestamp' => '1371477651',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'contentanalysis',
        'version' => '7.x-1.0-beta6',
      ),
      'contentanalysis' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/contentanalysis/contentanalysis.module',
        'basename' => 'contentanalysis.module',
        'name' => 'contentanalysis',
        'info' => 
        array (
          'name' => 'Content Analysis API',
          'description' => 'Provides an API for content analyzers',
          'package' => 'Content analysis',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'contentanalysis.admin.inc',
            1 => 'contentanalysis.install',
            2 => 'contentanalysis.module',
            3 => 'contentanalysis.css',
          ),
          'scripts' => 
          array (
            0 => 'contentanalysis.js',
          ),
          'core' => '7.x',
          'configure' => 'admin/settings/contentanalysis',
          'version' => '7.x-1.0-beta6',
          'project' => 'contentanalysis',
          'datestamp' => '1371477651',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'contentanalysis',
        'version' => '7.x-1.0-beta6',
      ),
      'addthis_displays' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/addthis/addthis_displays/addthis_displays.module',
        'basename' => 'addthis_displays.module',
        'name' => 'addthis_displays',
        'info' => 
        array (
          'name' => 'AddThis Displays',
          'description' => 'Adds the AddThis display types to render several basic types of AddThis buttons.',
          'core' => '7.x',
          'package' => 'Sharing',
          'dependencies' => 
          array (
            0 => 'addthis',
          ),
          'files' => 
          array (
            0 => 'addthis_displays.field.inc',
          ),
          'version' => '7.x-4.0-alpha2',
          'project' => 'addthis',
          'datestamp' => '1359545712',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'addthis',
        'version' => '7.x-4.0-alpha2',
      ),
      'addthis' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/addthis/addthis.module',
        'basename' => 'addthis.module',
        'name' => 'addthis',
        'info' => 
        array (
          'name' => 'AddThis',
          'description' => 'AddThis.com provides an easy way to share your content across the web.',
          'core' => '7.x',
          'package' => 'Sharing',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'field',
          ),
          'files' => 
          array (
            0 => 'addthis.module',
            1 => 'addthis.install',
            2 => 'addthis.test',
            3 => 'includes/addthis.admin.inc',
            4 => 'includes/addthis.block.inc',
            5 => 'includes/addthis.field.inc',
            6 => 'classes/AddThis.php',
            7 => 'classes/AddThisJson.php',
          ),
          'configure' => 'admin/config/user-interface/addthis',
          'version' => '7.x-4.0-alpha2',
          'project' => 'addthis',
          'datestamp' => '1359545712',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'addthis',
        'version' => '7.x-4.0-alpha2',
      ),
      'easy_breadcrumb' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/easy_breadcrumb/easy_breadcrumb.module',
        'basename' => 'easy_breadcrumb.module',
        'name' => 'easy_breadcrumb',
        'info' => 
        array (
          'name' => 'Easy Breadcrumb',
          'description' => 'Provides a plug-and-play block to be embedded in your pages, typically at some place near the page\'s header.',
          'files' => 
          array (
            0 => 'includes/EasyBreadcrumbConstants.inc',
          ),
          'configure' => 'admin/config/user-interface/easy-breadcrumb',
          'dependencies' => 
          array (
            0 => 'pathauto',
          ),
          'core' => '7.x',
          'version' => '7.x-2.9',
          'project' => 'easy_breadcrumb',
          'datestamp' => '1383350627',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'easy_breadcrumb',
        'version' => '7.x-2.9',
      ),
      'manualcrop' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/manualcrop/manualcrop.module',
        'basename' => 'manualcrop.module',
        'name' => 'manualcrop',
        'info' => 
        array (
          'name' => 'Manual Crop',
          'description' => 'Lets you manually crop an image based upon the image style effects.',
          'package' => 'Image',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image (>=7.8)',
          ),
          'version' => '7.x-1.4',
          'project' => 'manualcrop',
          'datestamp' => '1371932151',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'manualcrop',
        'version' => '7.x-1.4',
      ),
      'audio_js' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/audio_js/audio_js.module',
        'basename' => 'audio_js.module',
        'name' => 'audio_js',
        'info' => 
        array (
          'name' => 'audio.js',
          'description' => 'Provides a field formatter for the file field type using the audio tag and audio.js javascript library.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
            1 => 'file',
          ),
          'version' => '7.x-1.0',
          'project' => 'audio_js',
          'datestamp' => '1363056615',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'audio_js',
        'version' => '7.x-1.0',
      ),
      'backup_migrate_files' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/backup_migrate_files/backup_migrate_files.module',
        'basename' => 'backup_migrate_files.module',
        'name' => 'backup_migrate_files',
        'info' => 
        array (
          'name' => 'Backup and Migrate Files',
          'description' => 'Add file backup and restore support to backup and migrate.',
          'dependencies' => 
          array (
            0 => 'backup_migrate',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'backup_migrate_files.install',
            1 => 'backup_migrate_files.module',
            2 => 'includes/destinations.filesource.inc',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'backup_migrate_files',
          'datestamp' => '1380555221',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'backup_migrate_files',
        'version' => '7.x-1.x-dev',
      ),
      'collapsiblock' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/collapsiblock/collapsiblock.module',
        'basename' => 'collapsiblock.module',
        'name' => 'collapsiblock',
        'info' => 
        array (
          'name' => 'Collapsiblock',
          'description' => 'Makes blocks collapsible.',
          'package' => 'User interface',
          'core' => '7.x',
          'configure' => 'admin/config/user-interface/collapsiblock',
          'scripts' => 
          array (
            0 => 'collapsiblock.js',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'collapsiblock.css',
            ),
          ),
          'files' => 
          array (
            0 => 'collapsiblock.install',
            1 => 'collapsiblock.module',
          ),
          'version' => '7.x-1.0',
          'project' => 'collapsiblock',
          'datestamp' => '1304990815',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'collapsiblock',
        'version' => '7.x-1.0',
      ),
      'i18n_boxes' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/i18n_boxes/i18n_boxes.module',
        'basename' => 'i18n_boxes.module',
        'name' => 'i18n_boxes',
        'info' => 
        array (
          'name' => 'Boxes translation',
          'description' => 'Provides the ability to localize Boxes blocks.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'boxes',
            1 => 'ctools',
            2 => 'i18n_string',
          ),
          'package' => 'Multilanguage',
          'files' => 
          array (
            0 => 'i18n_boxes.module',
          ),
          'version' => '7.x-1.0',
          'project' => 'i18n_boxes',
          'datestamp' => '1334255450',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n_boxes',
        'version' => '7.x-1.0',
      ),
      'page_title' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/page_title/page_title.module',
        'basename' => 'page_title.module',
        'name' => 'page_title',
        'info' => 
        array (
          'name' => 'Page Title',
          'description' => 'Enhanced control over the page title (in the &lt;head> tag).',
          'core' => '7.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'page_title.module',
            1 => 'page_title.admin.inc',
            2 => 'page_title.tokens.inc',
            3 => 'page_title.test',
            4 => 'views/plugins/page_title_plugin_display_page_with_page_title.inc',
            5 => 'views_handler_field_node_page_title.inc',
          ),
          'configure' => 'admin/config/search/page-title',
          'version' => '7.x-2.7',
          'project' => 'page_title',
          'datestamp' => '1336556786',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'page_title',
        'version' => '7.x-2.7',
      ),
      'bad' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/coder/coder_sniffer/Test/bad.module',
        'basename' => 'bad.module',
        'name' => 'bad',
        'info' => 
        array (
          'files' => 
          array (
            0 => 'includes/non-existing.php',
            1 => 'bad.tpl.php',
          ),
          'hidden' => true,
          'version' => '7.x-2.0',
          'core' => '7.x',
          'project' => 'coder',
          'datestamp' => '1376244716',
          'dependencies' => 
          array (
          ),
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'coder',
        'version' => '7.x-2.0',
      ),
      'coder_review_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/coder/coder_review/tests/coder_review_test/coder_review_test.module',
        'basename' => 'coder_review_test.module',
        'name' => 'coder_review_test',
        'info' => 
        array (
          'name' => 'Coder Review Test',
          'package' => 'Coder',
          'core' => '7.x',
          'hidden' => true,
          'files' => 
          array (
            0 => 'coder_review_test.module',
          ),
          'version' => '7.x-2.0',
          'project' => 'coder',
          'datestamp' => '1376244716',
          'dependencies' => 
          array (
          ),
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'coder',
        'version' => '7.x-2.0',
      ),
      'coder_review' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/coder/coder_review/coder_review.module',
        'basename' => 'coder_review.module',
        'name' => 'coder_review',
        'info' => 
        array (
          'name' => 'Coder Review',
          'description' => '"Developer module" which reviews your code identifying coding style problems and where updates to the API are required.',
          'package' => 'Development',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'coder',
          ),
          'files' => 
          array (
            0 => 'tests/coder_review_test_case.tinc',
            1 => 'tests/coder_review_6x.test',
            2 => 'tests/coder_review_7x.test',
            3 => 'tests/coder_review_comment.test',
            4 => 'tests/coder_review_i18n.test',
            5 => 'tests/coder_review_security.test',
            6 => 'tests/coder_review_sql.test',
            7 => 'tests/coder_review_style.test',
            8 => 'tests/coder_review_sniffer.test',
          ),
          'version' => '7.x-2.0',
          'project' => 'coder',
          'datestamp' => '1376244716',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'coder',
        'version' => '7.x-2.0',
      ),
      'example' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/coder/coder_upgrade/tests/old/samples/example.module',
        'basename' => 'example.module',
        'name' => 'example',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'coder_upgrade' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/coder/coder_upgrade/coder_upgrade.module',
        'basename' => 'coder_upgrade.module',
        'name' => 'coder_upgrade',
        'info' => 
        array (
          'name' => 'Coder Upgrade',
          'description' => 'Modifies source code to assist with the upgrade of a module for changes to a relied upon API.',
          'package' => 'Development',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'gplib (<2.0)',
          ),
          'files' => 
          array (
            0 => 'coder_upgrade.test',
          ),
          'configure' => 'admin/config/development/coder/upgrade/settings',
          'version' => '7.x-2.0',
          'project' => 'coder',
          'datestamp' => '1376244716',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'coder',
        'version' => '7.x-2.0',
      ),
      'coder' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/coder/coder.module',
        'basename' => 'coder.module',
        'name' => 'coder',
        'info' => 
        array (
          'name' => 'Coder',
          'description' => 'Developer Module that assists with code review and version upgrade',
          'package' => 'Development',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'coder.module',
          ),
          'version' => '7.x-2.0',
          'project' => 'coder',
          'datestamp' => '1376244716',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'coder',
        'version' => '7.x-2.0',
      ),
      'entityreference_behavior_example' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/entityreference/examples/entityreference_behavior_example/entityreference_behavior_example.module',
        'basename' => 'entityreference_behavior_example.module',
        'name' => 'entityreference_behavior_example',
        'info' => 
        array (
          'name' => 'Entity Reference Behavior Example',
          'description' => 'Provides some example code for implementing Entity Reference behaviors.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entityreference',
          ),
          'version' => '7.x-1.1',
          'project' => 'entityreference',
          'datestamp' => '1384973110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entityreference',
        'version' => '7.x-1.1',
      ),
      'entityreference_feeds_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/entityreference/tests/modules/entityreference_feeds_test/entityreference_feeds_test.module',
        'basename' => 'entityreference_feeds_test.module',
        'name' => 'entityreference_feeds_test',
        'info' => 
        array (
          'name' => 'Entityreference - Feeds integration tests',
          'description' => 'Support module for the Entityreference - Feeds integration tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'feeds',
            1 => 'feeds_ui',
            2 => 'entityreference',
          ),
          'version' => '7.x-1.1',
          'project' => 'entityreference',
          'datestamp' => '1384973110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entityreference',
        'version' => '7.x-1.1',
      ),
      'entityreference' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/entityreference/entityreference.module',
        'basename' => 'entityreference.module',
        'name' => 'entityreference',
        'info' => 
        array (
          'name' => 'Entity Reference',
          'description' => 'Provides a field that can reference other entities.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'entityreference.migrate.inc',
            1 => 'plugins/selection/abstract.inc',
            2 => 'plugins/selection/views.inc',
            3 => 'plugins/behavior/abstract.inc',
            4 => 'views/entityreference_plugin_display.inc',
            5 => 'views/entityreference_plugin_style.inc',
            6 => 'views/entityreference_plugin_row_fields.inc',
            7 => 'tests/entityreference.handlers.test',
            8 => 'tests/entityreference.taxonomy.test',
            9 => 'tests/entityreference.admin.test',
            10 => 'tests/entityreference.feeds.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'entityreference',
          'datestamp' => '1384973110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entityreference',
        'version' => '7.x-1.1',
      ),
      'facetapi_alias' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/facetapi_alias/facetapi_alias.module',
        'basename' => 'facetapi_alias.module',
        'name' => 'facetapi_alias',
        'info' => 
        array (
          'name' => 'FacetAPI Alias',
          'description' => 'Allows administrators to configure the facet alias for FacetAPI facets.',
          'core' => '7.x',
          'package' => 'Search Toolkit',
          'version' => '7.x-1.0-beta1',
          'project' => 'facetapi_alias',
          'datestamp' => '1362144020',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'facetapi_alias',
        'version' => '7.x-1.0-beta1',
      ),
      'galleria' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/galleria/galleria.module',
        'basename' => 'galleria.module',
        'name' => 'galleria',
        'info' => 
        array (
          'name' => 'Galleria',
          'description' => 'Turns image fields of nodes into Galleria galleries with this JavaScript (JQuery) image gallery.',
          'core' => '7.x',
          'configure' => 'admin/config/media/galleria',
          'dependencies' => 
          array (
            0 => 'image',
            1 => 'libraries',
          ),
          'files' => 
          array (
            0 => 'galleria.module',
            1 => 'includes/galleria.admin.inc',
            2 => 'includes/views_plugin_style_galleria.inc',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'galleria',
          'datestamp' => '1336662057',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'galleria',
        'version' => '7.x-1.0-beta3',
      ),
      'facetapi_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/facetapi_i18n/facetapi_i18n.module',
        'basename' => 'facetapi_i18n.module',
        'name' => 'facetapi_i18n',
        'info' => 
        array (
          'name' => 'Facet API Translation',
          'description' => 'Integrates Facet API with the i18n module to translate custom strings and mapped facet values.',
          'dependencies' => 
          array (
            0 => 'i18n_string',
            1 => 'facetapi (>=7.x-1.0-rc1)',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-1.0-beta2',
          'project' => 'facetapi_i18n',
          'datestamp' => '1327885859',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'facetapi_i18n',
        'version' => '7.x-1.0-beta2',
      ),
      'imagecrop' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/imagecrop/imagecrop.module',
        'basename' => 'imagecrop.module',
        'name' => 'imagecrop',
        'info' => 
        array (
          'name' => 'Image javascript crop',
          'description' => 'Provides a javascript crop toolbox via the image effects.',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-rc3',
          'files' => 
          array (
            0 => 'includes/imagecrop.module',
            1 => 'includes/imagecrop.admin.inc',
            2 => 'includes/imagecrop.theme.inc',
            3 => 'includes/imagecrop.class.inc',
          ),
          'configure' => 'admin/config/media/imagecrop',
          'project' => 'imagecrop',
          'datestamp' => '1314822417',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'imagecrop',
        'version' => '7.x-1.0-rc3',
      ),
      'emfield' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/emfield/emfield.module',
        'basename' => 'emfield.module',
        'name' => 'emfield',
        'info' => 
        array (
          'name' => 'Embedded Media Field',
          'description' => 'Provides an embedded media widget for file fields.',
          'dependencies' => 
          array (
            0 => 'media',
            1 => 'media_internet',
          ),
          'package' => 'Media',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'emfield.install',
            1 => 'emfield.module',
          ),
          'version' => '7.x-1.0-alpha2',
          'project' => 'emfield',
          'datestamp' => '1354762061',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'emfield',
        'version' => '7.x-1.0-alpha2',
      ),
      'custom_pagers' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/custom_pagers/custom_pagers.module',
        'basename' => 'custom_pagers.module',
        'name' => 'custom_pagers',
        'info' => 
        array (
          'name' => 'Custom Pagers',
          'core' => '7.x',
          'description' => 'Allows administrators to define custom pagers for navigation in lists of nodes.',
          'package' => 'Other',
          'files' => 
          array (
            0 => 'views/custom_pagers.views.inc',
            1 => 'views/custom_pagers_plugin_display_simple.inc',
            2 => 'views/custom_pagers_plugin_style_php_array.inc',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'custom_pagers',
          'datestamp' => '1380568463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'custom_pagers',
        'version' => '7.x-1.x-dev',
      ),
      'apachesolr_multilingual_confgen' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/apachesolr_multilingual/apachesolr_multilingual_confgen/apachesolr_multilingual_confgen.module',
        'basename' => 'apachesolr_multilingual_confgen.module',
        'name' => 'apachesolr_multilingual_confgen',
        'info' => 
        array (
          'name' => 'Apache Solr Multilingual Config Generator',
          'description' => 'Apache Solr Config Generator Add-On for Multilingual and non-English search with Solr',
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'configure' => 'admin/config/search/apachesolr/confgen/multilingual',
          'dependencies' => 
          array (
            0 => 'apachesolr_multilingual',
            1 => 'apachesolr_confgen',
            2 => 'i18n_variable',
          ),
          'files' => 
          array (
            0 => 'apachesolr_multilingual_confgen.admin.inc',
            1 => 'apachesolr_multilingual_confgen.module',
            2 => 'apachesolr_multilingual_confgen.generator.inc',
            3 => 'apachesolr_multilingual_confgen.variable.inc',
            4 => 'tests/solr_multilingual.test',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'apachesolr_multilingual',
          'datestamp' => '1385473110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'apachesolr_multilingual',
        'version' => '7.x-1.0-rc1',
      ),
      'apachesolr_multilingual' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/apachesolr_multilingual/apachesolr_multilingual.module',
        'basename' => 'apachesolr_multilingual.module',
        'name' => 'apachesolr_multilingual',
        'info' => 
        array (
          'name' => 'Apache Solr Multilingual',
          'description' => 'Multilingual and non-English search with Solr. This module extends Apache Solr search.',
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'configure' => 'admin/config/search/apachesolr/multilingual',
          'dependencies' => 
          array (
            0 => 'apachesolr_search (>=1.5)',
            1 => 'locale',
          ),
          'files' => 
          array (
            0 => 'DrupalApacheSolrMultilingualService.php',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'apachesolr_multilingual',
          'datestamp' => '1385473110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'apachesolr_multilingual',
        'version' => '7.x-1.0-rc1',
      ),
      'imagezoomer' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/imagezoomer/imagezoomer.module',
        'basename' => 'imagezoomer.module',
        'name' => 'imagezoomer',
        'info' => 
        array (
          'name' => 'ImageZoomer',
          'description' => 'Integrates some image zoom jquery plugins to Drupal 7. Once installed, it will provide field formatters for zooming images.',
          'package' => 'User interface',
          'core' => '7.x',
          'scripts' => 
          array (
            0 => 'imagezoomer.js',
          ),
          'dependencies' => 
          array (
            0 => 'image',
            1 => 'jquery_update',
          ),
          'configure' => 'admin/config/user-interface/imagezoomer',
          'version' => '7.x-1.0',
          'project' => 'imagezoomer',
          'datestamp' => '1359635468',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'imagezoomer',
        'version' => '7.x-1.0',
      ),
      'user_reference' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/references/user_reference/user_reference.module',
        'basename' => 'user_reference.module',
        'name' => 'user_reference',
        'info' => 
        array (
          'name' => 'User Reference',
          'description' => 'Defines a field type for referencing a user from a node.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'references',
            2 => 'options',
          ),
          'version' => '7.x-2.1',
          'project' => 'references',
          'datestamp' => '1360265821',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'references',
        'version' => '7.x-2.1',
      ),
      'node_reference' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/references/node_reference/node_reference.module',
        'basename' => 'node_reference.module',
        'name' => 'node_reference',
        'info' => 
        array (
          'name' => 'Node Reference',
          'description' => 'Defines a field type for referencing one node from another.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'references',
            2 => 'options',
          ),
          'files' => 
          array (
            0 => 'node_reference.test',
          ),
          'version' => '7.x-2.1',
          'project' => 'references',
          'datestamp' => '1360265821',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'references',
        'version' => '7.x-2.1',
      ),
      'references' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/references/references.module',
        'basename' => 'references.module',
        'name' => 'references',
        'info' => 
        array (
          'name' => 'References',
          'description' => 'Defines common base features for the various reference field types.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'views/references_handler_relationship.inc',
            1 => 'views/references_handler_argument.inc',
            2 => 'views/references_plugin_display.inc',
            3 => 'views/references_plugin_style.inc',
            4 => 'views/references_plugin_row_fields.inc',
          ),
          'version' => '7.x-2.1',
          'project' => 'references',
          'datestamp' => '1360265821',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'references',
        'version' => '7.x-2.1',
      ),
      'socialmedia' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/socialmedia/socialmedia.module',
        'basename' => 'socialmedia.module',
        'name' => 'socialmedia',
        'info' => 
        array (
          'name' => 'Social media',
          'description' => 'Example module to demonstrate module socialmedia.',
          'package' => 'Social media',
          'core' => '7.x',
          'php' => '5.1',
          'configure' => 'admin/config/media/socialmedia',
          'files' => 
          array (
            0 => 'socialmedia.module',
            1 => 'socialmedia.admin.inc',
            2 => 'socialmedia.widgetx_elements.inc',
          ),
          'version' => '7.x-1.0-beta13',
          'project' => 'socialmedia',
          'datestamp' => '1346720845',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => 0,
        'project' => 'socialmedia',
        'version' => '7.x-1.0-beta13',
      ),
      'admin_menu_toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
        'basename' => 'admin_menu_toolbar.module',
        'name' => 'admin_menu_toolbar',
        'info' => 
        array (
          'name' => 'Administration menu Toolbar style',
          'description' => 'A better Toolbar.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'admin_menu',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'admin_menu',
          'datestamp' => '1359651687',
          'php' => '5.2.4',
        ),
        'schema_version' => '6300',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc4',
      ),
      'admin_devel' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/admin_menu/admin_devel/admin_devel.module',
        'basename' => 'admin_devel.module',
        'name' => 'admin_devel',
        'info' => 
        array (
          'name' => 'Administration Development tools',
          'description' => 'Administration and debugging functionality for developers and site builders.',
          'package' => 'Administration',
          'core' => '7.x',
          'scripts' => 
          array (
            0 => 'admin_devel.js',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'admin_menu',
          'datestamp' => '1359651687',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc4',
      ),
      'admin_menu' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/admin_menu/admin_menu.module',
        'basename' => 'admin_menu.module',
        'name' => 'admin_menu',
        'info' => 
        array (
          'name' => 'Administration menu',
          'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
          'package' => 'Administration',
          'core' => '7.x',
          'configure' => 'admin/config/administration/admin_menu',
          'dependencies' => 
          array (
            0 => 'system (>7.10)',
          ),
          'files' => 
          array (
            0 => 'tests/admin_menu.test',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'admin_menu',
          'datestamp' => '1359651687',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc4',
      ),
      'draggableviews_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/draggableviews/test/draggableviews_test/draggableviews_test.module',
        'basename' => 'draggableviews_test.module',
        'name' => 'draggableviews_test',
        'info' => 
        array (
          'name' => 'Draggableviews Test',
          'description' => 'Provides views for testing.',
          'dependencies' => 
          array (
            0 => 'draggableviews',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-2.0',
          'project' => 'draggableviews',
          'datestamp' => '1338282056',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'draggableviews',
        'version' => '7.x-2.0',
      ),
      'draggableviews' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/draggableviews/draggableviews.module',
        'basename' => 'draggableviews.module',
        'name' => 'draggableviews',
        'info' => 
        array (
          'name' => 'Draggableviews',
          'description' => 'Makes Views draggable',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'entity',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'handlers/draggableviews_handler.inc',
            1 => 'handlers/draggableviews_handler_native.inc',
            2 => 'handlers/draggableviews_handler_fieldapi.inc',
            3 => 'views/draggableviews_handler_field_draggable.inc',
            4 => 'views/draggableviews_handler_sort.inc',
            5 => 'views/draggableviews_join_handler.inc',
            6 => 'test/draggableviews.test',
          ),
          'version' => '7.x-2.0',
          'project' => 'draggableviews',
          'datestamp' => '1338282056',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'draggableviews',
        'version' => '7.x-2.0',
      ),
      'piwik' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/piwik/piwik.module',
        'basename' => 'piwik.module',
        'name' => 'piwik',
        'info' => 
        array (
          'name' => 'Piwik Web analytics',
          'description' => 'Adds Piwik javascript tracking code to all your site\'s pages.',
          'core' => '7.x',
          'package' => 'Statistics',
          'configure' => 'admin/config/system/piwik',
          'files' => 
          array (
            0 => 'piwik.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'version' => '7.x-2.4',
          'project' => 'piwik',
          'datestamp' => '1353789816',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'project' => 'piwik',
        'version' => '7.x-2.4',
      ),
      'environment_indicator' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/environment_indicator/environment_indicator.module',
        'basename' => 'environment_indicator.module',
        'name' => 'environment_indicator',
        'info' => 
        array (
          'name' => 'Environment indicator',
          'description' => 'Adds a color indicator for the different environments.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'scripts' => 
          array (
            0 => 'environment_indicator.js',
            1 => 'color.js',
          ),
          'files' => 
          array (
            0 => 'plugins/ctools_export_ui_environment_indicator.class.php',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'environment_indicator.css',
            ),
          ),
          'version' => '7.x-2.0',
          'project' => 'environment_indicator',
          'datestamp' => '1377024690',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'environment_indicator',
        'version' => '7.x-2.0',
      ),
      'pathauto_persist' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/pathauto_persist/pathauto_persist.module',
        'basename' => 'pathauto_persist.module',
        'name' => 'pathauto_persist',
        'info' => 
        array (
          'name' => 'Pathauto persistant state',
          'description' => 'Keeps track and enforces a persistant Pathauto state per node.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'pathauto',
          ),
          'files' => 
          array (
            0 => 'pathauto_persist.test',
          ),
          'version' => '7.x-1.3',
          'project' => 'pathauto_persist',
          'datestamp' => '1341597467',
          'php' => '5.2.4',
        ),
        'schema_version' => '6000',
        'project' => 'pathauto_persist',
        'version' => '7.x-1.3',
      ),
      'libraries_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/libraries/tests/libraries_test.module',
        'basename' => 'libraries_test.module',
        'name' => 'libraries_test',
        'info' => 
        array (
          'name' => 'Libraries test module',
          'description' => 'Tests library detection and loading.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'hidden' => true,
          'version' => '7.x-2.1',
          'project' => 'libraries',
          'datestamp' => '1362848412',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'libraries',
        'version' => '7.x-2.1',
      ),
      'libraries' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/libraries/libraries.module',
        'basename' => 'libraries.module',
        'name' => 'libraries',
        'info' => 
        array (
          'name' => 'Libraries',
          'description' => 'Allows version-dependent and shared usage of external libraries.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/libraries.test',
          ),
          'version' => '7.x-2.1',
          'project' => 'libraries',
          'datestamp' => '1362848412',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'libraries',
        'version' => '7.x-2.1',
      ),
      'entity_autocomplete_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/entity_autocomplete/tests/entity_autocomplete_test.module',
        'basename' => 'entity_autocomplete_test.module',
        'name' => 'entity_autocomplete_test',
        'info' => 
        array (
          'name' => 'Entity Autocomplete module form element tests',
          'description' => 'Support module for Entity Autocomplete form element testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.0-beta3',
          'project' => 'entity_autocomplete',
          'datestamp' => '1355614650',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity_autocomplete',
        'version' => '7.x-1.0-beta3',
      ),
      'entity_autocomplete' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/entity_autocomplete/entity_autocomplete.module',
        'basename' => 'entity_autocomplete.module',
        'name' => 'entity_autocomplete',
        'info' => 
        array (
          'name' => 'Entity Autocomplete',
          'description' => 'Provides functionalities for entity fields autocompletion, like a menu callback that autocompletes any entity that defines a label, or a ready to use form element.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/entity_autocomplete.test',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'entity_autocomplete',
          'datestamp' => '1355614650',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity_autocomplete',
        'version' => '7.x-1.0-beta3',
      ),
      'media_vimeo' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/media_vimeo/media_vimeo.module',
        'basename' => 'media_vimeo.module',
        'name' => 'media_vimeo',
        'info' => 
        array (
          'name' => 'Media: Vimeo',
          'description' => 'Provides Vimeo support to the Media module.',
          'package' => 'Media',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'media_vimeo.module',
            1 => 'includes/MediaInternetVimeoHandler.inc',
            2 => 'includes/MediaVimeoStreamWrapper.inc',
            3 => 'includes/MediaVimeoStyles.inc',
            4 => 'includes/media_vimeo.formatters.inc',
            5 => 'includes/media_vimeo.styles.inc',
            6 => 'includes/media_vimeo.variables.inc',
          ),
          'dependencies' => 
          array (
            0 => 'media_internet',
          ),
          'version' => '7.x-1.0-beta5',
          'project' => 'media_vimeo',
          'datestamp' => '1332792648',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media_vimeo',
        'version' => '7.x-1.0-beta5',
      ),
      'apachesolr_multisitesearch' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/apachesolr_multisitesearch/apachesolr_multisitesearch.module',
        'basename' => 'apachesolr_multisitesearch.module',
        'name' => 'apachesolr_multisitesearch',
        'info' => 
        array (
          'name' => 'Apache Solr Multisite Search',
          'description' => 'Search across multiple sites with Solr',
          'dependencies' => 
          array (
            0 => 'apachesolr',
            1 => 'apachesolr_search',
          ),
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'version' => '7.x-1.0',
          'project' => 'apachesolr_multisitesearch',
          'datestamp' => '1341318377',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'apachesolr_multisitesearch',
        'version' => '7.x-1.0',
      ),
      'file_entity_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/media/file_entity/tests/file_entity_test.module',
        'basename' => 'file_entity_test.module',
        'name' => 'file_entity_test',
        'info' => 
        array (
          'name' => 'File Entity Test',
          'description' => 'Support module for File Entity tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file_entity',
          ),
          'hidden' => true,
          'version' => '7.x-1.3',
          'project' => 'media',
          'datestamp' => '1362211819',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-1.3',
      ),
      'file_entity' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/media/file_entity/file_entity.module',
        'basename' => 'file_entity.module',
        'name' => 'file_entity',
        'info' => 
        array (
          'name' => 'File entity',
          'description' => 'Extends Drupal file entities to be fieldable and viewable.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'file_entity.field.inc',
          ),
          'configure' => 'admin/config/media/file-types',
          'version' => '7.x-1.3',
          'project' => 'media',
          'datestamp' => '1362211819',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'media',
        'version' => '7.x-1.3',
      ),
      'media_internet' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/media/modules/media_internet/media_internet.module',
        'basename' => 'media_internet.module',
        'name' => 'media_internet',
        'info' => 
        array (
          'name' => 'Media Internet Sources',
          'description' => 'Provides an API for accessing media on various internet services',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'files' => 
          array (
            0 => 'media_internet.module',
          ),
          'version' => '7.x-1.3',
          'project' => 'media',
          'datestamp' => '1362211819',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-1.3',
      ),
      'media' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/media/media.module',
        'basename' => 'media.module',
        'name' => 'media',
        'info' => 
        array (
          'name' => 'Media',
          'description' => 'Provides the core Media API',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file_entity',
            1 => 'image',
          ),
          'files' => 
          array (
            0 => 'includes/MediaReadOnlyStreamWrapper.inc',
            1 => 'test/media.types.test',
            2 => 'test/media.entity.test',
          ),
          'configure' => 'admin/config/media/browser',
          'version' => '7.x-1.3',
          'project' => 'media',
          'datestamp' => '1362211819',
          'php' => '5.2.4',
        ),
        'schema_version' => '7020',
        'project' => 'media',
        'version' => '7.x-1.3',
      ),
      'imce_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/imce_wysiwyg/imce_wysiwyg.module',
        'basename' => 'imce_wysiwyg.module',
        'name' => 'imce_wysiwyg',
        'info' => 
        array (
          'name' => 'IMCE Wysiwyg API bridge',
          'description' => 'Makes IMCE available as plugin for client-side editors integrated via Wysiwyg API.',
          'package' => 'User interface',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'imce',
            1 => 'wysiwyg',
          ),
          'version' => '7.x-1.0',
          'project' => 'imce_wysiwyg',
          'datestamp' => '1317851503',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'imce_wysiwyg',
        'version' => '7.x-1.0',
      ),
      'help_example' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/advanced_help/help_example/help_example.module',
        'basename' => 'help_example.module',
        'name' => 'help_example',
        'info' => 
        array (
          'name' => 'Advanced help example',
          'description' => 'A example help module to demonstrate the advanced help module.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advanced_help',
          ),
          'files' => 
          array (
            0 => 'help_example.module',
          ),
          'version' => '7.x-1.0',
          'project' => 'advanced_help',
          'datestamp' => '1321022730',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'advanced_help',
        'version' => '7.x-1.0',
      ),
      'advanced_help' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/advanced_help/advanced_help.module',
        'basename' => 'advanced_help.module',
        'name' => 'advanced_help',
        'info' => 
        array (
          'name' => 'Advanced help',
          'description' => 'Allow advanced help and documentation.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'advanced_help.module',
            1 => 'advanced_help.install',
          ),
          'version' => '7.x-1.0',
          'project' => 'advanced_help',
          'datestamp' => '1321022730',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'advanced_help',
        'version' => '7.x-1.0',
      ),
      'nodequeue_service' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/nodequeue/addons/nodequeue_service/nodequeue_service.module',
        'basename' => 'nodequeue_service.module',
        'name' => 'nodequeue_service',
        'info' => 
        array (
          'name' => 'Nodequeue Service',
          'description' => 'Provides a nodequeue service.',
          'package' => 'Nodequeue',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'services',
            1 => 'nodequeue',
          ),
          'files' => 
          array (
            0 => 'nodequeue_service.inc',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'nodequeue',
          'datestamp' => '1316558104',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'nodequeue',
        'version' => '7.x-2.0-beta1',
      ),
      'smartqueue' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/nodequeue/smartqueue.module',
        'basename' => 'smartqueue.module',
        'name' => 'smartqueue',
        'info' => 
        array (
          'name' => 'Smartqueue taxonomy',
          'description' => 'Creates a node queue for each taxonomy vocabulary',
          'package' => 'Nodequeue',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'nodequeue',
            1 => 'taxonomy',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'nodequeue',
          'datestamp' => '1316558104',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'nodequeue',
        'version' => '7.x-2.0-beta1',
      ),
      'nodequeue_generate' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/nodequeue/nodequeue_generate.module',
        'basename' => 'nodequeue_generate.module',
        'name' => 'nodequeue_generate',
        'info' => 
        array (
          'name' => 'Nodequeue generate',
          'description' => 'Bulk assign nodes into queues for quickly populating a site.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'nodequeue',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'nodequeue_generate.module',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'nodequeue',
          'datestamp' => '1316558104',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'nodequeue',
        'version' => '7.x-2.0-beta1',
      ),
      'nodequeue' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/nodequeue/nodequeue.module',
        'basename' => 'nodequeue.module',
        'name' => 'nodequeue',
        'info' => 
        array (
          'name' => 'Nodequeue',
          'description' => 'Create queues which can contain nodes in arbitrary order',
          'package' => 'Nodequeue',
          'core' => '7.x',
          'configure' => 'admin/structure/nodequeue/settings',
          'files' => 
          array (
            0 => 'includes/views/nodequeue.views.inc',
            1 => 'includes/nodequeue.actions.inc',
            2 => 'includes/views/nodequeue_handler_argument_subqueue_qid.inc',
            3 => 'includes/views/nodequeue_handler_field_all_queues.inc',
            4 => 'includes/views/nodequeue_handler_field_all_subqueues.inc',
            5 => 'includes/views/nodequeue_handler_field_links.inc',
            6 => 'includes/views/nodequeue_handler_field_queue_tab.inc',
            7 => 'includes/views/nodequeue_handler_filter_in_queue.inc',
            8 => 'includes/views/nodequeue_handler_relationship_nodequeue.inc',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'nodequeue',
          'datestamp' => '1316558104',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'nodequeue',
        'version' => '7.x-2.0-beta1',
      ),
      'media_ustream' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/media_ustream/media_ustream.module',
        'basename' => 'media_ustream.module',
        'name' => 'media_ustream',
        'info' => 
        array (
          'name' => 'Media: UStream',
          'description' => 'Provides UStream support to the Media module.',
          'package' => 'Media',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'media_ustream.module',
            1 => 'includes/MediaInternetUStreamHandler.inc',
            2 => 'includes/MediaUStreamStreamWrapper.inc',
            3 => 'includes/media_ustream.formatters.inc',
            4 => 'includes/media_ustream.variables.inc',
          ),
          'dependencies' => 
          array (
            0 => 'media',
            1 => 'media_internet',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'media_ustream',
          'datestamp' => '1380586613',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media_ustream',
        'version' => '7.x-1.x-dev',
      ),
      'node_adoption' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/node_adoption/node_adoption.module',
        'basename' => 'node_adoption.module',
        'name' => 'node_adoption',
        'info' => 
        array (
          'name' => 'Node Adoption',
          'description' => 'Define a default user to take ownership of nodes whose authors are deleted, or mass transfer an author\'s nodes to another user.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node_adoption.module',
            1 => 'node_adoption.admin.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'node_adoption',
          'datestamp' => '1382278749',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'node_adoption',
        'version' => '7.x-1.1',
      ),
      'update_advanced' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/update_advanced/update_advanced.module',
        'basename' => 'update_advanced.module',
        'name' => 'update_advanced',
        'info' => 
        array (
          'name' => 'Update Status Advanced Settings',
          'description' => 'Adds advanced settings and extra functionality to the Update Manager module in core.',
          'configure' => 'admin/reports/updates/settings',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'update',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'update_advanced',
          'datestamp' => '1365179719',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'update_advanced',
        'version' => '7.x-1.0-rc1',
      ),
      'xmlsitemap_taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/xmlsitemap/xmlsitemap_taxonomy/xmlsitemap_taxonomy.module',
        'basename' => 'xmlsitemap_taxonomy.module',
        'name' => 'xmlsitemap_taxonomy',
        'info' => 
        array (
          'name' => 'XML sitemap taxonomy',
          'description' => 'Add taxonomy term links to the sitemap.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
            1 => 'taxonomy',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_taxonomy.module',
            1 => 'xmlsitemap_taxonomy.install',
            2 => 'xmlsitemap_taxonomy.test',
          ),
          'version' => '7.x-2.0-rc2',
          'project' => 'xmlsitemap',
          'datestamp' => '1354926579',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'xmlsitemap',
        'version' => '7.x-2.0-rc2',
      ),
      'xmlsitemap_menu' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/xmlsitemap/xmlsitemap_menu/xmlsitemap_menu.module',
        'basename' => 'xmlsitemap_menu.module',
        'name' => 'xmlsitemap_menu',
        'info' => 
        array (
          'name' => 'XML sitemap menu',
          'description' => 'Adds menu item links to the sitemap.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
            1 => 'menu',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_menu.module',
            1 => 'xmlsitemap_menu.install',
            2 => 'xmlsitemap_menu.test',
          ),
          'version' => '7.x-2.0-rc2',
          'project' => 'xmlsitemap',
          'datestamp' => '1354926579',
          'php' => '5.2.4',
        ),
        'schema_version' => '6201',
        'project' => 'xmlsitemap',
        'version' => '7.x-2.0-rc2',
      ),
      'xmlsitemap_custom' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/xmlsitemap/xmlsitemap_custom/xmlsitemap_custom.module',
        'basename' => 'xmlsitemap_custom.module',
        'name' => 'xmlsitemap_custom',
        'info' => 
        array (
          'name' => 'XML sitemap custom',
          'description' => 'Adds user configurable links to the sitemap.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_custom.module',
            1 => 'xmlsitemap_custom.admin.inc',
            2 => 'xmlsitemap_custom.install',
            3 => 'xmlsitemap_custom.test',
          ),
          'configure' => 'admin/config/search/xmlsitemap/custom',
          'version' => '7.x-2.0-rc2',
          'project' => 'xmlsitemap',
          'datestamp' => '1354926579',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'xmlsitemap',
        'version' => '7.x-2.0-rc2',
      ),
      'xmlsitemap_engines_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/xmlsitemap/xmlsitemap_engines/tests/xmlsitemap_engines_test.module',
        'basename' => 'xmlsitemap_engines_test.module',
        'name' => 'xmlsitemap_engines_test',
        'info' => 
        array (
          'name' => 'XML sitemap engines test',
          'description' => 'Support module for XML sitemap engines testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'xmlsitemap_engines_test.module',
          ),
          'version' => '7.x-2.0-rc2',
          'hidden' => true,
          'project' => 'xmlsitemap',
          'datestamp' => '1354926579',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'xmlsitemap',
        'version' => '7.x-2.0-rc2',
      ),
      'xmlsitemap_engines' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/xmlsitemap/xmlsitemap_engines/xmlsitemap_engines.module',
        'basename' => 'xmlsitemap_engines.module',
        'name' => 'xmlsitemap_engines',
        'info' => 
        array (
          'name' => 'XML sitemap engines',
          'description' => 'Submit the sitemap to search engines.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_engines.module',
            1 => 'xmlsitemap_engines.admin.inc',
            2 => 'xmlsitemap_engines.install',
            3 => 'tests/xmlsitemap_engines.test',
          ),
          'recommends' => 
          array (
            0 => 'site_verify',
          ),
          'configure' => 'admin/config/search/xmlsitemap/engines',
          'version' => '7.x-2.0-rc2',
          'project' => 'xmlsitemap',
          'datestamp' => '1354926579',
          'php' => '5.2.4',
        ),
        'schema_version' => '6202',
        'project' => 'xmlsitemap',
        'version' => '7.x-2.0-rc2',
      ),
      'xmlsitemap_node' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/xmlsitemap/xmlsitemap_node/xmlsitemap_node.module',
        'basename' => 'xmlsitemap_node.module',
        'name' => 'xmlsitemap_node',
        'info' => 
        array (
          'name' => 'XML sitemap node',
          'description' => 'Adds content links to the sitemap.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_node.module',
            1 => 'xmlsitemap_node.install',
            2 => 'xmlsitemap_node.test',
          ),
          'version' => '7.x-2.0-rc2',
          'project' => 'xmlsitemap',
          'datestamp' => '1354926579',
          'php' => '5.2.4',
        ),
        'schema_version' => '6201',
        'project' => 'xmlsitemap',
        'version' => '7.x-2.0-rc2',
      ),
      'xmlsitemap_modal' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/xmlsitemap/xmlsitemap_modal/xmlsitemap_modal.module',
        'basename' => 'xmlsitemap_modal.module',
        'name' => 'xmlsitemap_modal',
        'info' => 
        array (
          'name' => 'XML sitemap modal UI',
          'description' => 'Provides an AJAX modal UI for common XML sitemap tasks.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
            1 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_modal.module',
          ),
          'hidden' => true,
          'version' => '7.x-2.0-rc2',
          'project' => 'xmlsitemap',
          'datestamp' => '1354926579',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'xmlsitemap',
        'version' => '7.x-2.0-rc2',
      ),
      'xmlsitemap_user' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/xmlsitemap/xmlsitemap_user/xmlsitemap_user.module',
        'basename' => 'xmlsitemap_user.module',
        'name' => 'xmlsitemap_user',
        'info' => 
        array (
          'name' => 'XML sitemap user',
          'description' => 'Adds user profile links to the sitemap.',
          'package' => 'XML sitemap',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'xmlsitemap_user.module',
            1 => 'xmlsitemap_user.install',
            2 => 'xmlsitemap_user.test',
          ),
          'version' => '7.x-2.0-rc2',
          'project' => 'xmlsitemap',
          'datestamp' => '1354926579',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'xmlsitemap',
        'version' => '7.x-2.0-rc2',
      ),
      'xmlsitemap_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/xmlsitemap/xmlsitemap_i18n/xmlsitemap_i18n.module',
        'basename' => 'xmlsitemap_i18n.module',
        'name' => 'xmlsitemap_i18n',
        'info' => 
        array (
          'name' => 'XML sitemap internationalization',
          'description' => 'Enables multilingual XML sitemaps.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
            1 => 'i18n',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_i18n.module',
            1 => 'xmlsitemap_i18n.test',
          ),
          'version' => '7.x-2.0-rc2',
          'project' => 'xmlsitemap',
          'datestamp' => '1354926579',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'xmlsitemap',
        'version' => '7.x-2.0-rc2',
      ),
      'xmlsitemap' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/xmlsitemap/xmlsitemap.module',
        'basename' => 'xmlsitemap.module',
        'name' => 'xmlsitemap',
        'info' => 
        array (
          'name' => 'XML sitemap',
          'description' => 'Creates an XML sitemap conforming to the <a href="http://sitemaps.org/">sitemaps.org protocol</a>.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'xmlsitemap.module',
            1 => 'xmlsitemap.inc',
            2 => 'xmlsitemap.admin.inc',
            3 => 'xmlsitemap.drush.inc',
            4 => 'xmlsitemap.generate.inc',
            5 => 'xmlsitemap.xmlsitemap.inc',
            6 => 'xmlsitemap.pages.inc',
            7 => 'xmlsitemap.install',
            8 => 'xmlsitemap.test',
          ),
          'recommends' => 
          array (
            0 => 'robotstxt',
          ),
          'configure' => 'admin/config/search/xmlsitemap',
          'version' => '7.x-2.0-rc2',
          'project' => 'xmlsitemap',
          'datestamp' => '1354926579',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => 'xmlsitemap',
        'version' => '7.x-2.0-rc2',
      ),
      'views_slideshow_cycle' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/views_slideshow/contrib/views_slideshow_cycle/views_slideshow_cycle.module',
        'basename' => 'views_slideshow_cycle.module',
        'name' => 'views_slideshow_cycle',
        'info' => 
        array (
          'name' => 'Views Slideshow: Cycle',
          'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
          'dependencies' => 
          array (
            0 => 'views_slideshow',
            1 => 'libraries',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_slideshow_cycle.module',
            1 => 'views_slideshow_cycle.views_slideshow.inc',
            2 => 'theme/views_slideshow_cycle.theme.inc',
          ),
          'version' => '7.x-3.1',
          'project' => 'views_slideshow',
          'datestamp' => '1382584826',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_slideshow',
        'version' => '7.x-3.1',
      ),
      'views_slideshow' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/views_slideshow/views_slideshow.module',
        'basename' => 'views_slideshow.module',
        'name' => 'views_slideshow',
        'info' => 
        array (
          'name' => 'Views Slideshow',
          'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
          'dependencies' => 
          array (
            0 => 'views (>=3.0)',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_slideshow.module',
            1 => 'theme/views_slideshow.theme.inc',
            2 => 'views_slideshow.views.inc',
            3 => 'views_slideshow_plugin_style_slideshow.inc',
          ),
          'version' => '7.x-3.1',
          'project' => 'views_slideshow',
          'datestamp' => '1382584826',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_slideshow',
        'version' => '7.x-3.1',
      ),
      'rules_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/rules/rules_i18n/rules_i18n.module',
        'basename' => 'rules_i18n.module',
        'name' => 'rules_i18n',
        'info' => 
        array (
          'name' => 'Rules translation',
          'description' => 'Allows translating rules.',
          'dependencies' => 
          array (
            0 => 'rules',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_i18n.i18n.inc',
            1 => 'rules_i18n.rules.inc',
            2 => 'rules_i18n.test',
          ),
          'version' => '7.x-2.6',
          'project' => 'rules',
          'datestamp' => '1383063052',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.6',
      ),
      'rules_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/rules/tests/rules_test.module',
        'basename' => 'rules_test.module',
        'name' => 'rules_test',
        'info' => 
        array (
          'name' => 'Rules Tests',
          'description' => 'Support module for the Rules tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_test.rules.inc',
            1 => 'rules_test.rules_defaults.inc',
          ),
          'hidden' => true,
          'version' => '7.x-2.6',
          'project' => 'rules',
          'datestamp' => '1383063052',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.6',
      ),
      'rules_scheduler_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/rules/rules_scheduler/tests/rules_scheduler_test.module',
        'basename' => 'rules_scheduler_test.module',
        'name' => 'rules_scheduler_test',
        'info' => 
        array (
          'name' => 'Rules Scheduler Tests',
          'description' => 'Support module for the Rules Scheduler tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_scheduler_test.inc',
          ),
          'hidden' => true,
          'version' => '7.x-2.6',
          'project' => 'rules',
          'datestamp' => '1383063052',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.6',
      ),
      'rules_scheduler' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/rules/rules_scheduler/rules_scheduler.module',
        'basename' => 'rules_scheduler.module',
        'name' => 'rules_scheduler',
        'info' => 
        array (
          'name' => 'Rules Scheduler',
          'description' => 'Schedule the execution of Rules components using actions.',
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_scheduler.admin.inc',
            1 => 'rules_scheduler.module',
            2 => 'rules_scheduler.install',
            3 => 'rules_scheduler.rules.inc',
            4 => 'rules_scheduler.test',
            5 => 'includes/rules_scheduler.handler.inc',
            6 => 'includes/rules_scheduler.views_default.inc',
            7 => 'includes/rules_scheduler.views.inc',
            8 => 'includes/rules_scheduler_views_filter.inc',
          ),
          'version' => '7.x-2.6',
          'project' => 'rules',
          'datestamp' => '1383063052',
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'project' => 'rules',
        'version' => '7.x-2.6',
      ),
      'rules_admin' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/rules/rules_admin/rules_admin.module',
        'basename' => 'rules_admin.module',
        'name' => 'rules_admin',
        'info' => 
        array (
          'name' => 'Rules UI',
          'description' => 'Administrative interface for managing rules.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_admin.module',
            1 => 'rules_admin.inc',
          ),
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'version' => '7.x-2.6',
          'project' => 'rules',
          'datestamp' => '1383063052',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.6',
      ),
      'rules' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/rules/rules.module',
        'basename' => 'rules.module',
        'name' => 'rules',
        'info' => 
        array (
          'name' => 'Rules',
          'description' => 'React on events and conditionally evaluate actions.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules.features.inc',
            1 => 'tests/rules.test',
            2 => 'includes/faces.inc',
            3 => 'includes/rules.core.inc',
            4 => 'includes/rules.event.inc',
            5 => 'includes/rules.processor.inc',
            6 => 'includes/rules.plugins.inc',
            7 => 'includes/rules.state.inc',
            8 => 'includes/rules.dispatcher.inc',
            9 => 'modules/node.eval.inc',
            10 => 'modules/php.eval.inc',
            11 => 'modules/rules_core.eval.inc',
            12 => 'modules/system.eval.inc',
            13 => 'ui/ui.controller.inc',
            14 => 'ui/ui.core.inc',
            15 => 'ui/ui.data.inc',
            16 => 'ui/ui.plugins.inc',
          ),
          'dependencies' => 
          array (
            0 => 'entity_token',
            1 => 'entity',
          ),
          'version' => '7.x-2.6',
          'project' => 'rules',
          'datestamp' => '1383063052',
          'php' => '5.2.4',
        ),
        'schema_version' => '7213',
        'project' => 'rules',
        'version' => '7.x-2.6',
      ),
      'auto_nodetitle' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/auto_nodetitle/auto_nodetitle.module',
        'basename' => 'auto_nodetitle.module',
        'name' => 'auto_nodetitle',
        'info' => 
        array (
          'name' => 'Automatic Nodetitles',
          'description' => 'Allows hiding of the content title field and automatic title creation.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'auto_nodetitle.install',
            1 => 'auto_nodetitle.module',
            2 => 'auto_nodetitle.js',
          ),
          'version' => '7.x-1.0',
          'project' => 'auto_nodetitle',
          'datestamp' => '1307449915',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '1',
        'project' => 'auto_nodetitle',
        'version' => '7.x-1.0',
      ),
      'transliteration' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/transliteration/transliteration.module',
        'basename' => 'transliteration.module',
        'name' => 'transliteration',
        'info' => 
        array (
          'name' => 'Transliteration',
          'description' => 'Converts non-latin text to US-ASCII and sanitizes file names.',
          'core' => '7.x',
          'configure' => 'admin/config/media/file-system',
          'version' => '7.x-3.1',
          'project' => 'transliteration',
          'datestamp' => '1338540713',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'transliteration',
        'version' => '7.x-3.1',
      ),
      'field_group_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/field_group/tests/field_group_test.module',
        'basename' => 'field_group_test.module',
        'name' => 'field_group_test',
        'info' => 
        array (
          'name' => 'Fieldgroup Test',
          'description' => 'Test module for fieldgroup',
          'core' => '7.x',
          'package' => 'Fieldgroup',
          'version' => '7.x-1.3',
          'project' => 'field_group',
          'datestamp' => '1380124361',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'field_group',
        'version' => '7.x-1.3',
      ),
      'field_group' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/field_group/field_group.module',
        'basename' => 'field_group.module',
        'name' => 'field_group',
        'info' => 
        array (
          'name' => 'Fieldgroup',
          'description' => 'Fieldgroup',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'ctools',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field_group.install',
            1 => 'field_group.module',
            2 => 'field_group.field_ui.inc',
            3 => 'field_group.form.inc',
            4 => 'field_group.features.inc',
            5 => 'tests/field_group.ui.test',
            6 => 'tests/field_group.display.test',
          ),
          'version' => '7.x-1.3',
          'project' => 'field_group',
          'datestamp' => '1380124361',
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'project' => 'field_group',
        'version' => '7.x-1.3',
      ),
      'flagaccesstest' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/flag/tests/flagaccesstest/flagaccesstest.module',
        'basename' => 'flagaccesstest.module',
        'name' => 'flagaccesstest',
        'info' => 
        array (
          'name' => 'Flag hook_flag_access test',
          'description' => 'Tests for hook_flag_access',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'flag',
          ),
          'package' => 'Flags',
          'hidden' => true,
          'version' => '7.x-3.2',
          'project' => 'flag',
          'datestamp' => '1379063829',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'flag',
        'version' => '7.x-3.2',
      ),
      'flag_bookmark' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/flag/flag_bookmark/flag_bookmark.module',
        'basename' => 'flag_bookmark.module',
        'name' => 'flag_bookmark',
        'info' => 
        array (
          'name' => 'Flag Bookmark',
          'description' => 'Provides an example bookmark flag and supporting views.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'flag',
          ),
          'package' => 'Flags',
          'version' => '7.x-3.2',
          'project' => 'flag',
          'datestamp' => '1379063829',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'flag',
        'version' => '7.x-3.2',
      ),
      'flag' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/flag/flag.module',
        'basename' => 'flag.module',
        'name' => 'flag',
        'info' => 
        array (
          'name' => 'Flag',
          'description' => 'Create customized flags that users can set on entities.',
          'core' => '7.x',
          'package' => 'Flags',
          'configure' => 'admin/structure/flags',
          'files' => 
          array (
            0 => 'includes/flag/flag_flag.inc',
            1 => 'includes/flag/flag_entity.inc',
            2 => 'includes/flag/flag_node.inc',
            3 => 'includes/flag/flag_comment.inc',
            4 => 'includes/flag/flag_user.inc',
            5 => 'includes/flag.cookie_storage.inc',
            6 => 'includes/flag.entity.inc',
            7 => 'flag.rules.inc',
            8 => 'includes/views/flag_handler_argument_entity_id.inc',
            9 => 'includes/views/flag_handler_field_ops.inc',
            10 => 'includes/views/flag_handler_field_flagged.inc',
            11 => 'includes/views/flag_handler_filter_flagged.inc',
            12 => 'includes/views/flag_handler_sort_flagged.inc',
            13 => 'includes/views/flag_handler_relationships.inc',
            14 => 'includes/views/flag_plugin_argument_validate_flaggability.inc',
            15 => 'tests/flag.test',
          ),
          'version' => '7.x-3.2',
          'project' => 'flag',
          'datestamp' => '1379063829',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7306',
        'project' => 'flag',
        'version' => '7.x-3.2',
      ),
      'flag_actions' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/flag/flag_actions.module',
        'basename' => 'flag_actions.module',
        'name' => 'flag_actions',
        'info' => 
        array (
          'name' => 'Flag actions',
          'description' => 'Execute actions on Flag events.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'flag',
          ),
          'package' => 'Flags',
          'configure' => 'admin/structure/flags/actions',
          'files' => 
          array (
            0 => 'flag.install',
            1 => 'flag_actions.module',
          ),
          'version' => '7.x-3.2',
          'project' => 'flag',
          'datestamp' => '1379063829',
          'php' => '5.2.4',
        ),
        'schema_version' => '6200',
        'project' => 'flag',
        'version' => '7.x-3.2',
      ),
      'css3pie' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/css3pie/css3pie.module',
        'basename' => 'css3pie.module',
        'name' => 'css3pie',
        'info' => 
        array (
          'name' => 'CSS3PIE',
          'description' => 'Provides CSS3PIE (http://css3pie.com/) library support.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
            1 => 'ctools',
          ),
          'configure' => 'admin/config/user-interface/css3pie',
          'version' => '7.x-2.1',
          'project' => 'css3pie',
          'datestamp' => '1332951952',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'css3pie',
        'version' => '7.x-2.1',
      ),
      'l10n_update' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/l10n_update/l10n_update.module',
        'basename' => 'l10n_update.module',
        'name' => 'l10n_update',
        'info' => 
        array (
          'name' => 'Localization update',
          'description' => 'Provides automatic downloads and updates for translations.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'core' => '7.x',
          'package' => 'Multilingual',
          'files' => 
          array (
            0 => 'l10n_update.admin.inc',
            1 => 'l10n_update.api.php',
            2 => 'l10n_update.batch.inc',
            3 => 'l10n_update.check.inc',
            4 => 'l10n_update.drush.inc',
            5 => 'l10n_update.inc',
            6 => 'l10n_update.install',
            7 => 'l10n_update.locale.inc',
            8 => 'l10n_update.module',
            9 => 'l10n_update.parser.inc',
            10 => 'l10n_update.project.inc',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'l10n_update',
          'datestamp' => '1328563848',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'l10n_update',
        'version' => '7.x-1.0-beta3',
      ),
      'openidadmin' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/openidadmin/openidadmin.module',
        'basename' => 'openidadmin.module',
        'name' => 'openidadmin',
        'info' => 
        array (
          'name' => 'OpenID Admin',
          'description' => 'Allows bulk operations for OpenID administration.',
          'dependencies' => 
          array (
            0 => 'openid',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openidadmin.module',
          ),
          'version' => '7.x-1.0',
          'project' => 'openidadmin',
          'datestamp' => '1284569742',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'openidadmin',
        'version' => '7.x-1.0',
      ),
      'media_youtube' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/media_youtube/media_youtube.module',
        'basename' => 'media_youtube.module',
        'name' => 'media_youtube',
        'info' => 
        array (
          'name' => 'Media: YouTube',
          'description' => 'Provides YouTube support to the Media module.',
          'package' => 'Media',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'media_youtube.module',
            1 => 'includes/MediaInternetYouTubeHandler.inc',
            2 => 'includes/MediaYouTubeStreamWrapper.inc',
            3 => 'includes/MediaYouTubeStyles.inc',
            4 => 'includes/media_youtube.formatters.inc',
            5 => 'includes/media_youtube.styles.inc',
            6 => 'includes/media_youtube.variables.inc',
          ),
          'dependencies' => 
          array (
            0 => 'media_internet',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'media_youtube',
          'datestamp' => '1331655643',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'project' => 'media_youtube',
        'version' => '7.x-1.0-beta3',
      ),
      'wysiwyg_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/wysiwyg/tests/wysiwyg_test.module',
        'basename' => 'wysiwyg_test.module',
        'name' => 'wysiwyg_test',
        'info' => 
        array (
          'name' => 'Wysiwyg testing',
          'description' => 'Tests Wysiwyg module functionality. Do not enable.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'wysiwyg',
          ),
          'files' => 
          array (
            0 => 'wysiwyg_test.module',
          ),
          'version' => '7.x-2.2',
          'project' => 'wysiwyg',
          'datestamp' => '1349213776',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'wysiwyg',
        'version' => '7.x-2.2',
      ),
      'wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/wysiwyg/wysiwyg.module',
        'basename' => 'wysiwyg.module',
        'name' => 'wysiwyg',
        'info' => 
        array (
          'name' => 'Wysiwyg',
          'description' => 'Allows to edit content with client-side editors.',
          'package' => 'User interface',
          'core' => '7.x',
          'configure' => 'admin/config/content/wysiwyg',
          'files' => 
          array (
            0 => 'wysiwyg.module',
            1 => 'tests/wysiwyg.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'wysiwyg',
          'datestamp' => '1349213776',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'wysiwyg',
        'version' => '7.x-2.2',
      ),
      'ds_ui' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/ds/modules/ds_ui/ds_ui.module',
        'basename' => 'ds_ui.module',
        'name' => 'ds_ui',
        'info' => 
        array (
          'name' => 'Display Suite UI',
          'description' => 'User interface for managing fields, view modes and classes.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'version' => '7.x-2.6',
          'project' => 'ds',
          'datestamp' => '1378305390',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-2.6',
      ),
      'ds_format' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/ds/modules/ds_format/ds_format.module',
        'basename' => 'ds_format.module',
        'name' => 'ds_format',
        'info' => 
        array (
          'name' => 'Display Suite Format',
          'description' => 'Provides the Display Suite Code format filter.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'configure' => 'admin/structure/ds/list/extras',
          'version' => '7.x-2.6',
          'project' => 'ds',
          'datestamp' => '1378305390',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-2.6',
      ),
      'ds_forms' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/ds/modules/ds_forms/ds_forms.module',
        'basename' => 'ds_forms.module',
        'name' => 'ds_forms',
        'info' => 
        array (
          'name' => 'Display Suite Forms',
          'description' => 'Manage the layout of forms in Display Suite.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'version' => '7.x-2.6',
          'project' => 'ds',
          'datestamp' => '1378305390',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-2.6',
      ),
      'ds_devel' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/ds/modules/ds_devel/ds_devel.module',
        'basename' => 'ds_devel.module',
        'name' => 'ds_devel',
        'info' => 
        array (
          'name' => 'Display Suite Devel',
          'description' => 'Development functionality for Display Suite.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
            1 => 'devel',
          ),
          'version' => '7.x-2.6',
          'project' => 'ds',
          'datestamp' => '1378305390',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-2.6',
      ),
      'ds_search' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/ds/modules/ds_search/ds_search.module',
        'basename' => 'ds_search.module',
        'name' => 'ds_search',
        'info' => 
        array (
          'name' => 'Display Suite Search',
          'description' => 'Extend the display options for search results for Drupal Core or Apache Solr.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'configure' => 'admin/structure/ds/list/search',
          'version' => '7.x-2.6',
          'project' => 'ds',
          'datestamp' => '1378305390',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-2.6',
      ),
      'ds_extras' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/ds/modules/ds_extras/ds_extras.module',
        'basename' => 'ds_extras.module',
        'name' => 'ds_extras',
        'info' => 
        array (
          'name' => 'Display Suite Extras',
          'description' => 'Contains additional features for Display Suite.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'configure' => 'admin/structure/ds/list/extras',
          'version' => '7.x-2.6',
          'project' => 'ds',
          'datestamp' => '1378305390',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'ds',
        'version' => '7.x-2.6',
      ),
      'ds_exportables_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/ds/tests/ds_exportables_test/ds_exportables_test.module',
        'basename' => 'ds_exportables_test.module',
        'name' => 'ds_exportables_test',
        'info' => 
        array (
          'name' => 'Display Suite exportables test',
          'description' => 'Tests for exportables with Display Suite.',
          'package' => 'Display Suite',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-2.6',
          'project' => 'ds',
          'datestamp' => '1378305390',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-2.6',
      ),
      'ds_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/ds/tests/ds_test.module',
        'basename' => 'ds_test.module',
        'name' => 'ds_test',
        'info' => 
        array (
          'name' => 'Display Suite Test',
          'description' => 'Test module for Display Suite',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds_extras',
          ),
          'hidden' => true,
          'version' => '7.x-2.6',
          'project' => 'ds',
          'datestamp' => '1378305390',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-2.6',
      ),
      'ds' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/ds/ds.module',
        'basename' => 'ds.module',
        'name' => 'ds',
        'info' => 
        array (
          'name' => 'Display Suite',
          'description' => 'Extend the display options for every entity type.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'views/views_plugin_ds_entity_view.inc',
            1 => 'views/views_plugin_ds_fields_view.inc',
            2 => 'tests/ds.base.test',
            3 => 'tests/ds.search.test',
            4 => 'tests/ds.entities.test',
            5 => 'tests/ds.exportables.test',
            6 => 'tests/ds.views.test',
            7 => 'tests/ds.forms.test',
          ),
          'configure' => 'admin/structure/ds',
          'version' => '7.x-2.6',
          'project' => 'ds',
          'datestamp' => '1378305390',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'ds',
        'version' => '7.x-2.6',
      ),
      'strongarm' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/strongarm/strongarm.module',
        'basename' => 'strongarm.module',
        'name' => 'strongarm',
        'info' => 
        array (
          'name' => 'Strongarm',
          'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'strongarm.admin.inc',
            1 => 'strongarm.install',
            2 => 'strongarm.module',
          ),
          'version' => '7.x-2.0',
          'project' => 'strongarm',
          'datestamp' => '1339604214',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'strongarm',
        'version' => '7.x-2.0',
      ),
      'mimemail_compress' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/mimemail/modules/mimemail_compress/mimemail_compress.module',
        'basename' => 'mimemail_compress.module',
        'name' => 'mimemail_compress',
        'info' => 
        array (
          'name' => 'Mime Mail CSS Compressor',
          'description' => 'Converts CSS to inline styles in an HTML message. (Requires the PHP DOM extension.)',
          'package' => 'Mail',
          'dependencies' => 
          array (
            0 => 'mimemail',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'mimemail_compress.inc',
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'mimemail',
          'datestamp' => '1381150945',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'mimemail',
        'version' => '7.x-1.0-beta1',
      ),
      'mimemail_action' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/mimemail/modules/mimemail_action/mimemail_action.module',
        'basename' => 'mimemail_action.module',
        'name' => 'mimemail_action',
        'info' => 
        array (
          'name' => 'Mime Mail Action',
          'description' => 'Provide actions for Mime Mail.',
          'package' => 'Mail',
          'dependencies' => 
          array (
            0 => 'mimemail',
            1 => 'trigger',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-beta1',
          'project' => 'mimemail',
          'datestamp' => '1381150945',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'mimemail',
        'version' => '7.x-1.0-beta1',
      ),
      'mimemail' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/mimemail/mimemail.module',
        'basename' => 'mimemail.module',
        'name' => 'mimemail',
        'info' => 
        array (
          'name' => 'Mime Mail',
          'description' => 'Send MIME-encoded emails with embedded images and attachments.',
          'dependencies' => 
          array (
            0 => 'mailsystem',
          ),
          'package' => 'Mail',
          'core' => '7.x',
          'configure' => 'admin/config/system/mimemail',
          'files' => 
          array (
            0 => 'includes/mimemail.mail.inc',
            1 => 'tests/mimemail.test',
            2 => 'tests/mimemail_rules.test',
            3 => 'tests/mimemail_compress.test',
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'mimemail',
          'datestamp' => '1381150945',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'mimemail',
        'version' => '7.x-1.0-beta1',
      ),
      'views_export' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'views_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/views/tests/views_test.module',
        'basename' => 'views_test.module',
        'name' => 'views_test',
        'info' => 
        array (
          'name' => 'Views Test',
          'description' => 'Test module for Views.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'hidden' => true,
          'version' => '7.x-3.7',
          'project' => 'views',
          'datestamp' => '1365499236',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.7',
      ),
      'views' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/views.css',
            ),
          ),
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'handlers/views_handler_area.inc',
            1 => 'handlers/views_handler_area_result.inc',
            2 => 'handlers/views_handler_area_text.inc',
            3 => 'handlers/views_handler_area_text_custom.inc',
            4 => 'handlers/views_handler_area_view.inc',
            5 => 'handlers/views_handler_argument.inc',
            6 => 'handlers/views_handler_argument_date.inc',
            7 => 'handlers/views_handler_argument_formula.inc',
            8 => 'handlers/views_handler_argument_many_to_one.inc',
            9 => 'handlers/views_handler_argument_null.inc',
            10 => 'handlers/views_handler_argument_numeric.inc',
            11 => 'handlers/views_handler_argument_string.inc',
            12 => 'handlers/views_handler_argument_group_by_numeric.inc',
            13 => 'handlers/views_handler_field.inc',
            14 => 'handlers/views_handler_field_counter.inc',
            15 => 'handlers/views_handler_field_boolean.inc',
            16 => 'handlers/views_handler_field_contextual_links.inc',
            17 => 'handlers/views_handler_field_custom.inc',
            18 => 'handlers/views_handler_field_date.inc',
            19 => 'handlers/views_handler_field_entity.inc',
            20 => 'handlers/views_handler_field_markup.inc',
            21 => 'handlers/views_handler_field_math.inc',
            22 => 'handlers/views_handler_field_numeric.inc',
            23 => 'handlers/views_handler_field_prerender_list.inc',
            24 => 'handlers/views_handler_field_time_interval.inc',
            25 => 'handlers/views_handler_field_serialized.inc',
            26 => 'handlers/views_handler_field_machine_name.inc',
            27 => 'handlers/views_handler_field_url.inc',
            28 => 'handlers/views_handler_filter.inc',
            29 => 'handlers/views_handler_filter_boolean_operator.inc',
            30 => 'handlers/views_handler_filter_boolean_operator_string.inc',
            31 => 'handlers/views_handler_filter_combine.inc',
            32 => 'handlers/views_handler_filter_date.inc',
            33 => 'handlers/views_handler_filter_equality.inc',
            34 => 'handlers/views_handler_filter_entity_bundle.inc',
            35 => 'handlers/views_handler_filter_group_by_numeric.inc',
            36 => 'handlers/views_handler_filter_in_operator.inc',
            37 => 'handlers/views_handler_filter_many_to_one.inc',
            38 => 'handlers/views_handler_filter_numeric.inc',
            39 => 'handlers/views_handler_filter_string.inc',
            40 => 'handlers/views_handler_relationship.inc',
            41 => 'handlers/views_handler_relationship_groupwise_max.inc',
            42 => 'handlers/views_handler_sort.inc',
            43 => 'handlers/views_handler_sort_date.inc',
            44 => 'handlers/views_handler_sort_formula.inc',
            45 => 'handlers/views_handler_sort_group_by_numeric.inc',
            46 => 'handlers/views_handler_sort_menu_hierarchy.inc',
            47 => 'handlers/views_handler_sort_random.inc',
            48 => 'includes/base.inc',
            49 => 'includes/handlers.inc',
            50 => 'includes/plugins.inc',
            51 => 'includes/view.inc',
            52 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
            53 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
            54 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
            55 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
            56 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
            57 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
            58 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
            59 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
            60 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
            61 => 'modules/book/views_plugin_argument_default_book_root.inc',
            62 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
            63 => 'modules/comment/views_handler_field_comment.inc',
            64 => 'modules/comment/views_handler_field_comment_depth.inc',
            65 => 'modules/comment/views_handler_field_comment_link.inc',
            66 => 'modules/comment/views_handler_field_comment_link_approve.inc',
            67 => 'modules/comment/views_handler_field_comment_link_delete.inc',
            68 => 'modules/comment/views_handler_field_comment_link_edit.inc',
            69 => 'modules/comment/views_handler_field_comment_link_reply.inc',
            70 => 'modules/comment/views_handler_field_comment_node_link.inc',
            71 => 'modules/comment/views_handler_field_comment_username.inc',
            72 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
            73 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
            74 => 'modules/comment/views_handler_field_node_comment.inc',
            75 => 'modules/comment/views_handler_field_node_new_comments.inc',
            76 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
            77 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
            78 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
            79 => 'modules/comment/views_handler_filter_node_comment.inc',
            80 => 'modules/comment/views_handler_sort_comment_thread.inc',
            81 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
            82 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
            83 => 'modules/comment/views_plugin_row_comment_rss.inc',
            84 => 'modules/comment/views_plugin_row_comment_view.inc',
            85 => 'modules/contact/views_handler_field_contact_link.inc',
            86 => 'modules/field/views_handler_field_field.inc',
            87 => 'modules/field/views_handler_relationship_entity_reverse.inc',
            88 => 'modules/field/views_handler_argument_field_list.inc',
            89 => 'modules/field/views_handler_argument_field_list_string.inc',
            90 => 'modules/field/views_handler_filter_field_list.inc',
            91 => 'modules/filter/views_handler_field_filter_format_name.inc',
            92 => 'modules/locale/views_handler_field_node_language.inc',
            93 => 'modules/locale/views_handler_filter_node_language.inc',
            94 => 'modules/locale/views_handler_argument_locale_group.inc',
            95 => 'modules/locale/views_handler_argument_locale_language.inc',
            96 => 'modules/locale/views_handler_field_locale_group.inc',
            97 => 'modules/locale/views_handler_field_locale_language.inc',
            98 => 'modules/locale/views_handler_field_locale_link_edit.inc',
            99 => 'modules/locale/views_handler_filter_locale_group.inc',
            100 => 'modules/locale/views_handler_filter_locale_language.inc',
            101 => 'modules/locale/views_handler_filter_locale_version.inc',
            102 => 'modules/node/views_handler_argument_dates_various.inc',
            103 => 'modules/node/views_handler_argument_node_language.inc',
            104 => 'modules/node/views_handler_argument_node_nid.inc',
            105 => 'modules/node/views_handler_argument_node_type.inc',
            106 => 'modules/node/views_handler_argument_node_vid.inc',
            107 => 'modules/node/views_handler_argument_node_uid_revision.inc',
            108 => 'modules/node/views_handler_field_history_user_timestamp.inc',
            109 => 'modules/node/views_handler_field_node.inc',
            110 => 'modules/node/views_handler_field_node_link.inc',
            111 => 'modules/node/views_handler_field_node_link_delete.inc',
            112 => 'modules/node/views_handler_field_node_link_edit.inc',
            113 => 'modules/node/views_handler_field_node_revision.inc',
            114 => 'modules/node/views_handler_field_node_revision_link.inc',
            115 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
            116 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
            117 => 'modules/node/views_handler_field_node_path.inc',
            118 => 'modules/node/views_handler_field_node_type.inc',
            119 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
            120 => 'modules/node/views_handler_filter_node_access.inc',
            121 => 'modules/node/views_handler_filter_node_status.inc',
            122 => 'modules/node/views_handler_filter_node_type.inc',
            123 => 'modules/node/views_handler_filter_node_uid_revision.inc',
            124 => 'modules/node/views_plugin_argument_default_node.inc',
            125 => 'modules/node/views_plugin_argument_validate_node.inc',
            126 => 'modules/node/views_plugin_row_node_rss.inc',
            127 => 'modules/node/views_plugin_row_node_view.inc',
            128 => 'modules/profile/views_handler_field_profile_date.inc',
            129 => 'modules/profile/views_handler_field_profile_list.inc',
            130 => 'modules/profile/views_handler_filter_profile_selection.inc',
            131 => 'modules/search/views_handler_argument_search.inc',
            132 => 'modules/search/views_handler_field_search_score.inc',
            133 => 'modules/search/views_handler_filter_search.inc',
            134 => 'modules/search/views_handler_sort_search_score.inc',
            135 => 'modules/search/views_plugin_row_search_view.inc',
            136 => 'modules/statistics/views_handler_field_accesslog_path.inc',
            137 => 'modules/system/views_handler_argument_file_fid.inc',
            138 => 'modules/system/views_handler_field_file.inc',
            139 => 'modules/system/views_handler_field_file_extension.inc',
            140 => 'modules/system/views_handler_field_file_filemime.inc',
            141 => 'modules/system/views_handler_field_file_uri.inc',
            142 => 'modules/system/views_handler_field_file_status.inc',
            143 => 'modules/system/views_handler_filter_file_status.inc',
            144 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
            145 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
            146 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
            147 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
            148 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
            149 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
            150 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
            151 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
            152 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
            153 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
            154 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
            155 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
            156 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
            157 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
            158 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
            159 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
            160 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
            161 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
            162 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
            163 => 'modules/system/views_handler_filter_system_type.inc',
            164 => 'modules/translation/views_handler_argument_node_tnid.inc',
            165 => 'modules/translation/views_handler_field_node_link_translate.inc',
            166 => 'modules/translation/views_handler_field_node_translation_link.inc',
            167 => 'modules/translation/views_handler_filter_node_tnid.inc',
            168 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
            169 => 'modules/translation/views_handler_relationship_translation.inc',
            170 => 'modules/user/views_handler_argument_user_uid.inc',
            171 => 'modules/user/views_handler_argument_users_roles_rid.inc',
            172 => 'modules/user/views_handler_field_user.inc',
            173 => 'modules/user/views_handler_field_user_language.inc',
            174 => 'modules/user/views_handler_field_user_link.inc',
            175 => 'modules/user/views_handler_field_user_link_cancel.inc',
            176 => 'modules/user/views_handler_field_user_link_edit.inc',
            177 => 'modules/user/views_handler_field_user_mail.inc',
            178 => 'modules/user/views_handler_field_user_name.inc',
            179 => 'modules/user/views_handler_field_user_permissions.inc',
            180 => 'modules/user/views_handler_field_user_picture.inc',
            181 => 'modules/user/views_handler_field_user_roles.inc',
            182 => 'modules/user/views_handler_filter_user_current.inc',
            183 => 'modules/user/views_handler_filter_user_name.inc',
            184 => 'modules/user/views_handler_filter_user_permissions.inc',
            185 => 'modules/user/views_handler_filter_user_roles.inc',
            186 => 'modules/user/views_plugin_argument_default_current_user.inc',
            187 => 'modules/user/views_plugin_argument_default_user.inc',
            188 => 'modules/user/views_plugin_argument_validate_user.inc',
            189 => 'modules/user/views_plugin_row_user_view.inc',
            190 => 'plugins/views_plugin_access.inc',
            191 => 'plugins/views_plugin_access_none.inc',
            192 => 'plugins/views_plugin_access_perm.inc',
            193 => 'plugins/views_plugin_access_role.inc',
            194 => 'plugins/views_plugin_argument_default.inc',
            195 => 'plugins/views_plugin_argument_default_php.inc',
            196 => 'plugins/views_plugin_argument_default_fixed.inc',
            197 => 'plugins/views_plugin_argument_default_raw.inc',
            198 => 'plugins/views_plugin_argument_validate.inc',
            199 => 'plugins/views_plugin_argument_validate_numeric.inc',
            200 => 'plugins/views_plugin_argument_validate_php.inc',
            201 => 'plugins/views_plugin_cache.inc',
            202 => 'plugins/views_plugin_cache_none.inc',
            203 => 'plugins/views_plugin_cache_time.inc',
            204 => 'plugins/views_plugin_display.inc',
            205 => 'plugins/views_plugin_display_attachment.inc',
            206 => 'plugins/views_plugin_display_block.inc',
            207 => 'plugins/views_plugin_display_default.inc',
            208 => 'plugins/views_plugin_display_embed.inc',
            209 => 'plugins/views_plugin_display_extender.inc',
            210 => 'plugins/views_plugin_display_feed.inc',
            211 => 'plugins/views_plugin_display_page.inc',
            212 => 'plugins/views_plugin_exposed_form_basic.inc',
            213 => 'plugins/views_plugin_exposed_form.inc',
            214 => 'plugins/views_plugin_exposed_form_input_required.inc',
            215 => 'plugins/views_plugin_localization_core.inc',
            216 => 'plugins/views_plugin_localization.inc',
            217 => 'plugins/views_plugin_localization_none.inc',
            218 => 'plugins/views_plugin_pager.inc',
            219 => 'plugins/views_plugin_pager_full.inc',
            220 => 'plugins/views_plugin_pager_mini.inc',
            221 => 'plugins/views_plugin_pager_none.inc',
            222 => 'plugins/views_plugin_pager_some.inc',
            223 => 'plugins/views_plugin_query.inc',
            224 => 'plugins/views_plugin_query_default.inc',
            225 => 'plugins/views_plugin_row.inc',
            226 => 'plugins/views_plugin_row_fields.inc',
            227 => 'plugins/views_plugin_row_rss_fields.inc',
            228 => 'plugins/views_plugin_style.inc',
            229 => 'plugins/views_plugin_style_default.inc',
            230 => 'plugins/views_plugin_style_grid.inc',
            231 => 'plugins/views_plugin_style_list.inc',
            232 => 'plugins/views_plugin_style_jump_menu.inc',
            233 => 'plugins/views_plugin_style_mapping.inc',
            234 => 'plugins/views_plugin_style_rss.inc',
            235 => 'plugins/views_plugin_style_summary.inc',
            236 => 'plugins/views_plugin_style_summary_jump_menu.inc',
            237 => 'plugins/views_plugin_style_summary_unformatted.inc',
            238 => 'plugins/views_plugin_style_table.inc',
            239 => 'tests/handlers/views_handler_area_text.test',
            240 => 'tests/handlers/views_handler_argument_null.test',
            241 => 'tests/handlers/views_handler_argument_string.test',
            242 => 'tests/handlers/views_handler_field.test',
            243 => 'tests/handlers/views_handler_field_boolean.test',
            244 => 'tests/handlers/views_handler_field_custom.test',
            245 => 'tests/handlers/views_handler_field_counter.test',
            246 => 'tests/handlers/views_handler_field_date.test',
            247 => 'tests/handlers/views_handler_field_file_size.test',
            248 => 'tests/handlers/views_handler_field_math.test',
            249 => 'tests/handlers/views_handler_field_url.test',
            250 => 'tests/handlers/views_handler_field_xss.test',
            251 => 'tests/handlers/views_handler_filter_combine.test',
            252 => 'tests/handlers/views_handler_filter_date.test',
            253 => 'tests/handlers/views_handler_filter_equality.test',
            254 => 'tests/handlers/views_handler_filter_in_operator.test',
            255 => 'tests/handlers/views_handler_filter_numeric.test',
            256 => 'tests/handlers/views_handler_filter_string.test',
            257 => 'tests/handlers/views_handler_sort_random.test',
            258 => 'tests/handlers/views_handler_sort_date.test',
            259 => 'tests/handlers/views_handler_sort.test',
            260 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
            261 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
            262 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
            263 => 'tests/plugins/views_plugin_display.test',
            264 => 'tests/styles/views_plugin_style_jump_menu.test',
            265 => 'tests/styles/views_plugin_style.test',
            266 => 'tests/styles/views_plugin_style_base.test',
            267 => 'tests/styles/views_plugin_style_mapping.test',
            268 => 'tests/styles/views_plugin_style_unformatted.test',
            269 => 'tests/views_access.test',
            270 => 'tests/views_analyze.test',
            271 => 'tests/views_basic.test',
            272 => 'tests/views_argument_default.test',
            273 => 'tests/views_argument_validator.test',
            274 => 'tests/views_exposed_form.test',
            275 => 'tests/field/views_fieldapi.test',
            276 => 'tests/views_glossary.test',
            277 => 'tests/views_groupby.test',
            278 => 'tests/views_handlers.test',
            279 => 'tests/views_module.test',
            280 => 'tests/views_pager.test',
            281 => 'tests/views_plugin_localization_test.inc',
            282 => 'tests/views_translatable.test',
            283 => 'tests/views_query.test',
            284 => 'tests/views_upgrade.test',
            285 => 'tests/views_test.views_default.inc',
            286 => 'tests/comment/views_handler_argument_comment_user_uid.test',
            287 => 'tests/comment/views_handler_filter_comment_user_uid.test',
            288 => 'tests/node/views_node_revision_relations.test',
            289 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
            290 => 'tests/user/views_handler_field_user_name.test',
            291 => 'tests/user/views_user_argument_default.test',
            292 => 'tests/user/views_user_argument_validate.test',
            293 => 'tests/user/views_user.test',
            294 => 'tests/views_cache.test',
            295 => 'tests/views_view.test',
            296 => 'tests/views_ui.test',
          ),
          'version' => '7.x-3.7',
          'project' => 'views',
          'datestamp' => '1365499236',
        ),
        'schema_version' => '7301',
        'project' => 'views',
        'version' => '7.x-3.7',
      ),
      'views_ui' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '7.x',
          'configure' => 'admin/structure/views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_ui.module',
            1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
          ),
          'version' => '7.x-3.7',
          'project' => 'views',
          'datestamp' => '1365499236',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.7',
      ),
      'qtip' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/qtip/qtip.module',
        'basename' => 'qtip.module',
        'name' => 'qtip',
        'info' => 
        array (
          'name' => 'qTip Tooltips',
          'description' => 'Stylish tooltips for your web pages.',
          'files' => 
          array (
            0 => 'qtip.module',
            1 => 'qtip.admin.inc',
            2 => 'qtip.install',
          ),
          'configure' => 'admin/config/content/qtip',
          'core' => '7.x',
          'version' => '7.x-1.5',
          'project' => 'qtip',
          'datestamp' => '1314245522',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'qtip',
        'version' => '7.x-1.5',
      ),
      'token_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/token/tests/token_test.module',
        'basename' => 'token_test.module',
        'name' => 'token_test',
        'info' => 
        array (
          'name' => 'Token Test',
          'description' => 'Testing module for token functionality.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token_test.module',
          ),
          'hidden' => true,
          'version' => '7.x-1.5',
          'project' => 'token',
          'datestamp' => '1361665026',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'token',
        'version' => '7.x-1.5',
      ),
      'token' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token.test',
          ),
          'version' => '7.x-1.5',
          'project' => 'token',
          'datestamp' => '1361665026',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'token',
        'version' => '7.x-1.5',
      ),
      'jquery_update' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/jquery_update/jquery_update.module',
        'basename' => 'jquery_update.module',
        'name' => 'jquery_update',
        'info' => 
        array (
          'name' => 'jQuery Update',
          'description' => 'Update jQuery and jQuery UI to a more recent version.',
          'package' => 'User interface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jquery_update.module',
            1 => 'jquery_update.install',
          ),
          'configure' => 'admin/config/development/jquery_update',
          'version' => '7.x-2.3',
          'project' => 'jquery_update',
          'datestamp' => '1360375905',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'jquery_update',
        'version' => '7.x-2.3',
      ),
      'elements' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/elements/elements.module',
        'basename' => 'elements.module',
        'name' => 'elements',
        'info' => 
        array (
          'name' => 'Elements',
          'description' => 'Provides a library of Form API elements.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'elements.module',
            1 => 'elements.theme.inc',
          ),
          'version' => '7.x-1.4',
          'project' => 'elements',
          'datestamp' => '1370667652',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'elements',
        'version' => '7.x-1.4',
      ),
      'entity_translation_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/entity_translation/tests/entity_translation_test.module',
        'basename' => 'entity_translation_test.module',
        'name' => 'entity_translation_test',
        'info' => 
        array (
          'name' => 'Entity Translation testing',
          'description' => 'Tests Entity Translation module functionality. Do not enable.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'entity_translation',
          ),
          'files' => 
          array (
            0 => 'entity_translation_test.module',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'entity_translation',
          'datestamp' => '1374601567',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity_translation',
        'version' => '7.x-1.0-beta3',
      ),
      'entity_translation_upgrade' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/entity_translation/entity_translation_upgrade/entity_translation_upgrade.module',
        'basename' => 'entity_translation_upgrade.module',
        'name' => 'entity_translation_upgrade',
        'info' => 
        array (
          'name' => 'Entity Translation Upgrade',
          'description' => 'Provides an upgrade path from node-based translation to field-based translation.',
          'package' => 'Multilingual - Entity Translation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity_translation',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'entity_translation',
          'datestamp' => '1374601567',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'entity_translation',
        'version' => '7.x-1.0-beta3',
      ),
      'entity_translation_i18n_menu' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/entity_translation/entity_translation_i18n_menu/entity_translation_i18n_menu.module',
        'basename' => 'entity_translation_i18n_menu.module',
        'name' => 'entity_translation_i18n_menu',
        'info' => 
        array (
          'name' => 'Entity Translation Menu',
          'description' => 'Allows menu items to be translated on the entity form.',
          'package' => 'Multilingual - Entity Translation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity_translation',
            1 => 'i18n',
            2 => 'i18n_menu',
          ),
          'files' => 
          array (
            0 => 'entity_translation_i18n_menu.test',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'entity_translation',
          'datestamp' => '1374601567',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity_translation',
        'version' => '7.x-1.0-beta3',
      ),
      'entity_translation' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/entity_translation/entity_translation.module',
        'basename' => 'entity_translation.module',
        'name' => 'entity_translation',
        'info' => 
        array (
          'name' => 'Entity Translation',
          'description' => 'Allows entities to be translated into different languages.',
          'package' => 'Multilingual - Entity Translation',
          'core' => '7.x',
          'configure' => 'admin/config/regional/entity_translation',
          'dependencies' => 
          array (
            0 => 'locale (>7.14)',
          ),
          'files' => 
          array (
            0 => 'includes/translation.handler.inc',
            1 => 'includes/translation.handler.comment.inc',
            2 => 'includes/translation.handler.node.inc',
            3 => 'includes/translation.handler.taxonomy_term.inc',
            4 => 'includes/translation.handler.user.inc',
            5 => 'tests/entity_translation.test',
            6 => 'views/entity_translation_handler_relationship.inc',
            7 => 'views/entity_translation_handler_field_translate_link.inc',
            8 => 'views/entity_translation_handler_field_label.inc',
            9 => 'views/entity_translation_handler_filter_entity_type.inc',
            10 => 'views/entity_translation_handler_filter_language.inc',
            11 => 'views/entity_translation_handler_filter_translation_exists.inc',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'entity_translation',
          'datestamp' => '1374601567',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'entity_translation',
        'version' => '7.x-1.0-beta3',
      ),
      'value_is' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/value_is/value_is.module',
        'basename' => 'value_is.module',
        'name' => 'value_is',
        'info' => 
        array (
          'name' => 'Value is (form element validators)',
          'description' => 'Adds functions to use in #element_validate in elements in custom forms',
          'core' => '7.x',
          'version' => '7.x-1.5',
          'project' => 'value_is',
          'datestamp' => '1378240602',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'value_is',
        'version' => '7.x-1.5',
      ),
      'apachesolr_attachments' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/apachesolr_attachments/apachesolr_attachments.module',
        'basename' => 'apachesolr_attachments.module',
        'name' => 'apachesolr_attachments',
        'info' => 
        array (
          'name' => 'Apache Solr search attachments',
          'description' => 'Search file attachments with Solr',
          'dependencies' => 
          array (
            0 => 'apachesolr',
          ),
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'apachesolr_attachments.admin.inc',
            1 => 'apachesolr_attachments.install',
            2 => 'apachesolr_attachments.module',
          ),
          'version' => '7.x-1.3',
          'project' => 'apachesolr_attachments',
          'datestamp' => '1375909868',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'apachesolr_attachments',
        'version' => '7.x-1.3',
      ),
      'features_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/features/tests/features_test/features_test.module',
        'basename' => 'features_test.module',
        'name' => 'features_test',
        'info' => 
        array (
          'name' => 'Features Tests',
          'description' => 'Test module for Features testing.',
          'core' => '7.x',
          'package' => 'Testing',
          'php' => '5.2.0',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'image',
            2 => 'strongarm',
            3 => 'taxonomy',
            4 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
              1 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'field_features_test',
            ),
            'field_instance' => 
            array (
              0 => 'node-features_test-field_features_test',
            ),
            'filter' => 
            array (
              0 => 'features_test',
            ),
            'image' => 
            array (
              0 => 'features_test',
            ),
            'node' => 
            array (
              0 => 'features_test',
            ),
            'taxonomy' => 
            array (
              0 => 'taxonomy_features_test',
            ),
            'user_permission' => 
            array (
              0 => 'create features_test content',
            ),
            'views_view' => 
            array (
              0 => 'features_test',
            ),
          ),
          'hidden' => '1',
          'version' => '7.x-2.0',
          'project' => 'features',
          'datestamp' => '1382018758',
        ),
        'schema_version' => 0,
        'project' => 'features',
        'version' => '7.x-2.0',
      ),
      'features' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/features/features.module',
        'basename' => 'features.module',
        'name' => 'features',
        'info' => 
        array (
          'name' => 'Features',
          'description' => 'Provides feature management for Drupal.',
          'core' => '7.x',
          'package' => 'Features',
          'files' => 
          array (
            0 => 'tests/features.test',
          ),
          'configure' => 'admin/structure/features/settings',
          'version' => '7.x-2.0',
          'project' => 'features',
          'datestamp' => '1382018758',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'features',
        'version' => '7.x-2.0',
      ),
      'biblio_rtf' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/biblio/modules/rtf/biblio_rtf.module',
        'basename' => 'biblio_rtf.module',
        'name' => 'biblio_rtf',
        'info' => 
        array (
          'name' => 'Biblio - RTF',
          'description' => 'Provides Rich Text Format file export to the Biblio module.',
          'core' => '7.x',
          'package' => 'Biblio',
          'dependencies' => 
          array (
            0 => 'biblio',
          ),
          'files' => 
          array (
            0 => 'rtf_export.inc',
            1 => 'views/biblio_handler_field_export_link_rtf.inc',
          ),
          'version' => '7.x-1.0-rc7',
          'project' => 'biblio',
          'datestamp' => '1374290470',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'biblio',
        'version' => '7.x-1.0-rc7',
      ),
      'biblio_pm' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/biblio/modules/pubmed/biblio_pm.module',
        'basename' => 'biblio_pm.module',
        'name' => 'biblio_pm',
        'info' => 
        array (
          'name' => 'Biblio - PubMed',
          'description' => 'Provides PubMed import and search to the Biblio module.',
          'core' => '7.x',
          'package' => 'Biblio',
          'dependencies' => 
          array (
            0 => 'biblio',
          ),
          'files' => 
          array (
            0 => 'EntrezClient.php',
            1 => 'EntrezPubmedArticle.php',
          ),
          'version' => '7.x-1.0-rc7',
          'project' => 'biblio',
          'datestamp' => '1374290470',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'biblio',
        'version' => '7.x-1.0-rc7',
      ),
      'biblio_crossref' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/biblio/modules/crossref/biblio_crossref.module',
        'basename' => 'biblio_crossref.module',
        'name' => 'biblio_crossref',
        'info' => 
        array (
          'name' => 'Biblio - Crossref',
          'description' => 'Provides DOI lookup and import to the Biblio module.',
          'core' => '7.x',
          'package' => 'Biblio',
          'dependencies' => 
          array (
            0 => 'biblio',
          ),
          'files' => 
          array (
            0 => 'biblio.crossref.client.php',
          ),
          'version' => '7.x-1.0-rc7',
          'project' => 'biblio',
          'datestamp' => '1374290470',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'biblio',
        'version' => '7.x-1.0-rc7',
      ),
      'biblio_ris' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/biblio/modules/RIS/biblio_ris.module',
        'basename' => 'biblio_ris.module',
        'name' => 'biblio_ris',
        'info' => 
        array (
          'name' => 'Biblio - RIS',
          'description' => 'Provides RIS file import and export to the Biblio module.',
          'core' => '7.x',
          'package' => 'Biblio',
          'dependencies' => 
          array (
            0 => 'biblio',
          ),
          'files' => 
          array (
            0 => 'views/biblio_handler_field_export_link_ris.inc',
          ),
          'version' => '7.x-1.0-rc7',
          'project' => 'biblio',
          'datestamp' => '1374290470',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'biblio',
        'version' => '7.x-1.0-rc7',
      ),
      'biblio_bibtex' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/biblio/modules/bibtexParse/biblio_bibtex.module',
        'basename' => 'biblio_bibtex.module',
        'name' => 'biblio_bibtex',
        'info' => 
        array (
          'name' => 'Biblio - BibTex',
          'description' => 'Provides BibTex import and export to the Biblio module.',
          'core' => '7.x',
          'package' => 'Biblio',
          'dependencies' => 
          array (
            0 => 'biblio',
          ),
          'files' => 
          array (
            0 => 'PARSEENTRIES.php',
            1 => 'views/biblio_handler_field_export_link_bibtex.inc',
          ),
          'version' => '7.x-1.0-rc7',
          'project' => 'biblio',
          'datestamp' => '1374290470',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'biblio',
        'version' => '7.x-1.0-rc7',
      ),
      'biblio_tagged' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/biblio/modules/endnote/biblio_tagged.module',
        'basename' => 'biblio_tagged.module',
        'name' => 'biblio_tagged',
        'info' => 
        array (
          'name' => 'Biblio - EndNote Tagged',
          'description' => 'Provides EndNote tagged file import and export to the Biblio module.',
          'core' => '7.x',
          'package' => 'Biblio',
          'dependencies' => 
          array (
            0 => 'biblio',
          ),
          'files' => 
          array (
            0 => 'views/biblio_handler_field_export_link_tagged.inc',
          ),
          'version' => '7.x-1.0-rc7',
          'project' => 'biblio',
          'datestamp' => '1374290470',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'biblio',
        'version' => '7.x-1.0-rc7',
      ),
      'biblio_xml' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/biblio/modules/endnote/biblio_xml.module',
        'basename' => 'biblio_xml.module',
        'name' => 'biblio_xml',
        'info' => 
        array (
          'name' => 'Biblio - EndNote XML',
          'description' => 'Provides EndNote XML file import and export to the Biblio module.',
          'core' => '7.x',
          'package' => 'Biblio',
          'dependencies' => 
          array (
            0 => 'biblio',
          ),
          'files' => 
          array (
            0 => 'endnote_xml_parser.inc',
            1 => 'views/biblio_handler_field_export_link_xml.inc',
          ),
          'version' => '7.x-1.0-rc7',
          'project' => 'biblio',
          'datestamp' => '1374290470',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'biblio',
        'version' => '7.x-1.0-rc7',
      ),
      'biblio_citeproc' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/biblio/modules/CiteProc/biblio_citeproc.module',
        'basename' => 'biblio_citeproc.module',
        'name' => 'biblio_citeproc',
        'info' => 
        array (
          'name' => 'Biblio - CiteProc',
          'description' => 'Adds Citation Style Language (CSL) citation processing',
          'core' => '7.x',
          'package' => 'Biblio',
          'dependencies' => 
          array (
            0 => 'biblio',
          ),
          'files' => 
          array (
            0 => 'CSL.inc',
          ),
          'version' => '7.x-1.0-rc7',
          'project' => 'biblio',
          'datestamp' => '1374290470',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'biblio',
        'version' => '7.x-1.0-rc7',
      ),
      'biblio_marc' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/biblio/modules/marcParse/biblio_marc.module',
        'basename' => 'biblio_marc.module',
        'name' => 'biblio_marc',
        'info' => 
        array (
          'name' => 'Biblio - MARC',
          'description' => 'Provides MARC file import to the Biblio module.',
          'core' => '7.x',
          'package' => 'Biblio',
          'dependencies' => 
          array (
            0 => 'biblio',
          ),
          'files' => 
          array (
            0 => 'php-marc.php',
          ),
          'version' => '7.x-1.0-rc7',
          'project' => 'biblio',
          'datestamp' => '1374290470',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'biblio',
        'version' => '7.x-1.0-rc7',
      ),
      'biblio' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/biblio/biblio.module',
        'basename' => 'biblio.module',
        'name' => 'biblio',
        'info' => 
        array (
          'name' => 'Biblio',
          'description' => 'Maintains bibliographic lists.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'package' => 'Biblio',
          'configure' => 'admin/config/content/biblio',
          'files' => 
          array (
            0 => 'tests/biblio.test',
            1 => 'tests/keyword.test',
            2 => 'tests/contributor.test',
            3 => 'tests/import.export.test',
            4 => 'includes/Name.php',
            5 => 'includes/Parser.php',
            6 => 'views/biblio_handler_citation.inc',
            7 => 'views/biblio_handler_field_keyword.inc',
            8 => 'views/biblio_handler_field_biblio_keyword_data_word.inc',
            9 => 'views/biblio_handler_field_biblio_keyword_kid.inc',
            10 => 'views/biblio_handler_field_biblio_type.inc',
            11 => 'views/biblio_handler_field_contributor.inc',
            12 => 'views/biblio_handler_field.inc',
            13 => 'views/biblio_handler_field_markup.inc',
            14 => 'views/biblio_handler_filter_biblio_contributor_auth_type.inc',
            15 => 'views/biblio_handler_filter_biblio_keyword_kid.inc',
            16 => 'views/biblio_handler_filter_biblio_keyword_word.inc',
            17 => 'views/biblio_handler_filter_biblio_type.inc',
            18 => 'views/biblio_handler_filter_contributor_lastname.inc',
            19 => 'views/biblio_handler_filter_contributor_uid.inc',
            20 => 'views/biblio_handler_filter_contributor.inc',
            21 => 'views/biblio_handler_sort_contributor_lastname.inc',
            22 => 'views/biblio_handler_argument_many_to_one.inc',
            23 => 'views/biblio_handler_field_export_link.inc',
          ),
          'version' => '7.x-1.0-rc7',
          'project' => 'biblio',
          'datestamp' => '1374290470',
          'php' => '5.2.4',
        ),
        'schema_version' => '7024',
        'project' => 'biblio',
        'version' => '7.x-1.0-rc7',
      ),
      'entity_view_mode_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/entity_view_mode/tests/entity_view_mode_test.module',
        'basename' => 'entity_view_mode_test.module',
        'name' => 'entity_view_mode_test',
        'info' => 
        array (
          'name' => 'Entity view mode test',
          'description' => 'Testing module.',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.0-rc1',
          'project' => 'entity_view_mode',
          'datestamp' => '1368242411',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity_view_mode',
        'version' => '7.x-1.0-rc1',
      ),
      'entity_view_mode' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/entity_view_mode/entity_view_mode.module',
        'basename' => 'entity_view_mode.module',
        'name' => 'entity_view_mode',
        'info' => 
        array (
          'name' => 'Entity view modes',
          'description' => 'Allows administrators to define custom view modes for entities via the administration user interface.',
          'core' => '7.x',
          'recommends' => 
          array (
            0 => 'field_ui',
          ),
          'configure' => 'admin/config/system/entity-view-modes',
          'files' => 
          array (
            0 => 'entity_view_mode.test',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'entity_view_mode',
          'datestamp' => '1368242411',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity_view_mode',
        'version' => '7.x-1.0-rc1',
      ),
      'title_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/title/tests/title_test.module',
        'basename' => 'title_test.module',
        'name' => 'title_test',
        'info' => 
        array (
          'name' => 'Title Test',
          'description' => 'Testing module for Title module functionality. Do not enable.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'title',
            1 => 'entity',
            2 => 'entity_translation',
          ),
          'version' => '7.x-1.0-alpha7',
          'project' => 'title',
          'datestamp' => '1363626024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'title',
        'version' => '7.x-1.0-alpha7',
      ),
      'title' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/title/title.module',
        'basename' => 'title.module',
        'name' => 'title',
        'info' => 
        array (
          'name' => 'Title',
          'description' => 'Replaces entity legacy fields with regular fields.',
          'core' => '7.x',
          'package' => 'Fields',
          'configure' => 'admin/config/content/title',
          'dependencies' => 
          array (
            0 => 'system (>7.14)',
          ),
          'files' => 
          array (
            0 => 'title.module',
            1 => 'views/views_handler_title_field.inc',
            2 => 'tests/title.test',
          ),
          'version' => '7.x-1.0-alpha7',
          'project' => 'title',
          'datestamp' => '1363626024',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'title',
        'version' => '7.x-1.0-alpha7',
      ),
      'print_pdf' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/print/print_pdf/print_pdf.module',
        'basename' => 'print_pdf.module',
        'name' => 'print_pdf',
        'info' => 
        array (
          'name' => 'PDF version',
          'description' => 'Adds the capability to export pages as PDF.',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'dependencies' => 
          array (
            0 => 'print',
          ),
          'files' => 
          array (
            0 => 'print_pdf.module',
            1 => 'print_pdf.admin.inc',
            2 => 'print_pdf.pages.inc',
            3 => 'print_pdf.install',
            4 => 'print_pdf.views.inc',
          ),
          'configure' => 'admin/config/user-interface/print/pdf',
          'version' => '7.x-1.2',
          'project' => 'print',
          'datestamp' => '1346768900',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'print',
        'version' => '7.x-1.2',
      ),
      'print_mail' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/print/print_mail/print_mail.module',
        'basename' => 'print_mail.module',
        'name' => 'print_mail',
        'info' => 
        array (
          'name' => 'Send by email',
          'description' => 'Provides the capability to send the web page by email',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'dependencies' => 
          array (
            0 => 'print',
          ),
          'files' => 
          array (
            0 => 'print_mail.module',
            1 => 'print_mail.inc',
            2 => 'print_mail.admin.inc',
            3 => 'print_mail.install',
            4 => 'print_mail.views.inc',
          ),
          'configure' => 'admin/config/user-interface/print/email',
          'version' => '7.x-1.2',
          'project' => 'print',
          'datestamp' => '1346768900',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'print',
        'version' => '7.x-1.2',
      ),
      'print' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/print/print.module',
        'basename' => 'print.module',
        'name' => 'print',
        'info' => 
        array (
          'name' => 'Printer-friendly pages',
          'description' => 'Adds a printer-friendly version link to content and administrative pages.',
          'core' => '7.x',
          'package' => 'Printer, email and PDF versions',
          'files' => 
          array (
            0 => 'print.module',
            1 => 'print.admin.inc',
            2 => 'print.pages.inc',
            3 => 'print.install',
            4 => 'print.views.inc',
            5 => 'print_join_page_counter.inc',
          ),
          'configure' => 'admin/config/user-interface/print',
          'version' => '7.x-1.2',
          'project' => 'print',
          'datestamp' => '1346768900',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'print',
        'version' => '7.x-1.2',
      ),
      'field_collection' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/field_collection/field_collection.module',
        'basename' => 'field_collection.module',
        'name' => 'field_collection',
        'info' => 
        array (
          'name' => 'Field collection',
          'description' => 'Provides a field collection field, to which any number of fields can be attached.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'files' => 
          array (
            0 => 'field_collection.test',
            1 => 'field_collection.info.inc',
            2 => 'views/field_collection_handler_relationship.inc',
          ),
          'configure' => 'admin/structure/field-collections',
          'package' => 'Fields',
          'version' => '7.x-1.0-beta5',
          'project' => 'field_collection',
          'datestamp' => '1356475963',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'field_collection',
        'version' => '7.x-1.0-beta5',
      ),
      'lauth_service' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/lauth/lauth_service/lauth_service.module',
        'basename' => 'lauth_service.module',
        'name' => 'lauth_service',
        'info' => 
        array (
          'name' => 'LAuth Service',
          'description' => 'Provides LAuth service, a simple protocol to allow secure authentication of HTTP requests.',
          'package' => 'LAuth',
          'core' => '7.x',
          'php' => '5.x',
          'dependencies' => 
          array (
            0 => 'lauth_server',
            1 => 'services',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'lauth',
          'datestamp' => '1380584617',
        ),
        'schema_version' => 0,
        'project' => 'lauth',
        'version' => '7.x-1.x-dev',
      ),
      'lauth_api' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/lauth/lauth_api/lauth_api.module',
        'basename' => 'lauth_api.module',
        'name' => 'lauth_api',
        'info' => 
        array (
          'name' => 'LAuth Authentication API',
          'description' => 'An API for modules that need to use a simple authentication of HTTP requests.',
          'package' => 'LAuth',
          'core' => '7.x',
          'php' => '5.x',
          'version' => '7.x-1.x-dev',
          'project' => 'lauth',
          'datestamp' => '1380584617',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => 0,
        'project' => 'lauth',
        'version' => '7.x-1.x-dev',
      ),
      'lauth_server' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/lauth/lauth_server/lauth_server.module',
        'basename' => 'lauth_server.module',
        'name' => 'lauth_server',
        'info' => 
        array (
          'name' => 'LAuth Server',
          'description' => 'LAuth keys management and access verification.',
          'package' => 'LAuth',
          'core' => '7.x',
          'php' => '5.x',
          'dependencies' => 
          array (
            0 => 'lauth_api',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'lauth',
          'datestamp' => '1380584617',
        ),
        'schema_version' => 0,
        'project' => 'lauth',
        'version' => '7.x-1.x-dev',
      ),
      'search_krumo' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/search_krumo/search_krumo.module',
        'basename' => 'search_krumo.module',
        'name' => 'search_krumo',
        'info' => 
        array (
          'name' => 'Search Krumo',
          'description' => 'Makes it possible to search through Devels krumo\'s.',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search_krumo.css',
            ),
          ),
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'devel',
          ),
          'version' => '7.x-1.5',
          'project' => 'search_krumo',
          'datestamp' => '1362994817',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'search_krumo',
        'version' => '7.x-1.5',
      ),
      'fblikebutton' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/fblikebutton/fblikebutton.module',
        'basename' => 'fblikebutton.module',
        'name' => 'fblikebutton',
        'info' => 
        array (
          'name' => 'Facebook Like Button',
          'description' => 'Adds a configurable <em>Like</em> button for Facebook to each selected node type, as well as a configurable block with a <em>Like</em> box in it.',
          'core' => '7.x',
          'configure' => 'admin/config/fblikebutton',
          'version' => '7.x-2.3',
          'project' => 'fblikebutton',
          'datestamp' => '1353948751',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'fblikebutton',
        'version' => '7.x-2.3',
      ),
      'views_accordion' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/views_accordion/views_accordion.module',
        'basename' => 'views_accordion.module',
        'name' => 'views_accordion',
        'info' => 
        array (
          'name' => 'Views Accordion',
          'description' => 'Provides an accordion views display plugin.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_accordion.views.inc',
            1 => 'views_accordion_style_plugin.inc',
          ),
          'version' => '7.x-1.0-rc2',
          'project' => 'views_accordion',
          'datestamp' => '1342687617',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_accordion',
        'version' => '7.x-1.0-rc2',
      ),
      'profile2_page' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/profile2/contrib/profile2_page.module',
        'basename' => 'profile2_page.module',
        'name' => 'profile2_page',
        'info' => 
        array (
          'name' => 'Profile2 pages',
          'description' => 'Adds separate pages for viewing and editing profiles.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'profile2',
          ),
          'version' => '7.x-1.3',
          'project' => 'profile2',
          'datestamp' => '1356482021',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'profile2',
        'version' => '7.x-1.3',
      ),
      'profile2_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/profile2/contrib/profile2_i18n.module',
        'basename' => 'profile2_i18n.module',
        'name' => 'profile2_i18n',
        'info' => 
        array (
          'name' => 'Profile2 translation',
          'description' => 'Translate profile2 types.',
          'dependencies' => 
          array (
            0 => 'profile2',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-1.3',
          'project' => 'profile2',
          'datestamp' => '1356482021',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'profile2',
        'version' => '7.x-1.3',
      ),
      'profile2_og_access' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/profile2/contrib/profile2_og_access.module',
        'basename' => 'profile2_og_access.module',
        'name' => 'profile2_og_access',
        'info' => 
        array (
          'name' => 'Profile2 group access',
          'description' => 'Adds Organic groups permissions to control profile access on the group level.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'profile2',
            1 => 'og',
          ),
          'package' => 'Organic groups',
          'version' => '7.x-1.3',
          'project' => 'profile2',
          'datestamp' => '1356482021',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'profile2',
        'version' => '7.x-1.3',
      ),
      'profile2' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/profile2/profile2.module',
        'basename' => 'profile2.module',
        'name' => 'profile2',
        'info' => 
        array (
          'name' => 'Profile2',
          'description' => 'Supports configurable user profiles.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'profile2.admin.inc',
            1 => 'profile2.info.inc',
            2 => 'profile2.test',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'configure' => 'admin/structure/profiles',
          'version' => '7.x-1.3',
          'project' => 'profile2',
          'datestamp' => '1356482021',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'profile2',
        'version' => '7.x-1.3',
      ),
      'cs_adaptive_image' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/cs_adaptive_image/cs_adaptive_image.module',
        'basename' => 'cs_adaptive_image.module',
        'name' => 'cs_adaptive_image',
        'info' => 
        array (
          'name' => 'Client-side adaptive image',
          'description' => 'Provides an image field formatter that allows you to select appropriate image styles for various client widths.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'version' => '7.x-1.0',
          'project' => 'cs_adaptive_image',
          'datestamp' => '1364592314',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'cs_adaptive_image',
        'version' => '7.x-1.0',
      ),
      'maxlength' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/maxlength/maxlength.module',
        'basename' => 'maxlength.module',
        'name' => 'maxlength',
        'info' => 
        array (
          'name' => 'Maxlength',
          'description' => 'Limit the number of characters in textfields and textareas and shows the amount of characters left.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'maxlength.test',
          ),
          'version' => '7.x-3.0-beta1',
          'project' => 'maxlength',
          'datestamp' => '1320841536',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7302',
        'project' => 'maxlength',
        'version' => '7.x-3.0-beta1',
      ),
      'redirect' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/redirect/redirect.module',
        'basename' => 'redirect.module',
        'name' => 'redirect',
        'info' => 
        array (
          'name' => 'Redirect',
          'description' => 'Allows users to redirect from old URLs to new URLs.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'redirect.module',
            1 => 'redirect.admin.inc',
            2 => 'redirect.install',
            3 => 'redirect.test',
            4 => 'views/redirect.views.inc',
            5 => 'views/redirect_handler_filter_redirect_type.inc',
            6 => 'views/redirect_handler_field_redirect_source.inc',
            7 => 'views/redirect_handler_field_redirect_redirect.inc',
            8 => 'views/redirect_handler_field_redirect_operations.inc',
            9 => 'views/redirect_handler_field_redirect_link_edit.inc',
            10 => 'views/redirect_handler_field_redirect_link_delete.inc',
          ),
          'configure' => 'admin/config/search/redirect/settings',
          'version' => '7.x-1.0-rc1',
          'project' => 'redirect',
          'datestamp' => '1347989995',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'redirect',
        'version' => '7.x-1.0-rc1',
      ),
      'hidden_captcha' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/hidden_captcha/hidden_captcha.module',
        'basename' => 'hidden_captcha.module',
        'name' => 'hidden_captcha',
        'info' => 
        array (
          'name' => 'Hidden CAPTCHA',
          'description' => 'The hidden CAPTCHA creates a hidden box (requires CSS) that the user must NOT fill. This is useful only to block robots.',
          'package' => 'Spam control',
          'dependencies' => 
          array (
            0 => 'captcha',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0',
          'project' => 'hidden_captcha',
          'configure' => 'admin/config/people/captcha/hidden_captcha',
          'datestamp' => '1307982415',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'hidden_captcha',
        'version' => '7.x-1.0',
      ),
      'jquery_ui_multiselect' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/jquery_ui_multiselect/jquery_ui_multiselect.module',
        'basename' => 'jquery_ui_multiselect.module',
        'name' => 'jquery_ui_multiselect',
        'info' => 
        array (
          'name' => 'jQuery UI Multiselect',
          'description' => 'Integrates the jQuery UI Multiselect plugin with existing list widgets.',
          'package' => 'User interface',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'jquery_update',
            1 => 'value_is',
          ),
          'version' => '7.x-1.0-alpha1',
          'project' => 'jquery_ui_multiselect',
          'datestamp' => '1329773152',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'jquery_ui_multiselect',
        'version' => '7.x-1.0-alpha1',
      ),
      'media_flickr' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/media_flickr/media_flickr.module',
        'basename' => 'media_flickr.module',
        'name' => 'media_flickr',
        'info' => 
        array (
          'name' => 'Media: Flickr',
          'description' => 'Integrates Flickr.com photos and photosets with Media.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
            1 => 'media_internet',
          ),
          'files' => 
          array (
            0 => 'media_flickr.module',
            1 => 'includes/media_flickr.admin.inc',
            2 => 'includes/media_flickr.utilities.inc',
            3 => 'includes/MediaFlickrStreamWrapper.inc',
            4 => 'includes/MediaInternetFlickrHandler.inc',
            5 => 'includes/MediaFlickrStyles.inc',
          ),
          'version' => '7.x-1.0-alpha3',
          'project' => 'media_flickr',
          'datestamp' => '1344959823',
          'php' => '5.2.4',
        ),
        'schema_version' => '7007',
        'project' => 'media_flickr',
        'version' => '7.x-1.0-alpha3',
      ),
      'jplayer_protect' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/jplayer/jplayer_protect/jplayer_protect.module',
        'basename' => 'jplayer_protect.module',
        'name' => 'jplayer_protect',
        'info' => 
        array (
          'name' => 'jPlayer Content Protection',
          'description' => 'Prevent direct access to media files.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'jplayer',
          ),
          'files' => 
          array (
            0 => 'jplayer_protect.install',
            1 => 'jplayer_protect.module',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'jplayer',
          'datestamp' => '1337979956',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'jplayer',
        'version' => '7.x-2.0-beta1',
      ),
      'jplayer' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/jplayer/jplayer.module',
        'basename' => 'jplayer.module',
        'name' => 'jplayer',
        'info' => 
        array (
          'name' => 'jPlayer',
          'description' => 'Provides an HTML5-compatible with Flash-fallback audio player.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'configure' => 'admin/config/media/jplayer',
          'files' => 
          array (
            0 => 'jplayer.install',
            1 => 'jplayer.module',
            2 => 'includes/jplayer.admin.inc',
            3 => 'includes/jplayer.theme.inc',
            4 => 'includes/jplayer.views.inc',
            5 => 'includes/jplayer_style_plugin.inc',
            6 => 'theme/jplayer.tpl.php',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'jplayer',
          'datestamp' => '1337979956',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'jplayer',
        'version' => '7.x-2.0-beta1',
      ),
      'apachesolr_search_blocks' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/apachesolr_search_blocks/apachesolr_search_blocks.module',
        'basename' => 'apachesolr_search_blocks.module',
        'name' => 'apachesolr_search_blocks',
        'info' => 
        array (
          'name' => 'Apache Solr search blocks',
          'description' => 'Create blocks from custom Apache Solr search pages',
          'dependencies' => 
          array (
            0 => 'apachesolr_search',
          ),
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'apachesolr_search_blocks.module',
          ),
          'version' => '7.x-1.0',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => '',
        'version' => '7.x-1.0',
      ),
      'variable_example' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/variable/variable_example/variable_example.module',
        'basename' => 'variable_example.module',
        'name' => 'variable_example',
        'info' => 
        array (
          'name' => 'Variable example',
          'description' => 'An example module showing how to use the Variable API and providing some variables.',
          'dependencies' => 
          array (
            0 => 'variable',
            1 => 'variable_store',
          ),
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'variable_example.variable.inc',
          ),
          'version' => '7.x-2.3',
          'project' => 'variable',
          'datestamp' => '1376034993',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable',
        'version' => '7.x-2.3',
      ),
      'variable_store' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/variable/variable_store/variable_store.module',
        'basename' => 'variable_store.module',
        'name' => 'variable_store',
        'info' => 
        array (
          'name' => 'Variable store',
          'description' => 'Database storage for variable realms. This is an API module.',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.3',
          'files' => 
          array (
            0 => 'variable_store.class.inc',
            1 => 'variable_store.test',
          ),
          'project' => 'variable',
          'datestamp' => '1376034993',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'variable',
        'version' => '7.x-2.3',
      ),
      'variable_admin' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/variable/variable_admin/variable_admin.module',
        'basename' => 'variable_admin.module',
        'name' => 'variable_admin',
        'info' => 
        array (
          'name' => 'Variable admin',
          'description' => 'Variable Administration UI',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.3',
          'project' => 'variable',
          'datestamp' => '1376034993',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable',
        'version' => '7.x-2.3',
      ),
      'variable_views' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/variable/variable_views/variable_views.module',
        'basename' => 'variable_views.module',
        'name' => 'variable_views',
        'info' => 
        array (
          'name' => 'Variable views',
          'description' => 'Provides views integration for variable, included a default variable argument.',
          'dependencies' => 
          array (
            0 => 'variable',
            1 => 'views',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views_plugin_argument_default_variable.inc',
            1 => 'includes/views_handler_field_variable_title.inc',
            2 => 'includes/views_handler_field_variable_value.inc',
          ),
          'version' => '7.x-2.3',
          'project' => 'variable',
          'datestamp' => '1376034993',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable',
        'version' => '7.x-2.3',
      ),
      'variable_advanced' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/variable/variable_advanced/variable_advanced.module',
        'basename' => 'variable_advanced.module',
        'name' => 'variable_advanced',
        'info' => 
        array (
          'name' => 'Variable advanced',
          'description' => 'Provides access to advanced low level variables. By using this you will be able to break your site badly.',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.3',
          'project' => 'variable',
          'datestamp' => '1376034993',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable',
        'version' => '7.x-2.3',
      ),
      'variable_realm' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/variable/variable_realm/variable_realm.module',
        'basename' => 'variable_realm.module',
        'name' => 'variable_realm',
        'info' => 
        array (
          'name' => 'Variable realm',
          'description' => 'API to use variable realms from different modules',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.3',
          'files' => 
          array (
            0 => 'variable_realm.class.inc',
            1 => 'variable_realm_union.class.inc',
          ),
          'project' => 'variable',
          'datestamp' => '1376034993',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'variable',
        'version' => '7.x-2.3',
      ),
      'variable' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/variable/variable.module',
        'basename' => 'variable.module',
        'name' => 'variable',
        'info' => 
        array (
          'name' => 'Variable',
          'description' => 'Variable Information and basic variable API',
          'package' => 'Variable',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/forum.variable.inc',
            1 => 'includes/locale.variable.inc',
            2 => 'includes/menu.variable.inc',
            3 => 'includes/node.variable.inc',
            4 => 'includes/system.variable.inc',
            5 => 'includes/taxonomy.variable.inc',
            6 => 'includes/translation.variable.inc',
            7 => 'includes/user.variable.inc',
            8 => 'variable.test',
          ),
          'version' => '7.x-2.3',
          'project' => 'variable',
          'datestamp' => '1376034993',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable',
        'version' => '7.x-2.3',
      ),
      'simplenews_rules' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/simplenews/simplenews_rules/simplenews_rules.module',
        'basename' => 'simplenews_rules.module',
        'name' => 'simplenews_rules',
        'info' => 
        array (
          'name' => 'Simplenews rules',
          'description' => 'Provides integration with Rules module for Simplenews.',
          'dependencies' => 
          array (
            0 => 'simplenews',
            1 => 'rules',
          ),
          'package' => 'Mail',
          'core' => '7.x',
          'version' => '7.x-1.1',
          'project' => 'simplenews',
          'datestamp' => '1381947969',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'simplenews',
        'version' => '7.x-1.1',
      ),
      'simplenews' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/simplenews/simplenews.module',
        'basename' => 'simplenews.module',
        'name' => 'simplenews',
        'info' => 
        array (
          'name' => 'Simplenews',
          'description' => 'Send newsletters to subscribed email addresses.',
          'package' => 'Mail',
          'core' => '7.x',
          'configure' => 'admin/config/services/simplenews',
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'test_dependencies' => 
          array (
            0 => 'i18n_taxonomy',
          ),
          'files' => 
          array (
            0 => 'tests/simplenews.test',
            1 => 'includes/simplenews.source.inc',
            2 => 'includes/views/handlers/simplenews_handler_field_newsletter_status.inc',
            3 => 'includes/views/handlers/simplenews_handler_field_newsletter_priority.inc',
            4 => 'includes/views/handlers/simplenews_handler_field_category_hyperlinks.inc',
            5 => 'includes/views/handlers/simplenews_handler_field_category_new_account.inc',
            6 => 'includes/views/handlers/simplenews_handler_field_category_opt_inout.inc',
            7 => 'includes/views/handlers/simplenews_handler_field_newsletter_send.inc',
            8 => 'includes/views/handlers/simplenews_handler_filter_newsletter_status.inc',
            9 => 'includes/views/handlers/simplenews_handler_filter_newsletter_priority.inc',
            10 => 'includes/views/handlers/simplenews_handler_filter_category_hyperlinks.inc',
            11 => 'includes/views/handlers/simplenews_handler_filter_category_new_account.inc',
            12 => 'includes/views/handlers/simplenews_handler_filter_category_opt_inout.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'simplenews',
          'datestamp' => '1381947969',
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'simplenews',
        'version' => '7.x-1.1',
      ),
      'site_map' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/site_map/site_map.module',
        'basename' => 'site_map.module',
        'name' => 'site_map',
        'info' => 
        array (
          'name' => 'Site map',
          'description' => 'Display a site map.',
          'core' => '7.x',
          'configure' => 'admin/config/search/sitemap',
          'version' => '7.x-1.0',
          'project' => 'site_map',
          'datestamp' => '1315890108',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'site_map',
        'version' => '7.x-1.0',
      ),
      'masquerade' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/masquerade/masquerade.module',
        'basename' => 'masquerade.module',
        'name' => 'masquerade',
        'info' => 
        array (
          'name' => 'Masquerade',
          'description' => 'This module allows permitted users to masquerade as other users.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'masquerade.test',
          ),
          'configure' => 'admin/config/people/masquerade',
          'version' => '7.x-1.0-rc5',
          'project' => 'masquerade',
          'datestamp' => '1351786623',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'masquerade',
        'version' => '7.x-1.0-rc5',
      ),
      'wysiwyg_filter' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/wysiwyg_filter/wysiwyg_filter.module',
        'basename' => 'wysiwyg_filter.module',
        'name' => 'wysiwyg_filter',
        'info' => 
        array (
          'name' => 'WYSIWYG Filter',
          'description' => 'Provides an input filter that allows site administrators configure which HTML elements, attributes and style properties are allowed.',
          'package' => 'Input filters',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'wysiwyg_filter.admin.inc',
            1 => 'wysiwyg_filter.inc',
            2 => 'wysiwyg_filter.install',
            3 => 'wysiwyg_filter.module',
            4 => 'wysiwyg_filter.pages.inc',
          ),
          'version' => '7.x-1.6-rc2',
          'project' => 'wysiwyg_filter',
          'datestamp' => '1310326321',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'wysiwyg_filter',
        'version' => '7.x-1.6-rc2',
      ),
      'admin_views_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/admin_views/tests/admin_views_test/admin_views_test.module',
        'basename' => 'admin_views_test.module',
        'name' => 'admin_views_test',
        'info' => 
        array (
          'name' => 'Administration views test',
          'description' => 'Administration views test module',
          'core' => '7.x',
          'package' => 'administration',
          'hidden' => true,
          'version' => '7.x-1.2',
          'project' => 'admin_views',
          'datestamp' => '1368873911',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin_views',
        'version' => '7.x-1.2',
      ),
      'admin_views' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/admin_views/admin_views.module',
        'basename' => 'admin_views.module',
        'name' => 'admin_views',
        'info' => 
        array (
          'name' => 'Administration views',
          'description' => 'Replaces all system object management pages in Drupal core with real views.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'views_bulk_operations',
          ),
          'files' => 
          array (
            0 => 'plugins/views_plugin_display_system.inc',
            1 => 'plugins/views_plugin_access_menu.inc',
            2 => 'tests/admin_views.test',
          ),
          'version' => '7.x-1.2',
          'project' => 'admin_views',
          'datestamp' => '1368873911',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin_views',
        'version' => '7.x-1.2',
      ),
      'webform' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/webform/webform.module',
        'basename' => 'webform.module',
        'name' => 'webform',
        'info' => 
        array (
          'name' => 'Webform',
          'description' => 'Enables the creation of forms and questionnaires.',
          'core' => '7.x',
          'package' => 'Webform',
          'configure' => 'admin/config/content/webform',
          'files' => 
          array (
            0 => 'includes/webform.export.inc',
            1 => 'views/webform_handler_field_form_body.inc',
            2 => 'views/webform_handler_field_is_draft.inc',
            3 => 'views/webform_handler_field_node_link_edit.inc',
            4 => 'views/webform_handler_field_node_link_results.inc',
            5 => 'views/webform_handler_field_submission_count.inc',
            6 => 'views/webform_handler_field_submission_link.inc',
            7 => 'views/webform_handler_field_webform_status.inc',
            8 => 'views/webform_handler_filter_is_draft.inc',
            9 => 'views/webform_handler_filter_webform_status.inc',
            10 => 'views/webform.views.inc',
            11 => 'tests/components.test',
            12 => 'tests/permissions.test',
            13 => 'tests/submission.test',
            14 => 'tests/webform.test',
          ),
          'version' => '7.x-3.19',
          'project' => 'webform',
          'datestamp' => '1369860079',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7321',
        'project' => 'webform',
        'version' => '7.x-3.19',
      ),
      'search404' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/search404/search404.module',
        'basename' => 'search404.module',
        'name' => 'search404',
        'info' => 
        array (
          'name' => 'Search 404',
          'description' => 'Automatically search for the keywords in URLs that result in 404 errors and show results instead of Page-Not-Found. ',
          'dependencies' => 
          array (
            0 => 'search',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search404.module',
            1 => 'search404.install',
          ),
          'configure' => 'admin/config/search/search404',
          'version' => '7.x-1.3',
          'project' => 'search404',
          'datestamp' => '1370809553',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'search404',
        'version' => '7.x-1.3',
      ),
      'text_resize' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/text_resize/text_resize.module',
        'basename' => 'text_resize.module',
        'name' => 'text_resize',
        'info' => 
        array (
          'name' => 'Text Resize',
          'description' => 'Creates a block that allows your users to resize text on the page.',
          'core' => '7.x',
          'version' => '7.x-1.8',
          'configure' => 'admin/config/user-interface/text_resize',
          'files' => 
          array (
            0 => 'text_resize.install',
            1 => 'text_resize.module',
          ),
          'project' => 'text_resize',
          'datestamp' => '1363738108',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'text_resize',
        'version' => '7.x-1.8',
      ),
      'job_scheduler_trigger' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/job_scheduler/modules/job_scheduler_trigger/job_scheduler_trigger.module',
        'basename' => 'job_scheduler_trigger.module',
        'name' => 'job_scheduler_trigger',
        'info' => 
        array (
          'name' => 'Job Scheduler Trigger',
          'description' => 'Creates scheduler triggers that fire up at certain days, times',
          'core' => '7.x',
          'php' => '5.2',
          'dependencies' => 
          array (
            0 => 'job_scheduler',
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'job_scheduler',
          'datestamp' => '1336466457',
        ),
        'schema_version' => 0,
        'project' => 'job_scheduler',
        'version' => '7.x-2.0-alpha3',
      ),
      'job_scheduler' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/job_scheduler/job_scheduler.module',
        'basename' => 'job_scheduler.module',
        'name' => 'job_scheduler',
        'info' => 
        array (
          'name' => 'Job Scheduler',
          'description' => 'Scheduler API',
          'files' => 
          array (
            0 => 'job_scheduler.module',
            1 => 'job_scheduler.install',
            2 => 'JobScheduler.inc',
            3 => 'JobSchedulerCronTab.inc',
          ),
          'core' => '7.x',
          'php' => '5.2',
          'version' => '7.x-2.0-alpha3',
          'project' => 'job_scheduler',
          'datestamp' => '1336466457',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7101',
        'project' => 'job_scheduler',
        'version' => '7.x-2.0-alpha3',
      ),
      'dblogin' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/dblogin/dblogin.module',
        'basename' => 'dblogin.module',
        'name' => 'dblogin',
        'info' => 
        array (
          'name' => 'DB Login',
          'description' => 'Provide menu link to log directly into DB Admin software for this database.',
          'core' => '7.x',
          'version' => '7.x-1.1',
          'project' => 'dblogin',
          'datestamp' => '1355259704',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'dblogin',
        'version' => '7.x-1.1',
      ),
      'eva' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/eva/eva.module',
        'basename' => 'eva.module',
        'name' => 'eva',
        'info' => 
        array (
          'name' => 'Eva',
          'description' => 'Provides a Views display type that can be attached to entities.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'files' => 
          array (
            0 => 'eva_plugin_display_entity.inc',
          ),
          'version' => '7.x-1.2',
          'project' => 'eva',
          'datestamp' => '1343701935',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'eva',
        'version' => '7.x-1.2',
      ),
      'footnotes_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/footnotes/footnotes_wysiwyg/footnotes_wysiwyg.module',
        'basename' => 'footnotes_wysiwyg.module',
        'name' => 'footnotes_wysiwyg',
        'info' => 
        array (
          'name' => 'Footnotes Wysiwyg',
          'description' => 'Add a footnote button to Wysiwyg editors (TinyMCE, CKEditor)',
          'package' => 'User interface',
          'dependencies' => 
          array (
            0 => 'wysiwyg',
            1 => 'footnotes',
          ),
          'core' => '7.x',
          'version' => '7.x-2.5',
          'project' => 'footnotes',
          'datestamp' => '1300041367',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'footnotes',
        'version' => '7.x-2.5',
      ),
      'footnotes_views' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/footnotes/footnotes_views.module',
        'basename' => 'footnotes_views.module',
        'name' => 'footnotes_views',
        'info' => 
        array (
          'name' => 'Footnotes with Views',
          'description' => 'Add views support to the footnotes module by allowing you to cut the footnotes from the rest of the body (or teaser).',
          'dependencies' => 
          array (
            0 => 'footnotes',
            1 => 'views',
          ),
          'package' => 'Other',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'project' => 'footnotes',
          'datestamp' => '1300041367',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'footnotes',
        'version' => '7.x-2.5',
      ),
      'footnotes' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/footnotes/footnotes.module',
        'basename' => 'footnotes.module',
        'name' => 'footnotes',
        'info' => 
        array (
          'name' => 'Footnotes',
          'description' => 'Add automatically numbered footnotes to your posts.',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'project' => 'footnotes',
          'datestamp' => '1300041367',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'footnotes',
        'version' => '7.x-2.5',
      ),
      'insert' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/insert/insert.module',
        'basename' => 'insert.module',
        'name' => 'insert',
        'info' => 
        array (
          'name' => 'Insert',
          'description' => 'Assists in inserting files, images, or other media into the body field or other text areas.',
          'core' => '7.x',
          'version' => '7.x-1.3',
          'project' => 'insert',
          'datestamp' => '1361661838',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'insert',
        'version' => '7.x-1.3',
      ),
      'email' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/email/email.module',
        'basename' => 'email.module',
        'name' => 'email',
        'info' => 
        array (
          'name' => 'Email',
          'description' => 'Defines an email field type.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'email.migrate.inc',
          ),
          'version' => '7.x-1.2',
          'project' => 'email',
          'datestamp' => '1346254131',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'email',
        'version' => '7.x-1.2',
      ),
      'fb_social' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/fb_social/fb_social.module',
        'basename' => 'fb_social.module',
        'name' => 'fb_social',
        'info' => 
        array (
          'name' => 'fb social',
          'description' => 'Provides integration with Facebook social plugins',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Facebook Social Plugins',
          'core' => '7.x',
          'configure' => 'admin/structure/fbsocial',
          'files' => 
          array (
            0 => 'plugins/views/fb_social_handler_field.inc',
            1 => 'plugins/export_ui/fb_social_presets_ui.inc',
          ),
          'version' => '7.x-2.0-beta4',
          'project' => 'fb_social',
          'datestamp' => '1327205167',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fb_social',
        'version' => '7.x-2.0-beta4',
      ),
      'pathauto' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'pathauto.test',
          ),
          'configure' => 'admin/config/search/path/patterns',
          'recommends' => 
          array (
            0 => 'redirect',
          ),
          'version' => '7.x-1.2',
          'project' => 'pathauto',
          'datestamp' => '1344525185',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'pathauto',
        'version' => '7.x-1.2',
      ),
      'videojs_hls' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/videojs/modules/videojs_hls/videojs_hls.module',
        'basename' => 'videojs_hls.module',
        'name' => 'videojs_hls',
        'info' => 
        array (
          'name' => 'Video.js HTTP Live Streaming',
          'description' => 'Extends the functionality of Video.js by combining multiple m3u8 files into one file that can be used for bandwidth switching.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'videojs',
          ),
          'configure' => 'admin/config/media/videojs',
          'version' => '7.x-3.0-alpha2',
          'project' => 'videojs',
          'datestamp' => '1369317858',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'videojs',
        'version' => '7.x-3.0-alpha2',
      ),
      'videojs' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/videojs/videojs.module',
        'basename' => 'videojs.module',
        'name' => 'videojs',
        'info' => 
        array (
          'name' => 'Video.js',
          'description' => 'Video.js is an HTML5 Video Player.',
          'package' => 'Media',
          'core' => '7.x',
          'configure' => 'admin/config/media/videojs',
          'files' => 
          array (
            0 => 'includes/videojs.utility.inc',
          ),
          'version' => '7.x-3.0-alpha2',
          'project' => 'videojs',
          'datestamp' => '1369317858',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'videojs',
        'version' => '7.x-3.0-alpha2',
      ),
      'zencoderapi' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/video/modules/zencoderapi/zencoderapi.module',
        'basename' => 'zencoderapi.module',
        'name' => 'zencoderapi',
        'info' => 
        array (
          'name' => 'Zencoder API',
          'description' => 'This module provides the Zencoder API. Only enable this module when another module needs it.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries (2.x)',
          ),
          'version' => '7.x-2.8',
          'project' => 'video',
          'datestamp' => '1348465200',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'video',
        'version' => '7.x-2.8',
      ),
      'video_ui' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/video/modules/video_ui/video_ui.module',
        'basename' => 'video_ui.module',
        'name' => 'video_ui',
        'info' => 
        array (
          'name' => 'Video UI',
          'description' => 'Administrative interface to Video. Without this module you cannot configure the video module.',
          'package' => 'Media',
          'core' => '7.x',
          'configure' => 'admin/config/media/video',
          'dependencies' => 
          array (
            0 => 'video',
          ),
          'version' => '7.x-2.8',
          'project' => 'video',
          'datestamp' => '1348465200',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'video',
        'version' => '7.x-2.8',
      ),
      'video' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/video/video.module',
        'basename' => 'video.module',
        'name' => 'video',
        'info' => 
        array (
          'name' => 'Video',
          'description' => 'Upload and manage video content with Drupal',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
            1 => 'image',
          ),
          'files' => 
          array (
            0 => 'video.utility.inc',
            1 => 'includes/Preset.inc',
            2 => 'includes/Transcoder.inc',
            3 => 'includes/TranscoderFactory.inc',
            4 => 'includes/jobs.inc',
            5 => 'transcoders/TranscoderAbstractionFactoryFfmpeg.inc',
            6 => 'transcoders/TranscoderAbstractionFactoryZencoder.inc',
            7 => 'views/video_handler_field_video_duration.inc',
            8 => 'tests/TranscoderAbstractionFactoryFfmpeg.test',
            9 => 'tests/TranscoderAbstractionFactoryZencoder.test',
            10 => 'libraries/phpvideotoolkit/phpvideotoolkit.php5.php',
            11 => 'tests/VideoUtility.test',
            12 => 'tests/VideoField.test',
            13 => 'tests/PHPVideoToolkit.test',
            14 => 'tests/VideoScheduling.test',
          ),
          'version' => '7.x-2.8',
          'project' => 'video',
          'datestamp' => '1348465200',
          'php' => '5.2.4',
        ),
        'schema_version' => '7210',
        'project' => 'video',
        'version' => '7.x-2.8',
      ),
      'site_verify' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/site_verify/site_verify.module',
        'basename' => 'site_verify.module',
        'name' => 'site_verify',
        'info' => 
        array (
          'name' => 'Site Verification',
          'description' => 'Verifies ownership of a site for use with search engines.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'site_verify.module',
            1 => 'site_verify.admin.inc',
            2 => 'site_verify.install',
            3 => 'site_verify.test',
          ),
          'configure' => 'admin/config/search/verifications',
          'version' => '7.x-1.0',
          'project' => 'site_verify',
          'datestamp' => '1298242613',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '3',
        'project' => 'site_verify',
        'version' => '7.x-1.0',
      ),
      'imce' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/imce/imce.module',
        'basename' => 'imce.module',
        'name' => 'imce',
        'info' => 
        array (
          'name' => 'IMCE',
          'description' => 'An image/file uploader and browser supporting personal directories and user quota.',
          'core' => '7.x',
          'package' => 'Media',
          'configure' => 'admin/config/media/imce',
          'version' => '7.x-1.7',
          'project' => 'imce',
          'datestamp' => '1359476607',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'imce',
        'version' => '7.x-1.7',
      ),
      'date_all_day' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/date/date_all_day/date_all_day.module',
        'basename' => 'date_all_day.module',
        'name' => 'date_all_day',
        'info' => 
        array (
          'name' => 'Date All Day',
          'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_popup' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/date/date_popup/date_popup.module',
        'basename' => 'date_popup.module',
        'name' => 'date_popup',
        'info' => 
        array (
          'name' => 'Date Popup',
          'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/date_popup',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'themes/datepicker.1.7.css',
            ),
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_repeat_field' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/date/date_repeat_field/date_repeat_field.module',
        'basename' => 'date_repeat_field.module',
        'name' => 'date_repeat_field',
        'info' => 
        array (
          'name' => 'Date Repeat Field',
          'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
            2 => 'date_repeat',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date_repeat_field.css',
            ),
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_context' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/date/date_context/date_context.module',
        'basename' => 'date_context.module',
        'name' => 'date_context',
        'info' => 
        array (
          'name' => 'Date Context',
          'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'context',
          ),
          'files' => 
          array (
            0 => 'date_context.module',
            1 => 'plugins/date_context_date_condition.inc',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_api' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/date/date_api/date_api.module',
        'basename' => 'date_api.module',
        'name' => 'date_api',
        'info' => 
        array (
          'name' => 'Date API',
          'description' => 'A Date API that can be used by other modules.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date.css',
            ),
          ),
          'files' => 
          array (
            0 => 'date_api.module',
            1 => 'date_api_sql.inc',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7001',
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_migrate_example' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/date/date_migrate/date_migrate_example/date_migrate_example.module',
        'basename' => 'date_migrate_example.module',
        'name' => 'date_migrate_example',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'date_repeat',
            2 => 'date_repeat_field',
            3 => 'date_migrate',
            4 => 'features',
            5 => 'migrate',
          ),
          'description' => 'Examples of migrating with the Date module',
          'features' => 
          array (
            'field' => 
            array (
              0 => 'node-date_migrate_example-body',
              1 => 'node-date_migrate_example-field_date',
              2 => 'node-date_migrate_example-field_date_range',
              3 => 'node-date_migrate_example-field_date_repeat',
              4 => 'node-date_migrate_example-field_datestamp',
              5 => 'node-date_migrate_example-field_datestamp_range',
              6 => 'node-date_migrate_example-field_datetime',
              7 => 'node-date_migrate_example-field_datetime_range',
            ),
            'node' => 
            array (
              0 => 'date_migrate_example',
            ),
          ),
          'files' => 
          array (
            0 => 'date_migrate_example.migrate.inc',
          ),
          'name' => 'Date Migration Example',
          'package' => 'Features',
          'project' => 'date',
          'version' => '7.x-2.6',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_migrate' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/date/date_migrate/date_migrate.module',
        'basename' => 'date_migrate.module',
        'name' => 'date_migrate',
        'info' => 
        array (
          'name' => 'Date Migration',
          'description' => 'Provides support for importing into date fields with the Migrate module.',
          'core' => '7.x',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'migrate',
            1 => 'date',
          ),
          'files' => 
          array (
            0 => 'date.migrate.inc',
            1 => 'date_migrate.test',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_tools' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/date/date_tools/date_tools.module',
        'basename' => 'date_tools.module',
        'name' => 'date_tools',
        'info' => 
        array (
          'name' => 'Date Tools',
          'description' => 'Tools to import and auto-create dates and calendars.',
          'dependencies' => 
          array (
            0 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/tools',
          'files' => 
          array (
            0 => 'tests/date_tools.test',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_views' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/date/date_views/date_views.module',
        'basename' => 'date_views.module',
        'name' => 'date_views',
        'info' => 
        array (
          'name' => 'Date Views',
          'description' => 'Views integration for date fields and date functionality.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'views',
          ),
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'includes/date_views_argument_handler.inc',
            1 => 'includes/date_views_argument_handler_simple.inc',
            2 => 'includes/date_views_filter_handler.inc',
            3 => 'includes/date_views_filter_handler_simple.inc',
            4 => 'includes/date_views.views_default.inc',
            5 => 'includes/date_views.views.inc',
            6 => 'includes/date_views_plugin_pager.inc',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_repeat' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/date/date_repeat/date_repeat.module',
        'basename' => 'date_repeat.module',
        'name' => 'date_repeat',
        'info' => 
        array (
          'name' => 'Date Repeat API',
          'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'tests/date_repeat.test',
            1 => 'tests/date_repeat_form.test',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/date/date.module',
        'basename' => 'date.module',
        'name' => 'date',
        'info' => 
        array (
          'name' => 'Date',
          'description' => 'Makes date/time fields available.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'tests/date_api.test',
            1 => 'tests/date.test',
            2 => 'tests/date_field.test',
            3 => 'tests/date_validation.test',
            4 => 'tests/date_timezone.test',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
        ),
        'schema_version' => '7004',
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'spanish_services' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/service_links/services/spanish_services.module',
        'basename' => 'spanish_services.module',
        'name' => 'spanish_services',
        'info' => 
        array (
          'name' => 'Spanish Services',
          'description' => 'Provide the Spanish Services: Barrapunto, Fresqui, Latafanera, Meneame, Tuenti',
          'core' => '7.x',
          'package' => 'Service Links - Services',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.2',
          'project' => 'service_links',
          'datestamp' => '1370849155',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.2',
      ),
      'basque_services' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/service_links/services/basque_services.module',
        'basename' => 'basque_services.module',
        'name' => 'basque_services',
        'info' => 
        array (
          'name' => 'Basque Services',
          'description' => 'Provide the Basque Services: Zabaldu, Bildu, Aupatu',
          'core' => '7.x',
          'package' => 'Service Links - Services',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.2',
          'project' => 'service_links',
          'datestamp' => '1370849155',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.2',
      ),
      'general_services' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/service_links/services/general_services.module',
        'basename' => 'general_services.module',
        'name' => 'general_services',
        'info' => 
        array (
          'name' => 'General Services',
          'description' => 'Blinklist, Box, del.icio.us, Digg, Diigo, Facebook, Furl, Google Bookmark, Google Plus, Icerocket, Identi.ca, Linkedin, Mister Wong, Mixx, MySpace, Newsvine, Newskicks, Phing this, Reddit, StumbleUpon, Technorati, Twitter, Yahoo',
          'core' => '7.x',
          'package' => 'Service Links - Services',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.2',
          'project' => 'service_links',
          'datestamp' => '1370849155',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.2',
      ),
      'widget_services' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/service_links/services/widget_services.module',
        'basename' => 'widget_services.module',
        'name' => 'widget_services',
        'info' => 
        array (
          'name' => 'Widget Services',
          'description' => 'Facebook Like, Facebook Share, Google Plus One, Linkedin Share Button, Pinterest, Twitter',
          'core' => '7.x',
          'package' => 'Service Links - Services',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.2',
          'project' => 'service_links',
          'datestamp' => '1370849155',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'service_links',
        'version' => '7.x-2.2',
      ),
      'russian_services' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/service_links/services/russian_services.module',
        'basename' => 'russian_services.module',
        'name' => 'russian_services',
        'info' => 
        array (
          'name' => 'Russian Services',
          'description' => 'Provide the Russian Services (12+3): 100zakladok, Ruspace, Mister Wong, Memori, Moemesto, MyScoop, Vaau, Yandex, LinkStore, Bobrdobr, Lopas, Communizm, Newsland, News2, Smi2',
          'core' => '7.x',
          'package' => 'Service Links - Services',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.2',
          'project' => 'service_links',
          'datestamp' => '1370849155',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.2',
      ),
      'farsi_services' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/service_links/services/farsi_services.module',
        'basename' => 'farsi_services.module',
        'name' => 'farsi_services',
        'info' => 
        array (
          'name' => 'Farsi Services',
          'description' => 'Provide the Farsi services: Balatarin, Donbaleh, Friendfa, Viwio.',
          'core' => '7.x',
          'package' => 'Service Links - Services',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.2',
          'project' => 'service_links',
          'datestamp' => '1370849155',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.2',
      ),
      'favorite_services' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/service_links/services/favorite_services.module',
        'basename' => 'favorite_services.module',
        'name' => 'favorite_services',
        'info' => 
        array (
          'name' => 'Favorite Services',
          'description' => 'Add the page in your favorite, work with Chrome, Firefox, IE, Opera',
          'core' => '7.x',
          'package' => 'Service Links - Services',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.2',
          'project' => 'service_links',
          'datestamp' => '1370849155',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.2',
      ),
      'hungarian_services' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/service_links/services/hungarian_services.module',
        'basename' => 'hungarian_services.module',
        'name' => 'hungarian_services',
        'info' => 
        array (
          'name' => 'Hungarian Services',
          'description' => 'Provide the Hungarian Service: iWiW',
          'core' => '7.x',
          'package' => 'Service Links - Services',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.2',
          'project' => 'service_links',
          'datestamp' => '1370849155',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.2',
      ),
      'dutch_services' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/service_links/services/dutch_services.module',
        'basename' => 'dutch_services.module',
        'name' => 'dutch_services',
        'info' => 
        array (
          'name' => 'Dutch Services',
          'description' => 'Provide the Dutch Services: eKudos, Hyves, Nujij',
          'core' => '7.x',
          'package' => 'Service Links - Services',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.2',
          'project' => 'service_links',
          'datestamp' => '1370849155',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.2',
      ),
      'swedish_services' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/service_links/services/swedish_services.module',
        'basename' => 'swedish_services.module',
        'name' => 'swedish_services',
        'info' => 
        array (
          'name' => 'Swedish Services',
          'description' => 'Provide the Swedish Services: Bloggy, Pusha',
          'core' => '7.x',
          'package' => 'Service Links - Services',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.2',
          'files' => 
          array (
            0 => 'swedish_services.module',
          ),
          'project' => 'service_links',
          'datestamp' => '1370849155',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.2',
      ),
      'print_services' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/service_links/services/print_services.module',
        'basename' => 'print_services.module',
        'name' => 'print_services',
        'info' => 
        array (
          'name' => 'Print Services',
          'description' => 'Add the support for Print module which render the page as PDF or printable HTML',
          'core' => '7.x',
          'package' => 'Service Links - Services',
          'dependencies' => 
          array (
            0 => 'service_links',
            1 => 'print',
          ),
          'version' => '7.x-2.2',
          'project' => 'service_links',
          'datestamp' => '1370849155',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.2',
      ),
      'german_services' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/service_links/services/german_services.module',
        'basename' => 'german_services.module',
        'name' => 'german_services',
        'info' => 
        array (
          'name' => 'German Services',
          'description' => 'Provide the German Services: Alltagz, Colivia, Icio, InfoPirat, Linkarena, MeinVZ, Mister Wong, Netselektor, Oneview, Readster, seekXL, SeoIGG, Weblinkr, Webnews, Xing, Yigg',
          'core' => '7.x',
          'package' => 'Service Links - Services',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.2',
          'project' => 'service_links',
          'datestamp' => '1370849155',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.2',
      ),
      'italian_services' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/service_links/services/italian_services.module',
        'basename' => 'italian_services.module',
        'name' => 'italian_services',
        'info' => 
        array (
          'name' => 'Italian Services',
          'description' => 'Provide the Italian Services: Diggita, Meemi, OkNotizie, Segnalo.com, TechNotizie, Wikio, ZicZac',
          'core' => '7.x',
          'package' => 'Service Links - Services',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.2',
          'project' => 'service_links',
          'datestamp' => '1370849155',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.2',
      ),
      'forward_services' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/service_links/services/forward_services.module',
        'basename' => 'forward_services.module',
        'name' => 'forward_services',
        'info' => 
        array (
          'name' => 'Forward Services',
          'description' => 'Add the support for Forward module which send the link through email.',
          'core' => '7.x',
          'package' => 'Service Links - Services',
          'dependencies' => 
          array (
            0 => 'service_links',
            1 => 'forward',
          ),
          'version' => '7.x-2.2',
          'project' => 'service_links',
          'datestamp' => '1370849155',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.2',
      ),
      'polish_services' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/service_links/services/polish_services.module',
        'basename' => 'polish_services.module',
        'name' => 'polish_services',
        'info' => 
        array (
          'name' => 'Polish Services',
          'description' => 'Provide the Polish Services: Blip, Wykop, Sledzik',
          'core' => '7.x',
          'package' => 'Service Links - Services',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'version' => '7.x-2.2',
          'project' => 'service_links',
          'datestamp' => '1370849155',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.2',
      ),
      'service_links_displays' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/service_links/plugins/service_links_displays.module',
        'basename' => 'service_links_displays.module',
        'name' => 'service_links_displays',
        'info' => 
        array (
          'name' => 'Service Links Displays',
          'description' => 'Provide the integration between Service Links and Node Displays (Display Suite)',
          'core' => '7.x',
          'package' => 'Service Links',
          'dependencies' => 
          array (
            0 => 'service_links',
            1 => 'ds',
          ),
          'version' => '7.x-2.2',
          'project' => 'service_links',
          'datestamp' => '1370849155',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.2',
      ),
      'service_links_sprites' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/service_links/plugins/service_links_sprites.module',
        'basename' => 'service_links_sprites.module',
        'name' => 'service_links_sprites',
        'info' => 
        array (
          'name' => 'Service Links Sprites',
          'description' => 'Add the ability to handle sprites with Service Links',
          'core' => '7.x',
          'package' => 'Service Links',
          'dependencies' => 
          array (
            0 => 'service_links',
          ),
          'configure' => 'admin/config/services/service-links',
          'version' => '7.x-2.2',
          'project' => 'service_links',
          'datestamp' => '1370849155',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'service_links',
        'version' => '7.x-2.2',
      ),
      'service_links' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/service_links/service_links.module',
        'basename' => 'service_links.module',
        'name' => 'service_links',
        'info' => 
        array (
          'name' => 'Service links',
          'description' => 'Module engine for add various service links about sharing networks to nodes.',
          'core' => '7.x',
          'package' => 'Service Links',
          'files' => 
          array (
            0 => 'service_links_handler_field_service_links.inc',
          ),
          'configure' => 'admin/config/services/service-links',
          'version' => '7.x-2.2',
          'project' => 'service_links',
          'datestamp' => '1370849155',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'service_links',
        'version' => '7.x-2.2',
      ),
      'colorbox' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/colorbox/colorbox.module',
        'basename' => 'colorbox.module',
        'name' => 'colorbox',
        'info' => 
        array (
          'name' => 'Colorbox',
          'description' => 'A light-weight, customizable lightbox plugin for jQuery 1.4.3+.',
          'dependencies' => 
          array (
            0 => 'libraries (2.x)',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/media/colorbox',
          'files' => 
          array (
            0 => 'views/colorbox_handler_field_colorbox.inc',
          ),
          'version' => '7.x-2.4',
          'project' => 'colorbox',
          'datestamp' => '1365452412',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'colorbox',
        'version' => '7.x-2.4',
      ),
      'conditional_fields_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/conditional_fields/tests/conditional_fields_test.module',
        'basename' => 'conditional_fields_test.module',
        'name' => 'conditional_fields_test',
        'info' => 
        array (
          'name' => 'Conditional Fields test',
          'description' => 'Provides hooks for testing Conditional Fields.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'conditional_fields',
          ),
          'files' => 
          array (
            0 => 'conditional_fields.test',
          ),
          'hidden' => true,
          'version' => '7.x-3.0-alpha1+10-dev',
          'project' => 'conditional_fields',
          'datestamp' => '1385551706',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'conditional_fields',
        'version' => '7.x-3.0-alpha1+10-dev',
      ),
      'conditional_fields' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/conditional_fields/conditional_fields.module',
        'basename' => 'conditional_fields.module',
        'name' => 'conditional_fields',
        'info' => 
        array (
          'name' => 'Conditional Fields',
          'description' => 'Define dependencies between fields based on their states and values.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'system (>=7.14)',
            1 => 'field',
          ),
          'configure' => 'admin/structure/dependencies',
          'version' => '7.x-3.0-alpha1+10-dev',
          'project' => 'conditional_fields',
          'datestamp' => '1385551706',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'conditional_fields',
        'version' => '7.x-3.0-alpha1+10-dev',
      ),
      'styleguide_palette' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/styleguide/styleguide_palette/styleguide_palette.module',
        'basename' => 'styleguide_palette.module',
        'name' => 'styleguide_palette',
        'info' => 
        array (
          'name' => 'Style guide palette',
          'description' => 'Stores and displays color palettes.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'styleguide',
          ),
          'configure' => 'admin/config/user-interface/styleguide-palette',
          'files' => 
          array (
            0 => 'styleguide_palette.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'styleguide',
          'datestamp' => '1367467219',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'styleguide',
        'version' => '7.x-1.1',
      ),
      'styleguide' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/styleguide/styleguide.module',
        'basename' => 'styleguide.module',
        'name' => 'styleguide',
        'info' => 
        array (
          'name' => 'Style guide',
          'description' => 'Generates a theme style guide for proofing common elements.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'styleguide.module',
            1 => 'styleguide.styleguide.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'styleguide',
          'datestamp' => '1367467219',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'styleguide',
        'version' => '7.x-1.1',
      ),
      'diff' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/diff/diff.module',
        'basename' => 'diff.module',
        'name' => 'diff',
        'info' => 
        array (
          'name' => 'Diff',
          'description' => 'Show differences between content revisions.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'DiffEngine.php',
          ),
          'version' => '7.x-3.2',
          'project' => 'diff',
          'datestamp' => '1352784357',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7305',
        'project' => 'diff',
        'version' => '7.x-3.2',
      ),
      'metatag_opengraph' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/metatag/metatag_opengraph/metatag_opengraph.module',
        'basename' => 'metatag_opengraph.module',
        'name' => 'metatag_opengraph',
        'info' => 
        array (
          'name' => 'Metatag: Open Graph',
          'description' => 'Provides support for open graph meta tags.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.0-beta7',
          'project' => 'metatag',
          'datestamp' => '1366640119',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta7',
      ),
      'metatag_ui' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/metatag/metatag_ui/metatag_ui.module',
        'basename' => 'metatag_ui.module',
        'name' => 'metatag_ui',
        'info' => 
        array (
          'name' => 'Meta tag UI',
          'description' => 'DEPRECATED admin interface for the Meta tag API, this functionality has be merged into the main module.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
            1 => 'ctools',
          ),
          'hidden' => true,
          'version' => '7.x-1.0-beta7',
          'project' => 'metatag',
          'datestamp' => '1366640119',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta7',
      ),
      'metatag_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/metatag/tests/metatag_test.module',
        'basename' => 'metatag_test.module',
        'name' => 'metatag_test',
        'info' => 
        array (
          'name' => 'Meta Tag Test',
          'description' => 'Testing module for metatag.module',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'hidden' => true,
          'version' => '7.x-1.0-beta7',
          'project' => 'metatag',
          'datestamp' => '1366640119',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta7',
      ),
      'metatag_views' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/metatag/metatag_views/metatag_views.module',
        'basename' => 'metatag_views.module',
        'name' => 'metatag_views',
        'info' => 
        array (
          'name' => 'Metatag: Views',
          'description' => 'Provides Metatag integration within the Views interface.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
            1 => 'views',
          ),
          'files' => 
          array (
            0 => 'metatag_views_plugin_display_extender_metatags.inc',
          ),
          'version' => '7.x-1.0-beta7',
          'project' => 'metatag',
          'datestamp' => '1366640119',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta7',
      ),
      'metatag_dc' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/metatag/metatag_dc/metatag_dc.module',
        'basename' => 'metatag_dc.module',
        'name' => 'metatag_dc',
        'info' => 
        array (
          'name' => 'Metatag: Dublin Core',
          'description' => 'Provides the fifteen <a href="http://dublincore.org/documents/dces/">Dublin Core Metadata Element Set 1.1</a> meta tags from the <a href="http://dublincore.org/">Dublin Core Metadata Institute</a>.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.0-beta7',
          'project' => 'metatag',
          'datestamp' => '1366640119',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta7',
      ),
      'metatag_panels' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/metatag/metatag_panels/metatag_panels.module',
        'basename' => 'metatag_panels.module',
        'name' => 'metatag_panels',
        'info' => 
        array (
          'name' => 'Metatag: Panels',
          'description' => 'Provides Metatag integration within the Panels interface.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'metatag',
            2 => 'panels',
            3 => 'token',
          ),
          'version' => '7.x-1.0-beta7',
          'project' => 'metatag',
          'datestamp' => '1366640119',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta7',
      ),
      'metatag_twitter_cards' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/metatag/metatag_twitter_cards/metatag_twitter_cards.module',
        'basename' => 'metatag_twitter_cards.module',
        'name' => 'metatag_twitter_cards',
        'info' => 
        array (
          'name' => 'Metatag: Twitter Cards',
          'description' => 'Provides support for Twitter\'s Card meta tags.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.0-beta7',
          'project' => 'metatag',
          'datestamp' => '1366640119',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta7',
      ),
      'metatag_context' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/metatag/metatag_context/metatag_context.module',
        'basename' => 'metatag_context.module',
        'name' => 'metatag_context',
        'info' => 
        array (
          'name' => 'Metatag: Context',
          'description' => 'Assigned Metatag using Context definitions, allowing them to be assigned by path and other criteria.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'context',
            1 => 'metatag',
          ),
          'files' => 
          array (
            0 => 'metatag_context.test',
          ),
          'version' => '7.x-1.0-beta7',
          'project' => 'metatag',
          'datestamp' => '1366640119',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta7',
      ),
      'metatag' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/metatag/metatag.module',
        'basename' => 'metatag.module',
        'name' => 'metatag',
        'info' => 
        array (
          'name' => 'Metatag',
          'description' => 'Adds support and an API to implement meta tags.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'system (>=7.15)',
            1 => 'ctools',
            2 => 'token',
          ),
          'configure' => 'admin/config/search/metatags',
          'files' => 
          array (
            0 => 'metatag.inc',
            1 => 'metatag.migrate.inc',
            2 => 'metatag.test',
          ),
          'version' => '7.x-1.0-beta7',
          'project' => 'metatag',
          'datestamp' => '1366640119',
          'php' => '5.2.4',
        ),
        'schema_version' => '7014',
        'project' => 'metatag',
        'version' => '7.x-1.0-beta7',
      ),
      'apps' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/apps/apps.module',
        'basename' => 'apps.module',
        'name' => 'apps',
        'info' => 
        array (
          'name' => 'Apps',
          'description' => 'Provides Interface for Install Apps from A drupal app server',
          'package' => 'Distribution Management',
          'version' => '7.x-1.0-beta7',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'update',
          ),
          'files' => 
          array (
            0 => 'apps.module',
            1 => 'apps.updater.inc',
            2 => 'apps.installer.inc',
            3 => 'apps.test',
          ),
          'project' => 'apps',
          'datestamp' => '1345171003',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'apps',
        'version' => '7.x-1.0-beta7',
      ),
      'devel_generate' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/devel/devel_generate/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'devel_generate',
        'info' => 
        array (
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, and taxonomy terms.',
          'package' => 'Development',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'devel',
          ),
          'tags' => 
          array (
            0 => 'developer',
          ),
          'configure' => 'admin/config/development/generate',
          'version' => '7.x-1.3',
          'project' => 'devel',
          'datestamp' => '1338940281',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.3',
      ),
      'devel_node_access' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/devel/devel_node_access.module',
        'basename' => 'devel_node_access.module',
        'name' => 'devel_node_access',
        'info' => 
        array (
          'name' => 'Devel node access',
          'description' => 'Developer blocks and page illustrating relevant node_access records.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '7.x-1.3',
          'project' => 'devel',
          'datestamp' => '1338940281',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.3',
      ),
      'devel' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'devel',
        'info' => 
        array (
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'files' => 
          array (
            0 => 'devel.test',
            1 => 'devel.mail.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'devel',
          'datestamp' => '1338940281',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'devel',
        'version' => '7.x-1.3',
      ),
      'content_migrate' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/cck/modules/content_migrate/content_migrate.module',
        'basename' => 'content_migrate.module',
        'name' => 'content_migrate',
        'info' => 
        array (
          'name' => 'Content Migrate',
          'description' => 'Migrate fields and field data from CCK D6 format to the D7 field format. Required to migrate data, can be disabled once all fields have been migrated.',
          'core' => '7.x',
          'package' => 'CCK',
          'files' => 
          array (
            0 => 'content_migrate.module',
            1 => 'content_migrate.api.php',
            2 => 'includes/content_migrate.admin.inc',
            3 => 'includes/content_migrate.values.inc',
            4 => 'includes/content_migrate.drush.inc',
            5 => 'modules/content_migrate.text.inc',
            6 => 'modules/content_migrate.number.inc',
            7 => 'modules/content_migrate.optionwidgets.inc',
            8 => 'modules/content_migrate.filefield.inc',
            9 => 'tests/content_migrate.test',
          ),
          'version' => '7.x-2.x-dev',
          'project' => 'cck',
          'datestamp' => '1380557700',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'cck',
        'version' => '7.x-2.x-dev',
      ),
      'cck' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/cck/cck.module',
        'basename' => 'cck.module',
        'name' => 'cck',
        'info' => 
        array (
          'name' => 'CCK',
          'description' => 'Miscellaneous field functions not handled by core.',
          'package' => 'CCK',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'cck.module',
            1 => 'cck.install',
          ),
          'dependencies' => 
          array (
            0 => 'field_ui',
          ),
          'version' => '7.x-2.x-dev',
          'project' => 'cck',
          'datestamp' => '1380557700',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'cck',
        'version' => '7.x-2.x-dev',
      ),
      'fences' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/fences/fences.module',
        'basename' => 'fences.module',
        'name' => 'fences',
        'info' => 
        array (
          'name' => 'Fences',
          'description' => 'Configurable field wrappers',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'configure' => 'admin/config/content/fences',
          'version' => '7.x-1.0',
          'project' => 'fences',
          'datestamp' => '1335373578',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'fences',
        'version' => '7.x-1.0',
      ),
      'panels_node' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/panels/panels_node/panels_node.module',
        'basename' => 'panels_node.module',
        'name' => 'panels_node',
        'info' => 
        array (
          'name' => 'Panel nodes',
          'description' => 'Create nodes that are divided into areas with selectable content.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'configure' => 'admin/structure/panels',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'panels_node.module',
          ),
          'version' => '7.x-3.3',
          'project' => 'panels',
          'datestamp' => '1345319572',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'project' => 'panels',
        'version' => '7.x-3.3',
      ),
      'panels_mini' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/panels/panels_mini/panels_mini.module',
        'basename' => 'panels_mini.module',
        'name' => 'panels_mini',
        'info' => 
        array (
          'name' => 'Mini panels',
          'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/export_ui/panels_mini_ui.class.php',
          ),
          'version' => '7.x-3.3',
          'project' => 'panels',
          'datestamp' => '1345319572',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '7.x-3.3',
      ),
      'panels_ipe' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/panels/panels_ipe/panels_ipe.module',
        'basename' => 'panels_ipe.module',
        'name' => 'panels_ipe',
        'info' => 
        array (
          'name' => 'Panels In-Place Editor',
          'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'configure' => 'admin/structure/panels',
          'files' => 
          array (
            0 => 'panels_ipe.module',
          ),
          'version' => '7.x-3.3',
          'project' => 'panels',
          'datestamp' => '1345319572',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '7.x-3.3',
      ),
      'panels' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/panels/panels.module',
        'basename' => 'panels.module',
        'name' => 'panels',
        'info' => 
        array (
          'name' => 'Panels',
          'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
          'core' => '7.x',
          'package' => 'Panels',
          'configure' => 'admin/structure/panels',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'panels.module',
            1 => 'includes/common.inc',
            2 => 'includes/legacy.inc',
            3 => 'includes/plugins.inc',
            4 => 'plugins/views/panels_views_plugin_row_fields.inc',
          ),
          'version' => '7.x-3.3',
          'project' => 'panels',
          'datestamp' => '1345319572',
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'project' => 'panels',
        'version' => '7.x-3.3',
      ),
      'boxes' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/boxes/boxes.module',
        'basename' => 'boxes.module',
        'name' => 'boxes',
        'info' => 
        array (
          'name' => 'Boxes',
          'description' => 'Provides exports for custom blocks and spaces integration.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'block',
          ),
          'files' => 
          array (
            0 => 'boxes.module',
            1 => 'boxes.admin.inc',
            2 => 'plugins/boxes_box.inc',
            3 => 'plugins/boxes_simple.inc',
            4 => 'plugins/spaces_controller_boxes.inc',
            5 => 'tests/boxes.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'boxes',
          'datestamp' => '1358977511',
          'php' => '5.2.4',
        ),
        'schema_version' => '6103',
        'project' => 'boxes',
        'version' => '7.x-1.1',
      ),
      'mediaelement' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/mediaelement/mediaelement.module',
        'basename' => 'mediaelement.module',
        'name' => 'mediaelement',
        'info' => 
        array (
          'name' => 'MediaElement.js',
          'description' => 'Provide MediaElement.js to be used on the entire site or just with Filefields.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'files' => 
          array (
            0 => 'mediaelement.admin.inc',
            1 => 'mediaelement.install',
            2 => 'mediaelement.module',
          ),
          'configure' => 'admin/config/media/mediaelement',
          'version' => '7.x-1.2',
          'project' => 'mediaelement',
          'datestamp' => '1326568843',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'mediaelement',
        'version' => '7.x-1.2',
      ),
      'taxonomy_csv' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/taxonomy_csv/taxonomy_csv.module',
        'basename' => 'taxonomy_csv.module',
        'name' => 'taxonomy_csv',
        'info' => 
        array (
          'name' => 'Taxonomy CSV import/export',
          'description' => 'Export and import complete taxonomies, hierarchical structure or simple lists of terms and fields to or from a CSV file, url or text.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'package' => 'Taxonomy',
          'project' => 'taxonomy_csv',
          'version' => '7.x-5.10',
          'files' => 
          array (
            0 => 'taxonomy_csv.install',
            1 => 'taxonomy_csv.module',
            2 => 'taxonomy_csv.api.inc',
            3 => 'taxonomy_csv.vocabulary.api.inc',
            4 => 'taxonomy_csv.term.api.inc',
            5 => 'taxonomy_csv.result.inc',
            6 => 'import/taxonomy_csv.import.admin.inc',
            7 => 'import/taxonomy_csv.import.api.inc',
            8 => 'import/taxonomy_csv.import.line.api.inc',
            9 => 'import/taxonomy_csv.import.result.inc',
            10 => 'export/taxonomy_csv.export.admin.inc',
            11 => 'export/taxonomy_csv.export.api.inc',
            12 => 'export/taxonomy_csv.export.result.inc',
          ),
          'datestamp' => '1329924048',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'taxonomy_csv',
        'version' => '7.x-5.10',
      ),
      'stringoverrides_migrate' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/stringoverrides/stringoverrides_migrate.module',
        'basename' => 'stringoverrides_migrate.module',
        'name' => 'stringoverrides_migrate',
        'info' => 
        array (
          'name' => 'String Overrides Migrate',
          'description' => 'Tools for importing and exporting string override settings.',
          'dependencies' => 
          array (
            0 => 'stringoverrides',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'stringoverrides_migrate.module',
            1 => 'stringoverrides_migrate.admin.inc',
          ),
          'version' => '7.x-1.8',
          'project' => 'stringoverrides',
          'datestamp' => '1304446316',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'stringoverrides',
        'version' => '7.x-1.8',
      ),
      'stringoverrides' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/stringoverrides/stringoverrides.module',
        'basename' => 'stringoverrides.module',
        'name' => 'stringoverrides',
        'info' => 
        array (
          'name' => 'String Overrides',
          'description' => 'Provides a quick and easy way of replacing text.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'stringoverrides.module',
            1 => 'stringoverrides.install',
            2 => 'stringoverrides.admin.inc',
          ),
          'configure' => 'admin/config/regional/stringoverrides',
          'version' => '7.x-1.8',
          'project' => 'stringoverrides',
          'datestamp' => '1304446316',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'stringoverrides',
        'version' => '7.x-1.8',
      ),
      'mollom_test_server' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/mollom/tests/mollom_test_server.module',
        'basename' => 'mollom_test_server.module',
        'name' => 'mollom_test_server',
        'info' => 
        array (
          'name' => 'Mollom Test Server',
          'description' => 'Testing Server module for Mollom functionality. Do not enable.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'version' => '7.x-2.8',
          'project' => 'mollom',
          'datestamp' => '1384108410',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'mollom',
        'version' => '7.x-2.8',
      ),
      'mollom_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/mollom/tests/mollom_test.module',
        'basename' => 'mollom_test.module',
        'name' => 'mollom_test',
        'info' => 
        array (
          'name' => 'Mollom Test',
          'description' => 'Testing module for Mollom functionality. Do not enable.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'version' => '7.x-2.8',
          'project' => 'mollom',
          'datestamp' => '1384108410',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'mollom',
        'version' => '7.x-2.8',
      ),
      'mollom' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/mollom/mollom.module',
        'basename' => 'mollom.module',
        'name' => 'mollom',
        'info' => 
        array (
          'name' => 'Mollom',
          'description' => 'Automatically moderates user-submitted content and protects your site from spam and profanity.',
          'core' => '7.x',
          'configure' => 'admin/config/content/mollom',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'mollom.css',
            ),
          ),
          'files' => 
          array (
            0 => 'includes/mollom.class.inc',
            1 => 'mollom.drupal.inc',
            2 => 'tests/mollom.test',
            3 => 'tests/mollom.class.test',
          ),
          'version' => '7.x-2.8',
          'project' => 'mollom',
          'datestamp' => '1384108410',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7210',
        'project' => 'mollom',
        'version' => '7.x-2.8',
      ),
      'adaptive_image' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/adaptive_image/adaptive_image.module',
        'basename' => 'adaptive_image.module',
        'name' => 'adaptive_image',
        'info' => 
        array (
          'name' => 'Adaptive Image',
          'description' => 'Support for adaptive images.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/adaptive-image.css',
            ),
          ),
          'version' => '7.x-1.4',
          'project' => 'adaptive_image',
          'datestamp' => '1330097138',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'adaptive_image',
        'version' => '7.x-1.4',
      ),
      'honeypot' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/honeypot/honeypot.module',
        'basename' => 'honeypot.module',
        'name' => 'honeypot',
        'info' => 
        array (
          'name' => 'Honeypot',
          'description' => 'Mitigates spam form submissions using the honeypot method.',
          'core' => '7.x',
          'configure' => 'admin/config/content/honeypot',
          'package' => 'Spam control',
          'files' => 
          array (
            0 => 'honeypot.test',
          ),
          'version' => '7.x-1.15',
          'project' => 'honeypot',
          'datestamp' => '1379087801',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'honeypot',
        'version' => '7.x-1.15',
      ),
      'mailsystem' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/mailsystem/mailsystem.module',
        'basename' => 'mailsystem.module',
        'name' => 'mailsystem',
        'info' => 
        array (
          'package' => 'Mail',
          'name' => 'Mail System',
          'description' => 'Provides a user interface for per-module and site-wide mail_system selection.',
          'php' => '5.0',
          'core' => '7.x',
          'configure' => 'admin/config/system/mailsystem',
          'dependencies' => 
          array (
            0 => 'filter',
          ),
          'version' => '7.x-2.34',
          'project' => 'mailsystem',
          'datestamp' => '1334082653',
        ),
        'schema_version' => 0,
        'project' => 'mailsystem',
        'version' => '7.x-2.34',
      ),
      'lightbox2' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/lightbox2/lightbox2.module',
        'basename' => 'lightbox2.module',
        'name' => 'lightbox2',
        'info' => 
        array (
          'name' => 'Lightbox2',
          'description' => 'Enables Lightbox2 for Drupal',
          'core' => '7.x',
          'package' => 'User interface',
          'files' => 
          array (
            0 => 'lightbox2.install',
            1 => 'lightbox2.module',
            2 => 'lightbox2.formatter.inc',
            3 => 'lightbox2.admin.inc',
          ),
          'configure' => 'admin/config/user-interface/lightbox2',
          'version' => '7.x-1.0-beta1',
          'project' => 'lightbox2',
          'datestamp' => '1318819001',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6003',
        'project' => 'lightbox2',
        'version' => '7.x-1.0-beta1',
      ),
      'empty_front_page' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/empty_front_page/empty_front_page.module',
        'basename' => 'empty_front_page.module',
        'name' => 'empty_front_page',
        'info' => 
        array (
          'name' => 'Empty Front Page',
          'description' => 'Remove default content from the front page.',
          'core' => '7.x',
          'version' => '7.x-1.0',
          'project' => 'empty_front_page',
          'datestamp' => '1322627746',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'empty_front_page',
        'version' => '7.x-1.0',
      ),
      'geshifield' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/geshifilter/geshifield/geshifield.module',
        'basename' => 'geshifield.module',
        'name' => 'geshifield',
        'info' => 
        array (
          'name' => 'GeSHi field',
          'description' => 'Provides a field for source code with GeSHI syntax highlighting.',
          'package' => 'Filters',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'geshifilter',
          ),
          'version' => '7.x-1.2',
          'project' => 'geshifilter',
          'datestamp' => '1363644913',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'geshifilter',
        'version' => '7.x-1.2',
      ),
      'geshifilter' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/contrib/geshifilter/geshifilter.module',
        'basename' => 'geshifilter.module',
        'name' => 'geshifilter',
        'info' => 
        array (
          'name' => 'GeSHi Filter',
          'description' => 'Provides a filter to highlight source code using the GeSHi library (Generic Syntax Highlighter)',
          'package' => 'Filters',
          'core' => '7.x',
          'configure' => 'admin/config/content/formats/geshifilter',
          'files' => 
          array (
            0 => 'geshifilter.test',
          ),
          'dependencies' => 
          array (
            0 => 'libraries (>=2.0)',
          ),
          'version' => '7.x-1.2',
          'project' => 'geshifilter',
          'datestamp' => '1363644913',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'geshifilter',
        'version' => '7.x-1.2',
      ),
      'pup' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/custom/pup/pup.module',
        'basename' => 'pup.module',
        'name' => 'pup',
        'info' => 
        array (
          'name' => 'Pop-Up Player',
          'description' => 'Audio playback in a separate window with dynamic playlist editing.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'pup',
          'datestamp' => '1404949728',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'pup',
        'version' => '7.x-1.x-dev',
      ),
      'web_video_transcoder' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/modules/custom/web_video_transcoder/web_video_transcoder.module',
        'basename' => 'web_video_transcoder.module',
        'name' => 'web_video_transcoder',
        'info' => 
        array (
          'name' => 'WEB Video Transcoder',
          'description' => 'Whisky Echo Bravo video transcoder client',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'video',
            1 => 'lauth_api',
          ),
          'files' => 
          array (
            0 => 'transcoders/TranscoderAbstractionFactoryWeb.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
    ),
    'themes' => 
    array (
      'stark' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
        ),
        'project' => '',
        'version' => '7.24',
      ),
      'garland' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
        ),
        'project' => '',
        'version' => '7.24',
      ),
      'seven' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
        ),
        'project' => '',
        'version' => '7.24',
      ),
      'bartik' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
        ),
        'project' => '',
        'version' => '7.24',
      ),
      'adaptivetheme' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/themes/adaptivetheme/at_core/adaptivetheme.info',
        'basename' => 'adaptivetheme.info',
        'name' => 'AT Core',
        'info' => 
        array (
          'name' => 'AT Core',
          'description' => 'AT Core is the framework that drives the responsive layout system and provides an extensive set of tools for theme development. You do not need to enable this theme. Use the provided AT Subtheme to get started.',
          'core' => '7.x',
          'release' => '7.x-3.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'css/at.layout.css',
            ),
          ),
          'unset_core' => 
          array (
            'modules/aggregator/aggregator.css' => 'aggregator.css',
            'modules/block/block.css' => 'block.css',
            'modules/book/book.css' => 'book.css',
            'modules/color/color.css' => 'color.css',
            'modules/comment/comment.css' => 'comment.css',
            'modules/contextual/contextual.css' => 'contextual.css',
            'modules/dashboard/dashboard.css' => 'dashboard.css',
            'modules/dblog/dblog.css' => 'dblog.css',
            'modules/field/theme/field.css' => 'field.css',
            'modules/field_ui/field_ui.css' => 'field_ui.css',
            'modules/file/file.css' => 'file.css',
            'modules/filter/filter.css' => 'filter.css',
            'modules/forum/forum.css' => 'forum.css',
            'modules/help/help.css' => 'help.css',
            'modules/image/image.admin.css' => 'image.admin.css',
            'modules/image/image.css' => 'image.css',
            'modules/locale/locale.css' => 'locale.css',
            'modules/menu/menu.css' => 'menu.css',
            'modules/node/node.css' => 'node.css',
            'modules/openid/openid.css' => 'openid.css',
            'modules/poll/poll.css' => 'poll.css',
            'modules/profile/profile.css' => 'profile.css',
            'modules/search/search.css' => 'search.css',
            'modules/shortcut/shortcut.admin.css' => 'shortcut.admin.css',
            'modules/shortcut/shortcut.css' => 'shortcut.css',
            'modules/simpletest/simpletest.css' => 'simpletest.css',
            'modules/system/system.admin.css' => 'system.admin.css',
            'modules/system/system.base.css' => 'system.base.css',
            'modules/system/system.maintenance.css' => 'system.maintenance.css',
            'modules/system/system.menus.css' => 'system.menus.css',
            'modules/system/system.messages.css' => 'system.messages.css',
            'modules/system/system.theme.css' => 'system.theme.css',
            'modules/taxonomy/taxonomy.css' => 'taxonomy.css',
            'modules/toolbar/toolbar.css' => 'toolbar.css',
            'modules/tracker/tracker.css' => 'tracker.css',
            'modules/update/update.css' => 'update.css',
            'modules/user/user.css' => 'user.css',
          ),
          'regions' => 
          array (
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'content' => 'Main Content',
            'highlighted' => 'Highlighted',
            'content_aside' => 'Aside',
            'secondary_content' => 'Secondary',
            'tertiary_content' => 'Tertiary',
            'footer' => 'Footer',
            'leaderboard' => 'Leaderboard',
            'header' => 'Header',
            'menu_bar' => 'Menu Bar',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'plugins' => 
          array (
            'page_layout' => 
            array (
              'layouts' => 'layouts/core',
            ),
            'panels' => 
            array (
              'layouts' => 'layouts/panels',
            ),
          ),
          'settings' => 
          array (
            'bigscreen_layout' => 'three_col_grail',
            'bigscreen_page_unit' => '%',
            'bigscreen_sidebar_unit' => '%',
            'bigscreen_max_width_unit' => 'px',
            'bigscreen_page_width' => '100',
            'bigscreen_sidebar_first' => '25',
            'bigscreen_sidebar_second' => '25',
            'bigscreen_set_max_width' => '1',
            'bigscreen_max_width' => '1140',
            'bigscreen_media_query' => 'only screen and (min-width:1025px)',
            'tablet_landscape_layout' => 'three_col_grail',
            'tablet_landscape_page_unit' => '%',
            'tablet_landscape_sidebar_unit' => '%',
            'tablet_landscape_max_width_unit' => 'px',
            'tablet_landscape_page_width' => '100',
            'tablet_landscape_sidebar_first' => '20',
            'tablet_landscape_sidebar_second' => '20',
            'tablet_landscape_set_max_width' => '0',
            'tablet_landscape_max_width' => '960',
            'tablet_landscape_media_query' => 'only screen and (min-width:769px) and (max-width:1024px)',
            'tablet_portrait_layout' => 'one-col-vert',
            'tablet_portrait_page_unit' => '%',
            'tablet_portrait_sidebar_unit' => '%',
            'tablet_portrait_max_width_unit' => 'px',
            'tablet_portrait_page_width' => '100',
            'tablet_portrait_sidebar_first' => '50',
            'tablet_portrait_sidebar_second' => '50',
            'tablet_portrait_set_max_width' => '0',
            'tablet_portrait_max_width' => '780',
            'tablet_portrait_media_query' => 'only screen and (min-width:481px) and (max-width:768px)',
            'smartphone_landscape_layout' => 'one_col_vert',
            'smartphone_landscape_page_unit' => '%',
            'smartphone_landscape_sidebar_unit' => '%',
            'smartphone_landscape_max_width_unit' => 'px',
            'smartphone_landscape_page_width' => '100',
            'smartphone_landscape_sidebar_first' => '50',
            'smartphone_landscape_sidebar_second' => '50',
            'smartphone_landscape_set_max_width' => '0',
            'smartphone_landscape_max_width' => '520',
            'smartphone_landscape_media_query' => 'only screen and (min-width:321px) and (max-width:480px)',
            'smartphone_portrait_media_query' => 'only screen and (max-width:320px)',
            'bigscreen_two_50' => 'two-50',
            'bigscreen_two_33_66' => 'two-33-66',
            'bigscreen_two_66_33' => 'two-66-33',
            'bigscreen_two_brick' => 'two-brick',
            'bigscreen_three_3x33' => 'three-3x33',
            'bigscreen_three_25_50_25' => 'three-25-50-25',
            'bigscreen_three_25_25_50' => 'three-25-25-50',
            'bigscreen_three_50_25_25' => 'three-50-25-25',
            'bigscreen_four_4x25' => 'four-4x25',
            'bigscreen_five_5x20' => 'five-5x20-2x3-grid',
            'bigscreen_six_6x16' => 'six-6x16-3x2-grid',
            'bigscreen_three_inset_left' => 'three-inset-left',
            'bigscreen_three_inset_right' => 'three-inset-right',
            'tablet_landscape_two_50' => 'two-50',
            'tablet_landscape_two_33_66' => 'two-33-66',
            'tablet_landscape_two_66_33' => 'two-66-33',
            'tablet_landscape_two_brick' => 'two-brick',
            'tablet_landscape_three_3x33' => 'three-3x33',
            'tablet_landscape_three_25_50_25' => 'three-25-50-25',
            'tablet_landscape_three_25_25_50' => 'three-25-25-50',
            'tablet_landscape_three_50_25_25' => 'three-50-25-25',
            'tablet_landscape_four_4x25' => 'four-4x25',
            'tablet_landscape_five_5x20' => 'five-5x20-2x3-grid',
            'tablet_landscape_six_6x16' => 'six-6x16-3x2-grid',
            'tablet_landscape_three_inset_left' => 'three-inset-left',
            'tablet_landscape_three_inset_right' => 'three-inset-right',
            'tablet_portrait_two_50' => 'two-50',
            'tablet_portrait_two_33_66' => 'two-33-66',
            'tablet_portrait_two_66_33' => 'two-66-33',
            'tablet_portrait_two_brick' => 'two-brick',
            'tablet_portrait_three_3x33' => 'three-3x33-stack-top',
            'tablet_portrait_three_25_50_25' => 'three-25-50-25-stack-top',
            'tablet_portrait_three_25_25_50' => 'three-25-25-50-stack-top',
            'tablet_portrait_three_50_25_25' => 'three-50-25-25-stack-top',
            'tablet_portrait_four_4x25' => 'four-4x25-2x2-grid',
            'tablet_portrait_five_5x20' => 'five-5x20-1x2x2-grid',
            'tablet_portrait_six_6x16' => 'six-6x16-2x3-grid',
            'tablet_portrait_three_inset_left' => 'three-inset-left-wrap',
            'tablet_portrait_three_inset_right' => 'three-inset-right-wrap',
            'smartphone_landscape_two_50' => 'two-50-stack',
            'smartphone_landscape_two_33_66' => 'two-33-66-stack',
            'smartphone_landscape_two_66_33' => 'two-66-33-stack',
            'smartphone_landscape_two_brick' => 'two-brick-stack',
            'smartphone_landscape_three_3x33' => 'three-3x33-stack',
            'smartphone_landscape_three_25_50_25' => 'three-25-50-25-stack',
            'smartphone_landscape_three_25_25_50' => 'three-25-25-50-stack',
            'smartphone_landscape_three_50_25_25' => 'three-50-25-25-stack',
            'smartphone_landscape_four_4x25' => 'four-4x25-stack',
            'smartphone_landscape_five_5x20' => 'five-5x20-stack',
            'smartphone_landscape_six_6x16' => 'six-6x16-stack',
            'smartphone_landscape_three_inset_left' => 'three-inset-left-stack',
            'smartphone_landscape_three_inset_right' => 'three-inset-right-stack',
            'disable_responsive_styles' => '0',
            'enable_custom_media_queries' => '1',
            'global_default_layout' => 'smartphone-portrait',
            'global_default_layout_toggle' => '0',
            'global_files_path' => 'public_files',
            'load_html5js' => '1',
            'load_onmediaqueryjs' => '0',
            'load_respondjs' => '0',
            'load_ltie8css' => '0',
            'load_scalefixjs' => '0',
            'expose_regions' => '0',
            'load_all_panels' => '0',
            'load_all_panels_no_sidebars' => '0',
            'show_window_size' => '0',
            'rebuild_theme_data' => '0',
            'enable_extensions' => '0',
            'enable_font_settings' => '0',
            'enable_heading_settings' => '0',
            'enable_image_settings' => '0',
            'enable_apple_touch_icons' => '0',
            'enable_exclude_css' => '0',
            'enable_custom_css' => '0',
            'enable_context_regions' => '0',
            'enable_float_region_blocks' => '0',
            'enable_markup_overides' => '0',
            'base_font_type' => '<none>',
            'site_name_font_type' => '<none>',
            'site_slogan_font_type' => '<none>',
            'page_title_font_type' => '<none>',
            'node_title_font_type' => '<none>',
            'comment_title_font_type' => '<none>',
            'block_title_font_type' => '<none>',
            'main_menu_font_type' => '<none>',
            'secondary_menu_font_type' => '<none>',
            'block_menu_font_type' => '<none>',
            'selectors_font_type' => '<none>',
            'base_font_size' => '<none>',
            'site_name_font_size' => '<none>',
            'site_slogan_font_size' => '<none>',
            'page_title_font_size' => '<none>',
            'node_title_font_size' => '<none>',
            'comment_title_font_size' => '<none>',
            'block_title_font_size' => '<none>',
            'main_menu_font_size' => '<none>',
            'secondary_menu_font_size' => '<none>',
            'block_menu_font_size' => '<none>',
            'content_headings_h1h4_font_type' => '<none>',
            'content_headings_h5h6_font_type' => '<none>',
            'h1_font_size' => '2em',
            'h2_font_size' => '1.6em',
            'h3_font_size' => '1.4em',
            'h4_font_size' => '1.2em',
            'h5_font_size' => '1em',
            'h6_font_size' => '1em',
            'page_title_case' => 'ptc-n',
            'page_title_weight' => 'ptw-b',
            'page_title_alignment' => 'pta-l',
            'page_title_shadow' => 'pts-n',
            'node_title_case' => 'ntc-n',
            'node_title_weight' => 'ntw-b',
            'node_title_alignment' => 'nta-l',
            'node_title_shadow' => 'nts-n',
            'comment_title_case' => 'ctc-n',
            'comment_title_weight' => 'ctw-b',
            'comment_title_alignment' => 'cta-l',
            'comment_title_shadow' => 'cts-n',
            'block_title_case' => 'btc-uc',
            'block_title_weight' => 'btw-b',
            'block_title_alignment' => 'bta-l',
            'block_title_shadow' => 'bts-n',
            'image_alignment' => 'ia-l',
            'image_alignment_teaser' => 'iat-l',
            'image_caption_full' => '0',
            'image_caption_teaser' => '0',
            'image_teaser' => '0',
            'breadcrumb_display' => '1',
            'breadcrumb_home' => '0',
            'breadcrumb_label' => '0',
            'breadcrumb_title' => '0',
            'breadcrumb_separator' => ' &#187; ',
            'horizontal_login_block_enable' => 'on',
            'horizontal_login_block' => '0',
            'login_block_remove_links' => '0',
            'login_block_remove_openid' => '0',
            'global_gutter_width' => '',
            'page_full_width_wrappers' => '0',
            'page_content_type_suggestions' => '0',
            'menu_item_span_elements' => '0',
            'extra_page_classes' => '1',
            'extra_article_classes' => '1',
            'extra_comment_classes' => '1',
            'extra_block_classes' => '1',
            'extra_menu_classes' => '1',
            'extra_item_list_classes' => '1',
            'comments_hide_title' => '0',
            'feed_icons' => '0',
            'unset_block_system_main_front' => '0',
            'skip_link_target' => '#main-content',
            'adv_search_extra_fieldsets' => '0',
            'rel_author' => '0',
            'mobile_friendly_metatags' => '1',
            'adaptivetheme_meta_viewport' => 'width=device-width, initial-scale=1',
            'adaptivetheme_meta_mobileoptimized' => 'width',
            'adaptivetheme_meta_handheldfriendly' => 'true',
            'adaptivetheme_meta_apple_mobile_web_app_capable' => 'yes',
            'chrome_edge' => '0',
            'clear_type' => '0',
            'apple_touch_icon_enable' => '0',
            'apple_touch_icon_path_l' => '',
            'apple_touch_icon_path_m' => '',
            'apple_touch_icon_path_h' => '',
            'custom_css' => '',
          ),
          'version' => '7.x-3.1',
          'project' => 'adaptivetheme',
          'datestamp' => '1346238662',
        ),
        'owner' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => 'adaptivetheme',
        'version' => '7.x-3.1',
      ),
      'adaptivetheme_admin' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/themes/adaptivetheme/at_admin/adaptivetheme_admin.info',
        'basename' => 'adaptivetheme_admin.info',
        'name' => 'AT Admin',
        'info' => 
        array (
          'name' => 'AT Admin',
          'description' => 'A better admin theme for Drupal 7. Clean, calm, invisible. Includes left and right sidebars, Overlay support and all AT\'s theme setting goodies.',
          'core' => '7.x',
          'base theme' => 'adaptivetheme',
          'release' => '7.x-3.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'css/at_admin.css',
            ),
          ),
          'regions' => 
          array (
            'content' => 'Main content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'footer' => 'Footer',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
            'bigscreen_layout' => 'three_col_grail',
            'bigscreen_page_unit' => '%',
            'bigscreen_sidebar_unit' => 'px',
            'bigscreen_max_width_unit' => 'px',
            'bigscreen_page_width' => '100',
            'bigscreen_sidebar_first' => '180',
            'bigscreen_sidebar_second' => '180',
            'bigscreen_set_max_width' => '1',
            'bigscreen_max_width' => '1330',
            'bigscreen_media_query' => 'only screen and (min-width:1025px)',
            'tablet_landscape_layout' => 'three_col_grail',
            'tablet_landscape_page_unit' => '%',
            'tablet_landscape_sidebar_unit' => '%',
            'tablet_landscape_page_width' => '100',
            'tablet_landscape_sidebar_first' => '20',
            'tablet_landscape_sidebar_second' => '20',
            'tablet_landscape_media_query' => 'only screen and (min-width:769px) and (max-width:1024px)',
            'tablet_portrait_layout' => 'one_col_vert',
            'tablet_portrait_page_unit' => '%',
            'tablet_portrait_sidebar_unit' => '%',
            'tablet_portrait_page_width' => '100',
            'tablet_portrait_sidebar_first' => '50',
            'tablet_portrait_sidebar_second' => '50',
            'tablet_portrait_media_query' => 'only screen and (min-width:481px) and (max-width:768px)',
            'smartphone_landscape_layout' => 'one_col_vert',
            'smartphone_landscape_page_unit' => '%',
            'smartphone_landscape_sidebar_unit' => '%',
            'smartphone_landscape_page_width' => '100',
            'smartphone_landscape_sidebar_first' => '50',
            'smartphone_landscape_sidebar_second' => '50',
            'smartphone_landscape_media_query' => 'only screen and (min-width:321px) and (max-width:480px)',
            'smartphone_portrait_layout' => 'one_col_stack',
            'smartphone_portrait_page_unit' => '%',
            'smartphone_portrait_sidebar_unit' => '%',
            'smartphone_portrait_page_width' => '100',
            'smartphone_portrait_sidebar_first' => '100',
            'smartphone_portrait_sidebar_second' => '100',
            'smartphone_portrait_media_query' => 'only screen and (max-width:320px)',
            'bigscreen_two_50' => 'two-50',
            'bigscreen_two_33_66' => 'two-33-66',
            'bigscreen_two_66_33' => 'two-66-33',
            'bigscreen_two_brick' => 'two-brick',
            'bigscreen_three_3x33' => 'three-3x33',
            'bigscreen_three_25_50_25' => 'three-25-50-25',
            'bigscreen_three_25_25_50' => 'three-25-25-50',
            'bigscreen_three_50_25_25' => 'three-50-25-25',
            'bigscreen_four_4x25' => 'four-4x25',
            'bigscreen_five_5x20' => 'five-5x20-2x3-grid',
            'bigscreen_six_6x16' => 'six-6x16-3x2-grid',
            'bigscreen_three_inset_left' => 'three-inset-left',
            'bigscreen_three_inset_right' => 'three-inset-right',
            'tablet_landscape_two_50' => 'two-50',
            'tablet_landscape_two_33_66' => 'two-33-66',
            'tablet_landscape_two_66_33' => 'two-66-33',
            'tablet_landscape_two_brick' => 'two-brick',
            'tablet_landscape_three_3x33' => 'three-3x33',
            'tablet_landscape_three_25_50_25' => 'three-25-50-25',
            'tablet_landscape_three_25_25_50' => 'three-25-25-50',
            'tablet_landscape_three_50_25_25' => 'three-50-25-25',
            'tablet_landscape_four_4x25' => 'four-4x25',
            'tablet_landscape_five_5x20' => 'five-5x20-2x3-grid',
            'tablet_landscape_six_6x16' => 'six-6x16-3x2-grid',
            'tablet_landscape_three_inset_left' => 'three-inset-left',
            'tablet_landscape_three_inset_right' => 'three-inset-right',
            'tablet_portrait_two_50' => 'two-50',
            'tablet_portrait_two_33_66' => 'two-33-66',
            'tablet_portrait_two_66_33' => 'two-66-33',
            'tablet_portrait_two_brick' => 'two-brick',
            'tablet_portrait_three_3x33' => 'three-3x33-stack-top',
            'tablet_portrait_three_25_50_25' => 'three-25-50-25-stack-top',
            'tablet_portrait_three_25_25_50' => 'three-25-25-50-stack-top',
            'tablet_portrait_three_50_25_25' => 'three-50-25-25-stack-top',
            'tablet_portrait_four_4x25' => 'four-4x25-2x2-grid',
            'tablet_portrait_five_5x20' => 'five-5x20-1x2x2-grid',
            'tablet_portrait_six_6x16' => 'six-6x16-2x3-grid',
            'tablet_portrait_three_inset_left' => 'three-inset-left-wrap',
            'tablet_portrait_three_inset_right' => 'three-inset-right-wrap',
            'smartphone_landscape_two_50' => 'two-50-stack',
            'smartphone_landscape_two_33_66' => 'two-33-66-stack',
            'smartphone_landscape_two_66_33' => 'two-66-33-stack',
            'smartphone_landscape_two_brick' => 'two-brick-stack',
            'smartphone_landscape_three_3x33' => 'three-3x33-stack',
            'smartphone_landscape_three_25_50_25' => 'three-25-50-25-stack',
            'smartphone_landscape_three_25_25_50' => 'three-25-25-50-stack',
            'smartphone_landscape_three_50_25_25' => 'three-50-25-25-stack',
            'smartphone_landscape_four_4x25' => 'four-4x25-stack',
            'smartphone_landscape_five_5x20' => 'five-5x20-stack',
            'smartphone_landscape_six_6x16' => 'six-6x16-stack',
            'smartphone_landscape_three_inset_left' => 'three-inset-left-stack',
            'smartphone_landscape_three_inset_right' => 'three-inset-right-stack',
            'disable_responsive_styles' => '0',
            'enable_custom_media_queries' => '0',
            'global_default_layout' => 'smartphone-portrait',
            'global_default_layout_toggle' => '0',
            'global_files_path' => 'public_files',
            'load_html5js' => '1',
            'load_onmediaqueryjs' => '0',
            'load_respondjs' => '0',
            'load_ltie8css' => '0',
            'load_scalefixjs' => '0',
            'expose_regions' => '0',
            'load_all_panels' => '0',
            'load_all_panels_no_sidebars' => '0',
            'show_window_size' => '0',
            'rebuild_theme_data' => '0',
            'enable_extensions' => '1',
            'enable_font_settings' => '0',
            'enable_heading_settings' => '0',
            'enable_image_settings' => '0',
            'enable_apple_touch_icons' => '0',
            'enable_exclude_css' => '0',
            'enable_custom_css' => '0',
            'enable_context_regions' => '0',
            'enable_float_region_blocks' => '0',
            'enable_markup_overides' => '1',
            'base_font_type' => '',
            'site_name_font_type' => '',
            'site_slogan_font_type' => '',
            'page_title_font_type' => '',
            'node_title_font_type' => '',
            'comment_title_font_type' => '',
            'block_title_font_type' => '',
            'base_font' => 'bf-sss',
            'site_name_font' => 'snf-sl',
            'site_slogan_font' => 'ssf-sl',
            'main_menu_font' => 'mmf-sl',
            'page_title_font' => 'ptf-sl',
            'node_title_font' => 'ntf-sl',
            'comment_title_font' => 'ctf-sl',
            'block_title_font' => 'btf-sl',
            'base_font_size' => '1em',
            'site_name_font_size' => '2em',
            'site_slogan_font_size' => '1.2em',
            'page_title_font_size' => '2em',
            'node_title_font_size' => '1.6em',
            'comment_title_font_size' => '1.4em',
            'block_title_font_size' => '1.4em',
            'h1_font_size' => '2em',
            'h2_font_size' => '1.6em',
            'h3_font_size' => '1.4em',
            'h4_font_size' => '1.2em',
            'h5_font_size' => '1em',
            'h6_font_size' => '1em',
            'page_title_case' => 'ptc-n',
            'page_title_weight' => 'ptw-b',
            'page_title_alignment' => 'pta-l',
            'page_title_shadow' => 'pts-n',
            'node_title_case' => 'ntc-n',
            'node_title_weight' => 'ntw-b',
            'node_title_alignment' => 'nta-l',
            'node_title_shadow' => 'nts-n',
            'comment_title_case' => 'ctc-n',
            'comment_title_weight' => 'ctw-b',
            'comment_title_alignment' => 'cta-l',
            'comment_title_shadow' => 'cts-n',
            'block_title_case' => 'btc-uc',
            'block_title_weight' => 'btw-b',
            'block_title_alignment' => 'bta-l',
            'block_title_shadow' => 'bts-n',
            'image_alignment' => 'ia-l',
            'image_alignment_teaser' => 'iat-l',
            'image_caption_full' => '0',
            'image_caption_teaser' => '0',
            'image_teaser' => '1',
            'breadcrumb_display' => '1',
            'breadcrumb_home' => '1',
            'breadcrumb_label' => '0',
            'breadcrumb_title' => '0',
            'breadcrumb_separator' => ' &#187; ',
            'horizontal_login_block_enable' => 'on',
            'horizontal_login_block' => '0',
            'login_block_remove_links' => '0',
            'login_block_remove_openid' => '0',
            'global_gutter_width' => '',
            'page_full_width_wrappers' => '0',
            'page_content_type_suggestions' => '0',
            'menu_item_span_elements' => '0',
            'extra_page_classes' => '1',
            'extra_article_classes' => '1',
            'extra_comment_classes' => '1',
            'extra_block_classes' => '1',
            'extra_menu_classes' => '1',
            'extra_item_list_classes' => '1',
            'comments_hide_title' => '0',
            'feed_icons' => '0',
            'unset_block_system_main_front' => '0',
            'skip_link_target' => '#main-content',
            'adv_search_extra_fieldsets' => '0',
            'rel_author' => '0',
            'mobile_friendly_metatags' => '1',
            'adaptivetheme_meta_viewport' => 'width=device-width, initial-scale=1',
            'adaptivetheme_meta_mobileoptimized' => 'width',
            'adaptivetheme_meta_handheldfriendly' => 'true',
            'adaptivetheme_meta_apple_mobile_web_app_capable' => 'yes',
            'chrome_edge' => '0',
            'clear_type' => '0',
            'apple_touch_icon_enable' => '0',
            'apple_touch_icon_path_l' => 'images/touch-icon-l.png',
            'apple_touch_icon_path_m' => 'images/touch-icon-m.png',
            'apple_touch_icon_path_h' => 'images/touch-icon-h.png',
            'custom_css' => '',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'favicon',
            3 => 'main_menu',
            4 => 'secondary_menu',
          ),
          'version' => '7.x-3.1',
          'project' => 'adaptivetheme',
          'datestamp' => '1346238662',
        ),
        'owner' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => 'adaptivetheme',
        'version' => '7.x-3.1',
      ),
      'adaptivetheme_subtheme' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/themes/adaptivetheme/at_subtheme/adaptivetheme_subtheme.info',
        'basename' => 'adaptivetheme_subtheme.info',
        'name' => 'AT Subtheme',
        'info' => 
        array (
          'name' => 'AT Subtheme',
          'description' => 'Copy this subtheme to get started - see the <b><a href="http://adaptivethemes.com/documentation/adaptivethemes-documentation" target="_blank" title="Adaptivethemes.com - Rocking the hardest since 2006">documentation</a></b> for guidence or the included README. Drush users can generate a new theme using the command: drush adaptivetheme. If you need help please use the <b><a href="http://drupal.org/project/issues/adaptivetheme" target="_blank">issue queue</a></b> or ask in the IRC channel: <b><a href="irc://irc.freenode.net/drupal-adaptivetheme">#drupal-adaptivetheme</a></b>.',
          'core' => '7.x',
          'base theme' => 'adaptivetheme',
          'release' => '7.x-3.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'css/global.base.css',
              1 => 'css/global.styles.css',
            ),
          ),
          'regions' => 
          array (
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'content' => 'Main Content',
            'highlighted' => 'Highlighted',
            'content_aside' => 'Aside',
            'secondary_content' => 'Secondary',
            'tertiary_content' => 'Tertiary',
            'footer' => 'Footer',
            'leaderboard' => 'Leaderboard',
            'header' => 'Header',
            'menu_bar' => 'Menu Bar',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'comment_user_verification',
            6 => 'favicon',
            7 => 'main_menu',
            8 => 'secondary_menu',
          ),
          'settings' => 
          array (
            'bigscreen_layout' => 'three_col_grail',
            'bigscreen_page_unit' => '%',
            'bigscreen_sidebar_unit' => '%',
            'bigscreen_max_width_unit' => 'px',
            'bigscreen_page_width' => '100',
            'bigscreen_sidebar_first' => '25',
            'bigscreen_sidebar_second' => '25',
            'bigscreen_set_max_width' => '1',
            'bigscreen_max_width' => '1140',
            'bigscreen_media_query' => 'only screen and (min-width:1025px)',
            'tablet_landscape_layout' => 'three_col_grail',
            'tablet_landscape_page_unit' => '%',
            'tablet_landscape_sidebar_unit' => '%',
            'tablet_landscape_page_width' => '100',
            'tablet_landscape_sidebar_first' => '20',
            'tablet_landscape_sidebar_second' => '20',
            'tablet_landscape_media_query' => 'only screen and (min-width:769px) and (max-width:1024px)',
            'tablet_portrait_layout' => 'one_col_vert',
            'tablet_portrait_page_unit' => '%',
            'tablet_portrait_sidebar_unit' => '%',
            'tablet_portrait_page_width' => '100',
            'tablet_portrait_sidebar_first' => '50',
            'tablet_portrait_sidebar_second' => '50',
            'tablet_portrait_media_query' => 'only screen and (min-width:481px) and (max-width:768px)',
            'smartphone_landscape_layout' => 'one_col_vert',
            'smartphone_landscape_page_unit' => '%',
            'smartphone_landscape_sidebar_unit' => '%',
            'smartphone_landscape_page_width' => '100',
            'smartphone_landscape_sidebar_first' => '50',
            'smartphone_landscape_sidebar_second' => '50',
            'smartphone_landscape_media_query' => 'only screen and (min-width:321px) and (max-width:480px)',
            'smartphone_portrait_layout' => 'one_col_stack',
            'smartphone_portrait_page_unit' => '%',
            'smartphone_portrait_sidebar_unit' => '%',
            'smartphone_portrait_page_width' => '100',
            'smartphone_portrait_sidebar_first' => '100',
            'smartphone_portrait_sidebar_second' => '100',
            'smartphone_portrait_media_query' => 'only screen and (max-width:320px)',
            'bigscreen_two_50' => 'two-50',
            'bigscreen_two_33_66' => 'two-33-66',
            'bigscreen_two_66_33' => 'two-66-33',
            'bigscreen_two_brick' => 'two-brick',
            'bigscreen_three_3x33' => 'three-3x33',
            'bigscreen_three_25_50_25' => 'three-25-50-25',
            'bigscreen_three_25_25_50' => 'three-25-25-50',
            'bigscreen_three_50_25_25' => 'three-50-25-25',
            'bigscreen_four_4x25' => 'four-4x25',
            'bigscreen_five_5x20' => 'five-5x20-2x3-grid',
            'bigscreen_six_6x16' => 'six-6x16-3x2-grid',
            'bigscreen_three_inset_left' => 'three-inset-left',
            'bigscreen_three_inset_right' => 'three-inset-right',
            'tablet_landscape_two_50' => 'two-50',
            'tablet_landscape_two_33_66' => 'two-33-66',
            'tablet_landscape_two_66_33' => 'two-66-33',
            'tablet_landscape_two_brick' => 'two-brick',
            'tablet_landscape_three_3x33' => 'three-3x33',
            'tablet_landscape_three_25_50_25' => 'three-25-50-25',
            'tablet_landscape_three_25_25_50' => 'three-25-25-50',
            'tablet_landscape_three_50_25_25' => 'three-50-25-25',
            'tablet_landscape_four_4x25' => 'four-4x25',
            'tablet_landscape_five_5x20' => 'five-5x20-2x3-grid',
            'tablet_landscape_six_6x16' => 'six-6x16-3x2-grid',
            'tablet_landscape_three_inset_left' => 'three-inset-left',
            'tablet_landscape_three_inset_right' => 'three-inset-right',
            'tablet_portrait_two_50' => 'two-50',
            'tablet_portrait_two_33_66' => 'two-33-66',
            'tablet_portrait_two_66_33' => 'two-66-33',
            'tablet_portrait_two_brick' => 'two-brick',
            'tablet_portrait_three_3x33' => 'three-3x33-stack-top',
            'tablet_portrait_three_25_50_25' => 'three-25-50-25-stack-top',
            'tablet_portrait_three_25_25_50' => 'three-25-25-50-stack-top',
            'tablet_portrait_three_50_25_25' => 'three-50-25-25-stack-top',
            'tablet_portrait_four_4x25' => 'four-4x25-2x2-grid',
            'tablet_portrait_five_5x20' => 'five-5x20-1x2x2-grid',
            'tablet_portrait_six_6x16' => 'six-6x16-2x3-grid',
            'tablet_portrait_three_inset_left' => 'three-inset-left-wrap',
            'tablet_portrait_three_inset_right' => 'three-inset-right-wrap',
            'smartphone_landscape_two_50' => 'two-50-stack',
            'smartphone_landscape_two_33_66' => 'two-33-66-stack',
            'smartphone_landscape_two_66_33' => 'two-66-33-stack',
            'smartphone_landscape_two_brick' => 'two-brick-stack',
            'smartphone_landscape_three_3x33' => 'three-3x33-stack',
            'smartphone_landscape_three_25_50_25' => 'three-25-50-25-stack',
            'smartphone_landscape_three_25_25_50' => 'three-25-25-50-stack',
            'smartphone_landscape_three_50_25_25' => 'three-50-25-25-stack',
            'smartphone_landscape_four_4x25' => 'four-4x25-stack',
            'smartphone_landscape_five_5x20' => 'five-5x20-stack',
            'smartphone_landscape_six_6x16' => 'six-6x16-stack',
            'smartphone_landscape_three_inset_left' => 'three-inset-left-stack',
            'smartphone_landscape_three_inset_right' => 'three-inset-right-stack',
            'disable_responsive_styles' => '0',
            'enable_custom_media_queries' => '1',
            'global_default_layout' => 'smartphone-portrait',
            'global_default_layout_toggle' => '0',
            'global_files_path' => 'public_files',
            'load_html5js' => '1',
            'load_respondjs' => '0',
            'load_ltie8css' => '0',
            'load_scalefixjs' => '0',
            'expose_regions' => '0',
            'load_all_panels' => '0',
            'load_all_panels_no_sidebars' => '0',
            'show_window_size' => '0',
            'rebuild_theme_data' => '0',
            'enable_extensions' => '0',
            'enable_font_settings' => '0',
            'enable_heading_settings' => '0',
            'enable_image_settings' => '0',
            'enable_apple_touch_icons' => '0',
            'enable_exclude_css' => '0',
            'enable_custom_css' => '0',
            'enable_context_regions' => '0',
            'enable_float_region_blocks' => '0',
            'enable_markup_overides' => '0',
            'base_font_type' => '<none>',
            'site_name_font_type' => '<none>',
            'site_slogan_font_type' => '<none>',
            'page_title_font_type' => '<none>',
            'node_title_font_type' => '<none>',
            'comment_title_font_type' => '<none>',
            'block_title_font_type' => '<none>',
            'main_menu_font_type' => '<none>',
            'secondary_menu_font_type' => '<none>',
            'block_menu_font_type' => '<none>',
            'selectors_font_type' => '<none>',
            'content_headings_h1h4_font_type' => '<none>',
            'content_headings_h5h6_font_type' => '<none>',
            'base_font_size' => '<none>',
            'site_name_font_size' => '<none>',
            'site_slogan_font_size' => '<none>',
            'page_title_font_size' => '<none>',
            'node_title_font_size' => '<none>',
            'comment_title_font_size' => '<none>',
            'block_title_font_size' => '<none>',
            'main_menu_font_size' => '<none>',
            'secondary_menu_font_size' => '<none>',
            'block_menu_font_size' => '<none>',
            'h1_font_size' => '2em',
            'h2_font_size' => '1.6em',
            'h3_font_size' => '1.4em',
            'h4_font_size' => '1.2em',
            'h5_font_size' => '1em',
            'h6_font_size' => '1em',
            'page_title_case' => 'ptc-n',
            'page_title_weight' => 'ptw-b',
            'page_title_alignment' => 'pta-l',
            'page_title_shadow' => 'pts-n',
            'node_title_case' => 'ntc-n',
            'node_title_weight' => 'ntw-b',
            'node_title_alignment' => 'nta-l',
            'node_title_shadow' => 'nts-n',
            'comment_title_case' => 'ctc-n',
            'comment_title_weight' => 'ctw-b',
            'comment_title_alignment' => 'cta-l',
            'comment_title_shadow' => 'cts-n',
            'block_title_case' => 'btc-n',
            'block_title_weight' => 'btw-b',
            'block_title_alignment' => 'bta-l',
            'block_title_shadow' => 'bts-n',
            'image_alignment' => 'ia-n',
            'image_alignment_teaser' => 'iat-n',
            'image_caption_full' => '0',
            'image_caption_teaser' => '0',
            'image_teaser' => '0',
            'breadcrumb_display' => '1',
            'breadcrumb_home' => '0',
            'breadcrumb_label' => '0',
            'breadcrumb_title' => '0',
            'breadcrumb_separator' => ' &#187; ',
            'horizontal_login_block_enable' => 'on',
            'horizontal_login_block' => '0',
            'login_block_remove_links' => '0',
            'login_block_remove_openid' => '0',
            'global_gutter_width' => '',
            'page_full_width_wrappers' => '0',
            'page_content_type_suggestions' => '0',
            'menu_item_span_elements' => '0',
            'extra_page_classes' => '1',
            'extra_article_classes' => '1',
            'extra_comment_classes' => '1',
            'extra_block_classes' => '1',
            'extra_menu_classes' => '1',
            'extra_item_list_classes' => '1',
            'comments_hide_title' => '0',
            'feed_icons' => '0',
            'unset_block_system_main_front' => '0',
            'unset_menu_titles' => '0',
            'skip_link_target' => '#main-content',
            'adv_search_extra_fieldsets' => '0',
            'rel_author' => '0',
            'mobile_friendly_metatags' => '1',
            'adaptivetheme_meta_viewport' => 'width=device-width, initial-scale=1',
            'adaptivetheme_meta_mobileoptimized' => 'width',
            'adaptivetheme_meta_handheldfriendly' => 'true',
            'adaptivetheme_meta_apple_mobile_web_app_capable' => 'yes',
            'chrome_edge' => '0',
            'clear_type' => '0',
            'apple_touch_icon_enable' => '0',
            'apple_touch_icon_path_l' => 'images/touch-icon-l.png',
            'apple_touch_icon_path_m' => 'images/touch-icon-m.png',
            'apple_touch_icon_path_h' => 'images/touch-icon-h.png',
            'custom_css' => '',
          ),
          'version' => '7.x-3.1',
          'project' => 'adaptivetheme',
          'datestamp' => '1346238662',
        ),
        'owner' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => 'adaptivetheme',
        'version' => '7.x-3.1',
      ),
      'zen' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/themes/zen/zen.info',
        'basename' => 'zen.info',
        'name' => 'Zen',
        'info' => 
        array (
          'name' => 'Zen',
          'description' => 'Zen sub-themes are the ultimate starting themes for Drupal 7. Read the <a href="https://drupal.org/node/873778">online docs</a> or the included README-FIRST.txt on how to create a theme with Zen.',
          'screenshot' => 'zen-internals/screenshot.png',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'system.menus.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'navigation' => 'Navigation bar',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'sidebar_first' => 'First sidebar',
            'sidebar_second' => 'Second sidebar',
            'footer' => 'Footer',
            'bottom' => 'Page bottom',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'settings' => 
          array (
            'zen_breadcrumb' => 'yes',
            'zen_breadcrumb_separator' => ' › ',
            'zen_breadcrumb_home' => '1',
            'zen_breadcrumb_trailing' => '0',
            'zen_breadcrumb_title' => '0',
            'zen_layout' => 'zen-responsive-sidebars',
            'zen_skip_link_anchor' => 'main-menu',
            'zen_skip_link_text' => 'Jump to navigation',
            'zen_html5_respond_meta' => 
            array (
              0 => 'respond',
              1 => 'html5',
              2 => 'meta',
            ),
            'zen_rebuild_registry' => '0',
            'zen_wireframes' => '0',
          ),
          'plugins' => 
          array (
            'panels' => 
            array (
              'layouts' => 'panels-layouts',
            ),
          ),
          'version' => '7.x-5.4',
          'project' => 'zen',
          'datestamp' => '1377107504',
        ),
        'owner' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => 'zen',
        'version' => '7.x-5.4',
      ),
      'at_spirale' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/themes/at_spirale/at_spirale.info',
        'basename' => 'at_spirale.info',
        'name' => 'AT SPIRALE',
        'info' => 
        array (
          'name' => 'AT SPIRALE',
          'description' => 'Spirale thème.',
          'core' => '7.x',
          'base theme' => 'adaptivetheme',
          'release' => '7.x-3.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'css/global.base.css',
              1 => 'css/global.styles.css',
            ),
          ),
          'regions' => 
          array (
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'content' => 'Main Content',
            'highlighted' => 'Highlighted',
            'content_aside' => 'Aside',
            'secondary_content' => 'Secondary',
            'tertiary_content' => 'Tertiary',
            'footer' => 'Footer',
            'leaderboard' => 'Leaderboard',
            'header' => 'Header',
            'menu_bar' => 'Menu Bar',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'comment_user_verification',
            6 => 'favicon',
            7 => 'main_menu',
            8 => 'secondary_menu',
          ),
          'settings' => 
          array (
            'bigscreen_layout' => 'three_col_grail',
            'bigscreen_page_unit' => '%',
            'bigscreen_sidebar_unit' => '%',
            'bigscreen_max_width_unit' => 'px',
            'bigscreen_page_width' => '100',
            'bigscreen_sidebar_first' => '25',
            'bigscreen_sidebar_second' => '25',
            'bigscreen_set_max_width' => '1',
            'bigscreen_max_width' => '1140',
            'bigscreen_media_query' => 'only screen and (min-width:1025px)',
            'tablet_landscape_layout' => 'three_col_grail',
            'tablet_landscape_page_unit' => '%',
            'tablet_landscape_sidebar_unit' => '%',
            'tablet_landscape_page_width' => '100',
            'tablet_landscape_sidebar_first' => '20',
            'tablet_landscape_sidebar_second' => '20',
            'tablet_landscape_media_query' => 'only screen and (min-width:769px) and (max-width:1024px)',
            'tablet_portrait_layout' => 'one_col_vert',
            'tablet_portrait_page_unit' => '%',
            'tablet_portrait_sidebar_unit' => '%',
            'tablet_portrait_page_width' => '100',
            'tablet_portrait_sidebar_first' => '50',
            'tablet_portrait_sidebar_second' => '50',
            'tablet_portrait_media_query' => 'only screen and (min-width:481px) and (max-width:768px)',
            'smartphone_landscape_layout' => 'one_col_vert',
            'smartphone_landscape_page_unit' => '%',
            'smartphone_landscape_sidebar_unit' => '%',
            'smartphone_landscape_page_width' => '100',
            'smartphone_landscape_sidebar_first' => '50',
            'smartphone_landscape_sidebar_second' => '50',
            'smartphone_landscape_media_query' => 'only screen and (min-width:321px) and (max-width:480px)',
            'smartphone_portrait_layout' => 'one_col_stack',
            'smartphone_portrait_page_unit' => '%',
            'smartphone_portrait_sidebar_unit' => '%',
            'smartphone_portrait_page_width' => '100',
            'smartphone_portrait_sidebar_first' => '100',
            'smartphone_portrait_sidebar_second' => '100',
            'smartphone_portrait_media_query' => 'only screen and (max-width:320px)',
            'bigscreen_two_50' => 'two-50',
            'bigscreen_two_33_66' => 'two-33-66',
            'bigscreen_two_66_33' => 'two-66-33',
            'bigscreen_two_brick' => 'two-brick',
            'bigscreen_three_3x33' => 'three-3x33',
            'bigscreen_three_25_50_25' => 'three-25-50-25',
            'bigscreen_three_25_25_50' => 'three-25-25-50',
            'bigscreen_three_50_25_25' => 'three-50-25-25',
            'bigscreen_four_4x25' => 'four-4x25',
            'bigscreen_five_5x20' => 'five-5x20-2x3-grid',
            'bigscreen_six_6x16' => 'six-6x16-3x2-grid',
            'bigscreen_three_inset_left' => 'three-inset-left',
            'bigscreen_three_inset_right' => 'three-inset-right',
            'tablet_landscape_two_50' => 'two-50',
            'tablet_landscape_two_33_66' => 'two-33-66',
            'tablet_landscape_two_66_33' => 'two-66-33',
            'tablet_landscape_two_brick' => 'two-brick',
            'tablet_landscape_three_3x33' => 'three-3x33',
            'tablet_landscape_three_25_50_25' => 'three-25-50-25',
            'tablet_landscape_three_25_25_50' => 'three-25-25-50',
            'tablet_landscape_three_50_25_25' => 'three-50-25-25',
            'tablet_landscape_four_4x25' => 'four-4x25',
            'tablet_landscape_five_5x20' => 'five-5x20-2x3-grid',
            'tablet_landscape_six_6x16' => 'six-6x16-3x2-grid',
            'tablet_landscape_three_inset_left' => 'three-inset-left',
            'tablet_landscape_three_inset_right' => 'three-inset-right',
            'tablet_portrait_two_50' => 'two-50',
            'tablet_portrait_two_33_66' => 'two-33-66',
            'tablet_portrait_two_66_33' => 'two-66-33',
            'tablet_portrait_two_brick' => 'two-brick',
            'tablet_portrait_three_3x33' => 'three-3x33-stack-top',
            'tablet_portrait_three_25_50_25' => 'three-25-50-25-stack-top',
            'tablet_portrait_three_25_25_50' => 'three-25-25-50-stack-top',
            'tablet_portrait_three_50_25_25' => 'three-50-25-25-stack-top',
            'tablet_portrait_four_4x25' => 'four-4x25-2x2-grid',
            'tablet_portrait_five_5x20' => 'five-5x20-1x2x2-grid',
            'tablet_portrait_six_6x16' => 'six-6x16-2x3-grid',
            'tablet_portrait_three_inset_left' => 'three-inset-left-wrap',
            'tablet_portrait_three_inset_right' => 'three-inset-right-wrap',
            'smartphone_landscape_two_50' => 'two-50-stack',
            'smartphone_landscape_two_33_66' => 'two-33-66-stack',
            'smartphone_landscape_two_66_33' => 'two-66-33-stack',
            'smartphone_landscape_two_brick' => 'two-brick-stack',
            'smartphone_landscape_three_3x33' => 'three-3x33-stack',
            'smartphone_landscape_three_25_50_25' => 'three-25-50-25-stack',
            'smartphone_landscape_three_25_25_50' => 'three-25-25-50-stack',
            'smartphone_landscape_three_50_25_25' => 'three-50-25-25-stack',
            'smartphone_landscape_four_4x25' => 'four-4x25-stack',
            'smartphone_landscape_five_5x20' => 'five-5x20-stack',
            'smartphone_landscape_six_6x16' => 'six-6x16-stack',
            'smartphone_landscape_three_inset_left' => 'three-inset-left-stack',
            'smartphone_landscape_three_inset_right' => 'three-inset-right-stack',
            'disable_responsive_styles' => '0',
            'enable_custom_media_queries' => '1',
            'global_default_layout' => 'smartphone-portrait',
            'global_default_layout_toggle' => '0',
            'global_files_path' => 'public_files',
            'load_html5js' => '1',
            'load_respondjs' => '0',
            'load_ltie8css' => '0',
            'load_scalefixjs' => '0',
            'expose_regions' => '0',
            'load_all_panels' => '0',
            'load_all_panels_no_sidebars' => '0',
            'show_window_size' => '0',
            'rebuild_theme_data' => '0',
            'enable_extensions' => '0',
            'enable_font_settings' => '0',
            'enable_heading_settings' => '0',
            'enable_image_settings' => '0',
            'enable_apple_touch_icons' => '0',
            'enable_exclude_css' => '0',
            'enable_custom_css' => '0',
            'enable_context_regions' => '0',
            'enable_float_region_blocks' => '0',
            'enable_markup_overides' => '0',
            'base_font_type' => '<none>',
            'site_name_font_type' => '<none>',
            'site_slogan_font_type' => '<none>',
            'page_title_font_type' => '<none>',
            'node_title_font_type' => '<none>',
            'comment_title_font_type' => '<none>',
            'block_title_font_type' => '<none>',
            'main_menu_font_type' => '<none>',
            'secondary_menu_font_type' => '<none>',
            'block_menu_font_type' => '<none>',
            'selectors_font_type' => '<none>',
            'content_headings_h1h4_font_type' => '<none>',
            'content_headings_h5h6_font_type' => '<none>',
            'base_font_size' => '<none>',
            'site_name_font_size' => '<none>',
            'site_slogan_font_size' => '<none>',
            'page_title_font_size' => '<none>',
            'node_title_font_size' => '<none>',
            'comment_title_font_size' => '<none>',
            'block_title_font_size' => '<none>',
            'main_menu_font_size' => '<none>',
            'secondary_menu_font_size' => '<none>',
            'block_menu_font_size' => '<none>',
            'h1_font_size' => '2em',
            'h2_font_size' => '1.6em',
            'h3_font_size' => '1.4em',
            'h4_font_size' => '1.2em',
            'h5_font_size' => '1em',
            'h6_font_size' => '1em',
            'page_title_case' => 'ptc-n',
            'page_title_weight' => 'ptw-b',
            'page_title_alignment' => 'pta-l',
            'page_title_shadow' => 'pts-n',
            'node_title_case' => 'ntc-n',
            'node_title_weight' => 'ntw-b',
            'node_title_alignment' => 'nta-l',
            'node_title_shadow' => 'nts-n',
            'comment_title_case' => 'ctc-n',
            'comment_title_weight' => 'ctw-b',
            'comment_title_alignment' => 'cta-l',
            'comment_title_shadow' => 'cts-n',
            'block_title_case' => 'btc-n',
            'block_title_weight' => 'btw-b',
            'block_title_alignment' => 'bta-l',
            'block_title_shadow' => 'bts-n',
            'image_alignment' => 'ia-n',
            'image_alignment_teaser' => 'iat-n',
            'image_caption_full' => '0',
            'image_caption_teaser' => '0',
            'image_teaser' => '0',
            'breadcrumb_display' => '1',
            'breadcrumb_home' => '0',
            'breadcrumb_label' => '0',
            'breadcrumb_title' => '0',
            'breadcrumb_separator' => ' &#187; ',
            'horizontal_login_block_enable' => 'on',
            'horizontal_login_block' => '0',
            'login_block_remove_links' => '0',
            'login_block_remove_openid' => '0',
            'global_gutter_width' => '',
            'page_full_width_wrappers' => '0',
            'page_content_type_suggestions' => '0',
            'menu_item_span_elements' => '0',
            'extra_page_classes' => '1',
            'extra_article_classes' => '1',
            'extra_comment_classes' => '1',
            'extra_block_classes' => '1',
            'extra_menu_classes' => '1',
            'extra_item_list_classes' => '1',
            'comments_hide_title' => '0',
            'feed_icons' => '0',
            'unset_block_system_main_front' => '0',
            'unset_menu_titles' => '0',
            'skip_link_target' => '#main-content',
            'adv_search_extra_fieldsets' => '0',
            'rel_author' => '0',
            'mobile_friendly_metatags' => '1',
            'adaptivetheme_meta_viewport' => 'width=device-width, initial-scale=1',
            'adaptivetheme_meta_mobileoptimized' => 'width',
            'adaptivetheme_meta_handheldfriendly' => 'true',
            'adaptivetheme_meta_apple_mobile_web_app_capable' => 'yes',
            'chrome_edge' => '0',
            'clear_type' => '0',
            'apple_touch_icon_enable' => '0',
            'apple_touch_icon_path_l' => 'images/touch-icon-l.png',
            'apple_touch_icon_path_m' => 'images/touch-icon-m.png',
            'apple_touch_icon_path_h' => 'images/touch-icon-h.png',
            'custom_css' => '',
          ),
          'version' => '7.x-3.1',
          'project' => 'adaptivetheme',
          'datestamp' => '1346238662',
        ),
        'owner' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => 'adaptivetheme',
        'version' => '7.x-3.1',
      ),
      'bootstrap' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/sites/all/themes/bootstrap/bootstrap.info',
        'basename' => 'bootstrap.info',
        'name' => 'Bootstrap',
        'info' => 
        array (
          'name' => 'Bootstrap',
          'description' => 'Built to use Bootstrap, a sleek, intuitive, and powerful front-end framework for faster and easier web development.',
          'core' => '7.x',
          'regions' => 
          array (
            'navigation' => 'Navigation',
            'header' => 'Top Bar',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'sidebar_first' => 'Primary',
            'sidebar_second' => 'Secondary',
            'footer' => 'Footer',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'settings' => 
          array (
            'bootstrap_breadcrumb' => '1',
            'bootstrap_breadcrumb_home' => '0',
            'bootstrap_breadcrumb_title' => '1',
            'bootstrap_navbar_position' => '',
            'bootstrap_navbar_inverse' => '0',
            'bootstrap_region_well-navigation' => '',
            'bootstrap_region_well-header' => '',
            'bootstrap_region_well-highlighted' => '',
            'bootstrap_region_well-help' => '',
            'bootstrap_region_well-content' => '',
            'bootstrap_region_well-sidebar_first' => 'well',
            'bootstrap_region_well-sidebar_second' => '',
            'bootstrap_region_well-footer' => '',
            'bootstrap_anchors_fix' => '1',
            'bootstrap_anchors_smooth_scrolling' => '1',
            'bootstrap_popover_enabled' => '1',
            'bootstrap_popover_animation' => '1',
            'bootstrap_popover_html' => '0',
            'bootstrap_popover_placement' => 'right',
            'bootstrap_popover_selector' => '',
            'bootstrap_popover_trigger' => 
            array (
              '\'hover\'' => '0',
              '\'focus\'' => '0',
              '\'click\'' => 'click',
            ),
            'bootstrap_popover_title' => '',
            'bootstrap_popover_content' => '',
            'bootstrap_popover_delay' => '0',
            'bootstrap_popover_container' => 'body',
            'bootstrap_tooltip_enabled' => '1',
            'bootstrap_tooltip_descriptions' => '1',
            'bootstrap_tooltip_animation' => '1',
            'bootstrap_tooltip_html' => '0',
            'bootstrap_tooltip_placement' => 'auto left',
            'bootstrap_tooltip_selector' => '',
            'bootstrap_tooltip_trigger' => 
            array (
              '\'hover\'' => 'hover',
              '\'focus\'' => 'focus',
              '\'click\'' => '0',
            ),
            'bootstrap_tooltip_delay' => '0',
            'bootstrap_tooltip_container' => 'body',
            'bootstrap_cdn' => '3.0.2',
            'bootstrap_bootswatch' => '',
            'toggle_name' => '1',
            'toggle_search' => '1',
          ),
          'exclude' => 
          array (
            'css' => 
            array (
              0 => 'misc/vertical-tabs.css',
              1 => 'modules/aggregator/aggregator.css',
              2 => 'modules/book/book.css',
              3 => 'modules/comment/comment.css',
              4 => 'modules/dblog/dblog.css',
              5 => 'modules/file/file.css',
              6 => 'modules/filter/filter.css',
              7 => 'modules/forum/forum.css',
              8 => 'modules/help/help.css',
              9 => 'modules/menu/menu.css',
              10 => 'modules/node/node.css',
              11 => 'modules/openid/openid.css',
              12 => 'modules/poll/poll.css',
              13 => 'modules/search/search.css',
              14 => 'modules/statistics/statistics.css',
              15 => 'modules/syslog/syslog.css',
              16 => 'modules/system/maintenance.css',
              17 => 'modules/system/system.maintenance.css',
              18 => 'modules/system/system.menus.css',
              19 => 'modules/system/system.messages.css',
              20 => 'modules/system/system.theme.css',
              21 => 'modules/taxonomy/taxonomy.css',
              22 => 'modules/tracker/tracker.css',
              23 => 'modules/update/update.css',
              24 => 'modules/user/user.css',
            ),
          ),
          'simplytest_dependencies' => 
          array (
            0 => 'jquery_update',
          ),
          'version' => '7.x-3.0',
          'project' => 'bootstrap',
          'datestamp' => '1384678107',
        ),
        'project' => 'bootstrap',
        'version' => '7.x-3.0',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.24',
        'description' => 'This platform is running Drupal 7.24',
      ),
    ),
    'profiles' => 
    array (
      'standard' => 
      array (
        'name' => 'standard',
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/profiles/standard/standard.profile',
        'project' => '',
        'info' => 
        array (
          'name' => 'Standard',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
          ),
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'default',
        ),
        'version' => '7.24',
      ),
      'testing' => 
      array (
        'name' => 'testing',
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/profiles/testing/testing.profile',
        'project' => '',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Minimal profile for running tests. Includes absolutely required modules only.',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.24',
      ),
      'minimal' => 
      array (
        'name' => 'minimal',
        'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/profiles/minimal/minimal.profile',
        'project' => '',
        'info' => 
        array (
          'name' => 'Minimal',
          'description' => 'Start with only a few modules enabled.',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
          ),
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.24',
      ),
    ),
  ),
  'profiles' => 
  array (
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'testing' => 
    array (
      'modules' => 
      array (
        'drupal_system_listing_incompatible_test' => 
        array (
          'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/profiles/testing/modules/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
          'basename' => 'drupal_system_listing_incompatible_test.module',
          'name' => 'drupal_system_listing_incompatible_test',
          'info' => 
          array (
            'name' => 'Drupal system listing incompatible test',
            'description' => 'Support module for testing the drupal_system_listing function.',
            'package' => 'Testing',
            'version' => '7.24',
            'core' => '6.x',
            'hidden' => true,
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => '',
          'version' => '7.24',
        ),
        'drupal_system_listing_compatible_test' => 
        array (
          'filename' => '/var/aegir/platforms/drupal-7-2013.11.27-dev/profiles/testing/modules/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
          'basename' => 'drupal_system_listing_compatible_test.module',
          'name' => 'drupal_system_listing_compatible_test',
          'info' => 
          array (
            'name' => 'Drupal system listing compatible test',
            'description' => 'Support module for testing the drupal_system_listing function.',
            'package' => 'Testing',
            'version' => '7.24',
            'core' => '7.x',
            'hidden' => true,
            'files' => 
            array (
              0 => 'drupal_system_listing_compatible_test.test',
            ),
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => '',
          'version' => '7.24',
        ),
      ),
      'themes' => 
      array (
      ),
    ),
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);