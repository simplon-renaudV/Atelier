$(document).ready(function() {
    $('#calendar').fullCalendar({
        googleCalendarApiKey: '#######################',
        events: {
            googleCalendarId: '##########@gmail.com'
        },
    	theme: true
    });
});

$( "#datepicker" ).datepicker();
