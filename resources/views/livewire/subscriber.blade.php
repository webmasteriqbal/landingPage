<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 col-xl-6  text-center">
    <!-- /START SUBSCRIBE FORM -->
    <div class="subscribe-form text-center">
        <form class="form-inline mx-auto" wire:submit.prevent="subscribe">
            <input type="email" name="email" class="form-control btn-rounded" placeholder="youremail@gmail.com"
                wire:model="email">
            <button type="submit" class="btn btn-purple btn-round">
                <i class="icofont icofont-paper-plane"></i>
            </button>
        </form>

        <p class="small-title">
            @error('email')
            <div class=" border border-danger p-1">{{ $message }}</div>
            <br>
            @enderror
            Subscribe with your mail so we can notify you when our site is ready
        </p>
    </div>

    <!-- /END SUBSCRIBE FORM -->
    @if ($confirmModel)

    <!-- Modal -->
    <div class="modal fade show" style="display: block; padding-right: 16px;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded">
                <div class="modal-body text-center text-dark">
                    <button type="button" class="close text-right text-danger" wire:click='hideModel'>
                        &times;
                    </button>
                    <img src="{{ asset('img/emails.png') }}" class="img-fluid">
                    <h4 class="text-dark ">
                        Thank you so much for subscribing to our site.
                    </h4>
                    <br>
                    <p class="text-dark font-weight-lighter font-italic">
                        Your mail has been successfully added to our subscribe list.You will be notified via e-mail
                        when
                        the development of our site is completed😉
                    </p>
                </div>
            </div>
        </div>
    </div>

    @endif
</div>
