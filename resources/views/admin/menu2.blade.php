<x-app-layout>

<main id="main">
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
                        <i class="bi bi-plus-lg"></i> เพิ่มวันนัดหมาย
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

                      <form action="{{route('addCalender')}}" method="post">
                        @csrf
                        <div class="col-lg-12">
                          <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01">วันนัด</label>
                            </div>
                            <input type="date" id="date" name="date">
                          </div>
                        </div>
                        <div class="input-group mb-3 ">
                          <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">เวลานัด</label>
                          </div>
                          <input type="time" id="time" name="time">
                        </div>

                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon3">https://zoom.com/users/</span>
                          <input name="link"type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                      

                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                          <button type="submit" class="btn btn-primary">เพิ่มนัดหมาย</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </form>
                  
                  

                  
                  
                  
                  <div class="table" data-aos="fade-up">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                     

                        <tr>
                          <th scope="col">ลำดับ</th>
                          <th>วันนัด</th>
                          <th>เวลานัด</th>
                          <th>ชื่อ - สกุล</th>
                          <th >Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @php($i=1)
                      @foreach($calendar as $row)
                        <tr>
                          <th>{{$i++}}</th>
                          <td>{{$row->date}}</td>
                          <td>{{$row->time}}</td>
                          <td>{{$row->name}}</td>
                          <td>
                            <a class="btn btn-primary" href="#" role="button"><i class="bi bi-telephone-fill"></i></a>

                            <a class="btn btn-danger" href="#" role="button"><i class="bi bi-bill"></i></a>
                          </td>
                        </tr>
                        
                        
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!--Row-->
  {{$calendar}}
            
    
            </div>
          </div>
        </div>

    </div>

  </section><!-- End UserProcess -->
</main>
</x-app-layout>
