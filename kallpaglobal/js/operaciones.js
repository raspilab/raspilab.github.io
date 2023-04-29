    
	
function init(){
      //variables
	var calcular = document.getElementById('calcular');
	var reset = document.getElementById('borrar');
	var CT1 = document.getElementById('CT1');
		
		
    var wattiosfocos = document.getElementById('selectconsumofocos').value;
    var cantidadfocos = document.getElementById('selectfocos').value;
    var horasfocos = document.getElementById('selecthorasfocos').value;
	
	var wattiostv = document.getElementById('selectconsumotv').value;
    var cantidadtv = document.getElementById('selecttv').value;
    var horastv = document.getElementById('selecthorastv').value;
	
	var wattiosrefri = document.getElementById('selectconsumorefri').value;
    var cantidadrefri = document.getElementById('selectrefri').value;
    var horasrefri = document.getElementById('selecthorasrefri').value;
	
	var wattiosradios = document.getElementById('selectconsumoradio').value;
    var cantidadradios = document.getElementById('selectradio').value;
    var horasradios = document.getElementById('selecthorasradio').value;
	
	var wattiospc = document.getElementById('selectconsumopc').value;
    var cantidadpc = document.getElementById('selectpc').value;
    var horaspc = document.getElementById('selecthoraspc').value;
	
	var wattiosotros = document.getElementById('selectconsumootros').value;
    var cantidadotros = document.getElementById('selectotros').value;
    var horasotros = document.getElementById('selecthorasotros').value;
	
	var wattioslavadora = document.getElementById('selectconsumolava').value;
    var cantidadlavadora = document.getElementById('selectlava').value;
    var horaslavadora = document.getElementById('selecthoraslava').value; //
	
	var wattiosimpresora = document.getElementById('selectconsumoimpre').value;
    var cantidadimpresora = document.getElementById('selectimpre').value;
    var horasimpresora = document.getElementById('selecthorasimpre').value;
	
	var wattiosventilador = document.getElementById('selectconsumoventi').value;
    var cantidadventilador = document.getElementById('selectventi').value;
    var horasventilador = document.getElementById('selecthorasventi').value;
	
	var wattiosdvd = document.getElementById('selectconsumodvd').value;
    var cantidaddvd = document.getElementById('selectdvd').value;
    var horasdvd = document.getElementById('selecthorasdvd').value;
	
	var wattioslicuadoa = document.getElementById('selectconsumolicu').value;
    var cantidadlicuadora = document.getElementById('selectlicu').value;
    var horaslicuadora = document.getElementById('selecthoraslicu').value;
	
	var wattiosplancha = document.getElementById('selectconsumoplancha').value;
    var cantidadplancha = document.getElementById('selectplancha').value;
    var horasplancha = document.getElementById('selecthorasplancha').value;
	
	var wattiosmicroondas = document.getElementById('selectconsumomicro').value;
    var cantidadmicroondas = document.getElementById('selectmicro').value;
    var horasmicroondas = document.getElementById('selecthorasmicro').value;
	
	var wattiosolla = document.getElementById('selectconsumoolla').value;
    var cantidadolla = document.getElementById('selectolla').value;
    var horasolla = document.getElementById('selecthorasolla').value;
	
	var wattiosextractor = document.getElementById('selectconsumoext').value;
    var cantidadextractor = document.getElementById('selectext').value;
    var horasextractor = document.getElementById('selecthorasext').value;
	
	var wattioscafetera = document.getElementById('selectconsumocafe').value;
    var cantidadcafetera = document.getElementById('selectcafe').value;
    var horascafetera = document.getElementById('selecthorascafe').value;
	
	var wattiostermas = document.getElementById('selectconsumoterma').value;
    var cantidadtermas = document.getElementById('selectterma').value;
    var horastermas = document.getElementById('selecthorasterma').value;
	
	var textinv = document.getElementById('INV');
	var consumoteorico = document.getElementById('CT');
    var consumoreal = document.getElementById('CR');
	var voltajebat = document.getElementById('VT');
	var potpaneles = document.getElementById('PFV');
	var cantpaneles = document.getElementById('CFV');
	var intensidadbaterias = document.getElementById('BT');
	var controladorsolar = document.getElementById('CTS');
	var contenedor = document.getElementById('mostrarresultados');
	var diasautonomia = document.getElementById('selectautonomia').value;
	var container = document.getElementById('resultado-inv');
	var selector220 = document.getElementById('selectvoltaje').value;
	
	var checkBox1 = document.getElementById("check1");
	var checkBox2 = document.getElementById("check2");
	var checkBox3 = document.getElementById("check3");
	var checkBox4 = document.getElementById("check4");
	var checkBox5 = document.getElementById("check5");
	var checkBox6 = document.getElementById("check6");
	var checkBox7 = document.getElementById("check7");
	var checkBox8 = document.getElementById("check8");
	var checkBox9 = document.getElementById("check9");
	var checkBox10 = document.getElementById("check10");
	var checkBox11 = document.getElementById("check11");
	var checkBox12 = document.getElementById("check12");
	var checkBox13 = document.getElementById("check13");
	var checkBox14 = document.getElementById("check14");
	var checkBox15 = document.getElementById("check15");
	var checkBox16 = document.getElementById("check16");
	var checkBox17 = document.getElementById("check17");
	
	calcular.onclick = function(){
		
	var calcular = document.getElementById('calcular');
	var reset = document.getElementById('borrar');
	var CT1 = document.getElementById('CT1');
	
    var wattiosfocos = document.getElementById('selectconsumofocos').value;
    var cantidadfocos = document.getElementById('selectfocos').value;
    var horasfocos = document.getElementById('selecthorasfocos').value;
	
	var wattiostv = document.getElementById('selectconsumotv').value;
    var cantidadtv = document.getElementById('selecttv').value;
    var horastv = document.getElementById('selecthorastv').value;
	
	var wattiosrefri = document.getElementById('selectconsumorefri').value;
    var cantidadrefri = document.getElementById('selectrefri').value;
    var horasrefri = document.getElementById('selecthorasrefri').value;
	
	var wattiosradios = document.getElementById('selectconsumoradio').value;
    var cantidadradios = document.getElementById('selectradio').value;
    var horasradios = document.getElementById('selecthorasradio').value;
	
	var wattiospc = document.getElementById('selectconsumopc').value;
    var cantidadpc = document.getElementById('selectpc').value;
    var horaspc = document.getElementById('selecthoraspc').value;
	
	var wattiosotros = document.getElementById('selectconsumootros').value;
    var cantidadotros = document.getElementById('selectotros').value;
    var horasotros = document.getElementById('selecthorasotros').value;
	
	var wattioslavadora = document.getElementById('selectconsumolava').value;
    var cantidadlavadora = document.getElementById('selectlava').value;
    var horaslavadora = document.getElementById('selecthoraslava').value;
	
	var wattiosimpresora = document.getElementById('selectconsumoimpre').value;
    var cantidadimpresora = document.getElementById('selectimpre').value;
    var horasimpresora = document.getElementById('selecthorasimpre').value;
	
	var wattiosventilador = document.getElementById('selectconsumoventi').value;
    var cantidadventilador = document.getElementById('selectventi').value;
    var horasventilador = document.getElementById('selecthorasventi').value;
	
	var wattiosdvd = document.getElementById('selectconsumodvd').value;
    var cantidaddvd = document.getElementById('selectdvd').value;
    var horasdvd = document.getElementById('selecthorasdvd').value;
	
	var wattioslicuadoa = document.getElementById('selectconsumolicu').value;
    var cantidadlicuadora = document.getElementById('selectlicu').value;
    var horaslicuadora = document.getElementById('selecthoraslicu').value;
	
	var wattiosplancha = document.getElementById('selectconsumoplancha').value;
    var cantidadplancha = document.getElementById('selectplancha').value;
    var horasplancha = document.getElementById('selecthorasplancha').value;
	
	var wattiosmicroondas = document.getElementById('selectconsumomicro').value;
    var cantidadmicroondas = document.getElementById('selectmicro').value;
    var horasmicroondas = document.getElementById('selecthorasmicro').value;
	
	var wattiosolla = document.getElementById('selectconsumoolla').value;
    var cantidadolla = document.getElementById('selectolla').value;
    var horasolla = document.getElementById('selecthorasolla').value;
	
	var wattiosextractor = document.getElementById('selectconsumoext').value;
    var cantidadextractor = document.getElementById('selectext').value;
    var horasextractor = document.getElementById('selecthorasext').value;
	
	var wattioscafetera = document.getElementById('selectconsumocafe').value;
    var cantidadcafetera = document.getElementById('selectcafe').value;
    var horascafetera = document.getElementById('selecthorascafe').value;
	
	var wattiostermas = document.getElementById('selectconsumoterma').value;
    var cantidadtermas = document.getElementById('selectterma').value;
    var horastermas = document.getElementById('selecthorasterma').value;
	
	var textinv = document.getElementById('INV');
	var consumoteorico = document.getElementById('CT');
    var consumoreal = document.getElementById('CR');
	var voltajebat = document.getElementById('VT');
	var potpaneles = document.getElementById('PFV');
	var cantpaneles = document.getElementById('CFV');
	var intensidadbaterias = document.getElementById('BT');
	var controladorsolar = document.getElementById('CTS');
	var contenedor = document.getElementById('mostrarresultados');
	var diasautonomia = document.getElementById('selectautonomia').value;
	var container = document.getElementById('resultado-inv');
	var selector220 = document.getElementById('selectvoltaje').value;
	
	var checkBox1 = document.getElementById("check1");
	var checkBox2 = document.getElementById("check2");
	var checkBox3 = document.getElementById("check3");
	var checkBox4 = document.getElementById("check4");
	var checkBox5 = document.getElementById("check5");
	var checkBox6 = document.getElementById("check6");
	var checkBox7 = document.getElementById("check7");
	var checkBox8 = document.getElementById("check8");
	var checkBox9 = document.getElementById("check9");
	var checkBox10 = document.getElementById("check10");
	var checkBox11 = document.getElementById("check11");
	var checkBox12 = document.getElementById("check12");
	var checkBox13 = document.getElementById("check13");
	var checkBox14 = document.getElementById("check14");
	var checkBox15 = document.getElementById("check15");
	var checkBox16 = document.getElementById("check16");
	var checkBox17 = document.getElementById("check17");
	
	
		var consumoteofocos = 0;
		var consumoteotv = 0;
		var consumoteorefri = 0;
		var consumoteoradio = 0;
		var consumoteopc = 0;
		var consumoteootros = 0;
		var consumoteolavado = 0;
		
		var consumoteoimpre = 0;
		var consumoteoventi = 0;
		var consumoteodvd = 0;
		var consumoteolicu = 0;
		var consumoteoplancha = 0;
		var consumoteomicro = 0;
		var consumoteoolla = 0;
		var consumoteoext = 0;
		var consumoteocafe = 0;	
		var consumoteoterma = 0;
		
		var inversor = 0;
		var consumoteo = 0;
		var consumorea = 0;
		var potenciapanel = 0;
		var cantidadpanel = 0;
		var paneles = 0;
		var paneles1 = 0;
		var voltajebateria = 0;
		var cantidadintensidad = 0;
		var intensidadbat = 0;
		var ID = 0;
		var controlador = 0;
		var controladortotal = 0;
		var imax = 0;
		var controladordef = 0;
		var textocompleto = "";
		var consumootrosapa = 0;
		var inversortext = "";
		
		if(checkBox1.checked == true){consumoteofocos = parseFloat(cantidadfocos) * parseFloat(wattiosfocos) * parseFloat(horasfocos); textocompleto = textocompleto + String(cantidadfocos) + " focos de " + String(wattiosfocos) + " W por " + String(horasfocos) + " horas \n";} else {consumoteofocos = 0;}
		if(checkBox2.checked == true){consumoteotv = parseFloat(cantidadtv) * parseFloat(wattiostv) * parseFloat(horastv); textocompleto = textocompleto + String(cantidadtv) + " Tvs de " + String(wattiostv) + " W por " + String(horastv) + " horas \n";} else {consumoteotv = 0;}
		if(checkBox3.checked == true){consumoteorefri = parseFloat(cantidadrefri) * parseFloat(wattiosrefri) * parseFloat(horasrefri); textocompleto = textocompleto + String(cantidadrefri) + " refrigeradoras de " + String(wattiosrefri) + " W por " + String(horasrefri) + " horas \n";} else {consumoteorefri = 0;}
		if(checkBox4.checked == true){consumoteoradio = parseFloat(cantidadradios) * parseFloat(wattiosradios) * parseFloat(horasradios); textocompleto = textocompleto + String(cantidadradios) + " radios de " + String(wattiosradios) + " W por " + String(horasradios) + " horas \n";} else {consumoteoradio = 0; }
		if(checkBox5.checked == true){consumoteopc = parseFloat(cantidadpc) * parseFloat(wattiospc) * parseFloat(horaspc); textocompleto = textocompleto + String(cantidadpc) + " Pcs de " + String(wattiospc) + " W por " + String(horaspc) + " horas \n";}else{consumoteopc = 0;}
		
		if(checkBox6.checked == true){consumoteoimpre = parseFloat(cantidadimpresora) * parseFloat(wattiosimpresora) * parseFloat(horasimpresora); textocompleto = textocompleto + String(cantidadimpresora) + " impresoras de " + String(wattiosimpresora) + " W por " + String(horasimpresora) + " horas \n";}else{consumoteoimpre = 0;}
		if(checkBox7.checked == true){consumoteoventi = parseFloat(cantidadventilador) * parseFloat(wattiosventilador) * parseFloat(horasventilador); textocompleto = textocompleto + String(cantidadventilador) + " ventiladores de " + String(wattiosventilador) + " W por " + String(horasventilador) + " horas \n";}else{consumoteoventi = 0;}
		if(checkBox8.checked == true){consumoteodvd = parseFloat(cantidaddvd) * parseFloat(wattiosdvd) * parseFloat(horasdvd); textocompleto = textocompleto + String(cantidaddvd) + " DVDs de " + String(wattiosdvd) + " W por " + String(horasdvd) + " horas \n";}else{consumoteodvd = 0;}
		if(checkBox9.checked == true){consumoteolicu = parseFloat(cantidadlicuadora) * parseFloat(wattioslicuadoa) * parseFloat(horaslicuadora); textocompleto = textocompleto + String(cantidadlicuadora) + " licuadoras de " + String(wattioslicuadoa) + " W por " + String(horaslicuadora) + " horas \n";}else{consumoteolicu = 0;}
		if(checkBox10.checked == true){consumoteoplancha = parseFloat(cantidadplancha) * parseFloat(wattiosplancha) * parseFloat(horasplancha); textocompleto = textocompleto + String(cantidadplancha) + " planchas de " + String(wattiosplancha) + " W por " + String(horasplancha) + " horas \n";}else{consumoteoplancha = 0;}
		if(checkBox11.checked == true){consumoteomicro = parseFloat(cantidadmicroondas) * parseFloat(wattiosmicroondas) * parseFloat(horasmicroondas); textocompleto = textocompleto + String(cantidadmicroondas) + " microondas de " + String(wattiosmicroondas) + " W por " + String(horasmicroondas) + " horas \n";}else{consumoteomicro = 0;}
		if(checkBox12.checked == true){consumoteoolla = parseFloat(cantidadolla) * parseFloat(wattiosolla) * parseFloat(horasolla); textocompleto = textocompleto + String(cantidadolla) + " ollas electricas de " + String(wattiosolla) + " W por " + String(horasolla) + " horas \n";}else{consumoteoolla = 0;}
		if(checkBox13.checked == true){consumoteoext = parseFloat(cantidadextractor) * parseFloat(wattiosextractor) * parseFloat(horasextractor); textocompleto = textocompleto + String(cantidadextractor) + " extractores de " + String(wattiosextractor) + " W por " + String(horasextractor) + " horas \n";}else{consumoteoext = 0;}
		if(checkBox14.checked == true){consumoteocafe = parseFloat(cantidadcafetera) * parseFloat(wattioscafetera) * parseFloat(horascafetera); textocompleto = textocompleto + String(cantidadcafetera) + " cafeteras de " + String(wattioscafetera) + " W por " + String(horascafetera) + " horas \n";}else{consumoteocafe = 0;}
		if(checkBox15.checked == true){consumoteoterma = parseFloat(cantidadtermas) * parseFloat(wattiostermas) * parseFloat(horastermas); textocompleto = textocompleto + String(cantidadtermas) + " termas de " + String(wattiostermas) + " W por " + String(horastermas) + " horas \n";}else{consumoteoterma = 0;}
		
		
		if(checkBox16.checked == true){consumoteolavado = parseFloat(cantidadlavadora) * parseFloat(wattioslavadora) * parseFloat(horaslavadora);textocompleto = textocompleto + String(cantidadlavadora) + " lavadoras de " + String(wattioslavadora) + " W por " + String(horaslavadora) + " horas \n";} else {consumoteolavado = 0;}
		if(checkBox17.checked == true){consumoteootros = parseFloat(cantidadotros) * parseFloat(wattiosotros) * parseFloat(horasotros); consumootrosapa = parseFloat(cantidadotros) * parseFloat(wattiosotros); textocompleto = textocompleto + "Y otros equipos consumen " + String(consumoteootros) + " W por " + String(horasotros) + " horas \n \n"; } else {consumoteootros = 0;}
		
		consumoteo = consumoteofocos + consumoteotv + consumoteorefri + consumoteoradio + consumoteopc + consumoteootros + consumoteolavado +consumoteoimpre + consumoteoventi + consumoteodvd + consumoteolicu + consumoteoplancha + consumoteomicro + consumoteoolla + consumoteoext + consumoteocafe + consumoteoterma;
		consumoteorico.textContent = consumoteo + " Wh";
		
		consumorea =  consumoteo * 1.25;
		consumoreal.textContent = consumorea + " Wh";
		
		if (consumorea <= 1000){voltajebat.textContent = "12 Voltios"; voltajebateria =12;}
		if ((consumorea >= 1001) && (consumorea <=3999)){voltajebat.textContent = "24 Voltios"; voltajebateria =24;}
		if (consumorea >= 4000){voltajebat.textContent = "48 Voltios"; voltajebateria = 48;}
		
		
		if (consumorea <=500){potpaneles.textContent = "90 Wp"; potenciapanel = 90; imax = 5.23;}	
		if ((consumorea >=501)&&(consumorea <=1199)){potpaneles.textContent = "155 Wp"; potenciapanel = 155; imax = 8.11;}
		if ((consumorea >=1200)&&(consumorea <=2499)){potpaneles.textContent = "260 Wp"; potenciapanel = 260; imax = 8.23;}
		if (consumorea >=2500){potpaneles.textContent = "320 Wp"; potenciapanel = 320; imax = 8.63;}
		
		
		cantidadpanel = parseFloat(consumorea / (4 * potenciapanel));  //HSP
		paneles = Math.round((cantidadpanel*100)/100);
		if(paneles < 1) { cantpaneles.textContent = paneles + 1; paneles1 = paneles + 1; } else {cantpaneles.textContent = paneles; paneles1 = paneles;}
		
		ID = parseFloat(consumorea / voltajebateria);
		cantidadintensidad = parseFloat((ID * diasautonomia) / 0.6);
		intensidadbat = Math.round((cantidadintensidad*100)/100);
		intensidadbaterias.textContent = intensidadbat + " Ah";
		
		controlador = paneles * imax;
		controladortotal = Math.round((controlador*100)/100);
		if(controladortotal < 10) { controladorsolar.textContent = 10 + " A"; controladordef = 10;} else {controladorsolar.textContent = controladortotal + " A"; controladordef = controladortotal;} 
			
		contenedor.style.display = "block";
		
		
		if(selector220 == 1) 
		{
			inversor = paneles1 * potenciapanel;
			textinv.textContent = inversor + " W";
			container.style.display = "block";
			inversortext = "Y un inversor minimo de: " + inversor + " W";
		} else 
		{
			container.style.display = "none";
			inversor = "";
		}
		
		CT1.value = textocompleto 
			+ "Consumo Teorico: " + consumoteo + " Wh \n"
			+ "Consumo Real: " + consumorea + " Wh \n"
			+ "Modulos Solares: " + paneles1 + " con una potencia de " + potenciapanel + " Wh \n"
			+ "Baterias con una capacidad de: " + intensidadbat + " Ah a " + voltajebateria + " Vdc \n"
			+ "Un controlador Solar minimo de: " + controladordef + " A \n"
			+ inversortext;

	} 
	
	reset.onclick = function(){
		consumoteorico.textContent = "";
		consumoteopc = 0;
		contenedor.style.display = "block";	
	}

}


