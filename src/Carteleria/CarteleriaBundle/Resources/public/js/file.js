function startcalendar(jsondata) {
    if(jsondata=='null')
        jsondata=null;
    $('#calendar').fullCalendar({
        locale: 'es',
        minTime: "07:00:00",
        maxTime: "20:00:00",
        height: 'auto',
        //buttonIcons:{
        //    prev: 'left-single-arrow',
        //    next: 'right-single-arrow',
        //    prevYear: 'left-double-arrow',
        //    nextYear: 'right-double-arrow'
        //},
        nowIndicator:true,
        defaultView: 'agenda',
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },

        buttonText: {
            today: 'hoy',
            month: 'mes',
            week: 'semana',
            day: 'día'
        },
        //Random default events
        events:  jsondata
        ,
        editable: false,
        droppable: false, // this allows things to be dropped onto the calendar !!!
        drop: function (date, allDay) { // this function is called when something is dropped

        }
    });


}

$(function(){

    var jsondatavar=jQuery.parseJSON($("#jsontext").val());
    jsondatavar.forEach(function(x){
        x.start =moment(x.start+'T'+ x.datehour);
        x.end=moment(x.end+'T'+ x.enddatehour);
    });
    console.log(jsondatavar);
    startcalendar(jsondatavar);

});
