// JavaScript Document
//Default page properties
//$(document).bind("mobileinit", function(){
$(document).ready(function(){
	  $.mobile.pushStateEnabled = false; //Enhancement to use history.replaceState in supported browsers, to convert the hash-based Ajax URL into the full document path. Note that we recommend disabling this feature if Ajax is disabled or if extensive use of external links are used.
	  $.mobile.defaultPageTransition = 'flow'; //Set the default transition for page changes that use Ajax. (flip, slidedown, slideup, fade) Set to 'none' for no transitions.
	  $.support.touchOverflow = true;//Enable smoother page transitions and true fixed toolbars in devices that support both the overflow: and overflow-scrolling: touch; CSS  (recommended false)
  	  $.mobile.touchOverflowEnabled = true; //Enable smoother page transitions and true fixed toolbars in devices that support both the overflow: and overflow-scrolling: touch; CSS  (recommended false)
	  $.mobile.defaultDialogTransition = 'slidedown'; // Default transition style 
	  $.mobile.loadingMessage = "Loading"; // Loading message true/false
	  $.mobile.loadingMessageTextVisible = true; // True or false for loading message show
	  $.mobile.pageLoadErrorMessage = 'Error'; // Error messages
      $.mobile.listview.prototype.options.filterPlaceholder = "Search"; //Text on filter field
	  $.mobile.ajaxEnabled = true // Enable disable ajax effects (recommended true)
	  $.mobile.loadingMessageTheme = "a"
	  $.mobile.pageLoadErrorMessageTheme = "a"
	  $.mobile.hashListeningEnabled = false; // Disable hash URL for tab menu do not enable recommended
	  $.mobile.linkBindingEnabled = false;// Disable hash URL for tab menu do not enable recommended
}); 

// Page Hide for IOS
jQuery('div').live('pagehide', function(event, ui){
  var page = jQuery(event.target);

  if(page.attr('data-cache') == 'never'){
	page.remove();
  };
});