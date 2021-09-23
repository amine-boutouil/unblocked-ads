# unblocked-ads
adblock and such softwares or extentions cannot detect or block your ads anymore using Php

## How it works

Using a random given name of class and div, with [PHP](https://www.php.net/).

```php
#function that generates the name of class
function generateRandomString($length = 25) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
```
it generates random string, so every time the client block or filter the ad manually at the next refresh of the page it will appear once again with a different name of the class ;)

## Usage

```php
#Parameters ~ Change those with what works for you and it's all done!
$ad_image = "https://www.exemple.tld/image.png";
$ad_name = "AD NAME";
$ad_url = "https://goodpaingad.tld";
```

## License
[GNU General Public License v3.0](https://choosealicense.com/licenses/gpl-3.0/)
