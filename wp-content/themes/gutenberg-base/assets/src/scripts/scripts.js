document.addEventListener(
	"DOMContentLoaded",
	() => {
		// This is where you can add your js.
		document.addEventListener("scroll", changeHeader);
		// window.addEventListener('resize', dynamicMarginChange);

		const page = document.querySelector(".site");
		const pageHeader = document.querySelector('.site-header');
		const desktopMenu = document.querySelector(".desktop-navigation-container");
		const mobileMenuButton = document.querySelector(".menu-toggle-button");
		const mobileMenu = document.querySelector(".mobile-navigation-container");
		const mobileDropdownContainer = document.querySelectorAll(".mobile-dropdown");
		const rowClassSection = document.querySelector(".footer-columns-wraper");
		const heroServiceFigure = document.querySelector(".hero-figure__service");
		const blogSliderContainer = document.querySelector('.blog-slider__section');
		const siteContent = document.querySelector(".site-content");
		const heroHomeFigure = document.querySelector('#hero-figure__home');
		const heroAboutFigure = document.querySelector('#hero-figure__about');
		const cardSliderControls = document.querySelectorAll('.tab-slider__control');
		const sliderCard = document.querySelectorAll('.tab-slider__card');

		// Tab slider
		for (var i = 0; i < cardSliderControls.length; i++) {
			cardSliderControls[i].addEventListener('click', () =>{
				const cardId = event.target.dataset.id;
				for (var i = 0; i < sliderCard.length; i++) {
					if(sliderCard[i].id === cardId) {
						sliderCard[i].classList.add('js-is-shown');
						cardSliderControls[i].classList.add('js-is-shown');
					} else {
						sliderCard[i].classList.remove('js-is-shown');
						cardSliderControls[i].classList.remove('js-is-shown');
					}
				}
			})
		}

		// Change header style, when scroll
		function changeHeader() {
		let pageHeaderHeight = pageHeader.clientHeight;
		  if (window.scrollY >= 33) {
		    pageHeader.classList.add("scroll");
		  } else if (window.scrollY < 33) {
		    pageHeader.classList.remove("scroll");
		  }
		  if (window.innerWidth < 800 && window.innerWidth > 500) {
		  	if (pageHeader.classList.contains('scroll')) {
		  		mobileMenu.style.top = (pageHeaderHeight - 33) + 'px';
		  	} else {
		  		mobileMenu.style.top = pageHeaderHeight + 'px';
		  	}
		  } else if (window.innerWidth <= 500) {
		  	if (pageHeader.classList.contains('scroll')) {
		  		mobileMenu.style.top = (pageHeaderHeight - 33) + 'px';
		  	} else {
		  		mobileMenu.style.top = (pageHeaderHeight + 10) + 'px';
		  	}
		  }
		}

		// // Dynamicaly change the elements margin
		// function dynamicMarginChange() {
		// 	const rowMargin = getComputedStyle(rowClassSection);
		// 	let marginLeft = rowMargin.marginLeft;

		// 		if (typeof(blogSliderContainer) != 'undefined' && blogSliderContainer != null) {
		// 		 	blogSliderContainer.style.marginLeft = marginLeft;
		// 		}
		// 		if (typeof(heroServiceFigure) != 'undefined' && heroServiceFigure != null) {
		// 		 	heroServiceFigure.style.marginLeft = marginLeft;
		// 		}
		// 		if (typeof(heroHomeFigure) != 'undefined' && heroHomeFigure != null) {
		// 		 	heroHomeFigure.style.marginRight = marginLeft;
		// 		}
		// 		if (typeof(heroAboutFigure) != 'undefined' && heroAboutFigure != null) {
		// 		 	heroAboutFigure.style.marginLeft = marginLeft;
		// 		}
		// }

		// Toggle the Mobile menu
		mobileMenuButton.addEventListener('click', toggleMobileMenu);

		function toggleMobileMenu() {
			mobileMenu.classList.toggle('open');
		}

		// Toggle the mobile dropdown menu
		for (var i = 0; i < mobileDropdownContainer.length; i++) {
		  mobileDropdownContainer[i].addEventListener("click", (event) => {
		    let dropdownItem = event.target.children[1];
		    dropdownItem.style.maxHeight = dropdownItem.style.maxHeight ? null : dropdownItem.scrollHeight + "px";
		    dropdownItem.classList.toggle("open");
		  });
		}

		const resizeObserver = new ResizeObserver(() => {
			let pageHeaderHeight = pageHeader.clientHeight;
			siteContent.style.marginTop = pageHeaderHeight + 'px';
		});

		// dynamicMarginChange();

		resizeObserver.observe(pageHeader);


	},
	false
);
