libphonefromcountryname
=======================

Validating and formatting phone numbers from country name and phone number using libphonenumber api . It is useful for request type validation for mobile aps and cakephp as backend framework



1.check the composer.json is inside your directory or not.
2.Verify the presence of 


<pre style="color:orange">{
    "require": {
        "giggsey/libphonenumber-for-php": "~7.0"

    }
}
</pre>
3.Download composer from https://getcomposer.org/

4.install composer.phar into the required directory.
.....installation command...
php composer.phar install<br>
REF:---> https://getcomposer.org/doc/00-intro.md#using-composer

5.After installation you will get all required files in vendor/ directory..




////////   After all is done .. //////////////

1.Import LibValidation class into app controller.

App::import('Vendor','LibValidation/verifyNumber');

2.verify your phone number using country name and phone number 

$verify=new verifyNumber();
$verify->verifyPhone($country,$phone);


3.Prinit the response to get the status is 1 or 0 and the message..

example.
array(
	'valid' => (int) 1,
	'message' => '+91xxxxxxxxxx'
)

if phone number is valid , message contain formatted phone number..


///////////////*********  Happy Coding   ***********//////////////////
