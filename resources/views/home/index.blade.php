@extends('layouts.app')

@section('content') 


<header class="site-header">

  <div class="container header-inner">

    <div class="brand">    
      <img src="{{ asset('ltflow.svg') }}" alt="LTFLOW Logo" class="brand-logo">                                                                
      <div class="brand-text">
        <div class="brand-name"></div>  
        <div class="brand-tag"></div>  
       
      </div>
    </div>

    <nav class="main-nav">
      <a href="#hero" class="nav-link">HOME</a>
      <a href="#trusted-section" class="nav-link">ABOUT</a>
      <a href="#solutions-section" class="nav-link">SOLUTIONS</a>
      <a href="#case-studies-section" class="nav-link">CASE STUDIES</a>
      <a href="#blogs-section" class="nav-link">BLOGS</a>
    </nav>
     
    <div class="cta-area">
    
      <a href="#contact-section" class="cta btn-demo">Book A Demo</a>
    </div>
  </div>
</header> 
 

<section class="hero"  id="hero" >
  <div class="container hero-inner">
    <div class="hero-left"> 
      <h3 class="eyebrow">Step into the</h3> 
      <h1 class="hero-title"><span>Future of Lending</span></h1>
      <p class="hero-sub">
        Experience the power of an API-enriched &amp; AI-powered tech stack for new-gen lending!
      </p>
     
      <a href="#contact-section" class="btn btn-primary">Book A Demo</a>
    </div> 

    <div class="hero-right"> 
      <img src="{{ asset('images/ltf.png') }}" alt="Hero Illustration" class="hero-image">
    </div> 
  </div>

  <div class="container stat-strip">
    <div class="stat">
      <div class="stat-icon">▾</div>
      <div class="stat-number">3M</div>
      <div class="stat-label">Users Onboarded</div>
    </div>
    <div class="stat">
      <div class="stat-icon">▾</div>
      <div class="stat-number">70+</div>
      <div class="stat-label">Business Partners</div>
    </div>
    <div class="stat">
      <div class="stat-icon">▾</div>
      <div class="stat-number">₹7,000 Cr+</div>
      <div class="stat-label">Gross Loan Value</div>
    </div>
    <div class="stat">
      <div class="stat-icon">▾</div>
      <div class="stat-number">₹3000 Cr+</div>
      <div class="stat-label">Disbursal on Co-lending</div>
    </div>
  </div> 
</section>

<section class="hero-footer container">
  <h4>
    A Digital Lending Infrastructure that is 
    <span class="accent">SEAMLESS</span>
  </h4>
  <p class="hero-footer-sub">
    We help Banks, NBFCs and E-commerce players streamline operations, reduce costs and address 
    discrepancies in sourcing, credit decisioning.
  </p>
</section>


<!-- Trusted by Section -->
<section class="trusted-section"  id="trusted-section">
 
    <h2 class="trusted-title">Trusted by Leading Industry Players</h2>

    <div class="trusted-logos">
      <div class="trusted-logo-card">
        <img src="{{ asset('cosmos.png') }}" alt="cosmos Ltd.">
      </div>

      <div class="trusted-logo-card">
        <img src="{{ asset('HDB.png') }}" alt=" Co-operative Bank Ltd.">
      </div> 

      <div class="trusted-logo-card">
        <img src="{{ asset('bom.png') }}" alt="Shaan Finance">
      </div>    

      <div class="trusted-logo-card">
        <img src="{{ asset('capwise.png') }}" alt="Capwise">
      </div> 

      <div class="trusted-logo-card">
        <img src="{{ asset('urbanmoney.png') }}" alt="Urban Money">
      </div>

      <div class="trusted-logo-card">
        <img src="{{ asset('shaan.png') }}" alt="LT Logo">
      </div>
    </div>
  </div>
</section>


