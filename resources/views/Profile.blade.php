    @extends('layouts.app')

    @section('content')
   <!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">Zakir Khan</h4>
         <p class="w3-center"><img src="/pictures/profile_image.jpg" class="w3-circle" style="height:106px;width:106px" alt="profile image"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Laravel dev</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Islamabad, Pak</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> October 1, 1993</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i>Create new group</button>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Friends</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
         <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-search fa-fw w3-margin-right"></i>Search Peoples</button>
         <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
           <!-- Create search input here -->
             <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           
         </div>
        </div>
        </div>      
      </div>
      <br>
      
      <br>
      
     
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <img src="/pictures/noimage.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
              <span class="w3-badge w3-right w3-small w3-green">T 3</span>
              <h4>Group Name</h4><br>

              <p> This is the paragraph for group discription.</p>
              <hr class="w3-clear">
                <div class="w3-row-padding" style="margin:0 -16px">
                  <span class="w3-tag w3-small w3-theme-l1">Friends</span>
                  <span class="w3-tag w3-small w3-theme-l1">Friends</span>
                  <span class="w3-tag w3-small w3-theme-l1">Friends</span>
                  <span class="w3-tag w3-small w3-theme-l1">Friends</span>
                  <span class="w3-tag w3-small w3-theme-l1">Friends</span>

                  <a href="#" title="transaction"><i class=" w3-hover-black	fa fa-arrow-circle-right pull-right " style="font-size:26px"></i></a>
        
                </div>            
            </div>
          </div>
        </div>
      </div>
      
      
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Advertisment</p>
          <img src="/pictures/noimage.jpg" alt="Forest" style="width:100%;">
          <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
        </div>
      </div>
      <br>
      
     
      <br>
    
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>Footer</h5>
</footer>
    @endsection
    @section('navcontent')
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
            <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
            <a href="#" class="w3-bar-item w3-button">One new friend request</a>
            <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
            <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
        </div>
    @endsection
