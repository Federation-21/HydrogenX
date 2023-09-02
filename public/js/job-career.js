// Apply for job accordion
    document.querySelectorAll(".accordion-title").forEach((item) =>
      item.addEventListener("click", () => {
        const parent = item.parentNode;

        if (parent.classList.contains("open")) {
          parent.classList.remove("open");
        } else {
          document
            .querySelectorAll(".items")
            .forEach((child) => child.classList.remove("open"));

          parent.classList.toggle("open");
        }
      })
    );


// SplideJs
document.addEventListener( 'DOMContentLoaded', function () {
	new Splide( '#employees',{
		type: 'slide',
		perPage: 1,
		perMove: 1,
		arrows: true,
    pagination: false
	} ).mount();
} );
