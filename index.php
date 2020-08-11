<?php include 'header.php'; ?>
<?php require 'template-parts/blocks/c-background-lines.php'; ?>
<!-- ./c-background-lines -->
<?php require 'template-parts/sections/nav.php'; ?>
<!-- ./nav -->
<?php require 'template-parts/sections/documentation.php'; ?>
<?php require 'template-parts/sections/online-camera.php'; ?>
<header class="header">
	<div class="container">
		<div class="swiper-container js-swiper-header">
			<!-- <div class="parallax-bg" style="background-image:url(./images/nature-1.jpg)" data-swiper-parallax="-23%"></div> -->
			<div class="swiper-wrapper">
				<?php for ($i=0; $i < 5; $i++) {  ?>
					<div class="swiper-slide header__body">
						<div class="c-stick-price">
							<span>от</span>
							<p>1.8 </p>
							<span class="h-strong">млн руб</span>
						</div>
						<img src="images/views/sections/header/bg.jpg" class="h-image-cover" data-swiper-parallax-duration="600" data-swiper-parallax-scale="2">
						<div class="header__content">
							<img src="images/views/sections/header-primary/logo.png" class="mb-6">
							<h2 class="c-title c-title--mb-primary" data-swiper-parallax-duration="800" data-swiper-parallax="-500" >Новый тихий и уютный микрорайон Тулы</h2>
							<p class="c-text c-text--large mb-6" data-swiper-parallax-duration="800" data-swiper-parallax-x="-200">Живите в зелёном районе Твери с развитой инфраструктурой и невысокими домами</p>
							<a href="" class="c-btn c-btn--primary c-btn--center c-btn--width-secondary" data-swiper-parallax-duration="1000" data-swiper-parallax="-700"><span>Записаться на экскурсию</span></a>
						</div>
					</div>

					
				<?php } ?>
			</div>
			<div class="c-nav-slide">
				<div class="swiper-button-prev c-nav-slide__arrow"></div>
				<div class="swiper-button-next c-nav-slide__arrow"></div>
			</div>
		</div>
	</div>
</header>

<section class="pt-13 pt-md-8">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-md-6">
				<img src="images/common/page-index/image-primary.png">
			</div>
			<div class="col-12 col-md-6 pt-4 pt-md-0">
				<h3 class="c-title c-title--medium mb-3">Новый тихий и уютный  микрорайон Тулы</h3>
				<p class="c-text">
					Описание района примерно в 300 символов. Описание района примерно в 300 символов.  Описание района примерно в 300 символов. Описание района примерно в 300 символов. Описание района примерно в 300 символов. Описание района примерно в 300 символов. Описание района примерно в 300 символов. 
				</p>
			</div>
		</div>
	</div>
</section>
<!-- ./description -->

<section class="py-13 py-md-9">
	<div class="container">
		<div class="row">
			<div class="col-6 mb-13 mb-md-0 col-md-3">
				<div class="с-in-number">
					<div class="c-square c-square--rotate с-in-number__c-square"></div>
					<p class="с-in-number__number">4</p>
					<p class="с-in-number__text c-text c-text--large">кварталов</p>
				</div>
			</div>
			<div class="col-6 mb-13 mb-md-0 col-md-3">
				<div class="с-in-number">
					<div class="c-square c-square--rotate с-in-number__c-square"></div>
					<p class="с-in-number__number">12</p>
					<p class="с-in-number__text c-text c-text--large">домов</p>
				</div>
			</div>
			<div class="col-6 mb-13 mb-md-0 col-md-3">
				<div class="с-in-number">
					<div class="c-square c-square--rotate с-in-number__c-square"></div>
					<p class="с-in-number__number">5</p>
					<p class="с-in-number__text c-text c-text--large">домов сдано</p>
				</div>
			</div>
			<div class="col-6 mb-13 mb-md-0 col-md-3">
				<div class="с-in-number">
					<div class="c-square c-square--rotate с-in-number__c-square"></div>
					<p class="с-in-number__number">300</p>
					<p class="с-in-number__text c-text c-text--large">квартир</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="py-0 py-md-12">
	<div class="container">
		<h3 class="c-title c-title--medium mb-10 text-center">Открыта продажа в домах</h3>
		<div class="row">
			<?php for ($i=0; $i < 2; $i++) { ?>
				<div class="col-12 mb-10 col-lg-6">
					<?php require 'template-parts/blocks/c-cart.php'; ?>
				</div>
			<?php } ?>
			
		</div>
		<a href="" class="c-btn c-btn--width-secondary mx-auto "><span>Каталог всех домов</span></a>
	</div>
