/*=========================================================================================
    File Name: bootstrap-taginput.js
    Description: Bootstrap tags input initialization js
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(document).ready(function(){
	// Initialize basicTagInput
	$('.basic-taginput').tagsinput();

	// keycodes which will add a tag
	$('.confirm-keys').tagsinput({
		confirmKeys: [13, 44]
	});

	// Maximum number of tags allowed
	$('.max-tags').tagsinput({
		maxTags: 3
	});

	// Maximum characters for a tag
	$('.max-chars').tagsinput({
		maxChars: 8
	});

	// Allow duplicate tags
	$('.allow-duplicates').tagsinput({
		allowDuplicates: true
	});

	// Typeahead

	// Define element
    ele = $('.typeahead-tags');

	// Matcher
    var substringMatcher = function(strs) {
        return function findMatches(q, cb) {
            var matches, substringRegex;

            // an array that will be populated with substring matches
            matches = [];

            // regex used to determine if a string contains the substring `q`
            substrRegex = new RegExp(q, 'i');

            // iterate through the pool of strings and for any string that
            // contains the substring `q`, add it to the `matches` array
            $.each(strs, function(i, str) {
                if (substrRegex.test(str)) {

                    // the typeahead jQuery plugin expects suggestions to a
                    // JavaScript object, refer to typeahead docs for more info
                    matches.push({ value: str });
                }
            });
            cb(matches);
        };
    };

    // Data
    var cities = ["Amsterdam", "London", "Paris", "Washington", "New York", "Los Angeles", "Sydney", "Melbourne", "Canberra", "Beijing", "New Delhi", "Kathmandu", "Cairo", "Cape Town", "Kinshasa"];

    // Attach typeahead
    ele.tagsinput('input').typeahead(
        {
            hint: true,
            highlight: true,
            minLength: 1
        },
        {
            name: 'cities',
            displayKey: 'value',
            source: substringMatcher(cities)
        }
    ).bind('typeahead:selected', $.proxy(function (obj, datum) {
        this.tagsinput('add', datum.value);
        this.tagsinput('input').typeahead('val', '');
    }, ele));


    // Objects as tags
    var cities1 = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        prefetch: '../../../app-assets/data/cities.json'
    });
    cities1.initialize();

    var elt = $('.object-tags');

    elt.tagsinput({
        itemValue: 'value',
        itemText: 'text'
    });

    elt.tagsinput('add', { "value": 1 , "text": "Amsterdam"   , "continent": "Europe"    });
    elt.tagsinput('add', { "value": 7 , "text": "Sydney"      , "continent": "Australia" });
    elt.tagsinput('add', { "value": 10, "text": "Beijing"     , "continent": "Asia"      });
    elt.tagsinput('add', { "value": 13, "text": "Cairo"       , "continent": "Africa"    });

    elt.tagsinput('input').typeahead(null, {
        name: 'cities1',
        valueKey: 'value',
        displayKey: 'text',
        source: cities1.ttAdapter(),
    }).bind('typeahead:selected', $.proxy(function (obj, datum) {
        this.tagsinput('add', datum);
        this.tagsinput('input').typeahead('val', '');
    }, elt));


    // Categorizing tags
    var cities2 = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        prefetch: '../../../app-assets/data/cities.json'
    });
    cities2.initialize();

    var elt = $('.category-tags');
    elt.tagsinput({
            tagClass: function(item) {
            switch (item.continent) {
                case 'Europe'   : return 'badge badge-primary';
                case 'America'  : return 'badge badge-danger badge-important';
                case 'Australia': return 'badge badge-success';
                case 'Africa'   : return 'badge badge-default';
                case 'Asia'     : return 'badge badge-warning';
            }
        },
        itemValue: 'value',
        itemText: 'text',
    });
    elt.tagsinput('add', { "value": 1 , "text": "Amsterdam"   , "continent": "Europe"    });
    elt.tagsinput('add', { "value": 4 , "text": "Washington"  , "continent": "America"   });
    elt.tagsinput('add', { "value": 7 , "text": "Sydney"      , "continent": "Australia" });
    elt.tagsinput('add', { "value": 10, "text": "Beijing"     , "continent": "Asia"      });
    elt.tagsinput('add', { "value": 13, "text": "Cairo"       , "continent": "Africa"    });

    elt.tagsinput('input').typeahead(null, {
        name: 'cities2',
        valueKey: 'value',
        displayKey: 'text',
        source: cities2.ttAdapter(),
    }).bind('typeahead:selected', $.proxy(function (obj, datum) {
        this.tagsinput('add', datum);
        this.tagsinput('input').typeahead('val', '');
    }, elt));

    // Add Tag
    $('.add-badge-btn').on('click',function(){
        $('.add-tag').tagsinput('add', 'Sydney');
    });

    // Remove Tag
    $('.remove-badge-btn').on('click',function(){
        $('.remove-tag').tagsinput('remove', 'Sydney');
    });

    // Remove All Tags
    $('.remove-all-btn').on('click',function(){
        $('.remove-all').tagsinput('removeAll');
    });

    // Set focus in the tagsinput
    $('.focus-badge-btn').on('click',function(){
        $('.focus-taginput').tagsinput('focus');
    });

    // Destroy tagsinput
    $('.destroy-taginput-btn').on('click',function(){
        $('.destroy-tagsinput').tagsinput('destroy');
    });
});