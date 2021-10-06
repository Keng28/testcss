<x-app-layout>

<main id="main">
<section id="userprocess" class="userprocess d-flex align-items-center" >
    <div class="container" >

      <header class="section-header"  data-aos="fade-up">
        <p>ข้อมูลแบบสำรวจผู้รับบริการ</p>
        <div class="section-header-line"></div>
      </header>

   
        <div class="row justify-content-md-center" >
          <div class="col-lg-10 ">
            <div class="row justify-content-md-center">
              <div class="col-lg-12 mb-4">
                <!-- Tables -->
                <div class="card" >
     
                  <div class="table" data-aos="fade-up">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                          <th>ลำดับที่</th>
                          <th>ชื่อ - สกุล</th>
                          <th>E-mail</th>
                          <th >Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php($i=1)
                      @foreach($listname as $row)
                        <tr>
                          <th>{{$i++}}</th>
                          <td>{{$row->name}}</td>
                          <td>{{$row->email}}</td>
                          <td>
                            <a class="btn btn-primary" href="{{url('user/menu2')}}" role="button"><i class="bi bi-eye-fill"></i></a>
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
  
            
            {{$listname}}
            </div>
          </div>
        </div>

    </div>

  </section><!-- End UserProcess -->
</main><!-- End #main -->
</x-app-layout>
