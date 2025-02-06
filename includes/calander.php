<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.15/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.15/index.global.min.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
      });

    </script>
    <style>
        @media only screen and (max-width: 600px) {
            div{
                display: none;
            }
        }

        @media (min-width: 576px) and (max-width: 992px) {
        div{
                display: none;
            }
}
       
    </style>
  </head>
  <body>
  
    <div id='calendar' style="
    width:30%;  
    float:right;
    margin-top:-480px;
    margin-right:150px;
    background: rgb(238, 174, 202);
    background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(148, 187, 233, 1) 100%);
    padding: 20px;b
    border-radius: 6px;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);">

    </div>
  </body>
</html>
