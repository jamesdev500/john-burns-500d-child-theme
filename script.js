jQuery(document).ready(function($) { 
	console.log('init');    

	document.addEventListener("touchstart", function(){}, true);


	$('#mobile-menu').click(function() {
		setTimeout(function() {
			$('.jet-mega-menu-item__dropdown i').click(function() {
				setTimeout(function() {
					$('.back-button').click(function() {
						$(this).parents('.jet-mega-menu-item').removeClass('jet-mega-menu-item--hover');
					});
				}, 500);
			});
		}, 500);
	});

	var mywindow = $(window);
	var mypos = mywindow.scrollTop();
	mywindow.scroll(function() {
		if (mypos > 40) {
			if (mywindow.scrollTop() > mypos) {
				$('#stickyheader').addClass('headerup');
			} else {
				$('#stickyheader').removeClass('headerup');
			}
		}
		mypos = mywindow.scrollTop();
	});

	$('#dates .jet-radio-list__button').click(function(){
		var t = $(this).text().trim();
		$('#archive-title h3').text(t);
	});



	$(window).scroll(function(){
		$('#stickyheader').toggleClass('scrolled', $(this).scrollTop() > 40);
	});
	
	/****Table-research *****/
	
	$(".show-table").click(function(e) {
        $(".package-table").removeClass("hide");
        e.preventDefault();
    });
	
    $(".hide-table").click(function(event) {
        $(".package-table").addClass("hide");
        $(".elementor-element-9fb17c0").removeClass("elementor-sticky--active");
        event.preventDefault();
    });

    $(".table-head").removeClass("elementor-sticky--active");
    $(".hide .table-head").removeClass("elementor-sticky--active");
	
	/****End Table-research *****/
	
	
	/****Research Page Recommendation *****/
	
	$(".get-value .elementor-button-link").click(function(e) {
		e.preventDefault();
		$(".expertise-text").empty();
		$(".office-text").empty();
		$(".selectOfficeTxt").empty();


		$(".recommendation-section").removeClass("hide");
		$(".research-package-section").addClass("hide");

		var expertiseTxt = $(".expertise-btn-wrap input[type='radio']:checked").val();
		var officeTxt = $(".office-btn-wrap input[type='radio']:checked").val();
		
		var selectOfficeTxt = $("#selectRegional").find(':selected').val();
        
		if ($(".expertise-btn-wrap input[type='radio']").is(":checked")) {
			$(".expertise-text").append(expertiseTxt);
		}
		if ($(".office-btn-wrap input[type='radio']").is(":checked")) {
			$(".office-text").append(officeTxt);
		}
			$(".selectOfficeTxt").append(selectOfficeTxt);
	
		
		if ((expertiseTxt == "Regional") && ((officeTxt == "Residential")|| (selectOfficeTxt == "Residential"))) {
			$(".office-widget-wrap").addClass("hide");
			$(".metro-widget").removeClass("hide");
		}
		else if ((expertiseTxt == "National") && ((officeTxt  == "Residential")|| (selectOfficeTxt == "Residential"))) {
			$(".office-widget-wrap").addClass("hide");
			$(".geographic-widget").removeClass("hide");
			$(".metro-widget").removeClass("hide");
		}
		else if (((expertiseTxt == "Regional") || (expertiseTxt == "National")) && ((officeTxt == "Building Products")|| (selectOfficeTxt == "Building Products"))) {
			$(".office-widget-wrap").addClass("hide");
			$(".building-widget").removeClass("hide");
		}
		else if (((expertiseTxt == "Regional") || (expertiseTxt == "National")) && ((officeTxt == "Single-Family Rental and Build-For-Rents")|| (selectOfficeTxt == "Single-Family Rental and Build-For-Rents"))) {
			$(".office-widget-wrap").addClass("hide");
			$(".single-family-widget").removeClass("hide");
		}
		else if (((expertiseTxt == "Regional") || (expertiseTxt == "National")) && ((officeTxt = "Apartments")|| (selectOfficeTxt == "BApartments"))) {
			$(".office-widget-wrap").addClass("hide");
			$(".apartment-widget").removeClass("hide");
			$(".single-family-widget").removeClass("hide");
		}
		else if (((expertiseTxt == "Regional") || (expertiseTxt == "National")) && ((officeTxt = "Consumer and Design Trends")|| (selectOfficeTxt == "Consumer and Design Trends"))) {
			$(".office-widget-wrap").addClass("hide");
			$(".single-family-widget").removeClass("hide");
        }

	});
	$(".btn-reset").click(function(e) {
		e.preventDefault();
		$("input[type='radio']").prop('checked', false);
		$(".recommendation-section").addClass("hide");
		$(".research-package-section").removeClass("hide");
		$(".office-widget-wrap").addClass("hide");
	});
	
	/****Search Page*****/
    

            $('.cpt-search-result .jet-listing-grid__items .jet-listing-grid__item').each(function () {
            var parentName =$(this).find('.elementor-shortcode a.cat-page').text();
					
                if (parentName == 'Expertise') {
					$(this).addClass('expertise-page');
				}
					
                if (parentName == 'Research') {
					$(this).addClass('research-page');
				}
					
                if (parentName == 'Consulting') {
					$(this).addClass('consulting-page');
				}
					
                if (parentName == 'Company') {
					$(this).addClass('company-page');
				}
					
                if (parentName == 'Resources') {
					$(this).addClass('resources-page');
				}
				
			});
			
        
        $("#PageSearchSel").change(function() {

            var selectpage = $("#PageSearch").find(':selected').val();
    
    
            if (selectpage == "Select Page") {
                $("article.elementor-post").removeClass("hide");
            }
            
            if (selectpage == "Expertise") {
                $("article.elementor-post").addClass("hide");
                $("article.elementor-post.expertise-page").removeClass("hide");
            }
    
            if (selectpage == "Research") {
                $("article.elementor-post").addClass("hide");
                $("article.elementor-post.research-page").removeClass("hide");
            }
    
            if (selectpage == "Consulting") {
                $("article.elementor-post").addClass("hide");
                $("article.elementor-post.consulting-page").removeClass("hide");
            }
            
            if (selectpage == "Company") {
                $("article.elementor-post").addClass("hide");
                $("article.elementor-post.company-page").removeClass("hide");
            }
            
            if (selectpage == "Resources") {
                $("article.elementor-post").addClass("hide");
                $("article.elementor-post.resources-page").removeClass("hide");
            }
            
        });


} );