</section>
<section class="pt-13 pb-0 pb-lg-9">
	<div class="container">
		<h3 class="c-title c-title--medium mb-13 text-center">Инфраструктура микрорайона</h3>
		<div class="row justify-content-between align-items-center">
			<div class="col-12 col-lg-6 col-xl-4 mb-10 mb-lg-0">
				<div class="row mb-10">
					<div class="col">
						Площадь  <br>застройки
					</div>
					<div class="col-7 col-md-6 col-lg-8 c-title h-strong">
						7,2 <span class="c-title h-strong c-title--medium">га</span>
					</div>
				</div>
				<div class="row mb-10">
					<div class="col">
						Жилая <br> площадь
					</div>
					<div class="col-7 col-md-6 col-lg-8 c-title h-strong">
						110 000 <span class="c-title h-strong c-title--medium">м<sup>2</sup></span>
					</div>
				</div>
				<div class="row">
					<div class="col">
						Коммерческа  <br>недвижимость
					</div>
					<div class="col-7 col-md-6 col-lg-8 c-title h-strong">
						110 000 <span class="c-title h-strong c-title--medium">м<sup>2</sup></span>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 col-xl-6">
				<ul class="row c-list-info">
					<li>
						<img src="images/views/blocks/c-list-info/icon-1.svg">
						<p><span class="h-strong">2</span> школы</p>
					</li>
					<li>
						<img src="images/views/blocks/c-list-info/icon-2.svg">
						<p><span class="h-strong">2</span> школы</p>
					</li>
					<li>
						<img src="images/views/blocks/c-list-info/icon-3.svg">
						<p><span class="h-strong">2</span>  детских сада</p>
					</li>
					<li>
						<img src="images/views/blocks/c-list-info/icon-4.svg">
						<p><span class="h-strong">2</span> спорт-площадки</p>
					</li>
					<li>
						<img src="images/views/blocks/c-list-info/icon-5.svg">
						<p><span class="h-strong">2</span> супермаркетов</p>
					</li>
					<li>
						<img src="images/views/blocks/c-list-info/icon-6.svg">
						<p><span class="h-strong">2</span> отделение почты</p>
					</li>
					<li>
						<img src="images/views/blocks/c-list-info/icon-7.svg">
						<p><span class="h-strong">2</span> кафе и ресторанов</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="pt-13">
	<div class="container">
		<div class="row py-10 justify-content-between align-items-center">
			<div class="col-12 col-md-5 order-md-2 pt-4 pt-md-0 parallaxi" data-parent="row" data-speed="5" data-offset="-60">
				<h3 class="c-title c-title--medium mb-3">Квартиры</h3>
				<p class="c-text">
					Описание какие уютные и удобные квартиры, минимальные и макисмальные площади.  Описывает эмоции и удобства жизни в квартирах этого микрорайона
				</p>
			</div>
			<div class="col-12 col-md-7 order-first order-md-2 parallaxi" data-parent="row" data-speed="-5"> 
				<img src="images/common/page-index/image-2.png">
			</div>
		</div>
		<div class="row py-10 justify-content-between align-items-center">
			<div class="col-12 col-md-5 order-1 pt-4 pt-md-0 parallaxi" data-parent="row" data-speed="5" data-offset="-60">
				<h3 class="c-title c-title--medium mb-3">Безопасность</h3>
				<p class="c-text">
					Пишем о преимуществах охраны территории и контроле въезда/выезда Пишем о преимуществах охраны территории и контроле въезда/выезда
				</p>
			</div>
			<div class="col-12 col-md-7 parallaxi" data-parent="row" data-speed="-5">
				<img src="images/common/page-index/image-3.png">
			</div>
		</div>
	</div>
