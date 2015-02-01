/*!
 *  vimeoEmbedder
 *  @version 1.0
 *  @date August 10, 2013
 *  @author Jason Safir http://jasonsafir.com
 *  Project: https://github.com/jasonsafir/vimeoEmbedder
 *
 *  Extend the customization and styling configuration of the Vimeo video player using jQuery.
 */

/* Usage and Options: */
vimeoEmbedder = function(){

	$("#video").each(function(){
		
		var videoObj = $(this),
		videoContainer = $(".video-container", this),
		placeholderImg = videoObj.find(".placeholder"),
		videoColour = "aaaaaa";
	
		if((placeholderImg.attr("height") / placeholderImg.attr("width")) > .57) $(".video-container", this).addClass("fourbythree");
		
		if(videoObj.attr("vimeo-color")) videoColour = videoObj.attr("vimeo-color");
		
		var videoHTML = '<iframe src="http://player.vimeo.com/video/' + videoObj.attr("vimeo-id") + '?title=0&amp;byline=0&amp;portrait=0&amp;color=' + videoColour + '&amp;autoplay=1&amp;api=1" width="'+ placeholderImg.attr("width") +'" height="'+ placeholderImg.attr("height") +'" width="'+ placeholderImg.attr("width") +'" height="'+ placeholderImg.attr("height") +'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
			
		$(".play", this).on("click", function(e){
			videoContainer.empty().append(videoHTML);
		});
	
	});
	
	if($("body").hasClass("home")) $("html").addClass("hideScroll");
	else $("html").removeClass("hideScroll");

}

$(document).ready(function() { vimeoEmbedder(); }); // Initiate the plugin