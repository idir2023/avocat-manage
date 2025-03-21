<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="bg-appointment rounded">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-lg-8 py-5">
                    <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                        <h1 class="text-center text-white mb-4">Get An Appointment</h1>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                            </div>
                            <div class="form-row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="date" id="date" data-target-input="nearest">
                                            <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="time" id="time" data-target-input="nearest">
                                            <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         <div class="row">
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control border-0 p-4 @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required />
                                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" name="telephone" class="form-control border-0 p-4 @error('telephone') is-invalid @enderror" placeholder="Téléphone (optionnel)" value="{{ old('telephone') }}" />
                                @error('telephone') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                         </div>
                      

                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;">
                                    <option selected>Select A Service</option>
                                    <option value="1">Service 1</option>
                                    <option value="2">Service 1</option>
                                    <option value="3">Service 1</option>
                                </select>
                            </div>
                         

                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Get An Appointment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>