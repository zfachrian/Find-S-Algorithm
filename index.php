<html>
<head>
	<body>
		<table>
			<tr>
				<td>
					Nama
				</td>
				<td>
					:
				</td>
				<td>
					Zuhad Achmad Fachrian
				</td>
			</tr>
			<tr>
				<td>
					Nrp
				</td>
				<td>
					:
				</td>
				<td>
					3120640004
				</td>
			</tr>
			<tr>
				<td>
					Kelas
				</td>
				<td>
					:
				</td>
				<td>
					D4LJ 2020
				</td>
			</tr>
		</table>
		<br>
		<br>
		<br>
		<h1>data training</h1>
		<form>
			<table border="1" id="tbodyTraining">
				<tr>
					<td>
						data ke
					</td>
					<td>
						sky
					</td>
					<td>
						air temp
					</td>
					<td>
						humidity
					</td>
					<td>
						wind	
					</td>
					<td>
						water
					</td>
					<td>
						forecast
					</td>
					<td>
						enjoy sport
					</td>
				</tr>
			</table>
			
			<input id="cout" name="cuntnya" type="hidden">
			<button type="button" id="sub">cek hipotesa</button>
			<button type="button" id="add-btn">tambah</button>


		</form>

		<h1>hipotesa</h1>
			<table border="1" id="hipotes">
				<tr>
					<td>
						sky
					</td>
					<td>
						air temp
					</td>
					<td>
						humidity
					</td>
					<td>
						wind	
					</td>
					<td>
						water
					</td>
					<td>
						forecast
					</td>
					<td>
						enjoy sport
					</td>
				</tr>
				<tr>
					<td>
						<p id="sky"></p>
					</td>
					<td>
						<p id="air_temp"></p>
						
					</td>
					<td>
						<p id="humidity"></p>
						
					</td>
					<td>
						<p id="wind"></p>
							
					</td>
					<td>
						<p id="water"></p>
						
					</td>
					<td>
						<p id="forecast"></p>
						
					</td>
					<td>
						<p id="enjoy"></p>
						
					</td>
				</tr>
			</table>

			<h1>data testing</h1>
			<table border="1" id="hipotes">
				<tr>
					<td>
						sky
					</td>
					<td>
						air temp
					</td>
					<td>
						humidity
					</td>
					<td>
						wind	
					</td>
					<td>
						water
					</td>
					<td>
						forecast
					</td>
					<td>
						enjoy sport
					</td>
				</tr>
				<tr>
					<td>
						<select name="sky" id="skytest">
							<option value="1">Rainy</option>
							<option value="2">Sunny</option>
						</select>
					</td>
					<td>
						<select name="airtemp" id="airtemptest">
							<option value="1">cold</option>
							<option value="2">warm</option>
						</select>
					</td>
					<td>
						<select name="humidity" id="humiditytest">
							<option value="1">high</option>
							<option value="2">normal</option>
						</select>
					</td>
					<td>
						<select name="wind" id="windtest">
							<option value="1">strong</option>
							<option value="2">normal</option>
						</select>
					</td>
					<td>
						<select name="water" id="watertest">
							<option value="1">warm</option>
							<option value="2">cool</option>
						</select>
					</td>
					<td>
						<select name="forecast" id="foretest">
							<option value="1">same</option>
							<option value="2">change</option>
						</select>
					</td>
					<td>
						<p id="enjoytest"></p>
					</td>
				</tr>
				
			</table>
				<button type="button" id="testbut">testing</button>
	</body>
