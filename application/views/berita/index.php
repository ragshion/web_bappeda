<div class="page-content">
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<?=$breadcumb?>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first mt-4">
			<div class="row">
				<div class="container-fluid mx-1">
				<form action="<?=base_url('berita/cari')?>" method="POST" class="content-search d-flex" style="width: 100% !important">
					<div class="input-wrap">
						<input type="text" class="form-control" placeholder="Cari Berita..." name="s">
					</div>
					<button type="submit"><i class="icon-search"></i></button>
				</form>
				</div>
			</div>
			<div class="row">
			<div class="col-md-12 col-xl-9 col-sm-12 px-xl-0 px-md-2 px-sm-2">
				<div class="container-fluid pr-xl-0">
					<div class="blog-isotope">
						<?php $i=1; foreach ($data as $p): ?>
						<div class="blog-post <?= ($i%2 != 0) ? 'mx-xl-1' : '' ?>">
							<div class="post-image">
								<!-- <a href="blog-post-page.html"><img src="<?=base_url('assets/front/images/')?>blog/blog-post-img-1.jpg" alt=""></a> -->
								<?php if (count($p['thumbnail']) > 1) { ?>
									<div class="slider-gallery post-carousel js-post-carousel">
										<?php foreach ($p['thumbnail'] as $t): ?>
											<a href="<?=base_url('berita/detail/').$p['link']?>"><img src="<?=base_url('assets/images/posts/'.$t['nama_file'])?>" alt=""></a>	
										<?php endforeach ?>
									</div>
								<?php } else { ?>
									<?php foreach ($p['thumbnail'] as $t): ?>
										<a href="<?=base_url('berita/detail/').$p['link']?>"><img src="<?=base_url('assets/images/posts/'.$t['nama_file'])?>" alt=""></a>
									<?php endforeach ?>
								<?php } ?>
							</div>
							<div class="blog-post-info">
								<?php setlocale(LC_ALL,"id_ID"); $date = DateTime::createFromFormat("Y-m-d", date('Y-m-d', strtotime($p['tanggal'])));?>
								<div class="post-date"><?=date('d',strtotime(date('Y-m-d', strtotime($p['tanggal']))))?><span><?=strftime("%b",$date->getTimestamp());?></span></div>
								<div>
									<h2 class="post-title mb-0"><a href="<?=base_url('berita/detail/').$p['link']?>"><?=$p['judul']?></a></h2>
									<div class="post-meta">
										<div class="post-meta-author">by <a href="javascript:;"><i><?=$p['nama_bidang']?></i></a></div>
										<br>
										
									</div>
									<div class="post-meta-social">
										<a href="#"><i class="icon-facebook-logo"></i></a>
										<a href="#"><i class="icon-twitter-logo"></i></a>
										<a href="#"><i class="icon-instagram"></i></a>
									</div>
								</div>
							</div>
							<div class="post-teaser"><?=$p['readmore'];?></div>
							<div class="mt-2"><a href="<?=base_url('berita/detail/').$p['link']?>" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
						</div>
						<?php $i++; endforeach ?>
					</div>
				</div>
			</div>
			<?=$side_blog;?>
		</div>
	</div>