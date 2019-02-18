<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

Enter Birthdate:  <input type="date" id='date_input'>
<br>

<?php 
  //date in mm/dd/yyyy format; or it can be in other formats as well
  // $birthDate = "03/05/1992";

  $birthDate = date_format(date_create($_COOKIE['birthdate']), "d/m/Y");
  
  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDate);
  
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));

  echo "Age is: " . $age;

?>

<script type="text/javascript">
        var date_input = document.getElementById('date_input');
        date_input.valueAsDate = new Date();

            date_input.onchange = function(){
            //  console.log(this.value);
             document.cookie = "birthdate="+date_input.value;
             // document.getElementById("bdate").innerHTML = "You selected: " + date_input.value;

             console.log(date_input);
            }
    
</script>
<p id="bdate" onChange="window.location.reload()"></p>
<button onClick="window.location.reload()">Continue</button>