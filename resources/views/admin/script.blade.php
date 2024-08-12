<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('admin/lib/chart/chart.min.js')}}"></script>
<script src="{{asset('admin/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('admin/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('admin/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('admin/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('admin/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<script src="https://kit.fontawesome.com/4d7be0e95f.js" crossorigin="anonymous"></script>

<!--sweet alert-->
<script type="text/javascript">
         function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);
            swal({
               title: "Apa kamu yakin menghapus ini?",
               text: "Kamu tidak bisa mengembalikannya jika sudah terhapus",
               icon: "warning",
               buttons: true,
               dangerMode: true,
            }).then((willDelete) => {
               if (willDelete) {
                  window.location.href = urlToRedirect;
               }
            });
         }
      </script>
      <!-- end sweet alert -->

<!-- Template Javascript -->
<script src="{{asset('admin/js/main.js')}}"></script>