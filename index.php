<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
            <table>
                <tr>
                    <td><?php echo "The GMT time is " . date("h:i:sa"); ?> </td>
                </tr>
                <tr>
                    <td><?php date_default_timezone_set("America/New_York"); echo "The time In America/NewYork is " . date("h:i:sa"); ?></td>
                </tr>
                <tr>
                    <td><?php echo "Your Number Is:"?></td>
                </tr>
                <tr>                    
                    <td><?php $a = 12; $b = 8; echo $a + $b; ?></td>
                </tr>
            </table>    
    </body>
</html>
