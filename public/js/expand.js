const hoverArrows = document.querySelectorAll(".use-case-list-item");

hoverArrows.forEach((hoverArrow) => {
	hoverArrow.addEventListener("click", () => {
		removeActiveClasses();
		hoverArrow.classList.add("expanded");
		const y = hoverArrow.getBoundingClientRect().top + window.scrollY;
		window.scroll({
			top: y,
			behavior: "smooth",
		});
	});
});

function removeActiveClasses() {
	hoverArrows.forEach((hoverArrow) => {
		hoverArrow.classList.remove("expanded");
	});
}
// hoverArrow.addEventListener("click", onHoverArrow);

// function onHoverArrow(event) {
// 	event.target.parentNode.parentNode.classList.add("expanded");
// 	console.log(event.target.parentNode.parentNode);
// }
