@include('layouts.main')


  <div class="en-tete">
    <img src="{{URL::asset('images/logo_flaxib.png')}}" class="logo">
    <br>
    <p>Mieux utiliser les transport en commun</p>
    <br><br>
    <p class="construction">Ce site est en cours de construction...</p>
  </div>

  <div class="formulaire">
    <div class="contact">
      <p id="adress_mail">Contact
        <br>
        admin@flaxib.re
      </p>
    </div>

    <div class="mail">
  <!-- ------ test 1 ---- -->
      <!-- <form action="#" id="form">
        <div class="inputbox">
          <label for="email">Vous souhaitez nous suivre ?</label>
        
          <input type="text" name="" id="email" placeholder="votre@email.com" >
          
          <i class="fa-solid fa-paper-plane-top fa-2x"></i>
          <span id="text">
          </span>
          <div> -->

  <!-- -----test 2 ------ -->
        <h3>Vous souhaitez nous suivre ?</h3>
        <form id="form" action="#">
            <div class="inputBox">
                <input type="text" name="" id="email" placeholder="   votre@email.com">
                <span id="text">
                    <i class="fa-solid fa-paper-plane-top fa-2x"></i>
                </span>
            </div>
        </form>
    </div>
        </div>


      </form>
    </div>
  </div>
