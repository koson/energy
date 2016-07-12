<?php global $path; ?>

<style>
    .box {
        width:300px;
        height:200px;
        float:left;
        background-color:rgba(68,179,226,0.1);
        margin-right:20px;
        margin-bottom:20px;
    }
    
    .box2 {
        width:440px;
        min-height:520px;
        float:left;
        background-color:rgba(68,179,226,0.1);
        margin-right:20px;
        margin-bottom:20px;
    }
    
    .box3 {
        width:900px;
        background-color:rgba(68,179,226,0.1);
        margin-right:20px;
        margin-bottom:20px;
    }
    
    .inner {
        padding:20px;
        color:#333;
    }

    .box-title {
        background-color:rgba(68,179,226,1.0);
        padding:10px;
        color:#fff;
    }
    
    .inner2 {
        padding:20px;
        color:#333;
    }
    
    .inner3 {
        padding:20px;
        color:#333;
    }

    .bluebar {
        padding:5px; 
        color:#fff; 
        background-color:rgba(6,153,250,0.6);
        font-size:14px;
        font-weight:bold;
    }
    
    .ch1 {
        font-size:28px;
        font-weight:bold;
        color:rgba(6,153,250,1.0);
    }
    
    .ch1u {
        font-weight:bold;
        color:rgba(6,153,250,1.0);
    }
    
</style>

<div class="box3">
    <div class="box-title" style="background-color:#f6cb1d"><b>THIS PAGE IS WORK IN PROGRESS</b></div>
</div>

<div class="box3">
    <div class="box-title"><b>DIFFERENT USES OF ENERGY IN CONTEXT</b></div>
    <div class="inner3">
        In order to make sense of what a kWh of electricity is its useful to compare the amount of energy used for different activities. The following outlines a number of common uses of energy to put their use in context. Also included are several examples of what low energy technology can achieve:<br><br>
        <canvas id="individual" width="750px" height="450px"></canvas>
    </div>
</div>

<div class="box3">
    <div class="box-title"><b>ENERGY SCENARIO: ZERO CARBON BRITAIN</b></div>
    <div class="inner3"><img src="<?php echo $path; ?>files/zcb.png" style="width:210px; margin-left:10px; float:right" />
        The ZeroCarbonBritain report by the Center for Alternative Technology shows how it is technically possible to achieve a zero carbon energy system in the UK through both new efficient buildings, existing buildings retrofit, electrification of transport, land use changes and powering up with renewable energy combined with storage technologies to balance supply with demand. The following section summarises the main demand and supply side changes proposed in the ZeroCarbonBritain scenario.<br><br>Also added is an outline of costs of making some of the changes in comparison with what we might spend on energy if we made no changes. All of these figures are constantly changing as the costs of renewables and low energy technologies fall and there is always a difficulty in forecasting energy costs into the future. The important thing is not the precise cost but the awareness of magnitude and the opportunity that presents from thinking what might we achieve if we redirect what we would spend otherwise towards the future we want.
    </div>
</div>

<div class="box2"><div class="box-title"><b>AVERAGE HOME</b></div><div class="inner2"><canvas id="stack" style="float:left" width="100px" height="400px"></canvas>The average UK home uses around <b>91 kWh</b> of energy per day. <b>9 kWh/d</b> for electricity, <b>41 kWh/d</b> for water and space heating and <b>41 kWh/d</b> for personal transport.<br><br>This translates to an average annual electricity bill of 3300 kWh costing £530, an average annual gas bill of 13500 kWh costing £540 and an average car fuel cost of £1670 @ 11p/mile.<br><br>Over a 25 year timespan the average household spends £68,500 on energy.<br><br>A small village with 200 households will spend almost £14 million on energy over 25 years.<div style="clear:both"></div></div></div>

<div class="box2"><div class="box-title"><b>POWER DOWN</b></div><div class="inner2"><canvas id="powerdown-stack" style="float:left" width="200px" height="400px"></canvas>By insulating and making our buildings air-tight, heating with heatpumps, switching to efficient appliances, biking, walking more and switching to electric cars ZeroCarbonBritain outlines how we can reduce the amount of energy we need by about 80% down to<br><b>18 kWh per day</b>
<div style="clear:both"></div></div></div>

