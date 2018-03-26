<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$DAY_WEEK_RUS = array('Пн', 'Вт', 'Ср','Чт', 'Пт', 'Сб', 'Вс');
$arResult['CALENDAR']=array();
 
function weekOfMonth($date) {
    //Get the first day of the month.
    $firstOfMonth = strtotime(date("Y-m-01", $date));
    //Apply above formula.
    return intval(date("W", $date)) - intval(date("W", $firstOfMonth)) + 1;
}


foreach($arResult['ITEMS'] as $code => $arItem){


$arDtTime = explode(' ', $arItem['DATE_ACTIVE_TO']);
$numWeek = weekOfMonth(strtotime($arDtTime[0]));
$arTime = explode(':', $arDtTime[1]);
$dayWeek = date('N', strtotime($arDtTime[0]));
//$dayWeek = ($dayWeek==1?7:$dayWeek-1);
$dayMounth = explode('.', $arDtTime[0]);
//$dayWeekRus = $date('D', strtotime($arDtTime[0]));

$arItem['TIME_TO'] = $arTime[0].':'.$arTime[1];
$arItem['WEEK'] = $numWeek;
$arItem['DAY_WEEK'] = $dayWeek;
$arItem['DAY_MONTH'] = $dayMounth[0];
$arItem['DAY_WEEK_RUS'] = $DAY_WEEK_RUS[$dayWeek-1];//$dayWeekRus[0];

if(!isset($arResult['CALENDAR'][$numWeek])) $arResult['CALENDAR'][$numWeek] = array();
$arResult['CALENDAR'][$numWeek][$dayWeek] = $arItem;
$arResult['ITEMS'][$code] = $arItem;


ksort($arResult['CALENDAR']);
}
?>
<script>
		$(document).ready(function(){
		  $('.number-day:not(.number-empty)').on('mouseover', function(){
		  	var img_src = $(this).data('src'), $bg_img = $('.all-day .bg-img');
		  	var img = new Image();
		  	img.onload = function(){

		  		console.log('loaded');
		  		$bg_img.css({
		  			'background-image': 'url(' + img_src + ')'
		  		});
		  		$('.all-day').addClass('active');
		  	};
		  	img.src = img_src;
		  }).on('mouseout', function(){
		    $('.all-day').removeClass('active');
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
		<? foreach($arResult['CALENDAR'] as $arWeek){?>
				<div class="week-row clearfix">
				<?for($n=1;$n<=7;$n++){
					if(isset($arWeek[$n])){
						$arItem = $arWeek[$n];
					?>		
						<div class="number-day" data-src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">
							<a href="<?=$arItem['DETAIL_PAGE_URL']?>">
								<div class="time-event">
									<div class="day-month"><?=$arItem['DAY_MONTH']?></div>
									<div class="day-week-rus"><?=$arItem['DAY_WEEK_RUS']?></div>
								</div>
								<span class="rightwiue">
									<div class="time-ind"><?=$arItem['TIME_TO']?></div>
									<div class="name"><?=$arItem['NAME']?></div>
								</span>
							</a>
							<a class="url" href="#">Купить билеты</a>
						</div>
				<?}else{?>
				<div class="number-day number-empty"></div>
			<?}
		}?>
		</div>
		<?}?>
	</div>
</div>

