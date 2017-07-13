<html><body>
<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console

echo 'Hello world from Cloud9!';
class TellAll
{
private $userAgent;
public function __construct()
{
$this->userAgent=$_SERVER['HTTP_USER_AGENT'];
echo $this->userAgent;
}
    
}
$tellAll=new TellAll();
?>
<div class="mydiv"> Attention tests en cours div</div>
</body>
</html>