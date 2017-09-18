/*
	*	Original script by: Shafiul Azam
	*	Version 4.0
	*	Modified by: Luigi Balzano

	*	Description:
	*	Inserts Countries and/or States as Dropdown List
	*	How to Use:

		In Head section:
		----------------
		<script type= "text/javascript" src = "countries.js"></script>
		
		In Body Section:
		----------------
		Select Country (with states):   <select id="country" name ="country"></select>
			
		Select State: <select name ="state" id ="state"></select>

        Select Country (without states):   <select id="country2" name ="country2"></select>
			
		<script language="javascript">
			populateCountries("country", "state");
			populateCountries("country2");
		</script>

	*
	*	License: Free to copy, distribute, modify, whatever you want to.
	*	Aurthor's Website: http://bdhacker.wordpress.com
	*
*/

// Countries
var country_arr = new Array("Thane", "Pune", "Mumbai Suburban", "Nashik"," Nagpur"," Ahmadnagar" ,"Solapur"," Jalgaon"," Aurangabad"," Nanded"," Kolhapur"," Mumbai City"," Satara"," Amravati"," Sangli"," Yavatmal"," Raigarh"," Buldana"," Bid"," Latur"," Chandrapur"," Dhule"," Parbhani"," Akola","Akkalkot"," Jalna ","Osmanabad ","Nandurbar"," Ratnagiri"," Gondiya"," Wardha"," Bhandar"," Washim"," Hingoli"," Gadchiroli Sindhudurg");

// States
var s_a = new Array();
s_a[0]="";
s_a[1]="Thane	|Kalyan|	Vasai|Bhiwandi|Ambarnath|Palghar|Ulhasnagar|Dahanu|Shahapur|Murbad |Vada|Talasari|Jawhar|Vikramgad|Mokhada	";
s_a[2]="Pune City|Haveli|Khed|	Baramati|Junnar|Shirur|	Indapur|Daund|Mawal|Ambegaon|Purandhar|	Bhor|	Mulshi	|Velhe	";
s_a[3]="Mumbai Suburban";
s_a[4]="	Nashik	|Malegaon|	Niphad	|Baglan|	Sinnar|	Dindori	|Nandgaon|	YevlaIgatpuri|	Chandvad|	Kalwan	|Surgana|	Trimbakeshwar|	Deola|	Peint	";
s_a[5]="Nagpur Urban|	Nagpur Rural	|HingnaKamptee	|Savner|	Katol|	Ramtek|	Umred|	Narkhed|	Parseoni|	Mauda|	KuhiKalameshwar	|Bhiwapur";
s_a[6]="Nagar|Sangamner|Nevasa|Rahuri|Rahta|Shrigonda|Kopargaon|Akola|Shrirampur|Parner|Pathardi|Shevgaon|Karjat|Jamkhed";
s_a[7]="	Solapur North|	Malshiras|	Pandharpur Barshi|	Madha|	Sangole|	Akkalkot|	Mohol	|	Solapur South	|KarmalaMangalvedhe";

s_a[8]="JalgaonChalisgaon |Bhusawal|	Jamner|	ChopdaRaver|	Pachora|	Amalner|	Yawal|	Parola|	Dharangaon|	Erandol|	Muktainagar|	Bhadgaon|	Bodvad	";
s_a[10]="Nanded|	Mukhed	|Hadgaon|	Kandhar|	Kinwat|    Loha	|Deglur";
s_a[11]="	Karvir	|Hatkanangle|	Shirol	|Kagal	|Panhala|	Gadhinglaj|	Radhanagari|	Chandgad|		Shahuwadi|	Bhudargad|	Ajra	|Bavda	";
s_a[9]="Aurangabad|	Sillod|	Gangapur|	Paithan|	Kannad";
s_a[12]="Mumbai City";
s_a[13]="Karad|	Satara|Phaltan|	Patan	|Khatav|	Koregaon";
s_a[14]="Amravati	|Achalpur|	Warud|	Chandurbazar|	DharniMorshiDaryapur";
s_a[15]="Miraj|	Walwa|	Jat| Tasgaon|	Khanapur (Vita)	|PalusShirala";
s_a[16]="Yavatmal|	Pusad|	Umarkhed|	Wani	|DarwhaMahagaon	|	Arni|	Kelapur";
s_a[17]="	Panvel	|Alibag	|Karjat|	Khalapur|	Pen |Mahad	|Roha|	Uran|	MangaonShrivardhan|	Murud";
s_a[18]="Khamgaon	|Buldana|	ChikhliMehkar| Malkapur|	Sindkhed Raja";
s_a[19]="Bid	|Georai|	Parli	|Ambejogai|	Manjlegaon";
s_a[20]="	Latur	|Nilanga|	Udgir	|Ausa|	Ahmadpur|	Chakur|	Renapur";
s_a[21]="chandrapur";
s_a[22]="Dhule";
s_a[23]="Jalna";
s_a[24]="Parbhani";
s_a[25]="Akola";
s_a[26]="Akola";
s_a[27]="Nandurbar";
s_a[28]="Ratnagiri";
s_a[29]="Gondhiya";
s_a[30]="Vardha";
s_a[31]="Bhandara";
s_a[32]="Washim";
s_a[33]="  Basmath	|Hingoli	|	Kalamnuri	|Aundha (Nagnath)";
s_a[34]="Chamorshi|	Gadchiroli|	Aheri|	Armori	|Kurkheda |Desaiganj (Vadasa)|	Dhanora";
s_a[35]="Kudal |Sawantwadi|	Kankavli|	Devgad	|Malwan	|Vengurla|	Dodamarg|	Vaibhavvadi";
function populateStates( countryElementId, stateElementId ){
	
	var selectedCountryIndex = document.getElementById( countryElementId ).selectedIndex;

	var stateElement = document.getElementById( stateElementId );
	
	stateElement.length=0;	// Fixed by Julian Woods
	stateElement.options[0] = new Option('Select City','');
	stateElement.selectedIndex = 0;
	
	var state_arr = s_a[selectedCountryIndex].split("|");
	
	for (var i=0; i<state_arr.length; i++) {
		stateElement.options[stateElement.length] = new Option(state_arr[i],state_arr[i]);
	}
}

function populateCountries(countryElementId, stateElementId){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var countryElement = document.getElementById(countryElementId);
	countryElement.length=0;
	countryElement.options[0] = new Option('Select District','');
	countryElement.selectedIndex = 0;
	for (var i=0; i<country_arr.length; i++) {
		countryElement.options[countryElement.length] = new Option(country_arr[i],country_arr[i]);
	}

	// Assigned all countries. Now assign event listener for the states.

	if( stateElementId ){
		countryElement.onchange = function(){
			populateStates( countryElementId, stateElementId );
		};
	}
}