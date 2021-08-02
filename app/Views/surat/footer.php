
    <!-- Bootstrap core JavaScript-->
    <script src="../dist/vendor/jquery/jquery.min.js"></script>
    <script src="../dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../dist/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../dist/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../dist/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../dist/js/demo/chart-area-demo.js"></script>
    <script src="../dist/js/demo/chart-pie-demo.js"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="../dist/js/zoom.js"></script>

<!-- Bootstrap core JavaScript-->

    <!-- Page level plugins -->
    <!-- <script src="../dist/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../dist/vendor/datatables/dataTables.bootstrap4.min.js"></script> -->

    <!-- Page level custom scripts -->
    <script src="../dist/js/demo/datatables-demo.js"></script>

    <script src="https://js.pusher.com/beams/1.0/push-notifications-cdn.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
        // updating the view with notifications using ajax
        function load_notification(view = '')
        {
         $.ajax({
          url:"../user/notif",
          method:"POST",
          data:{view:view},
          dataType:"json",
          success:function(data)
          {
           $('.dropdown-item').html(data.notification);
           if(data.unseen_notification > 0)
           {
            $('.count').html(data.unseen_notification);
           }
          }
         });
        }
        load_notification();
        // submit form and get new records
        $('#comment_form').on('submit', function(event){
         event.preventDefault();
         if($('#subject').val() != '' && $('#comment').val() != '')
         {
          var form_data = $(this).serialize();
          $.ajax({
           url:"../ktp/urusktp",
           method:"POST",
           data:form_data,
           success:function(data)
           {
            $('#comment_form')[0].reset();
            load_notification();
           }
          });
         }
         else
         {
          alert("Subject & Comments Harus Diisi");
         }
        });
        // load new notifications
        $(document).on('click', '.dropdown-toggle', function(){
         $('.count').html('');
         load_notification('yes');
        });
        setInterval(function(){
         load_notification();
        }, 5000);
        });
    </script>

</body>

</html>