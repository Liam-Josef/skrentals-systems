{{--<!-- Service Request Modal -->--}}
{{--<div class="modal fade" id="mainRequest" tabindex="-1" role="dialog" aria-labelledby="maintReqModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog modal-md" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h3 class="mb-3"><span>Submit: </span>Service Request</h3>--}}
{{--            </div>--}}
{{--            <form action="" method="post">--}}
{{--                @csrf--}}
{{--                @method('PUT')--}}
{{--                <div class="modal-body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-6">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="service_type">Select Request Type</label>--}}
{{--                                <select name="service_type" id="service_type" class="form-control">--}}
{{--                                    <option value="Service">Service</option>--}}
{{--                                    <option value="Repair">Repair</option>--}}
{{--                                    <option value="COC">COC</option>--}}
{{--                                    <option value="Summerize">Summerize</option>--}}
{{--                                    <option value="Winterize">Winterize</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <!-- Vehicle List -->--}}
{{--                            <ul class="nav nav-tabs nav-justified mb-3 dock-depart" id="runnerView" role="tablist">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link active" id="view-seadoo-tab" data-toggle="tab" href="#seadoo-tab" role="tab" aria-controls="seadoo-tab"--}}
{{--                                       aria-selected="true">--}}
{{--                                        SeaDoo--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" id="view-pontoon-tab" data-toggle="tab" href="#pontoon-tab" role="tab" aria-controls="pontoon-tab"--}}
{{--                                       aria-selected="true">--}}
{{--                                        Pontoon--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" id="view-scarab-tab" data-toggle="tab" href="#scarab-tab" role="tab" aria-controls="scarab-tab"--}}
{{--                                       aria-selected="true">--}}
{{--                                        Scarab--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <!-- Vehicle List Content -->--}}
{{--                    <div class="tab-content" id="myTabContent">--}}
{{--                        <div class="tab-pane fade show active" id="seadoo-tab" role="tabpanel" aria-labelledby="seadoo-tab">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="service_type">Select SeaDoo</label>--}}
{{--                                        --}}{{--                                        <select name="service_type" id="service_type" class="form-control">--}}
{{--                                        --}}{{--                                           @foreach($vehicleSeaDoo as $vehicle)--}}
{{--                                        --}}{{--                                                <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>--}}
{{--                                        --}}{{--                                            @endforeach--}}
{{--                                        --}}{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane fade show active" id="seadoo-tab" role="tabpanel" aria-labelledby="pontoon-tab">--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane fade show active" id="seadoo-tab" role="tabpanel" aria-labelledby="scarab-tab">--}}
{{--                        </div>--}}
{{--                    </div>--}}



{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>--}}
{{--                    <button class="btn btn-primary" type="submit">Submit Request</button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
