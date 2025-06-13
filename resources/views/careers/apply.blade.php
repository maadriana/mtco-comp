@extends('layouts.app')

@section('title', 'Apply Now - Careers')

@section('content')

<!-- Layered Wave Header Design -->
<div style="position: relative; margin-top: -1.5rem; background: linear-gradient(135deg, #326D78 0%, #4a9aba 100%); padding: 0; overflow: hidden; min-height: 450px;">

    <!-- Breadcrumb Overlay -->
    <div style="position: absolute; top: 20px; left: 70px; background: rgba(255, 255, 255, 0.95); padding: 10px 20px; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); display: inline-block; width: auto; z-index: 100;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0" style="font-size: 0.9rem;">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" style="color: #326D78; text-decoration: none; font-weight: 500;">
                        <i class="fas fa-home me-1"></i>Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ url('/#careers') }}" style="color: #326D78; text-decoration: none; font-weight: 500;">Careers</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('careers.vacancies') }}" style="color: #326D78; text-decoration: none; font-weight: 500;">Current Vacancies</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">Apply</li>
            </ol>
        </nav>
    </div>

    <!-- Wave Background Layers -->
    <div style="position: absolute; bottom: 0; left: 0; width: 100%; overflow: hidden; line-height: 0; transform: rotate(180deg);">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" style="position: relative; display: block; width: calc(100% + 1.3px); height: 60px;">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" style="fill: #f8f9fa;"></path>
        </svg>
    </div>

    <!-- Secondary wave -->
    <div style="position: absolute; bottom: 0; left: 0; width: 100%; overflow: hidden; line-height: 0; transform: rotate(180deg);">
        <svg data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" style="position: relative; display: block; width: calc(100% + 1.3px); height: 80px; opacity: 0.5;">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" style="fill: rgba(248,249,250,0.3);"></path>
        </svg>
    </div>

    <!-- Floating decorative elements -->
    <div style="position: absolute; top: 10%; left: 5%; width: 100px; height: 100px; background: rgba(255,255,255,0.1); border-radius: 50%; opacity: 0.3;"></div>
    <div style="position: absolute; top: 20%; right: 10%; width: 60px; height: 60px; background: rgba(255,255,255,0.08); transform: rotate(45deg); opacity: 0.4;"></div>
    <div style="position: absolute; bottom: 30%; left: 15%; width: 80px; height: 80px; background: rgba(255,255,255,0.05); border-radius: 30px; transform: rotate(-15deg);"></div>

    <!-- Content Container -->
    <div class="container" style="position: relative; z-index: 10; padding-top: 80px; padding-bottom: 100px;">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 text-center text-white">

                <!-- Application Badge -->
                <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 2rem;">
                    <div style="background: rgba(255,255,255,0.2); padding: 0.5rem 1.5rem; border-radius: 25px; backdrop-filter: blur(10px);">
                        <small style="font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Career Application</small>
                    </div>
                </div>

                <h1 style="font-size: 3rem; font-weight: 700; margin-bottom: 1rem; line-height: 1.2; color: white">
                    Apply<br>
                    <span style="font-weight: 300; opacity: 0.9; color: white">Now</span>
                </h1>

                <p style="font-size: 1.2rem; opacity: 0.9; margin-bottom: 3rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                    Submit your application and take the first step towards joining our exceptional team.
                </p>

                <!-- Application Info Grid -->
                <div class="row text-center">
                    <div class="col-sm-6 col-lg-3 mb-3">
                        <div style="background: rgba(255,255,255,0.1); padding: 1.5rem 1rem; border-radius: 15px; backdrop-filter: blur(5px); height: 100%;">
                            <i class="fas fa-clock mb-2" style="font-size: 1.5rem;"></i>
                            <h6 style="margin-bottom: 0.5rem; opacity: 0.8; font-size: 0.9rem;">Response Time</h6>
                            <p style="margin: 0; font-weight: 600;">24-48 Hours</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3">
                        <div style="background: rgba(255,255,255,0.1); padding: 1.5rem 1rem; border-radius: 15px; backdrop-filter: blur(5px); height: 100%;">
                            <i class="fas fa-file-alt mb-2" style="font-size: 1.5rem;"></i>
                            <h6 style="margin-bottom: 0.5rem; opacity: 0.8; font-size: 0.9rem;">File Format</h6>
                            <p style="margin: 0; font-weight: 600;">PDF or Word</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3">
                        <div style="background: rgba(255,255,255,0.1); padding: 1.5rem 1rem; border-radius: 15px; backdrop-filter: blur(5px); height: 100%;">
                            <i class="fas fa-shield-alt mb-2" style="font-size: 1.5rem;"></i>
                            <h6 style="margin-bottom: 0.5rem; opacity: 0.8; font-size: 0.9rem;">Privacy</h6>
                            <p style="margin: 0; font-weight: 600;">Secure & Confidential</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3">
                        <div style="background: rgba(255,255,255,0.1); padding: 1.5rem 1rem; border-radius: 15px; backdrop-filter: blur(5px); height: 100%;">
                            <i class="fas fa-handshake mb-2" style="font-size: 1.5rem;"></i>
                            <h6 style="margin-bottom: 0.5rem; opacity: 0.8; font-size: 0.9rem;">Process</h6>
                            <p style="margin: 0; font-weight: 600;">Professional Review</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Application Form Section -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <!-- Section Header -->
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 style="color: #333; font-weight: 600; font-size: 2.5rem; margin-bottom: 1rem;">
                        Submit Your Application
                    </h2>
                    <div style="width: 80px; height: 4px; background: #326D78; margin: 0 auto; border-radius: 2px;"></div>
                </div>

                @if(session('success'))
    <!-- Modern Success Popup -->
    <div id="successAlert" style="
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 9999;
        background: linear-gradient(135deg, #326D78 0%, rgb(101, 204, 214) 100%);
        color: white;
        padding: 20px 25px;
        border-radius: 15px;
        box-shadow: 0 15px 35px rgba(16, 185, 129, 0.4);
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
                        <i class="fas fa-check" style="font-size: 16px; font-weight: bold;"></i>
                    </div>
                    <h6 style="margin: 0; font-weight: 700; font-size: 18px; letter-spacing: 0.5px; color: white">Application Submitted!</h6>
                </div>
                <p style="margin: 0; opacity: 0.95; font-size: 14px; line-height: 1.5; padding-left: 47px;">
                    {{ session('success') }}
                </p>
            </div>
            <button onclick="closeSuccessAlert()" style="
                background: rgba(255, 255, 255, 0.2);
                border: none;
                color: white;
                width: 28px;
                height: 28px;
                border-radius: 50%;
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

        <!-- Progress bar for auto-dismiss -->
        <div style="
            margin-top: 15px;
            height: 4px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 2px;
            overflow: hidden;
        ">
            <div id="progressBar" style="
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
            from {
                opacity: 0;
                transform: translateX(400px) scale(0.8);
            }
            to {
                opacity: 1;
                transform: translateX(0) scale(1);
            }
        }

        @keyframes slideOutRight {
            from {
                opacity: 1;
                transform: translateX(0) scale(1);
            }
            to {
                opacity: 0;
                transform: translateX(400px) scale(0.8);
            }
        }

        @keyframes shrinkProgress {
            from { width: 100%; }
            to { width: 0%; }
        }

        .success-alert-fade-out {
            animation: slideOutRight 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards !important;
        }

        /* Mobile responsive */
        @media (max-width: 768px) {
            #successAlert {
                top: 10px !important;
                right: 10px !important;
                left: 10px !important;
                max-width: none !important;
                min-width: none !important;
            }
        }
    </style>

    <script>
        // Auto-dismiss after 5 seconds
        setTimeout(function() {
            closeSuccessAlert();
        }, 5000);

        function closeSuccessAlert() {
            const alert = document.getElementById('successAlert');
            if (alert) {
                alert.classList.add('success-alert-fade-out');
                setTimeout(function() {
                    alert.remove();
                }, 400);
            }
        }

        // Close on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeSuccessAlert();
            }
        });
    </script>
