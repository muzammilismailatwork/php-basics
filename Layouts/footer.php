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
                  <?php
                  include(__DIR__.'/components/Form.php');
                  $Feilds = [
                    ['Email Address:', 'email', 'form-control', 'exampleInputEmail1', ''],
                    ['Password:', 'password', 'form-control', 'exampleInputPassword1', ''],
                    ['Check me out', 'checkbox', 'form-check-input', 'exampleCheck1', '']
                  ];
                  $form = new MyForm('Contact US', $Feilds, ['Submit', '#', 'btn btn-primary', 'submit']);
                  $form->render();
                  ?>
                  
                </div>
              </div>
          
              <div class="d-flex justify-content-between py-4 my-4 border-top">
                <p>© 2021 WEBREXO, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                <?php  
                include_once(__DIR__.'/components/Social.php');
                $social_icons = [['#', './Assets/twitter.png'],
                ['#', './Assets/twitter.png'],['#', './Assets/twitter.png']];
                foreach($social_icons as $social_icon){
                $social = new Social($social_icon[0], $social_icon[1]);
                $social->render();
                }
                ?>
                  <!-- <li class="ms-3"><a class="link-dark" href="#"><img src="./Assets/twitter.png" class="icon"></a></li>
                  <li class="ms-3"><a class="link-dark" href="#"><img src="./Assets/twitter.png" class="icon"></a></li>
                  <li class="ms-3"><a class="link-dark" href="#"><img src="./Assets/twitter.png" class="icon"></a></li> -->
                </ul>
              </div>
            </footer>
          </div>