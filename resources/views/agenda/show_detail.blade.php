<head>
    <link href="{{ asset('public/css/agenda.css')}}" rel="stylesheet" >
  </head>

<div class="modal fade" id="agenda_show" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true" >
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
        
       hello {{$agenda->nom?? ''}}<br>
        {{$agenda->prenom?? ''}}<br><br>
         {{$agenda->tel?? ''}}<br>
       {{$agenda->date?? ''}}<br>
         {{$agenda->heure?? ''}}
        
         
        
        </div>
      </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="btnEn" href="{{URL::to('/modifier_agenda/')}}">Enregister</button>

        </div>
      </div>
    </div>
  </div>