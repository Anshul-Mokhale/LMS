<footer>
    <div class="footer-class">

        <div class="footer-part-1">
            <div class="footer-part-upper">
                <img src={{ asset('img/LMS_logo.png') }} alt="logo">
                <h5>LMS</h5>
            </div>
            <p>Transform the educational experience with our Learning Management System. Designed for administrators,
                teachers, and students, our platform offers seamless course management, interactive tools, and real-time
                communication to enhance learning and teaching efficiency. Join us to elevate your institution's
                educational
                capabilities.</p>
        </div>
        <div class="footer-part-2">
            <h5>Links</h5>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </div>
        <div class="footer-part-3">
            <h5>Links</h5>
            <ul>
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="#">Terms of Services</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Usage Policy</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom-class">
        <p>Designed And Developed By <a href="https://anshul-mokhale.netlify.app">Anshul Mokhale</a> &copy; All Rights
            Reserved</p>
    </div>

</footer>



<script>
    window.addEventListener("load", () => {
        const loader = document.querySelector(".loader");

        loader.classList.add("loader--hidden");

        loader.addEventListener("transitionend", () => {
            document.body.removeChild(loader);
        });
    });
</script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/calender.js') }}"></script>
{{-- Bootstrap js --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/ca0110489d.js" crossorigin="anonymous"></script>
</body>

</html>
