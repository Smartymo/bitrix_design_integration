<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("��������");
?><p>
	 ���������� � ����� ������������ � �������� ���������������� ������������ �� �������� �������� � ������� ������ (�� �������, ���������� ������������ ������� �� �������� ������ � ��� �����).
</p>
<p>
	 �� ������ ���������� � ��� �� ��������, �� ����������� ����� ��� ������������ � ������� � ����� �����. ����� ���� ������ ��� � �������� �� ��� ���� �������.
</p>
<h2>��������</h2>
<ul>
	<li>�������/����:
	<ul>
		<li><b>(495) 212-85-06</b></li>
	</ul>
 </li>
	<li>��������:
	<ul>
		<li><b>(495) 212-85-07</b></li>
		<li><b>(495) 212-85-08</b></li>
	</ul>
 </li>
</ul>
<h2>Email</h2>
<ul>
	<li><a href="mailto:info@example.ru">info@example.ru</a> � ����� �������</li>
	<li><a href="mailto:sales@example.ru">sales@example.ru</a> � ������������ ���������</li>
	<li><a href="mailto:marketing@example.ru">marketing@example.ru</a> � ���������/�����������/PR</li>
</ul>
<h2>�������� �����</h2>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"",
	Array(
		"EMAIL_TO" => "test@site.ru",
		"EVENT_MESSAGE_ID" => array("7"),
		"OK_TEXT" => "�������, ���� ��������� �������.",
		"REQUIRED_FIELDS" => array("NAME","EMAIL","MESSAGE"),
		"USE_CAPTCHA" => "Y"
	)
);?>
<h2>���� � ������</h2>
<p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:map.google.view",
	".default",
	Array(
		"CONTROLS" => array(0=>"LARGE_MAP_CONTROL",1=>"MINIMAP",2=>"HTYPECONTROL",3=>"SCALELINE",),
		"INIT_MAP_TYPE" => "NORMAL",
		"KEY" => "ABQIAAAAOSNukcWVjXaGbDo6npRDcxS1yLxjXbTnpHav15fICwCqFS-qhhSby0EyD6rK_qL4vuBSKpeCz5cOjw",
		"MAP_DATA" => "a:3:{s:10:\"google_lat\";s:7:\"55.7383\";s:10:\"google_lon\";s:7:\"37.5946\";s:12:\"google_scale\";i:13;}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "600",
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",)
	)
);?>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>