<div class="box2"><div class="box-title"><b>POWER DOWN:</b> SPACE HEATING</div><div class="inner2">
    The energy required to heat our homes can be reduced significantly with better building fabric and heating controls.
    <br><br>
    <b>An average UK house</b>
    <div class="bluebar" style="width:340px">27.4 kWh/d</div>    
    <br>
    <b>Insulate walls, roof and floor<br>Better windows and doors</b>
    <div class="bluebar" style="width:200px">16.4 kWh/d</div>     
    <br>
    <b>Reduce draughts and air leakage</b>
    <div class="bluebar" style="width:165px">13.7 kWh/d</div>   
    <br>
    <b>Better controls<br>and lower internal temperatures</b>
    <div class="bluebar" style="width:130px">11.0 kWh/d</div>   
        
    <br>
    <div style="font-size:12px">
    <b>Note:</b> kWh/d values are <b>delivered heat</b> rather than fuel input. Gas and other boilers are not 100% efficient. The difference between 33.0 kWh/d and 27.4 kWh/d is the energy lost out of the boiler flue.</div>
    
<div style="clear:both"></div></div></div>
    
    
<div class="box2">
  <div class="box-title"><b>POWER DOWN:</b> HEATPUMPS</div>
  <div class="inner2">
  <canvas id="heatpump-stack" style="float:left" width="200px" height="400px"></canvas>
  Heatpumps can be used to provide heat efficiently from renewable electricity, providing 3 units of heat output for every unit of electricity input.
  <br><br>
  Total space heating and water heating demand<br>
  <b>17.8 kWh/d</b>
  <br><br>
  Total heatpump electricity input at a COP of 2.5<br>
  <b>7.1 kWh/d</b><br><br>
  <div style="font-size:12px">
  <b>Note:</b> An average COP of 2.5 includes 10% direct electric heating</div>
  <div style="clear:both"></div></div>
</div>

<div class="box2"><div class="box-title"><b>POWER DOWN:</b> TRANSPORT</div>
<div class="inner2">
<span class="ch1">18,500</span><span class="ch1u"> miles/yr</span><br>
The number of miles travelled by the average household by all means<br><br>
<span class="ch1">15,200</span><span class="ch1u"> miles/yr</span><br>
The number of miles travelled by the average household by car<br><br>
<span class="ch1">10.4</span><span class="ch1u"> kWh/d</span><br>
The amount of electricity required to drive 15,200 miles/yr in an electric car. Electric cars can travel 4.0 miles/kWh, <b>a 75% energy saving</b> compared to internal combustion.
<br><br>
If we simultaneously make our cities and towns more cycle and walking friendly, improve public transport and increase average car occupancy from 1.6 to 2.0 as the ZeroCarbonBritain suggests, reducing car use to 8900 miles per household, this could reduce the energy required for personal transport down to 6.1 kWh/d.
</div></div>

<div class="box2"><div class="box-title"><b>POWER UP:</b> SOLAR PV</div><div class="inner2"><img src="<?php echo $path; ?>files/solar.jpg" style="width:100%" /><br><br>1 kWp of solar can generate 870 kWh per year in the UK or 2.4 kWh/d<br><br>4 kWp of solar currently costs around £6800 to install in the UK (£1700/kWp). Over 25 years 1 kWp of solar will generate electricity at a cost of 7.8p/kWh.
<br><br>
Generating 17.7 kWh/d from solar would cost about £12,500 or only <b>18% of our budget.</b>
</div></div>

<div class="box2"><div class="box-title"><b>POWER UP:</b> COMMUNITY WIND</div><div class="inner2">
<img src="<?php echo $path; ?>files/wind.jpg" style="width:100%" /><br><br>A 1 MW wind turbine at a capacity factor of 40% would generate 9600 kWh per day enough for 542 of our households above. A 1 kWp share would generate 9.6 kWh/day.
<br><br>
Operating for 20 years such a turbine costs about £3 million per MW (£3000/kWp). Even though the project cost is almost twice that of solar, the higher capacity factor will mean the wind turbine will generate over 3 times as much energy resulting in a lower electricity cost of 4.5p/kWh. It will also generate electricity more consistently and at more useful times of the year when demand is highest.
<br><br>
Generating 17.7 kWh/d from wind would cost about £5,530 or only <b>8% of our budget.</b>
</div></div>

