// The code will be long
// because I want to use MVC Design Pattern for this.
const carousel = function () {
	const helpers = (function () {
		function getDOMElements(DOMSelectors) {
			let DOMElements = {};
			for (let selector in DOMSelectors) {
				if (DOMSelectors.hasOwnProperty(selector)) {
					DOMElements[selector] = document.querySelector(
						DOMSelectors[selector]
					);
				}
			}
			return DOMElements;
		}
		return {
			getDOMElements,
		};
	})();

	const modal = (function () {
		const state = {
			counter: 0,
			intervalID: 0,
		};
		let CONSTANTS = {
			ACTIVE_CLASS_NAME: "active",
			TIMER: 1500,
			TRANSITION: "all .3s ease-out",
		};
		function addConstant(key, value) {
			CONSTANTS[key] = value;
		}

		return {
			state,
			CONSTANTS,
			addConstant,
		};
	})();

	const view = (function (helpers) {
		const DOMSelectors = {
			carouselInnerSlider:
				".use-case-list-item.expanded .carousel-inner-slider",
			dots: ".use-case-list-item.expanded .dots",
			// slide: "#slide",
			prevButton: ".use-case-list-item.expanded .video-left-arrow",
			nextButton: ".use-case-list-item.expanded .video-right-arrow",
			carouselImages: ".use-case-list-item.expanded .use-case-video-container",
			// dot: ".use-case-list-item.expanded .dot",
		};
		function addDots() {
			const imagesCount =
				[...document.querySelectorAll(DOMSelectors.carouselImages)].length - 1;
			const dots = document.querySelector(DOMSelectors.dots);
			console.log(imagesCount);
			for (i = 0; i <= imagesCount; i++) {
				const dot = document.createElement("li");
				dot.classList.add("dot");
				dot.value = i;
				dots.append(dot);
			}
			DOMSelectors["dot"] = ".use-case-list-item.expanded .dot";
		}
		addDots();
		const DOMElements = helpers.getDOMElements(DOMSelectors);
		const CAROUSEL_IMAGES = [
			...document.querySelectorAll(DOMSelectors.carouselImages),
		];
		const DOTS = [...document.querySelectorAll(DOMSelectors.dot)];

		function moveSliderToIndex(IMAGE_SIZE, index) {
			DOMElements.carouselInnerSlider.style.transform = `translateX(-${
				IMAGE_SIZE * index
			}px)`;
		}
		function addClassToIndex(className, index) {
			CAROUSEL_IMAGES[index].classList.add(className);
		}
		function removeClassToIndex(className, index) {
			CAROUSEL_IMAGES[index].classList.remove(className);
		}
		function addBackGroundToCurrentIndex(index) {
			DOTS[index].style.background = "#232526";
		}
		function removeBackGroundToCurrentIndex(index) {
			DOTS[index].style.background = "transparent";
		}
		function setTransition(element, transition) {
			element.style.transition = `${transition}`;
		}
		return {
			DOMSelectors,
			addDots,
			moveSliderToIndex,
			addClassToIndex,
			removeClassToIndex,
			addBackGroundToCurrentIndex,
			removeBackGroundToCurrentIndex,
			setTransition,
		};
	})(helpers);

	const controller = (function (modal, view, helpers) {
		const DOMSelectors = view.DOMSelectors;
		const DOMElements = helpers.getDOMElements(DOMSelectors);
		function initApp() {
			const imageSize = DOMElements.carouselInnerSlider.clientWidth;
			const imagesCount =
				[...document.querySelectorAll(DOMSelectors.carouselImages)].length - 1;
			modal.addConstant("IMAGE_SIZE", imageSize);
			modal.addConstant("TOTAL_IMAGES", imagesCount);
			view.moveSliderToIndex(modal.CONSTANTS.IMAGE_SIZE, modal.state.counter);
			handleAdding();

			DOMElements.nextButton.addEventListener("click", handleNextImage);
			DOMElements.prevButton.addEventListener("click", handlePrevImage);
			DOMElements.dots.addEventListener("click", handleDotClick);
			// DOMElements.slide.addEventListener("change", handleSlide);
		}
		function removeEventListeners(event) {
			if (event) {
				event.stopPropagation();
			}
			DOMElements.nextButton.removeEventListener("click", handleNextImage);
			DOMElements.prevButton.removeEventListener("click", handlePrevImage);
			DOMElements.dots.removeEventListener("click", handleDotClick);
			// DOMElements.slide.removeEventListener("change", handleSlide);
		}
		function handleNextImage(event) {
			event.stopPropagation();
			handleRemove();
			if (modal.state.counter === modal.CONSTANTS.TOTAL_IMAGES) {
				modal.state.counter = -1;
			}
			modal.state.counter += 1;
			handleAdding();
			view.moveSliderToIndex(modal.CONSTANTS.IMAGE_SIZE, modal.state.counter);
		}
		function handlePrevImage(event) {
			event.stopPropagation();
			handleRemove();
			if (modal.state.counter === 0) {
				modal.state.counter = modal.CONSTANTS.TOTAL_IMAGES + 1;
			}
			modal.state.counter -= 1;
			handleAdding();
			view.moveSliderToIndex(modal.CONSTANTS.IMAGE_SIZE, modal.state.counter);
		}
		function handleDotClick(event) {
			event.stopPropagation();
			const value = Number(event.target.value);
			if (!isNaN(value)) {
				handleRemove();
				modal.state.counter = value;
				view.moveSliderToIndex(modal.CONSTANTS.IMAGE_SIZE, modal.state.counter);
				handleAdding();
			}
		}

		// function handleSlide(event) {
		// 	const isChecked = event.target.checked;
		// 	if (isChecked) {
		// 		modal.state.intervalID = setInterval(() => {
		// 			handleNextImage();
		// 		}, modal.CONSTANTS.TIMER);
		// 	} else {
		// 		clearInterval(modal.state.intervalID);
		// 		modal.state.intervalID = null;
		// 	}
		// }
		function handleRemove() {
			view.removeClassToIndex(
				modal.CONSTANTS.ACTIVE_CLASS_NAME,
				modal.state.counter
			);
			view.removeBackGroundToCurrentIndex(modal.state.counter);
		}
		function handleAdding() {
			view.addClassToIndex(
				modal.CONSTANTS.ACTIVE_CLASS_NAME,
				modal.state.counter
			);
			view.addBackGroundToCurrentIndex(modal.state.counter);
		}
		// DOMElements.carouselInnerSlider.addEventListener(
		// 	"transitionstart",
		// 	removeEventListeners
		// );
		// DOMElements.carouselInnerSlider.addEventListener("transitionend", initApp);
		view.setTransition(
			DOMElements.carouselInnerSlider,
			modal.CONSTANTS.TRANSITION
		);
		return {
			initApp,
			removeEventListeners,
		};
	})(modal, view, helpers);

	controller.initApp();

	window.addEventListener("resize", () => {
		controller.removeEventListeners();
		controller.initApp();
	});
};

const useCaseListItem = document.querySelectorAll(".use-case-list-item");
useCaseListItem.forEach((useCase) => {
	useCase.addEventListener("click", (event) => {
		event.preventDefault();
		event.stopPropagation();
		carousel();
	});
});

// REFERENCE MATERIAL
// https://codepen.io/NaveenPantra/pen/yLYPBWO?editors=1111
