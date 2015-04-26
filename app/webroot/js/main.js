$('#agroupationList .SearchPanel-item').on('click',function(){
	var id = $(this).val()
	$.post("http://localhost:8080/PromesaEducativa/musicalAgroupations/jsonResponseAgroupations",{ id: id},
		function (data) {
			console.log(data);
			var i = $.parseJSON(data);
			console.log(i);
			$("#name").html('Nombre: ' + i['MusicalAgroupation']['name']);
			$("#schedule").html('Horario de labores: ' + i['MusicalAgroupation']['work_schedule']);
			$("#conformation").html('Tiempo en la agrupación: ' + i['MusicalAgroupation']['conformation_time_agroupation']);
			$("#work_hours").html('Horas de trabajo diarias: ' + i['MusicalAgroupation']['daily_work_hours']);
			$("#work_days").html('Dias de trabajo a la semana: ' + i['MusicalAgroupation']['week_work']);
			$("#frecuency").html('Frencuencia de presentaciones: ' + i['MusicalAgroupation']['presentation_concert_frecuency']);
			$("#integrants").html('Numero de integrantes: ' + i['MusicalAgroupation']['number_integrants']);
			$("#entity").html('Entidad: ' + i['Entity']['name']);
			$("#seat").html('Sede: ' + i['Seat']['name']);
		}
		)
	});

$('#participantList .SearchPanel-item').on('click',function(){
	var id = $(this).val()
	$.post("http://localhost:8080/PromesaEducativa/participants/jsonresponse",{ id: id},
		function (data) {
			console.log(data);
			//var i = $.parseJSON(data);
			/*console.log(i);
			$("#name").html('Nombre: ' + i['MusicalAgroupation']['name']);
			$("#schedule").html('Horario de labores: ' + i['MusicalAgroupation']['work_schedule']);
			$("#conformation").html('Tiempo en la agrupación: ' + i['MusicalAgroupation']['conformation_time_agroupation']);
			$("#work_hours").html('Horas de trabajo diarias: ' + i['MusicalAgroupation']['daily_work_hours']);
			$("#work_days").html('Dias de trabajo a la semana: ' + i['MusicalAgroupation']['week_work']);
			$("#frecuency").html('Frencuencia de presentaciones: ' + i['MusicalAgroupation']['presentation_concert_frecuency']);
			$("#integrants").html('Numero de integrantes: ' + i['MusicalAgroupation']['number_integrants']);
			$("#entity").html('Entidad: ' + i['Entity']['name']);
			$("#seat").html('Sede: ' + i['Seat']['name']);*/
		}
		)
	});

/*$('#participantList .SearchPanel-item').on('click',function(){
	var id = $(this).val();
	alert('noerror')
	/*$.post("http://localhost:8080/PromesaEducativa/participants/jsonResponseParticipants",{ id: id},
		function (data) {
			var i = $.parseJSON(data);
			console.log(i);
			$("#completeName").html('Nombre: ' + i['Participant']['first_name']);
			$("#curp").html('Horario de labores: ' + i['MusicalAgroupation']['work_schedule']);
			$("#age").html('Tiempo en la agrupación: ' + i['MusicalAgroupation']['conformation_time_agroupation']);
			$("#genre").html('Horas de trabajo diarias: ' + i['MusicalAgroupation']['daily_work_hours']);
			$("#time_agroupation").html('Dias de trabajo a la semana: ' + i['MusicalAgroupation']['week_work']);
			$("#family").html('Frencuencia de presentaciones: ' + i['MusicalAgroupation']['presentation_concert_frecuency']);
			$("#agroupation").html('Numero de integrantes: ' + i['MusicalAgroupation']['number_integrants']);
			$("#instrument").html('Entidad: ' + i['Entity']['name']);
		}
		)
	});*/


	