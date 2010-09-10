function load_fb_nb () {
		$('#feedburner_result').html('<img src="http://thierrypoinot.com/sandbox/img/ajaxload.gif"/>');
		$.ajax({
			type:'GET',
			url:'fb_nb.php',
			data:{
				feedburnerid:escape($('#feedburnerid').attr('value')),
				nothing:'none'
			},
			dataType:'xml',
			success: function(xml){
				var err = $(xml).find('err').attr('msg');
				if (!err) {
					$('#feedburner_result').html($(xml).find('feed').attr('uri') + " : " + $(xml).find('entry').attr('circulation'));
				} else {
					$('#feedburner_result').html(err);
				}
			}
		});
}
function load_pr() {
	$('#img_pr').html('<img src="http://www.pagerank.fr/pagerank-actuel.gif?uri='+$('#pagerankurl').attr('value')+'" style="border: none;" alt="PageRank actuel"/>');
}

$(document).ready (function () {
	load_fb_nb();
	load_pr();
});