<div class="box2"><div class="box-title"><b>MATCHING SUPPLY WITH DEMAND</b></div><div class="inner2">
See <a href="https://openenergymonitor.org/energymodel/">https://openenergymonitor.org/energymodel</a>

</div></div>

<script>
    // Enable sidebar, set body background
    $(".sidenav").show();
    $(".container").css({margin:"0 0 0 250px"});
    $("body").css('background-color','WhiteSmoke');
    // ------------------------------------------------------
    
    var c = document.getElementById("stack");  
    var ctx = c.getContext("2d");
    
    var height = 400;
    var scale = height / (9+41+41);
    stack([9,41,41],0,height,scale);
    
    // ------------------------------------------------------
    
    var c = document.getElementById("powerdown-stack");  
    var ctx = c.getContext("2d");
    
    var height = 400;
    var scale = height / (9+41+41);
    stack([9,41,41],0,height,scale);
    stack([4.5,7.1,6.1],85,height,scale);
    //stack([4.5,6.5,6.4],85,height,scale);
    // ------------------------------------------------------
    
    var c = document.getElementById("heatpump-stack");  
    var ctx = c.getContext("2d");
    
    var height = 400;
    var scale = height / (11.0+6.8);
    stack([11.0,6.8],0,height,scale);
    stack([4.4,2.7],85,height,scale);
    
    // ------------------------------------------------------
    
    var c = document.getElementById("individual");  
    var ctx = c.getContext("2d");
    
    // mobile, bthomehub, laptop, washing, 
    var text = ["Charging a mobile phone","One LED Light on for 24h","Internet router","Laptop","Fridge A+ 180L","Washing machine","Fridge/freezer A+ 210L","8.2 minute electric shower","Cooking","Water Heating","Space heating (fuel input)","40 miles in a petrol car","40 miles in an electric car","Space Heating Passivhaus Retrofit", "Heatpump electric + passivhaus retrofit"]
    var data = [0.01,0.144,0.192,0.288,0.33,0.5,0.6,1.23,1.4,8.2,33,40,10,5.8,1.95];
    
    var width = 450;
    
    var maxv = 0;
    for (z in data) if (data[z]>maxv) maxv = data[z];
    var scale = width / maxv;
    
    var y = 1;
    ctx.textAlign    = "left";
    
    for (z in data) {
        var seg = data[z] * scale;
        ctx.fillStyle = "rgba(6,153,250,0.6)";
        ctx.fillRect(1,y,seg,25);
        
        ctx.fillStyle = "rgba(6,153,250,0.6)";
        ctx.font = "normal 14px arial"; 
        
        var value = data[z];
        
        if (value<1) value = value.toFixed(2);
        if (value>=1 && value<10) value = value.toFixed(1);
        if (value>=10) value = value.toFixed(0);
        
        ctx.fillStyle = "rgba(6,153,250,1.0)";
        ctx.font = "normal 14px arial"; 
        ctx.fillText(text[z]+": "+value,1+seg+10,y+12.5+5);
        
        var l = ctx.measureText(text[z]+" "+value).width+20;
        
        ctx.fillStyle = "rgba(6,153,250,0.8)";
        ctx.font = "normal 12px arial"; 
        ctx.fillText("kWh",1+seg+l,y+12.5+5);
        
        y += 30;
    }
    
function stack(data,xoffset,height,scale) {
    var y = height-1;
    ctx.textAlign    = "center";
    ctx.font = "normal 12px arial"; 
    for (z in data) {
        var seg = data[z]*scale;
        y -= (seg);
        ctx.strokeStyle = "rgba(6,153,250,1.0)";
        ctx.fillStyle = "rgba(6,153,250,0.4)";
        ctx.fillRect(1+xoffset,y+4,80,seg-4);
        ctx.strokeRect(1+xoffset,y+4,80,seg-4);
        ctx.fillStyle = "#fff";
        ctx.fillText(data[z],xoffset+40,y+(seg/2)+6);
    }
}    
</script>
