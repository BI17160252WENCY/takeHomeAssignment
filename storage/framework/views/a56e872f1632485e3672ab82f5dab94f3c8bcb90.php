<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Customer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                margin: 0;
            }
            * {
  box-sizing: border-box;
}




/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.input {
  background-color: blue;
  width:100px;
  height:30px;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media  screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}
        </style>
    </head>
    <body class="antialiased">
    <div class="header">
  <h1>Add Customer</h1>
<form >
  <label for="">Name</label><input type="text" id="name" name="" required>
  <input type="" id="submit" class="input" value="Add">
</form>
</div>

<div class="topnav">
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
</div>

<div class="row">
  <div class="column">
    <h2>Pending</h2>
    <table id="tablepending"> 
        <tr>
            <th>Order No.</th>
            <th>Name</th>
            <th>Status</th>
        </tr>
    </table>
  </div>
  
  <div class="column">
    <h2>Bot <input type="" class="input" id="addBot" value="+ BOT"></h2>
    <table id="tablebot"> 
        <tr>
        <th>Delete</th>
            <th>Bot</th>
            <th>Status</th>
            <th>Order No.</th>
            <th>Timer</th>   
        </tr>
    </table>
  </div>
  
  <div class="column">
    <h2>Complete</h2>
    <table id="tablecomplete"> 
        <tr>
            <th >Order No.</th>
            <th>Name</th>
        </tr>
    </table>

    
  </div>
</div>  
    </body>
    
<script>
  var i=10000;
  var pendingvaluedelete="";
  var ordernodelete="";
  //get the id of delete bot
  function  getId(element) 
  {

      ordernodelete = tablebot.rows.item(element.parentNode.parentNode.rowIndex).cells.item(3).innerHTML;
      var tablepending = document.getElementById('tablepending');
      if(ordernodelete=="")
      {
          document.getElementById("tablebot").deleteRow(element.parentNode.parentNode.rowIndex);
      }
      else if(ordernodelete!="")
      {
          for (z = 0; z < tablepending.rows.length; z++) 
          {
            pendingvaluedelete = tablepending.rows.item(z).cells.item(0).innerHTML;
          
            if(pendingvaluedelete.indexOf(ordernodelete)!=-1)
            {
                tablepending.rows.item(z).cells.item(2).innerHTML="wait";
                document.getElementById("tablebot").deleteRow(element.parentNode.parentNode.rowIndex);
            }
          }
      }
  }
    
    var vip=0;
    document.getElementById('submit').onclick = function() 
    {    
     
        var name = document.getElementById('name');
        var VIPCus = 'VIP';
        var vipCus = 'vip';
        var name=name.value; 
        if (name.indexOf(VIPCus)!=-1 ||name.indexOf(vipCus)!=-1)
        {
            
            i=i+1;
            vip=vip+1;
            var table = document.getElementById("tablepending");
            var row = table.insertRow(vip);
            row.id="rowpendingV"+i;
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            cell1.innerHTML ="V"+ i;
            cell2.innerHTML = document.getElementById('name').value;
            cell3.innerHTML ="wait";
        }
        else
        {
            i=i+1;
            var table = document.getElementById("tablepending");
            var row = table.insertRow(-1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            row.id="rowpending"+i;
            cell1.innerHTML = "C"+i;
            cell2.innerHTML = document.getElementById('name').value;
            cell3.innerHTML ="wait";
        }
    }

    d=0;
    document.getElementById('addBot').onclick = function() 
    {      
        d=d+1;
        var table = document.getElementById("tablebot");
        var row = table.insertRow(-1);
        var cell = row.insertCell(0);
        var cell1 = row.insertCell(1);
        var cell2 = row.insertCell(2);
        var cell3 = row.insertCell(3);
        var cell4 = row.insertCell(4);
        cell.innerHTML= '<input type="button" value="-bot" onclick="getId(this)">';
        row.id="botrow"+d;
        cell2.id="status"+d;
        cell3.id="orderno"+d;
        cell4.id="countdown"+d;
        cell1.innerHTML ="Bot"+ d;
        cell2.innerHTML = "Rest";
    }
    

    window.setInterval('load()', 1000); 	// Call a function every 10000 milliseconds (OR 10 seconds).
    
    
var f=0;
// Refresh or reload page.
function load() 
{
    var tablebot = document.getElementById('tablebot');

        for (a = 1; a < tablebot.rows.length; a++) 
		    {
            var objCells = tablebot.rows.item(a).cells;
            var tablebotcell=objCells.item(2);
            tablebotvalue =tablebotcell.innerHTML;
            var rest="Rest";

            if(tablebotvalue.indexOf(rest)!=-1)
            {
                var ordernocom ="";
                var cusnamecom ="";
                var tablepending = document.getElementById('tablepending');
                
                for (b = 1; b < tablepending.rows.length; b++) 
                {

                    // GET THE CELLS COLLECTION OF THE CURRENT ROW.
                    var pending = tablepending.rows.item(b).cells;
                    var pendingrowid =tablepending.rows.item(b).id;
                    var botrowid =tablebot.rows.item(a).id;
                    var pendingcell=pending.item(2);
                    pendingvalue =pendingcell.innerHTML;
                    var wait="wait";
                    if(pendingvalue.indexOf(wait)!=-1) 
                    {
                        f=a-1;
                        var tablebotcellstatus=objCells.item(2).id;
                        var tablebotcellorderno=objCells.item(3).id;
                        var tablebotcellcountdown=objCells.item(4).id;
                        pending.item(2).innerHTML="cook";
                        objCells.item(2).innerHTML="cook";
                        objCells.item(3).innerHTML = pending.item(0).innerHTML ;
                        ordernocom = pending.item(0).innerHTML ;
                        cusnamecom = pending.item(1).innerHTML ;
                        countdown(tablebotcellcountdown,tablebotcellorderno, tablebotcellstatus, 0, 10,ordernocom,cusnamecom,pendingrowid,botrowid );
                        objCells.item(4).innerHTML = "" ;
                        objCells.item(5).innerHTML = "" ;
                    }

                }
            }
        }
   
}
function countdown(countdown,botorderno, botstatus, minutes, seconds, orderno, cusname,pendingrowid,botrowid) 
{
    var status = document.getElementById(botstatus);
    var countdown = document.getElementById(countdown);
    var botorderno = document.getElementById(botorderno);

    // Set the timer
   var interval = setInterval(function()
    {
        var botrowidcheck = document.getElementById(botrowid);
        if(botrowidcheck==null)
        {
          clearInterval(interval);
        }
    
        if(seconds == 0) 
        {
            if(minutes == 0) 
            {
              
                (status.innerHTML = "Rest");     
                (countdown.innerHTML = "");
                (botorderno.innerHTML = "");
                var table = document.getElementById("tablecomplete");
                var row = table.insertRow(-1);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);

                cell1.innerHTML = orderno;
                cell2.innerHTML = cusname;
                document.getElementById(pendingrowid).remove(); 
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
        countdown.innerHTML = minute_text + ' ' + seconds + ' ' + second_text + '';
        seconds--;
    }, 1000);
}

</script>
</html>
<?php /**PATH C:\xampp\htdocs\TAKEHOME\resources\views/addcustomer.blade.php ENDPATH**/ ?>