<x-app-layout>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center menubody">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center">

          <div class="row gy-4">
  
          <div class="col-lg-3 col-md-6 position-relative">
              <div class="menubody-box blue">
                <i class="bi bi-emoji-smile"></i>
                <div>
                  <a href="{{ route('listname')}}" class="stretched-link">ข้อมูลผู้รับบริการ</a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 position-relative">
              <div class="menubody-box blue">
                <i class="bi bi-headset" style="color: #15be56;"></i>
                <div>
                  <a href="{{ route('addCalenderindex')}}" class="stretched-link">นัดหมาย/ปรึกษา</a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 position-relative">
              <div class="menubody-box blue">
                <i class="bi bi-people" style="color: #bb0852;"></i>
                <div>
                  <a href="{{ route('menu7')}}" class="stretched-link">การแปลผล</a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 position-relative">
              <div class="menubody-box blue">
                <i class="bi bi-upload" style="color: #bb0852;"></i>
                <div>
                  <a href="{{ route('menu8')}}" class="stretched-link">อัพโหลดผล</a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

  </section><!-- End Hero -->

</x-app-layout>