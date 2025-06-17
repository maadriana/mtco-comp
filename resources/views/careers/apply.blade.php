@extends('layouts.app')

@section('title', 'Apply Now - Careers')

@section('content')

<style>
/* Loading spinner animation */
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Form validation alert animations */
@keyframes slideInFromRight {
    from {
        opacity: 0;
        transform: translateY(-50%) translateX(100px) scale(0.9);
    }
    to {
        opacity: 1;
        transform: translateY(-50%) translateX(0) scale(1);
    }
}

@keyframes slideOutToRight {
    from {
        opacity: 1;
        transform: translateY(-50%) translateX(0) scale(1);
    }
    to {
        opacity: 0;
        transform: translateY(-50%) translateX(100px) scale(0.9);
    }
}

@keyframes shrinkProgressFast {
    from { width: 100%; }
    to { width: 0%; }
}

/* Button Loading State */
.btn-loading {
    position: relative;
    color: transparent !important;
    pointer-events: none;
}

.btn-loading::after {
    content: "";
    position: absolute;
    width: 20px;
    height: 20px;
    top: 50%;
    left: 50%;
    margin-left: -10px;
    margin-top: -10px;
    border: 2px solid transparent;
    border-top-color: #ffffff;
    border-radius: 50%;
    animation: button-loading-spinner 1s ease infinite;
}

@keyframes button-loading-spinner {
    from { transform: rotate(0turn); }
    to { transform: rotate(1turn); }
}

/* Existing animations */
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

/* File validation alert - exact match to your success alert */
.file-error-alert {
    position: fixed;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    z-index: 9999;
    background: white;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    max-width: 380px;
    width: 380px;
    padding: 25px;
    display: none;
    animation: slideInFromRight 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.file-error-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 15px;
}

.file-error-title {
    font-size: 20px;
    font-weight: 600;
    color: #333;
    margin: 0;
    flex: 1;
}

.file-error-close {
    background: none;
    border: none;
    font-size: 20px;
    color: #999;
    cursor: pointer;
    padding: 0;
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: all 0.2s ease;
    margin-left: 15px;
}

.file-error-close:hover {
    background: #f5f5f5;
    color: #666;
}

.file-error-message {
    color: #666;
    font-size: 14px;
    line-height: 1.5;
    margin: 0 0 20px 0;
}

.file-error-progress {
    height: 3px;
    background: #f0f0f0;
    border-radius: 2px;
    overflow: hidden;
    margin: 0;
}

.file-error-progress-bar {
    height: 100%;
    background: #ef4444;
    width: 100%;
    border-radius: 2px;
    animation: shrinkProgressFast 1.5s linear forwards;
}

/* Form validation alert */
.form-validation-alert {
    position: fixed;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    z-index: 9999;
    background: white;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    max-width: 380px;
    width: 380px;
    padding: 25px;
    display: none;
    animation: slideInFromRight 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

/* Dropzone error state */
.dropzone-error {
    border-color: #ef4444 !important;
    background: rgba(239, 68, 68, 0.05) !important;
}

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

    #successAlert, .file-error-alert, .form-validation-alert {
        top: 10px !important;
        right: 10px !important;
        left: 10px !important;
        max-width: none !important;
        min-width: none !important;
        width: auto !important;
        transform: none !important;
    }
}
</style>

<!-- Loading Overlay -->
<div id="careersLoadingOverlay" style="
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 10000;
    backdrop-filter: blur(5px);
">
    <div style="
        background: white;
        padding: 40px;
        border-radius: 20px;
        text-align: center;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        max-width: 400px;
        width: 90%;
    ">
        <div style="
            width: 60px;
            height: 60px;
            border: 4px solid #e9ecef;
            border-top: 4px solid #326D78;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 20px;
        "></div>
        <div style="color: #326D78; font-size: 18px; font-weight: 600; margin-bottom: 10px;">
            Submitting Application...
        </div>
        <div style="color: #6c757d; font-size: 14px;">
            Please wait while we process your application
        </div>
    </div>
</div>

