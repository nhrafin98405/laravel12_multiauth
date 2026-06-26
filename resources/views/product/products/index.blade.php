@include('product.master')

@section('content')

       <div class="card">
        <div class="card-body">
          <div class="customer-table">
            <div class="table-responsive white-space-nowrap">
               <table class="table align-middle">
                <thead class="table-light">
                  <tr>
                    <th>
                      <input class="form-check-input" type="checkbox">
                    </th>
                    <th>Order Id</th>
                    <th>Price</th>
                    <th>Customer</th>
                    <th>Payment Status</th>
                    <th>Completed Payment</th>
                    <th>Delivery Type</th>
                    <th>Date</th>
                  </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <td>
                       <input class="form-check-input" type="checkbox">
                     </td>
                     <td>
                      <a href="javascript:;">#2415</a>
                     </td>
                     <td>$98</td>
                     <td>
                      <a class="d-flex align-items-center gap-3" href="javascript:;">
                        <div class="customer-pic">
                          <img src="{{ asset('') }}assets/images/avatars/01.png" class="rounded-circle" width="40" height="40" alt="">
                        </div>
                        <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                      </a>
                     </td>
                     <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Completed<i class="bi bi-check2 ms-2"></i></span></td>
                     <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                     <td>Cash on delivery</td>
                     <td>Nov 12, 10:45 PM</td>
                   </tr>
                   <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                     <a href="javascript:;">#7845</a>
                    </td>
                    <td>$110</td>
                    <td>
                     <a class="d-flex align-items-center gap-3" href="javascript:;">
                       <div class="customer-pic">
                         <img src="{{ asset('') }}assets/images/avatars/02.png" class="rounded-circle" width="40" height="40" alt="">
                       </div>
                       <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                     </a>
                    </td>
                    <td><span class="lable-table bg-warning-subtle text-warning rounded border border-warning-subtle font-text2 fw-bold">Pending<i class="bi bi-info-circle ms-2"></i></span></td>
                    <td><span class="lable-table bg-primary-subtle text-primary rounded border border-primary-subtle font-text2 fw-bold">Completed<i class="bi bi-check2-all ms-2"></i></span></td>
                    <td>Cash on delivery</td>
                    <td>Nov 12, 10:45 PM</td>
                  </tr>
                  <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                     <a href="javascript:;">#5674</a>
                    </td>
                    <td>$86</td>
                    <td>
                     <a class="d-flex align-items-center gap-3" href="javascript:;">
                       <div class="customer-pic">
                         <img src="{{ asset('') }}assets/images/avatars/03.png" class="rounded-circle" width="40" height="40" alt="">
                       </div>
                       <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                     </a>
                    </td>
                    <td><span class="lable-table bg-primary-subtle text-primary rounded border border-primary-subtle font-text2 fw-bold">Completed<i class="bi bi-check2-all ms-2"></i></span></td>
                    <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                    <td>Cash on delivery</td>
                    <td>Nov 12, 10:45 PM</td>
                  </tr>
                  <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                     <a href="javascript:;">#6678</a>
                    </td>
                    <td>$78</td>
                    <td>
                     <a class="d-flex align-items-center gap-3" href="javascript:;">
                       <div class="customer-pic">
                         <img src="{{ asset('') }}assets/images/avatars/04.png" class="rounded-circle" width="40" height="40" alt="">
                       </div>
                       <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                     </a>
                    </td>
                    <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Paid<i class="bi bi-check2 ms-2"></i></span></td>
                    <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                    <td>Cash on delivery</td>
                    <td>Nov 12, 10:45 PM</td>
                  </tr>
                  <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                     <a href="javascript:;">#2367</a>
                    </td>
                    <td>$69</td>
                    <td>
                     <a class="d-flex align-items-center gap-3" href="javascript:;">
                       <div class="customer-pic">
                         <img src="{{ asset('') }}assets/images/avatars/05.png" class="rounded-circle" width="40" height="40" alt="">
                       </div>
                       <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                     </a>
                    </td>
                    <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                    <td><span class="lable-table bg-warning-subtle text-warning rounded border border-warning-subtle font-text2 fw-bold">Pending<i class="bi bi-info-circle ms-2"></i></span></td>
                    <td>Cash on delivery</td>
                    <td>Nov 12, 10:45 PM</td>
                  </tr>
                  <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                     <a href="javascript:;">#9870</a>
                    </td>
                    <td>$49</td>
                    <td>
                     <a class="d-flex align-items-center gap-3" href="javascript:;">
                       <div class="customer-pic">
                         <img src="{{ asset('') }}assets/images/avatars/06.png" class="rounded-circle" width="40" height="40" alt="">
                       </div>
                       <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                     </a>
                    </td>
                    <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                    <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Completed<i class="bi bi-check2 ms-2"></i></span></td>
                    <td>Cash on delivery</td>
                    <td>Nov 12, 10:45 PM</td>
                  </tr>
                  <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                     <a href="javascript:;">#3456</a>
                    </td>
                    <td>$65</td>
                    <td>
                     <a class="d-flex align-items-center gap-3" href="javascript:;">
                       <div class="customer-pic">
                         <img src="{{ asset('') }}assets/images/avatars/07.png" class="rounded-circle" width="40" height="40" alt="">
                       </div>
                       <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                     </a>
                    </td>
                    <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Completed<i class="bi bi-check2 ms-2"></i></span></td>
                    <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i class="bi bi-x-lg ms-2"></i></span></td>
                    <td>Cash on delivery</td>
                    <td>Nov 12, 10:45 PM</td>
                  </tr> 
                 </tbody>
               </table>
            </div>
          </div>
        </div>
      </div>
    
@endsection