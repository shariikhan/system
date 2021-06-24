
@extends('welcome.master')

@section('content')
        <div class="logo-wrapper">
            <div class="row">
                <div class="col-lg-3 my-auto">
                    <div class="site-logo">
                        <a href="#">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 my-auto">
                    <div class="logo-tagline">
                        <h1>American respiratory Union</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <section class="main_counter">
        <div class="main_counter_title">
            <h2>Choose you’re job, Build a contract</h2>
        </div>
    </section>

    <section class="main_counter_wrapper">
        <div class="row">
            <div class="col-lg-4">
                <div class="counter-card">
                    <div class="counter-title">
                        <h2>mEMBERSHIP<br> GOAL PRE-ORDER</h2>
                    </div>
                    <div class="counter-box">
                        <h2>1000</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="counter-card">
                    <div class="counter-title">
                        <h2>SITE<br> LAUNCH</h2>
                    </div>
                    <div class="site-launch-date"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="counter-card">
                    <div class="counter-title">
                        <h2>DONATION<br> COLLECTED</h2>
                    </div>
                    <div class="counter-box grey-box">
                        <h2>$1000</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter_content">
        <div class="row">
            <div class="col-lg-6 responsive-order-2">
                <div class="counter-content-description">
                    <p>AMERICAN RESPIRATORY UNION EMPOWERS THEMEDICAL PROFESSIONAL. BY PROVIDING THE ABILITY TO REMOVE CONGOMERATE COMPANIES FROM CONTROLLING MARKET CONTRACTS PLACING THE POWER OF CONTRACT NEGOTIATIONS IN THE MEDICAL PROFESSIONAL HANDS.</p>
                </div>
                <div class="site-buttons">
                    <a href="{{ asset('register') }}" class="signup-btn">signup</a>
                    <a href="{{ asset('register') }}" class="donate-btn">donate</a>
                </div>
            </div>
            <div class="col-lg-4 offset-xl-2 text-right responsive-order-1">
                <div class="membership-cost">
                    <h2>mEMBERSHIP</h2>
                    <ul>
                        <li>1 YEAR - <span>299.99</span></li>
                        <li>5 YEAR - <span>499.99</span></li>
                        <li>LIFETIME - <span>999.99</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
 @endsection
