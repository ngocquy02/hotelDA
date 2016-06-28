jQuery(document).ready(function($) {
	var d = document,
		w = window,
		wrapper = $('#demo-container'),
		active_catalog = '',
		active_product = null,
		total_pages = 1,
		resizeSid = null,
		device_sizes = {
			smartphonePortrait: [320, 480],
			smartphoneLandscape: [480, 320],
			tabletPortrait: [768, 1024],
			tabletLandscape: [1024, 768],
			auto: ['100%', 'auto']
		},
		
	switchdevice = function(size, device) {
		if($('#devices').hasClass('disabled') && device != 'auto') {
			alert('Error 404 - Responsive Not Found!');
			return false;
		}
		if (typeof(size) == 'undefined') return;
		if(wrapper.hasClass(device)) {
			return;
		}
		wrapper.attr('class', device);
		
		var width = size[0], height = size[1];
		if(device == 'auto') {
			var marginleft = 0;
			var margintop = 0;
			//height = w.innerHeight - $('#demo-page').height();
			wrapper.animate({'width': width, 'margin-top': margintop, 'margin-left': marginleft}, 100);
			wrapper.css('height', '');
		} else {
			var marginleft = (w.innerWidth < width) ? 10 : (w.innerWidth - width)/2;
			var margintop = (w.innerHeight < height) ? 10 : (w.innerHeight - height)/2;
			wrapper.animate({'width': width, 'height': height, 'margin-top': margintop, 'margin-left': marginleft}, 100);
		}
		
		$('#dvsize').html(width+'x'+height);
	},

	// update navigation
	updatenav = function() {
		var products = $('.catalog-' + active_catalog + ' .products-wrap-inner');
		var active_page = products.data('active_page') || 0;

		if (!products.length) {
			return;
		}

		total_pages = Math.floor((products.find(':first').height() - 50) / products.height()) + 1;
		var navitems = $('.active ul.pagination li');
		navitems.filter(':gt(' + total_pages + ')').not('.next').addClass('hide');
		navitems.filter(':lt(' + (total_pages + 1) + ')').removeClass('hide');
		// current page
		navitems.removeClass('current');

		var new_active_page = active_page;
		if (active_page < 1) {
			new_active_page = 1;
		} else if (active_page > total_pages) {
			new_active_page = total_pages;
		}
		gotopage(new_active_page);

		// hide the pagination if total_pages lt 2
		if (total_pages < 2) {
			$('.pagination').addClass ('invisible');
		} else {
			$('.pagination').removeClass ('invisible');
		}

		// navitems.eq (active_page).addClass ('current');
	},

	// events 
	gotopage = function(page) {
		if (page > total_pages || page < 1) {
			return;
		}
		var products = $('.catalog-' + active_catalog + ' .products-wrap-inner');
		if (!products.length) {
			return;
		}

		var active_page = products.data('active_page') || 0;

		var pages = $('.active ul.pagination li');
		products.removeClass('page' + active_page).addClass('page' + page);
		pages.removeClass('current').eq(page).addClass('current');

		if (page == 1) {
			pages.filter('.prev').addClass('inactive');
		} else {
			pages.filter('.prev').removeClass('inactive');
		}

		if (page == total_pages) {
			pages.filter('.next').addClass('inactive');
		} else {
			pages.filter('.next').removeClass('inactive');
		}

		products.data('active_page', page);
	},

	// open product 
	openproduct = function(product) {
		if (product != active_product) {
			var jprod = $(product),
				url = jprod.data('url'),
				name = jprod.data('name'),
				title = jprod.find('.product-info h3:first').html(),
				badge = jprod.data('badge'),
				curr_badge = $(active_product).data('badge');
			if (name.substr(0,3)=='jm_') {
				window.top.location.href = 'http://demo.ubertheme.com/#' + name.substr(3);
				return ;
			}
			
			if (!url) {
				return ; // do nothing
			}
			
			jprod.addClass('current');
			// set current status 
			if (active_product) {
				$(active_product).removeClass('current');
			}

			// update title
			$('#catalog-selector h3:first').html(title);
			// update page title
			document.title = title + ' Demo';
			$(document.body).addClass('demo-loading');
			// load
			//update selector badge class
			if (curr_badge) $('#catalog-selector').removeClass(curr_badge);
			$('#catalog-selector').addClass(badge);

			//should check if the demo frame is exist or not. based on context
			$('#fraDemo').attr('src', url).one('load', function() {
				$(document.body).removeClass('demo-loading');
			});
			setTimeout ("$(document.body).removeClass('demo-loading');", 5000);

			// Add link for remove iframe
			$('.btn-close').attr('href', url);

			active_product = product;
			location.hash = name;
			
			
			//enable device emulators
			var patt=/^wall*/gi;
			if(jprod.hasClass('responsive') || patt.test(name)) {
				$('#devices').attr('class', 'enabled');
			} else {
				$('#devices').attr('class', 'disabled');
				switchdevice(device_sizes.auto, 'auto');
			}
		}
	},

	// toggle selector
	togglecatalog = function(cat) {
		if (cat == active_catalog) {
			// toggle it
			if ($('#catalog-selector').hasClass('open')) {
				hidecatalog(cat);
				activecatalog($(active_product).parents('.catalog-inner').data('catalog'));
			} else {
				showcatalog(cat);
			}
		} else {
			// close old, open new 
			hidecatalog(active_catalog);
			showcatalog(cat);
			active_catalog = cat;
		}
	},

	showcatalog = function(cat) {
		var jcat = $('#catalog'),
			jacat = $('.catalog-' + cat);

		if (cat != active_catalog) {
			jcat.removeClass('open-' + active_catalog);
		}

		jcat.addClass('open').addClass('open-' + cat);
		$('#catalog-selector').addClass('open');
		jacat.addClass('active').removeClass('hidding');

		// Trigger show event for lazy load
		if (!jacat.data('trigger-showimg')) {
			$('img.lazy', jacat).trigger('showimg');
			jacat.data('trigger-showimg', 1)
		}
		// add class to body
		$(document.body).addClass('catalog-open');
		// update pagination
		setTimeout(updatenav, 100);

		// bind arrow key
		$(document).bind('keydown', arrowpress);
	},

	hidecatalog = function(cat) {
		var products = $('.catalog-' + active_catalog + ' .products-wrap-inner'),
			active_page = products.data('active_page') || 0;
		$('ul.pagination li.current').removeClass('current');
		// $('.products-wrap-inner').removeClass('page' + active_page);
		$('#catalog-selector').removeClass('open');
		$('#catalog').removeClass('open').removeClass('open-' + cat);
		$('.catalog-' + cat).removeClass('active').addClass('hidding');
		$(document.body).removeClass('catalog-open');

		// unbind arrow key
		$(document).unbind('keydown', arrowpress);
	},

	activecatalog = function(cat) {
		if (active_catalog == cat) return;
		$('#catalog-types a').removeClass('current');
		$('#catalog-types a.type-' + cat).addClass('current');
		active_catalog = cat;
	},

	parseparams = function (name) {
		var qs = {},
			query = window.location.search ? window.location.search.substring(1) : '',
			params = query.split('&'),
			parts;

		for(var i = 0; i < params.length; i++){
			parts = params[i].split('=');
			qs[ parts[0] ] = parts[1] ? parts[1] : '';
		}

		return qs;
	},

	// get product base on hash
	getproductfromhash = function () {
		var pname = location.hash.replace(/\#/g, '');
		// parse to get product name
		if (pname) {
			var regex = /([\/A-z0-9_\-\.]+)/;
			if (match = regex.exec(pname)) {
				pname = match[0];
			}
			var arr = pname.split (/\//), i = arr.length - 1;
			while (i && arr[i]=='') i--;
			pname = arr[i];
		} else {
			var query = parseparams();

			if(query['template']){
				pname = query['template']; 
				delete query['template'];
			} else if (Object.keys(query).length) {
				pname = Object.keys(query)[0];
				delete query[pname];
			}
			
			if (pname) {
				query = $.param(query);
				window.location.href = window.location.pathname + (query ? ('?' + query) : '') + '#' + pname;				
			}
		}

		var jinitprod = $(pname ? '.product[data-name="'+pname+'"]' : '.product:first');

		if (!jinitprod.length) {
			// find product 
			jinitprod = $(pname ? '.catalog-'+pname+' .product:first':'.product:first');
		}
		if (!jinitprod.length) {
			jinitprod = $('.product:first');
		}

		return jinitprod;
	};

	// init lazy load
	$('img.lazy', this).lazyload({
		event: "showimg",
		failure_limit: 10
	});

	// Add filter event
	$('.filter').click(function() {
		var catalog = $(this).closest('.catalog-inner'),
			prop = this.hash.substr(1);

		prop = (!prop || prop == 'all') ? '*' : ('.' + prop);

		catalog.find('.filter, .filter-more').removeClass('current');
		$(this).addClass('current');

		// add active for parent
		$(this).closest('.filter-more').addClass('current');
		catalog.find($(this).closest('.filter-categories').length ? '.filter-years .filter:first' : '.filter-categories .filter:first').addClass('current');

		// filter with this property
		// hide products to prepare showing
		catalog.find('.products-wrap').addClass('hidding');
		// clear search filter
		$('.search-box').val ('');
		$('.product').removeClass ('shide');
		setTimeout(function() {
			catalog.find('.products-wrap .product').removeClass('hide').not(prop).addClass('hide');
			catalog.find('.products-wrap').removeClass('hidding');
			updatenav();
		}, 600);

		return false;
	});
	
	// add search filter event
	var search_timeout = 0;
	// clear search box
	$('.search-box').val ('');
	$('.search-box').on ('keypress', function() {
		if (search_timeout) clearTimeout (search_timeout);
		search_timeout = setTimeout (search_filter, 500);
	});
	
	search_filter = function () {
		search_timeout = 0;
		var $active_catalog = $('.catalog-' + active_catalog),
		s = $active_catalog.find('.search-box').val();
		$active_catalog.find('.product').each (function() {
			var $this = $(this),
					r = new RegExp(s, "i");
			if (r.exec($this.data('name'))) {
				$this.removeClass ('shide');
			} else {
				$this.addClass ('shide');
			}
		});
		updatenav();
	};

	// bind event for nav 
	$('ul.pagination li').click(function() {
		var jpitem = $(this),
			action = jpitem.text().toLowerCase();

		if (jpitem.hasClass('inactive') || jpitem.hasClass('hide')) {
			return;
		}

		var products = $('.catalog-' + active_catalog + ' .products-wrap-inner'),
			active_page = products.data('active_page') || 0;

		switch (action) {
		case 'prev':
			gotopage(active_page - 1);
			break;
		case 'next':
			gotopage(active_page + 1);
			break;
		default:
			gotopage(parseInt(action));
			break;
		}
	});

	// scroll event
	$('.products-wrap-inner').bind('mousewheel', function(event, delta, deltaX, deltaY) {		
		var $this = $(this),
			products = $this,
			active_page = products.data('active_page') || 0;
		if ($this.data ('timeout')) {
			clearTimeout ($this.data ('timeout'));
		}
		$this.data ('timeout', setTimeout (
			function () {
				gotopage(active_page - delta);
			},
			300
		));
	});
	// bind arrow key
	var arrowpress = function (e) {
		var products = $('.catalog-' + active_catalog + ' .products-wrap-inner'),
			active_page = products.data('active_page') || 0,
			delta = 0;
	    if (e.keyCode == 37 || e.keyCode == 38) {
	    	// left/up = prev
	       	delta = 1;
	    }
	    if (e.keyCode == 39 || e.keyCode == 40) { 
	    	// right/down = next
	       	delta = -1;
	    }
	    gotopage(active_page - delta);
	}

	// Select product
	$('.product').click(function(event) {
		// do nothing if there's no url
		if (!$(this).data('url')) return;

		event.preventDefault();
		openproduct(this);
		// close 
		togglecatalog(active_catalog);
	});
	// click on link inside product
	$('.product a').click(function(event) {
		event.stopPropagation();
	});
	
	//devices
	$('#devices a').click(function(event) {
		if ($(this).hasClass('smartphone-portrait')) {
			switchdevice(device_sizes.smartphonePortrait, 'smartphonePortrait');
		} else if ($(this).hasClass('smartphone-landscape')) {
			switchdevice(device_sizes.smartphoneLandscape, 'smartphoneLandscape');
		} else if ($(this).hasClass('tablet-portrait')) {
			switchdevice(device_sizes.tabletPortrait, 'tabletPortrait');
		} else if ($(this).hasClass('tablet-landscape')) {
			switchdevice(device_sizes.tabletLandscape, 'tabletLandscape');
		} else if ($(this).hasClass('auto')) {
			switchdevice(device_sizes.auto, 'auto');
		}
		return false;
	});

	$(window).resize(function() {
		clearTimeout(resizeSid);
		resizeSid = setTimeout(updatenav, 300);
	});

	$('#catalog-selector').click(function(event) {
		event.preventDefault();
		togglecatalog(active_catalog);
	});

	$('#catalog-types a').click(function(event) {
		event.preventDefault();
		$('#catalog-types a').removeClass('current');
		$(this).addClass('current');
		togglecatalog($(this).data('catalog'));
	});

	// open first product
	var jinitprod = getproductfromhash();

	// detect active catalog base on active product
	activecatalog(jinitprod.parents('.catalog-inner').data('catalog'));

	if (jinitprod.length) {
		$(window).load (function () {
			openproduct(jinitprod[0]);
		});
	}

	// click outsite the open catalog
	$('#demo-overlay, #demo-page .main').click(function(event) {
		event.preventDefault();
		// if not open catalog, exit
		if (!$('body').hasClass ('catalog-open')) return;
		
		togglecatalog(active_catalog);
	});

	$('#demo-page .main > div').click(function(event) {
		event.stopPropagation();
	});

	// special for touch devices

	if( 'ontouchstart' in document.documentElement ) {
		var clickable_product = null;
		// simulate mouse hover
		$('.product').bind ('touchstart', function (event) {
			event.stopPropagation();
			if (clickable_product != this) {
				// first touch
				clickable_product = this;
				event.preventDefault();
			} else {
				// second touch - trigger doclick 
				// $(this).trigger ('doclick');
				clickable_product = null;
			}
		});

		// touch outside
		$(document).bind ('touchstart', function (event) {
			clickable_product = null;
		});
		
	}

	// open wall tour 
	$('#wall-tour').click(function(event){
		event.preventDefault();
		if (!$('#jawall-wrap').length) {
			// add css
			$('<link/>', {rel: 'stylesheet', type: 'text/css', href: 'http://www.joomlart.com/templates/ja_v2/core/themes/wall/css/template.css'}).appendTo ('head');
			// Add wall intro into body
			var jawall_wrap = $('<div/>', {id: 'jawall-wrap'}).appendTo ('body');
			$('<div/>', {id: 'jawall-inner'}).appendTo (jawall_wrap).append (
					$ ('<iframe/>', {id: 'jawall-iframe', src: 'http://www.joomlart.com/wall/'}) );
		}
		// add skip to home button after 10s
		$('body').addClass ('jawall-intro');
		setTimeout (function(){
			$('#jawall-wrap').addClass ('show');
		}, 100);
		// wait 2' to show the intro
		setTimeout (function(){
			$('#jawall-inner').addClass ('show');
			$('#jawall-iframe').focus();
		}, 2000);		
	});

	// tracking hash change
	$(window).bind('hashchange', function() {
  		var jinitprod = getproductfromhash();
		if (jinitprod.length) {
			openproduct(jinitprod[0]);
		}  	
	});
});

// close jawall intro
var jawall_close = function () {	
	$('#jawall-inner').addClass('hide').removeClass ('show');
	// remove intro after 2s
	$('#jawall-wrap').removeClass('show');
	setTimeout (function(){
		$('body').removeClass ('jawall-intro');
		$('#jawall-wrap').remove();
	}, 2000);
};
