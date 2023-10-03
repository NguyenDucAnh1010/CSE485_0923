<?php
    echo "bài 1";
    echo '<br/>';
    $arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
    $tong = $arrs[0];
    $tich = $arrs[0];
    $hieu = $arrs[0];
    $thuong = $arrs[0];

    for ($i = 1; $i < count($arrs); $i++) {
        $tong += $arrs[$i];
        $tich *= $arrs[$i];
        $hieu -= $arrs[$i];
        $thuong /= $arrs[$i];
    }
    $text = <<<TEXT
    Tổng các phần tử = 2 + 5 + 6 + 9 + 2 + 5 + 6 + 12 + 5 = $tong
    Tích các phần tử = 2 * 5 * 6 * 9 * 2 * 5 * 6 * 12 * 5 = $tich
    Hiệu các phần tử = 2 - 5 - 6 - 9 - 2 - 5 - 6 - 12 - 5 = $hieu
    Thương các phần tử = 2 / 5 / 6 / 9 / 2 / 5 / 6 / 12 / 5 = $thuong
    TEXT;
    echo nl2br($text);
    echo '<br/><br/>';

    echo "bài 2";
    echo '<br/>';
    $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
    $text = <<<TEXT
    “Màu <span style="color:red">$arrs[0]</span> là màu yêu thích của Anh, <span style="color:red">$arrs[3]</span> là màu yêu thích của Sơn, <span style="color:red">$arrs[2]</span> là màu yêu
    thích của Thắng, còn màu yêu thích của tôi là màu <span style="color:red">$arrs[3]</span>"
    TEXT;
    echo nl2br("<em>$text</em>");
    echo '<br/><br/>';

    echo "bài 3";
    echo '<br/>';
    $arrs = ['PHP ', 'HTML', 'CSS', 'JS'];
    echo "<table style=\"border-collapse: collapse;\">";
    echo "<tr><th style=\"border: 3px solid black;\">Tên khóa học</th></tr>";

    $i = 1;
    foreach ($arrs as $subject) {
        echo "<tr>";
        echo "<td style=\"border: 3px solid black;\">" . $subject . "</td>";
        echo "</tr>";
        $i++;
    }

    echo "</table>";
    echo '<br/><br/>';

    echo "bài 4";
    echo '<br/>';
    $arrs = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" =>
    "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" =>
    "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon", "Spain" => " Madrid", "Sweden" => "Stockholm", "United
    Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech
    Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" =>
    "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland " => "Warsaw");
    echo "<em>";
    foreach ($arrs as $country => $capital) {
        echo "Thủ đô của {$country} là {$capital}.<br>";
    }
    echo "</em>";
    echo '<br/><br/>';

    echo "bài 5";
    echo '<br/>';
    $arrs = $a = [
        'a' => ['b' => 0,'c' => 1],
        'b' => ['e' => 2,'o' => ['b' => 3]]
        ];
    $valueB = $a['b']['o']['b'];
    $valueC = $a['a']['c'];
    $infoA = $a['a'];
    echo "$valueB<br>";
    echo "$valueC<br>";
    print_r($a['a']);
    echo '<br/><br/>';

    echo "bài 6";
    echo '<br/>';
    $keys = array(
        "field1" => "first",
        "field2" => "second",
        "field3" => "third"
    );
    
    $values = array(
        "field1value" => "dinosaur",
        "field2value" => "pig",
        "field3value" => "platypus"
    );
    
    $keysAndValues = array_combine(array_values($keys), array_values($values));
    echo '$keysAndValues = array(<br/>';
    foreach ($keysAndValues as $key => $value) {
        echo '"'.$key.'"=>"'.$value.'",<br/>';
    }
    echo ')';
    echo '<br/><br/>';

    echo "bài 7";
    echo '<br/>';
    $array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];

    foreach ($array as $number) {
        if ($number >= 100 && $number <= 200 && $number % 5 === 0) {
            echo $number . " ";
        }
    }
    echo '<br/><br/>';

    echo "bài 8";
    echo '<br/>';
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

    $maxLengthString = $array[0];
    $minLengthString = $array[0];

    foreach ($array as $string) {
        $length = strlen($string);
        
        if ($length > strlen($maxLengthString)) {
            $maxLengthString = $string;
        }
        
        if ($length < strlen($minLengthString)) {
            $minLengthString = $string;
        }
    }

    echo "<em>Chuỗi lớn nhất là $maxLengthString, độ dài = " . strlen($maxLengthString) . "<br/>";
    echo "Chuỗi nhỏ nhất là $minLengthString, độ dài = ".strlen($minLengthString)."</em><br/>";
    echo '<br/><br/>';

    echo "bài 9";
    echo '<br/>';
    function convertToLowercase($array)
    {
        $result = [];

        foreach ($array as $element) {
            if (is_string($element)) {
                $convertedElement = strtolower($element);
                $result[] = $convertedElement;
            } else {
                $result[] = $element;
            }
        }

        return $result;
    }

    $arr1 = ['1', 'B', 'C', 'E'];
    $arr2 = ['a', 0, null, false];

    $convertedArr1 = convertToLowercase($arr1);
    $convertedArr2 = convertToLowercase($arr2);

    print_r($convertedArr1);
    echo '<br/>';
    print_r($convertedArr2);
    echo '<br/><br/>';

    echo "bài 10";
    echo '<br/>';
    function convertToUppercase($array)
    {
        $result = [];

        foreach ($array as $element) {
            if (is_string($element)) {
                $convertedElement = strtoupper($element);
                $result[] = $convertedElement;
            } else {
                $result[] = $element;
            }
        }

        return $result;
    }

    $convertedArr3 = convertToUppercase($arr1);
    $convertedArr4 = convertToUppercase($arr2);

    print_r($convertedArr3);
    echo '<br/>';
    print_r($convertedArr4);
    echo '<br/><br/>';

    echo "bài 11";
    echo '<br/>';
    $array = array(1, 2, 3, 4, 5);

    array_splice($array, 2, 1);

    print_r($array);
    echo '<br/><br/>';

    echo "bài 12";
    echo '<br/>';
    $numbers = [
        'key1' => 12,
        'key2' => 30,
        'key3' => 4,
        'key4' => -123,
        'key5' => 1234,
        'key6' => -12565,
    ];
    
    $firstElement = reset($numbers);
    $lastElement = end($numbers);
    
    $maximum = max($numbers);
    $minimum = min($numbers);
    $sum = array_sum($numbers);
    
    $ascendingValues = $numbers;
    asort($ascendingValues);
    
    $descendingValues = $numbers;
    arsort($descendingValues);
    
    $ascendingKeys = $numbers;
    ksort($ascendingKeys);
    
    $descendingKeys = $numbers;
    krsort($descendingKeys);
    
    echo "Phần tử đầu tiên: $firstElement<br>";
    echo "Phần tử cuối cùng: $lastElement<br>";
    echo "Số lớn nhất: $maximum<br>";
    echo "Số nhỏ nhất: $minimum<br>";
    echo "Tổng các giá trị: $sum<br>";
    
    echo "Mảng sắp xếp theo chiều tăng giá trị:<br>";
    print_r($ascendingValues);
    echo "<br>";
    
    echo "Mảng sắp xếp theo chiều giảm giá trị:<br>";
    print_r($descendingValues);
    echo "<br>";
    
    echo "Mảng sắp xếp theo chiều tăng key:<br>";
    print_r($ascendingKeys);
    echo "<br>";
    
    echo "Mảng sắp xếp theo chiều giảm key:<br>";
    print_r($descendingKeys);
    echo '<br/><br/>';

    echo "bài 13";
    echo "<br>";
    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

    $average = array_sum($numbers) / count($numbers);

    $greaterThanAverage = [];
    foreach ($numbers as $number) {
        if ($number > $average) {
            $greaterThanAverage[] = $number;
        }
    }

    $lessThanOrEqualAverage = [];
    foreach ($numbers as $number) {
        if ($number <= $average) {
            $lessThanOrEqualAverage[] = $number;
        }
    }

    echo "Giá trị trung bình của mảng: $average<br>";

    echo "Các số lớn hơn giá trị trung bình: ";
    foreach ($greaterThanAverage as $number) {
        echo "$number ";
    }
    echo "<br>";

    echo "Các số nhỏ hơn hoặc bằng giá trị trung bình: ";
    foreach ($lessThanOrEqualAverage as $number) {
        echo "$number ";
    }
    echo '<br/><br/>';

    echo "bài 14";
    echo "<br>";
    $array1 = [
        [77, 87],
        [23, 45]
    ];
    $array2 = [
        'giá trị 1', 'giá trị 2'
    ];

    $result = [];

    for ($i = 0; $i < count($array1); $i++) {
        $result[$i] = array_merge([$array2[$i]], $array1[$i]);
    }

    print_r($result);
    echo '<br/><br/>';
?>