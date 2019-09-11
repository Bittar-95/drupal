(function ($, Drupal) {
  Drupal.behaviors.GOVUKBehavior = {
    attach: function (context) {
      // Add panel class
      if ($("#block-govuk-local-tasks", context).length) {
        $("#block-govuk-content", context).addClass("govuk-tabs__panel");
      }
    }
  };
})(jQuery, Drupal);

function toggleMobileMenu() {
  if (!jQuery("#mobile-menu").html()) {
    var html = "<div id='mobile-menu-content'>" + jQuery("#block-mainnavigation").html() + "</div>";
    jQuery("#mobile-menu").html(html);
  }
  if (!jQuery("#mobile-menu-content").is(":visible")) {
    jQuery("#mobile-menu-content").slideDown();
  }
  else {
    jQuery("#mobile-menu-content").slideUp();
  }
}