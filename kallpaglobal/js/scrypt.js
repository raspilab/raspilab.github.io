document.addEventListener("DOMContentLoaded",function(){
	
	const lazyImages = document.querySelectorAll(".lazy");
	
	if("IntersectionObserver" in window){
		const options = {threshold: 0};
		
		const imageObserver = new IntersectionObserver(
		(entries, observer) => {
			entries.forEach(entry => {
				if(entry.isIntersecting){
					const image = entry.target;
					image.src = image.dataset.src;
					image.alt = image.dataset.description;
					image.classList.remove("lazy");
					imageObserver.unobserve(image);
				}
			});
		},options);		
		
		lazyImages.forEach(image => imageObserver.observe(image));
	} else {
		lazyImages.forEach(image => {
			image.src = image.dataset.src;
			image.alt = image.dataset.description;
			image.classList.remove("lazy");
		});
	}
});