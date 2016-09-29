<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tntservice
 */

get_header(); ?>


	<section class="section gray">
		<div class="container">
			<h1 class="text-center">ทำไมลูกค้าถึงเลือกใช้ </h1>
			<h4 class="text-center c-blue mb4">บริการของเรา ? </h4>
			<div class="row">
				<div class="col-sm-4 text-center">
					<img src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/wy1.png" class="img-responsive mx-auto mb2" alt="">
					<div class="title h1 mb2">1,000 +</div>
					<div class="c-soft h1">ผู้ใช้บริการ</div>
				</div>
				<div class="col-sm-4 text-center">
					<img src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/wy2.png" class="img-responsive mx-auto mb2" alt="">
					<div class="title h1 mb2">100%</div>
					<div class="c-soft h1">ซ่อมอาการหายขาด</div>
				</div>
				<div class="col-sm-4 text-center">
					<img src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/wy3.png" class="img-responsive mx-auto mb2" alt="">
					<div class="title h1 mb2">100%</div>
					<div class="c-soft h1">อะไหล่แท้</div>
				</div>
			</div>
		</div>

	</section>
	<section class="section bg-geo">
		<div class="container">
			<div class="row intro">
				<div class="col-md-6">
					<h1 class="c-blue line-height-4">
						รับประกันการซ่อม<br>
						ด้วยอะไหล่แท้ทุกชิ้น
					</h1>
					<div class="hr-bold"></div>
					<p class="mt3 mb3 line-height-4">
						เนื่องด้วยทีมงานคุณภาพของ TNT SERVICEเราจึงนำเข้าอะไหล่สินค้า ที่จะนำมาซ่อมให้ลูกค้าเราจึงพิจรณา อะไหล่แท้ ก่อนนำมาซ่อมให้ลูกค้าทุกครั้ง และทุกชิ้น ต้องขอเน้นเลยว่า ทุกชิ้นเพราะว่าอะไหล่ปลอม นั้นมีมากมายตามท้องตลาดจึงทำให้อาการที่เราซ่อมไปนั้นไม่หายขาดซ่อมแล้วกลับมาเป็นใหม่
					</p>
					<p class="c-blue mb3">เราเลยขอรับประกันเลยว่าทีมงานเรานั้นคุณภาพแน่นอนมั้นใจได้ 100%</p>
					<a href="" class="btn btn-primary mb4">ดูเพิ่มเติม <i class="fa fa-long-arrow-right"></i></a>
				</div>
				<div class="col-md-6">
					<img src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/intro1.png" class="img-responsive mx-auto rounded" alt="">
				</div>
			</div>
			<div class="row intro">
				<div class="col-md-6 col-md-push-6">
					<h1 class="c-blue line-height-4">
						แนะนำการใช้เครื่องรัดกล่อง
					</h1>
					<div class="hr-bold"></div>
					<p class="mt3 mb3 line-height-4">
						ทุกๆครั้ง ทีเอ็นทีเซอร์วิส ส่งมอบเครื่องรัดกล่องถึงมือ
						คุณลูกค้า ทีมช่าง พร้อมแนะนำการใช้เครื่องรัดกล่อง สอนการใช้เครื่องรัด จนลูกค้าเข้าใจ และใช้เองได้ ทีมงาน พร้อม บริการ ทุกๆท่าน ด้วยความใส่ใจ ท่านที่สนใจ กำลังมองกา เครื่องรัด และการเซอร์วิส ทักกันมา นะคะ พร้อมรับทุกสายค่ะ
					</p>
					<p class="c-blue mb3">เราเลยขอรับประกันเลยว่าทีมงานเรานั้นคุณภาพแน่นอนมั้นใจได้ 100%</p>
					<a href="" class="btn btn-primary mb4">ดูเพิ่มเติม <i class="fa fa-long-arrow-right"></i></a>
				</div>
				<div class="col-md-6 col-md-pull-6">
					<img src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/intro2.png" class="img-responsive mx-auto rounded" alt="">
				</div>




			</div>
		</div>
	</section>
	<section class="section gray">
		<div class="container">
			<h1 class="c-blue">สินค้าแนะนำ</h1>
			<div>เครื่องรัดกล่อง และ อุปกรณ์อื่นๆ</div>
			<div class="row mt4">
				<div class="col-sm-4">
					<a class="item">
						<div class="p1">
							<div class="thumb" style="background-image: url(<?php echo esc_url(get_template_directory_uri())?>/assets/images/product1.png)">

							</div>
						</div>
						<div class="title">เครื่องรัดกล่อง</div>
						<div class="name">TNT-02BS</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a class="item">
						<div class="p1">
							<div class="thumb" style="background-image: url(<?php echo esc_url(get_template_directory_uri())?>/assets/images/product2.png)">

							</div>
						</div>
						<div class="title">เครื่องรัดกล่อง</div>
						<div class="name">TNT-02BS</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a class="item">
						<div class="p1">
							<div class="thumb" style="background-image: url(<?php echo esc_url(get_template_directory_uri())?>/assets/images/product3.png)">

							</div>
						</div>
						<div class="title">เครื่องรัดกล่อง</div>
						<div class="name">TNT-02BS</div>
					</a>
				</div>

			</div>
		</div>
	</section>
	<section class="section bg-geo">
		<div class="container">
			<p class="h1">ต้องการให้เราติดต่อกลับกรอกฟอร์มด้านล่างนี้ได้เลย</p>
			<form action="" class="frm mt4 mb4">
				<div class="col-sm-3">
					<input type="text" name="fullname" placeholder="ชื่อ - นามสกุล">
				</div>
				<div class="col-sm-3">
					<input type="text" name="tel" placeholder="เบอร์โทรติดต่อ">
				</div>
				<div class="col-sm-3">
					<input type="email" name="email" placeholder="อีเมล์">
				</div>
				<div class="col-sm-3">
					<input type="submit" class="btn btn-primary btn-block" value="ส่งข้อมูล">
				</div>
			</form>
			<div class="clearfix"></div>
			<div class="text-center c-soft mt4">บริการซ่อมเครื่องและอุปกรณ์ที่เกี่ยวกับบรรจุภัณฑ์ทุกชนิด ด้วยช่างมืออาชีพและทีมงานคุณภาพ</div>
		</div>

	</section>


<?php

get_footer();