@endif

                <!-- Application Form -->
                <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.1); border: 3px solid #326D78; position: relative;" data-aos="fade-up" data-aos-delay="200">

                    <!-- Form Header -->
                    <div style="background: linear-gradient(135deg, #326D78 0%, #4a9aba 100%); color: white; padding: 2rem; text-center;">
                        <div style="background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                            <i class="fas fa-paper-plane" style="font-size: 2rem;"></i>
                        </div>
                        <h3 style="margin: 0; font-weight: 600; color: white">Application Form</h3>
                        <p style="margin: 0.5rem 0 0; opacity: 0.9;">Fill in the details below to submit your application</p>
                    </div>

                    <!-- Form Body -->
                    <div style="padding: 3rem;">
                        <form method="POST" action="{{ route('careers.apply.submit') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row gy-4">
                                <!-- Full Name -->
                                <div class="col-12">
                                    <label for="name" style="color: #326D78; font-weight: 600; margin-bottom: 0.5rem; display: block;">
                                        <i class="fas fa-user me-2"></i>Full Name
                                    </label>
                                    <input type="text" name="name" id="name" class="form-control" required
                                           style="border-radius: 12px; padding: 0.75rem 1rem; border: 2px solid #e2e8f0; transition: all 0.3s ease;"
                                           onfocus="this.style.borderColor='#326D78'; this.style.boxShadow='0 0 0 3px rgba(50, 109, 120, 0.1)'"
                                           onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none'">
                                </div>

                                <!-- Email Address -->
                                <div class="col-12">
                                    <label for="email" style="color: #326D78; font-weight: 600; margin-bottom: 0.5rem; display: block;">
                                        <i class="fas fa-envelope me-2"></i>Email Address
                                    </label>
                                    <input type="email" name="email" id="email" class="form-control" required
                                           style="border-radius: 12px; padding: 0.75rem 1rem; border: 2px solid #e2e8f0; transition: all 0.3s ease;"
                                           onfocus="this.style.borderColor='#326D78'; this.style.boxShadow='0 0 0 3px rgba(50, 109, 120, 0.1)'"
                                           onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none'">
                                </div>

                                <!-- Position Applying For -->
                                <div class="col-12">
                                    <label for="job_title" style="color: #326D78; font-weight: 600; margin-bottom: 0.5rem; display: block;">
                                        <i class="fas fa-briefcase me-2"></i>Position Applying For
                                    </label>
                                    <select name="job_title" id="job_title" class="form-control" required
                                            style="border-radius: 12px; padding: 0.75rem 1rem; border: 2px solid #e2e8f0; transition: all 0.3s ease;"
                                            onfocus="this.style.borderColor='#326D78'; this.style.boxShadow='0 0 0 3px rgba(50, 109, 120, 0.1)'"
                                            onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none'">
                                        <option value="">Select a position</option>
                                        <option value="External Audit Associate">External Audit Associate</option>
                                        <option value="Accounting Services Associate">Accounting Services Associate</option>
                                        <option value="Graduate Program">Graduate Program</option>
                                        <option value="Internship Opportunities">Internship Opportunities</option>
                                        <option value="Other">Other Position</option>
                                    </select>
                                </div>

                                <!-- Message -->
                                <div class="col-12">
                                    <label for="message" style="color: #326D78; font-weight: 600; margin-bottom: 0.5rem; display: block;">
                                        <i class="fas fa-comment me-2"></i>Cover Letter / Message
                                    </label>
                                    <textarea name="message" id="message" class="form-control" rows="4"
                                              placeholder="Tell us why you're interested in joining our team (optional)"
                                              style="border-radius: 12px; padding: 0.75rem 1rem; border: 2px solid #e2e8f0; transition: all 0.3s ease; resize: vertical;"
                                              onfocus="this.style.borderColor='#326D78'; this.style.boxShadow='0 0 0 3px rgba(50, 109, 120, 0.1)'"
                                              onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none'"></textarea>
                                </div>

                                <!-- Resume Upload -->
                                <div class="col-12">
    <label for="cv" style="color: #326D78; font-weight: 600; margin-bottom: 0.5rem; display: block;">
        <i class="fas fa-file-upload me-2"></i>Upload Resume
    </label>
    <div id="dropzone" style="border: 2px dashed #326D78; border-radius: 12px; padding: 2rem; text-align: center; background: rgba(50, 109, 120, 0.02); position: relative; cursor: pointer;"
         ondragover="event.preventDefault(); this.style.background='rgba(50, 109, 120, 0.05)'"
         ondragleave="this.style.background='rgba(50, 109, 120, 0.02)'"
         ondrop="handleFileDrop(event)"
         onclick="document.getElementById('cv').click()">

        <i class="fas fa-cloud-upload-alt" style="font-size: 2rem; color: #326D78; margin-bottom: 1rem;"></i>
        <p id="dropzone-text" style="margin-bottom: 1rem; color: #666;">Drag and drop your resume here or click to browse</p>

        <div id="filePreview" style="display: none; margin-bottom: 1rem; position: relative;">
            <span id="fileName" style="color: #326D78; font-weight: 600;"></span>
            <button type="button" onclick="removeFile()" style="border: none; background: transparent; color: #e3342f; font-size: 1.2rem; margin-left: 0.75rem; cursor: pointer;">
                &times;
            </button>
        </div>

        <input type="file" name="cv" id="cv" accept=".pdf,.doc,.docx" required
               style="display: none;"
               onchange="previewFile(this)">

        <small style="color: #666; margin-top: 0.5rem; display: block;">Accepted formats: PDF, DOC, DOCX (Max: 10MB)</small>
    </div>
