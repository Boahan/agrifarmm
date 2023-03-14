<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/weather.css">
        <script 
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"></script>
        <title>Weather Forecast</title>
    </head>
<body>
<div class="wrapper">
    <div class="sidebar">
      <div>
        <form class="search" id="search">
          <input type="text" id="query" placeholder="Search..." />
          <button><i class="fas fa-search"></i></button>
        </form>
        <div class="weather-icon">
          <img id="icon" src="icons/sun/4.png" alt="" />
        </div>
        <div class="temperature">
          <h1 id="temp">0</h1>
          <span class="temp-unit">°C</span>
        </div>
        <div class="date-time">
          <p id="date-time">Monday, 12:00</p>
        </div>
        <div class="divider"></div>
        <div class="condition-rain">
          <div class="condition">
            <i class="fas fa-cloud"></i>
            <p id="condition">condition</p>
          </div>
          <div class="rain">
            <i class="fas fa-tint"></i>
            <p id="rain">perc - 0%</p>
          </div>
        </div>
      </div>
      <div class="location">
        <div class="location-icon">
          <i class="fas fa-map-marker-alt"></i>
        </div>
        <div class="location-text">
          <p id="location">location</p>
        </div>
      </div>
    </div>
    <div class="main">
      <nav>
        <ul class="options">
          <button class="hourly">today</button>
          <button class="week active">week</button>
        </ul>
        <ul class="options units">
          <button class="celcius active">°C</button>
          <button class="fahrenheit">°F</button>
        </ul>
      </nav>
      <div class="cards" id="weather-cards"></div>
      <div class="highlights">
        <h2 class="heading">today's highlights</h2>
        <div class="cards">
          <div class="card2">
            <h4 class="card-heading">UV Index</h4>
            <div class="content">
              <p class="uv-index">0</p>
              <p class="uv-text">Low</p>
            </div>
          </div>
          <div class="card2">
            <h4 class="card-heading">Wind Status</h4>
            <div class="content">
              <p class="wind-speed">0</p>
              <p>km/h</p>
            </div>
          </div>
          <div class="card2">
            <h4 class="card-heading">Sunrise & Sunset</h4>
            <div class="content">
              <p class="sun-rise">0</p>
              <p class="sun-set">0</p>
            </div>
          </div>
          <div class="card2">
            <h4 class="card-heading">Humidity</h4>
            <div class="content">
              <p class="humidity">0</p>
              <p class="humidity-status">Normal</p>
            </div>
          </div>
          <div class="card2">
            <h4 class="card-heading">Visibility</h4>
            <div class="content">
              <p class="visibilty">0</p>
              <p class="visibilty-status">Normal</p>
            </div>
          </div>
          <div class="card2">
            <h4 class="card-heading">Air Quality</h4>
            <div class="content">
              <p class="air-quality">0</p>
              <p class="air-quality-status">Normal</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/weather.js"></script>
</body>
</html>
