<div>
    <form wire:submit.prevent="StoreUserData">
        @csrf
        <div class="p-5">
            <div class="grid grid-cols-12 gap-x-5">
                <div class="col-span-12 xl:col-span-6">
                    <div>
                        <label for="name" class="form-label">Employee Name</label>
                        <input id="name" wire:model.lazy="name" type="text" class="form-control  @error('name') border-danger @enderror" placeholder="Please Enter Employee Name">
                        <div class="text-danger mt-2">@error('name'){{$message}}@enderror</div>
                    </div>
                    <div class="mt-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" wire:model.lazy="email" type="email" class="form-control  @error('email') border-danger @enderror" placeholder="Please Enter Employee Email" >
                        <div class="text-danger mt-2">@error('email'){{$message}}@enderror</div>
                    </div>
                    <div class="mt-3">
                        <label for="role" class="form-label">Role</label>
                        <select wire:model.lazy ="role" id="role" class="form-select  @error('role') border-danger @enderror">
                            <option value="">Select Role</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                            @endforeach
                        </select>
                        <div class="text-danger mt-2">@error('role'){{$message}}@enderror</div>
                    </div>
                    <div class="mt-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select  id="gender" wire:model.lazy="gender" class="form-select @error('gender') border-danger @enderror">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <div class="text-danger mt-2">@error('gender'){{$message}}@enderror</div>
                    </div>
                </div>
                <div class="col-span-12 xl:col-span-6">
                    <div class="mt-3 xl:mt-0">
                        <label for="Date of Birth" class="form-label">Date of Birth</label>
                        <input id="Date of Birth" wire:model.lazy="birthday" type="date" class="form-control @error('birthday') border-danger @enderror">
                        <div class="text-danger mt-2">@error('birthday'){{$message}}@enderror</div>
                    </div>
                    <div class="mt-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input id="phone" wire:model.lazy="phone" type="text" class="form-control @error('phone') border-danger @enderror" placeholder="Please Enter Employee Phone Number" >
                        <div class="text-danger mt-2">@error('phone'){{$message}}@enderror</div>
                    </div>
                    <div class="mt-3">
                        <label for="address" class="form-label">Address</label>
                        <input id="address" wire:model.lazy="address" type="text" class="form-control @error('address') border-danger @enderror" placeholder="Please Enter Employee Address" >
                        <div class="text-danger mt-2">@error('address'){{$message}}@enderror</div>
                    </div>
                    <div class="mt-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" wire:model.lazy="password" type="text" class="form-control @error('password') border-danger @enderror" placeholder="Please Enter Employee Password" >
                        <div class="text-danger mt-2">@error('password'){{$message}}@enderror</div>
                    </div>
                </div>
            </div>
            <div class="text-right mt-5">
                <button type="submit" class="btn btn-primary w-24 mt-3">Save</button>
            </div>
        </div>
    </form>
</div>
