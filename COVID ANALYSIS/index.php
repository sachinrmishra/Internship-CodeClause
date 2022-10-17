<!DOCTYPE html>
<html lang="en">
<head>
    <title>COVID-19 Report</title>
    <?php include 'Links/link.php'; ?>
    <?php include 'CSS/style.php'; ?>
</head>
<body onload="fetch()">

<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptomsid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventionid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact Us</a>
      </li>

    </ul>
    
  </div>
</nav>

<div class="main_header">
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
            <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                <img src="IMAGES/eksath.png" width="300" height="300">
            </div>

        </div>

        <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
            <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                <h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rotate">
                  <img src="IMAGES/corona.png" width="50" height="50"></span>na Virus </h1>

            </div>


        </div>

    </div>

</div>



<!-- ******************************** CORONA UPDATES ********************************-->

<section class="corona_update container-fluid">
  
  <div class="mb-3">
    <h3 class="text-uppercase text-center">COVID-19 Live Updates of the World</h3>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center" id="tbval">

				<?php
				$data=file_get_contents('https://api.covid19api.com/summary');

	$coronalive =json_decode($data,true);

	// echo $coronalive['statewise'][1]['state'];
	$countrycount = count($coronalive['Countries']);
				?>
				<tr>
					<th>Countries</th>
					<th>New Confirmed </th>
					<th>Total Confirmed </th>
					<th>New Recovered </th>
					<th>Total Recovered </th>
					<th>New Deceased </th>
					<th>Total Deceased</th>
				</tr>
				<?php
				$i = 1;
				while($i < 195) {
				?>
				<tr>
					<td>
<?php echo $coronalive['Countries'][$i]['Country'] ?>
					</td>

					<td>
<?php echo $coronalive['Countries'][$i]['NewConfirmed'] ?>
					</td>

					<td>
<?php echo $coronalive['Countries'][$i]['TotalConfirmed'] ?>
					</td>



					<td>
<?php echo $coronalive['Countries'][$i]['NewRecovered'] ?>
					</td>

					<td>
<?php echo $coronalive['Countries'][$i]['TotalRecovered'] ?>
					</td>

					<td>
<?php echo $coronalive['Countries'][$i]['NewDeaths'] ?>
					</td>

					<td>
<?php echo $coronalive['Countries'][$i]['TotalDeaths'] ?>
					</td>
				</tr>
				<?php $i++;
				}
				?>

    </table>

  </div>


</section>



