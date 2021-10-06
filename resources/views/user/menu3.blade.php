<x-app-layout>

<main id="main">
<!-- ======= UserProcess Section ======= -->
<section id="userprocess" class="userprocess d-flex align-items-center" >
    <div class="container" >

      <header class="section-header"  data-aos="fade-up">
        <p>นัดหมาย</p>
        <div class="section-header-line"></div>
      </header>

        <div class="row justify-content-md-center" >
          <div class="col-lg-10 ">
            <div class="row justify-content-md-center">
              <div class="col-lg-12 mb-4">
                <!-- Tables -->
                <div class="card" >
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-end" data-bs-toggle="modal">
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-plus-lg"></i> เลือกวันนัด
                      </button>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel" style="color: #000;">เพิ่มวันนัดหมาย</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body col-lg-12">

                        <div class="col-lg-12">
                          <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01">วันนัด</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                              <option selected>Choose...</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                        </div>
                        <div class="input-group mb-3 ">
                          <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">เวลานัด</label>
                          </div>
                          <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                      

                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                          <button type="button" class="btn btn-primary">นัดหมาย</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  

                  
                  
                  
                  <div class="table" data-aos="fade-up">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                          <th>วันนัด</th>
                          <th>เวลานัด</th>
                          <th >Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>02-12-2021</td>
                          <td>13.00</td>
                          <td>
                            <a class="btn btn-danger" href="user.html" role="button"><i class="bi bi-trash-fill"></i></a>
                            <a class="btn btn-primary" href="user.html" role="button"><i class="bi bi-telephone-fill"></i></a>
                          </td>
                        </tr>
                        
                        <tr>
                          <td>02-12-2021</td>
                          <td>13.00</td>
                          <td>
                            <a class="btn btn-danger" href="user.html" role="button"><i class="bi bi-trash-fill"></i></a>
                            <a class="btn btn-primary" href="user.html" role="button"><i class="bi bi-telephone-fill"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!--Row-->
  
            
    
            </div>
          </div>
        </div>

    </div>

  </section><!-- End UserProcess -->
</main>
</x-app-layout>
