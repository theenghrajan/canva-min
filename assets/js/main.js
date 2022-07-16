//Dropdown
window.onclick = function (event) {
	openCloseDropdown(event)
}

function closeAllDropdown() {
	const dropdowns = document.getElementsByClassName('ss-dropdown__expand')
	for (let i = 0; i < dropdowns.length; i++) {
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
		const toggle = event.target.dataset.toggle
		const content = document.getElementById(toggle)
		if (content.classList.contains('ss-dropdown__expand')) {
			closeAllDropdown()
		} else {
			closeAllDropdown()
			content.classList.add('ss-dropdown__expand')
		}
	}
}

//Modal
const ssModalTriggerButtons = document.querySelectorAll("[data-modal-target]");
const ssModals = document.querySelectorAll(".ss-modal");
const ssModalCloseButtons = document.querySelectorAll(".ss-modal__close");

ssModalTriggerButtons.forEach(elem => {
	elem.addEventListener("click", event => toggleModal(event.currentTarget.getAttribute("data-modal-target")));
});
ssModalCloseButtons.forEach(elem => {
	elem.addEventListener("click", event => toggleModal(event.currentTarget.closest(".ss-modal").id));
});
ssModals.forEach(elem => {
	elem.addEventListener("click", event => {
		if (event.currentTarget === event.target) toggleModal(event.currentTarget.id);
	});
});

// Maybe also close with "Esc"...
document.addEventListener("keydown", event => {
	if (event.keyCode === 27 && document.querySelector(".ss-modal.ss-modal-show")) {
		toggleModal(document.querySelector(".ss-modal.ss-modal-show").id);
	}
});

function toggleModal(modalId) {
	const ssModal = document.getElementById(modalId);

	if (getComputedStyle(ssModal).display === "flex") {
		ssModal.classList.add("ss-modal-hide");
		setTimeout(() => {
			document.body.style.overflow = "initial"; // Optional: in order to enable/disable page scrolling while modal is hidden/shown - in this case: "initial" <=> "visible"
			ssModal.classList.remove("ss-modal-show", "ss-modal-hide");
			ssModal.style.display = "none";
		}, 200);
	} else {
		document.body.style.overflow = "hidden"; // Optional: in order to enable/disable page scrolling while modal is hidden/shown
		ssModal.style.display = "flex";
		ssModal.classList.add("ss-modal-show");
	}
}

// Continue another way
// const ssModalContent = document.getElementById("ssModalContent");
// const continueAnotherWay = document.getElementById("#continueAnotherWay");

// continueAnotherWay.addEventListener('click', function () {
// 	if (ssModalContent.children)
// })



//sidebar
const ssHamburger = document.querySelector(".ss-hamburger");
ssHamburger.addEventListener("click", function () {
	document.querySelector("body").classList.toggle("active");
})