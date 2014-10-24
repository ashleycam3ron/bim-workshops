// remap jQuery to $
(function($){})(window.jQuery);
/* trigger when page is ready */
$(document).ready(function (){   
	
	$('.navbar .btn-navbar').on('click', function(e) {
      $(this).parent().toggleClass("active");
      e.preventDefault();
    });
    
	
	$(".col").last().addClass('last');
    
    $(".fancybox").fancybox();
    
    $(".board a.fancybox").fancybox({
    	type: 'inline',
    	autoSize : false,
		width    : "60%",
		height   : "auto",
    	minWidth : "500",
    	maxWidth : "650"
    	});
   /*
 $('#menu-main > li').hover(
    function(){
        $subMenu = $(this).children('#menu-main > li > .sub-menu');
        $B = $(this).width();
        $A = $(this).children('#menu-main > li > .sub-menu').width();
        $C = ($A - $B);
        $D = $C/2;
        $(this).children('#menu-main > li > .sub-menu').dequeue().stop().show().css({'marginLeft': -$D + 'px'});    
        //console.log($D + 'px');   
    },
    function(){
        $(this).children('#menu-main > li > .sub-menu').dequeue().stop().hide();
    });
*/

$(function(){
    /* Hide form input values on focus*/ 
    $('input:text').each(function(){
        var txtval = $(this).val();
        $(this).focus(function(){
            if($(this).val() == txtval){
                $(this).val('')
            }
        });
        $(this).blur(function(){
            if($(this).val() == ""){
                $(this).val(txtval);
            }
        });
    });
});

;(function(){
	
	'use strict';

	var expandSearch = {
		init: function(){

			var _this = this,
			_searchContainers = document.querySelectorAll('.expandSearch');

			for( var _index in _searchContainers ){
				if( typeof _searchContainers[ _index ] === 'object' ){
					_this.searchFunctions( _searchContainers[ _index ] );
				}
			}

		},

		searchFunctions: function( _thisSearch ){
				
			var _nodes = _thisSearch.childNodes;

			//a click
			_nodes[3].addEventListener('click',function(e){

				if( _thisSearch.attributes.class.value.indexOf("showSearch") > -1 ){
					_thisSearch.attributes.class.value = 'expandSearch';
				}
				else{
					_thisSearch.attributes.class.value = 'expandSearch showSearch';
				}

				if( !e.preventDefault() ){ e.returnValue = false; }
			});

		}

	};


	//execute
	expandSearch.init();

}());



});

//google analytics
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48079333-1', 'bim-workshops.com');
  ga('send', 'pageview');