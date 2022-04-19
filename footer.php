<footer>
  <div class="contaoner-fluid">
    <p class="copyright">

      Copyright ©<script>
        document.write(new Date().getFullYear());
      </script> All rights reserved | This website is made by <i>Mohit Harge</i> &nbsp;<a target="_blank" href="https://www.linkedin.com/in/mohitharge/"><i class="fa-brands fa-linkedin-in"></i></a>

    </p>
  </div>
</footer>


</body>

</html>
<script>
  $(document).ready(function() {
    var h = window.innerHeight;
    // alert(h);
    if (h <= 792) {
      $("footer").addClass("footer_position");
    } else {
      $("footer").removeClass("footer_position");
    }
  });
</script>