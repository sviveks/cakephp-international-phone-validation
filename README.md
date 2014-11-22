libphonefromcountryname
=======================

Validating and formatting phone numbers from country name and phone number using libphonenumber api . It is useful for request type validation for mobile aps and cakephp as backend framework
<br>

<b style="color:brown">Installing using composer.</b> <br>
1.check the composer.json is inside your directory or not.<br>
2.Verify the presence of <br>
<div style="color:#FFA500">
<pre style="color:orange">{
    "require": {
        "giggsey/libphonenumber-for-php": "~7.0"

    }
}
</pre>
<div>
<br>
3.Download composer from  <b><a style="color:#FFA500" href="https://getcomposer.org/">composer </a></b><br>

4.install composer.phar into the required directory.<br><br>
<b>.....Installation Command...</b>
<pre>php composer.phar install</pre><br>
<b>REF:</b> <a style="color:#FFA500" href="https://getcomposer.org/doc/00-intro.md#using-composer">Here </a>
<br>

5.After installation you will get all required files in vendor/ directory..



<br><br>
<b style="color:#470e07">////////   After all is done .. //////////////</b><br>

1.Import LibValidation class into app controller.<br>

<pre>App::import('Vendor','LibValidation/verifyNumber');</pre><br>

2.verify your phone number using country name and phone number <br>
<pre>
$verify=new verifyNumber();
$verify->verifyPhone($country,$phone);</pre>

<br>
3.Prinit the response to get the status is 1 or 0 and the message..<br>

<b>Example Response</b>
<pre>
array(
	'valid' => (int) 1,
	'message' => '+91xxxxxxxxxx'
)
</pre>
<br>
<b>Note:</b>if phone number is valid , message contain formatted phone number..


///////////////*********  Happy Coding   ***********//////////////////
