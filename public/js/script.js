var submenutrigger = document.querySelectorAll(".main-nav-list > li");
var dropBackground = document.querySelector(".dropdownBackground");
var nav = document.querySelector(".main-nav");

/*activate submenu*/
function activeSub() {
	var dropdown = this.querySelector(".dropdown");
	if (dropdown) {
		this.classList.add("trigger-enter");
		setTimeout(
			() =>
				this.classList.contains("trigger-enter") &&
				this.classList.add("trigger-enter-active"),
			100
		);
		dropBackground.classList.add("open");

		/*get position on mouseover*/
		// console.log(dropdown);

		var dropdownPos = dropdown.getBoundingClientRect();
		console.log(dropdownPos);
		var navPos = nav.getBoundingClientRect();
		// console.log(navPos);

		var pos = {
			height: dropdownPos.height,
			width: dropdownPos.width,
			top: dropdownPos.top - navPos.top,
			left: dropdownPos.left - navPos.left,
		};

		/*set position of the arrow and submenu on mouseover*/
		dropBackground.style.setProperty("width", `${pos.width}px`);
		dropBackground.style.setProperty("height", `${pos.height}px`);
		dropBackground.style.setProperty(
			"transform",
			`translate(${pos.left}px, ${pos.top}px)`
		);
	}
}

/*deactivate submenu*/
function deactiveSub() {
	this.classList.remove("trigger-enter", "trigger-enter-active");
	dropBackground.classList.remove("open");
}

/*mouse events*/
submenutrigger.forEach((trigger) =>
	trigger.addEventListener("mouseenter", activeSub)
);
submenutrigger.forEach((trigger) =>
	trigger.addEventListener("mouseleave", deactiveSub)
);

// INDUSTRIES PAGE SCRIPT
const enterpriseTab = document.querySelector(".enterprise-tab");
const retailTab = document.querySelector(".retail-tab");

enterpriseTab.addEventListener("click", onEnterpriseTab);
retailTab.addEventListener("click", onRetailTab);

function onEnterpriseTab() {
	retailTab.classList.remove("active-tab");
	enterpriseTab.classList.add("active-tab");
}
function onRetailTab() {
	enterpriseTab.classList.remove("active-tab");
	retailTab.classList.add("active-tab");
}
