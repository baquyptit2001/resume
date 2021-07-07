<div class="col-lg-12 mt-5 contact-form">
    <form id="contactForm" method="POST" wire:submit.prevent="save">
        <div class="row">
            <div class="col-lg-6 form-item">
                <div class="form-group">
                    <input name="name" id="name" type="text" class="form-control" wire:model="name" placeholder="Your Name*" required >
                </div>
            </div>
            <div class="col-lg-6 form-item">
                <div class="form-group">
                    <input name="email" id="email" type="email" class="form-control" wire:model="email" placeholder="Your Email*" required >
                </div>
            </div>
            <div class="col-12 form-item">
                <div class="form-group">
                    <input name="subject" id="subject" type="text" class="form-control" wire:model="title" placeholder="Your Subject*" required >
                </div>
            </div>
            <div class="col-12 form-item">
                <div class="form-group">
                    <textarea name="comments" id="comments" rows="4" class="form-control" wire:model="message" placeholder="Your message..."></textarea>
                </div>
            </div>
            <div class="col-sm-12 mt-4 text-left">
                <div class="button-border">
                    <button type="submit" class="pill-button" style="cursor: pointer" id="submit-btn" onclick="sendEmail()">Send Message</button>
                </div>
                <div id="message" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000" >
                    <div class="toast-body d-inline-block"></div>
                    <button type="button" class="pr-3 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true" class="lni-close size-xs "></span>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>