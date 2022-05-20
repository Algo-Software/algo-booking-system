<div>
    <div class="container-fluid">
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

                <textarea class="form-control mt-2" placeholder="Address of the Selected Venue..." rows="4" wire:model="venue"></textarea>
                <textarea class="form-control mt-2" placeholder="Special Requests and Instructions by the Client..." rows="4" wire:model="requests"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" wire:click="store">
                <x-feathericon-save/>
                Request Reservation
            </button>
        </div>
    </div>
</div>
