<!DOCTYPE html>

<!--
Congratulations, you know how to inspect element! Next step?

     ██╗ ██████╗ ██╗███╗   ██╗    ██████╗ ██╗   ██╗████████╗███████╗     ██████╗██╗     ██╗   ██╗██████╗ ██╗
     ██║██╔═══██╗██║████╗  ██║    ██╔══██╗╚██╗ ██╔╝╚══██╔══╝██╔════╝    ██╔════╝██║     ██║   ██║██╔══██╗██║
     ██║██║   ██║██║██╔██╗ ██║    ██████╔╝ ╚████╔╝    ██║   █████╗      ██║     ██║     ██║   ██║██████╔╝██║
██   ██║██║   ██║██║██║╚██╗██║    ██╔══██╗  ╚██╔╝     ██║   ██╔══╝      ██║     ██║     ██║   ██║██╔══██╗╚═╝
╚█████╔╝╚██████╔╝██║██║ ╚████║    ██████╔╝   ██║      ██║   ███████╗    ╚██████╗███████╗╚██████╔╝██████╔╝██╗
 ╚════╝  ╚═════╝ ╚═╝╚═╝  ╚═══╝    ╚═════╝    ╚═╝      ╚═╝   ╚══════╝     ╚═════╝╚══════╝ ╚═════╝ ╚═════╝ ╚═╝
-->

