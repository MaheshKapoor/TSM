    var min = 120, max = 9000;
	var delay = Math.floor(Math.random() * (max - min) + min);
	setTimeout(ajaxCall, delay);
	function ajaxCall(){
	$.getJSON('scripts/data.json', function (data) {
		var item = data.items.map(function (item) {
		var id = "image_empid_"+item.EmpId;
		var linkedinId = "linkedinURL_empid_"+item.EmpId;
		var imagePath = item.thumbnailURL;
		var linkedinURL = item.linkedinURL;
		document.getElementById(id).setAttribute("src", imagePath);
		document.getElementById(linkedinId).setAttribute("href", linkedinURL);
      });
	});
}