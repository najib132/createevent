<div class="sidebar close">
  <div class="logo-details">
    <i class='bx bxl-c-plus-plus'></i>
    <span class="logo_name">Beyondcom</span>
  </div>
  <ul class="nav-links">
    <li>
      <a href="#">
        <i class='bx bx-grid-alt' ></i>
        <span class="link_name">Dashboard</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Category</a></li>
      </ul>
    </li>
    <li>
      <a href="{{'congres'}}">
        <i class='bx bx-grid-alt' ></i>
        <span class="link_name">Congrés</span>
      </a>
    </li>
    

    <li>
      <a href="#">
        <i class='bx bx-line-chart' ></i>
        <span class="link_name">Finance</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Finance</a></li>
      </ul>
    </li>

    <li>
      <a href="#">
        <i class='bx bx-compass' ></i>
        <span class="link_name">Hébergement</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Hébergement</a></li>
      </ul>
    </li>

    <li>
      <a href="#">
        <i class='bx bx-history'></i>
        <span class="link_name">Sponsoring</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Sponsoring</a></li>
      </ul>
    </li>

    <li>
      <a href="#">
        <i class='bx bx-cog' ></i>
        <span class="link_name">Setting</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Setting</a></li>
      </ul>
    </li>

    <li>
  <div class="profile-details">
   
    <div class="name-job">
     <i class='bx bx-log-in' ></i>
    </div>
    <i class='bx bx-log-out' ></i>
  </div>
</li>
</ul>
</div>
<section class="home-section">
  <div class="home-content">
    <i class='bx bx-menu' ></i>
    <span class="text">
     
            <!-- Button trigger modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
Créer-evénement
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content" >
  <div class="modal-header">
    <h5 class="modal-title" id="staticBackdropLabel">Ajouter evenements</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">
      <form id="contactForm" method="post" action="{{route('addEvent')}}" role="form" enctype="multipart/form-data">
          @csrf
  <div class="modal-body">				
    <div class="form-group" style="margin-bottom: 10px;">
      <label for="name" style="font-size: 18px;font-weight: 500;">Nom event</label>
      <input placeholder='Nom-event' type="text" name="name" class="form-control">
    </div>
    
    <div class="form-group" style="margin-bottom: 10px;">
      <label for="logo" style="font-size: 18px;font-weight: 500;">logo_event</label>
      <input placeholder='image-logo' type="file" name="image_logo" class="form-control">
    </div>

      <div class="form-group" style="margin-bottom: 10px;">
      <label for="slide" style="font-size: 18px;font-weight: 500;">slide_event</label>
      <input placeholder='image-slide' type="file" name="image_slide" class="form-control">
    </div>

              <div class="form-group" style="margin-bottom: 10px;">
      <label for="banier" style="font-size: 18px;font-weight: 500;">baniére_event</label>
      <input placeholder='image-baniére' type="file" name="image_banier" class="form-control">
    </div>

              <div class="form-group" style="margin-bottom: 10px;">
      <label for="programme" style="font-size: 18px;font-weight: 500;">programme_event</label>
      <input placeholder='image-programme' type="file" name="programme" class="form-control">
    </div>

              <div class="form-group" style="margin-bottom: 10px;">
      <label for="date" style="font-size: 18px;font-weight: 500;">date_début</label>
      <input placeholder='date-début' type="date" name="date_debut" class="form-control">
    </div>

              <div class="form-group" style="margin-bottom: 10px;">
      <label for="fin" style="font-size: 18px;font-weight: 500;">date-fin</label>
      <input  placeholder='date-fin' type="date" name="date_fin" class="form-control">
    </div>

              <div class="form-group" style="margin-bottom: 10px;">
      <label for="lieux" style="font-size: 18px;font-weight: 500;">lieux_event</label>
      <input placeholder='Lieux-evenement' type="text" name="lieux" class="form-control">
    </div>

              <div class="form-group" style="margin-bottom: 10px;">
      <label for="site" style="font-size: 18px;font-weight: 500;">site_web</label>
      <input  placeholder='site-web' type="text" name="siteweb" class="form-control">
    </div>

              <div class="form-group" style="margin-bottom: 10px;">
      <label for="perefirix" style="font-size: 18px;font-weight: 500;">préfirex</label>
      <input placeholder='pérefirix' type="text" name="perefix" class="form-control">
    </div>

    <div class="form-group" style="margin-bottom: 10px;">
      <label for="deadline" style="font-size: 18px;font-weight: 500;">deadline</label>
      <input placeholder='deadline' type="date" name="deadline" class="form-control">
    </div>
              
              <div class="form-group" style="margin-bottom: 10px;">
      <label for="affichage_deadline" style="font-size: 18px;font-weight: 500;">affichage-deadline</label>
                  <select name="affichage_deadline">
                      <option value="Oui">Oui</option>
                      <option value="Non">Non</option>
                  </select>
    </div>

              <div class="form-group" style="margin-bottom: 10px;">
      <label for="sponsoring" style="font-size: 18px;font-weight: 500;">Url-sponsoring</label>
      <input placeholder='Url-sponsoring' type="text" name="Urlspon" class="form-control">
    </div>

              <div class="form-group" style="margin-bottom: 10px;">
      <label for="hebergement" style="font-size: 18px;font-weight: 500;">Url-hébergement</label>
      <input placeholder='Url-hébergement' type="text" name="Urlheberg" class="form-control">
    </div>
  </div>
  <button type="submit" class="btn btn-success"  style="margin: 20px auto;
  display: flex;">
              valider
          </button>
</form>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  
  </div>
</div>
</div>
</div>
    </span>
  </div>
 @yield('contenu')
<!--card testing-->
<div class="main-content">
  <div class="header bg-gradient-primary pb-8 pt-5 pt-md-4">
    <div class="container-fluid">
      <h2 class="mb-2 text-black">Data congres</h2>
      <div class="header-body">
        <div class="row">
          <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Congres</h5>
                    <span class="h2 font-weight-bold mb-0">350,897</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                      <i class="fas fa-chart-bar"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                  <span class="text-nowrap">Since last month</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Participants</h5>
                    <span class="h2 font-weight-bold mb-0">2,356</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                      <i class="fas fa-chart-pie"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                  <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                  <span class="text-nowrap">Since last week</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Database</h5>
                    <span class="h2 font-weight-bold mb-0">924</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                      <i class="fas fa-users"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                  <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                  <span class="text-nowrap">Since yesterday</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                    <span class="h2 font-weight-bold mb-0">49,65%</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                      <i class="fas fa-percent"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                  <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                  <span class="text-nowrap">Since last month</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--end cards testing-->
</section>
<script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
   