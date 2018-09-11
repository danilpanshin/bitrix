<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");
?>
<p>
В личном кабинете Вы можете проверить текущее состояние корзины, ход выполнения
Ваших заказов, просмотреть или изменить личную
информацию. 
</p>

<p><strong>Личная информация</strong></p>
<p><a href="/personal/profile/">Изменить регистрационные данные</a></p>

<p><strong>Заказы</strong></p>

<p><a href="/personal/cart/">Посмотреть содержимое корзины</a></p>
<p><a href="/personal/order/?filter_history=Y">Посмотреть историю заказов</a></p>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>