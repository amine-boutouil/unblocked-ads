<?php
#####################################################################
##                                                                 ##
##                Undetected and unremovable ad                    ##
##                                using php                        ##
##                       By AMINE BOUTOUIL                         ##
##           *** https://github.com/amine-boutouil ***             ##
##                                                                 ##
#####################################################################

#Parameters ~ Change those with what works for you and it's all done!
$ad_image = "https://www.fdc.org.co/site/assets/images/demo/720x90.png";
$ad_name = "AD";
$ad_url = "?link";

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

#chosing a random lenght of the generated name
$function_len = rand(8 ,20);

#generating the random name
$rand_name = generateRandomString($function_len);

#encoding the ad image
$base64_ad = base64_encode(file_get_contents($ad_image));

?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <style type="text/css">
            .<?php print($rand_name); ?>{border:1px solid black;text-align: center;width:720px;height:90px;background-image:url(data:image/jpg;base64,<?php echo $base64_ad ?>);}
            .<?php print($rand_name); ?>:hover{cursor: pointer;}
            .<?php print($rand_name); ?> img{width:100%;height:100%;opacity: .01;}
        </style>
        <div class="<?php print($rand_name); ?>" onclick="location.href='<?php print($ad_url); ?>';">
            <img src="#" alt="<?php print($ad_name); ?>" title="<?php print($ad_name); ?>"/>
        </div>
    </body>
</html>