</head>
<script src="jquery-1.11.3.min.js"></script>
<script>
	var data = new Array();

	var hipotesa = new Array();
	var dataCount = 1;
		$('#add-btn').click(function(event) {
			document.getElementById('cout').value=''+dataCount; 
			$('#tbodyTraining').append(
				'<tr>'+
					'<td>'+
						(dataCount)+
					'</td>'+
					'<td>'+
						'<select name="sky'+dataCount+'" id="sky'+dataCount+'">'+
							'<option value="1">Rainy</option>'+
							'<option value="2">Sunny</option>'+
						'</select>'+
					'</td>'+
					'<td>'+
							'<select name="airtemp'+dataCount+'" id="airtemp'+dataCount+'">'+
							'<option value="1">Cold</option>'+
							'<option value="2">Warm</option>'+
						'</select>'+
					'</td>'+
					'<td>'+
							'<select name="humidity'+dataCount+'" id="humidity'+dataCount+'">'+
							'<option value="1">High</option>'+
							'<option value="2">Normal</option>'+
						'</select>'+
					'</td>'+
					'<td>'+
							'<select name="wind'+dataCount+'" id="wind'+dataCount+'">'+
							'<option value="1">Strong</option>'+
							'<option value="2">Normal</option>'+
						'</select>'+
					'</td>'+
					'<td>'+
							'<select name="water'+dataCount+'" id="water'+dataCount+'">'+
							'<option value="1">Warm</option>'+
							'<option value="2">Cool</option>'+
						'</select>'+
					'</td>'+
					'<td>'+
							'<select name="forecast'+dataCount+'" id="forecast'+dataCount+'">'+
							'<option value="1">Same</option>'+
							'<option value="2">Change</option>'+
						'</select>'+
					'</td>'+
					'<td>'+
							'<select name="enjoysport'+dataCount+'" id="enjoysport'+dataCount+'">'+
							'<option value="1">Yes</option>'+
							'<option value="2">No</option>'+
						'</select>'+
					'</td>'+
				'</tr>'
			);
			dataCount++;
		});

	$('#sub').click(function(event) {
		
		var parameter =["sky","airtemp","humidity","wind","water","forecast","enjoysport"];
		var cout = document.getElementById('cout').value;
		for(var k=1;k<8;k++){
			var g=1;
			var param = parameter[k-1]+''+g;
			var datanya = document.getElementById(param).value;
			data[k] = datanya;
			
		}
		for(var i=2;i<=cout;i++){
		for(var j=2;j<8;j++){
		var cek = document.getElementById("enjoysport"+i).value;
		
		if(cek==1){
			var param2 = parameter[j-2]+''+i;
			var datanya2 = document.getElementById(param2).value;
			if(data[j-1] == datanya2){
				data[j-1] = datanya2;
			}
			else{
				data[j-1] = 0;
			}
		}

	}
}
for(var k=1;k<8;k++){
	switch(k){
		case 1 :
		if(data[k]==1)
			hipotesa[k]="rainy";
		else if(data[k]==2)
			hipotesa[k]="sunny";
		else
			hipotesa[k]="?";
		break;
		case 2 :
		if(data[k]==1)
			hipotesa[k]="cold";
		else if(data[k]==2)
			hipotesa[k]="warm";
		else
			 hipotesa[k]="?";
		break;
		case 3 :
		if(data[k]==1)
			hipotesa[k]="high";
		else if(data[k]==2)
			hipotesa[k]="normal";
		else
			hipotesa[k]="?";
		break;
		case 4 :
		if(data[k]==1)
			hipotesa[k]="strong";
		else if(data[k]==2)
			hipotesa[k]="normal";
		else
			hipotesa[k]="?";
		break;
		case 5 :
		if(data[k]==1)
			hipotesa[k]="warm";
		else if(data[k]==2)
			hipotesa[k]="cool";
		else
			hipotesa[k]="?";
		break;
		case 6 :
		if(data[k]==1)
			hipotesa[k]="same";
		else if(data[k]==2)
			hipotesa[k]="change";
		else
			hipotesa[k]="?";
		break;
		case 7 :
		if(data[k]==1)
			hipotesa[k]="yes";
		else if(data[k]==2)
			hipotesa[k]="no";
		break;
	}
}
//alert(hipotesa[2]);
document.getElementById('sky').innerHTML = hipotesa[1];
document.getElementById('air_temp').innerHTML = hipotesa[2];
document.getElementById('humidity').innerHTML = hipotesa[3];
document.getElementById('wind').innerHTML = hipotesa[4];
document.getElementById('water').innerHTML = hipotesa[5];
document.getElementById('forecast').innerHTML = hipotesa[6];
document.getElementById('enjoy').innerHTML = hipotesa[7];

	});

	$('#testbut').click(function(event) {
			var validate = 1;
		var skynya = document.getElementById('skytest').value;
		var airt = document.getElementById('airtemptest').value;
		var humi= document.getElementById('humiditytest').value;
		var wind = document.getElementById('windtest').value;
		var water = document.getElementById('watertest').value;
		var fore = document.getElementById('foretest').value;
	 	for(var k=1;k<8;k++){
	 		switch(k){
	 	case 1 :
	 	if(data[k]==1 || data[k]==2){
	 		if(data[k]!=skynya){
	 			validate=0;
	 			k=7;
	 		}
	 	}
	 	break;
	 	case 2 :
	 	if(data[k]==1 || data[k]==2){
	 		if(data[k]!=airt){
	 			validate=0;
	 			k=7;
	 		}
		}
	 	break;
	 	case 3 :
	 	if(data[k]==1 || data[k]==2){
	 		if(data[k]!=humi){
				validate=0;
	 			k=7;
	 		}
	 	}
	 	break;
	 	case 4 :
	 	if(data[k]==1 || data[k]==2){
	 		if(data[k]!=wind){
	 			validate=0;
	 			k=7;
	 		}
	 	}
	 	break;
	 	case 5 :
	 	if(data[k]==1 || data[k]==2){
	 		if(data[k]!=water){
	 			validate=0;
	 			k=7;
	 		}
	 	}
	 	break;
	 	case 6 :
	 	if(data[k]==1 || data[k]==2){
	 		if(data[k]!=fore){
	 			validate=0;
	 			k=7;
	 		}
	 	}
	 	break;
		
	 }
	 	}
		
		 if(validate==0){
		 	document.getElementById('enjoytest').innerHTML = "NO";
		 }
		 else{
		 	document.getElementById('enjoytest').innerHTML = "YES";
		 }

	});


</script>
</html>