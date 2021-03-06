<body style="background-color: #E5E5E5;">

    <div class="card">
        <div class="card-body">
            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100">

                        <form class="login100-form validate-form" method="post"
                            action="<?= base_url('auth/registration'); ?>">
                            <center class="mb-3">
                                <img src="<?= base_url('assets/'); ?>images/logo.png" alt="">
                            </center>
                            <!-- <span class="login100-form-title p-b-43">
						Login to continue
					</span> -->
                            <?= $this->session->flashData('message'); ?>
                            <label class="mt-2"><b>Nama Petugas</b></label>
                            <div class="wrap-input100 validate-input" data-validate="Masukan Nama Petugas">
                                <input class="input100" type="text" name="nama_petugas">
                                <span class="focus-input100"></span>
                                <?= form_error('username', '<small class="text-danger pl-3">,</small>'); ?>
                            </div>

                            <label class="mt-2"><b>Username</b></label>
                            <div class="wrap-input100 validate-input" data-validate="Masukan Username Anda">
                                <input class="input100" type="text" name="username">
                                <span class="focus-input100"></span>
                                <?= form_error('username', '<small class="text-danger pl-3">,</small>'); ?>
                            </div>

                            <label class="mt-2"><b>Password</b></label>
                            <div class="wrap-input100 validate-input" data-validate="Password is required">
                                <input class="input100" type="password" name="password1">
                                <span class="focus-input100"></span>
                                <?= form_error('password1', '<small class="text-danger pl-3">,</small>'); ?>
                            </div>

                            <label class="mt-2"><b>Ulangi Password</b></label>
                            <div class="wrap-input100 validate-input" data-validate="Password is required">
                                <input class="input100" type="password" name="password2">
                                <span class="focus-input100"></span>
                                <?= form_error('password2', '<small class="text-danger pl-3">,</small>'); ?>
                            </div>


                            <!-- <div class="flex-sb-m w-full p-t-3 p-b-32">

								<div>
									<a href="#" class="txt1 tsdcr">
										Lupa password ?
									</a>
								</div>
							</div> -->


                            <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn mt-3">
                                    Buat Akun
                                </button>
                            </div>
                            <div>
                                <a class="register100-form-btn mt-3" href="<?= base_url('auth/index'); ?>">
                                    Masuk
                                </a>
                            </div>
                        </form>

                        <div class="login100-more"
                            style="background-image: url('<?= base_url('assets/'); ?>images/log-ilus.png');">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>