<!-- ********************************* ABOUT SECTION *********************************-->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>About COVID-19</h1>
  </div>
  
  <div class="row pt-5">
    <div class="col-lg-5 col-md-6 col-12 ml-5">
      <img src="images/about corona.jpg" class="img-fluid">
    </div>

    <div class="col-lg-6 col-md-6 col-12">
      <h2>What is COVID-19 (Corona Virus)</h2>
      <p>COVID-19 is the infectious disease caused by the most recently discovered coronavirus.
        This new virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019.
      </p>
      <p>Coronaviruses are the large family of viruses which may cause illness in animals or humans.
        In humans, several coronaviruses are known to cause respiratory infections ranging from the common 
        cold to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory 
        Syndrome (SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19.
      </p>

    </div>

  </div>
</div>



<!-- ********************************* CORONAVIRUS SYMPTOMS *********************************-->
<div class="container-fluid pt-5 pb-5" id="symptomsid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>Coronavirus Symptoms</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
      <figure class="text-center">
        <img src="images/cough.png" class="img-fluid" width="120" height="120">
        <figcaption>Cough</figcaption>
      </figure>  
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
      <figure class="text-center">
        <img src="images/runny_nose.png" class="img-fluid" width="120" height="120">
        <figcaption>Runny Nose</figcaption>
      </figure>  
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
      <figure class="text-center">
        <img src="images/fever.png" class="img-fluid" width="120" height="120">
        <figcaption>Fever</figcaption>
      </figure>  
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
      <figure class="text-center">
        <img src="images/cold.png" class="img-fluid" width="120" height="120">
        <figcaption>Cold</figcaption>
      </figure>  
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
      <figure class="text-center">
        <img src="images/tiredness.png" class="img-fluid" width="120" height="120">
        <figcaption>Tiredness</figcaption>
      </figure>  
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
      <figure class="text-center">
        <img src="images/difficulty_breathing.png" class="img-fluid" width="120" height="120">
        <figcaption>Difficulty in breathing <br> 
          (Severe Cases)</figcaption>
      </figure>  
      </div>

    </div>
  </div>
</div>



<!-- ********************************* PREVENTION AGAINST CORONAVIRUS *********************************-->
<div class="container-fluid sub_section  pt-5 pb-5" id="preventionid">
  <div class="section_header text-center mb-5 mt-4">
    <h1> 6 Steps Prevention Against Coronavirus </h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="images/handwash.png" class="img-fluid" width="90" height="90">
          </figure> 
        </div>
        <div class="col-lg-8 col-md-8 col-12">
          <p>Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub.</p>
        </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="images/wear_mask.png" class="img-fluid" width="90" height="90">
          </figure> 
        </div>
        <div class="col-lg-8 col-md-8 col-12">
          <p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze.</p>
        </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="images/social_distancing.png" class="img-fluid" width="90" height="90">
          </figure> 
        </div>
        <div class="col-lg-8 col-md-8 col-12">
          <p>Avoid close contact (1 meter or 3 feet) with people who are unwell.</p>
        </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="images/stay_home.png" class="img-fluid" width="90" height="90">
          </figure> 
        </div>
        <div class="col-lg-8 col-md-8 col-12">
          <p>Stay home and self-isolate from others in the household if your feel unwell.</p>
        </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="images/news.png" class="img-fluid" width="90" height="90">
          </figure> 
        </div>
        <div class="col-lg-8 col-md-8 col-12">
          <p>Stay informed by watching news & follow the recommended practises.</p>
        </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="images/seek_doctor.png" class="img-fluid" width="90" height="90">
          </figure> 
        </div>
        <div class="col-lg-8 col-md-8 col-12">
          <p>If you have fever, cough, and difficulty in breathing, seek medical care early .</p>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- ********************************* CONTACT US *********************************-->
<div class="container-fluid pt-5 pb-5" id="contactid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>Contact Us</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-12">
      <form>
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" placeholder="name" autocomplete="off" required >
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off" >
        </div>
        <div class="form-group">
          <label>Mobile</label>
          <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required >
        </div>
        <div class="form-group">
          <label>Share your reviews</label>
          <textarea class="form-control"  rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    </div>
  </div>




<!-- ********************************** FOOTER **********************************-->
  <div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>

  </div>




<!-- ********************************** FOOTER **********************************-->
<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p>Copyright by Sachin Misha</p>

  </div>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/ jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ waypoints/4.0.1/jquery.waypoints.min.js" integrity=" sha256-jDnOKI0q2KNsQZTCBTEnsp76FnfMEttF6AV2DF2FFNE-" crossorigin=" anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/ jquery.counterup.min.js" integrity=" sha256-3tQPj/3xubBoapVMalijPNOMODHOAtgh/gwFYUNSrik-" crossorigin=" anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/und/ popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<script type="text/javascript">


  $('.count').counterUp({
    delay:10,
    time:3000
  })
  mybutton=document.getElementById("myBtn");
  //When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};
  function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      mybutton.style.display = "block";
    }
    else {
      mybutton.style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction(){
    document.body.scrollTop=0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, Edge and Opera
  }

  function fetch(){
    $.get("https://api.covid19api.com/summary", 
      
      function (data){
        console.log(data['Countries'].length);
        var tbval = document.getElementById('tbval');

        for (var i=1; i<(data['Countries'].length); i++){
          var x = tbval.insertRow();
          x.insertCell(0);
          tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
          tbval.rows[i].cells[0].style.background = '#7a4a91';
          tbval.rows[i].cells[0].style.color = '#fff';

          x.insertCell(1);
          tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
          tbval.rows[i].cells[1].style.background = '#4bb7d8';

          x.insertCell(2);
          tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
          tbval.rows[i].cells[2].style.background = '#4bb7d8';

          x.insertCell(3);
          tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
          tbval.rows[i].cells[3].style.background = '#f36e23';

          x.insertCell(4);
          tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
          tbval.rows[i].cells[4].style.background = '#4bb7d8';

          x.insertCell(5);
          tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['TotalRecovered'];
          tbval.rows[i].cells[5].style.background = '#9cc850';

          x.insertCell(6);
          tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
          tbval.rows[i].cells[6].style.background = '#f36e23';

        }
      }
    
    );
  }

</script>

</body>
</html>