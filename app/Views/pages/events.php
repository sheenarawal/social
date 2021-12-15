
			<section class="page_breadcrumbs cs gradient2 parallax section_padding_top_50 section_padding_bottom_50">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>No sidebar</h2>
							<ol class="breadcrumb darklinks">
								<li>
									<a href="index-2.html">
							Home
						</a>
								</li>
								<li>
									<a href="#">Events</a>
								</li>
								<li class="active">No sidebar</li>
							</ol>
						</div>
					</div>
				</div>
			</section>


			<section class="ls section_padding_top_150 section_padding_bottom_130 columns_padding_25">
				<div class="container">
					<div class="row">

						<div class="col-sm-10 col-sm-push-1">

							<?php 

							foreach($events as $event){ ?>
							<article class="post side-item content-padding with_border ">

								<div class="row">

									<div class="col-md-5">
										<div class="item-media">
											<img src="assets/images/events/<?php echo $event['media']; ?>" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="event-details/<?php echo $event['id']; ?>"></a>
											</div>
										</div>
									</div>

									<div class="col-md-7">
										<div class="item-content">
											<h4>
												<a href="event-details/<?php echo $event['id']; ?>"><?php echo $event['title']; ?></a>
											</h4>

											<p class=" grey darklinks">
											<span class="rightpadding_20"><i class="fa fa-calendar rightpadding_5 highlight"></i> <?php echo $event['publish_date']; ?></span>
											<i class="fa fa-map-marker rightpadding_5 highlight"></i> <?php echo $event['location']; ?>
										</p>
											<p><?php echo substr($event['description'], 0, 50) . ' ....'; ?></p>

										</div>
									</div>

								</div>
							</article>
						<?php }  ?>
							<div class="row topmargin_60">

								<div class="col-sm-12 text-center">
									<?= $pager->links() ?>
									<!-- <ul class="pagination">
										<li class="disabled">
											<a href="#">
												<span class="sr-only">Prev</span>
												<i class="fa fa-angle-left" aria-hidden="true"></i>
											</a>
										</li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li>
											<a href="#">
												<span class="sr-only">Next</span>
												<i class="fa fa-angle-right" aria-hidden="true"></i>
											</a>
										</li>
									</ul> -->
								</div>
							</div>

						</div>
						<!--eof .col-sm-* (main content)-->

					</div>
				</div>
			</section>