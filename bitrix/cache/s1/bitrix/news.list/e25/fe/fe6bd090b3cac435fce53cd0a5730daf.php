<?
if($INCLUDE_FROM_CACHE!='Y')return false;
$datecreate = '001522051527';
$dateexpire = '001558051527';
$ser_content = 'a:2:{s:7:"CONTENT";s:4199:"<script>
		$(document).ready(function(){
		  $(\'.number-day:not(.number-empty)\').on(\'mouseover\', function(){
		  	var img_src = $(this).data(\'src\'), $bg_img = $(\'.all-day .bg-img\');
		  	var img = new Image();
		  	img.onload = function(){

		  		console.log(\'loaded\');
		  		$bg_img.css({
		  			\'background-image\': \'url(\' + img_src + \')\'
		  		});
		  		$(\'.all-day\').addClass(\'active\');
		  	};
		  	img.src = img_src;
		  }).on(\'mouseout\', function(){
		    $(\'.all-day\').removeClass(\'active\');
		  });
		});
	</script>

	<style>
	#calendar.active {	
	}
	#calendar {
		background-color: #1e1e1e;
		position: relative;
	}
	.header-day-week {
		position: absolute;
		left: 0;
		right: 0;
		bottom: 100%;
	}
	.all-day {
		position: relative;
	}
	.all-day .bg-img {
		position: absolute;
		left: 0;
		right: 0;
		bottom: 0;
		top: 0;
		z-index: 0;
		opacity: 0;
		transition: opacity 0.2s linear;
		background-size: cover;
		background-position: center;
	}
	.all-day.active .bg-img {
		opacity: .4;
	}
	.week-row {
		position: relative;
		z-index: 1;
	}
	</style>




<div id="calendar">
	<div class="header-day-week">
		<div class="row">
			<div class="col">пн</div>
			<div class="col">вт</div>
			<div class="col">ср</div>
			<div class="col">чт</div>
			<div class="col">пт</div>
			<div class="col">сб</div>
			<div class="col">вс</div>
		</div>
	</div>
	<div class="all-day">
		<div class="bg-img" style=""></div>
						<div class="week-row clearfix">
						
						<div class="number-day" data-src="/upload/iblock/ac3/ac3c3324dafccfcba3b087a345d4890c.jpg">
							<a href="/repertuar/opera/traviata/">
								<div class="time-event">
									<div class="day-month">26</div>
									<div class="day-week-rus">Пн</div>
								</div>
								<span class="rightwiue">
									<div class="time-ind">18:00</div>
									<div class="name">Травиата</div>
								</span>
							</a>
							<a class="url" href="#">Купить билеты</a>
						</div>
						
						<div class="number-day" data-src="/upload/iblock/f59/f59317dadfcb1cd4a095194ba0e28926.jpg">
							<a href="/repertuar/opera/shchelkunchik/">
								<div class="time-event">
									<div class="day-month">27</div>
									<div class="day-week-rus">Вт</div>
								</div>
								<span class="rightwiue">
									<div class="time-ind">14:05</div>
									<div class="name">Щелкунчик</div>
								</span>
							</a>
							<a class="url" href="#">Купить билеты</a>
						</div>
						
						<div class="number-day" data-src="/upload/iblock/d8e/d8ec640938b2066e463987cd579cad88.jpg">
							<a href="/repertuar/traviata2/">
								<div class="time-event">
									<div class="day-month">28</div>
									<div class="day-week-rus">Ср</div>
								</div>
								<span class="rightwiue">
									<div class="time-ind">13:59</div>
									<div class="name">Травиата</div>
								</span>
							</a>
							<a class="url" href="#">Купить билеты</a>
						</div>
						
						<div class="number-day" data-src="/upload/iblock/364/3643d680b20e0721f723c0244859df19.jpg">
							<a href="/repertuar/shchelkunchik2/">
								<div class="time-event">
									<div class="day-month">29</div>
									<div class="day-week-rus">Чт</div>
								</div>
								<span class="rightwiue">
									<div class="time-ind">12:34</div>
									<div class="name">Щелкунчик</div>
								</span>
							</a>
							<a class="url" href="#">Купить билеты</a>
						</div>
						
						<div class="number-day" data-src="/upload/iblock/182/182d7a4c203a17bdb35d25021e9a54ec.jpg">
							<a href="/repertuar/opera/romeo-i-dzhuletta/">
								<div class="time-event">
									<div class="day-month">30</div>
									<div class="day-week-rus">Пт</div>
								</div>
								<span class="rightwiue">
									<div class="time-ind">12:19</div>
									<div class="name">Ромео и Джульетта</div>
								</span>
							</a>
							<a class="url" href="#">Купить билеты</a>
						</div>
								<div class="number-day number-empty"></div>
							<div class="number-day number-empty"></div>
					</div>
			</div>
</div>

";s:4:"VARS";a:2:{s:8:"arResult";a:7:{s:2:"ID";s:1:"1";s:14:"IBLOCK_TYPE_ID";s:9:"repertuar";s:13:"LIST_PAGE_URL";s:21:"#SITE_DIR#/repertuar/";s:15:"NAV_CACHED_DATA";N;s:4:"NAME";s:18:"Репертуар";s:7:"SECTION";b:0;s:8:"ELEMENTS";a:5:{i:0;s:2:"10";i:1;s:1:"8";i:2;s:1:"5";i:3;s:1:"3";i:4;s:1:"1";}}s:18:"templateCachedData";a:3:{s:9:"frameMode";b:1;s:8:"__NavNum";i:1;s:17:"__currentCounters";a:1:{s:28:"bitrix:system.pagenavigation";i:1;}}}}';
return true;
?>