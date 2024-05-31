<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Clock</title>
    <link rel="stylesheet" href="digitaltime.css">
</head>
<body>
    <div class="po">
<div class="hero">
    
    <div class="container">
        
    <?php
$d = date("d F Y A");
echo"Hello Users Current Time is $d <br>";

?>
        <div class="Clock">

                <span id="hrs">00</span>
                <span >:</span>
                <span id="min">00</span>
                <span>:</span>
                <span id="sec">00</span>
        </div>

    </div>

</div>
</div>

<script>
let hrs = document.getElementById("hrs");
let min = document.getElementById("min");
let sec = document.getElementById("sec");

setInterval(()=>{
    let currentTime = new Date();
hrs.innerHTML = currentTime.getHours();
min.innerHTML = currentTime.getMinutes();
sec.innerHTML = currentTime.getSeconds();

},1000)





</script>

</body>
</html>