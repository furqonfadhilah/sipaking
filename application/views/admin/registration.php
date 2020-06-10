<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 align-self-center">
            <center><img class="img-fluid  " src="<?= base_url('assets2/img/catcare.png');?>" width="800" height="500"></center>
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">CREATE ACCOUNT FOR <p>NEW ADMIN SIPAKING</h1>
              </div>


              <form class="user" method="post" action="<?= base_url('menu/registration'); ?>">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value="<?= set_value('name');?>">
                    <?= form_error('name','<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email');?>">
                  <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">  
                  Register Account
               </button>
                <hr>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
