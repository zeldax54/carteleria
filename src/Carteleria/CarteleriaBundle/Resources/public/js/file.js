function startcalendar(jsondata,jsonmaterias) {

    if(jsondata=='null')
        jsondata=null;
    if(jsonmaterias=='null')
        jsonmaterias=null;

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
        defaultView: 'timelineDay',
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
        }
        ,
        editable: false,
        droppable: false, // this allows things to be dropped onto the calendar !!!
        drop: function (date, allDay) { // this function is called when something is dropped

        }
        ,

        //events:  jsondata


        resourceLabelText: 'Materias',
        resources: [
           jsonmaterias
        ],
        events: [
            //{ id: '1', resourceId: 'b', start: '2017-11-07T02:00:00', end: '2017-11-07T07:00:00', title: 'event 1' },
            //{ id: '2', resourceId: 'c', start: '2017-11-07T05:00:00', end: '2017-11-07T22:00:00', title: 'event 2' },
            //{ id: '3', resourceId: 'd', start: '2017-11-06', end: '2017-11-08', title: 'event 3' },
            //{ id: '4', resourceId: 'e', start: '2017-11-07T03:00:00', end: '2017-11-07T08:00:00', title: 'event 4' },
            //{ id: '5', resourceId: 'f', start: '2017-11-07T00:30:00', end: '2017-11-07T02:30:00', title: 'event 5' }
        ]
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
