<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="bg-appointment rounded">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-lg-6 py-5">
                    <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                        <h1 class="text-center text-white mb-4">Prendre un rendez-vous</h1>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Votre nom" required />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" placeholder="Votre adresse e-mail" required />
                            </div>
                            <div class="form-row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="date" id="date" data-target-input="nearest">
                                            <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Date souhaitée" data-target="#date" data-toggle="datetimepicker"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="time" id="time" data-target-input="nearest">
                                            <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Heure souhaitée" data-target="#time" data-toggle="datetimepicker"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;">
                                    <option selected>Choisissez un service</option>
                                    <option value="1">Consultation juridique</option>
                                    <option value="2">Litige en droit du travail</option>
                                    <option value="3">Rédaction de contrat</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Confirmer le rendez-vous</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