</section>
<section class="gallery pb-0 pb-sm-13">
	<div class="container">
		<div class="row row--secondary">
			<div class="col-6 col-sm-4 mb-5 mb-sm-0">
				<a href="images/common/page-index/image-3.png" data-fancybox="gallery" class="gallery__photo mb-11">
					<img src="images/common/page-index/image-3.png" class="h-image-cover">
				</a>
				<a href="images/common/page-index/image-3.png" data-fancybox="gallery" class="gallery__photo">
					<img src="images/common/page-index/image-3.png" class="h-image-cover">
				</a>
			</div>
			<div class="col-6 col-sm-4 mb-5 mb-sm-0 d-none d-sm-block">
				<a href="images/common/page-index/image-3.png" data-fancybox="gallery" class="gallery__photo gallery__photo--full mb-11">
					<img src="images/common/page-index/image-3.png" class="h-image-cover">
				</a>
			</div>
			<div class="col-6 col-sm-4 mb-5 mb-sm-0">
				<a href="images/common/page-index/image-3.png" data-fancybox="gallery" class="gallery__photo mb-11">
					<img src="images/common/page-index/image-3.png" class="h-image-cover">
				</a>
				<a href="images/common/page-index/image-3.png" data-fancybox="gallery" class="gallery__photo">
					<img src="images/common/page-index/image-3.png" class="h-image-cover">
				</a>
			</div>
		</div>
	</div>
</section>
<section class="pt-13">
	<div class="container">
		<div class="pt-15 py-sm-15 h-background-cover" style="background-image: url(images/common/page-index/bg-1.jpg);">
			<a href="" class="c-btn mx-auto c-btn--width-tertiary c-btn--secondary c-btn--height mt-15 mt-sm-0">Смотреть на генплане</a>
		</div>
	</div>
