@extends('layouts.master')
@section('title')
Patients
@endsection

@section('content')


<div class="container">
  <div id='calendar' class="my-6 mx-6"></div>

</div>

  <script src="{{asset('assets/js/test/index.global.js')}}"></script> 
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var booking = @json($events);

    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      initialDate: '2023-01-12',
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectMirror: true,
      select: function(arg) {
        var title = prompt('Event Title:');
        if (title) {
          calendar.addEvent({
            title: title,
            start: arg.start,
            end: arg.end,
          })
        }
        calendar.unselect()
      },
      eventClick: function(arg) {
        if (confirm('Are you sure you want to delete this event?')) {
          arg.event.remove()
        }
      },
      editable: true,
      dayMaxEvents: true,
      events: booking,
    });

    calendar.render();
  });

</script>

@endsection
@section(' scripts') @toastr_js @toastr_render @endsection
