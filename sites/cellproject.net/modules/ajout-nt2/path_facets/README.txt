README file for the Path Facets module for Drupal.


-- DESCRIPTION --

Provides hierarchical Solr facets for path-like values.

No mapping to Drupal objects is required for displaying the facets, whose
display rely only on the values stored in the Solr index. This is great for
providing hierarchical facets on data not managed by Drupal, or for providing
taxonomy facets in federated search environments, where the source vocabularies
are not necessarily shared or synchronized between all the participating sites.

Features:

* Provides hierarchical facets for taxonomy term reference fields.
* Supports translation of taxonomy terms (through the Internationalization
  (i18n) module). Translation is performed when indexing the terms.
* Provides helper functions for building custom hierarchical facets.
* Allows hierarchical facets in multisite search environments.
* Integrates with Apache Solr Search Integration and Facet API.
* Uses existing dynamic field patterns (no Solr schema change required).

Known drawbacks/issues:

* Taxonomy term renames, moves in the term hierarchy, or translation changes
  are only reflected in the facets after the content that refer to those terms
  have been reindexed.

With a single-site search configuration, you're probably better off with the
taxonomy facets provided by Facet API, and you'll only want this module if you
need some form of custom hierarchical facets and find this module's helper
functions useful (see "Implementing Custom Hierarchical Facets" below).


-- REQUIREMENTS --

* Drupal 7.x.
* Apache Solr Search Integration
* Facet API


-- INSTALLATION AND CONFIGURATION --

* Install the module as usual. See http://drupal.org/node/70151 for more
  information.

* Go to Administration > Configuration > Apache Solr search, then to the
  Settings tab, and finally to the "Facets" configuration page of your search
  environment.

* Enable any of the facets whose description reads like "Hierarchical path
  filtering by field of type taxonomy_term_reference". If no such facet is
  listed, perhaps your site has no Taxonomy Term Reference field.

  If a Taxonomy Term Reference field uses a translatable vocabulary, you'll
  have to enable a language-specific variant of the facet for each desired
  language.

* Go to Administration > Structure > Blocks, and assign each of the newly
  created Facet API blocks (one for each of the facets you have just enabled)
  to the desired region(s).

  If you have language-specific facets, you'll probably want to adjust their
  block visibility settings so that their block only shows up when the current
  language is the same as the facet's.

* Go to Administration > Configuration > Apache Solr search. Using the action
  buttons, queue all content for reindexing, and then index all queued content.

* Go to your search page, and enjoy the new facets!


-- HOW IT WORKS --

The basic idea is to index "hierarchy tokens" for each value being indexed.

For example, say we need to index the term "New York", which has "United
States" as its parent term, which in turn has "North America" as its parent.
We'll actually index the following tokens:

* /North America
* /North America/United States
* /North America/United States/New York

Those string values, which are the actual labels of the terms, are stored
directly in the search index. Because we store labels, no mapping to Drupal
data is needed when displaying the facet.

Facet API's mapping callback is still used, but only to make the facet readable
by displaying just the last component of each path, instead of the full path
token.


-- WHAT'S IN A NAME --

After much hesitation on how to name this module, we settled on "Path Facets"
because it highlighted the way the module works. However, the basic aim of the
module is to provide hierarchical facets without requiring any mappings to
Drupal objects. Using paths is just one of the ways to implement hierarchical
facets.


-- IMPLEMENTING CUSTOM HIERARCHICAL FACETS --

1. INDEXING

   If the data comes from your Drupal site, implement
   hook_apachesolr_index_document_build() to have it indexed. What you'll need
   to do is represent any value to be indexed as an array, where each item is a
   component of the path describing the value. For example:
   
     array('North America', 'United States', 'California', 'San Francisco')

   Then pass that array to the path_facets_make_hierarchy_tokens() function,
   which will return an array of strings to index. For example, With the above
   input the array's values would be:
   
     '/North America',
     '/North America/United States',
     '/North America/United States/California',
     '/North America/United States/California/San Francisco'.

   See path_facets_apachesolr_index_document_build() for an example
   implementation.
     
   If, on the other hand, the data comes from sources external from your Drupal
   site (as in a federated search index), then you'll have to index it using
   the appropriate means. As long as you index the data in the format described
   above, your Drupal site will be able to provide facets for that data (see
   step 2 below). Note that any literal slash must be escaped as '//',
   otherwise it will get interpreted as a path component delimiter when
   faceting.

2. FACETING

   Implement hook_facetapi_facet_info(). Use the following items in each facet's
   associative array:

     'map callback' => 'path_facets_map_values',
     'hierarchy callback' => 'path_facets_get_parents',

   Data from any source can be faceted with those callbacks, as long as each
   value has been tokenized and indexed in the expected format (see details
   given in step 1 above).
     

-- CREDITS --

Current maintainer:
* David Lesieur (http://drupal.org/user/17157)

This project has been sponsored by:
* Laboratoire NT2 (http://nt2.uqam.ca)
* Whisky Echo Bravo (http://whiskyechobravo.com)

