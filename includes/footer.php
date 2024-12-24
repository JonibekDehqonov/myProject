<footer>
    <div class="futerUser  mt-3" id="futerUser">
            <i class="fa fa-user " style="font-size:30px;color:#fff"></i>
        </div>

        <div class="home mt-3">
            <i class="fa fa-home" style="font-size:30px;color:#fff"></i>
        
        </div>
        <div class="layke mt-3">
            <i class="fa fa-heart" style="font-size:30px;color:#fff"></i>
        
        </div>
        <div class="down mt-3">
            <i class="fa fa-cart-arrow-down" style="font-size:30px;color:#fff"></i>
         
        </div>
    </footer>

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    <script>
        
    var messageText="<?= $_SESSION['status']?? ''; ?>"
      if (messageText !=''){
         Swal.fire({
            title: "Thanc you!",
            text: messageText ,
            icon: "soccess"
         });
         <?php unset($_SESSION['status']);?>
      }
         
    </script>
    
</body>

</html>