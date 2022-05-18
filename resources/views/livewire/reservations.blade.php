<div>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="text-center fw-bold">
                <x-feathericon-menu/>
                List of Reservations
            </h3>

            <button class="btn btn-success btn-sm fw-bold" data-bs-toggle="modal" data-bs-target="#store" wire:click="set">
                <x-feathericon-plus-circle/>
                Add New Reservation
            </button>

            <span class="input-group w-25 mb-2">
                <span class="input-group-text fw-bold">
                    <x-feathericon-search/>
                    <span class="text-nowrap">Search Client</span>
                </span>
                <input type="text" class="form-control" wire:model="search">
            </span>
        </div>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Client's Name</th>
                    <th>Type of Event</th>
                    <th>Contact Number</th>
                    <th>Requested Date</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $r)
                <tr>
                    <td class="fw-bold">{{ $r->reservation_id }}</td>
                    <td class="text-capitalize">{{ $r->name }}</td>
                    <td>{{ ucfirst($r->event) }}</td>
                    <td>{{ $r->contact }}</td>
                    <td>{{ date('M d, Y', strtotime($r->request_date)) }}</td>
                    <td class="d-flex justify-content-evenly">
                        <button class="btn btn-primary btn-sm fw-bold" data-bs-toggle="modal" data-bs-target="#store" wire:click="set({{$r->reservation_id}})">
                            <x-feathericon-edit/>
                            View or Edit
                        </button>
                        <button class="btn btn-danger btn-sm fw-bold" data-bs-toggle="modal" data-bs-target="#delete" wire:click="set({{$r->reservation_id}})">
                            <x-feathericon-trash-2/>
                            Delete
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <!-- Store -->
    <div class="modal fade" id="store" tabindex="-1" role="dialog" aria-labelledby="store" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header border-0 bg-dark bg-gradient text-white">
                    <h5 class="modal-title fw-bold">
                        <x-feathericon-calendar/>
                        Reservation Information
                    </h5>
                    <button type="button" class="btn btn-sm" data-bs-dismiss="modal" aria-label="Close">
                        <x-feathericon-x class="text-white"/>
                    </button>
                </div>
                <div class="modal-body border-0 @if (session()->has('success')) bg-success bg-gradient @endif">
                    <div class="container-fluid">
                        @if (session()->has('success'))
                        <div class="bg-success text-white p-2 fw-bold">
                            <x-feathericon-check/>
                            {{ session()->get('success') }}
                        </div>
                        @endif
                        <div class="input-group mt-2">
                            <span class="input-group-text fw-bold">
                                <span class="text-danger">*</span>
                                Client's Full Name
                            </span>
                            <input type="text" class="text-capitalize form-control" placeholder="Juan Dela Cruz" name="name" wire:model="name">
                        </div>
                        @error('name')
                        <span class="p-1 mb-5 small w-100 text-danger">{{ $message }}</span>
                        @enderror

                        <div class="input-group mt-2">
                            <span class="input-group-text fw-bold">
                                <span class="text-danger">*</span>
                                Type of Event
                            </span>
                            <input type="text" class="form-control" placeholder="Ex: Birthday, Anniversary, Wedding etc.." wire:model="event">
                        </div>
                        @error('event')
                        <span class="p-1 mb-5 small w-100 text-danger">{{ $message }}</span>
                        @enderror

                        <div class="input-group mt-2">
                            <span class="input-group-text fw-bold">
                                <span class="text-danger">*</span>
                                Contact Number
                            </span>
                            <input type="text" class="form-control" placeholder="Telephone or Mobile" wire:model="contact">
                        </div>
                        @error('contact')
                        <span class="p-1 mb-5 small w-100 text-danger">{{ $message }}</span>
                        @enderror

                        <div class="input-group mt-2">
                            <span class="input-group-text fw-bold">
                                <span class="text-danger">*</span>
                                Requested Date
                            </span>
                            <input type="date" class="form-control" wire:model="request_date">
                        </div>
                        @error('request_date')
                        <span class="p-1 mb-5 small w-100 text-danger">{{ $message }}</span>
                        @enderror

                        <div class="input-group mt-2">
                            <span class="input-group-text fw-bold">
                                Estimated No. of Guests
                            </span>
                            <input type="text" class="form-control" placeholder="Ex: 100-500" wire:model="guests">
                        </div>
                        @error('guests')
                        <span class="p-1 mb-5 small w-100 text-danger">{{ $message }}</span>
                        @enderror
                        
                        <textarea class="form-control mt-2" placeholder="Address of the Selected Venue..." rows="4"></textarea>
                        <textarea class="form-control mt-2" placeholder="Special Requests and Instructions by the Client..." rows="4"></textarea>

                        <div class="input-group mt-2">
                            <span class="input-group-text fw-bold">Assigned Date: </span>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" wire:click="store">
                        <x-feathericon-save/>
                        Save Record
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete -->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header border-0 bg-danger bg-gradient text-white">
                    <h5 class="modal-title fw-bold">
                        <x-feathericon-trash-2/>
                        Reservation Information
                    </h5>
                    <button type="button" class="btn btn-sm" data-bs-dismiss="modal" aria-label="Close">
                        <x-feathericon-x class="text-white"/>
                    </button>
                </div>
                <div class="modal-body border-0">
                    <div class="container-fluid">
                        <label>Client's Name</label>
                        <input type="text" class="text-capitalize form-control mb-3 fw-bold" disabled  name="name" wire:model="name">

                        <label>Type of Event</label>
                        <input type="text" class="form-control mb-3 fw-bold" disabled wire:model="event">

                        <label>Contact Number</label>
                        <input type="text" class="form-control mb-3 fw-bold" disabled wire:model="contact">

                        <label>Requested Date</label>
                        <input type="date" class="form-control mb-3 fw-bold" disabled wire:model="request_date">
                    </div>
                </div>
                <div class="modal-footer">
                    @if (session()->has('deleted'))
                        <div class="bg-success text-white p-2 fw-bold">
                            <x-feathericon-check/>
                            {{ session()->get('deleted') }}
                        </div>
                    @else
                    <span class="small fw-bold">Are you sure to delete this record and all related data?</span>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#store" wire:click="set({{ $reservation_id }})">
                        <x-feathericon-edit/>
                        Edit Instead
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-dismiss="#delete">
                        <x-feathericon-x/>
                        Cancel
                    </button>
                    <button type="button" class="btn btn-success" wire:click="delete({{ $reservation_id }})">
                        <x-feathericon-trash-2/>
                        Yes
                    </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
