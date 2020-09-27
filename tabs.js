// write new features as a plugin
$.fn.tabs = function () {
  // for each tab wrapper ... 
  return this.each(function () {
    // capture wrapper context
    var wrapper = this
    // use single click event per wrapper, delegate  only to inactive tabs
    $(wrapper).on('click', '.nav-tab:not(.active)', function (event) {
      // remove all active
      $('.active', wrapper).removeClass('active')
      // get the clicked tab
      var clicked = $(event.target)
      // add the active class
      clicked.addClass('active')
      // find the tab's content and add the active class
      $(clicked.attr('href'), wrapper).addClass('active')
    })
  })
};

// keep on-ready function nice and clean!
(function ($) {
  $('.tab-wrapper').tabs()
})
// make our function accept an argument, userOptions
$.fn.tabs = function (userOptions) {
  // merge default options with userOptions
  var options =
    $.extend(true, $.fn.tabs.defaults, userOptions || {})

  return this.each(function () {
    // capture wrapper context
    var wrapper = this
    // setup event listener (truncated)
    $(wrapper).on('click', '.nav-tab:not(.active)', ...)
    // click the initial tab  
    $(options.initialTab, wrapper).click()
  });
};

// default options
$.fn.tabs.defaults =
  { initialTab: '.nav-tab:eq(0)' };
(jQuery)