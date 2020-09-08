<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<section class="advertise-count py-lg-4 py-md-3 py-sm-3 py-3" id="products">
<br><br>
	<h5 class="top-title mb-lg-4 mb-3 text-center">Products for Your Everyday Hygiene</h5><br>
	<h3 class="title mb-lg-5 mb-md-4 mb-sm-4 mb-3 text-center">Our Products</h3><br>
	<div style="text-align:center;font-size:17px;font-family:Calibri;">
	<p style="letter-spacing:1px;">Company will provide Regular Sanitary Napkins, Earbuds and Unisex Razor and later on will add many variants of Sanitary Products<br>and other Hygiene products that will fully female friendly.</p>
	</div>
	<div class="container-fluid" style="margin-top:5%;margin-bottom:5%;">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="carousel carousel-showmanymoveone slide" id="itemslider">
					<div class="carousel-inner">

					<div class="item active">
						<div class="col-xs-12 col-sm-6 col-md-2">
							<a href="#"><img src="images\regular.png" style="width:100%;margin-top:32%;" class="img-responsive center-block"></a>
						</div>
					</div>

					<div class="item">
						<div class="col-xs-12 col-sm-6 col-md-2">
							<a href="#"><img src="images\jumbo.png" style="width:60%;margin-top:5%;" class="img-responsive center-block"></a>
						</div>
					</div>

					<div class="item">
						<div class="col-xs-12 col-sm-6 col-md-2">
							<a href="#"><img src="images\100buds.png" style="width:50%;margin-top:15%;" class="img-responsive center-block"></a>
						</div>
					</div>

					<div class="item">
						<div class="col-xs-12 col-sm-6 col-md-2">
							<a href="#"><img src="images\200buds.png" style="width:50%;margin-top:15%;" class="img-responsive center-block"></a>
						</div>
					</div>

					<div class="item">
						<div class="col-xs-12 col-sm-6 col-md-2">
							<a href="#"><img src="images\razor.png" style="margin-top:25%;" class="img-responsive center-block"></a>
						</div>
					</div>
					
					</div>

					<a class="carousel-control-prev" href="#itemslider" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#itemslider" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
<!-- Item slider end-->

</section>

<script>
$(document).ready(function(){

$('#itemslider').carousel({ interval: 3000 });

$('.carousel-showmanymoveone .item').each(function(){
var itemToClone = $(this);

for (var i=1;i<6;i++) {
itemToClone = itemToClone.next();

if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}

itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
});

</script>
