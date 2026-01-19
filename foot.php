<footer class="footer-lapascilacap">
    <div class="container py-5">
        <div class="row align-items-start">

            <!-- KIRI: Informasi -->
            <div class="col-md-6 text-black">
                <div class="footer-brand d-flex align-items-start gap-3 mb-3">
                    <img src="assets/img/logouptpas.png" class="footer-logo" alt="Lapas Cilacap" style="height: 45px">
                    <div>
                        <h6 class="fw-bold mb-1">Lembaga Pemasyarakatan</h6>
                        <h6 class="fw-bold mb-4">Kelas IIB Cilacap</h6>
                        <h6 class="fw-bold mb-3">Hak Cipta Lembaga Pemasyarakatan Kelas IIB Cilacap</h6>
                        <h6 class="fw-bold mb-5">Jl. Mataram 1, Cilacap, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53212</h6>
                        <!-- SOSIAL MEDIA -->
                            <h6 class="fw-bold mb-4">Ikuti Kami di kanal:</h6>
                            <div class="social-wrapper social-mobile-center">
                                <a href="#" class="social-icon" aria-label="Facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="https://x.com/lapascilacap_?t=TmybsyOWpPCIlAc913OAJw&s=09" class="social-icon" aria-label="Twitter">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                                <a href="https://www.instagram.com/lapascilacap_/" class="social-icon" aria-label="Instagram">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="https://www.youtube.com/@lapaskelasiibcilacap4611" class="social-icon" aria-label="YouTube">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                                <a href="https://www.tiktok.com/@lapascilacap?_r=1&_t=ZS-92BwEW04evv" class="social-icon" aria-label="TikTok">
                                    <i class="fa-brands fa-tiktok"></i>
                                </a>
                            </div>
                    </div>
                </div>
            </div>

            <!-- KANAN: PETA -->
            <div class="col-md-6 mt-4 mt-md-0">
                <h6 class="fw-bold text-black mb-3">Lokasi Kami</h6>

                <div class="map-footer">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.588870228673!2d109.00750507319354!3d-7.727181676571778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65128ffb1158f9%3A0xee8e7291932e5035!2sLapas%20Kelas%20IIB%20Cilacap!5e0!3m2!1sid!2sid!4v1765422212037!5m2!1sid!2sid"
                        loading="lazy"
                        allowfullscreen=""
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</footer>


<!--<div id="footer" style="background-color: #EAE0CF;">
    <h6 class="text-center">&#169; Lembaga Pemasyarakatan Kelas IIB Cilacap</h6>
</div>-->


<script type="text/javascript">
    function addToCart(product) {
        const isProductInCart = cart.some(item => item.id_barang === product.id_barang);

        if (!isProductInCart) {
            cart.push(product);
            localStorage.setItem('cart', JSON.stringify(cart));
        } else {
            alert('Produk sudah ada di keranjang!')
        }
    }

    function getCartFromLocalStorage() {
        const storedCart = localStorage.getItem('cart');
        return storedCart ? JSON.parse(storedCart) : [];
    }

    const cart = getCartFromLocalStorage();
</script>