<!--  Solutions Carousel Section -->
<section class="solutions-section" id="solutions-section">
  <div class="container">
    <h2 class="solutions-title">Our Solutions</h2>

    <div class="carousel-viewport"> 
        <div class="carousel-track" id="solutionsTrack"> 
          <!-- Card 1 -->
          <div class="solution-card">  
            <div class="card-image">  
              <img src="{{ asset('sol1.png') }}" alt="Loan Management (LMS)">
            </div>
            <div class="card-body">
              <h3 class="card-title">Loan Management (LMS)</h3>
              <p class="card-desc">Manages business, personal and MSME loans with flexible, scalable configuration. Streamlines post-disbursal operations, collections and automated reconciliation...</p>
            </div>
 
            
          
          </div>

          <!-- Card 2 -->
          <div class="solution-card">
            <div class="card-image">
              <img src="{{ asset('sol2.png') }}" alt="Fraud Management System">
            </div>
            <div class="card-body">
              <h3 class="card-title">Fraud Management System</h3>
              <p class="card-desc">Detects and mitigates fraud in real-time by monitoring behavior, transactions and anomalies. Ensures AML compliance and supports regulatory checks...</p>
            </div>



 

        
           
          </div>

          <!-- Card 3 -->
          <div class="solution-card">
            <div class="card-image">
              <img src="{{ asset('sol3.png') }}" alt="Co-lending">
            </div>
            <div class="card-body">
              <h3 class="card-title">Co-lending</h3> 
              <p class="card-desc">Supports CLM1, CLM2 and Pool Buyout models with full lifecycle automation from onboarding to collections. Automates fund flow, reconciliation and partner share tracking...</p>
            </div>

           
          </div>

          <!-- Card 4 -->
          <div class="solution-card">
            <div class="card-image">
              <img src="{{ asset('sol4.png') }}" alt="AI-ML Score Models">
            </div>
            <div class="card-body">
              <h3 class="card-title">AI-ML Score Models</h3>
              <p class="card-desc">Offers Credit Risk Score (AI), Product Propensity Model, Loan Amount Prediction and MSME-focused assessment tools. Enables smarter targeting, personalized offers...</p>
            </div>
          
          </div> 


          
  </div>
</section>











<section class="case-studies-section container"  id='case-studies-section'>
  <h2 class="case-studies-title">Case Studies</h2>
  <div class="case-studies-inner">
    <div class="case-tabs">
      <button class="case-tab" data-panel="panel1">Acquisition</button>
      <button class="case-tab" data-panel="panel2">Product Studio</button>
      <button class="case-tab" data-panel="panel3">Delivery</button>
      <button class="case-tab" data-panel="panel4">Asset Management</button>
    </div>

    <div class="case-panels">
      <!-- Panel 1 -->
      <div id="panel1" class="case-panel active">
        <h3>Client - Acquisition Corp</h3>

        <div class="case-panel-item">
          <div class="case-item-header">
            <h4>The Challenge</h4>
            <span class="toggle-icon">⌄</span>
          </div>
          <p class="case-item-content">Acquisition Corp faced market competition and needed faster deal closures.</p>
        </div>

        <div class="case-panel-item">
          <div class="case-item-header">
            <h4>The Solution</h4>
            <span class="toggle-icon">⌄</span>
          </div>
          <p class="case-item-content">We built a lead-tracking dashboard to streamline operations.</p>
        </div>

        <div class="case-panel-item">
          <div class="case-item-header">
            <h4>The Impact</h4>
            <span class="toggle-icon">⌄</span>
          </div>
          <p class="case-item-content">Closed deals 30% faster and improved client satisfaction.</p>
        </div>
      </div>

      <!-- Panel 2 -->
      <div id="panel2" class="case-panel">
        <h3>Client – Bank Of Maharashtra</h3>
        <div class="case-panel-item">
          <div class="case-item-header">
            <h4>The Challenge</h4>
            <span class="toggle-icon">⌄</span>
          </div>
          <p class="case-item-content">Bank of Maharashtra wanted a co-lending platform to Co-lend and should support multiple lending partners in their backend.</p>
        </div>
        <div class="case-panel-item">
          <div class="case-item-header">
            <h4>The Solution</h4>
            <span class="toggle-icon">⌄</span>
          </div>
          <p class="case-item-content">We developed a scalable backend to integrate multiple lenders.</p>
        </div>
        <div class="case-panel-item">
          <div class="case-item-header">
            <h4>The Impact</h4>
            <span class="toggle-icon">⌄</span>
          </div>
          <p class="case-item-content">Enabled faster loan processing and partner onboarding.</p>
        </div>
      </div>

      <!-- Panel 3 -->
      <div id="panel3" class="case-panel">
        <h3>Client - Speed Logistics</h3>
        <div class="case-panel-item">
          <div class="case-item-header">
            <h4>The Challenge</h4>
            <span class="toggle-icon">⌄</span>
          </div>
          <p class="case-item-content">Needed real-time delivery tracking across regions.</p>
        </div>
        <div class="case-panel-item">
          <div class="case-item-header">
            <h4>The Solution</h4>
            <span class="toggle-icon">⌄</span>
          </div>
          <p class="case-item-content">Implemented GPS tracking with predictive delivery times.</p>
        </div>
        <div class="case-panel-item">
          <div class="case-item-header">
            <h4>The Impact</h4>
            <span class="toggle-icon">⌄</span>
          </div>
          <p class="case-item-content">Improved delivery efficiency by 25% and enhanced customer satisfaction.</p>
        </div>
      </div>

      <!-- Panel 4 -->
      <div id="panel4" class="case-panel">
        <h3>Client - Green Assets</h3>
        <div class="case-panel-item">
          <div class="case-item-header">
            <h4>The Challenge</h4>
            <span class="toggle-icon">⌄</span>
          </div>
          <p class="case-item-content">Green Assets needed a comprehensive platform to manage and track their eco-friendly projects.</p>
        </div>
        <div class="case-panel-item">
          <div class="case-item-header">
            <h4>The Solution</h4>
            <span class="toggle-icon">⌄</span>
          </div>
          <p class="case-item-content">We developed a project management tool tailored for sustainability initiatives.</p>
        </div>
        <div class="case-panel-item">
          <div class="case-item-header">
            <h4>The Impact</h4>
            <span class="toggle-icon">⌄</span>
          </div>
          <p class="case-item-content">Streamlined project tracking and reporting, leading to a 40% increase in project efficiency.</p>
        </div>
      </div>
    </div>
  </div>
