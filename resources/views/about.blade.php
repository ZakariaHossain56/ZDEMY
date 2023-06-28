@extends('layout')

    @section('styles')
    <link rel="stylesheet" href="{{asset('css/about.css') }}">
    @endsection



    <section class="about__achievements">
        <div class="container about__achievements-container">
            <div class="about__achievements-left">
                <img src="{{asset('images/about achievements.svg')}}">
            </div>

<div class="about__achievements-right">
    <h1>Achievements</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est libero delectus ea minus adipisci, doloribus optio. Nihil, quisquam laboriosam quo deleniti, dignissimos id dicta error impedit qui doloremque eveniet ad!
    </p>

<div class="achievements__cards">

    <article class="achievement__card">
        <span class="achievement__icon">
            <i class="fa-solid fa-video"></i>
        </span>
        <h3>450+</h3>
        <p>Courses</p>
    </article>

    <article class="achievement__card">
        <span class="achievement__icon">
            <i class="fa-solid fa-user-group"></i>
        </span>
        <h3>79,000+</h3>
        <p>Students</p>
    </article>
    <article class="achievement__card">
        <span class="achievement__icon">
            <i class="fa-solid fa-trophy"></i>
        </span>
        <h3>26++</h3>
        <p>Awards</p>
    </article>


</div>

</div>

        </div>
    </section>


<!-- ----------------------END OF ACHIEVEMENTS-------------------- -->


<section class="team">
    <h2>Meet Our Team</h2>
    <div class="container team__container">
        <article class="team__member">
            <div class="team__member-image">
                <img src="{{asset('images/tm1.jpg')}}">
            </div>
            <div class="team__member-info">
                <h4>Shatta Wale</h4>
                <p>Expert Tutor</p>
            </div>
            <div class="team__member-socials">
                <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </article>

        <article class="team__member">
            <div class="team__member-image">
                <img src="{{asset('images/tm2.jpg')}}">
            </div>
            <div class="team__member-info">
                <h4>Mia Jones</h4>
                <p>Expert Tutor</p>
            </div>
            <div class="team__member-socials">
                <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </article>

        <article class="team__member">
            <div class="team__member-image">
                <img src="{{asset('images/tm3.jpg')}}">
            </div>
            <div class="team__member-info">
                <h4>Diana Ayi</h4>
                <p>Expert Tutor</p>
            </div>
            <div class="team__member-socials">
                <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </article>

        <article class="team__member">
            <div class="team__member-image">
                <img src="{{asset('images/tm4.jpg')}}">
            </div>
            <div class="team__member-info">
                <h4>John Dumelo</h4>
                <p>Expert Tutor</p>
            </div>
            <div class="team__member-socials">
                <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </article>

        <article class="team__member">
            <div class="team__member-image">
                <img src="{{asset('images/tm5.jpg')}}">
            </div>
            <div class="team__member-info">
                <h4>Ruth Shockings</h4>
                <p>Expert Tutor</p>
            </div>
            <div class="team__member-socials">
                <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </article>

        <article class="team__member">
            <div class="team__member-image">
                <img src="{{asset('images/tm6.jpg')}}">
            </div>
            <div class="team__member-info">
                <h4>Edem Quist</h4>
                <p>Expert Tutor</p>
            </div>
            <div class="team__member-socials">
                <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </article>

        <article class="team__member">
            <div class="team__member-image">
                <img src="{{asset('images/tm7.jpg')}}">
            </div>
            <div class="team__member-info">
                <h4>Lila James</h4>
                <p>Expert Tutor</p>
            </div>
            <div class="team__member-socials">
                <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </article>

        <article class="team__member">
            <div class="team__member-image">
                <img src="{{asset('images/tm8.jpg')}}">
            </div>
            <div class="team__member-info">
                <h4>Menz Gold</h4>
                <p>Expert Tutor</p>
            </div>
            <div class="team__member-socials">
                <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </article>
    </div>
</section>


<!-- ----------------------END OF TEAM MEMBERS-------------------- -->



