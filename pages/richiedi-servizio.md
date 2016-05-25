title: Richiedi servizio
date: 2016-05-14


<div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">


<h2>Richiedi Servizio</h2>

            <form action="#" method="POST" class="mdl-cell mdl-cell--12-col">

                            <h3>Dati Richiedente</h3>
                            <i class="material-icons large">account_box</i>
                            <div class="input-field mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="applicant_name">
                                <label class="mdl-textfield__label" for="applicant_name">Nome e cognome del richiedente</label>
                            </div>

                            <i class="material-icons large">local_phone</i>
                            <div class="input-field mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="number"
                                       pattern="/^([+]39)?((38[{8,9}|0])|(34[{7-9}|0])|(36[6|8|0])|(33[{3-9}|0])|(32[{8,9}]))([\d]{7})$/"
                                       id="applicant_phone_number">
                                <label class="mdl-textfield__label" for="applicant_phone_number">Numero di
                                    telefono fisso</label>
                                <span class="mdl-textfield__error">Numero non valido</span>
                            </div>

                            <i class="material-icons">stay_current_portrait</i>
                            <div class="input-field mdl-cell mdl-cell--5-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="number"  id="applicant_mobile_phone_number">
                                <label class="mdl-textfield__label" for="applicant_mobile_phone_number">Numero di
                                    telefono cellulare</label>
                                <span class="mdl-textfield__error">Numero non valido</span>
                            </div>

                            <h3>Dati Paziente</h3>
                            <i class="material-icons large">assignment_ind</i>
                            <div class="input-field mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="patient_name">
                                <label class="mdl-textfield__label" for="patient_name">Nome e cognome del paziente</label>
                            </div>

                            <i class="material-icons">toc</i>
                            <div class="input-field mdl-cell mdl-cell--5-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="patient_address">
                                <label class="mdl-textfield__label" for="patient_address">Indirizzo dell'abitazione</label>
                            </div>
                            <div class="input-field mdl-cell mdl-cell--2-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="patient_address_city">
                                <label class="mdl-textfield__label" for="patient_address_city">Città</label>
                            </div>
                            <div class="input-field mdl-cell mdl-cell--2-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="number" id="patient_address_stairs_num">
                                <label class="mdl-textfield__label" for="patient_address_stairs_num">Piani di scale</label>
                            </div>
                            <div class="input-field mdl-cell mdl-cell--2-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                              <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="lift-check">
                                <input type="checkbox" id="lift-check" class="mdl-checkbox__input">
                                <span class="mdl-checkbox__label">Ascensore</span>
                              </label>
                            </div>
                            <div class="input-field mdl-cell mdl-cell--2-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="number" id="patient_address_stairs_num">
                                <label class="mdl-textfield__label" for="patient_address_stairs_num">Piani di scale</label>
                            </div>

                            <div class="input-field mdl-cell mdl-cell--2-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="number" id="patient_age">
                                <label class="mdl-textfield__label" for="patient_age">Età</label>
                            </div>
                            <div class="input-field mdl-cell mdl-cell--2-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="number" id="patient_weight">
                                <label class="mdl-textfield__label" for="patient_weight">Peso in Kq</label>
                            </div>
                            <div class="input-field mdl-cell mdl-cell--2-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                              <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="oxigen-check">
                                <input type="checkbox" id="oxigen-check" class="mdl-checkbox__input">
                                <span class="mdl-checkbox__label">Ossigeno</span>
                              </label>
                            </div>
                            <div class="input-field mdl-cell mdl-cell--2-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                              <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="wander-check">
                                <input type="checkbox" id="wander-check" class="mdl-checkbox__input">
                                <span class="mdl-checkbox__label">Deambula</span>
                              </label>
                            </div>
                            <div class="input-field mdl-cell mdl-cell--5-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                              <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="sit-check">
                                <input type="checkbox" id="sit-check" class="mdl-checkbox__input">
                                <span class="mdl-checkbox__label">Posizione seduta</span>
                              </label>
                            </div>
                            <div class="input-field mdl-cell mdl-cell--5-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                              <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="supine-check">
                                <input type="checkbox" id="supine-check" class="mdl-checkbox__input">
                                <span class="mdl-checkbox__label">Posizione supina (sdraiato/a)</span>
                              </label>
                            </div>

                            <h3>Servizio</h3>
                            <div class="input-field mdl-cell mdl-cell--12-col mdl-selectfield mdl-js-selectfield">
                              <label class="mdl-selectfield__label" for="service_type">Tipologia di servizio</label>
                              <select class="mdl-selectfield__select" id="service_type" name="service_type">
                                <option value="discharge">Dimissioni</option>
                                <option value="examination">Visita di controllo</option>
                                <option value="admission">Ricovero in casa di cura o clinica</option>
                              </select>
                            </div>
                            <div class="mdl-cell mdl-cell--12-col">
                              <div class="input-field mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="place_from">
                                <label class="mdl-textfield__label" for="place_from">Luogo di partenza</label>
                              </div>
                              <div class="input-field mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="place_to">
                                <label class="mdl-textfield__label" for="place_to">Luogo di arrivo</label>
                              </div>
                              <div class="input-field mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="section">
                                <label class="mdl-textfield__label" for="section">Reparto</label>
                              </div>
                            </div>

                            <h3>Informazioni aggiuntive</h3>
                            <i class="material-icons large">message</i>
                            <div class="input-field mdl-cell--11-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <textarea class="mdl-textfield__input" rows="3" id="additional_info" style="max-height: 200px"></textarea>
                            </div>

                            <div class="mdl-cell--8-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <button id="send-show-snackbar" class="mdl-button mdl-js-button mdl-button--raised"
                                        type="button">
                                    Invia richiesta
                                </button>
                            </div>
                            <div id="send-snackbar" class="mdl-js-snackbar mdl-snackbar">
                                <div class="mdl-snackbar__text"></div>
                                <button class="mdl-snackbar__action" type="button"></button>
                            </div>
                            <script>
                                (function () {
                                    'use strict';
                                    var snackbarContainer = document.querySelector('#send-snackbar');
                                    var showSnackbarButton = document.querySelector('#send-show-snackbar');
                                    var handler = function (event) {
                                        showSnackbarButton.style.backgroundColor = '';
                                    };
                                    showSnackbarButton.addEventListener('click', function () {
                                        'use strict';
                                        showSnackbarButton.style.backgroundColor = '#' +
                                                Math.floor(Math.random() * 0xFFFFFF).toString(16);
                                        var data = {
                                            message: 'Richiesta Inviata',
                                            timeout: 2000,
                                            actionHandler: handler,
                                        };
                                        snackbarContainer.MaterialSnackbar.showSnackbar(data);
                                    });
                                }());
                            </script>
                        </form>
</div>
