<?php

echo "Write action number\n";
echo "===========\n";
echo "1. Add company;\n";
echo "2. Show companys info;\n";
echo "===========\n";
$number = readline("Enter number: ");

if($number==1) {
echo "===========\n";
echo "Add company;\n";
echo "===========\n";
$data = fopen("data.csv", "a") or die("Unable to open file!");

$id = readline("Enter company id: ");
fwrite($data, "\n");
fwrite($data, $id);
fwrite($data, ';');

$name = readline("Enter company name: ");
fwrite($data, $name);
fwrite($data, ';');

$registration_code = readline("Enter company registration_code: ");
fwrite($data, $registration_code);
fwrite($data, ';');

$email = readline("Enter company email: ");
fwrite($data, $email);
fwrite($data, ';');

$phone = readline("Enter company phone: ");
fwrite($data, $phone);
fwrite($data, ';');

$comment = readline("Enter company comment: ");
fwrite($data, $comment);

fclose($data);
}

else if($number==2) {
echo "===========\n";
echo "Edit company;\n";
echo "===========\n";

$handle = fopen("data.csv", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        echo $line;
    }

    fclose($handle);
}
}

else {
	echo "Bad number";
}

?># PHP-CLI-application-for-companies-register
