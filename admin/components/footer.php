<!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              <p>&copy; <script>document.write(new Date().getFullYear());</script>
              All Rights Reserved  by <a href="https://www.voteonline.com.ng" style="text-decoration: none;" target="_blank">Vote Online&trade;</a>
              </p>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.voteonline.com.ng" class="nav-link" target="_blank">Contact Support</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>

      </div>
  </div>
  <!--   Core   -->
  <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="./assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   voteonline JS   -->
  <script src="./assets/js/voteonline-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="./assets/js/custom.js"></script>

<script>
    if (queryParameters().editid){
        $('#editContestantsModal').modal('show');
        document.write('<?php createeditid();?>');
    }
</script>
</body>
</html>