$text = "احمد,خالد,محمد";
$fruits = explode(",", $text);
print_r($fruits); // Array ( [0] => احمد [1] => خالد [2] => محمد )

$text = "    نص مع فراغات    ";
$trimmedText = trim($text);
echo $trimmedText; // نص مع فراغات


$firstName = "أحمد";
$lastName = "محمد";
$fullName = $firstName . " " . $lastName;
echo $fullName; // أحمد محمد