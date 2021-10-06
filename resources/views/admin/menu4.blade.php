<x-app-layout>

<main id="main">
<section id="userprocess" class="userprocess d-flex align-items-center" >
    <div class="container" >

      <header class="section-header"  data-aos="fade-up">
        <p>อัพโหลดผล</p>
        <div class="section-header-line"></div>
      </header>

        <div class="row justify-content-md-center" >
          <div class="col-lg-10 ">
            <div class="row justify-content-md-center">
              <div class="col-lg-12 mb-4">
                <!-- Tables -->
                <div class="card" >

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: #000;">เพิ่มวันนัดหมาย</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body col-lg-12">

                      <form method="post" enctype="multipart/form-data">
                        <div>
                          <label for="file" style="color: midnightblue;">ประเภท Report</label>
                          <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">Report1</option>
                            <option value="2">Report2</option>
                            <option value="3">Report3</option>
                          </select>                        </div>
                        <div>
                          <label for="file" style="color: midnightblue;">เลือกไฟล์ที่ต้องการอัพโหลด</label>
                          <input type="file" id="file" name="file" multiple>
                        </div>

    
                      </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                          <button type="button" class="btn btn-primary">อัพโหลดผล</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                

                  
                  <div class="table" data-aos="fade-up">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                          <th>ชื่อ - สกุล</th>
                          <th>เบอร์โทร</th>
                          <th >Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>วิศิษฐ์  สุนทร</td>
                          <td>064-196-8698</td>
                          <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <i class="bi bi-cloud-upload-fill"></i>
                    </button>                          </td>
                        </tr>
                        
                        <tr>
                          <td>วิศิษฐ์  สุนทร</td>
                          <td>064-196-8698</td>
                          <td>
                            <a class="btn btn-primary" href="#" role="button"><i class="bi bi-cloud-upload-fill"></i></a>
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

</main><!-- End #main -->
</x-app-layout>
