@extends('admin.main-layout')

@section('content')
  <div class="row">
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
      <div class="card border-0 shadow">
        <div class="card-body">
          <div class="row d-block d-xxl-flex align-items-center">
            <div class="col-12 col-xxl-6 px-xxl-0 mb-3 mb-xxl-0">
              <div id="chart-customers"></div>
            </div>
            <div class="col-12 col-xxl-6 ps-xxl-4 pe-xxl-0">
              <h2 class="fs-5 fw-normal mb-1">Users</h2>
              <h3 class="fw-extrabold mb-1">345k</h3><small class="d-flex align-items-center"><svg
                  class="icon icon-xxs text-gray-400 me-1" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                    clip-rule="evenodd"></path>
                </svg> Apr 1 - May 1</small>
              <div class="small d-flex mt-1"><svg class="icon icon-xs text-success" fill="currentColor"
                  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                    clip-rule="evenodd"></path>
                </svg>
                <div><span class="text-success fw-bolder me-1">18,2%</span> Since last month</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
      <div class="card border-0 shadow">
        <div class="card-body">
          <div class="row d-block d-xxl-flex align-items-center">
            <div class="col-12 col-xxl-6 px-xxl-0 mb-3 mb-xxl-0">
              <div id="chart-revenue"></div>
            </div>
            <div class="col-12 col-xxl-6 ps-xxl-4 pe-xl-0">
              <h2 class="fs-5 fw-normal mb-1">Documents</h2>
              <h3 class="fw-extrabold mb-1">$253,594</h3><small class="d-flex align-items-center"><svg
                  class="icon icon-xxs text-gray-400 me-1" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                    clip-rule="evenodd"></path>
                </svg> Apr 1 - May 1</small>
              <div class="small d-flex mt-1"><svg class="icon icon-xs text-danger" fill="currentColor"
                  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
                </svg>
                <div><span class="text-danger fw-bolder me-1">4,6%</span> Since last month</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-12 col-xl-4 mb-4">
      <div class="card border-0 shadow">
        <div class="card-body">
          <div class="row d-block d-sm-flex d-xl-block d-xxl-flex align-items-center">
            <div class="col-12 col-sm-6 col-xl-12 col-xxl-6 px-xxl-0 mb-3 mb-sm-0 mb-xl-3 mb-xxl-0">
              <div id="chart-users"></div>
            </div>
            <div class="col-12 col-sm-6 col-xl-12 col-xxl-6 ps-xxl-4 pe-xxl-0">
              <h2 class="fs-5 fw-normal mb-1">Roles</h2>
              <h3 class="fw-extrabold mb-1">12,5K</h3><small class="d-flex align-items-center"><svg
                  class="icon icon-xxs text-gray-400 me-1" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                    clip-rule="evenodd"></path>
                </svg> Apr 1 - May 1</small>
              <div class="small d-flex mt-1"><svg class="icon icon-xs text-success" fill="currentColor"
                  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                    clip-rule="evenodd"></path>
                </svg>
                <div><span class="text-success fw-bolder me-1">20%</span> Since last month</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
