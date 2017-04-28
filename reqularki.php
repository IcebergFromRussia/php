<?php
$page = file_get_contents('https://www.wildberries.ru/catalog/elektronika/telefony-i-gadzhety/smartfony-mobilnye-telefony');
$pattern = "<a class=\"ref_goods_n_p\" href=\".+\">.<div id=\".*\" class=\"l_class\">.*</div>.*<strong class=\"brand-name\">.*</strong>.*<span class=\"goods-name\">.*</span>.*<span class=\"price\">.*</span>";
preg_match_all($page,$pattern,$matches);
echo var_dump($matches);
$pattern ="<a";
preg_match($page,$pattern,$matches);
echo var_dump($matches);
?>