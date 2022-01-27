<?php

$a = 'Интересные факты о морях
♦ Самое большое море в мире — Саргассово: оно единственное не имеет берегов. Его площадь всё время колеблется между 6 и 7 миллионами км2, что примерно в 2,5 раза больше площади Казахстана. К слову, своим названием Саргассово море обязано водорослям саргассум, покрывающим его поверхность. В местных водах их более 10 миллионов тонн.
♦ Красное море является самым солёным в мире: в одном литре его воды содержится 41 грамм солей — этот показатель на треть превышает среднее значение Мирового океана. Кстати, красное море также известно, как самое тёплое: оно прогревается до +30 °С, зимой остывает, но не ниже +20 °С.
♦ Каспийское море, в которое впадает 130 рек — крупнейший на Земле замкнутый
водоём, не имеющий сообщение с другими морями и океанами. К слову, из-за
особенностей его геологического строения многие учёные считают, что правильнее было бы считать Каспийское море бессточным озером.
♦ Первым названием Чёрного моря в переводе с древнегреческого языка был
«Негостеприимное море». В этом море жизнь существует только в верхнем слое воды, поскольку глубже воды слишком насыщены сероводородом. Видовое разнообразие — 250 представителей фауны. А ещё здесь обитает смертельно опасная рыба, выделяющая яд — морской дракончик.
♦ В Средиземном море обитает более 9 тысяч видов различных живых существ. Оно омывает большее количество стран, чем какое-либо другое — целых двадцать две.
♦ Самым глубоким морем считается Филиппинское, потому что в его акватории располагается Марианская впадина: её глубина составляет 10 944 метра. Средняя глубина Филиппинского моря — 4 108 метра. Кроме того, это море является вторым в мире по величине. 
♦ Азовское море, омывающее юго-восток Украины и юго-запад России, считается самым мелководным: его максимальная глубина всего лишь 14 метров, а средняя — 7,4 метра. Часто из-за светящихся микроорганизмов, обитающих в местных водах, здесь можно наблюдать светящиеся волны.
♦ Самым холодным морем Земли принято считать море Уэделла: на поверхности температура редко поднимается выше – 2,5°С. Этот водоём омывает берега Антарктиды и относится к атлантическому сектору Южного океана. А ещё у этого моря есть интересная особенность – высокая прозрачность.';

$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];

if ($url == '/news.php') {
    echo $a;
}



?>