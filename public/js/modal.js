function createModal() {
	const modalDiv = document.createElement("div");
	const modalContentDiv = document.createElement("div");
	modalDiv.classList.add("modal");
	modalContentDiv.classList.add("modal-content");
	modalDiv.appendChild(modalContentDiv);

	fetch("/contact-form.html")
		.then(function (response) {
			return response.text();
		})
		.then(function (html) {
			// var parser = new DOMParser();
			// var doc = parser.parseFromString(html, "text/html");
			modalContentDiv.innerHTML = html;
			document.body.insertAdjacentElement("beforeend", modalDiv);
			var closeButton = document.querySelector(".modal-close-btn");
			closeButton.addEventListener("click", closeModal);
		})
		.catch(function (err) {
			console.log("Failed to fetch page: ", err);
		});
}

function closeModal() {
	var modal = document.querySelector(".modal");
	modal.remove();
}
