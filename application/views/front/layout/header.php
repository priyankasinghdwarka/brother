<div class="top-bar">
   <div class="container">
      <p>Get 20% Extra Off On Our Exclusive Collections with Limited Time Offer Line Will Be Here</p>
   </div>
</div>
<header id="myHeader">
   <div class="container">
      <div class="top-link">
         <div class="quick-links">
            <ul class="list-inline">
<<<<<<< HEAD
               <li class="list-inline-item"><a href="<?php echo base_url('user/dashboard'); ?>">My Account </a></li>
               <li class="list-inline-item"><a href="#">Architects & Designers  </a></li>
               <li class="list-inline-item"><a href="<?php echo base_url('support'); ?>">Support  </a></li>
               <?php $user_id = $this->session->userdata('USER_ID'); ?>
               <?php if(empty($user_id)){ ?>
               <li class="list-inline-item"><a href="<?php echo base_url('user/login'); ?>">Login</a></li>
               <li class="list-inline-item"><a href="<?php echo base_url('user/register'); ?>">Register</a></li>
             <?php }else{ ?>
               <li class="list-inline-item"><a href="<?php echo base_url('user/logout'); ?>">Logout</a></li>
             <?php } ?>
=======
               <li class="list-inline-item"><a href="#">My Account </a></li>
               <li class="list-inline-item"><a href="#">Architects & Designers  </a></li>
               <li class="list-inline-item"><a href="#">Support  </a></li>
               <li class="list-inline-item"><a href="#">Login     </a></li>
               <li class="list-inline-item"><a href="#">Register</a></li>
>>>>>>> 717dfd12dadaf7fcd3d7adc2b2f8a31651363a89
            </ul>
         </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
<<<<<<< HEAD
         <a class="navbar-brand" href="<?php echo base_url(); ?>">
=======
         <a class="navbar-brand" href="#">
>>>>>>> 717dfd12dadaf7fcd3d7adc2b2f8a31651363a89
         <img src="<?php echo base_url('assets/front/'); ?>images/logo.jpg"/>
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="fa fa-bars"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
               <li class="nav-item active">
                  <a class="nav-link" href="<?php echo base_url(''); ?>">Home</a>
               </li>
<<<<<<< HEAD
               <?php $top_cattegory = $this->front_model->get_top_category(); ?>
               <?php foreach($top_cattegory as $top_cat){ ?>
               <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('products/'.create_slug($top_cat->DeptTitle) .'?deptid='.$top_cat->id); ?>"><?php echo $top_cat->DeptTitle; ?></a>
               </li>
             <?php } ?>
            </ul>
           <form class="search-box" method="post" action="<?php echo base_url('Products/search');?>">
               <input class="form-control" type="search" name="search_data" placeholder="Search" aria-label="Search">
               <button class="btn" name="search" type="submit"><i class="fa fa-search"></i></button>
            </form>
            <ul class="list-inline navbar-right right-item desktop">
               <li class="list-inline-item"><a href="#"><i class="fa fa-heart"></i></a></li>
=======
             <?php foreach($data as $parents){  ?>
               <li class="nav-item">
              <!--  <a class="nav-link" href="<?php echo base_url()?>action=viewproducts&deptid=<?php echo $parents->id ?>"> -->
              <a class="nav-link" href="<?php echo base_url()?>product-listing/<?php echo $parents->id ?>"> <?php echo $parents->DeptTitle ?></a>
               </li>
               <?php }?>
            </ul>
            <form class="search-box">
               <input class="form-control" type="search" placeholder="Search" aria-label="Search">
               <button class="btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
            <ul class="list-inline navbar-right right-item desktop">
               <li class="list-inline-item"><a href="#"><i class="fa fa-heart"></i></a></li>
               <li class="list-inline-item"><a href="javascript:void(0)" onclick="openNav()" class="cart-bag"><i class="fa fa-shopping-cart"></i> <span class="badge">1</span></a></li>
>>>>>>> 717dfd12dadaf7fcd3d7adc2b2f8a31651363a89
            </ul>
         </div>
      </nav>
      <!--  end -->
      <!-- Mobile Responsive --->
      <div class="mobile-cart-section">
         <ul class="list-inline navbar-right right-item">
            <li class="list-inline-item"><a href="#"><i class="fa fa-bell"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-heart"></i></a></li>
<<<<<<< HEAD
=======
            <li class="list-inline-item"><a href="javascript:void(0)" onclick="openNav()" class="cart-bag"><i class="fa fa-shopping-cart"></i> <span class="badge">1</span></a></li>
>>>>>>> 717dfd12dadaf7fcd3d7adc2b2f8a31651363a89
         </ul>
      </div>
   </div>
</header>
