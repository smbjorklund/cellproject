The Migrate OAI-PMH module provides a migrate source class you can use when importing
data from a OAI-PMH provider.

Usage
-----
You can use the source class 'MigrateSourceOaiPmh' just the same as MigrateSourceXML.
There is a lot of documentation about this at http://drupal.org/migrate. To get started,
enable the migrate_example module and browse to admin/content/migrate to see its dashboard.
Mimic the beer.inc or wine.inc example file in order to specify your own migrations. 

When using the 'MigrateSourceOaiPmh' source class, make sure to extend your migration from
the 'XMLMigration' class. The 'MigrateSourceOaiPmh' class returns rows as SimpleXMLElement
objects and the 'XMLMigration' class handles the xpath field mappings.

Dependencies
------------
The module is based on the PHPOAIPMH library found at https://github.com/caseyamcl/phpoaipmh.
We use the composer_manager module to fetch the dependencies and autoload required classes.
Currently (18-12-2014) you need the dev version of the migrate module. This is needed to be able
to do xPath queries in namespaced XML Elements.

Author
-------
Sean Blommaert - https://www.drupal.org/u/seanb
