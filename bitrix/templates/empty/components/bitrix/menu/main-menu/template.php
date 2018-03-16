<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<div class="container">
	<div class="row nav">
                <div class="col-sm-3 logo">
                    <a href="/"><img src="data:img/png;base64,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" alt=""></a>
                </div>
                <div class="col-md-8 m-menu">
                	
                	<a class="main-item" href="javascript:void(0);" tabindex="1" >меню</a> 

<ul class="sub-menu"> 

	<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?> 
</ul> 
<style>
.m-menu{
	text-align: right;
}
.sub-menu 
{ 
   display: none; 
} 
.main-item:focus ~ .sub-menu, 
.main-item:active ~ .sub-menu, 
.sub-menu:hover 
{ 
   display: block; 
} </style>
                	
   					
  					
                </div>
                <div class="main-menu">
                <?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<div class="col-sm-1"><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></div>
	<?else:?>
		<div class="col-sm-1"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></div>
	<?endif?>
	
<?endforeach?>
</div>
                                <div class="col enter"><a href="#">войти </a><a href="">en </a><a href="#">*-*</a></div>
            </div>
</div>




<?endif?>