</div>

<script>
    function previewFile(input) {
        const file = input.files[0];
        if (file) {
            document.getElementById('fileName').textContent = file.name;
            document.getElementById('filePreview').style.display = 'block';
            document.getElementById('dropzone-text').style.display = 'none';
        }
    }

    function removeFile() {
        const input = document.getElementById('cv');
        input.value = "";
        document.getElementById('filePreview').style.display = 'none';
        document.getElementById('dropzone-text').style.display = 'block';
    }

    function handleFileDrop(event) {
        event.preventDefault();
        const files = event.dataTransfer.files;
        if (files.length > 0) {
            const input = document.getElementById('cv');
            const dataTransfer = new DataTransfer();
            dataTransfer.items.add(files[0]);
            input.files = dataTransfer.files;
            previewFile(input);
        }
    }
</script>

                            <!-- Submit Button -->
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-lg"
                                        style="background: linear-gradient(135deg, #326D78, #4a9aba); color: white; border: none; border-radius: 25px; padding: 1rem 3rem; font-weight: 600; transition: all 0.3s ease;">
                                    <i class="fas fa-paper-plane me-2"></i>Submit Application
                                </button>
                                <p style="margin-top: 1rem; color: #666; font-size: 0.9rem;">
                                    <i class="fas fa-lock me-1"></i>Your information is secure and will only be used for recruitment purposes.
                                </p>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    .breadcrumb-item + .breadcrumb-item::before {
        content: "›";
        color: #6c757d;
        font-weight: bold;
    }
    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .form-control:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(50, 109, 120, 0.1) !important;
        border-color: #326D78 !important;
    }

    /* File input styling */
    input[type="file"] {
        cursor: pointer;
    }

    input[type="file"]::-webkit-file-upload-button {
        background: linear-gradient(135deg, #326D78, #4a9aba);
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        margin-right: 1rem;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .container h1 {
            font-size: 2.2rem !important;
        }

        .col-sm-6 {
            margin-bottom: 1rem;
        }

        .btn {
            width: 100%;
        }

        div[style*="padding: 3rem"] {
            padding: 2rem !important;
        }
    }
</style>

@endsection