</section>








<section class="latest-updates-section container" id="blogs-section">
  <p class="updates-subtitle">LT Insights</p>
  <h2 class="updates-title">Stay Ahead with Our Latest Updates</h2>

  <div class="updates-grid">
    <!-- Card 1 -->
    <div class="update-card">
      <img src="{{ asset('co-lending.png') }}" alt="Loan Management" class="update-image">
      <div class="update-content">
        
        <h3 class="update-title">
        Loan Management Systems... Powering Digital Lending
        </h3>
       
      </div>
    </div> 

    <!-- Card 2 -->
    <div class="update-card">
      <img src="{{ asset('sol3.png') }}" alt="Co-Lending" class="update-image">
      <div class="update-content"> 
       
        <h3 class="update-title">
          Co-Lending: Powering Financial Inclusion Through Collaboration and Innovation.
        </h3>
        
      </div>
    </div>

    

    <!-- Card 4 -->
    <div class="update-card">
      <img src="{{ asset('los.png') }}" alt="LOS System" class="update-image">
      <div class="update-content">
        
        <h3 class="update-title">
          What is a Loan Origination System (LOS)?
        </h3>
       
      </div>
    </div>
  </div>
</section>





<!-- Testimonials Section -->
<section class="testimonials-section" style="background-color:#cb3bb3; color:#cb3bb3f; padding:100px 0;">
  <div class="container testimonials-inner" style="display:flex; align-items:center; justify-content:space-between; gap:50px; flex-wrap:wrap;">
    
    <!-- Left Content -->
    <div class="testimonials-left" style="flex:1 1 45%; min-width:300px;"> 
     
      <h2 style="font-size:40px; font-weight:700; line-height:1.3;">Here's what our clients say</h2>
      
      <div class="testimonial-card" style="background-color:#fff; color:#222; border-radius:10px; padding:40px; margin-top:30px; box-shadow:0 4px 12px rgba(0,0,0,0.1);">
        <div style="display:flex; align-items:center; gap:15px;">
          <img src="{{ asset('bom.png') }}" alt="Bank of Maharashtra" style="height:35px;">
          <div>
            <h4 style="font-size:18px; font-weight:700; color:#000;">Bank of Maharashtra</h4>
            <p style="margin:0; color:#666;">Gaurav Tripathi, AGM.</p>
          </div>
        </div>
        <p style="margin-top:20px; line-height:1.6; font-size:16px; color:#444;">
          LTFlow has successfully implemented our Kisan Credit Card (KCC) loan journey through seamless integration with Jansamarth and our Core Banking System. They also deployed an advanced Co-Lending system — making them the first vendor to deliver this solution in Bank of Maharashtra. Their platform has been reliable, efficient and fully compliant with regulatory norms.
        </p> 


       
      </div>
    </div>

    <!-- Right Image -->
    <div class="testimonials-right" style="flex:1 1 45%; min-width:300px;">
      <img src="{{ asset('download.png') }}" alt="Client Meeting" style="width:100%; border-radius:10px; object-fit:cover;">
    </div> 
  </div>
