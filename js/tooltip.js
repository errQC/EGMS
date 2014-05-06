// Author: Quang Cat

function showTooltip(idTooltip) {
	var tooltip = document.getElementById(idTooltip);

	tooltip.style.visibility = 'visible';
	tooltip.style.left = event.clientX + 20 + 'px';
	tooltip.style.top = event.clientY + 10 + 'px';
	tooltip.style.zIndex = 9999;
}
	
function hideTooltip(idTooltip) {
	var tooltip = document.getElementById(idTooltip);
	
	tooltip.style.visibility = 'hidden';
}