</section>
<section class="reviews py-10 py-md-14">
	<div class="container">
		<h3 class="c-title c-title--medium mb-0 mb-md-10 text-center">Истории жильцов</h3>
		<div class="swiper-container js-swiper-reviews py-10">
			<div class="swiper-wrapper">
				<?php for ($i=0; $i < 5; $i++) {  ?>
					<div class="swiper-slide reviews__slide" >
						<div class="c-review h-shadow" data-swiper-parallax-scale="0.7">
							<div class="c-review__header">
								<a href="https://www.youtube.com/watch?v=XQnzk334PtA" data-fancybox="reviews-1" class="c-review__image">
									<img src="images/views/sections/reviews/image.png" class="h-image-cover">
								</a>
								<div class="c-review__content pr-11 pt-11 pl-11 pr-sm-4 pt-sm-7 pl-sm-13">
									<h4 class="c-title c-title--small mb-2">Елена Петровна</h4>
									<p class="c-text c-text--small mb-0 mb-sm-5">Повар ресторана. Жилец м-рн Левобережный</p>
									<a href="https://www.youtube.com/watch?v=XQnzk334PtA" data-fancybox="reviews" class="c-review__link d-sm-flex align-items-center d-none">
										<span class="c-review__play mr-5"></span>
										<span>смотреть видео-отзыв</span>
									</a>
								</div>
							</div>
							<div class="c-review__body px-11 pb-11 pt-11 px-sm-5 pb-sm-10 pt-sm-2">
								<p class="c-text">
									Квартиры с большими окнами от 3,4 млн руб.
									выгода до 1,2 млн руб Квартиры с большими окнами от 3,4 млн руб.выгода до 1,2 млн рубКвартиры с большими окнами от 3,4 млн руб.
								</p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="reviews__arrow-block">
				<div class="swiper-button-prev c-arrow"></div>
				<div class="swiper-button-next c-arrow"></div>
			</div>
			

		</div>
	</div>
</section>
<section class="h-background-cover pt-10 pb-5 pb-md-0 pt-md-15 overflow-hidden position-relative">
	<img src="/images/common/page-index/bg-2.jpg" class="h-image-cover parallaxi" data-parent="h-background-cover" data-speed="2" data-offset="-30">
	<div class="c-background-lines c-background-lines--full z-index-1">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-3 h-100">
					<div class="c-background-lines__line c-background-lines__line--no-repeat" 
					style="background-image: url('/images/views/blocks/c-background-lines/line-section-primary.svg')"></div>
				</div>
				<div class="col-3 h-100">
					<div class="c-background-lines__line c-background-lines__line--no-repeat" 
					style="background-image: url('/images/views/blocks/c-background-lines/line-section-secondary.svg')"></div>
				</div>
				<div class="col-3 h-100">
					<div class="c-background-lines__line c-background-lines__line--no-repeat" 
					style="background-image: url('/images/views/blocks/c-background-lines/line-section-tertiary.svg')"></div>
				</div>
				<div class="col-3 h-100">
					<div class="c-background-lines__line c-background-lines__line--no-repeat" 
					style="background-image: url('/images/views/blocks/c-background-lines/line-section-quaternary.svg')"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container position-relative z-index-2">
		
		<h3 class="c-title c-title--medium mb-6 mb-lg-9 text-center h-text-color-secondary h-line-height">Надежность застройщика — Ваша гарантия</h3>
		<div class="row justify-content-around align-items-end">
			<div class="col-auto">
				<div class="c-in-number-primary">
					<span class="c-in-number-primary__header">лет на рынке</span>
					<span class="c-in-number-primary__body">17</span>
				</div>
			</div>
			<div class="col-auto">
				<div class="c-in-number-primary">
					<span class="c-in-number-primary__header">сдали домов</span>
					<span class="c-in-number-primary__body">32</span>
				</div> 
			</div>
			<div class="col-auto">
				<div class="c-in-number-primary">
					<span class="c-in-number-primary__header">ТОП застройщиков  <br>Твери</span>
					<span class="c-in-number-primary__body">3</span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-15">
	<div class="container">
		<div class="row justify-content-center mb-10 mb-md-16">
			<div class="col-9">
				<div class="row align-items-center justify-content-center">
					<div class="col-auto col-lg-5 mb-5 mb-lg-0 parallaxi" data-parent="row" data-speed="-2" data-offset="30">
						<img src="/images/common/page-index/image-4.png">
					</div>
					<div class="col-auto col-lg-7 parallaxi" data-parent="row" data-speed="2" data-offset="-70">
						<h4 class="c-title c-title--medium pl-0 pl-md-13 mb-3">Иван Иванович Иванов</h4>
						<p class="c-text pl-0 pl-md-13 mb-4 mb-md-10">Главный архитектор</p>
						<blockquote class="c-blockquote">
							Описание района примерно в 300 символов. Описание района примерно в 300 символов.  Описание района примерно в 300 символов.
						</blockquote>
					</div>
				</div>
			</div>

		</div>
		<div class="row justify-content-center mb-10 mb-md-15">
			<div class="col-12 col-md-9 col-lg-7">
				<h3 class="c-title c-title--medium mb-10 text-center h-line-height">Микрорайон Левобережный</h3>
				<div class="c-text h-letter-spacing h-line-height">
					<p>
						<span class="h-medium">What is Lorem Ipsum?</span>
						<br>
						<br>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.What is Lorem Ipsum?
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</p>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">

			<div class="col-12 col-md-9 col-lg-6">
				<h3 class="c-title c-title--medium mb-6 mb-lg-9 text-center  h-line-height">Запишитесь на экскурсию</h3>
				<div class="row row--secondary">
					<div class="col-12 col-sm-6 mb-11">
						<input type="text" name="" class="c-input" placeholder="Ваше имя*">
					</div>
					<div class="col-12 col-sm-6 mb-11">
						<input type="text" name="" class="c-input" placeholder="Ваше телефон*">
					</div>
					<div class="col-12 col-sm-6 mb-11 mb-sm-17">
						<input type="text" name="" class="c-input" placeholder="Дата записи*">
					</div>
					<div class="col-12 col-sm-6 mb-11 mb-sm-17">
						<input type="text" name="" class="c-input" placeholder="Время записи*">
					</div>
					<div class="col-12 col-sm-6 offset-md-6">
						<a href="" class="c-btn c-btn--primary"><span>Записаться на экскурсию</span></a>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<?php include 'template-parts/sections/footer-primary.php'; ?>
<?php include 'footer.php'; ?>