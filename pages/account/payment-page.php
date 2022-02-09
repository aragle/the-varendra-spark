<!-- Payment Menu -->
<div class="sub-header bg-dark fs-6 fw-lighter">
    <a href="profile.php" class="sub-nav">Profile</a>
    <a href="courses.php" class="sub-nav">Courses</a>
    <a href="result.php" class="sub-nav">Result</a>
    <a class="sub-nav sub-nav-active">Payment</a>
</div>
<hr class="mt-0 mb-4">

<!-- Payment Body -->
<style>
.img-account-profile {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
    border-radius: 0.35rem;
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(33, 40, 50, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.table-billing-history th, .table-billing-history td {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    padding-left: 1.375rem;
    padding-right: 1.375rem;
}
.table > :not(caption) > * > *, .dataTable-table > :not(caption) > * > * {
    padding: 0.75rem 0.75rem;
    background-color: var(--bs-table-bg);
    border-bottom-width: 1px;
    box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}

tbody, td, tfoot, th, thead, tr{
    border-bottom: 1px dotted #555;
}

.border-start-primary {
    border-left-color: #0061f2 !important;
}
.border-start-secondary {
    border-left-color: #6900c7 !important;
}
.border-start-success {
    border-left-color: #00ac69 !important;
}
.border-start-lg {
    border-left-width: 0.25rem !important;
}
.h-100 {
    height: 100% !important;
}

.current-title{
    margin-top: 20px;
}
.bank-icon{
    height: 30px;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-lg-4 mb-4">
            <!-- Billing card 1-->
            <div class="card h-100 border-start-lg border-start-primary bg-dark text-white-50">
                <div class="card-body">
                    <div class="small text-muted">Amount (Unpaid)</div>
                    <div class="h3 current-title">৳ 23,273.00</div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <!-- Billing card 2-->
            <div class="card h-100 border-start-lg border-start-success bg-dark text-white-50">
                <div class="card-body">
                    <div class="small text-muted">Weiver</div>
                    <div class="h3 current-title">30% (Poor but meritorious)</div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <!-- Billing card 3-->
            <div class="card h-100 border-start-lg border-start-secondary bg-dark text-white-50">
                <div class="card-body">
                    <div class="small text-muted">Current Session</div>
                    <div class="h3 d-flex align-items-center current-title">Spring-2022</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Payment methods card-->
    <div class="card card-header-actions mb-4 bg-dark text-white-50">
        <div class="card-header">
            Payslip
        </div>
        <div class="card-body px-0">
            <!-- Payment method 1-->
            <div class="d-flex align-items-center justify-content-between px-4">
                <div class="d-flex align-items-center">
                     <!-- <i class="fab fa-cc-visa  cc-color-visa"></i> -->
                     <img src="global/assets/images/marcantile-bank.png" class="bank-icon" alt="Markentile Bank">
                    <div class="ms-4">
                        <div class="small">Mercantile Bank</div>
                        <div class="text-xs text-muted">Last Date - 29/02/2022</div>
                    </div>
                </div>
                <div class="ms-4 small">
                    <div class="badge bg-light text-dark me-3">Download</div>
                </div>
            </div>
            <hr>
            <!-- Payment method 2-->
            <div class="d-flex align-items-center justify-content-between px-4">
                <div class="d-flex align-items-center">
                    <!-- <i class="fab fa-cc-mastercard fa-2x cc-color-mastercard"></i> -->
                    <img src="global/assets/images/nrb-bank.png" class="bank-icon" alt="NRB Bank">
                    <div class="ms-4">
                        <div class="small">NRB Bank</div>
                        <div class="text-xs text-muted">Last Date - 29/02/2022</div>
                    </div>
                </div>
                <div class="ms-4 small">
                    <a class="badge bg-light text-dark me-3" href="#!">Download</a>
                </div>
            </div>
            <hr>
            <!-- Payment method 3-->
            <div class="d-flex align-items-center justify-content-between px-4">
                <div class="d-flex align-items-center">
                    <!-- <i class="fab fa-cc-amex fa-2x cc-color-amex"></i> -->
                    <img src="global/assets/images/bkash.png" class="bank-icon" alt="Bkash Pay Bill">
                    <div class="ms-4">
                        <div class="small">Mobile Financial Service (BKash or Rocket)</div>
                        <div class="text-xs text-muted">Last Date - 29/02/2022</div>
                    </div>
                </div>
                <div class="ms-4 small">
                    <a class="badge bg-light text-dark me-3" href="#!">Download</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Billing history card-->
    <div class="card mb-4 bg-dark text-white-50">
        <div class="card-header">Payment History</div>
        <div class="card-body p-0">
            <!-- Billing history table-->
            <div class="table-responsive table-billing-history">
                <table class="table mb-0  bg-dark text-white-50">
                    <thead>
                        <tr>
                            <th class="" scope="col">Session</th>
                            <th class="" scope="col">Amount</th>
                            <th class="" scope="col">Status</th>
                            <th class="" scope="col">Paid on</th>
                            <!-- <th class="border-gray-200" scope="col">Receipt</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Spring-22</td>
                            <td>৳23,273</td>
                            <td><span class="badge bg-light text-dark">Invoice</span></td>
                            <td>-</td>
                            <!-- <td><a class="badge bg-light text-dark me-3" href="#!">Download</a></td> -->
                        </tr>
                        <tr>
                            <td>Spring-20</td>
                            <td>৳12,350</td>
                            <td><span class="badge bg-success">Receipt</span></td>
                            <td>03/01/2020</td>
                            <!-- <td><a class="badge bg-light text-dark me-3" href="#!">Download</a></td> -->
                        </tr>
                        <tr>
                            <td>Fall-19</td>
                            <td>৳26,283</td>
                            <td><span class="badge bg-success">Receipt</span></td>
                            <td>12/12/2019</td>
                            <!-- <td><a class="badge bg-light text-dark me-3" href="#!">Download</a></td> -->
                        </tr>
                        <tr>
                            <td>Summer-19</td>
                            <td>৳33,260</td>
                            <td><span class="badge bg-success">Receipt</span></td>
                            <td>02/03/2019</td>
                            <!-- <td><a class="badge bg-light text-dark me-3" href="#!">Download</a></td> -->
                        </tr>
                        <tr>
                            <td>Spring-20</td>
                            <td>৳12,350</td>
                            <td><span class="badge bg-success">Receipt</span></td>
                            <td>03/01/2020</td>
                            <!-- <td><a class="badge bg-light text-dark me-3" href="#!">Download</a></td> -->
                        </tr>
                        <tr>
                            <td>Fall-19</td>
                            <td>৳26,283</td>
                            <td><span class="badge bg-success">Receipt</span></td>
                            <td>12/12/2019</td>
                            <!-- <td><a class="badge bg-light text-dark me-3" href="#!">Download</a></td> -->
                        </tr>
                        <tr>
                            <td>Summer-19</td>
                            <td>৳33,260</td>
                            <td><span class="badge bg-success">Receipt</span></td>
                            <td>02/03/2019</td>
                            <!-- <td><a class="badge bg-light text-dark me-3" href="#!">Download</a></td> -->
                        </tr>
                        <tr>
                            <td>Spring-20</td>
                            <td>৳12,350</td>
                            <td><span class="badge bg-success">Receipt</span></td>
                            <td>03/01/2020</td>
                            <!-- <td><a class="badge bg-light text-dark me-3" href="#!">Download</a></td> -->
                        </tr>
                        <tr>
                            <td>Fall-19</td>
                            <td>৳26,283</td>
                            <td><span class="badge bg-success">Receipt</span></td>
                            <td>12/12/2019</td>
                            <!-- <td><a class="badge bg-light text-dark me-3" href="#!">Download</a></td> -->
                        </tr>
                        <tr>
                            <td>Summer-19</td>
                            <td>৳33,260</td>
                            <td><span class="badge bg-success">Receipt</span></td>
                            <td>02/03/2019</td>
                            <!-- <td><a class="badge bg-light text-dark me-3" href="#!">Download</a></td> -->
                        </tr>
                        <tr>
                            <td>Summer-19</td>
                            <td>৳33,260</td>
                            <td><span class="badge bg-success">Receipt</span></td>
                            <td>02/03/2019</td>
                            <!-- <td><a class="badge bg-light text-dark me-3" href="#!">Download</a></td> -->
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>