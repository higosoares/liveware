<div class="form4 top">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="form-bg">
                    <form wire:submit.prevent="submitForm" class="form" action="">
                        <div class="form-group">
                            <label for="name" class="sr-only">Name</label>
                            <input wire:model="name"
                                name="name"
                                type="text"
                                class="form-control"
                                placeholder="Your Name" >
                            @error('name') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input wire:model="email"
                                name="email"
                                type="email"
                                class="form-control"
                                placeholder="Email Address" >
                            @error('email') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="ddd" class="sr-only">DDD</label>
                                    <input wire:model="ddd"
                                        name="ddd"
                                        type="text"
                                        class="form-control"
                                        placeholder="DDD" >
                                    @error('ddd') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-10">
                                    <label for="phone" class="sr-only">Phone</label>
                                    <input wire:model="phone"
                                        name="phone"
                                        type="text"
                                        class="form-control"
                                        placeholder="Phone" >
                                    @error('phone') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="sr-only">Message</label>

                            <textarea wire:model="message"
                                name="message"
                                class="form-control"
                                rows="7"
                                placeholder="Write message">
                            </textarea>
                            @error('message') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <button wire:loading.attr="disabled" wire:target="submitForm"
                            type="submit"
                            class="btn text-center btn-blue">

                            <span wire:loading wire:target="submitForm"
                                class="spinner-border spinner-border-sm"
                                role="status"
                                aria-hidden="true">
                            </span>
                            Send Message
                        </button>

                        @if ($successMessage)
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Legal!</strong> {{ $successMessage }}
                                <button wire:click="$set('successMessage', null)"
                                    type="button"
                                    class="btn-close"
                                    data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
