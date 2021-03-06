<html>
<head>
</head>

<body>
<div id='countdown1'></div>
<div id='countdown2'></div>
<input id="timer1" type="button" value="Start timer 1" />
<input id="timer2" type="button" value="Start timer 2" />
</body>
<script>
    function countdown(element, minutes, seconds) 
{
    // Fetch the display element
    var el = document.getElementById(element);

    // Set the timer
    var interval = setInterval(function()
    {
        if(seconds == 0) 
		{
            if(minutes == 0) 
			{
                (el.innerHTML = "STOP!");     

                clearInterval(interval);
                return;
            } 
			else 
			{
                minutes--;
                seconds = 60;
            }
        }

        if(minutes > 0) 
		{
            var minute_text = minutes + (minutes > 1 ? ' minutes' : ' minute');
        } 
		else 
		{
            var minute_text = '';
        }

        var second_text = seconds > 1 ? '' : '';
        el.innerHTML = minute_text + ' ' + seconds + ' ' + second_text + '';
        seconds--;
    }, 1000);
}

//Start as many timers as you want

var start1 = document.getElementById('timer1');
var start2 = document.getElementById('timer2');

start1.onclick = function() {
    countdown('countdown1', 0, 15);
}

start2.onclick = function() {
    countdown('countdown2', 0, 10);
}

    </script>
</html>

<?php /**PATH C:\xampp\htdocs\TAKEHOME\resources\views/timer.blade.php ENDPATH**/ ?>