    @extends('users.master')
    @section('title', 'Kontak - DPRD')

    @section('content')
    <!-- contacts-5-grid -->

    <div class="w3l-contact-10 py-5" id="contact">
        <div class="form-41-mian pt-lg-4 pt-md-3 pb-md-4">
            <div class="container">
                <div class="w3l-error-grid py-3 text-center mb-4">
                    <div class="center-align">
                        <h2>Hubungi Kami</h2>
                        <p>Jika Anda memiliki pertanyaan tentang kami, silakan untuk
                        menghubungi kami menggunakan formulir di bawah ini atau melalui Kontak yang tertera.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 form-inner-cont">
                        <form action="#" method="post" class="signin-form">
                            <div class="form-grids">
                                <div class="form-input">
                                    <input type="text" name="w3lName" id="w3lName" placeholder="Masukkan Nama*"
                                        required="" />
                                </div>
                                <div class="form-input">
                                    <input type="text" name="w3lSubject" id="w3lSubject" placeholder="Masukan Subjek "
                                        required />
                                </div>
                                <div class="form-input">
                                    <input type="email" name="w3lSender" id="w3lSender" placeholder="Masukkan Email *"
                                        required />
                                </div>
                                <div class="form-input">
                                    <input type="text" name="w3lPhone" id="w3lPhone"
                                        placeholder="Masukkan Nomor Telepon *" required />
                                </div>
                            </div>
                            <div class="form-input">
                                <textarea name="w3lMessage" id="w3lMessage" placeholder="Masukkan Pesan"
                                    required=""></textarea>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-style btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4 contacts-5-grid-main section-gap mt-lg-0 mt-5">
                        <div class="contacts-5-grid">
                            {{-- <h3 class="section-title-left mb-4"> Advertise with us</h3> --}}
                            <div class="map-content-5">
                                <section class="tab-content">
                                    <div class="contact-type">
                                        @foreach ($kontak as $args)
                                        <div class="address-grid mb-4">
                                            <h6>Alamat</h6>
                                            <p>{{ $args->alamat }}</p>
                                        </div>
                                        <div class="address-grid mb-4">
                                            <h6>Email DPRD</h6>
                                            <a href="mailto:{{ $args->emailsatu }}"
                                                class="link1">{{ $args->emailsatu }}</a>
                                        </div>
                                        <div class="address-grid mb-4">
                                            <h6>Email Sekwan</h6>
                                            <a href="mailto:{{ $args->emaildua }}"
                                                class="link1">{{ $args->emaildua }}</a>
                                        </div>
                                        <div class="address-grid mb-4">
                                            <h6>Email Admin</h6>
                                            <a href="mailto:{{ $args->emailtiga }}"
                                                class="link1">{{ $args->emailtiga }}</a>
                                        </div>
                                        <div class="address-grid">
                                            <h6>Nomor Telepon</h6>
                                            <a href="tel:{{ $args->telephone }}" class="link1">{{ $args->telephone }}</a>
                                        </div>
                                        @endforeach
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //contacts-5-grid -->
        </div>
    </div>

    @endsection
