@extends('frontend.common.main')

@section('content')
<style>
    #myChart{
        height:500px!important;
        width:500px!important;
    }
    .box {
        box-sizing: content-box;
        width: 0;
        height: 80px;
       
        border: 2px solid gray;
        margin-left: 50px;
        padding-right: 0px;
        padding-bottom:30px;
    }
    
    </style>
<section>
<div class="container">
        <div class="row ">
            <div class="col-md-3 " style="margin-left:800px;">
        
    <label for="inputState" class="form-label" style="font-weight:bold;"></label>
    <select id="inputState" class="form-select">
      <option selected>Outlet</option>
      <option>...</option>
    </select>
</div>
      </div>
</div>
<div class="container">
    <div class="row">

           
            <div class="col-md-4 box" style="margin-top:30px;">
                      
                      <h3 style="font-size:17px;">Total Orders</h3>
                      <h2 style="font-size:15px;"></h2>
                      <address>
                          <p></p>
                      </address>
                      <h2 style="font-size:15px;"></h2>
      
                  </div>
                  <div class="col-md-4 box" style="margin-top:30px;">
                      
                      <h3 style="font-size:17px;">Total Revenue</h3>
                      <h2 style="font-size:15px;"></h2>
                      <address>
                          <p></p>
                      </address>
                      <h2 style="font-size:15px;"></h2>
      
                  </div>
                  <div class="col-md-4 box" style="margin-top:30px;">
                      
                      <h3 style="font-size:17px;">Monthly Revenue</h3>
                      <h2 style="font-size:15px;"></h2>
                      <address>
                          <p></p>
                      </address>
                      <h2 style="font-size:15px;"></h2>
      
                  </div>
              
           
         
            
</div>
</div>

<div class="container">
    <div class="row" style="margin-top:30px;" >
      
<canvas id="myChart" width="100" height="100" style="height:300px;width:300px;"></canvas>
</div>
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script src="path/to/chartjs/dist/chart.js"></script>
<script>
    const myChart = new Chart(ctx, {...});
</script>


<script>
const ctx = document.getElementById('myChart');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Wattala', 'Negombo', 'Colombo', 'Kiribathgoda', 'Jaela'],
        datasets: [{
            label: 'Monthly Performance',
            data: [12, 19, 3, 5, 2, 3],
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
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
 

@endsection