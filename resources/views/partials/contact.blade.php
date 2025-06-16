<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>{{ getContent('contact_main_title', 'Contact') }}</h2>
        <p>{!! getContent('contact_subtitle', '<span>Need Help?</span> <span class="description-title">Contact Us</span>') !!}</p>
    </div><!-- End Section Title -->

@if(session('contact_success'))
    <div id="contactSuccessAlert" style="
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 9999;
        background: white;
        color: #333;
        padding: 20px 25px;
        border-radius: 15px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        border: 3px solid #326C79;
        max-width: 420px;
        min-width: 350px;
        animation: slideInRight 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        backdrop-filter: blur(10px);
    ">
        <div style="display: flex; align-items: flex-start; justify-content: space-between;">
            <div style="flex: 1; margin-right: 15px;">
                <div style="display: flex; align-items: center; margin-bottom: 12px;">
                    <div style="
                        background: #326C79;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin-right: 12px;
                    ">
                        <i class="fas fa-paper-plane" style="font-size: 16px; font-weight: bold; color: white;"></i>
                    </div>
                    <h6 style="margin: 0; font-weight: bold; font-size: 18px; letter-spacing: 0.5px; color: #333;">Message Sent!</h6>
                </div>
                <p style="margin: 0; font-size: 14px; line-height: 1.6; padding-left: 47px; color: #555;">
                    {{ getContent('contact_success_message', 'Thank you for your message! We will get back to you as soon as possible.') }}
                </p>
            </div>
            <button onclick="closeContactAlert()" style="
                background: #f8f9fa;
                border: 1px solid #dee2e6;
                color: #6c757d;
                cursor: pointer;
                font-size: 16px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.2s ease;
                flex-shrink: 0;
                font-weight: bold;
            "
            onmouseover="this.style.background='#e9ecef'; this.style.color='#495057'; this.style.transform='scale(1.1)'"
            onmouseout="this.style.background='#f8f9fa'; this.style.color='#6c757d'; this.style.transform='scale(1)'">
                &times;
            </button>
        </div>
            <!-- Progress bar for auto-dismiss -->
            <div style="
                margin-top: 15px;
                height: 4px;
                background: rgba(255, 255, 255, 0.2);
                border-radius: 2px;
                overflow: hidden;
            ">
                <div id="contactProgressBar" style="
                    height: 100%;
                    background: rgba(255, 255, 255, 0.8);
                    width: 100%;
                    border-radius: 2px;
                    animation: shrinkProgress 5s linear forwards;
                    box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
                "></div>
            </div>
        </div>

        <style>
            @keyframes slideInRight {
                from { opacity: 0; transform: translateX(400px) scale(0.8); }
                to { opacity: 1; transform: translateX(0) scale(1); }
            }
            @keyframes slideOutRight {
                from { opacity: 1; transform: translateX(0) scale(1); }
                to { opacity: 0; transform: translateX(400px) scale(0.8); }
            }
            @keyframes shrinkProgress {
                from { width: 100%; }
                to { width: 0%; }
            }
            @media (max-width: 768px) {
                #contactSuccessAlert, #contactErrorAlert {
                    top: 10px !important;
                    right: 10px !important;
                    left: 10px !important;
                    max-width: none !important;
                    min-width: none !important;
                }
            }
        </style>

        <script>
            setTimeout(function() { closeContactAlert(); }, 5000);
            function closeContactAlert() {
                const alert = document.getElementById('contactSuccessAlert');
                if (alert) {
                    alert.style.animation = 'slideOutRight 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards';
                    setTimeout(() => alert.remove(), 400);
                }
            }
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') { closeContactAlert(); }
            });
        </script>
    @endif

    <!-- Error Popup Alert -->
    @if($errors->has('contact_error'))
        <div id="contactErrorAlert" style="
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            padding: 20px 25px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(239, 68, 68, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.2);
            max-width: 420px;
            min-width: 350px;
            animation: slideInRight 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            backdrop-filter: blur(10px);
        ">
            <div style="display: flex; align-items: flex-start; justify-content: space-between;">
                <div style="flex: 1; margin-right: 15px;">
                    <div style="display: flex; align-items: center; margin-bottom: 10px;">
                        <div style="
                            background: rgba(255, 255, 255, 0.25);
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            margin-right: 12px;
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                        ">
                            <i class="fas fa-exclamation-triangle" style="font-size: 16px; font-weight: bold;"></i>
                        </div>
                        <h6 style="margin: 0; font-weight: 700; font-size: 18px; letter-spacing: 0.5px;">Error</h6>
                    </div>
                    <p style="margin: 0; opacity: 0.95; font-size: 14px; line-height: 1.5; padding-left: 47px;">
                        {{ getContent('contact_error_message', 'Sorry, there was an error sending your message. Please try again later or contact us directly.') }}
                    </p>
                </div>
                <button onclick="closeContactErrorAlert()" style="
                    background: rgba(255, 255, 255, 0.2);
                    border: none;
                    color: white;
                    cursor: pointer;
                    font-size: 16px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    transition: all 0.2s ease;
                    flex-shrink: 0;
                    font-weight: bold;
                "
                onmouseover="this.style.background='rgba(255, 255, 255, 0.3)'; this.style.transform='scale(1.1)'"
                onmouseout="this.style.background='rgba(255, 255, 255, 0.2)'; this.style.transform='scale(1)'">
                    &times;
                </button>
            </div>
        </div>

        <script>
            function closeContactErrorAlert() {
                const alert = document.getElementById('contactErrorAlert');
                if (alert) {
                    alert.style.animation = 'slideOutRight 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards';
                    setTimeout(() => alert.remove(), 400);
                }
            }
        </script>
    @endif

    <!-- Field Validation Errors -->
    @if($errors->any() && !$errors->has('contact_error'))
        <div id="contactFieldErrorAlert" style="
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            color: white;
            padding: 20px 25px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(245, 158, 11, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.2);
            max-width: 420px;
            min-width: 350px;
            animation: slideInRight 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            backdrop-filter: blur(10px);
        ">
            <div style="display: flex; align-items: flex-start; justify-content: space-between;">
                <div style="flex: 1; margin-right: 15px;">
                    <div style="display: flex; align-items: center; margin-bottom: 10px;">
                        <div style="
                            background: rgba(255, 255, 255, 0.25);
                            border-radius: 50%;
                            width: 35px;
                            height: 35px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            margin-right: 12px;
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                        ">
                            <i class="fas fa-exclamation-triangle" style="font-size: 16px; font-weight: bold;"></i>
                        </div>
                        <h6 style="margin: 0; font-weight: 700; font-size: 18px; letter-spacing: 0.5px;">Please Fix the Following:</h6>
                    </div>
                    <ul style="margin: 0; padding-left: 47px; opacity: 0.95; font-size: 14px; line-height: 1.4; list-style: none;">
                        @foreach($errors->all() as $error)
                            <li style="margin-bottom: 4px; position: relative; padding-left: 15px;">
                                <span style="position: absolute; left: 0; top: 2px; color: rgba(255,255,255,0.8);">•</span>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <button onclick="closeContactFieldErrorAlert()" style="
                    background: rgba(255, 255, 255, 0.2);
                    border: none;
                    color: white;
                    cursor: pointer;
                    font-size: 16px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    transition: all 0.2s ease;
                    flex-shrink: 0;
                    font-weight: bold;
                "
                onmouseover="this.style.background='rgba(255, 255, 255, 0.3)'; this.style.transform='scale(1.1)'"
                onmouseout="this.style.background='rgba(255, 255, 255, 0.2)'; this.style.transform='scale(1)'">
                    &times;
                </button>
            </div>
        </div>

        <script>
            function closeContactFieldErrorAlert() {
                const alert = document.getElementById('contactFieldErrorAlert');
                if (alert) {
                    alert.style.animation = 'slideOutRight 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards';
                    setTimeout(() => alert.remove(), 400);
                }
            }
        </script>
    @endif

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-5">

                <div class="info-wrap">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>{{ getContent('contact_address_title', 'Address') }}</h3>
                            @if(getContent('contact_address_line1'))
                                <p>{{ getContent('contact_address_line1') }}</p>
                            @endif
                            @if(getContent('contact_address_line2'))
                                <p>{{ getContent('contact_address_line2') }}</p>
                            @endif
                            @if(getContent('contact_address_line3'))
                                <p>{{ getContent('contact_address_line3') }}</p>
                            @endif
                            @if(getContent('contact_address_line4'))
                                <p>{{ getContent('contact_address_line4') }}</p>
                            @endif
                            @if(getContent('contact_address_line5'))
                                <p>{{ getContent('contact_address_line5') }}</p>
                            @endif
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>{{ getContent('contact_phone_title', 'Call Us') }}</h3>
                            <p>{{ getContent('contact_phone_number', '+632 8887 1888') }}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>{{ getContent('contact_email_title', 'Email Us') }}</h3>
                            <p>{{ getContent('contact_email_address', 'contact@mtco.com.ph') }}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <iframe src="{{ getContent('contact_map_embed_url', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.018732062944!2d121.02433507509568!3d14.56086078591368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9e4f6db6c37%3A0xdffb3b5b3329e8c3!2sThe%20Salcedo%20Towers%2C%20169%20H.%20V.%20Dela%20Costa%2C%20Makati%2C%201220%20Metro%20Manila%2C%20Philippines!5e0!3m2!1sen!2sph!4v1716829892686!5m2!1sen!2sph') }}" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="col-lg-7">
                <form action="{{ route('contact.submit') }}" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="200">
                    @csrf
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <label for="name-field" class="pb-2">{{ getContent('contact_form_name_label', 'Your Name') }}</label>
                            <input type="text" name="name" id="name-field" class="form-control" required value="{{ old('name') }}">
                        </div>

                        <div class="col-md-6">
                            <label for="email-field" class="pb-2">{{ getContent('contact_form_email_label', 'Your Email') }}</label>
                            <input type="email" class="form-control" name="email" id="email-field" required value="{{ old('email') }}">
                        </div>

                        <div class="col-md-12">
                            <label for="subject-field" class="pb-2">{{ getContent('contact_form_subject_label', 'Subject') }}</label>
                            <input type="text" class="form-control" name="subject" id="subject-field" required value="{{ old('subject') }}">
                        </div>

                        <div class="col-md-12">
                            <label for="message-field" class="pb-2">{{ getContent('contact_form_message_label', 'Message') }}</label>
                            <textarea class="form-control" name="message" rows="10" id="message-field" required>{{ old('message') }}</textarea>
                        </div>

                        <div class="col-md-12 text-center">
                <button type="submit"
               style="background: #326C79;
                   color: white;
                   border: none;
                   border-radius: 25px;
                   padding: 12px 30px;
                   font-weight: 600;
                   font-size: 16px;
                   cursor: pointer;
                   transition: all 0.3s ease;"
            onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 20px rgba(50, 108, 121, 0.3)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
        <i class="fas fa-paper-plane" style="margin-right: 8px;"></i>{{ getContent('contact_form_button_text', 'Send Message') }}
    </button>
</div>
                 </div>
             </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section><!-- /Contact Section -->
