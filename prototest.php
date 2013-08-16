<?php
//a testing file tell you how to use a generated class

require_once('tanx-bidding.php');
require_once('Person.php');
$person = new Person;
$person->name = "fangming";
$person->id = 123456;
$person->email = "buptbill220@gmail.com";
$person->add_pt(Person::PhoneType_MOBILE);
$person->add_pt(Person::PhoneType_HOME);
for ($i = 0; $i <= 1; ++$i) {
	$pb = new Person_PhoneNumber;
	$pb->number = "test". $i;
	$pb->type = Person::PhoneType_WORK;
	$person->add_phone($pb);
}
echo $person->DebugString();
$str = $person->SerializeAsString();
$person1 = new Person;
$re = $person1->ParseFromString($str);
if ($re !== false)	echo $person1->DebugString();
else echo "ParseFromString failed!\n";
?>
