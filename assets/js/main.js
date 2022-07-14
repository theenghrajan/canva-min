
window.onclick = function(event) {
	openCloseDropdown(event)
}

function closeAllDropdown() {
	var dropdowns = document.getElementsByClassName('ss-dropdown__expand')
	for (var i = 0; i < dropdowns.length; i++) {
		dropdowns[i].classList.remove('ss-dropdown__expand')
	}
}

function openCloseDropdown(event) {
	if (!event.target.matches('.ss-dropdown__toggle')) {
		// 
		// Close dropdown when click out of dropdown menu
		// 
		closeAllDropdown()
	} else {
		var toggle = event.target.dataset.toggle
		var content = document.getElementById(toggle)
		if (content.classList.contains('ss-dropdown__expand')) {
			closeAllDropdown()
		} else {
			closeAllDropdown()
			content.classList.add('ss-dropdown__expand')
		}
	}
}