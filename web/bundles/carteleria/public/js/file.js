function startcalendar(jsondata,jsonmaterias) {

    if(jsondata=='null')
        jsondata=null;
    if(jsonmaterias=='null')
        jsonmaterias=null;
    $('#calendar').fullCalendar({
        //now: '2017-11-07',
        locale: 'es',
        minTime: "07:00:00",
        maxTime: "20:00:00",
        schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
        editable: false, // enable draggable events
        aspectRatio: 1.8,
        scrollTime: '00:00', // undo default 6am scrollTime
        header: {
            //left: 'today prev,next',
            left: 'prev,next',
            center: 'title',
            //right: 'timelineDay,timelineThreeDays,agendaWeek,month,listWeek'
            right: 'timelineDay,listWeek,month'
        },
        defaultView: 'timelineDay',
        views: {
            timelineThreeDays: {
                type: 'timeline',
                duration: { days: 3 }
            }
        },
        resourceLabelText: 'Materias',
        resources:
            jsonmaterias
        ,
        events: jsondata,
        eventClick:  function(event, jsEvent, view) {
            var color=$(this).css('background-color');
            console.log(event);



            vex.dialog.alert({ unsafeMessage:'<div style="text-align: center"><span>'+event.materia+'. ' +event.title+'. Desde '+event.description+'</span></div>'

                , className: 'vex-theme-wireframe' ,
                overlayClassName: 'success',
                contentClassName: 'borderblueclass',
                closeClassName: 'closebleclass',
                afterOpen:function(){
                    $('.borderblueclass').attr('style','border-color:'+color+' !important');
                    $('.vex-dialog-button-primary').attr('style','background:'+color+' !important');
                }
            });

            $('.vex-dialog-button-primary').attr('style','background:'+color+' !important');
        },
    });


}

$(function(){



    var jsondatavar=jQuery.parseJSON($("#jsontext").val());
    var jsonmaterias=jQuery.parseJSON($("#jsonmaterias").val());

    jsondatavar.forEach(function(x){
        x.start =moment(x.start+'T'+ x.datehour);
        x.end=moment(x.end+'T'+ x.enddatehour);

    });

    startcalendar(jsondatavar,jsonmaterias);




});

var timeout = null;
$(document).ready(function(){

    if($(window).width() <= 767){
        screen.orientation.lock('landscape');
        $('.content-header').hide();
        $('.calendar').css('font-size','12px !important');
        $('h2').attr('style','font-size:16px !important');
        $('.logo').hide();
        $('#calendar').attr('style','margin-left:-8% !important;');
    }


    $("input[name = 'q']").keyup(function(  ) {
        var texto=$(this).val();
        timeout = setTimeout(function (e) {
            Search(texto);
        }, 500);

    });

    $('.sidebar-form').submit(function( event ) {
        event.preventDefault();
        Search($("input[name = 'q']").val());

    });

    function Search(text){
        if(text.length==0){
            $('#calendar') .fullCalendar( 'refetchResources' );
        }
        else if(text.length>=3){
            var calendar=  $('#calendar');
            calendar .fullCalendar( 'refetchResources' );
            var resources= calendar.fullCalendar( 'getResources' );
            resources.forEach(function(elem){
                if (!elem.title.toLowerCase().includes(text.toLowerCase())){
                    $('#calendar') .fullCalendar( 'removeResource', elem.id )
                }
            });
        }

   }




});

