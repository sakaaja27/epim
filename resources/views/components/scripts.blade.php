<!-- Preloader -->
<div id="preloader"></div>

<!-- Back To Top -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS -->
<script src="{{ asset('vendor') }}/purecounter/purecounter_vanilla.js"></script>
<script src="{{ asset('vendor') }}/aos/aos.js"></script>
<script src="{{ asset('vendor') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('vendor') }}/glightbox/js/glightbox.min.js"></script>
<script src="{{ asset('vendor') }}/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{ asset('vendor') }}/swiper/swiper-bundle.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- My Js -->
<script>
    // var link = document.getElementById("btn-guidebook");
    // link.click()

    /**
     * limit 2 mb
     */
    function validationFile(inputBtn) {
        if (typeof(inputBtn.files) != "undefined") {
            var size = parseFloat(inputBtn.files[0].size / (1024 * 1024)).toFixed(2);
            if (size > 2) {
                alert('File tidak boleh lebih dari 2 MB');
                console.log(inputBtn.value);
                inputBtn.value = null;
            }
        } else {
            alert("This browser does not support HTML5.");
        }
    }

    /**
     * limit input nomor hp
     */
    function limitnope(input) {
        const maxLength = 13;
        if (input.value.length > maxLength) {
            input.value = input.value.slice(0, maxLength);
        }
    }

    /**
     * Confirm pendaftaran
     */

    
    function confirmation(event) {
        if (confirm("Apakah yakin data yang anda masukkan sudah benar ?")) {
            document.querySelectorAll('[type=submit]').click();
        } else {
            event.preventDefault();
        }
    }

   
    /**
     * success pendaftaran
     */
    @if (Session::has('success'))
        Swal.fire({
            title: 'Success',
            text: 'Terimakasih telah mendaftar, selanjutnya silahkan masuk grup WA dengan klik OK atau copy link WA dibawah',
            icon: 'success',
            footer: '<button class="btn btn-success" onclick="linkwa()">Copy link WA</button>'
        }).then((result) => {
            if (result) {
                if ({{ Session::get('lomba') }} == 1) {
                    window.open('https://chat.whatsapp.com/Bwlzpe9T8K65lvkYYwfUkg');
                } else {
                    window.open('https://chat.whatsapp.com/HEr6MVQIQX33q3KtEC7WVK');
                }
            }
        });

        function copyToClipboard(text) {
            var input = document.createElement('input');
            input.setAttribute('value', text);
            document.body.appendChild(input);
            input.select();
            input.setSelectionRange(0, 99999); // Untuk perangkat mobile
            document.execCommand('copy');
            document.body.removeChild(input);
        }

        function linkwa() {
            if ({{ Session::get('lomba') }} == 1) {
                copyToClipboard("https://chat.whatsapp.com/Bwlzpe9T8K65lvkYYwfUkg");
                alert("Link berhasil disalin");
            } else {
                copyToClipboard("https://chat.whatsapp.com/HEr6MVQIQX33q3KtEC7WVK");
                alert("Link berhasil disalin");
            }
        }
    @endif
</script>
<script src="{{ asset('js') }}/main.js"></script>
<script defer src="{{ asset('js') }}/mainVideo.js"></script>
<script src="{{ asset('js') }}/countdown.js"></script>
</body>

</html>
