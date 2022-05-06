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
  