function startcalendar(a){if(a=="null"){a=null}$("#calendar").fullCalendar({locale:"es",minTime:"07:00:00",maxTime:"20:00:00",height:"auto",nowIndicator:true,defaultView:"agenda",header:{left:"prev,next today",center:"title",right:"month,agendaWeek,agendaDay"},buttonText:{today:"hoy",month:"mes",week:"semana",day:"día"},events:a,editable:false,droppable:false,drop:function(b,c){}})}$(function(){var a=jQuery.parseJSON($("#jsontext").val());a.forEach(function(b){b.start=moment(b.start+"T"+b.datehour);b.end=moment(b.end+"T"+b.enddatehour)});console.log(a);startcalendar(a)});