<!-- Form Validation Alert -->
<div id="formValidationAlert" class="form-validation-alert">
    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 15px;">
        <h3 style="font-size: 20px; font-weight: 600; color: #333; margin: 0; flex: 1;">
            Form Validation Error!
        </h3>
        <button onclick="closeFormValidationAlert()" style="
            background: none;
            border: none;
            font-size: 20px;
            color: #999;
            cursor: pointer;
            padding: 0;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.2s ease;
            margin-left: 15px;
        " onmouseover="this.style.background='#f5f5f5'; this.style.color='#666'" onmouseout="this.style.background='none'; this.style.color='#999'">
            ×
        </button>
    </div>

    <p style="color: #666; font-size: 14px; line-height: 1.5; margin: 0 0 20px 0;" id="formValidationMessage">
        Please fill in all required fields before submitting your application.
    </p>

    <div style="height: 3px; background: #f0f0f0; border-radius: 2px; overflow: hidden; margin: 0;">
        <div style="
            height: 100%;
            background: #ef4444;
            width: 100%;
            border-radius: 2px;
            animation: shrinkProgressFast 1.5s linear forwards;
        "></div>
    </div>
</div>

<!-- File Error Alert -->
<div id="fileErrorAlert" class="file-error-alert">
    <div class="file-error-header">
        <h3 class="file-error-title">Invalid File Type!</h3>
        <button onclick="closeFileErrorAlert()" class="file-error-close">×</button>
    </div>

    <p class="file-error-message" id="fileErrorMessage">
        Please upload only PDF, DOC, or DOCX files for your resume.
    </p>

    <div class="file-error-progress">
        <div class="file-error-progress-bar"></div>
    </div>
</div>

<!-- Wave Header (Top Part Only) -->
<div style="position: relative; margin-top: -1.5rem; background: linear-gradient(135deg, #326D78 0%, #4a9aba 100%); padding: 0; overflow: hidden; height: 200px;">

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

    <!-- Floating decorative elements -->
    <div style="position: absolute; top: 10%; left: 5%; width: 100px; height: 100px; background: rgba(255,255,255,0.1); border-radius: 50%; opacity: 0.3;"></div>
    <div style="position: absolute; top: 20%; right: 10%; width: 60px; height: 60px; background: rgba(255,255,255,0.08); transform: rotate(45deg); opacity: 0.4;"></div>
    <div style="position: absolute; bottom: 30%; left: 15%; width: 80px; height: 80px; background: rgba(255,255,255,0.05); border-radius: 30px; transform: rotate(-15deg);"></div>
</div>

