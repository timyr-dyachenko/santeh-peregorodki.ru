<? require("header-first.php"); ?>

    <title>Сантехнические перегородки премиум</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

<? require("header-last.php"); ?>
<nav class="navbar navbar-expand-lg bg-gray fixed-top  navbar-light ">
    <div class="container">
      <a class="navbar-brand" href="./index.php"><img src="assets/img/logo.png" alt=""> 
      <span>МИРМЕБ</span>
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarResponsive">
        <ul class="navbar-nav ml-auto mr-auto">
          
          <li class="nav-item">
            <a class="nav-link" href="./order.php">Заказать расчет</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Главная
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./restroom.php">Туалетные</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./shower.php">Душевые</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./children.php">Детские</a>
          </li>

          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ещё</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                
                <a class="dropdown-item" href="./pissuarnie.php">Писуарные</a>
                <a class="dropdown-item active" href="./restroom-premium.php">Премиум</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tel:+74993944613"><b>+7 (499) 394-46-13</b> </a>
          </li>
        </ul>
      </div>
    </div>
</nav>
<?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('./restroom-premium', $path);
$first_part = $components[1];
?>
<section class="in-block1 bg-section-dark">
	<div class="container">
		<h2 class="text-center">Премиум перегородки</h2>
		<div class="row">
			<div class="col-md-6"><img src="assets/img/premium1.jpg" alt="" class="rounded mx-auto d-block img-fluid"></div>
			<div class="col-md-6">
				<p>Сантехнические перегородки – это современные конструкции, предназначенные для организации душевых и туалетов. Их задача – разграничивать помещение, заменяя собой громоздкие и ненужные в этих условиях бетонные стены. </p>
				<p>Главная отличительная особенность этих конструкций – это их простота, однако сантехнические перегородки имеют массу и других преимуществ, помимо того, что являются легкими. </p>
				<p>Второй их плюс – это универсальность. </p>
				<p>Эти перегородки подходят для помещений любых типов, а конструктивное и дизайнерское их разнообразие позволяет подобрать самый оптимальный для конкретного помещения вариант.</p>
				<h4 class="text-center"><b>от 7500 р/м.кв.</b></h4>
			</div>
		</div>
	</div>
</section>


<div class="section spec bg-section-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="text-center">Характеристики:</h2>
				<h5>Каркас перегородки</h5>
				<p>без профильное крепление  </p>	
				<p>цвет – металлик / хром </p>	
				<h5>Заполнение перегородки</h5>
				<p>монолитный пластик HPL / компакт ламинат 12 мм </p>	
				<p>цвет – серый, белый, бежевый</p>	
				<h5>Фурнитура сантехническая</h5>
				<p>серия design –  матовый хром</p>	
				<p>серия pba 500 - нержавеющая сталь  </p>	
				<h5>Опоры перегородки</h5>
				<p>серия pba 500 - нержавеющая сталь</p>
				<p>цвет – металлик / хром</p>
				 
			</div>
			<div class="col-md-6">
				<h2 class="text-center">Материалы:</h2>
				<p>Компакт пластик – это композитный листовой материал толщиной 12 мм, получаемый при помощи метода горячего прессования при высокой температуре, отличается высоким качеством поверхности, гаммой расцветок, износостойкостью, ударопрочностью и неподвержен воздействию влаги. Монолитный пластик HPL применяется для изготовления как сантехнических, так и душевых перегородок, ограждений и рассчитан на высокие эксплутационные нагрузки. Высокое качество материала и современный дизайн позволяют использовать компакт пластик HPL в перегородках премиум класса.</p>
				<p>Каркас перегородок изготавливается из алюминиевого профиля (ГОСТ 4784-97) Алюминий - металл серебристо-белого цвета, применяется как конструкционный материал. Основные его достоинства: легкость, износостойкость и долговечность. Для изготовления перегородок применяется система из 6 различных видов алюминиевых профилей, обеспечивающая жесткость конструкции. В стандартном исполнении используется анодированный алюминиевый профиль или окрашенный по каталогу, возможна покраска.</p>
			</div>
		</div>
	</div>
</div>


<? require("size.php"); ?>


<section class="photos">
	<div class="container">
		<h2 class="text-center border-top">Фото перегородок</h2>
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
		<div class="carousel-item active">
		<img src="assets/img/premium1.jpg" class="d-block  " alt="...">
		</div>
		<div class="carousel-item">
		<img src="assets/img/premium2.jpg" class="d-block  " alt="...">
		</div>
		<div class="carousel-item">
		<img src="assets/img/premium3.jpg" class="d-block  " alt="...">
		</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
		</div>
	</div>
</section>


<section class="complectation">
	<div class="container text-center">
		<h2>Комплектация изделия</h2>
		<img src="assets/img/compl-premium.jpg" alt="" class="rounded mx-auto d-block img-fluid">
	</div>
</section>

<? require("call-form.php"); ?>

<? require("footer.php"); ?>






