import Masonry from 'masonry-layout';

// latest news
var elem = document.querySelector('.js-masonry');
var msnry = new Masonry( elem, {
	itemSelector: '.card',
	columnWidth: 390,
	gutter: 15,
	fitWidth: true
  });
