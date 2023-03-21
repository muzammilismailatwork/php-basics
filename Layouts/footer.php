<div class="container-fluid">
            <footer class="py-5">
              <div class="row">
                <div class="col-md-2 logo">
                  <?php
                  $footer_image = new Image('./Assets/logo.png', 'footer', '');
                  $footer_image->render();
                  ?>
                 <!-- <img src="./Assets/logo.png" alt="footer"> -->
                </div>
          
                <div class="col-md-2">
                  <!-- <h5>Section</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                  </ul> -->
                  <?php
                  include(__DIR__.'/components/Menu.php');
                  $items=[
                    ['Home', 'url'],
                    ['Features','url'],
                    ['Pricing','url'],
                    ['FAQs', 'url'],
                    ['About', 'url']
                ];
                $menu = new Menu('Section', $items);
                $menu->render();
                  ?>
                </div>
          
                <div class="col-md-2">
                <?php
                $items=[
                    ['Home', 'url'],
                    ['About','url'],
                    ['Pricing','url'],
                    ['FAQs', 'url'],
                    ['Features', 'url']
                ];
                $menu = new Menu('Section2', $items);
                $menu->render();
                ?>

                  <!-- <h5>Section</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                  </ul> -->
                </div>
                
                <div class="col-md-4 offset-1">
                    <div class="form_heading">
                        <h5>Contact Us</h5>
                    </div>
                    <form class="form align-items-center">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
              </div>
          
              <div class="d-flex justify-content-between py-4 my-4 border-top">
                <p>© 2021 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                  <li class="ms-3"><a class="link-dark" href="#"><img src="./Assets/twitter.png" class="icon"></a></li>
                  <li class="ms-3"><a class="link-dark" href="#"><img src="./Assets/twitter.png" class="icon"></a></li>
                  <li class="ms-3"><a class="link-dark" href="#"><img src="./Assets/twitter.png" class="icon"></a></li>
                </ul>
              </div>
            </footer>
          </div>