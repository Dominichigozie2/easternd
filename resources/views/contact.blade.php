@extends('layouts.app')

@section('title', 'Contact Us - Eastern Distilleries Hub')

@section('content')
<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <h3>EDFI Contact Hub</h3>
        <div class="click-back-menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><i class="fa-solid fa-chevron-right" style="font-size: 0.75rem;"></i></li>
            <li>Contact Hub</li>
        </div>
    </div>
</div>

<section style="padding: 90px 0; background: var(--bg-light);">
    <div class="container">
        <!-- Contact Info Cards -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin-bottom: 70px;">
            <div class="brand-card">
                <div style="width: 52px; height: 52px; border-radius: 50%; background: rgba(173, 130, 49, 0.15); border: 1px solid var(--brand-gold); display: flex; align-items: center; justify-content: center; color: var(--brand-gold); font-size: 1.3rem; margin-bottom: 20px;">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <h4 style="color: var(--brand-navy); font-size: 1.2rem; margin-bottom: 10px;">Our Factory Address</h4>
                <p style="color: var(--text-body); font-size: 0.95rem; line-height: 1.6;">
                    Km 2, Onitsha-Atani Road, Harbour Industrial Layout, Onitsha, Anambra State, Nigeria.
                </p>
            </div>

            <div class="brand-card">
                <div style="width: 52px; height: 52px; border-radius: 50%; background: rgba(173, 130, 49, 0.15); border: 1px solid var(--brand-gold); display: flex; align-items: center; justify-content: center; color: var(--brand-gold); font-size: 1.3rem; margin-bottom: 20px;">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <h4 style="color: var(--brand-navy); font-size: 1.2rem; margin-bottom: 10px;">Direct Phone Lines</h4>
                <p style="color: var(--text-body); font-size: 0.95rem; line-height: 1.6;">
                    Sales Hotline: <strong style="color: var(--brand-navy);">+234(0)803-316-6700</strong><br>
                    Enquiries: <strong style="color: var(--brand-navy);">+234(0)806-290-0707</strong>
                </p>
            </div>

            <div class="brand-card">
                <div style="width: 52px; height: 52px; border-radius: 50%; background: rgba(173, 130, 49, 0.15); border: 1px solid var(--brand-gold); display: flex; align-items: center; justify-content: center; color: var(--brand-gold); font-size: 1.3rem; margin-bottom: 20px;">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <h4 style="color: var(--brand-navy); font-size: 1.2rem; margin-bottom: 10px;">Email Communication</h4>
                <p style="color: var(--text-body); font-size: 0.95rem; line-height: 1.6;">
                    Sales: <a href="mailto:sales@easterndistilleries.com" style="color: var(--brand-gold); font-weight: 700;">sales@easterndistilleries.com</a><br>
                    Careers: <a href="mailto:hrm@krisoralgroup.com" style="color: var(--brand-gold); font-weight: 700;">hrm@krisoralgroup.com</a><br>
                    Support: <a href="mailto:enquiry@easterndistilleries.com" style="color: var(--brand-gold); font-weight: 700;">enquiry@easterndistilleries.com</a>
                </p>
            </div>
        </div>

        <!-- Contact Form Container -->
        <div style="background: #ffffff; padding: 50px; border-radius: 16px; border: 2px solid var(--brand-gold); box-shadow: var(--shadow-hover); max-width: 850px; margin: 0 auto 80px;">
            <div class="section-title-wrap" style="margin-bottom: 35px;">
                <span class="subtitle">GET IN TOUCH</span>
                <h2 class="section-title-navy">Send Us A Message</h2>
                <p style="color: var(--text-body); margin-top: 10px;">We are excited to connect with you. Please share your inquiry, wholesale order request, or feedback.</p>
            </div>

            @if(session('success'))
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Message Delivered!',
                            text: '{{ session('success') }}',
                            confirmButtonColor: '#ad8231'
                        });
                    });
                </script>
            @endif

            <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                    <div>
                        <label style="display: block; color: var(--brand-navy); font-size: 0.9rem; margin-bottom: 8px; font-weight: 700;">Your Full Name *</label>
                        <input type="text" name="name" required placeholder="John Doe" style="width: 100%; padding: 14px 18px; background: #f8fafc; border: 1px solid var(--border-light); border-radius: 8px; color: var(--brand-navy); font-size: 0.95rem;">
                    </div>
                    <div>
                        <label style="display: block; color: var(--brand-navy); font-size: 0.9rem; margin-bottom: 8px; font-weight: 700;">Your Email Address *</label>
                        <input type="email" name="email" required placeholder="john@example.com" style="width: 100%; padding: 14px 18px; background: #f8fafc; border: 1px solid var(--border-light); border-radius: 8px; color: var(--brand-navy); font-size: 0.95rem;">
                    </div>
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; color: var(--brand-navy); font-size: 0.9rem; margin-bottom: 8px; font-weight: 700;">Subject / Department *</label>
                    <input type="text" name="subject" required placeholder="Wholesale Inquiry / General Question" style="width: 100%; padding: 14px 18px; background: #f8fafc; border: 1px solid var(--border-light); border-radius: 8px; color: var(--brand-navy); font-size: 0.95rem;">
                </div>

                <div style="margin-bottom: 30px;">
                    <label style="display: block; color: var(--brand-navy); font-size: 0.9rem; margin-bottom: 8px; font-weight: 700;">Your Message *</label>
                    <textarea name="message" rows="6" required placeholder="Type your message here..." style="width: 100%; padding: 14px 18px; background: #f8fafc; border: 1px solid var(--border-light); border-radius: 8px; color: var(--brand-navy); font-size: 0.95rem;"></textarea>
                </div>

                <div style="text-align: center;">
                    <button type="submit" class="btn-gold" style="width: 100%; justify-content: center;">Send Message <i class="fa-solid fa-paper-plane"></i></button>
                </div>
            </form>
        </div>

        <!-- Google Map Section -->
        <div style="border-radius: 16px; overflow: hidden; border: 2px solid var(--brand-navy); box-shadow: var(--shadow-soft);">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7490.616424126899!2d6.741045208242207!3d5.992552378583712!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1043c04287a65edf%3A0x1294f64997d6c45e!2sAtani%20Rd%2C%20Anambra%2C%20Nigeria!5e0!3m2!1sen!2sus!4v1717853615958!5m2!1sen!2sus"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>
@endsection
