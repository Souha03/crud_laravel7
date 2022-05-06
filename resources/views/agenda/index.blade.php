@extends('layouts.app')
@section('styles')

<link href="{{ asset('public/fullcalendar/core/main.css')}}" rel='stylesheet' />
<link href="{{ asset('public/fullcalendar/daygrid/main.css')}}" rel='stylesheet' />
<link href="{{ asset('public/fullcalendar/timegrid/main.css')}}" rel='stylesheet' />
<link href="{{ asset('public/fullcalendar/bootstrap/main.css')}}" rel='stylesheet' />
@endsection
@section('scripts')
<script src="{{ asset('public/fullcalendar/core/main.js')}}"></script>
<script src="{{ asset('public/fullcalendar/interaction/main.js')}}"></script>
<script src="{{ asset('public/fullcalendar/daygrid/main.js')}}"></script>
<script src="{{ asset('public/fullcalendar/timegrid/main.js')}}"></script>
<script src="{{ asset('public/fullcalendar/bootstrap/main.js')}}"></script>
<script src="{{ asset('public/fullcalendar/core/locales/fr.js')}}"></script>
<script src="{{ asset('public/fullcalendar/moment/main.js')}}"></script>
<script src="{{ asset('public/fullcalendar/moment-timezone/main.js')}}"></script>
<script src="{{ asset('public/fullcalendar/moment.min.js')}}"></script>
@endsection

@section("content")
<div class="container-fluid">
  <div id='calendar'></div>
</div>

<!-- Modal -->
<div class="modal fade" id="agenda_modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true" >
    <div class="modal-dialog" role="document" >
      <div class="modal-content">
        <div class="modal-header">
          <div class="modal-title">
              <h5> Nouveau RendezVous </h5>
          </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
     
        <div class="modal-body">
          <form  id="formulaire_agenda">
          {{ csrf_field() }}
          <input type="text" name="nom" placeholder="Nom" id="nom" >    <input type="text" name="prenom" placeholder="Prénom" id="prenom"><br><br>
          <input type="tel" name="tel" placeholder="Numéro de téléphone" id="tel">    <input type="date" name="date" placeholder="Date" id="date">      <input type="time" name="heure" placeholder="Heure" id="heure">
          
        </div>
      </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" class="button-1">Fermer</button>
          <button type="button" class="btn btn-primary" id="btnsave">Enregistrer</button>

        </div>
      </div>
    </div>
  </div>
 


@include('agenda.show_detail')
  



<script>


document.addEventListener('DOMContentLoaded', function() {
  
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    
    locale: 'fr',
    initialView: 'dayGridMonth',
    
    //  timeZone:Africa\Tunis,
    

      plugins: ['interaction', 'dayGrid', 'timeGrid' , 'bootstrap'],

header: {
  left: 'prev,next today',
  center: 'title',
  right: 'dayGridMonth,timeGridWeek,timeGridDay'
},
buttonText :{
  today : 'Aujourd\'hui',
  month: 'Mois',
  day : 'Jour',
  week : 'semaine'
},

 eventSources:[
   {
     url : "fetch",
     
   }
 ],


defaultDate: '2019-02-12',
navLinks: true, // can click day/week names to navigate views
selectable: true,
selectMirror: true,

select: function(arg){
  moment.locale("fr");        
  let date = moment(arg.start).format("YYYY-MM-DD");
  let heure = moment(arg.start).format("h:mm:ss");
    $("#date").val(date);
    $("#heure").val(heure);
  
    $("#agenda_modal").modal();


    $("#btnsave").click(function(){
      let prenom = $("#prenom").val();
      let tel = $("#tel").val();
       let nom = $("#nom").val();
        let date = $("#date").val();
        let heure = $("#heure").val();
        let hora = moment(date+ " " + heure).format("HH:mm:ss");
        let date_fin = moment(date).calendar();
  
        $.ajaxSetup({
            headres:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            
          }

        });

           $.ajax({
                url: "index/ajouter",
                type: "POST",
                data: {date, heure,nom,prenom,tel,
                  _token:'{{ csrf_token() }}'
                },

                success:function(data){

                  $('#agenda_modal').modal('hide');
                  $('#calendar').FullCalendar('refetchEvent', {

                    'nom' : data.nom,
                    'prenom' : data.prenom,
                    'date' : data.date,
                    'heure' : data.heure,
                    'tel' : data.tel,

                  });
                  
                  
                  
              
            },
          });

          
    });
   

    
},

editable: true,
eventDrop: function(event){

var date = moment(event.start).format("YYYY-MM-DD");
var heure = moment(event.start).format("h:mm:ss");
var id = event.id;





$.ajaxSetup({
            headres:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
          }

        });

           $.ajax({
                url: 'mod/{id}',
                type: "POST",
                dataType:'json',
                data: {date:date, heure:heure,
                  _token:'{{ csrf_token() }}'
                },

                success:function(data){
                 
                  console.log(data);
                  
              
            },
            error: function(error){
              console.log(error);
            }
          });
},



  }




)

calendar.render();

$('.fc-event').css('font-size', '17px');
$('.fc-event').css('width', '220px');
$('.fc-event').css('font-family', 'sans-serif');
$('.fc-event').css('background-cellule', '#DECB55');

})







  </script>

@endsection
 



