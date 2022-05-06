<head>
    <link href="../public/css/agenda.css" rel="stylesheet" >
  </head>

<div class="modal fade" id="agenda_edit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true" >
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
          @if (is_array($agenda)||is_object($agenda))
          
          @foreach ($agenda as $agenda)
          <input type="text" name="nom" placeholder="Nom" id="nom" value="{{$agenda->nom}}">   <input type="text" name="prenom" placeholder="Prénom" id="prenom"  value="{{$agenda->prenom}}"><br><br>
          <input type="tel" name="tel" placeholder="Numéro de téléphone" id="tel" value="{{$agenda->tel}}">    <input type="date" name="date" placeholder="Date" id="date" value="{{$agenda->date}}">      <input type="time" name="heure" placeholder="Heure" id="heure" value="{{$agenda->heure}}" >
              
          @endforeach
         
        @endif
        </div>
      </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="btnEn" href="{{URL::to('/modifier_agenda/')}}">Enregister</button>

        </div>
      </div>
    </div>
  </div>