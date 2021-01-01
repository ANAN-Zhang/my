$(document).ready(function () {
    $.post("includes/db.php", {
        'ready': 1
    }, (data) => {
	let response = JSON.parse(data)
		//console.log(response);
        response.forEach((ele, index) => {
            let section = document.createElement('section')
            section.innerHTML = `
			
			<div  class="container py-sm-5">
			<div class="row section_grids">
			<div class="team-img col-lg-4">
				<img src="images/p${index+1}.jpg" class="img-responsive" alt=" " />
				<div class="overlay">
						<div class="w3l-social">
							<img src="images/M${index+1}.jpg" class="img-fluid mb-3" alt="Modal Image" />
						</div>
						
					</div>
				
			</div>
			<div class=" col-lg-8 mt-lg-0 mt-5">
				<h3>${ele.name} <i class="fas mr-1 fa-camera-retro"></i></h3>
				<p class="my-4"><i class="fas mr-1 fa-envelope"></i> ${ele.email}</p>
				<p class="my-4"><i class="fas mr-1 fa-phone"></i> ${ele.phone}</p>
				<p class="my-4"><i class="fas mr-1 fa-map-marker"></i> ${ele.address}, ${ele.postcode}</p>
				<a href="#gmap" role="button"><i class="fas mr-2 fa-map-marker"></i> See on the map </a>
			</div>
		    </div>
			
			</div>
			
            `
            $('#con').append(section)
        })	
    })
})





