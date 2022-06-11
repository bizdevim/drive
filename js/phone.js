document.addEventListener("DOMContentLoaded", () => {
	"use strict";
	{
		class Tabs {
			constructor(options = {}) {
				const { tab = ".tabItem", tabContents = ".tabContent" } = options;
				this.tab = tab;
				this.tabContents = tabContents;
				this.init();
			}
			init() {
				const tab = document.querySelectorAll(this.tab);
				const tabContents = document.querySelectorAll(this.tabContents);

				tab.forEach((element, index, array) => {
					element.addEventListener("click", () => {
						const tabContentItem = document.querySelector(`${element.dataset.target}`);
						for (let tabItems of array) {
							tabItems.classList.remove("active");
							tabItems.attributes["aria-selected"].value = false;
						}
						element.classList.add("active");
						element.attributes["aria-selected"].value = true;

						for (let tabContentItems of tabContents) {
							tabContentItems.classList.remove("active");
							tabContentItems.attributes["aria-selected"].value = false;
						}
						if (tabContentItem) {
							tabContentItem.classList.toggle("active");
							tabContentItem.attributes["aria-selected"].value = true;
						}
					});
				});
			}
		}
		new Tabs();
		new Tabs({
			tab: ".tabItem2",
			tabContents: ".tabContent2",
		});
	}
	// Follow
	{
		const followBtn = document.querySelectorAll(".followBtn");
		followBtn.forEach((el) => {
			el.addEventListener("click", () => {
				if (!el.classList.contains("active")) {
					el.textContent = "Following";
					el.classList.add("active");
				} else {
					el.textContent = "Follow";
					el.classList.remove("active");
				}
			});
		});
	}
	// Favorite
	{
		const favoriteBtn = document.querySelectorAll(".phone__tags-btn");
		favoriteBtn.forEach((el) => {
			el.addEventListener("click", () => {
				el.classList.toggle("active");
			});
		});
	}
	// Transform
	{
		const phoneBtnPlus = document.querySelector(".phoneBtnPlus"),
			phoneBtnMinus = document.querySelector(".phoneBtnMinus"),
			phone = document.querySelector(".phone");

		let phoneScale = [
			"scale(1.1)",
			"scale(1.2)",
			"scale(1.3)",
			"scale(1.4)",
			"scale(1.5)",
			"scale(1.6)",
			"scale(1.7)",
		];
		let phoneHeight = ["984px", "1074px", "1164px", "1254px", "1342px", "1432px", "1522px"];

		let i = 0 - 1;

		if (phoneBtnPlus && phoneBtnMinus) {
			phoneBtnPlus.addEventListener("click", () => {
				if (i < 6) {
					i++;
					transformHeightPhone();
				}
			});
			phoneBtnMinus.addEventListener("click", () => {
				if (i !== 0) {
					i--;
					transformHeightPhone();
				}
			});
		}

		function transformHeightPhone() {
			phone.style.transform = phoneScale[i];
			phone.style.height = phoneHeight[i];
			console.log(phoneScale[i], phoneHeight[i], i, phone.clientHeight);
		}
	}

	function scrollbarWidth() {
		var documentWidth = parseInt(document.documentElement.clientWidth);
		var windowsWidth = parseInt(window.innerWidth);
		var scrollbarWidth = windowsWidth - documentWidth;
		return scrollbarWidth;
	}

	let scrollWidth = scrollbarWidth();
	// Popup
	{
		const openDemo = document.querySelectorAll(".openDemo"),
			closeDemo = document.querySelectorAll(".closeDemo"),
			modal = document.querySelector(".phone-wrapper__modal");

		openDemo.forEach((el) => {
			el.addEventListener("click", function () {
				modal.classList.add("active");
				document.body.style.overflow = "hidden";
				document.body.style.paddingRight = `${scrollWidth}px`;

			});
		});

		closeDemo.forEach((el) => {
			el.addEventListener("click", function () {
				modal.classList.remove("active");
				document.body.style.overflow = "";
				document.body.style.paddingRight = "";
			});
		});

		modal.addEventListener("click", (e) => {
			if (!e.target.closest(".phone")) {
				modal.classList.remove("active");
				document.body.style.overflow = "";
				document.body.style.paddingRight = "";
			}
		});
	}
	// Share
	const shareData = {
		title: "Bizdevim",
		text: "Bizdevim - Network for business",
		url: "https://bizdevim.com/richardkingates",
	};

	const btn = document.querySelectorAll(".phone__personal-btns button");

	btn.forEach((el) => {
		el.addEventListener("click", async () => {
			await navigator.share(shareData);
		});
	});
	// Enter
	const openBtn = document.querySelector(".open-enter");
	const closeBtn = document.querySelector(".close-enter");
	const enterModal = document.querySelector(".phone-wrapper__enter");
	const useEmail = document.querySelector(".useEmail");
	const header = document.querySelector(".page-header");

	openBtn.addEventListener("click", (e) => {
		enterModal.classList.add("active");
		header.classList.add("active");
		document.body.style.overflow = "hidden";
		document.body.style.paddingRight = `${scrollWidth}px`;
		closeBtn.style.display = "block";
		openBtn.style.display = "none";
	});
	closeBtn.addEventListener("click", (e) => {
		enterModal.classList.remove("active");
		header.classList.remove("active");
		document.body.style.overflow = "";
		document.body.style.paddingRight = "";
		closeBtn.style.display = "none";
		openBtn.style.display = "block";
	});
	enterModal.addEventListener("click", (e) => {
		if (!e.target.closest(".phone")) {
			enterModal.classList.remove("active");
			header.classList.remove("active");
			document.body.style.overflow = "";
			document.body.style.paddingRight = "";
			closeBtn.style.display = "none";
			openBtn.style.display = "block";
		}
	});
	useEmail.addEventListener("click", () => {
		window.location.href = "https://bizdevim.com/app";
	});
});
