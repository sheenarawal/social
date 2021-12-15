<section class="page_breadcrumbs cs gradient2 parallax section_padding_top_50 section_padding_bottom_50">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Gallery</h2>
							<ol class="breadcrumb darklinks">
								<li>
									<a href="/">
							Home
						</a>
								</li>
								<li class="active">Gallery</li>
							</ol>
						</div>
					</div>
				</div>
			</section>


			<section class="ls page_portfolio section_padding_top_130 section_padding_bottom_130">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="filters isotope_filters darklinks">
								<a href="#" class="selected" data-filter="*">All</a>
								<?php foreach($gallery as $data){ ?>
								<a href="#" data-filter=".<?php echo preg_replace('/[^A-Za-z0-9-]+/', '-', $data['category']); ?>"><?php echo $data['category']; ?></a>
								<?php } ?>
							</div>
							<?php foreach($gallery as $image){ ?>
							<div class="isotope_container isotope row masonry-layout columns_margin_bottom_20" data-filters=".isotope_filters">
								<div class="isotope-item col-lg-4 col-md-6 col-sm-12 <?php echo preg_replace('/[^A-Za-z0-9-]+/', '-', $image['category']); ?>">
									<article class="vertical-item content-padding post format-standard with_border rounded text-center">

										<div class="item-media">

											<img src="uploads/<?php echo $image['media']; ?>" alt="">

											<div class="media-links">
												<div class="links-wrap">
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/<?php echo $image['media']; ?>"></a>
												</div>
											</div>
										</div>

										<div class="item-content">
											<header class="entry-header">
												<p class="categories-links small-text">
								<a href="#"><?php echo $image['category']; ?></a>
							</p>
												<h4 class="entry-title">
													<a href="gallery-single.html" rel="bookmark">
									<?php echo $image['title']; ?>
								</a>
												</h4>
											</header>
											<p>
							<?php echo $image['description']; ?>
						</p>
										</div>

									</article>
								</div>
								<?php } ?>
							</div>


							<div class="row">
								<div class="col-sm-12 text-center">
									<img src="img/loading.png" alt="" class="fa-spin" />
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>