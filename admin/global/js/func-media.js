/* Open when someone clicks on the span element */
function openMedia() {
	document.getElementById("modalPopupMedia").style.display = "block";
	/* When the modal is shown, we want a fixed body */
	const scrollY = document.body.style.top;
	document.body.style.position = 'fixed';
	document.body.style.top = `-${scrollY}px`;
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeMedia() {
	document.getElementById("modalPopupMedia").style.display = "none";
	/* When the modal is hidden, we want to remain at the top of the scroll position*/
	const scrollY = document.body.style.top;
	document.body.style.position = '';
	document.body.style.top = '';
	window.scrollTo(0, parseInt(scrollY || '0') * -1);
}