<html>
	<head>
		<title>Mustang Match: Survey</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="google-signin-client_id" content="301741669035-hqi19tajg5v4gdci9jtmum7t18ae4tc6.apps.googleusercontent.com">
    
    <!--Jquery required for bootstrap and avoiding stupid javascript requirements-->
    <script src="https://code.jquery.com/jquery.js"></script>
    
		
		<!-- Custom Style Sheet-->
		<link href='css/match.css' rel='stylesheet' type='text/css'>
		
		<!--Bootstrap css and Javascript -->
		<script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/jquery.min.js"></script>
		<link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		
		<!--Google API for sign-in and authentication-->
		<script src="https://apis.google.com/js/platform.js" async defer></script>

	</head>
	
	<?php
	//Linking to server and database, disabled for now until we can mimic this in C9
	
  $servername = "localhost"; // Doesn't change
  $username = "matchmaker"; // Doesn't change
  $password = "";
  $database = "mhsmatch";

  $conn = mysqli_connect($servername, $username, $password, $database);

  if(isset($_POST['submit_survey']))
  {
    $name = test_input($_POST['name']);
    $id_number = test_input($_POST['id']);
    $email = test_input($_POST['email']);
    $gender = $_POST['gender'];
    $class = $_POST['class'];
    $genderpref = $_POST['genderpref'];
    //$class_like = $_POST['class_like'];
    $eye_color = $_POST['eye_color'];
    $hair_color = $_POST['hair_color'];
    $height = $_POST['height'];
    $eye_rate = $_POST['eye_rate'];
    $hair_rate = $_POST['hair_rate'];
    $smile_rate = $_POST['smile_rate'];
    $physique_rate = $_POST['phys_rate'];
    $face_rate = $_POST['face_rate'];
    $intel_qual = $_POST['inte'];
    $humr_qual = $_POST['humr'];
    $hont_qual = $_POST['hont'];
    $appe_qual = $_POST['appe'];
    $kind_qual = $_POST['kinds'];
    $extrovert = $_POST['extr'];
    $math_like = $_POST['math'];
    $science_like = $_POST['science'];
    $history_like = $_POST['hist'];
    $english_like = $_POST['eng'];
    $family = $_POST['fam']; //<--------------
    $organized = $_POST['org']; //<-------------
    $stressed = $_POST['stre']; // <----------
    $greek_food = $_POST['greek'];// <---------
    $asian_food = $_POST['asian'];
    $american_food = $_POST['american'];
    $mex_food = $_POST['mex']; //<---------
    $Italian_food = $_POST['ital'];//<-----------
    $indian_food = $_POST['ind'];
    $iceCream_food = $_POST['ice'];    //<------------
    $sunset = $_POST['sun']; //<---------
    $iceCream = $_POST['cre']; //<----------
    $movie = $_POST['mov']; //<---------
    $swimming = $_POST['swim']; // <---------
    $cityWalk = $_POST['city']; // <--------
    $dinner = $_POST['din']; // <---------
    $picnic = $_POST['pic']; // <----------
    $workout = $_POST['work']; // <---------
    $halloween = $_POST['hal']; //<----------
    $July4 = $_POST['july']; // <----------
    $christmas = $_POST['xmas']; // <------------
    $valentines = $_POST['val']; //<-------------
    $newyearseve = $_POST['eve']; // <------------
    $noSchool = $_POST['day'];//<----------
    $potatoes = $_POST['pot'];//<-----------
    $potatoClub = $_POST['potc'];//<----------
    $cerealClub = $_POST['cer'];//<---------
    $turtleClub = $_POST['turt']; //<-----------
    $WatchClub = $_POST['wat']; //<--------------
    $ByteClub = $_POST['bc'];//<-----------------
    $eye_color_like = $_POST['pref_eye_rate'];
    $hair_color_like = $_POST['pref_hair_rate'];
    $smile_like = $_POST['pref_smile_rate'];
    $physique_like = $_POST['pref_phys_rate'];
    $face_like = $_POST['pref_face_rate'];
    $intel_like = $_POST['pref_inte'];
    $humr_like = $_POST['pref_humr'];
    $hont_like = $_POST['pref_hont'];
    $appe_like = $_POST['pref_appe'];
    $kind_like = $_POST['pref_kins'];
    $time_importance = $_POST['qual_time'];
    $physical_affection = $_POST['phs_aff'];
    $exchange_gifts = $_POST['exch_pres'];
    $moral_like = $_POST['support'];
    $affirmation = $_POST['wor_aff'];
    $pref_height = $_POST['pref_height'];
    
    #$query = "INSERT INTO match_objects (name, id, email, gender, class, class_interest, eye_color, hair_color, height, eye_rate, hair_rate, height_rate, phys_rate, face_rate, intel_qual, humr_qual, hont_qual, appe_qual, kind_qual, extrovert, math_like, science_like, gym, history_like, english_like, arts_like, lang_like, latin_food, asian_food, american_food, slavic_food, european_food, arabic_food, indian_food, clothe_choice, gender_like, eye_color_like, hair_color_like, height_like, phys_like, face_like, intel_like, humr_like, hont_like, appe_like, kind_like, time_importance, phys_affect, exchange_gifts, moral_like, affirmation, tall_like, eye_like, hair_like, clothe_like, pass) VALUES('$name', '$id_number', '$email', '$gender', '$class', '$class_interest', '$eye_color', '$hair_color', '$height', '$eye_rate', '$hair_rate', '$height_rate', '$physique_rate', '$face_rate', '$intel_qual', '$humr_qual', '$hont_qual', '$appe_qual', '$kind_qual', '$extrovert', '$math_like', '$science_like', '$gym', '$history_like', '$english_like', '$arts_like', '$lang_like', '$latin_food', '$asian_food', '$american_food', '$slavic_food', '$european_food', '$arabic_food', '$indian_food', '$clothe_choice', '$gender_like', '$eye_color_like', '$hair_color_like', '$height_like', '$physique_like', '$face_like', '$intel_like', '$humr_like', '$hont_like', '$appe_like', '$kind_like', '$time_importance', '$physical_affection', '$exchange_gifts', '$moral_like', '$affirmation', '$tall_like', '$eye_like', '$hair_like', '$clothe_like', '$pass')";
    $query = "INSERT INTO student_objects (
        name,
        id,
        email,
        gender, 
        class,
        genderpref,
        eye_color,
        hair_color,
        height,
        eye_rate,
        hair_rate,
        smile_rate,
        physique_rate,
        face_rate,
        inte,
        humr,
        hont,
        appe,
        kinds,
        extr,
        math,
        science,
        hist,
        eng,
        fam,
        org,
        stre,
        greek,
        asian,
        american,
        mex,
        ital,
        ind,
        ice,
        sun,
        cre,
        mov,
        swim,
        city,
        din,
        pic,
        work,
        hal,
        july,
        xmas,
        val,
        eve,
        day,
        pot,
        potc,
        cer,
        turt,
        wat,
        bc,
        pref_eye_rate,
        pref_hair_rate,
        pref_smile_rate,
        pref_phys_rate,
        pref_face_rate,
        pref_inte,
        pref_humr,
        pref_hont,
        pref_appe,
        pref_kins,
        qual_time,
        phs_aff,
        exch_pres,
        support,
        wor_aff,
        pref_height
        ) 
      VALUES(
        '$name',
        '$id',
        '$email',
        '$gender',
        '$class',
        '$genderpref',
        '$eye_color',
        '$hair_color',
        '$height',
        '$eye_rate',
        '$hair_rate',
        '$smile_rate',
        '$physique_rate',
        '$face_rate',
        '$intel_qual',
        '$humr_qual',
        '$hont_qual',
        '$appe_qual',
        '$kind_qual',
        '$extrovert',
        '$math_like',
        '$science_like',
        '$elective_like',
        '$history_like',
        '$english_like',
        '$family',
        '$organized',
        '$stressed',
        '$asian_food',
        '$american_food',
        '$mex_food',
        '$Italian_food',
        '$indian_food',
        '$iceCream_food',
        '$sunset',
        '$iceCream',
        '$movie',
        '$swimming',
        '$cityWalk',
        '$dinner',
        '$picnic',
        '$workout',
        '$halloween',
        '$July4',
        '$christmas',
        '$valentines',
        '$newyearseve',
        '$noSchool',
        '$potatoes',
        '$potatoClub',
        '$cerealClub',
        '$turtleClub',
        '$WatchClub',
        '$ByteClub',
        '$eye_color_like',
        '$hair_color_like',
        '$smile_like',
        '$physique_like',
        '$face_like',
        '$intel_like',
        '$humr_like',
        '$hont_like',
        '$appe_like',
        '$kind_like',
        '$time_importance',
        '$physical_affection',
        '$exchange_gifts',
        '$moral_like',
        '$affirmation',
        '$pref_height'
      )";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    echo "<script>window.location.href='index.php';</script>";
    
  }
  
  //Cleaning the inputs to help eliminate XSS
  function test_input($data){
    $data=trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
  

  
  ?>
	<body>
    <script>
      
    </script>
      <?php
      include("navbar.php");
      ?>
      <!--<script src = "form.js"></script>-->
      
    	<div class="container-fluid">
            <div class="col-md-12">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                    <div class="bg-red well mt-45">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                          <form id="survey-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                              <label class="mt-15 color-white">Name</label>
                                  <input name="name" class="form-control" id="name" readonly>
                              <label class="mt-15 color-white">ID Number</label>
                                  <input name="id" class="form-control" id="ID" readonly>
                              <label class="mt-15 color-white">Email</label>
                                  <input name="email" class="form-control" id="email" readonly>
                              <h2>Tell us more about yourself...</h2>
                              <label class="mt-15 color-white">Gender</label><br>
                                  <input class="color-white" type="radio" name="gender" value="Male">
                                  <label class="color-white">Male</label><br>
                                  <input type="radio" name="gender" value="Female">
                                  <label class="color-white">Female</label><br>
                                  <input type="radio" name="gender" value="Other" checked>
                                  <label class="color-white">Other</label><br>
                              <label class="mt-15 color-white">What grade level are you?</label><br>
                                  <input type="radio" name="class" value="Senior" >
                                  <label class="color-white">Senior</label><br>
                                  <input type="radio" name="class" value="Junior" > 
                                  <label class="color-white">Junior</label><br>
                                  <input type="radio" name="class" value="Sophomore" >
                                  <label class="color-white">Sophomore</label><br>
                                  <input type="radio" name="class" value="Freshman" checked>
                                  <label class="color-white">Freshman</label><br>
                              <label class="mt-15 color-white">In which gender(s) are you interested?</label><br>
                                  <input type="radio" name="genderpref" value="Male" >
                                  <label class="color-white">Male</label><br>
                                  <input type="radio" name="genderpref" value="Female" > 
                                  <label class="color-white">Female</label><br>
                                  <input type="radio" name="genderpref" value="Both" >
                                  <label class="color-white">Male or Female</label><br>
                                  <input type="radio" name="genderpref" value="Other" checked>
                                  <label class="color-white">Other</label><br>
                              <label class="mt-15 color-white">What's your eye color?</label><br>
                                  <input type="radio" name="eye_color" value="Brown" >
                                  <label class="color-white">Brown</label><br>
                                  <input type="radio" name="eye_color" value="Blue" > 
                                  <label class="color-white">Blue</label><br>
                                  <input type="radio" name="eye_color" value="Green" >
                                  <label class="color-white">Green</label><br>
                                  <input type="radio" name="eye_color" value="Hazel" >
                                  <label class="color-white">Hazel</label><br>
                                  <input type="radio" name="eye_color" value="Gray" checked>
                                  <label class="color-white">Gray</label><br>
                              <label class="mt-15 color-white">Hair color?</label><br>
                                  <input type="radio" name="hair_color" value="Black" >
                                  <label class="color-white">Black</label><br>
                                  <input type="radio" name="hair_color" value="Brown" > 
                                  <label class="color-white">Brown</label><br>
                                  <input type="radio" name="hair_color" value="Blonde" >
                                  <label class="color-white">Blonde</label><br>
                                  <input type="radio" name="hair_color" value="Naturally red" >
                                  <label class="color-white">Naturally red</label><br>
                                  <input type="radio" name="hair_color" value="It depends on my mood, honestly" checked>
                                  <label class="color-white">It depends on my mood, honestly</label><br>
                              <label class="mt-15 color-white">Height?</label><br>
                                  <input type="radio" name="height" value="6" >
                                  <label class="color-white">Over 6'5"</label><br>
                                  <input type="radio" name="height" value="5" >
                                  <label class="color-white">6'0" - 6'5"</label><br>
                                  <input type="radio" name="height" value="4" >
                                  <label class="color-white">5'8" - 5'11"</label><br>
                                  <input type="radio" name="height" value="3" checked>
                                  <label class="color-white">5'4" - 5'7"</label><br>
                                  <input type="radio" name="height" value="2" >
                                  <label class="color-white">5'0" - 5'3"</label><br>
                                  <input type="radio" name="height" value="1" >
                                  <label class="color-white">Under 5'0"</label><br>
                              <label class="mt-15 color-white">What do you like most about yourself physically?</label><br>
                                <p>1 being "AAAAHHH" and 5 being "literally the highlight of all my selfies"</p>
                                  <label class="mt-15 color-white">Eye Color: </label><br>
                                      <input type="radio" name="eye_rate" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="eye_rate" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="eye_rate" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="eye_rate" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="eye_rate" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Hair Color: </label><br>
                                      <input type="radio" name="hair_rate" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="hair_rate" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="hair_rate" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="hair_rate" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="hair_rate" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Smile </label><br>
                                      <input type="radio" name="smile_rate" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="smile_rate" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="smile_rate" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="smile_rate" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="smile_rate" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Physique: </label><br>
                                      <input type="radio" name="phys_rate" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="phys_rate" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="phys_rate" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="phys_rate" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="phys_rate" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Face: </label><br>
                                      <input type="radio" name="face_rate" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="face_rate" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="face_rate" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="face_rate" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="face_rate" value="1" checked>
                                      <label class="color-white">1</label><br>
                              <label class="mt-15 color-white">What is your best quality?</label><br>
                                <p>1 being "um are you talking about me??" and 5 being "DAS ME"</p>
                                  <label class="mt-15 color-white">Intelligence: </label><br>
                                      <input type="radio" name="inte" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="inte" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="inte" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="inte" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="inte" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Humor: </label><br>
                                      <input type="radio" name="humr" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="humr" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="humr" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="humr" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="humr" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Honesty: </label><br>
                                      <input type="radio" name="hont" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="hont" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="hont" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="hont" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="hont" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Appearance: </label><br>
                                      <input type="radio" name="appe" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="appe" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="appe" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="appe" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="appe" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Kindness: </label><br>
                                      <input type="radio" name="kinds" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="kinds" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="kinds" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="kinds" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="kinds" value="1" checked>
                                      <label class="color-white">1</label><br>
                              <label class="mt-15 color-white">Rate youtself</label><br>
                               <p>1 being "Optimist", 3 being "Realist", and 5 being "Pessimist"</p>
                                      <input type="radio" name="extr" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="extr" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="extr" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="extr" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="extr" value="1" checked>
                                      <label class="color-white">1</label><br>
                              <label class="mt-15 color-white">Rate youtself AGAIN</label><br>
                               <p>1 being "Introvert", 3 being "Realist", and 5 being "Extrovert"</p>
                                      <input type="radio" name="extr" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="extr" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="extr" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="extr" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="extr" value="1" checked>
                                      <label class="color-white">1</label><br>
                              <label class="mt-15 color-white">You wake up and think about your day ahead. How excited are you for each of the following classes (content-wise)?</label><br>
                              <p>1 being "I'm ditching" and 5 being "IT'S GONNA BE GREAT"</p>
                                  <label class="mt-15 color-white">Math: </label><br>
                                      <input type="radio" name="math" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="math" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="math" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="math" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="math" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Science: </label><br>
                                      <input type="radio" name="science" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="science" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="science" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="science" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="science" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">History/Social Studies: </label><br>
                                      <input type="radio" name="hist" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="hist" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="hist" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="hist" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="hist" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">English: </label><br>
                                      <input type="radio" name="eng" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="eng" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="eng" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="eng" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="eng" value="1" checked> 
                                      <label class="color-white">1</label><br>
                              <label class="mt-15 color-white">Which do you value most?</label><br>
                               <p>1 being "Family" and 5 being "Friends"</p>
                                      <input type="radio" name="fam" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="fam" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="fam" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="fam" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="fam" value="1" checked>
                                      <label class="color-white">1</label><br>
                            <label class="mt-15 color-white">How organized is your backpack right now?</label><br>
                               <p>1 being "DUUUUDE I can't even find anything" and 5 being "I have everything color-coordinated and labeled"</p>
                                      <input type="radio" name="org" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="org" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="org" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="org" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="org" value="1" checked>
                                      <label class="color-white">1</label><br>
                              <label class="mt-15 color-white">You have a test tomorrow and you currently have a 79.99% in that class. How stressed are you?</label><br>
                               <p>1 being "I'm basically taking a nap right now" and 5 being "I HAVEN'T SLEPT IN THREE DAYS BECAUSE I'VE BEEN UP STUDYING"</p>
                                      <input type="radio" name="stre" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="stre" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="stre" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="stre" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="stre" value="1" checked>
                                      <label class="color-white">1</label><br>
                              <label class="mt-15 color-white">You've just had a long day, and you're excited to go out to dinner. How much would you like each cuisine?</label><br>
                              <p>1 being "um are you talking about me??" and 5 being "DAS ME"</p>
                                   <label class="mt-15 color-white">Greek: </label><br>
                                      <input type="radio" name="greek" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="greek" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="greek" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="greek" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="greek" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Asian: </label><br>
                                      <input type="radio" name="asian" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="asian" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="asian" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="asian" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="asian" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">American: </label><br>
                                      <input type="radio" name="american" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="american" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="american" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="american" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="american" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Mexican: </label><br>
                                      <input type="radio" name="mex" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="mex" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="mex" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="mex" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="mex" value="1" checked>
                                      <label class="color-white">1</label><br>
                                <label class="mt-15 color-white">Italian: </label><br>
                                      <input type="radio" name="ital" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="ital" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="ital" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="ital" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="ital" value="1" checked>
                                      <label class="color-white">1</label><br>
                                <label class="mt-15 color-white">Indian: </label><br>
                                      <input type="radio" name="ind" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="ind" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="ind" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="ind" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="ind" value="1" checked>
                                      <label class="color-white">1</label><br>
                                 <label class="mt-15 color-white">Ice cream (because why not): </label><br>
                                      <input type="radio" name="ice" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="ice" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="ice" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="ice" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="ice" value="1" checked>
                                      <label class="color-white">1</label><br>
                             <label class="mt-15 color-white">It's a Friday night and you've got your perfect date planned. How much are you excited for each of the following?</label><br>
                               <p>1 being "nah bruh" and 5 being "YAAAAS"</p>
                                  <label class="mt-15 color-white">Walking on a beach at sunset: </label><br>
                                      <input type="radio" name="sun" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="sun" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="sun" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="sun" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="sun" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Ice cream: </label><br>
                                      <input type="radio" name="cre" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="cre" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="cre" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="cre" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="cre" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Movies: </label><br>
                                      <input type="radio" name="mov" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="mov" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="mov" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="mov" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="mov" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Swimming: </label><br>
                                      <input type="radio" name="swim" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="swim" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="swim" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="swim" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="swim" value="1" checked>
                                      <label class="color-white">1</label><br>
                                <label class="mt-15 color-white">Walking around a city: </label><br>
                                      <input type="radio" name="city" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="city" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="city" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="city" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="city" value="1" checked>
                                      <label class="color-white">1</label><br>
                                <label class="mt-15 color-white">Romantic dinner at a fancy restaurant: </label><br>
                                      <input type="radio" name="din" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="din" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="din" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="din" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="din" value="1" checked>
                                      <label class="color-white">1</label><br>
                                 <label class="mt-15 color-white">Picnic in a park: </label><br>
                                      <input type="radio" name="pic" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="pic" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="pic" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="pic" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="pic" value="1" checked>
                                      <label class="color-white">1</label><br>
                                 <label class="mt-15 color-white">Exercise/Working Out: </label><br>
                                      <input type="radio" name="work" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="work" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="work" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="work" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="work" value="1" checked>
                                      <label class="color-white">1</label><br>
                             <label class="mt-15 color-white">Your friend tells you today is a holiday. How much are you excited for each of the following?</label><br>
                               <p>1 being "so what" and 5 being "YAYYYYYYYYY"</p>
                                  <label class="mt-15 color-white">Halloween: </label><br>
                                      <input type="radio" name="hal" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="hal" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="hal" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="hal" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="hal" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">4th of July: </label><br>
                                      <input type="radio" name="july" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="july" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="july" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="july" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="july" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Christmas: </label><br>
                                      <input type="radio" name="xmas" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="xmas" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="xmas" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="xmas" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="xmas" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Valentine's Day: </label><br>
                                      <input type="radio" name="val" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="val" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="val" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="val" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="val" value="1" checked>
                                      <label class="color-white">1</label><br>
                                <label class="mt-15 color-white">Thanksgiving: </label><br>
                                      <input type="radio" name="thanksfam" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="thanksfam" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="thanksfam" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="thanksfam" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="thanksfam" value="1" checked>
                                      <label class="color-white">1</label><br>
                                <label class="mt-15 color-white">New Year's Eve: </label><br>
                                      <input type="radio" name="eve" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="eve" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="eve" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="eve" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="eve" value="1" checked>
                                      <label class="color-white">1</label><br>
                                 <label class="mt-15 color-white">ANY DAY WE DON'T HAVE SCHOOL: </label><br>
                                      <input type="radio" name="day" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="day" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="day" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="day" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="day" value="1" checked>
                                      <label class="color-white">1</label><br>
                             <label class="mt-15 color-white">What is your daily level of exercise?</label><br>
                               <p>1 being "couch potato" and 5 being "THROWING IRON POTATOES"</p>
                                      <input type="radio" name="pot" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="pot" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="pot" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="pot" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="pot" value="1" checked>
                                      <label class="color-white">1</label><br>
                            <label class="mt-15 color-white">You see posters for new clubs around the school. How interested are you in each of the following?</label><br>
                               <p>1 being "ha no" and 5 being "consider me in!"</p>
                                  <label class="mt-15 color-white">Potatoe Club: </label><br>
                                      <input type="radio" name="potc" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="potc" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="potc" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="potc" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="potc" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Cereal Eating Club: </label><br>
                                      <input type="radio" name="cer" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="cer" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="cer" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="cer" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="cer" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Trurles are Awesome Club: </label><br>
                                      <input type="radio" name="turt" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="turt" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="turt" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="turt" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="turt" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Watching-the-Clock Club: </label><br>
                                      <input type="radio" name="wat" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="wat" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="wat" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="wat" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="wat" value="1" checked>
                                      <label class="color-white">1</label><br>
                                <label class="mt-15 color-white">BYTE CLUB (YOU AWESOME): </label><br>
                                      <input type="radio" name="bc" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="bc" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="bc" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="bc" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="bc" value="1" checked>
                                      <label class="color-white">1</label><br>
                              <label class="mt-15 color-white">How enticing do you find each of the following characteristics?</label><br>
                               <p>1 being "doesn't matter" and 5 being "IT'S A MUST-HAVE"</p>
                                  <label class="mt-15 color-white">Eye Color: </label><br>
                                      <input type="radio" name="pref_eye_rate" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="pref_eye_rate" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="pref_eye_rate" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="pref_eye_rate" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="pref_eye_rate" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Hair Color: </label><br>
                                      <input type="radio" name="pref_hair_rate" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="pref_hair_rate" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="pref_hair_rate" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="pref_hair_rate" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="pref_hair_rate" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Height: </label><br>
                                      <input type="radio" name="pref_smile_rate" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="pref_smile_rate" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="pref_smile_rate" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="pref_smile_rate" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="pref_smile_rate" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Physique: </label><br>
                                      <input type="radio" name="pref_phys_rate" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="pref_phys_rate" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="pref_phys_rate" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="pref_phys_rate" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="pref_phys_rate" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Facial structure: </label><br>
                                      <input type="radio" name="pref_face_rate" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="pref_face_rate" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="pref_face_rate" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="pref_face_rate" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="pref_face_rate" value="1" checked>
                                      <label class="color-white">1</label><br>
                              <label class="mt-15 color-white">How important are these characteristics?</label><br>
                               <p>1 being "whatever" and 5 being "well OF COURSE"</p>
                                   <label class="mt-15 color-white">Intelligence: </label><br>
                                      <input type="radio" name="pref_inte" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="pref_inte" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="pref_inte" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="pref_inte" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="pref_inte" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Humor: </label><br>
                                      <input type="radio" name="pref_humr" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="pref_humr" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="pref_humr" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="pref_humr" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="pref_humr" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Honesty: </label><br>
                                      <input type="radio" name="pref_hont" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="pref_hont" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="pref_hont" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="pref_hont" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="pref_hont" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Appearance: </label><br>
                                      <input type="radio" name="pref_appe" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="pref_appe" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="pref_appe" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="pref_appe" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="pref_appe" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Kindness: </label><br>
                                      <input type="radio" name="pref_kins" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="pref_kins" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="pref_kins" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="pref_kins" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="pref_kins" value="1" checked>
                                      <label class="color-white">1</label><br>
                              <label class="mt-15 color-white">How much do you appreciate each of the following in a relationship?</label><br>
                               <p>1 being "what's the point" and 5 being "that's my #1 priority"</p>
                                  <label class="mt-15 color-white">Quality time together: </label><br>
                                      <input type="radio" name="qual_time" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="qual_time" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="qual_time" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="qual_time" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="qual_time" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Physical Affection: </label><br>
                                      <input type="radio" name="phs_aff" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="phs_aff" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="phs_aff" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="phs_aff" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="phs_aff" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Exchange of Presents: </label><br>
                                      <input type="radio" name="exch_pres" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="exch_pres" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="exch_pres" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="exch_pres" value="2">
                                      <label class="color-white">2</label><br>                                      
                                      <input type="radio" name="exch_pres" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Moral Support/Talking: </label><br>
                                      <input type="radio" name="support" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="support" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="support" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="support" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="support" value="1" checked>
                                      <label class="color-white">1</label><br>
                                  <label class="mt-15 color-white">Words of Affirmation: </label><br>
                                      <input type="radio" name="wor_aff" value="5">
                                      <label class="color-white">5</label><br>
                                      <input type="radio" name="wor_aff" value="4" >
                                      <label class="color-white">4</label><br>
                                      <input type="radio" name="wor_aff" value="3" >
                                      <label class="color-white">3</label><br>
                                      <input type="radio" name="wor_aff" value="2">
                                      <label class="color-white">2</label><br>
                                      <input type="radio" name="wor_aff" value="1" checked>
                                      <label class="color-white">1</label><br>
                              <label class="mt-15 color-white">Which is most appealing to you?</label><br>
                                  <input type="radio" name="pref_height" value="3">
                                  <label class="color-white">Taller</label><br>
                                  <input type="radio" name="pref_height" value="2">
                                  <label class="color-white">Same Height</label><br>
                                  <input type="radio" name="pref_height" value="1" checked>
                                  <label class="color-white">Shorter</label><br>
                              <!--<label class="mt-15 color-white">Which eye color do you like best?</label><br>
                                    <input type="color-picker" name="pref_eye_color" value=""required><br>
                              <label class="mt-15 color-white">Hair Color?</label><br>
                                    <input type="color-picker" name="pref_hair_color" value=""required><br>-->

                                  
                          <!--    <label class="mt-15 color-white">How much do you like each cuisine?</label>
                              <label class="mt-15 color-white">How much do you like each holiday?</label>
                              -->
                              <!--
                              <label class="mt-15 color-white">Password</label>
                              <input id="pass" name="pass" class="form-control" readonly>
                              -->
                              <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                                  <input type="submit" name="submit_survey" class="mt-15 form-control" id="getpass" value="Submit">
                              </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <!--Button appears to be redundant -->
  <!--<script src="https://apis.google.com/js/api.js?onload=renderButton" async defer></script>-->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog" id="myModal3">
      <!-- Modal content-->
        <div class="modal-content"> <!--Acts as the container for the modal-->
          <div class="modal-header">
            <h3 class="modal-title grey-text">Google Sign-in Required</h3>
          </div>
          <div class="modal-body">
            <p>Mustang Match is a match making web application for MHS students. In order to take the survey, a valid D120 Google or Admin sign in must be provided</p>
          </div>
          <div class="modal-footer">
          <div class="col-md-12 text-center center-div">
          <div class="g-signin2" data-onsuccess="onSignIn"></div>
          <div class="col-md-6 col-sm-6" id="my-signin2"></div>
          
          
          <script>
          //Handling signin functions, requests and rendering button
            var logged = false;
            
            function onFailure(error) {
              console.log(error);
              window.location.href = "index.php";
            }
            function renderButton() {
              gapi.signin2.render('my-signin2', {
                'scope': 'profile email',
                'width': 240,
                'height': 50,
                'longtitle':true,
                'theme': 'dark',
                'onsuccess': onSuccess,
                'onfailure': onFailure
              });
            }
            console.log(logged);
            
            function signOut(){
              var auth2 = gapi.auth2.getAuthInstance();
              auth2.signOut().then(function(){
                console.log('User signed out.');
                $('#login-button').click(showModal);
                $('#login-button').html(' Login');
                $('#name').val("");
                $('#ID').val("");
                $('#email').val("");
              });
              
              
            }
            
          $('#myModal').on('hidden.bs.modal', function() 
          {
            console.log(logged);
            if(logged === false)
            {
              console.log("success");
              window.location.href = "index.php";
            }
          });
    
          </script>
      </div>
      </div>
    </div>
<script>
  //Calls up the google sign in dialogue and begins authentication process.
  function showModal(){
    console.log("Showing modal");
    $('#myModal').modal('show');
  }
  
  $(window).load(showModal);
</script>

<script type="text/javascript">
    //Populates the form once signin event occurs
    
    //Sets elements to variable names
    var nam = document.getElementById('name'); 
    var id = document.getElementById('ID'); 
    var email = document.getElementById('email'); 
    
    //Callback function for google sign in, based off Google template        
    function onSignIn(googleUser) {
			  var profile = googleUser.getBasicProfile();
			  email.value = profile.getEmail();//profile.getEmail();
			  var uID = parseInt(profile.getEmail().substring(0,6),10);
			  id.value = parseInt(profile.getEmail().substring(0, 6),10);

			  
			  //Check if id is a number
			  if(isNaN(uID)){
			    console.log("Non student account");
			    $('#modal-body').html('Mustang Match is only open to current MHS students. Please log in using a valid mhs student email.');
			    signOut();
			    console.log("Automatically signed out");
			    logged=false;
			    
			    if(window.confirm("Sorry! Only MHS students are allowed to participate in Mustang Match. Be sure to use your d120 Google account.")){
			      showModal();
			    } else {
			      window.location.href="index.php";
			    }
			    
			    
			    
			    
			  } else if(id.value>210999 || id.value<180000){
			    console.log("Student is not currently enrolled");
			  } else {
			  
			    var stuName = profile.getName();
			    var stuEmail = profile.getEmail();
			    //uID already holds the student id number to check for valid users.
			    nam.value = profile.getName();
			    var queryString = "SELECT email FROM student_objects WHERE email='"+stuEmail+"'";
			    
			    
			  
  			  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  			  console.log('Name: ' + profile.getName());
  			  console.log('Image URL: ' + profile.getImageUrl());
  			  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
   			  $('#myModal').modal('hide');
  			  logged = true;
  			  $('#login-button').click(signOut);
          $('#login-button').html(' Log Out');
			  }
		}
</script>
<script>
    function generateUUID() {
            var d = new Date().getTime();
            if(window.performance && typeof window.performance.now === "function"){
                d += performance.now();; //use high-precision timer if available
            }
            var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                var r = (d + Math.random()*16)%16 | 0;
                d = Math.floor(d/16);
                return (c=='x' ? r : (r&0x3|0x8)).toString(16);
            });
            
            var startPos = Math.random() * (uuid.length - 5)
            
            return uuid.substring(startPos, startPos+5);
        };

        document.getElementById('pass').value = generateUUID();

</script>
        <script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
        		
	</body>
</html>
