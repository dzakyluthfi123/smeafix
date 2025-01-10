
<section class="contact-section">
        <div class="containerhubungikami">
           <div class="judul" style="color: black;">
    <h1>Hubungi Kami</h1>
    <div class="underline"></div>
</div>
            <br>
            <div class="contact-wrapper">
         
                <?php foreach ($kontak as $k): ?>
                    <div class="map" data-aos="fade-right">
                    <h3>Denah Lokasi</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.325756040856!2d109.13560527356633!3d-6.9708417682533526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fbee0f34bc473%3A0xe057c51467a0666e!2sSMK%20Negeri%201%20Slawi!5e0!3m2!1sid!2sid!4v1734193185095!5m2!1sid!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="contact-info" data-aos="fade-left">
                    <h3>Kontak</h3>
                  
                    <div class="contact-item">
                        <span class="icon">📧</span>
                        <div class="details">
                            <h4>Email</h4>
                            <p><?php echo $k->email; ?></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <span class="icon">📍</span>
                        <div class="details">
                            <h4>Alamat</h4>
                            <p><?php echo $k->alamat; ?></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <span class="icon">📞</span>
                        <div class="details">
                            <h4>Telepon</h4>
                            <p><?php echo $k->telepon; ?></p>
                        </div>
                    </div>
                
                <?php endforeach; ?>
           
            </div>
        </div>
    </section>
    <br>
