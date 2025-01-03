<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>

  <!--navbar part-->
  <div class="class_navbar">
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header><b>MENU</b></header>
      <ul>
        <li><a href="home.html"><i class="fas fa-home"></i>home</a></li>
        <li><a href="numerology.html"><i class="fa-regular fa-hand"></i>numerology</a></li>
        <li><a href="home.html"><i class="fas fa-home"></i>panchang</a></li>
        <li><a href="celendar.php"><i class="fas fa-home"></i>celendar</a></li>
        <li><a href="home.html"><i class="fas fa-home"></i>festival</a></li>
        <li><a href="home.html"><i class="fas fa-home"></i>jyotish</a></li>
        <li><a href="home.html"><i class="fas fa-home"></i>planets</a></li>
        <li><a href="home.html"><i class="fas fa-home"></i>lyrics</a></li>
        <li><a href="gallery.html"><i class="fa-solid fa-image"></i>gallery</a></li>
        <li><a href="home.html"><i class="fas fa-home"></i>shop</a></li>
      </ul>
    </div>


    <div class="class_clock">
      <a href="home.html"><i class="fas fa-home"></i></a>
      <div class="clock"><?php include 'clock.php' ?></div>
    </div>
  </div>


  <div class="zodicallsign">
    <a class="sign" href="aries.html">aries</a>
    <a class="sign" href="taurus.html">taurus</a>
    <a class="sign" href="gemini.html">gemini</a>
    <a class="sign" href="cancer.html">cancer</a>
    <a class="sign" href="leo.html">leo</a>
    <a class="sign" href="virgo.html">virgo</a>
    <a class="sign" href="libra.html">libra</a>
    <a class="sign" href="scorpio.html">scorpio</a>
    <a class="sign" href="sagittarius.html">sagittarius</a>
    <a class="sign" href="capricorn.html">capricorn</a>
    <a class="sign" href="aquarius.html">aquarius</a>
    <a class="sign" href="piseces.html">piseces</a>

  </div>

  <!--container part-->
  <div class="container">

    <!--header detail-->
    <div class="header_sec">
      <?php
      if (!isset($_COOKIE['last_visit'])) {
        setcookie('last_visit', time(), time() + 30 * 24 * 60 * 60); //expire in 30 days
      } else {
        $lastvisit = $_COOKIE['last_visit'];
        setcookie('last_visit', time(), time() + 30 * 24 * 60 * 60); //update the cookie
      }

      if (isset($lastvisit)) {
        $currentdate = time();

        $differentdate = abs($currentdate - $lastvisit);

        $days = floor($differentdate / (60 * 60 * 24));

        $hours = floor(($differentdate % (60 * 60 * 24)) / (60 * 60));

        $minutes = floor(($differentdate % (60 * 60)) / 60);

        $seconds = floor($differentdate % 60);

        echo "$days days,$hours hours,$minutes minutes,$seconds seconds";
      }

      
      
      $moontemp = 236;
      
      $moondeg=$moontemp;
      if($moondeg==360)
      {
        $moondeg=0;
      }
      echo "<br>before $moondeg days";
      if($days>0)
      {
        $moondeg=$moondeg+13.176;
        
      }
      echo "<br>after $moondeg days";
      if($hours>0)
      {
        $moondeg=$moondeg+(0.54984*$hours);
    
      }
      echo "<br>after $moondeg hours";
     if($minutes>0)
      {
        $moondeg=$moondeg+(0.00916*$minutes);
    
      }
      echo "<br>after $moondeg minutes";
      if($seconds>0)
      {
        $moondeg=$moondeg+(0.0001527*$seconds);
    
      }
      echo "<br>after $moondeg seconds";
      $moontemp=$moondeg;
      ?>
    </div>

    <div class="kundali_container">

      <div class="kundali_image">

        <span class="one">1</span>
        <div class="position_one"><?php include 'position_one.php' ?></div>


        <span class="two">2</span>
        <div class="position_two"><?php include 'position_two.php' ?></div>


        <span class="three">3</span>
        <div class="position_three"><?php include 'position_three.php' ?></div>


        <span class="four">4</span>
        <div class="position_four"><?php include 'position_four.php' ?> </div>


        <span class="five">5</span>
        <div class="position_five"><?php include 'position_five.php' ?></div>


        <span class="six">6</span>
        <div class="position_six"><?php include 'position_six.php' ?></div>


        <span class="seven">7</span>
        <div class="position_seven"><?php include 'position_seven.php' ?></div>


        <span class="eight">8</span>
        <div class="position_eight"><?php include 'position_eight.php' ?></div>


        <span class="nine">9</span>
        <div class="position_nine"><?php include 'position_nine.php' ?></div>


        <span class="ten">10</span>
        <div class="position_ten"><?php include 'position_ten.php' ?></div>


        <span class="eleven">11</span>
        <div class="position_eleven"><?php include 'position_eleven.php' ?></div>


        <span class="twelve">12</span>
        <div class="position_twelve"><?php include 'position_twelve.php' ?></div>

      </div>

    </div>

    <table>
      <tr>
        <th>bhav</th>
        <th>residents</th>
        <th>owner</th>
        <th>rashi</th>
      </tr>
      <tr>
        <td>1</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>2</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>3</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>4</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>5</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>6</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>7</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>8</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>9</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>10</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>11</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>12</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
  </div>

  <!--footer part-->
  <div class="footer">

    <p class="par_footer">


      • Astrology
      Full Moon Dates
      Solar Eclipse
      Lunar Eclipse
      Vernal Equinox
      Summer Solstice
      Autumnal Equinox
      Winter Solstice
      New Moon Dates
      Planetary Positions
      Graha Asta & Uday
      Graha Vakri & Margi
      Graha Gochara

      • Muhurat
      Marriage Dates
      Griha Pravesh
      Buying Car
      Property Purchase


      Indian Seasons

      Hindu Sunrise
      Tamil Calendar
      Rashi Calculator
      Karthigai Days
      Panchang
      Panchak
      Ganda Moola
      Bhadra Vichar
      Rahu Kalam
      Nakshatra
      Abhijit Nakshatra

      Auspicious Yoga
      Sarvarthasiddhi Yoga
      Amritsiddhi Yoga
      Dwipushkar Yoga
      Tripushkar Yoga
      Ravi Pushya
      Guru Pushya
      Ravi Yoga

      Copyright

    </p>
  </div>
</body>

</html>
