<?php
/**
 * @file
 * commerce_canadian_taxes.rules_defaults.inc
 */

/**
 * Implements hook_default_rules_configuration().
 */
function commerce_canadian_taxes_default_rules_configuration() {
  $items = array();
  $items['commerce_tax_rate_gst'] = entity_import('rules_config', '{ "commerce_tax_rate_gst" : {
      "LABEL" : "Calculate GST",
      "PLUGIN" : "rule",
      "REQUIRES" : [ "commerce_order", "commerce_tax" ],
      "USES VARIABLES" : { "commerce_line_item" : { "label" : "Line item", "type" : "commerce_line_item" } },
      "IF" : [
        { "commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "country",
            "value" : "CA"
          }
        },
        { "NOT commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "administrative_area",
            "value" : "BC"
          }
        },
        { "NOT commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "administrative_area",
            "value" : "NB"
          }
        },
        { "NOT commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "administrative_area",
            "value" : "NL"
          }
        },
        { "NOT commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "administrative_area",
            "value" : "NS"
          }
        },
        { "NOT commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "administrative_area",
            "value" : "ON"
          }
        }
      ],
      "DO" : [
        { "commerce_tax_rate_apply" : {
            "USING" : {
              "commerce_line_item" : [ "commerce-line-item" ],
              "tax_rate_name" : "gst"
            },
            "PROVIDE" : { "applied_tax" : { "applied_tax" : "Applied tax" } }
          }
        }
      ]
    }
  }');
  $items['commerce_tax_rate_hst_bc_'] = entity_import('rules_config', '{ "commerce_tax_rate_hst_bc_" : {
      "LABEL" : "Calculate HST (BC)",
      "PLUGIN" : "rule",
      "REQUIRES" : [ "commerce_order", "commerce_tax" ],
      "USES VARIABLES" : { "commerce_line_item" : { "label" : "Line item", "type" : "commerce_line_item" } },
      "IF" : [
        { "commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "country",
            "value" : "CA"
          }
        },
        { "commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "administrative_area",
            "value" : "BC"
          }
        }
      ],
      "DO" : [
        { "commerce_tax_rate_apply" : {
            "USING" : {
              "commerce_line_item" : [ "commerce-line-item" ],
              "tax_rate_name" : "hst_bc_"
            },
            "PROVIDE" : { "applied_tax" : { "applied_tax" : "Applied tax" } }
          }
        }
      ]
    }
  }');
  $items['commerce_tax_rate_hst_nb'] = entity_import('rules_config', '{ "commerce_tax_rate_hst_nb" : {
      "LABEL" : "Calculate HST NB",
      "PLUGIN" : "rule",
      "REQUIRES" : [ "commerce_order", "commerce_tax" ],
      "USES VARIABLES" : { "commerce_line_item" : { "label" : "Line item", "type" : "commerce_line_item" } },
      "IF" : [
        { "commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "country",
            "value" : "CA"
          }
        },
        { "commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "administrative_area",
            "value" : "NB"
          }
        }
      ],
      "DO" : [
        { "commerce_tax_rate_apply" : {
            "USING" : {
              "commerce_line_item" : [ "commerce-line-item" ],
              "tax_rate_name" : "hst_nb"
            },
            "PROVIDE" : { "applied_tax" : { "applied_tax" : "Applied tax" } }
          }
        }
      ]
    }
  }');
  $items['commerce_tax_rate_hst_nl'] = entity_import('rules_config', '{ "commerce_tax_rate_hst_nl" : {
      "LABEL" : "Calculate HST NL",
      "PLUGIN" : "rule",
      "REQUIRES" : [ "commerce_order", "commerce_tax" ],
      "USES VARIABLES" : { "commerce_line_item" : { "label" : "Line item", "type" : "commerce_line_item" } },
      "IF" : [
        { "commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "country",
            "value" : "CA"
          }
        },
        { "commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "administrative_area",
            "value" : "NL"
          }
        }
      ],
      "DO" : [
        { "commerce_tax_rate_apply" : {
            "USING" : {
              "commerce_line_item" : [ "commerce-line-item" ],
              "tax_rate_name" : "hst_nl"
            },
            "PROVIDE" : { "applied_tax" : { "applied_tax" : "Applied tax" } }
          }
        }
      ]
    }
  }');
  $items['commerce_tax_rate_hst_ns'] = entity_import('rules_config', '{ "commerce_tax_rate_hst_ns" : {
      "LABEL" : "Calculate HST NS",
      "PLUGIN" : "rule",
      "REQUIRES" : [ "commerce_order", "commerce_tax" ],
      "USES VARIABLES" : { "commerce_line_item" : { "label" : "Line item", "type" : "commerce_line_item" } },
      "IF" : [
        { "commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "country",
            "value" : "CA"
          }
        },
        { "commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "administrative_area",
            "value" : "NS"
          }
        }
      ],
      "DO" : [
        { "commerce_tax_rate_apply" : {
            "USING" : {
              "commerce_line_item" : [ "commerce-line-item" ],
              "tax_rate_name" : "hst_ns"
            },
            "PROVIDE" : { "applied_tax" : { "applied_tax" : "Applied tax" } }
          }
        }
      ]
    }
  }');
  $items['commerce_tax_rate_hst_on'] = entity_import('rules_config', '{ "commerce_tax_rate_hst_on" : {
      "LABEL" : "Calculate HST ON",
      "PLUGIN" : "rule",
      "REQUIRES" : [ "commerce_order", "commerce_tax" ],
      "USES VARIABLES" : { "commerce_line_item" : { "label" : "Line item", "type" : "commerce_line_item" } },
      "IF" : [
        { "commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "country",
            "value" : "CA"
          }
        },
        { "commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "administrative_area",
            "value" : "ON"
          }
        }
      ],
      "DO" : [
        { "commerce_tax_rate_apply" : {
            "USING" : {
              "commerce_line_item" : [ "commerce-line-item" ],
              "tax_rate_name" : "hst_on"
            },
            "PROVIDE" : { "applied_tax" : { "applied_tax" : "Applied tax" } }
          }
        }
      ]
    }
  }');
  $items['commerce_tax_rate_pst_mb'] = entity_import('rules_config', '{ "commerce_tax_rate_pst_mb" : {
      "LABEL" : "Calculate PST MB",
      "PLUGIN" : "rule",
      "TAGS" : [ "commerce_canadian_taxes" ],
      "REQUIRES" : [ "commerce_order", "rules", "commerce_tax" ],
      "USES VARIABLES" : { "commerce_line_item" : { "label" : "Line item", "type" : "commerce_line_item" } },
      "IF" : [
        { "commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "country",
            "value" : "CA"
          }
        },
        { "commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "administrative_area",
            "value" : "MB"
          }
        },
        { "component_rules_apply_provincial_sales_tax_" : { "line_item" : [ "commerce-line-item" ] } }
      ],
      "DO" : [
        { "commerce_tax_rate_apply" : {
            "USING" : {
              "commerce_line_item" : [ "commerce-line-item" ],
              "tax_rate_name" : "pst_mb"
            },
            "PROVIDE" : { "applied_tax" : { "applied_tax" : "Applied tax" } }
          }
        }
      ]
    }
  }');
  $items['commerce_tax_rate_pst_pe'] = entity_import('rules_config', '{ "commerce_tax_rate_pst_pe" : {
      "LABEL" : "Calculate PST PE",
      "PLUGIN" : "rule",
      "TAGS" : [ "commerce_canadian_taxes" ],
      "REQUIRES" : [ "rules", "commerce_order", "commerce_tax" ],
      "USES VARIABLES" : { "commerce_line_item" : { "label" : "Line item", "type" : "commerce_line_item" } },
      "IF" : [
        { "component_rules_apply_provincial_sales_tax_" : { "line_item" : [ "commerce-line-item" ] } },
        { "commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "country",
            "value" : "CA"
          }
        },
        { "commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "administrative_area",
            "value" : "PE"
          }
        }
      ],
      "DO" : [
        { "commerce_tax_rate_apply" : {
            "USING" : {
              "commerce_line_item" : [ "commerce-line-item" ],
              "tax_rate_name" : "pst_pe"
            },
            "PROVIDE" : { "applied_tax" : { "applied_tax" : "Applied tax" } }
          }
        }
      ]
    }
  }');
  $items['commerce_tax_rate_pst_sk'] = entity_import('rules_config', '{ "commerce_tax_rate_pst_sk" : {
      "LABEL" : "Calculate PST SK",
      "PLUGIN" : "rule",
      "TAGS" : [ "commerce_canadian_taxes" ],
      "REQUIRES" : [ "rules", "commerce_order", "commerce_tax" ],
      "USES VARIABLES" : { "commerce_line_item" : { "label" : "Line item", "type" : "commerce_line_item" } },
      "IF" : [
        { "component_rules_apply_provincial_sales_tax_" : { "line_item" : [ "commerce-line-item" ] } },
        { "commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "country",
            "value" : "CA"
          }
        },
        { "commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "administrative_area",
            "value" : "SK"
          }
        }
      ],
      "DO" : [
        { "commerce_tax_rate_apply" : {
            "USING" : {
              "commerce_line_item" : [ "commerce-line-item" ],
              "tax_rate_name" : "pst_sk"
            },
            "PROVIDE" : { "applied_tax" : { "applied_tax" : "Applied tax" } }
          }
        }
      ]
    }
  }');
  $items['commerce_tax_rate_qst'] = entity_import('rules_config', '{ "commerce_tax_rate_qst" : {
      "LABEL" : "Calculate QST",
      "PLUGIN" : "rule",
      "TAGS" : [ "commerce_canadian_taxes" ],
      "REQUIRES" : [ "commerce_order", "commerce_tax" ],
      "USES VARIABLES" : { "commerce_line_item" : { "label" : "Line item", "type" : "commerce_line_item" } },
      "IF" : [
        { "commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "country",
            "value" : "CA"
          }
        },
        { "commerce_order_compare_address" : {
            "commerce_order" : [ "commerce-line-item:order" ],
            "address_field" : "commerce_customer_billing|commerce_customer_address",
            "address_component" : "administrative_area",
            "value" : "QC"
          }
        }
      ],
      "DO" : [
        { "commerce_tax_rate_apply" : {
            "USING" : {
              "commerce_line_item" : [ "commerce-line-item" ],
              "tax_rate_name" : "qst"
            },
            "PROVIDE" : { "applied_tax" : { "applied_tax" : "Applied tax" } }
          }
        }
      ]
    }
  }');
  $items['rules_apply_provincial_sales_tax_'] = entity_import('rules_config', '{ "rules_apply_provincial_sales_tax_" : {
      "LABEL" : "Apply Provincial Sales Tax?",
      "PLUGIN" : "and",
      "TAGS" : [ "commerce_canadian_taxes" ],
      "REQUIRES" : [ "rules" ],
      "USES VARIABLES" : { "line_item" : { "label" : "Line Item", "type" : "commerce_line_item" } },
      "AND" : [
        { "entity_has_field" : { "entity" : [ "line-item" ], "field" : "commerce_product" } },
        { "entity_has_field" : {
            "entity" : [ "line-item:commerce-product" ],
            "field" : "field_apply_provincial_tax"
          }
        },
        { "data_is" : {
            "data" : [ "line-item:commerce-product:field-apply-provincial-tax" ],
            "value" : 1
          }
        }
      ]
    }
  }');
  return $items;
}
