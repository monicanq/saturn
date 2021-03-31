/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	const siteNavigation = document.getElementById( 'site-navigation' );
	const header = document.getElementById( 'site-header' );
	const topHeader = document.getElementById( 'top-header' );
	const focusable = siteNavigation.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
	console.log('focusable', focusable);
	var firstFocusable = focusable[0];
	var lastFocusable = focusable[focusable.length - 1];
	console.log('first', firstFocusable);
	console.log('last', lastFocusable);


	// Return early if the navigation don't exist.
	if ( ! siteNavigation ) {
		return;
	}

	const button = siteNavigation.getElementsByTagName( 'button' )[ 0 ];

	// Return early if the button don't exist.
	if ( 'undefined' === typeof button ) {
		return;
	}

	const menu = siteNavigation.getElementsByTagName( 'ul' )[ 0 ];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( ! menu.classList.contains( 'nav-menu' ) ) {
		menu.classList.add( 'nav-menu' );
	}

	// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
	button.addEventListener( 'click', function() {
		siteNavigation.classList.toggle( 'toggled' );

		if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
			button.setAttribute( 'aria-expanded', 'false' );
			header.classList.remove('menu-color');
			topHeader.classList.toggle( 'expanded' );
		} else {
			button.setAttribute( 'aria-expanded', 'true' );
			header.classList.add('menu-color');
			topHeader.classList.toggle( 'expanded' );
		}
	} );

	// Twentytwentyone code for modal trap
	document.addEventListener( 'keydown', function( event ) {
		var modal, elements, selectors, lastEl, firstEl, activeEl, tabKey, shiftKey, escKey;
		if ( !  button.getAttribute( 'aria-expanded' ) === 'true' ) {
			return;
		}

		selectors = 'input, a, button';
		elements = siteNavigation.querySelectorAll( selectors );
		elements = Array.prototype.slice.call( elements );
		tabKey = event.keyCode === 9;
		shiftKey = event.shiftKey;
		escKey = event.keyCode === 27;
		activeEl = document.activeElement; // eslint-disable-line @wordpress/no-global-active-element
		lastEl = elements[ elements.length - 1 ];
		firstEl = elements[0];

		if ( escKey ) {
			event.preventDefault();
			button.focus();
		}

		if ( ! shiftKey && tabKey && lastEl === activeEl ) {
			event.preventDefault();
			firstEl.focus();
		}

		if ( shiftKey && tabKey && firstEl === activeEl ) {
			event.preventDefault();
			lastEl.focus();
		}

		// If there are no elements in the menu, don't move the focus
		if ( tabKey && firstEl === lastEl ) {
			event.preventDefault();
		}
	} );

	// Twentytwenty code finishes here

	// Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
	document.addEventListener( 'click', function( event ) {
		const isClickInside = siteNavigation.contains( event.target );

		if ( ! isClickInside ) {
			siteNavigation.classList.remove( 'toggled' );
			button.setAttribute( 'aria-expanded', 'false' );
			header.classList.remove( 'menu-color' );
			topHeader.classList.toggle( 'expanded' );
		}
	} );

	// Get all the link elements within the menu.
	const links = menu.getElementsByTagName( 'a' );

	// Get all the link elements with children within the menu.
	const linksWithChildren = menu.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

	// Toggle focus each time a menu link is focused or blurred.
	for ( const link of links ) {
		link.addEventListener( 'focus', toggleFocus, true );
		link.addEventListener( 'blur', toggleFocus, true );
	}

	// Toggle focus each time a menu link with children receive a touch event.
	for ( const link of linksWithChildren ) {
		link.addEventListener( 'touchstart', toggleFocus, false );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus(event) {
		if ( event.type === 'focus' || event.type === 'blur' ) {
			let self = this;
			// Move up through the ancestors of the current link until we hit .nav-menu.
			while ( ! self.classList.contains( 'nav-menu' ) ) {
				// On li elements toggle the class .focus.
				if ( 'li' === self.tagName.toLowerCase() ) {
					self.classList.toggle( 'focus' );
				}
				self = self.parentNode;
			}
		}

		if ( event.type === 'touchstart' ) {
			const menuItem = this.parentNode;
			event.preventDefault();
			for ( const link of menuItem.parentNode.children ) {
				if ( menuItem !== link ) {
					link.classList.remove( 'focus' );
				}
			}
			menuItem.classList.toggle( 'focus' );
		}
	}
}() );

