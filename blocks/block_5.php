<section class="block_5">
		<div class="container">
			<div class="section_title">Наша компания</div>
			<div class="block_5_items">
				<div class="block_5_left">
					<div class="specialist"></div>
				</div>
				<div class="block_5_right">
					<div class="block_5_slider_items">
						<div>
							<div class="block_5_slider_item">
								<img src="/img/frontpage/block_5/company/1.jpg">
							</div>
						</div>
						<div>
							<div class="block_5_slider_item">
								<img src="/img/frontpage/block_5/company/2.jpg">
							</div>
						</div>
						<div>
							<div class="block_5_slider_item">
								<img src="/img/frontpage/block_5/company/3.jpg">
							</div>
						</div>
						<div>
							<div class="block_5_slider_item">
								<img src="/img/frontpage/block_5/company/4.jpg">
							</div>
						</div>
						<div>
							<div class="block_5_slider_item">
								<img src="/img/frontpage/block_5/company/5.jpg">
							</div>
						</div>
						<div>
							<div class="block_5_slider_item">
								<img src="/img/frontpage/block_5/company/6.jpg">
							</div>
						</div>
						<div>
							<div class="block_5_slider_item">
								<img src="/img/frontpage/block_5/company/7.jpg">
							</div>
						</div>
						<div>
							<div class="block_5_slider_item">
								<img src="/img/frontpage/block_5/company/8.jpg">
							</div>
						</div>
						<div>
							<div class="block_5_slider_item">
								<img src="/img/frontpage/block_5/company/9.jpg">
							</div>
						</div>
						<div>
							<div class="block_5_slider_item">
								<img src="/img/frontpage/block_5/company/10.jpg">
							</div>
						</div>
						<div>
							<div class="block_5_slider_item">
								<img src="/img/frontpage/block_5/company/11.jpg">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<script>
	var $jq = jQuery.noConflict();
	$jq(document).ready(function() { 
	  $jq('.block_5_slider_items').slick({
		  dots: true,
		  infinite: false,
		  speed: 300,
		  slidesToShow: 3,
		  slidesToScroll: 3,
		  responsive: [
			{
			  breakpoint: 1024,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
				infinite: true,
				dots: true
			  }
			},
			{
			  breakpoint: 600,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		  ]
		});
	});
</script>