/*=========================================================================================
    File Name: on-init.js
    Description: internationalization library set language on init function
    --------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/


$(document).ready(function(){

    /****************************
    *           On Init         *
    ****************************/

    // Initialize
    i18next
        .use(window.i18nextXHRBackend)
        .init({
            debug: true,
            lng: 'en',
            fallbackLng: false,
            backend: {
                loadPath: "../../../app-assets/data/locales/{{lng}}/{{ns}}.json",
            },
            returnObjects: true
        },
        function (err, t) {
            // resources have been loaded
            jqueryI18next.init(i18next, $);
        });


    // Navbar Language Click Event
    $('#lng-onit').on('click', '.lng-nav li a', function(){
        var $this = $(this);
        var selected_lng = $this.data('lng');

        // Change language
        i18next.changeLanguage(selected_lng, function (err, t){
            // resources have been loaded
            $('.main-menu').localize();
        });

        // Set Active Class in navigation
        $this.parent('li').siblings('li').children('a').removeClass('active');
        $this.addClass('active');

        // Change lang in dropdown
        $('#lng-onit').find('.lng-dropdown .dropdown-menu a').removeClass('active');
        var drop_lng = $('#lng-onit').find('.lng-dropdown .dropdown-menu a[data-lng="'+selected_lng+'"]').addClass('active');
        $('#lng-onit #dropdown-active-item').html(drop_lng.html());
    });


    // Dropdown Language Change Event
    $('#lng-onit').on('click', '.lng-dropdown .dropdown-menu a', function(){
        var $this = $(this);
        var selected_lng = $this.data('lng');

        // Change language
        i18next.changeLanguage(selected_lng, function (err, t){
            // resources have been loaded
            $('.main-menu').localize();
        });

        // Set Active Class in navigation
        $('#lng-onit .lng-nav li a').removeClass('active');
        $('#lng-onit .lng-nav li a[data-lng="'+selected_lng+'"]').addClass('active');

        // Change lang in dropdown
        $('#lng-onit').find('.lng-dropdown .dropdown-menu a').removeClass('active');
        $this.addClass('active');
        $('#lng-onit #dropdown-active-item').html($this.html());
    });

});