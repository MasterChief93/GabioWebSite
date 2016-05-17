title: Richiedi servizio
date: 2016-05-14


<form action="#" method="POST">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="applicant_name">
    <label class="mdl-textfield__label" for="applicant_name">Nome e cognome richiedente servizio</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="patient_name">
    <label class="mdl-textfield__label" for="patient_name">Nome e cognome paziente</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="number" pattern="/^([+]39)?((38[{8,9}|0])|(34[{7-9}|0])|(36[6|8|0])|(33[{3-9}|0])|(32[{8,9}]))([\d]{7})$/" id="applicant_phone_number">
    <label class="mdl-textfield__label" for="applicant_phone_number">Numero di telefono</label>
    <span class="mdl-textfield__error">Numero non valido</span>
  </div>
  <div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows="3" maxrows="6" id="additional_info"></textarea>
  <label class="mdl-textfield__label" for="schools">Informazioni aggiuntive</label>
</div>
</form>


</form>
