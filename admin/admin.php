<?php
require ('./components/header.php');
require_once'./components/navbar.php'; 
?>



	<!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
     <div class="container-fluid">
      </div>
    </div>
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0 ">
              <div class="col addadmin">
                <h3 class="mb-0">List of Admin</h3>
                <button class="btn btn-icon btn-3 btn-info" type="button" data-toggle="modal" data-target="#addContestants">
                  <span class="btn-inner--text">Add admin</span>
                </button>
              </div>
              
                  
              <!-- Modal -->
              <div class="modal fade" id="addContestants" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      
                       <center><h3>Image dimension should be 1000px x 1000px <br>and size should not be higher than 1MB</center>
                        <div class="row">
                          <div class="col addcontestants">
                            <form>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="firstName" placeholder="First Name">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                  <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="validatedCustomFile" required="">
                                      <label class="custom-file-label" for="validatedCustomFile">Upload picture</label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                  <button type="button" class="btn btn-info">Add Contestant</button>
                                  </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Contestants</th>
                    <th scope="col">No. of vote</th>
                    <th scope="col">Status</th>
                    <th scope="col">Pseudo code</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="https://i.imgur.com/n1d2JNC.jpg">
                        </a>
                        <div class="media-body">
                          <span class="mb-0 text-sm">Queen Ken</span>
                        </div>
                      </div>
                    </th>
                    <td>
                     250
                    </td>
                    <td>
                      <span class="badge badge-dot">
                        <i class="bg-success"></i> approved
                      </span>
                    </td>
                    <td>
                      AD65
                    </td>
                    <td>
                     <button class="btn btn-icon btn-3 btn-info" type="button" data-toggle="modal" data-target="#modal-form">
                      <span class="btn-inner--icon"><i class="ni ni-ruler-pencil"></i></span>
                        <span class="btn-inner--text">Edit</span>
                    </button>

                    <button class="btn btn-icon btn-3 btn-danger" type="button">
                      <span class="btn-inner--icon"><i class="ni ni-archive-2"></i></span>
                        <span class="btn-inner--text">Trash</span>
                    </button>
                    </td>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>





































<!-- Footer -->
 <?php require('./components/footer.php'); ?>
<!-- End Footer -->