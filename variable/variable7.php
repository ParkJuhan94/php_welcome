<html>
<body>
<?php
$title = 'subject';
$$title = 'PHP tutorial';
echo $subject;

/*
위의 코드를 보면 변수 $title의 값이 subject이다. 그런데 5행에 나타나는 '$$title'에는 '$'가 두번 표시되어 있다. 이것은 문자열 'PHP tutorial'이 변수 $title의 값이 아니라 변수 $subject의 값이라는 의미다. 변수의 이름을 동적으로 만들 수 있다는 점은 PHP가 가진 유연함을 보여준다. 
*/
?>
</body>
</html>