<!-- Application Form Section -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <!-- Section Header -->
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 style="color: #326D78; font-weight: 600; font-size: 2.2rem; margin-bottom: 1rem;">
                        Submit Your Application
                    </h2>
                    <div style="width: 80px; height: 4px; background: #326D78; margin: 0 auto; border-radius: 2px;"></div>
                </div>

                @if(session('success'))
                    <div id="successAlert" style="
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
                                        box-shadow: 0 4px 8px rgba(50, 108, 121, 0.2);
                                    ">
                                        <i class="fas fa-check" style="font-size: 16px; font-weight: bold; color: white;"></i>
                                    </div>
                                    <h6 style="margin: 0; font-weight: bold; font-size: 18px; letter-spacing: 0.5px; color: #333;">Application Submitted!</h6>
                                </div>
                                <p style="margin: 0; font-size: 14px; line-height: 1.6; padding-left: 47px; color: #555;">
                                    {{ session('success') }}
                                </p>
                            </div>
                            <button onclick="closeSuccessAlert()" style="
                                background: #f8f9fa;
                                border: 1px solid #dee2e6;
                                border-radius: 50%;
                                width: 30px;
                                height: 30px;
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
                            background: #e9ecef;
                            border-radius: 2px;
                            overflow: hidden;
                        ">
                            <div id="progressBar" style="
                                height: 100%;
                                background: #326C79;
                                width: 100%;
                                border-radius: 2px;
                                animation: shrinkProgress 5s linear forwards;
                                box-shadow: 0 0 8px rgba(50, 108, 121, 0.3);
                            "></div>
                        </div>
                    </div>

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
                    <div style="background: linear-gradient(135deg, #326D78 0%, #4a9aba 100%); color: white; padding: 2rem; text-align: center;">
                        <div style="background: rgba(255,255,255,0.2); border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                            <i class="fas fa-paper-plane" style="font-size: 2rem;"></i>
                        </div>
                        <h3 style="margin: 0; font-weight: 600; color: white">Application Form</h3>
                        <p style="margin: 0.5rem 0 0; opacity: 0.9;">Fill in the details below to submit your application</p>
                    </div>

                    <!-- Form Body -->
                    <div style="padding: 3rem;">
                        <form method="POST" action="{{ route('careers.apply.submit') }}" enctype="multipart/form-data" id="careersForm">
                            @csrf

                            <div class="row gy-4">
                                <!-- Full Name -->
                                <div class="col-12">
                                    <label for="name" style="color: #326D78; font-weight: 600; margin-bottom: 0.5rem; display: block; text-align: left;">
                                        <i class="fas fa-user me-2"></i>Full Name
                                    </label>
                                    <input type="text" name="name" id="name" class="form-control" required
                                           style="border-radius: 12px; padding: 0.75rem 1rem; border: 2px solid #e2e8f0; transition: all 0.3s ease;"
                                           onfocus="this.style.borderColor='#326D78'; this.style.boxShadow='0 0 0 3px rgba(50, 109, 120, 0.1)'"
                                           onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none'">
                                </div>

                                <!-- Email Address -->
                                <div class="col-12">
                                    <label for="email" style="color: #326D78; font-weight: 600; margin-bottom: 0.5rem; display: block; text-align: left;">
                                        <i class="fas fa-envelope me-2"></i>Email Address
                                    </label>
                                    <input type="email" name="email" id="email" class="form-control" required
                                           style="border-radius: 12px; padding: 0.75rem 1rem; border: 2px solid #e2e8f0; transition: all 0.3s ease;"
                                           onfocus="this.style.borderColor='#326D78'; this.style.boxShadow='0 0 0 3px rgba(50, 109, 120, 0.1)'"
                                           onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none'">
                                </div>

                                <!-- Position Applying For -->
                                <div class="col-12">
                                    <label for="job_title" style="color: #326D78; font-weight: 600; margin-bottom: 0.5rem; display: block; text-align: left;">
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
                                    <label for="message" style="color: #326D78; font-weight: 600; margin-bottom: 0.5rem; display: block; text-align: left;">
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
                                    <label for="cv" style="color: #326D78; font-weight: 600; margin-bottom: 0.5rem; display: block; text-align: left;">
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

                                <!-- Submit Button -->
                                <div class="text-center mt-4">
                                   <button type="submit" id="submitBtn" class="btn btn-lg"
                                  style="background: linear-gradient(135deg, #326D78, #4a9aba); color: white; border: none; border-radius: 25px; padding: 1rem 3rem; font-weight: 600; transition: all 0.3s ease;">
                                <i class="fas fa-paper-plane me-2"></i>
                             <span id="submitBtnText">Submit Application</span>
                              </button>
                             <p style="margin-top: 1rem; color: #666; font-size: 0.9rem;">
                             <i class="fas fa-lock me-1"></i>Your information is secure and will only be used for recruitment purposes.
                         </p>
                        </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
// File validation function
function validateFile(file) {
    const allowedTypes = [
        'application/pdf',
        'application/msword',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
    ];

    const allowedExtensions = ['pdf', 'doc', 'docx'];
    const fileExtension = file.name.split('.').pop().toLowerCase();

    return allowedTypes.includes(file.type) || allowedExtensions.includes(fileExtension);
}

// Show file error alert
function showFileError(fileName, fileType) {
    const alert = document.getElementById('fileErrorAlert');
    const message = document.getElementById('fileErrorMessage');

    // Get file extension for better error message
    const extension = fileName.split('.').pop().toUpperCase();

    message.innerHTML = `
        The file "<strong>${fileName}</strong>" (${extension}) is not supported. Please upload only PDF, DOC, or DOCX files for your resume.
    `;

    alert.style.display = 'block';

    // Auto-dismiss after 1.5 seconds
    setTimeout(() => {
        closeFileErrorAlert();
    }, 1500);
}

