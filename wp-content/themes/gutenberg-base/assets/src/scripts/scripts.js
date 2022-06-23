document.addEventListener(
	"DOMContentLoaded",
	() => {
		// This is where you can add your js.

		document.addEventListener("scroll", changeHeader);

		const pageHeader = document.querySelector('.site-header');
		const desktopMenu = document.querySelector(".desktop-navigation-container");
		const mobileMenuButton = document.querySelector(".menu-toggle-button");
		const mobileMenu = document.querySelector(".mobile-navigation-container");
		const mobileDropdownContainer = document.querySelectorAll(".mobile-dropdown");

		const siteContent = document.querySelector(".site-content");

		const serviceFigure = document.querySelector(".hero-figure__service");

		const cardSliderControls = document.querySelectorAll('.slider-control');

		const sliderCard = document.querySelectorAll('.slider-card');

		for (var i = 0; i < cardSliderControls.length; i++) {
			cardSliderControls[i].addEventListener('click', () =>{
				const id = event.target.dataset.id;
				for (var i = 0; i < sliderCard.length; i++) {
					if(sliderCard[i].id === id) {
						sliderCard[i].classList.add('active');
						cardSliderControls[i].classList.add('active');
					} else {
						sliderCard[i].classList.remove('active');
						cardSliderControls[i].classList.remove('active');
					}
				}
			})
		}


		function changeHeader() {
		let pageHeaderHeight = pageHeader.clientHeight;
		  if (window.scrollY >= 33) {
		    pageHeader.classList.add("scroll");
		  } else if (window.scrollY < 33) {
		    pageHeader.classList.remove("scroll");
		  }
		  if (window.innerWidth < 800 && window.innerWidth > 500) {
		  	console.log("hre")
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

		resizeObserver.observe(pageHeader);



	},
	false
);
