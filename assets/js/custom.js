$(document).ready(function () {
  $(".menu-item").on('click', function () {
    $('.menu-link').remove("active");
    $(this).find('.menu-link').addClass("active");

  });
});

$(document).ready(function() {
  // Get the current URL
  var currentUrl = window.location.href;

  // Check if the URL contains 'client-profile.php'
  if (currentUrl.includes('client-profile.php')) {
    // Hide the welcome element and show the back element
    $('#welcome').hide();
    $('#back').show();
  }
});

$(document).ready(function() {
  // Get the current URL
  var currentUrl = window.location.href;

  // Check if the URL contains 'client-profile.php'
  if (currentUrl.includes('coach-profile.php')) {
    // Hide the welcome element and show the back element
    $('#welcome').hide();
    $('#back').show();
  }
});

$(document).ready(function() {
  // Get the current URL
  var currentUrl = window.location.href;

  // Check if the URL contains 'client-profile.php'
  if (currentUrl.includes('coachee-profile.php')) {
    // Hide the welcome element and show the back element
    $('#welcome').hide();
    $('#back').show();
  }
});

$(document).ready(function() {
  // Get the current URL
  var currentUrl = window.location.href;

  // Check if the URL contains 'client-profile.php'
  if (currentUrl.includes('project-profile.php')) {
    // Hide the welcome element and show the back element
    $('#welcome').hide();
    $('#back').show();
  }
});


