<!DOCTYPE html>
<html>

<head>
    <title>Patient Entry</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
  <header>
        <button><a href="dashboard.php" style="color: white;">GO BACK</a></button>
  </header>

    <form action="enter_patient_details.php" method="get">
        <br>
       
        <h1 style="color: #00008B">Patient Details Entry Form</h1>
        <br>
        
        <input type="text" name="Campus_id" placeholder="Enter patient campus id" required="">
        <br>
        <br>
    

        <select name="gender" required="">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="nonbinary">Non-binary</option>
            <option value="na">Prefer not to say</option>
        </select>

        <br>
        <br>
        <input type="text" name="hostel_info" placeholder="Enter hostel info" required="">
        <input type="text" name="location" placeholder="Location" required="">
        <input type="text" name="medical_trauma" placeholder="Medical or Trauma" required="">
        <br>
        <br>
        <input type="text" name="emergency_details" placeholder="Emergency details" required="">
        <br>
        <br>
        <input type="text" name="treatment" placeholder="Enter given treatment" required="">

        <p>Transported to Hospital</p>
        <input type='radio' name='Transported_to_hospital' value='yes'>
        <label for='Transported_to_hospital'>Yes</label>
        <input type='radio' name='Transported_to_hospital' value='no'>
        <label for='Transported_to_hospital'>No</label>
        <br>
        <br>

        <input type="text" name="visit_date" placeholder="Visit Date" style='display:none;' >
        <input type="text" name="visit_time" placeholder="Visit Time" style='display:none;' >
        <input type="text" name="hospital_treatment" placeholder="Hospital Treatment" style='display:none; '>
        <input type="text" name="time_arrival" placeholder="Arrival Time at LUMS" style='display:none;'>
        <script>
        $('input[type=radio][name=Transported_to_hospital]').change(function(){
            if(this.value=='yes')
            {
                $('input[type=text][name=visit_date]').fadeIn();
                $('input[type=text][name=visit_time]').fadeIn();
                $('input[type=text][name=hospital_treatment]').fadeIn();
                $('input[type=text][name=time_arrival]').fadeIn();
            }
            else if(this.value=='no')
            {
                $('input[type=text][name=visit_date]').fadeOut();
                $('input[type=text][name=visit_time]').fadeOut();
                $('input[type=text][name=hospital_treatment]').fadeOut();
                $('input[type=text][name=time_arrival]').fadeOut();
            }
        })
        </script>
    <br>
    <br>
        <label for='Bag_used'>Bag Used</label>
        <select name="Bag_used" required="">
            <option value="Khokha">Khokha</option>
            <option value="PDC">PDC</option>
            <option value="Academic_Block">Academic Block</option>
        </select>
        <label for="Products_used">Select product used:</label>
        <select name="Products_used" required="">
            <option value="Crepe_Bandages">Crepe Bandages</option>
            <option value="Open_Wove">Open Wove</option>
            <option value="Sani_plasts">Saniplasts</option>
            <option value="Deep_Heat">Deep Heat</option>
            <option value="Piodine">Piodine</option>
            <option value="Scissors">Scissors</option>
            <option value="BP_Apparatus">BP Apparatus</option>
            <option value="Wheel_Chair">Wheel Chair</option>
            <option value="Walker">Walker</option>
        </select>
        <br>
        <br> 
        
        <button>submit</button>
        
    </form>
    <?php
    if(isset($_GET['success']))
    {
        echo "Patient details have been entered";
    }
    if(isset($_GET['unsuccess']))
    {
        echo "Error occurred. Try again!";
    }
    ?>

</body>
</html>