// Close file error alert
function closeFileErrorAlert() {
    const alert = document.getElementById('fileErrorAlert');

    if (alert && alert.style.display !== 'none') {
        alert.style.animation = 'slideOutToRight 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards';
        setTimeout(() => {
            alert.style.display = 'none';
            alert.style.animation = 'slideInFromRight 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55)';
        }, 300);
    }
}

// Show form validation alert
function showFormValidationAlert() {
    const alert = document.getElementById('formValidationAlert');
    alert.style.display = 'block';

    // Auto-dismiss after 1.5 seconds
    setTimeout(() => {
        closeFormValidationAlert();
    }, 1500);
}

// Close form validation alert
function closeFormValidationAlert() {
    const alert = document.getElementById('formValidationAlert');

    if (alert && alert.style.display !== 'none') {
        alert.style.animation = 'slideOutToRight 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards';
        setTimeout(() => {
            alert.style.display = 'none';
            alert.style.animation = 'slideInFromRight 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55)';
        }, 300);
    }
}

// Updated previewFile function
function previewFile(input) {
    const file = input.files[0];
    const dropzone = document.getElementById('dropzone');

    if (file) {
        // Validate file type
        if (!validateFile(file)) {
            // Show error
            showFileError(file.name, file.type);

            // Add error styling to dropzone
            dropzone.classList.add('dropzone-error');

            // Clear the input
            input.value = "";

            // Remove error styling after 2 seconds
            setTimeout(() => {
                dropzone.classList.remove('dropzone-error');
            }, 2000);

            return;
        }

        // File is valid, proceed with preview
        dropzone.classList.remove('dropzone-error');
        document.getElementById('fileName').textContent = file.name;
        document.getElementById('filePreview').style.display = 'block';
        document.getElementById('dropzone-text').style.display = 'none';
    }
}

function removeFile() {
    const input = document.getElementById('cv');
    const dropzone = document.getElementById('dropzone');

    input.value = "";
    dropzone.classList.remove('dropzone-error');
    document.getElementById('filePreview').style.display = 'none';
    document.getElementById('dropzone-text').style.display = 'block';
}

// Updated handleFileDrop function
function handleFileDrop(event) {
    event.preventDefault();
    const dropzone = document.getElementById('dropzone');
    dropzone.style.background = 'rgba(50, 109, 120, 0.02)';

    const files = event.dataTransfer.files;
    if (files.length > 0) {
        const file = files[0];

        // Validate file type
        if (!validateFile(file)) {
            showFileError(file.name, file.type);
            dropzone.classList.add('dropzone-error');

            setTimeout(() => {
                dropzone.classList.remove('dropzone-error');
            }, 2000);

            return;
        }

        // File is valid, proceed
        const input = document.getElementById('cv');
        const dataTransfer = new DataTransfer();
        dataTransfer.items.add(file);
        input.files = dataTransfer.files;
        previewFile(input);
    }
}

// Form submission with validation and loading
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('careersForm');
    const submitBtn = document.getElementById('submitBtn');
    const submitBtnText = document.getElementById('submitBtnText');
    const loadingOverlay = document.getElementById('careersLoadingOverlay');

    if (form && submitBtn) {
        form.addEventListener('submit', function(e) {
            // Validate form before submission
            const nameField = document.getElementById('name');
            const emailField = document.getElementById('email');
            const jobTitleField = document.getElementById('job_title');
            const cvField = document.getElementById('cv');

            // Check if all required fields are filled
            if (!nameField.value.trim() || !emailField.value.trim() || !jobTitleField.value.trim() || !cvField.files.length) {
                e.preventDefault(); // Prevent form submission
                showFormValidationAlert();
                return;
            }

            // Show loading states
            submitBtn.classList.add('btn-loading');
            submitBtnText.textContent = 'Submitting...';
            submitBtn.disabled = true;
            loadingOverlay.style.display = 'flex';

            // Form will submit normally to Laravel backend
        });
    }
});

// Close alerts with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeFileErrorAlert();
        closeFormValidationAlert();
    }
});
</script>

@endsection
