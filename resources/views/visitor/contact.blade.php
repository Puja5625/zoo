@extends('visitor/visitorpage')
@section('content')

<main  style="background-image:linear-gradient(50deg,white,lightgreen);">
<section class="py-5 bg-cover ">
    <div class="container py-5">
        <h1 class="lined">Contact</h1>
        <p class="lead my-4">The quickest way to find a contact, whether or not they’re already in your Contacts list, is to start typing the person’s name,
            phone number, or email address in the search box. </p>
    </div>
</section>

<section class="py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12 col-md-6 mb-4">
                        <div class="icon mb-4"><i class="fa-solid fa-location-dot"></i></div>
                        <h5 class="lined mb-4">Address</h5>
                        <p class="text-muted mb-0 text-small">13/25 Mya yatanar street</p>
                        <p class="text-muted mb-0 text-small">Damayon Road</p>
                        <p class="text-muted mb-0 text-small">Yangon, <strong>RIG </strong></p>
                    </div>
                    <div class="col-lg-12 col-md-6 mb-4">
                        <div class="icon mb-4"><i class="fa-solid fa-mobile-retro"></i></div>
                        <h5 class="lined mb-4">Call center</h5>
                        <p class="text-muted mb-3 text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum iure reiciendis sapiente.</p>
                        <p class="text-muted font-weight-bold">+959668899</p>
                    </div>
                    <div class="col-lg-12 col-md-6 mb-4">
                        <div class="icon mb-4"><i class="fab fa-facebook-f"></i></div>
                        <h5 class="lined mb-4">Electronic support</h5>
                        <p class="text-muted mb-3 text-small">Please feel free to write an email to us or to use our electronic ticketing system.</p>
                        <ul>
                            <li><a href="#" class="font-weight-bold text-small">ASD@mycompany.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 ml-auto">
                <div class="col-lg-12 col-md-6 mb-4">
                    <div class="icon mb-4"><i class="fa-solid fa-file-contract"></i></div>
                    @include("flashmessages")
                    <h5 class="lined mb-4">Contact form</h5>
                    <p class="text-muted text-small">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                    <form id="contact-form" method="post" action="{{route('contactmessagepost')}}" class="contact-form form">
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="name" class="font-weight-normal">Firstname</label>
                                <input id="name" type="text" name="f_firstname" class="form-control" value="{{$visitors['v_firstname']}}" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="surname" class="font-weight-normal">Lastname </label>
                                <input id="surname" type="text" name="f_lastname" class="form-control" value="{{$visitors['v_lastname']}}" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="email" class="font-weight-normal">Email</label>
                                <input id="email" type="email" name="f_email" class="form-control" value="{{$visitors['v_email']}}" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="subject" class="font-weight-normal">Send To</label>
                                <input id="subject" type="email" name="sendemail" class="form-control" value="{{$accounts['admin_email']}}" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="message" class="font-weight-normal">Message</label>
                                <textarea id="message" rows="4" name="f_message" class="form-control" required></textarea>
                            </div>
                            <div class="form-group col-lg-12 mt-3" style="float:right;">
                                    <button type="submit" class="btn btn-primary " name="submit"> <i class="far fa-envelope mr-2"> </i>Send message</button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="row">
        <div class="col">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.9647317543404!2d96.15882757504495!3d16.77843018400861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec867a9fe0a3%3A0xe85d969168d86e66!2sRealistic%20Infotech%20Group!5e0!3m2!1smy!2smm!4v1717934426131!5m2!1smy!2smm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
</div>
<!-- <script src="vendor/lightbox2/js/lightbox.min.js"></script> -->
<!-- <script src="vendor/leaflet/leaflet.js"></script> -->
<!-- <script src="js/front.js"></script> -->
</main>

@endsection
