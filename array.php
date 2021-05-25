<?php
$odd_numbers = [1,3,5,7,9];
$even_numbers = [2,4,6,8,10];
$all_numbers = array_merge($odd_numbers, $even_numbers);
print_r ($all_numbers);
$numbers = [4,2,3,1,5];
sort($numbers);
print_r ($numbers);

$odd_numbers = [1,3,5,7,9];
$first_item = reset($odd_numbers);
echo $first_item;


$odd_numbers = [1,3,5,7,9];
$first_item = $odd_numbers[0];
echo $first_item;

$numbers = [1,2,3];
array_push($numbers, 4); // now array is [1,2,3,4];

// print the new array
print_r($numbers);

$numbers = [1,2,3,4];
array_pop($numbers); // now array is [1,2,3];

// print the new array
print_r($numbers);
$numbers = [4,2,3,1,5];
rsort($numbers);
print_r($numbers);
$numbers = [1,2,3,4,5,6];
print_r(array_slice($numbers, 3));



$numbers = [1,2,3,4,5,6];
print_r(array_slice($numbers, 3, 2));

$numbers = [1,2,3,4,5,6];
print_r(array_splice($numbers, 3, 2));
print_r($numbers);


$phone_numbers = [
    "Alex" => "415-235-8573",
    "Jessica" => "415-492-4856",
];

print_r($phone_numbers);
echo "Alex's phone number is " . $phone_numbers["Alex"] . "\n";
echo "Jessica's phone number is " . $phone_numbers["Jessica"] . "\n";
$phone_numbers = [
    "Alex" => "415-235-8573",
    "Jessica" => "415-492-4856",
];

$phone_numbers["Michael"] = "415-955-3857";

print_r($phone_numbers);

$phone_numbers = [
    "Alex" => "415-235-8573",
    "Jessica" => "415-492-4856",
];

if (array_key_exists("Alex", $phone_numbers)) {
    echo "Alex's phone number is " . $phone_numbers["Alex"] . "\n";
} else {
    echo "Alex's phone number is not in the phone book!";
}

if (array_key_exists("Michael", $phone_numbers)) {
    echo "Michael's phone number is " . $phone_numbers["Michael"] . "\n";
} else {
    echo "Michael's phone number is not in the phone book!";
}
$phone_numbers = [
    "Alex" => "415-235-8573",
    "Jessica" => "415-492-4856",
];

print_r(array_keys($phone_numbers));

$people = [
    "john_doe" => [
        "name" => "John",
        "surname" => "Doe",
        "age" => 25,
    ],
    "jane_doe" => [
        "name" => "Jane",
        "surname" => "Doe",
        "age" => 25,
    ]
];

print_r($people);

// Array
// (
//     [john_doe] => Array
//         (
//             [name] => John
//             [surname] => Doe
//             [age] => 25
//         )
//     [jane_doe] => Array
//         (
//             [name] => Jane
//             [surname] => Doe
//             [age] => 25
//         )
// )

print_r($people['john_doe']['name']);
?>
