// custom jQuery hacks by Brenton

// get rid of 'Search...' text in front of search
jQuery('div.search label').remove();

// start carousel
jQuery('#carousel-553052').carousel();

// fix dropdown menus
jQuery('ul.nav > li.parent').addClass('dropdown');
jQuery('ul.nav > li.parent > a').addClass('dropdown-toggle').attr('data-toggle','dropdown').append('<b class="caret"></b>');
jQuery('ul.nav-child').addClass('dropdown-menu');

// fix BreezingForms buttons
jQuery('button.bfNextButton, button.bfPrevButton').addClass('btn');
