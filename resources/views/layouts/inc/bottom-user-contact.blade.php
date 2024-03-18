<nav class="navbar-bottom-contact-user">
    <ul class="navbar-nav-bottom-contact">
          <a href="tel:+{{ $post->user->mobile }}"> <img src="{{ asset('assets/images/icons/telephone-symbol-button-main.png') }}" alt="Cat"></a>
          <a href="https://api.whatsapp.com/send?phone={{ $post->user->whatsapp }}" target="_blank"> <img src="{{ asset('assets/images/icons/whatsapp-main.png') }}" alt="Cat"></a>
          <a href="mailto:{{ $post->user->email }}"> <img src="{{ asset('assets/images/icons/email.png') }}" alt="Cat"></a>
    </ul>
  </nav