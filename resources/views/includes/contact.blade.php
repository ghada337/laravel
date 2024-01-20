<!-- contact section -->

<section class="contact_section layout_padding">
    <div class="contact_bg_box">
        <div class="img-box">
            <img src="{{asset('assets/images/contact-bg.jpg')}}" alt="">
        </div>
    </div>
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                {{__('messages.title2')}}
            </h2>
        </div>
        <div class="">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <form class="contact-form" method ="post" action="{{route('sendContactUs')}}">
                        @csrf
                        <div class="contact_form-container">
                            <div>
                                <div>
                                    <input type="text" name="name" placeholder="{{__('messages.name')}}" />
                                </div>
                                <div>
                                    <input type="email" name="email" placeholder="{{__('messages.email')}} " />
                                </div>
                                <div>
                                    <input type="text" name="phone" placeholder="{{__('messages.phone')}}" />
                                </div>
                                <div class="">
                                    <input type="text"  name="message" placeholder="{{__('messages.message')}}" class="message_input" />
                                </div>
                                <div class="btn-box ">
                                    <button type="submit">
                                        {{__('messages.submit')}}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end contact section -->
