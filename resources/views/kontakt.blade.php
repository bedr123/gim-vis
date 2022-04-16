<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Contact Us Form |</title>
    <link rel="stylesheet" href="{{ asset('css/kontakt.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
   @include('layout.header')

  <div class="container">
    <div class="map-hero">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2870.3593095694123!2d18.17914341500662!3d43.993297579111115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475f2e326ad27f7f%3A0x42a3063d5e496183!2sMusala%2023%2C%20Visoko%2071300!5e0!3m2!1sbs!2sba!4v1646983654573!5m2!1sbs!2sba"
       width="100%" height="300" style="border:0;"
        allowfullscreen="" loading="lazy"></iframe>
        </div>
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Visoko</div>
          <div class="text-two">Musala 23</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+387-544-535</div>
          <div class="text-two">+387-544-535</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">gimvis.com</div>
        
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Pošaljite nam poruku</div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsa repudiandae animi asperiores vitae iste praesentium quod saepe magnam. Officia numquam tenetur, sequi libero quasi est pariatur nulla mollitia maxime.</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
          <textarea></textarea>
        </div>
        <div class="button">
          <input type="button" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>
   
  @include('layout.footer')
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
