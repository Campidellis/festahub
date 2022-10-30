/**
 * Fullcalendar é um framework de calendário
 */

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        displayEventTime: false,
        showNonCurrentDates: false,
        locale: 'pt-br',
        initialDate: '2022-01-01',
        selectable: true,
        unselectAuto: true,
        headerToolbar: {
            left: 'prev,next today',
            center: '',
            right: 'title'
        },
        events: {
                url: 'ics/feed.ics',
                format: 'ics',
                failure: function() {
                document.getElementById('script-warning').style.display = 'block';
                }
        },
        dateClick: function(info) {
            Swal.fire({
                title: 'Escolha uma área de lazer',
                showDenyButton: true,
                icon: 'warning',
                input: 'select',
                confirmButtonText: 'Reservar',
                denyButtonText: `Cancelar`,
              }).then((result) => {
                if (result.isConfirmed) {
                  Swal.fire('Reservado!!', '', 'success')
                }
              })
            
        },
        loading: function(bool) {
                document.getElementById('loading').style.display =
                bool ? 'block' : 'none';
            }
    });

    calendar.render();
  });