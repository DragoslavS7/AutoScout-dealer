<?php

// META DATA
// these settings will set the meta date for the entire project
// to set the data on a page-specific level, re-declare the variables in the corresponding PHP file AFTER the options.php include
$pagetitle = '';
$description = '';
$keywords = '';   //comma-separated list of SEO keywords

// ANALYTICS
$googleAnalytics = true; //boolean
$googleAnalyticsProject = 'UA-50475910-45';   //default is UA-50475910-45
$showcarTracking = false; //boolean

// LOGO
// default is AutoScout logo
$truckscoutLogo = false;
$removeHeaderNav = false;   //remove all links and language switcher from header nav

// SHOWCAR
// showcar-ui, showcar-icons, showcar-tracking are included by default
$showcarCarousel = true; //boolean
$showcarStorage = false; //boolean
$showcarPictures = true; //boolean

// JAVASCRIPT LIBRARIES
// jQuery, jQuery UI and Zepto are included by default
$jQueryVersion = '';  //default is 1.7.1, alternatives are 2.2.0 or 3.2.1
$jQueryUiVersion = '';  //default is 1.7.1, alternatives are 1.11.4 or 1.12.1
$jQuerySteps = false; //boolean
$jQueryValidate = false;  //boolean
$jQueryDatePick = false;  //boolen
$jQueryPopupOverlay = false;  //boolean
$jQueryAutoNumeric = false; //boolean
$jQueryCsv = false; //boolean
$jQueryTypeahead = true; //boolean
$jQueryCountrySelect = false; //boolean
$jQueryValidate = false; //boolean
$jQueryHashChange = false; //boolean
$jQueryEasyTabs = false; //boolean
$jQueryFileDownload = false; //boolean
$fontAwesome = true; //boolean
$underscoreJs = false;  //boolean

// PLUGINS
// use this for other plugins that are not listed in the options above
// place the relevant files (mostly JS) in the scripts folder of THIS project
$plugins = '<script type="text/javascript">
    //overwrite jQuery filter function to return an object of type Array instead of type jQuery
    (function ($) {
      var originalFilter =  $.fn.filter;
      $.fn.filter = function () {
        return Array.from(originalFilter.apply(this, arguments));
      };
    })(jQuery);

    (function ($) {
      var originalFind =  $.fn.find;
      $.fn.find = function () {
        return $(originalFind.apply(this, arguments));
      };
    })(jQuery);

    var jQueryFirst =  $.fn.first;
    Array.prototype.first = function () {
      return jQueryFirst.apply($(this), arguments);
    };
  </script>';

// HEADER ADDITIONS
// any code you need to add to the header that is not covered by the plugins section

// NOTIFICATIONS
$notifications = '';

// FOOTER ADDITIONS
// elements (e.g. scripts) that will be added at the end of the footer
$footerAdditions = '';

?>