</section>







        <!-- Right Side -->
       
<section id="contact-section" style="background-color:#0d1a3a; color:white; padding:40px 0;">
  <div class="container d-flex flex-wrap justify-content-between">

    <!-- Left Side -->  
    <div style="flex:1; min-width:300px; padding:20px;">
      <p style="font-weight:600; font-style:italic;">
        LTFLow is the technology arm of LoanTap, building next-generation digital lending ecosystems 
        for banks, NBFCs and fintechs.
      </p>

      <h5 style="font-weight:700; margin-top:30px;">Contact Information</h5>
      <p><i class="fa fa-envelope" style="color:#00AEEF; margin-right:10px;"></i>aakash.yajnik@loantap.in</p>
      <p><i class="fa fa-envelope" style="color:#00AEEF; margin-right:10px;"></i>amita.chorghe@loantap.in</p>
      <p><i class="fa fa-phone" style="color:#00AEEF; margin-right:10px;"></i>+91 87930-01310</p>
    </div>

    <!-- Right Side (Send a Message Form) -->
    <div style="flex:1; min-width:350px; background-color:#0d1a3a; padding:20px;">
      <h5 style="font-weight:700;">Have Questions? or Looking for Product & Sales Demo</h5>
      <h3 style="font-weight:700; margin-bottom:20px;">Send us a Message</h3>

      <form method="POST" action="{{ route('contact.submit') }}">
        @csrf
        <div style="display:flex; gap:10px; margin-bottom:10px;">
          <input type="text" name="full_name" placeholder="Full name" required
                 style="flex:1; padding:10px; border-radius:5px; border:none;">
          <input type="text" name="mobile" placeholder="Mobile number" required
                 style="flex:1; padding:10px; border-radius:5px; border:none;">
        </div>

        <div style="display:flex; gap:10px; margin-bottom:10px;">
          <input type="email" name="email" placeholder="Email" required
                 style="flex:1; padding:10px; border-radius:5px; border:none;">
          <input type="text" name="company" placeholder="Enter Company Name" required
                 style="flex:1; padding:10px; border-radius:5px; border:none;">
        </div>

        <textarea name="message" placeholder="Describe your project" required
                  style="width:100%; height:100px; padding:10px; border-radius:5px; border:none; margin-bottom:10px;"></textarea>

        <button type="submit"
                style="background-color:#00AEEF; border:none; color:white; padding:10px 20px; border-radius:5px; font-weight:600;">
          Submit
        </button>
      
      </form>
    
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)      
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif











    </div>
  </div>

  <!-- Footer -->
  <div style="border-top:1px solid rgba(255,255,255,0.1); margin-top:40px; padding:20px 0; text-align:center; font-size:14px;">
    © Copyright 2025. All Rights Reserved by LoanTap
    <div style="margin-top:10px;">
      <a href="#" style="color:white; text-decoration:none; margin-right:20px;">Terms and Conditions</a>
      <a href="#" style="color:white; text-decoration:none;">Privacy Policy</a>
    </div>
  </div>
</section>











@endsection
