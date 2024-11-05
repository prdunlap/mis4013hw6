<html>
  <title>MIS 4013 HW6</title>


  
  <body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <div>
      <button id="myButton">Click Me!</button>
      <p id="text">Hello World!</p>
      
      <script>
      $(document).ready(function(){
        $('#myButton').click(function(){
          $('#text').css('color', 'blue').text('Hello, jQuery!');
        });
      });
    </script>
    </div>
    
<div>

  <div data-aos="fade-up">
  <h2>This section fades up using cdnjs.cloudflare</h2>
</div>

<script>
  AOS.init();
</script>

  <h2>It wouldn't be a libraries assignment without chart.js</h2>

<style>
  #myChart {
    max-width: 400px;
    max-height: 500px;
    width: 100px;
    height: auto;
  }
</style>
  
<canvas id="myChart" width="400" height="400"></canvas>

<script>
  const ctx = document.getElementById('myChart').getContext('2d');
  const myChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: 'Votes',
        data: [2312, 19599, 33006, 5825, 26333, 1003],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
     
    }
  });
</script>

  
</div>

<div>Sorted Data by age using Lodash: </div>
<div id="sorted"></div>

<script>
  const users = [
    { 'name': 'John', 'age': 36 },
    { 'name': 'Jane', 'age': 25 },
    { 'name': 'Kevin', 'age': 32 },
    { 'name': 'Preston', 'age': 22 },
    { 'name': 'Patricia', 'age': 81 } 
  ];

  const sortedUsers = _.sortBy(users, ['age']);
  
  document.getElementById('sorted').innerHTML = JSON.stringify(sortedUsers, null, 2);
</script>
  
  </body>
  
</html>
